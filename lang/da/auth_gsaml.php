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

$string['pluginname'] = 'Google SAML-godk.';
$string['blockname'] = 'Google SAML-godkendelse';
$string['domainname'] = 'Domæne';
$string['auth_gsamldescription'] = 'Med dette godkendelsesplugin kan Moodle benytte enkeltlogon med SAML SPS.';
$string['auth_gsamltitle'] = 'Google-godkendelse';
$string['cert'] = 'Certifikat';
$string['key'] = 'RSA-nøgle';
$string['domainnamestr'] = 'Domænenavn';
$string['rsakeystr'] = 'RSA-nøglefil';
$string['desckeystr'] = 'Upload RSA-nøglen (pem). Vær opmærksom på, at Moodle SAML-tjenesten kun understøtter RSA-signerede nøgler.';
$string['googauthconfstr'] = 'Google-godkendelseskonfiguration';
$string['ssl_str'] = 'SSL-signering af certifikat';
$string['desc_certstr'] = 'Upload X.509-certifikatet. Vær opmærksom på, at dette er den samme fil, som du også skal uploade til Google.';
$string['setupinstrctstr'] = 'Instruktioner til konfiguration';
$string['mgadgetstr'] = 'Moodle Gadget';
$string['mgadgethelp'] = 'Moodle Gadget Hjælp';
$string['googdiag'] = 'Google Integration Diagnostics';
$string['googdebugopts'] = 'Når du er færdig med at konfigurere, kan du logge på igen og besøge';
$string['thediagnosticspage'] = 'Siden Diagnosticering';
$string['notadminnopermin'] = 'Du er ikke administrator. Du har ikke tilladelse til at få vist disse indstillinger.';
$string['nokeyuploaded'] = 'Der blev ikke uploadet nogen nøgle';
$string['filesnotsaved'] = 'Filerne blev ikke gemt.';
$string['keypathnotsaved'] = 'Nøglesti er ikke gemt.';
$string['uploadkeystr'] = 'Upload nøglen';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Upload';
$string['uploadthekey'] = 'Upload nøgle';
$string['gadgetinfostr'] = 'Brug følgende URL til at føje Moodle Gadget til din Google-startside<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link til Google-indstillinger';
$string['nodomainyet'] = 'Domæne ikke indstillet endnu';
$string['gsamlsetuptableinfo'] = '<ol><li>Angiv <b>Domænenavn</b> på domænenavnet for din Google-tjeneste, og klik derefter på <b>Gem ændringer</b><br/><br/></li>
<li>Åbn siden Google Apps-kontrolpanel i et nyt vindue som administrator (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Klik på fanen <b>Avancerede værktøjer</b>.<br/><br/></li>
<li>Klik på linket <b>Opsætning af enkeltlogon (SSO)</b> ved siden af Godkendelse.<br/><br/></li>
<li>Markér først afkrydsningsfeltet <b>Aktivér enkeltlogon</b>.<br/><br/></li>
<li>Indsæt derefter denne URL-adresse i tekstfeltet <b>URL til logonside</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Indsæt denne URL i tekstfeltet <b>URL til log ud-siden</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Indsæt denne URL i tekstfeltet <b>URL til ændring af adgangskode</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Generér og upload et <b>Bekræftelsescertifikat til Google (X.509-certifikat, der indeholder den offentlige nøgle)</b><br/><br/></li>
<li>Upload også den private nøgle og Moodle-certifikatet, og klik derefter på <b>Gem ændringer</b></b><br/></li></ol>';
$string['tomoodle'] = 'Til Moodle';
$string['errusernotloggedin'] = 'Bruger blev ikke logget på';
$string['pwdnotvalid'] = 'Adgangskode er ikke gyldig';
$string['samlcodefailed'] = 'SAML-kode mislykkedes, slå fejlfinding til for at finde ud af årsagen';
$string['samlauthcodefailed'] = 'SAML-godkendelseskode mislykkedes, slå fejlfinding til for yderligere oplysninger';
$string['sixcharmsg'] = 'Brugeradgangskode skal være længere end 6 tegn for Google Integration. Anmod administratoren om at justere webstedets politikindstillinger';
$string['errordecodingsamlrequest'] = 'Problem med afkodning af SAML-anmodning eller gzinflating (kan være en fejl i HTTPS-indstillinger, kontrollér din Google SSO-konfiguration): {$a}';
$string['googsamldiag'] = 'Diagnosticering for Google SAML';
$string['notadminnoperm'] = 'Du er ikke webstedsadministrator. Du har ikke tilladelse til at få vist disse oplysninger.';
$string['gdatanotconfig'] = 'GData-konfigurationstabel er ikke angivet.';
$string['googlesamlconfigdata'] = 'Google SAML-konfigurationsdata';
$string['gsamlconfignotset'] = 'Google SAML-konfiguration er endnu ikke angivet';
$string['gdataconfignotset'] = 'GData-konfigurationstabel er ikke angivet';
$string['gdataconfig'] = 'GData-konfiguration';
$string['gmailconfig'] = 'Gmail-konfiguration';
$string['componentinstallcheck'] = 'Kontrol inden komponentinstallation';
$string['gdatanotinstalled'] = 'GData-blok er ikke installeret\\n';
$string['gappsblockinstalled'] = 'GApps-blok er installeret\\n';
$string['gmailblocknotinstalled'] = 'Gmail-blok er ikke installeret';
$string['gmailblockinstalled'] = 'Gmail-blok er installeret\\n';
$string['gdataapitestresults'] = 'Resultater af GData API-test';
$string['trytoinitgdataconnection'] = 'Prøver at skabe forbindelse mellem GData og Google<br/>';
$string['gsamlsuccess'] = 'Gennemført';
$string['gmailtestresults'] = 'Resultater af Gmail-test';
$string['gmailtestwillnotrun'] = 'Gmail-test kan ikke køres, medmindre Moodle er i tilstanden DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Henter e-mailfeed for brugernavn:';
$string['currfileupload'] = 'Aktuel fil:';
$string['nonestr'] = 'Ingen';
$string['privatekeystr'] = 'Privat nøgle';
$string['certificatestr'] = 'Certifikat';
$string['statustab'] = 'Status';
$string['logstab'] = 'SAML-logfiler';
$string['ssoteststab'] = 'SSO-test';
$string['docstab'] = 'Dokumentation';
$string['id'] = 'Id';
$string['time'] = 'Klokkeslæt';
$string['userid'] = 'Bruger-id';
$string['ip'] = 'IP-adresse';
$string['course'] = 'Kursus';
$string['module'] = 'Modul';
$string['cmid'] = 'cmid';
$string['action'] = 'Handling';
$string['url'] = 'Webadresse';
$string['info'] = 'Oplysninger';
$string['contextinstanceid'] = 'Forekomst-id';
$string['courseid'] = 'Kursus-id';
$string['eventname'] = 'Begivenhedsnavn';
$string['otherlog'] = 'Andet';
$string['useraccesedgservice'] = 'Brugeren er gået ind på gservice først';
$string['userneedsredirect'] = 'Brugeren har saml-anmodning, men skal bruge login/omdirigering';
$string['userislogged'] = 'Brugeren er logget ind og saml-anmodning';
$string['login'] = 'Log på';
$string['config_gsaml'] = 'Konfiguration af Google SAML';
$string['config_gsaml_help'] = '<h2>Færdiggør Opsætning</h2>

<p>Opsætning af den komplette Google til Moodle-integration kræver en smule konfiguration. Denne hjælpefil har til formål at
føre dig gennem det meste af processen med at få Googles godkendelsesplugin konfigureret og at få klargjort GData-blokken og
Gmail-blokken.</p>

<h4>Indholdsfortegnelse:</h4>
<ul>
<li><a href="#pre">Forudsætninger</a></li>
<li><a href="#status">Trin</a></li>
<li><a href="#expect">Forventede resultater</a></li>
<li><a href="#consider">Overvejelser</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps-status</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Forudsætninger/antagelser</a></h4>
<p>
<ol>
<li>GSAML, GAccess, Gmail, GData-kode er installeret</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (valgfri funktion fra og med beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Trin</a></h4>
<ol>
<li>Log på Moodle som administrator</li>
<li>Klik på <b>Notifikationer</b> for at opdatere bloktabellerne</li>
<li>Aktivér plugin&apos;et <b>Google-godkendelse</b> fra administratorsiden Administrér plugins</li>
<li>Vælg derefter Brugergodkendelse, og gå til <b>Google-godkendelse</b>. Der bør være en vejledning på siden, som du kan følge.</li>
<li>Indtast dit Google-partnersidedomæne</li>
<li>Upload certifikat (få flere oplysninger om oprettelse af dette på <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation vedrørende nøglegenerering</a>)</li>
<li>Upload privatnøgle (for at få flere oplysninger om oprettelse af dette skal du gå til <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation vedrørende nøglegenerering</a>)</li>
<li>Klik på Gem</li>
<li>Følg vejledningen for at tilføje de korrekte URL-adresser til Google SSO-siden</li>
<li>Klik på afkrydsningsfeltet på Google-webstedet for at aktivere SSO</li>
<li>På Google-webstedet skal du sørge for at aktivere API&apos;en til provisionering, ellers bliver ingen brugere opdateret.</li>
<li>På Google-webstedet skal du sørge for, at API-provisioneringen er aktiveret</li>
<li>På Google-webstedet er du muligvis nødt til at anmode om flere brugerkonti</li>
<li>Vend tilbage til Moodles startside</li>
<li>Klik på Redigér</li>
<li>Tilføj blokkene GAccess, Gmail og GData til siden.</li>
<li>Klik på <b>Indstillinger</b> i <b>Google Apps</b>-blokken. Udfyld konfigurationsoplysningerne.</li>
<li>Klik på Status-linket for at bekræfte, at din Google Apps-blok er konfigureret korrekt.</li>
<li>Gå til Administration af websted &gt; Sikkerhed &gt; Politikker for websted</li>
<li>Kontrol af adgangskodepolitik</li>
<li>Indstil adgangskodens længde til 6 eller derover (påkrævet af Googles adgangskodepolitik)</li>
<li>I GData-blokken skal du tilføje brugere, der skal synkroniseres. Gør dette ved at klikke på linket Tilføj brugere, der skal synkroniseres i <b>Google Apps
-blokken</b>. Det gør det nemmere at se resultatet, hvis du indstiller GData-blokcron til 1 min.</li>
<li>For at uploade disse Moodle-brugere til Google kan du køre cron manuelt ved at gå til admin/cron.php. Synkroniseringsresultaterne bør kunne ses på aflæsningen.
<b>Vær opmærksom på, at det kan tage <em>LANG</em> tid at betasynkronisere Moodle-brugere med Google.</b></li>
</ol>

<h4><a name="pre" href="#expect">Forventede resultater</a></h4>
<ul class="alternate" type="square">
<li>Hvis du klikker på et hvilket som helst link i Google-tjenesten eller besøger tjenester fra Google Partner-siden,
godkendes der i forhold til Moodle.</li>
<li>Brugeren skal være logget på Moodle såvel som på Google Partner-tjenesterne</li>
<li>Se <b>Diagnosticeringssiden</b> i GSAML-indstillingerne for at få flere oplysninger om din opsætning.</li>
</ul>


<h4><a name="pre" href="#consider">Overvejelser (fra og med BETA-versionen)</a></h4>
<ul class="alternate" type="square">
<li>Gmail-feedet kan muligvis ikke findes. Dette skyldes sandsynligvis, at brugerens adgangskode ikke stemmer overens med Googles brugeradgangskode.
I fremtiden vil dette ikke være noget problem. Ind til videre skal du sørge for at synkronisere brugerne med Google Apps-blokken. E-mailen bliver opdateret
ved login. I fremtiden vil ulæste meddelelser blive opdateret i realtid.</li>

<li>Placeringen af Googles godkendelsesplugin i Godkendelsesrækkefølgen er vigtig.
Fra dette øjeblik og fremefter er det nødvendigt, at den tilsidesætter en brugers godkendelsestype, når en Moodle-bruger ændrer adgangskoder.
Denne adfærd kan påvirke MNet-brugerne. Der er endnu ikke fundet en løsning på dette problem.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnosticering';
$string['diagnostics_help'] = '<h2>Google Integration Diagnostics</h2>
<p>Diagnosticeringssiden viser oplysninger om forbindelsesstatus for Gmail, GData og SAML.
Det er kun administratorer, der har tilladelse til at få vist diagnostiske oplysninger.</p>

<h3>Indholdsfortegnelse:</h3>
<ul>
<li><a href="#setup">Opsætning af tabeloplysninger</a></li>
<li><a href="#gdata">Forbindelsesstatus for GData</a></li>
<li><a href="#gmail">Forbindelsestest for Gmail-blok</a></li>
<li><a href="#saml">Statustest for SAML SSO</a></li>
</ul>

<h3><a name="setup" href="#setup">Oplysninger om konfigurationstabel</a></h3>
<div class="indent">
Disse tabeller repræsenterer den aktuelle konfiguration af Moodle til Google-integrationen. Sørg for, at alle værdier er indstillet.
</div>

<h3><a name="gdata" href="#gdata">GData-forbindelse</a></h3>
<div class="indent">
GData-blokken, der er placeret i &quot;Blokke&quot;-mappen, indeholder biblioteker til en række forskellige Google-tjenester. Du skal bekræfte,
at den er i stand til at oprette forbindelse til Google-tjenesterne. Det kan være nødvendigt at justere værdierne på siden Indstillinger for GData-blok.
</div>

<h3><a name="gmail" href="#gmail">Forbindelsestest for Gmail-blok</a></h3>
<div class="indent">
I øjeblikket opdaterer Gmail-blokken kun en brugers ulæste meddelelser, når der ved login. Du vil kun
kunne køre testen her, hvis fejlfindingen er aktiveret. Understøttelse af visning af ulæste meddelelser i realtid er på vej.
</div>

<h3><a name="saml" href="#saml">Statustest for SAML SSO</a></h3>
<div class="indent">
Statustest for SAML er en uafhængig kontrol af SSO-godkendelsesprocessen. Den er endnu ikke implementeret.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Nøgler';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Googles SSO-nøgler</h3>
<p>Både Moodle og Google skal være i stand til at godkende adgang til vigtige ressourcer på en sikker måde.
Administratoren skal generere et <b>verificeringscertifikat</b> og uploade et X.509-formateret certifikat med en indlejret
offentlig nøgle til Google.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation vedrørende nøglegenerering</a>
Bemærk, at SAML Moodle SSO-tjenesten kun bruger <b>RSA-nøgler</b>.
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
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>Google til Moodle-gadget</h2>

<p>Denne hjælpefil indeholder en kort oversigt over Google-gadgetten til dit Moodle-websted</p>

<h3><a name="status" href="#status">Moodle-gadget</a></h3>
<div class="indent">
<em>Moodle-gadget</em> er en gadget, som du kan indlejre på din Google Partner-startside.
</div>


<p><b>Trin til installation på en brugers startside</b></p>
<ol>
<li>Log på Moodle</li>
<li>Klik på <b>Google Partner-siden</b> i blokken <b>Adgang til Google-tjenester</b></li>
<li>Klik på linket <b>Tilføj ting</b></li>
<li>Klik på <b>Tilføj min URL</b></li>
<li>Indtast URL-adressen for moodlegadgetten</li>
<li>URL-adressen er noget i stil med<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Den er under indstillingerne for <b>Google-godkendelse</b> fra Admin-blokken</li>
<li>Når du har kopieret URL-adressen til URL-feltet, skal du klikke på <b>Tilføj</b></li>
<li>Klik på <b>Tilbage til startside</b></li>
<li>Du bør nu kunne se en blok, der indeholder et link til dit Moodle-websted</li>
</ol>



<h3><a name="status" href="#status">Overvejelser (fra og med BETA-frigivelse)</a></h3>
<div class="indent">
Dette er beta-prototypen for denne Google Moodle-gadget. I fremtiden vil den måske være meget mere brugbar.
I øjeblikket er der en kendt fejl, der handler om, at Gadgetten ikke opdateres umiddelbart efter installationen.
Udviklerne arbejder på sagen.
</div>';
$string['event_user_authenticated'] = 'Bruger godkendt';
