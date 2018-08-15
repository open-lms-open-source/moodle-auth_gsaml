<?php
/**
* Copyright (C) 2009  Blackboard Inc.
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
* 
* @copyright  Copyright (c) 2009 Blackboard Inc. (http://www.moodlerooms.com)
* @license    http://opensource.org/licenses/gpl-3.0.html     GNU Public License
* @author Chris Stones
*/
 //require_once('../config.php');
 global $CFG;

 // Absolutly necessary samllibs
 // if you have already defined this one THEN you have prob included the rest already
if ( !class_exists('gSimpleSAML_Utilities') ) {
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Utilities.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Configuration.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/SessionHandler.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/SessionHandlerPHP.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Session.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/MetaDataStorageSource.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/MetaDataStorageHandlerFlatFile.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/MetaDataStorageHandler.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Validator.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/xmlseclibs.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/AuthnRequest.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/AuthnResponse_abstract.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/AuthnResponse.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Logger.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/LoggingHandlerErrorLog.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/LoggingHandlerFile.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/LoggingHandlerSyslog.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/AttributeFilter.php');
     
    //Template
    require_once($CFG->dirroot.'/auth/gsaml/samllib/Template.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/HTTPPost.php');
    require_once($CFG->dirroot.'/auth/gsaml/samllib/HTTPRedirect.php');
}

/**
 * Accept a SAML Request and form a Response
 * This function is Google Specific
 *
 *
 * @global object $CFG
 * @global object $SESSION
 * @global object $USER
 * @param string $samldata a long encrypted string that was passed to the /login/index.php
 * @return mixed void or boolean depending on errors
 */
function gsaml_send_auth_response($samldata) {
    global $CFG,$SESSION,$USER;
	
    gSimpleSAML_Configuration::init($CFG->dirroot.'/auth/gsaml/config');
    $config   = gSimpleSAML_Configuration::getInstance();
    $metadata = gSimpleSAML_Metadata_MetaDataStorageHandler::getMetadataHandler();
    $session  = gSimpleSAML_Session::getInstance();
	
    try {
        $idpentityid = $metadata->getMetaDataCurrentEntityID('saml20-idp-hosted');
        $idmetaindex = $metadata->getMetaDataCurrentEntityID('saml20-idp-hosted', 'metaindex');
        $idpmetadata = $metadata->getMetaDataCurrent('saml20-idp-hosted');

        if (!array_key_exists('auth', $idpmetadata)) {
                throw new Exception('Missing mandatory parameter in SAML 2.0 IdP Hosted Metadata: [auth]');
        }

    } catch (Exception $exception) {
        gSimpleSAML_Utilities::fatalError($session->getTrackID(), 'METADATA', $exception);
    }

    if (!$config->getValue('enable.saml20-idp', false)) {
        gSimpleSAML_Utilities::fatalError($session->getTrackID(), 'NOACCESS');
    }

    $rawRequest = $samldata;

    if( !empty($SESSION->samlrelaystate)) {
            $relaystate = $SESSION->samlrelaystate;
    } else {
            $relaystate = NULL;
    }

    try {
        $decodedRequest = @base64_decode($rawRequest);
        if (!$decodedRequest) {
                throw new Exception('Could not base64 decode SAMLRequest GET parameter');
        }

        $samlRequestXML = @gzinflate($decodedRequest);
        if (!$samlRequestXML) {
                $error = error_get_last();
                throw new Exception('Could not gzinflate base64 decoded SAMLRequest: ' . $error['message'] );
        }
    } catch (Exception $e) {
        $a = $e->getMessage();
        print_error('errordecodingsamlrequest','auth_gsaml','', $a);
    }

    gSimpleSAML_Utilities::validateXMLDocument($samlRequestXML, 'saml20');
    $samlRequest = new gSimpleSAML_XML_SAML20_AuthnRequest($config, $metadata);
    $samlRequest->setXML($samlRequestXML);

    if (!is_null($relaystate)) {
            $samlRequest->setRelayState($relaystate);
    }

    // $samlRequest presenting the request object
    $authnrequest = $samlRequest;

    if($session == NULL) {
        debugging('No SAML Session gsaml_send_auth_response', DEBUG_DEVELOPER);
        return false; // if this func returns we Know it's an error
    }
	    
    if(!empty($USER->id)) {
            $username = $USER->username;
    } else {
            debugging('No User given to gsaml_send_auth_response', DEBUG_DEVELOPER);
    return false;
    }

    if( !$domain = get_config('auth/gsaml','domainname') ) {
        debugging('No domain set in gsaml_send_auth_response', DEBUG_DEVELOPER);
        return false; // if this func returns we Know it's an error
    }

    $attributes['useridemail'] =  array($username.'@'.$domain);
    $session->doLogin('login'); // was login
    $session->setAttributes($attributes);
    $session->setNameID(array(
    'value' => gSimpleSAML_Utilities::generateID(),
    'Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient'));
	

    $requestcache = array(
                    'RequestID'     => $authnrequest->getRequestID(),
                    'Issuer'        => $authnrequest->getIssuer(),
                    'ConsentCookie' => gSimpleSAML_Utilities::generateID(),
                    'RelayState'    => $authnrequest->getRelayState());

    try {
            $spentityid = $requestcache['Issuer'];
            $spmetadata = $metadata->getMetaData($spentityid, 'saml20-sp-remote');

            $sp_name = (isset($spmetadata['name']) ? $spmetadata['name'] : $spentityid);

            // Adding this service provider to the list of sessions.
            // Right now the list is used for SAML 2.0 only.
            $session->add_sp_session($spentityid);
		
            //I replaced $isPassive with isset($isPassive) to prevent notice on debug mode
            if (isset($isPassive)) {
                // Generate an SAML 2.0 AuthNResponse message
                //   With statusCode: urn:oasis:names:tc:SAML:2.0:status:NoPassive
                $ar = new gSimpleSAML_XML_SAML20_AuthnResponse($config, $metadata);
                $authnResponseXML = $ar->generate($idpentityid, $spentityid, $requestcache['RequestID'], null, array(), 'NoPassive');

                // Sending the AuthNResponse using HTTP-Post SAML 2.0 binding
                $httppost = new gSimpleSAML_Bindings_SAML20_HTTPPost($config, $metadata);
                $httppost->sendResponse($authnResponseXML, $idpentityid, $spentityid, $requestcache['RelayState']);
                exit;
            }
		
            /*
             * Attribute handling
             */
            $attributes = $session->getAttributes();
            $afilter = new gSimpleSAML_XML_AttributeFilter($config, $attributes);
            $afilter->process($idpmetadata, $spmetadata);
            $afilter->processFilter($idpmetadata, $spmetadata);

            $filteredattributes = $afilter->getAttributes();

            // Generate the SAML 2.0 AuthNResponse message
            $ar = new gSimpleSAML_XML_SAML20_AuthnResponse($config, $metadata);
            $authnResponseXML = $ar->generate($idpentityid, $spentityid, $requestcache['RequestID'], null, $filteredattributes);

            // clean the $SESSION->samlrelaystate so we don't accidently call it again
            unset($SESSION->samlrelaystate);

            // Sending the AuthNResponse using HTTP-Post SAML 2.0 binding
            $httppost = new gSimpleSAML_Bindings_SAML20_HTTPPost($config, $metadata);
            $httppost->sendResponse($authnResponseXML, $idmetaindex, $spentityid, $requestcache['RelayState']);
            die; // VERY IMPORTANT stops outputing the rest of the page.
        
	} catch(Exception $exception) {
            debugging('<pre>'.print_r($exception,true).'</pre>', DEBUG_DEVELOPER);
            return false;
	}
				
}
