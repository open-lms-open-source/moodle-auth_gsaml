0<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @copyright  Copyright (c) 2023 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Autenticació SAML a Google';
$string['blockname'] = 'Autenticació SAML a Google';
$string['domainname'] = 'Domini';
$string['auth_gsamldescription'] = 'Aquesta extensió d\'autenticació permet a Moodle realitzar un inici de sessió únic amb SAML SPS.';
$string['auth_gsamltitle'] = 'Autenticació de Google';
$string['cert'] = 'Certificat';
$string['key'] = 'Clau RSA';
$string['domainnamestr'] = 'Nom de domini';
$string['rsakeystr'] = 'Fitxer clau RSA';
$string['desckeystr'] = 'Carregueu la clau RSA (pem) Tingueu en compte que el servei SAML de Moodle solament és compatible amb claus RSA signades.';
$string['googauthconfstr'] = 'Configuració de l’autenticació de Google';
$string['ssl_str'] = 'Certificat de signatura SSL';
$string['desc_certstr'] = 'Carrega el certificat X.509. Aquest és el mateix fitxer que carregareu a Google.';
$string['setupinstrctstr'] = 'Instruccions de configuració';
$string['mgadgetstr'] = 'Giny de Moodle';
$string['mgadgethelp'] = 'Ajuda del giny de Moodle';
$string['googdiag'] = 'Diagnòstic de la integració amb Google';
$string['googdebugopts'] = 'Un cop acabada la configuració, podeu tornar a iniciar la sessió i consultar';
$string['thediagnosticspage'] = 'La pàgina de diagnòstic';
$string['notadminnopermin'] = 'No sou administrador. No teniu permisos per visualitzar aquests paràmetres.';
$string['nokeyuploaded'] = 'No s\'ha carregar cap clau.';
$string['filesnotsaved'] = 'No s’han desat els fitxers.';
$string['keypathnotsaved'] = 'No s’ha desat el camí de la clau.';
$string['uploadkeystr'] = 'Carrega la clau';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Càrrega';
$string['uploadthekey'] = 'Carrega una clau';
$string['gadgetinfostr'] = 'Utilitzeu l\'URL següent per afegir el giny de Moodle a la pàgina d\'inici de Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Enllaç als paràmetres de Google';
$string['nodomainyet'] = 'Encara no s’ha establert cap domini';
$string['gsamlsetuptableinfo'] = '<ol><li>Establiu el <b>nom de domini</b> com al vostre nom de domini del servei de Google i feu clic a <b>Desa els canvis</b><br/><br/></li>
<li>En una nova finestra, obriu el panell de control de Google Apps com a administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Feu clic a la pestanya <b>Eines avançades</b>.<br/><br/></li>
<li>Feu clic a l’enllaç <b>Configura l’inici de sessió únic (SSO)</b> al costat de l’autenticació.<br/><br/></li>
<li>Primer comproveu la casella <b>Habilita l’inici de sessió únic</b>.<br/><br/></li>
<li>Ara inseriu aquest URL al camp de text <b>URL de la pàgina d’inici de sessió</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>inseriu aquest URL al camp de text <b>URL de la pàgina de tancament de sessió</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>inseriu aquest URL al camp de text <b>URL de canvia la contrasenya</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Genereu i pugeu un <b>certificat de verificació a Google (certificat X.509 que conté la clau pública)</b><br/><br/></li>
<li>Pugeu la clau privada i el certificat a Moodle també i després feu clic <b>Desa els canvis</b></b><br/></li></ol>';
$string['tomoodle'] = 'A Moodle';
$string['errusernotloggedin'] = 'No s’ha pogut iniciar la sessió d\'aquest usuari';
$string['pwdnotvalid'] = 'La contrasenya no és vàlida';
$string['samlcodefailed'] = 'El codi SAML no ha activat la depuració per esbrinar el motiu';
$string['samlauthcodefailed'] = 'El codi d’autenticació SAML no ha activat la depuració per obtenir més informació';
$string['sixcharmsg'] = 'La contrasenya de l’usuari ha de tenir més de 6 caràcters per a la integració amb Google. Demaneu a l’administrador que ajusti els paràmetres de la política del lloc';
$string['errordecodingsamlrequest'] = 'S’ha produït un problema en descodificar la sol·licitud SAML o gzinflating (pot ser un error de configuració d\'HTTPS; verifiqueu la configuració SSO de Google): {$a}';
$string['googsamldiag'] = 'Diagnòstic SAML de Google';
$string['notadminnoperm'] = 'No sou administrador del lloc. No teniu permisos per visualitzar aquesta informació.';
$string['gdatanotconfig'] = 'No s’ha establert la taula de configuració de GData.';
$string['googlesamlconfigdata'] = 'Dades de configuració SAML de Google';
$string['gsamlconfignotset'] = 'Encara no s’ha establert la configuració SAML de Google';
$string['gdataconfignotset'] = 'No s’ha establert la taula de configuració de GData.';
$string['gdataconfig'] = 'Configuració de GData';
$string['gmailconfig'] = 'Configuració de Gmail';
$string['componentinstallcheck'] = 'Comprovació prèvia a la instal·lació de components';
$string['gdatanotinstalled'] = 'El bloc GData no està instal·lat\\n';
$string['gappsblockinstalled'] = 'El bloc GApps està instal·lat\\n';
$string['gmailblocknotinstalled'] = 'El bloc Gmail no està instal·lat';
$string['gmailblockinstalled'] = 'El bloc Gmail està instal·lat\\n';
$string['gdataapitestresults'] = 'Resultats de la prova d\'API de GData';
$string['trytoinitgdataconnection'] = 'S’està intentant iniciar una connexió de GData a Google<br/>';
$string['gsamlsuccess'] = 'S\'han fet correctament les assignacions';
$string['gmailtestresults'] = 'Resultats de la prova de Google';
$string['gmailtestwillnotrun'] = 'La prova de Gmail no s’executarà si no és que Moodle es troba en mode DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Obtenció de canal de continguts de correu electrònic per al nom d\'usuari:';
$string['currfileupload'] = 'Fitxer actual:';
$string['nonestr'] = 'Ningun';
$string['privatekeystr'] = 'Clau privada';
$string['certificatestr'] = 'Certificat';
$string['statustab'] = 'Estat';
$string['logstab'] = 'Registres SAML';
$string['ssoteststab'] = 'Proves SSO';
$string['docstab'] = 'Documentació';
$string['id'] = 'Identificador';
$string['time'] = 'Hora';
$string['userid'] = 'ID d’usuari';
$string['ip'] = 'Adreça IP';
$string['course'] = 'Curs';
$string['module'] = 'Mòdul';
$string['cmid'] = 'cmid';
$string['action'] = 'Acció';
$string['url'] = 'URL';
$string['info'] = 'Informació';
$string['contextinstanceid'] = 'Identificador d’instància';
$string['courseid'] = 'ID del curs';
$string['eventname'] = 'Nom de l\'esdeveniment';
$string['otherlog'] = 'Un altre';
$string['useraccesedgservice'] = 'L’usuari ha accedit primer a gservice';
$string['userneedsredirect'] = 'L’usuari té una sol·licitud de saml però necessita iniciar sessió que el redirigeixin';
$string['userislogged'] = 'L’usuari ha iniciat sessió i té una sol·licitud saml';
$string['login'] = 'Inici de sessió';
$string['config_gsaml'] = 'Configuració de SAML de Google';
$string['config_gsaml_help'] = '<h2>Configuració completa</h2>

<p>Configurar Google per complet a l’integració Moodle requereix una mica de configuració. Aquest fitxer d’ajuda us
guiarà per la major part del procés per deixar el connector d\'autenticació de Google així com el bloc GData i
el bloc Gmail a punt.</p>

<h4>Índex:</h4>
<ul>
<li><a href="#pre">Condicions prèvies</a></li>
<li><a href="#status">Passos</a></li>
<li><a href="#expect">Resultats esperats</a></li>
<li><a href="#consider">Consideracions</a></li>
</ul>

<h4><a name="status" href="#status">Estat de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Condicions/suposicions</a></h4>
<p>
<ol>
<li>Haver instal·lat GSAML, GAccess, Gmail i el codi GData</li>
<ul>
<li>auth/gsaml</li>
<li>blocs/gmail</li>
<li>blocs/gdata</li>
<li>blocs/gaccess</li>
<li>blocs/mgadget (opcional a partir de beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Passos</a></h4>
<ol>
<li>Inicieu sessió a Moodle com a administrador</li>
<li>Feu clic a <b>Notificacions</b> per actualitzar taules de blocs</li>
<li>Habiliteu el connector d’<b>autenticació de Google</b> des de la pàgina d’administració de Gestiona connectors</li>
<li>Ara, Selecciona usuaris d’autenticació va a l’<b>autenticació de Google</b> on hi duria haver indicacions de la pàgina que s’ha de seguir.</li>
<li>Introduïu el vostre domini de pàgina de soci de Google</li>
<li>Pugeu el certificat (per obtenir més informació sobre la creació d\'aquesta <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google sobre la creació de claus</a> )</li>
<li>Pugeu la clau privada (per obtenir més informació sobre la creació d\'aquesta visita <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google sobre la creació de claus</a> )</li>
<li>Feu clic a Desa</li>
<li>Seguiu les indicacions per afegir els URL adequats a la pàgina d’inici de sessió únic de Google</li>
<li>Feu clic a la casella de control del lloc de Google per permetre l’inici de sessió únic</li>
<li>Al lloc de Google assegureu-vos de permetre actualitzar l’API de subministrament o no s’actualitzarà cap usuari.</li>
<li>Al lloc de Google assegureu-vos d’habilitar el subministrament d’API</li>
<li>Al lloc de Google potser necessitareu demanar més comptes d\'usuari</li>
<li>Torna a la pàgina principal de Moodle</li>
<li>Fes clic a Edita</li>
<li>Afegiu els blocas de GAccess, Gmail i GData a la pàgina.</li>
<li> Feu clic a <b>Configuració</b> al bloc de <b>Google Apps</b>. Empleneu la informació de configuració.</li>
<li>Feu clic a l’enllaç d’estat per confirmar que el vostre bloc de Google Apps s’ha configurat correctament.</li>
<li>Aneu a Administració del lloc &gt; Seguretat &gt; Polítiques del lloc</li>
<li>Consulteu la política de contrasenyes</li>
<li>Establiu la longitud de la contrasenya com a 6 o superior (necessària per a la política de contrasenyes de Google)</li>
<li>Al bloc de GData cal afegir usuaris per sincronitzar. Per fer això feu clic als usuaris afegits per sincronitzar l’enllaç al bloc <b>Google Apps
</b>. Ajuda a veure el resultat si establiu      al bloc GData cron com a 1 min.</li>
<li>Per pujar a aquells usuaris de Moodle a Google, podeu executar el cron manualment visitant admin/cron.php. Els resultats per a la sincronització haurien d’aparèixer a la lectura.
<b>Aneu amb compte, a partir d’aquest beta, la sincronització d’usuaris de Moodle amb Google pot trigar <em>MOLT</em> de temps.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultats esperats</a></h4>
<ul class="alternate" type="square">
<li>Si feu clic als enllaços del servei de Google o els serveis de visita de la pàgina de soci de Google
Autenticarà front a Moodle.</li>
<li>L’usuari ha d’iniciar sessió en Moodle i en els serveis de soci de Google</li>
<li>Vegeu la <b>pàgina de diagnostics</b> a la configuració de GSAML per obtenir més informació sobre la vostra configuració.</li>
</ul>


<h4><a name="pre" href="#consider">Consideracions (a partir de la versió BETA)</a></h4>
<ul class="alternate" type="square">
<li>És possible que no es trobi el canal de Gmail. Probablement això es deu al fet que la contrasenya de l’usuari no coincideix amb la contrasenya d’usuari de Google.
En el futur, això no serà un problema. Ara per ara assegureu-vos de sincronitzar els usuaris amb el bloc de Google Apps. El correu electrònic s\'actualitzarà
en iniciar sessió. En el futur, els missatges no llegits haurien d’actualitzar-se en temps real.</li>

<li>La ubicació del connector d’autenticació de Google a l’ordre d’autenticació és important.
A partir d’aquest moment, ha de sobreescriure el tipus d’autorització d’un usuari quan un usuari de Moodle canvia les contrasenyes.
Aquest comportament pot afectar els usuaris de MNet. Encara no s\'ha trobat una solució per a aquest problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnòstic';
$string['diagnostics_help'] = '<h2>Diagnòstic de la integració amb Google</h2>
<p>La pàgina de diagnòstics revelarà informació sobre l\'estat de connexió de Gmail, GData i SAML.
Només els administradors tenen permís per veure informació de diagnòstic.</p>

<h3>Índex:</h3>
<ul>
<li><a href="#setup">Informació de la taula de configuració</a></li>
<li><a href="#gdata">Estat de connexió de GData</a></li>
<li><a href="#gmail">Prova de connexió del bloc de Gmail</a></li>
<li><a href="#saml">Prova d\'estat de SSO de SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informació de la taula de configuració</a></h3>
<div class="indent">
Aquestes taules representen la configuració actual de la integració de Moodle a Google. Assegureu-vos que els valors estan tots establerts.
</div>

<h3><a name="gdata" href="#gdata">Connexió GData</a></h3>
<div class="indent">
El bloc GData situat a la carpeta de blocs conté les biblioteques de diversos serveis de Google. Cal confirmar
que sigui capaç de connectar als serveis de Google. És possible que necessiteu ajustar els valors a la pàgina de configuració del bloc de GData.
</div>

<h3><a name="gmail" href="#gmail">Prova de connexió del bloc de Gmail</a></h3>
<div class="indent">
En el moment actual, el bloc Gmail només actuaitzarà els usuaris que no llegeixen missatges després d’iniciar sessió. Només
podreu executar la prova aquí si es activa la depuració. La compatibilitat per veure missatges no llegits en temps real estarà llesta aviat.
</div>

<h3><a name="saml" href="#saml">Prova d\'estat de SSO de SAML</a></h3>
<div class="indent">
La prova d\'estat SAML és una comprovació independent del procés d\'autorització de l’SSO. Encara no s\'ha implementat.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Claus';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Claus d’SSO de Google</h3>
<p>Tant Moodle com Google han de poder autoritzar de manera segura l\'accés a recursos importants.
L’administrador ha de generar un <b>certificat de verificació</b> i pujar a Google un certificat X.509 formatat amb una
clau pública incrustada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google referent a la generació de claus</a>
Tingueu en compte que el servei d’SSO de SAML a Moodle només utilitza <b>claus RSA.</b>
</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps Status</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificate</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Giny de Moodle';
$string['mgadget_help'] = '<h2>Giny de Google a Moodle</h2>

<p>Aquest fitxer d’ajuda proporciona una breu revisió del giny de Google per al vostre lloc de Moodle</p>

<h3><a name="status" href="#status">El giny de Moodle</a></h3>
<div class="indent">
El <em>giny de Moodle</em> és un giny que podeu incrustar a la vostra pàgina d’inici de soci de Google.
</div>


<p><b>Els passos per instal·lar-ho a una página d’inici d’usuaris</b></p>
<ol>
<li>Inicieu sessió a Moodle</li>
<li>Feu clic a la <b>pàgina d’inici de soci de Google</b> al bloc d’<b>accés als serveis de Google</b></li>
<li>Feu clic a l’enllaç de <b>material addicional</b></li>
<li>Feu clic a <b>afegeix el meu url</b></li>
<li>Entra a l\'URL del giny de Moodle</li>
<li>L’URL és una cosa així<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Es pot trobar a la configuració d’<b>autenticació de Google</b> del bloc d’administració</li>
<li>després de copiar l\'url al camp url. Feu clic a <b>AFEGEIX</b></li>
<li>Feu clic a la <b>pàgina d’inici</b></li>
<li>Ara hauríeu de veure un bloc que conté un enllaç al vostre lloc de Moodle</li>
</ol>



<h3><a name="status" href="#status">Consideracions (a partir del llançament BETA)</a></h3>
<div class="indent">
Aquest és el prototip beta d’aquest giny de Moodle Google. En el futur pot ser molt més útil.
Actualment hi ha un error conegut sobre el giny que no es pot actualitzar immediatament després de la seva instal·lació.
Els desenvolupadors ho estan investigant.
</div>';
$string['event_user_authenticated'] = 'Usuari autenticat';
