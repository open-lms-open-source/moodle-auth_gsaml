<?php
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

$string['pluginname'] = 'Google SAML-auth';
$string['blockname'] = 'Google SAML-authenticatie';
$string['domainname'] = 'Domein';
$string['auth_gsamldescription'] = 'Met deze verificatie-invoegtoepassing kan Moodle zich eenmalig aanmelden met SAML SPS.';
$string['auth_gsamltitle'] = 'Google-authenticatie';
$string['cert'] = 'Certificaat';
$string['key'] = 'RSA-sleutel';
$string['domainnamestr'] = 'Domeinnaam';
$string['rsakeystr'] = 'RSA-sleutelbestand';
$string['desckeystr'] = 'Upload de RSA-sleutel (pem). Houd er rekening mee dat de Moodle SAML-service alleen RSA sleutels ondersteunt.';
$string['googauthconfstr'] = 'Configuratie van Google-verificatie';
$string['ssl_str'] = 'SSL-handtekeningcertificaat';
$string['desc_certstr'] = 'Upload het X.509-certificaat. Houd er rekening mee dat dit hetzelfde bestand is dat je ook naar Google zult uploaden.';
$string['setupinstrctstr'] = 'Installatie-instructies';
$string['mgadgetstr'] = 'Moodle-gadget';
$string['mgadgethelp'] = 'Help Moodle-gadget';
$string['googdiag'] = 'Diagnostische gegevens Google-integratie';
$string['googdebugopts'] = 'Zodra de configuratie is afgerond kun je je opnieuw aanmelden en een bezoek brengen aan';
$string['thediagnosticspage'] = 'de diagnostische pagina';
$string['notadminnopermin'] = 'Je bent geen beheerder. Je hebt geen toestemming om deze instellingen weer te geven.';
$string['nokeyuploaded'] = 'Geen sleutel geüpload';
$string['filesnotsaved'] = 'Bestanden zijn niet bewaard.';
$string['keypathnotsaved'] = 'Sleutelpad is niet bewaard.';
$string['uploadkeystr'] = 'Upload de sleutel';
$string['uploadkey'] = 'Upload sleutel';
$string['uploadstr'] = 'Uploaden';
$string['uploadthekey'] = 'Upload sleutel';
$string['gadgetinfostr'] = 'Gebruik de volgende URL om de Moodle-gadget toe te voegen aan de startpagina van Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Koppeling naar Google-instellingen';
$string['nodomainyet'] = 'Nog geen domein ingesteld';
$string['gsamlsetuptableinfo'] = '<ol><li>Stel de <b>Domeinnaam</b> in op de naam van je Google-servicedomein en klik op <b>Wijzigingen opslaan</b><br/><br/></li>
<li>Open de pagina Configuratiescherm Google Apps als beheerder in een nieuw venster (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Klik op het tabblad <b>Geavanceerde tools</b>.<br/><br/></li>
<li>Klik op de koppeling <b>Stel eenmalige aanmelding (SSO) in</b> naast Verificatie.<br/><br/></li>
<li>Selecteer eerst het vakje voor <b>Schakel eenmalige aanmelding in</b>.<br/><br/></li>
<li>Voer nu deze URL in het tekstveld <b>URL aanmeldingspagina</b> in.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Voer deze URL in het tekstveld <b>URL afmeldingspagina</b> in.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Voer deze URL in het tekstveld <b>Wijzig URL wachtwoord</b> in.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Genereer en upload een <b>Verificatiecertificaat naar Google (X.509-certificaat met de openbare sleutel)</b><br/><br/></li>
<li>Upload de persoonlijke sleutel en het certificaat ook naar Moodle en klik vervolgens op <b>Wijzigingen opslaan</b></b><br/></li></ol>';
$string['tomoodle'] = 'Naar Moodle';
$string['errusernotloggedin'] = 'Gebruiker kan niet worden aangemeld';
$string['pwdnotvalid'] = 'Wachtwoord is ongeldig';
$string['samlcodefailed'] = 'SAML-code mislukt. Schakel Fouten opsporen in om uit te zoeken waarom.';
$string['samlauthcodefailed'] = 'SAML-auth.code mislukt. Schakel Fouten opsporen in voor meer informatie.';
$string['sixcharmsg'] = 'Gebruikerswachtwoord moet voor Google-integratie langer zijn dan 6 tekens. Vraag de beheerder de instellingen van het sitebeleid aan te passen.';
$string['errordecodingsamlrequest'] = 'Probleem bij decoderen SAML-aanvraag of gzinflating (kan een fout in de HTTPS-instellingen zijn. Controleer de Google SSO-configuratie): {$a}';
$string['googsamldiag'] = 'Diagnostische gegevens Google-SAML';
$string['notadminnoperm'] = 'Je bent geen sitebeheerder. Je hebt geen toestemming om deze gegevens te bekijken';
$string['gdatanotconfig'] = 'GData-configuratietabel niet ingesteld.';
$string['googlesamlconfigdata'] = 'Google SAML-configuratiegegevens';
$string['gsamlconfignotset'] = 'Google SAML-configuratie is nog niet ingesteld';
$string['gdataconfignotset'] = 'GData-configuratietabel niet ingesteld';
$string['gdataconfig'] = 'GData-configuratie';
$string['gmailconfig'] = 'Gmail-configuratie';
$string['componentinstallcheck'] = 'Controle vooraf voor installatie component';
$string['gdatanotinstalled'] = 'GData-blok is niet geïnstalleerd\\n';
$string['gappsblockinstalled'] = 'GApps-blok geïnstalleerd\\n';
$string['gmailblocknotinstalled'] = 'Gmail-blok is niet geïnstalleerd';
$string['gmailblockinstalled'] = 'Gmail-blok geïnstalleerd\\n';
$string['gdataapitestresults'] = 'GData API-testresultaten';
$string['trytoinitgdataconnection'] = 'Bezig met verbinding maken tussen GData en Google<br/>';
$string['gsamlsuccess'] = 'Gelukt';
$string['gmailtestresults'] = 'Gmail-testresultaten';
$string['gmailtestwillnotrun'] = 'Gmail-test wordt niet uitgevoerd tenzij Moodle zich in de DEBUG_DEVELOPER-modus bevindt';
$string['obtainemailfeed'] = 'E-mailfeed verkrijgen voor gebruikersnaam:';
$string['currfileupload'] = 'Huidig bestand:';
$string['nonestr'] = 'Geen';
$string['privatekeystr'] = 'Persoonlijke sleutel';
$string['certificatestr'] = 'Certificaat';
$string['statustab'] = 'Status';
$string['logstab'] = 'SAML-logs';
$string['ssoteststab'] = 'SSO-tests';
$string['docstab'] = 'Documentatie';
$string['id'] = 'Id';
$string['time'] = 'Uur';
$string['userid'] = 'Gebruikers-ID';
$string['ip'] = 'IP-adres';
$string['course'] = 'Cursus';
$string['module'] = 'Module';
$string['cmid'] = 'cmid';
$string['action'] = 'Actie';
$string['url'] = 'URL';
$string['info'] = 'Informatie';
$string['contextinstanceid'] = 'Exemplaar-ID';
$string['courseid'] = 'Cursus-ID';
$string['eventname'] = 'Naam gebeurtenis';
$string['otherlog'] = 'Anders';
$string['useraccesedgservice'] = 'Gebruiker heeft eerst gservice geopend';
$string['userneedsredirect'] = 'Gebruiker heeft saml-aanvraag, maar heeft aanmelding/omleiding nodig';
$string['userislogged'] = 'Gebruiker is aangemeld en samlrequest';
$string['login'] = 'Login';
$string['config_gsaml'] = 'Google SAML configureren';
$string['config_gsaml_help'] = '<h2>Volledige installatie</h2>

<p>Voor het instellen van de volledige integratie van Google naar Moodle is een configuratie nodig. Dit Help-bestand
begeleidt je door het grootste deel van het proces om de Google-plugin voor verificatie te configureren en ervoor te zorgen dat het GData-blok en
Gmail-blok gereed zijn.</p>

<h4>Inhoudsopgave:</h4>
<ul>
<li><a href="#pre">Voorwaarden</a></li>
<li><a href="#status">Stappen</a></li>
<li><a href="#expect">Verwachte resultaten</a></li>
<li><a href="#consider">Overwegingen</a></li>
</ul>

<h4><a name="status" href="#status">Status Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Voorwaarden/aannames</a></h4>
<p>
<ol>
<li>Code voor GSAML, GAccess, Gmail, GData-code is geïnstalleerd</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (optioneel vanaf bèta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Stappen</a></h4>
<ol>
<li>Meld je aan bij Moodle als een beheerder</li>
<li>Klik op <b>Meldingen</b> om tabellen voor blokken bij te werken</li>
<li>Schakel de <b>Google-verificatie</b>-plugin in vanaf de beheerpagina Beheer plugins</li>
<li>Selecteer nu Gebruikersverificatie en ga naar <b>Google-verificatie</b>, er staan aanwijzingen op de pagina die je moet volgen.</li>
<li>Voer het domein van je Google Partnerpagina in</li>
<li>Upload het certificaat (voor meer informatie over het maken van een certificaat ga je naar <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-documentatie met betrekking tot het genereren van sleutels</a> )</li>
<li>Upload de persoonlijke sleutel (voor meer informatie over het maken van een persoonlijke sleutel ga je naar <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-documentatie met betrekking tot het genereren van sleutels</a>)</li>
<li>Klik op Opslaan</li>
<li>Volg de aanwijzingen voor het toevoegen van de juiste URL&apos;s aan de Google SSO-pagina</li>
<li>Selecteer het vakje op de Google-site om SSO in te schakelen</li>
<li>Zorg er op de Google-site voor dat je de Provisioning API hebt ingeschakeld, want anders worden er geen gebruikers bijgewerkt.</li>
<li>Controleer op de Google-site of Provisioning API is ingeschakeld</li>
<li>Op de Google-site moet je mogelijk meer gebruikersaccounts aanvragen</li>
<li>Ga terug naar de hoofdpagina van Moodle</li>
<li>Klik op Bewerken</li>
<li>Voeg de blokken voor GAccess, GMail en Gdata op de pagina toe.</li>
<li>Klik op <b>Instellingen</b> in het blok <b>Google Apps</b>. Vul de configuratiegegevens in.</li>
<li>Klik op de statuskoppeling om te controleren of het Google Apps-blok goed is ingesteld.</li>
<li>Ga naar Sitebeheer &gt; Beveiliging &gt; Sitebeleid</li>
<li>Schakel wachtwoordbeleid in</li>
<li>Stel de lengte van het wachtwoord in op 6 of meer (vereist volgens het wachtwoordbeleid van Google)</li>
<li>In het GData-blok moet je gebruikers toevoegen voor de sync. Doe dit door op de desbetreffende koppeling te klikken in het <b>Google Apps-
blok</b>. Het resultaat is beter zichtbaar als je de cron van het GData-blok instelt op 1 min.</li>
<li>Als je die Moodle-gebruikers in Google wilt uploaden, kun je de cron handmatig uitvoeren door naar admin/cron.php te gaan. De resultaten voor de sync zouden nu in de beeldschermtekst moeten worden weergegeven.
<b>Houd er rekening mee dat het synchroniseren van Moodle-gebruikers met Google vanaf deze bèta-versie <em>LANG</em> kan duren.</b></li>
</ol>

<h4><a name="pre" href="#expect">Verwachte resultaten</a></h4>
<ul class="alternate" type="square">
<li>Door op een koppeling van Google Service te klikken of services te bezoeken vanaf de Google Partner-pagina,
vindt verificatie tegen Moodle plaats.</li>
<li>De gebruiker moet zowel bij Moodle als bij Google Partner Services zijn aangemeld</li>
<li>Zie de <b>diagnostische pagina</b> in de GSAML-instellingen voor meer informatie over je installatie.</li>
</ul>


<h4><a name="pre" href="#consider">Overwegingen (vanaf BÈTA-versie)</a></h4>
<ul class="alternate" type="square">
<li>De GMail-feed wordt mogelijk niet gevonden. Dit kan worden veroorzaakt doordat het wachtwoord van de gebruiker niet overeenkomt met het wachtwoord van de Google-gebruiker.
In de toekomst zal dit geen probleem zijn. Zorg er nu voor dat gebruikers worden gesynchroniseerd met het Google Apps-blok. De e-mail zal worden bijgewerkt
bij aanmelding. In de toekomst worden ongelezen berichten in realtime bijgewerkt.</li>

<li>De locatie van de Google-plugin voor verificatie in de verificatievolgorde is belangrijk.
Vanaf dit moment moet dit het verificatietype van een gebruiker overschrijven wanneer een Moodle-gebruiker het wachtwoord verandert.
Dit gedrag kan van invloed zijn op MNet-gebruikers. Er is nog geen oplossing voor dit probleem gevonden.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostische gegevens';
$string['diagnostics_help'] = '<h2>Diagnostische gegevens Google-integratie</h2>
<p>De diagnostische pagina geeft informatie met betrekking tot de Gmail-, GData- en SAML-verbindingsstatus.
Alleen beheerders hebben toestemming om diagnosegegevens te bekijken.</p>

<h3>Inhoudsopgave:</h3>
<ul>
<li><a href="#setup">Informatie installatietabel</a></li>
<li><a href="#gdata">Status GData-verbinding</a></li>
<li><a href="#gmail">Test Gmail-blokverbinding</a></li>
<li><a href="#saml">Test SAML SSO-status</a></li>
</ul>

<h3><a name="setup" href="#setup">Informatie configuratietabel</a></h3>
<div class="indent">
Deze tabellen geven de huidige configuratie weer van de integratie van Moodle en Google. Zorg ervoor dat de waarden allemaal zijn ingesteld.
</div>

<h3><a name="gdata" href="#gdata">GData-verbinding</a></h3>
<div class="indent">
Het GData-blok in de map met blokken bevat de bibliotheken voor allerlei Google Services. Je moet bevestigen
dat deze in staat is verbinding te maken met de Google Services. Het kan zijn dat je de waarden op de pagina met GData-blokinstellingen moet aanpassen.
</div>

<h3><a name="gmail" href="#gmail">Test Gmail-blokverbinding</a></h3>
<div class="indent">
Momenteel zal het Gmail-blok alleen de ongelezen berichten van een gebruiker vernieuwen bij aanmelding. Je kunt
de test hier alleen uitvoeren als Fouten opsporen is ingeschakeld. Ondersteuning voor het weergeven van ongelezen berichten in realtime komt eraan.
</div>

<h3><a name="saml" href="#saml">Test SAML SSO-status</a></h3>
<div class="indent">
De SAML-statustest is een onafhankelijke controle van het SSO-autorisatieproces. Het is nog niet geïmplementeerd.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Sleutels';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO-sleutels</h3>
<p>Zowel Moodle als Google moeten in staat zijn om op een veilige manier toegang te verlenen tot belangrijke bronnen.
De beheerder moet een <b>verificatiecertificaat</b> genereren en een geformatteerd X.509-certificaat met een ingesloten
openbare sleutel voor Google uploaden.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-documentatie met betrekking tot het genereren van sleutels</a>
Houd er rekening mee dat de SAML Moodle SSO-service alleen <b>RSA-sleutels</b> gebruikt.
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
$string['mgadget'] = 'Moodle-gadget';
$string['mgadget_help'] = '<h2>Google naar Moodle-gadget</h2>

<p>Dit Help-bestand geeft een kort overzicht van de Google-gadget voor je Moodle-site</p>

<h3><a name="status" href="#status">De Moodle-gadget</a></h3>
<div class="indent">
De <em>Moodle-gadget</em> is een gadget die je op je Google Partner-startpagina kunt insluiten.
</div>


<p><b>Stappen voor installatie op een startpagina voor gebruikers</b></p>
<ol>
<li>Meld je aan bij Moodle</li>
<li>Klik op de <b>Google Partner-pagina</b> in het blok <b>Toegang Google Services</b> </li>
<li>Klik op koppeling <b>Items toevoegen</b></li>
<li>Klik op <b>Mijn URL toevoegen</b></li>
<li>Voer de URL van de Moodle-gadget in</li>
<li>De URL is iets als<br/><b>http://www.yourmoodledomain.org/auth/gsaml/moodlegadget.php</b>
<li>Je vindt deze in de instellingen voor <b>Google-verificatie</b> in het beheerblok</li>
<li>Nadat je de URL in het veld URL hebt gekopieerd, klik je op <b>Toevoegen</b></li>
<li>Klik op <b>Terug naar startpagina</b></li>
<li>Er moet nu een blok worden weergegeven met een koppeling naar je Moodle-site</li>
</ol>



<h3><a name="status" href="#status">Overwegingen (vanaf BÈTA-versie)</a></h3>
<div class="indent">
Dit is het bèta-prototype voor deze Google Moodle-gadget. In de toekomst heb je hier mogelijk veel meer aan.
Momenteel is er een bekende fout waarbij de gadget niet direct wordt bijgewerkt na installatie.
Ontwikkelaars zijn hiermee bezig.
</div>';
$string['event_user_authenticated'] = 'Met gebruikersverificatie';
