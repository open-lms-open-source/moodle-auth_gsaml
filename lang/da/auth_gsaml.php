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
 * @copyright  Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
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
$string['setupinstrctstr'] = 'Instruktioner til konfiguration ';
$string['mgadgetstr'] = 'Moodle Gadget ';
$string['mgadgethelp'] = 'Moodle Gadget Hjælp';
$string['googdiag'] = 'Google Integration Diagnostics';
$string['googdebugopts'] = 'Når du er færdig med at konfigurere, kan du logge på igen og besøge ';
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
$string['gsamlsetuptableinfo'] = '<ol><li>Indstil<b>Domænenavn</b> til din Google-tjenestes domænenavn, og klik derefter på <b>Gem ændringer</b><br/><br/></li>
<li>Åbn siden med kontrolpanelet for Google Apps i et nyt vindue som administrator (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Klik på fanen <b>Avancerede værktøjer</b>.<br/><br/></li>
<li>Klik på linket <b>///Set up single sign-on (SSO)</b> ved siden af Godkendelse.<br/><br/></li>
<li>Markér først feltet <b>///Aktivér enkeltlogon</b>.<br/><br/></li>
<li>Indsæt nu denne URL i tekstfeltet <b>///Sign-in page URL</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Indsæt denne URL i tekstfeltet <b>///Sign-out page URL</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Indsæt denne URL i tekstfeltet <b>URL til ændring af adgangskode</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Generér og upload et <b>bekræftelsescertifikat til Google (X.509-certifikat med den offentlige nøgle)</b><br/><br/></li>
<li>Upload også den private nøgle og certifikatet til Moodle, og klik derefter på <b>Gem ændringer</b></b><br/></li></ol>';
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
$string['trytoinitgdataconnection'] = 'Prøver at initialisere en forbindelse mellem GData og Google<br/>';
$string['gsamlsuccess'] = 'Gennemført';
$string['gmailtestresults'] = 'Resultater af Gmail-test';
$string['gmailtestwillnotrun'] = 'Gmail-test kan ikke køres, medmindre Moodle er i tilstanden DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Henter e-mailfeed for brugernavn: ';
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
$string['url'] = 'URL-adresse';
$string['info'] = 'Oplysninger';
$string['config_gsaml'] = 'Konfiguration af Google SAML';
$string['config_gsaml_help'] = '<h2>Komplet opsætning</h2>

<p>Det kræver en smule konfiguration at opsætte den fulde integration mellem Google og Moodle. Denne hjælpefil bør
føre dig gennem det meste af processen med at få plugin til Google-godkendelse konfigureret samt få GData-blokken og 
Gmail-blokken klar.</p>

<h4>Indholdsfortegnelse:</h4>
<ul>
<li><a href="#pre">Forudsætninger</a></li>
<li><a href="#status">Trin</a></li>
<li><a href="#expect">Forventede resultater</a></li>
<li><a href="#consider">Overvejelser</a></li>
</ul>

<h4><a name="status" href="#status">Status for Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Forudsætninger/antagelser</a></h4>
<p>
<ol>
<li>GSAML-, GAccess-, Gmail-, GData-kode er blevet installeret</li>
<ul>
<li>godk/gsaml</li>
<li>blokke/gmail</li>
<li>blokke/gdata</li>
<li>blokke/gaccess</li>
<li>blokke/mgadget (valgfri fra beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Trin</a></h4>
<ol>
<li>Log på Moodle som administrator</li>
<li>Klik på <b>Notifikationer</b> for at opdatere bloktabeller</li>
<li>Aktivér plugin til <b>Google-godkendelse</b> fra administratorsiden ///Manage Plugins </li>
<li>Vælg nu brugergodkendelse, gå til <b>Google-godkendelse</b>, der bør være anvisninger på siden, der skal følges.</li>
<li>Angiv din Google-partners sidedomæne</li>
<li>Upload certifikat (for yderligere oplysninger om oprettelse af dette <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation angående nøglegenerering</a>)</li>
<li>Upload privat nøgle (for yderligere oplysninger om at oprette dette besøges <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation angående nøglegenerering</a>)</li>
<li>Klik på Gem</li>
<li>Følg anvisningerne i at føje de korrekte URL\'er til Google SSO-siden</li>
<li>Markér afkrydsningsfeltet på Googles websted for at aktivere SSO</li>
<li>Sørg for at aktivere klargørings-API\'en på Googles websted, ellers opdateres ingen brugere.</li>
<li>Sørg for, at API-klargøring er aktiveret på Googles websted</li>
<li>Det kan være nødvendigt at anmode om flere brugerkonti på Google-siden</li>
<li>Vend tilbage til Moodles hovedside</li>
<li>Klik på Redigér</li>
<li>Føj GAccess-, Gmail- og GData-blokkene til siden.</li>
<li>Klik på <b>Indstillinger</b> i blokken <b>Google Apps</b>. Udfyld konfigurationsoplysninger.</li>
<li>Klik på linket Status for at bekræfte, at Google Apps-blokken er konfigureret korrekt.</li>
<li>Gå til Webstedsadministration &gt; Sikkerhed &gt; Webstedspolitikker</li>
<li>Kontrollér adgangskodepolitik</li>
<li>Indstil adgangskodelængde til 6 eller flere tegn (obligatorisk for Googles adgangskodepolitik)</li>
<li>I GData-blokken skal du tilføje brugere, der skal synkroniseres. Gør det ved at klikke på linket ///add users to sync i <b>Google Apps
-blokken</b>. Det er nemmere at se resultatet, hvis du indstiller          GData-blokkens cron til 1 min.</li>
<li>For at uploade disse Moodle-brugere til Google kan du køre cron manuelt ved at besøge admin/cron.php. Resultater for synkroniseringen bør blive vist i udlæsningen.
<b>Vær opmærksom på, at synkronisering af Moodle-brugere med Google fra denne beta kan tage <em>LANG</em> tid.</b></li>
</ol>

<h4><a name="pre" href="#expect">Forventede resultater</a></h4>
<ul class="alternate" type="square">
<li>Hvis der klikkes på et vilkårligt Google-tjenestelink eller besøges tjenester fra Google-partnerens side,
godkendes der i forhold til Moodle.</li>
<li>Brugeren skal være logget på Moodle såvel som Google-partnertjenester</li>
<li>Se siden <b>Diagnosticering</b> i GSAML-indstillingerne for yderligere oplysninger om opsætningen.</li>
</ul>


<h4><a name="pre" href="#consider">Overvejelser (fra BETA-version)</a></h4>
<ul class="alternate" type="square">
<li>Gmail-feed findes muligvis ikke. Det skyldes sandsynligvis, at brugerens adgangskode ikke stemmer overens med Googles brugeradgangskode.
Fremadrettet vil det ikke være noget problem. Sørg nu for at synkronisere brugere med Google Apps-blokken. E-mail opdateres
ved logon. Fremadrettet bør ulæste beskeder blive opdateret i realtid.</li>

<li>Placeringen af plugin til Google-godkendelse i godkendelsesrækkefølgen er vigtig.
Fra dette øjeblik skal den tilsidesætte en brugers godkendelsestype, når en Moodle-bruger ændrer adgangskoder.
Denne virkemåde kan berøre MNet-brugere. Der er endnu ikke fundet en løsning på dette problem.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnosticering';
$string['diagnostics_help'] = '<h2>Google Integration Diagnostics</h2>
<p>Siden Diagnosticering viser oplysninger angående forbindelsesstatus for Gmail, GData og SAML.
Kun administratorer har tilladelse til at få vist diagnostiske oplysninger.</p>

<h3>Indholdsfortegnelse:</h3>
<ul>
<li><a href="#setup">Opsætning af tabeloplysninger</a></li>
<li><a href="#gdata">Forbindelsesstatus for GData</a></li>
<li><a href="#gmail">Test af Gmail-blokforbindelse</a></li>
<li><a href="#saml">Test af SAML SSO-status</a></li>
</ul>

<h3><a name="setup" href="#setup">Konfigurationstabelinfo</a></h3>
<div class="indent">
Disse tabeller repræsenterer den aktuelle konfiguration af integration mellem Moodle og Google. Sørg for, at disse værdier alle er indstillet.
</div>

<h3><a name="gdata" href="#gdata">GData-forbindelse </a></h3>
<div class="indent">
GData-blokken, der er placeret i mappen med blokke, indeholder bibliotekerne til en bred vifte af Google-tjenester. Du skal bekræfte,
at den kan oprette forbindelse til Google-tjenesterne. Det kan være nødvendigt at justere værdier på siden med indstillinger for GData-blok.
</div>

<h3><a name="gmail" href="#gmail">Test af Gmail-blokforbindelse</a></h3>
<div class="indent">
I øjeblikket opdaterer Gmail-blokken kun en brugers ulæste beskeder ved logon. Du vil kun
kunne køre testen, hvis fejlfinding er slået til.  Understøttelse til visning af ulæste beskeder i realtid kommer.

</div>

<h3><a name="saml" href="#saml">Test af SAML SSO-status</a></h3>
<div class="indent">
Testen af SAML-status er en uafhængig kontrol af SSO-godkendelsesprocessen. Den er ikke implementeret endnu.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Nøgler';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO-nøgler</h3>
<p>Både Moodle og Google skal kunne godkende adgang til vigtige ressourcer sikkert.
Administratoren skal generere et <b>bekræftelsescertifikat</b> og uploade et X.509-formateret certifikat til Google med en integreret
offentlig nøgle.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-dokumentation angående nøglegenerering</a>
Vær opmærksom på, at SAML Moodle SSO-tjenesten kun bruger <b>RSA-nøgler.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Status for Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certifikat</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>Google til Moodle Gadget</h2>

<p>Denne hjælpefil indeholder en kort oversigt over Google-gadget til dit Moodle-websted</p>

<h3><a name="status" href="#status">Moodle Gadget</a></h3>
<div class="indent">
<em>Moodle Gadget</em> er en gadget, som du kan integrere på din Google-partners startside.

</div>


<p><b>Trin til installation på en brugers startside</b></p>
<ol>
<li>Log på Moodle</li>
<li>Klik på <b>///Google Partner Page</b> i blokken <b>///Google Services Access</b> </li>
<li>Klik på linket <b>///Add Stuff</b></li>
<li>Klik på <b>///Add my url</b></li>
<li>Angiv URL for moodlegadget</li>
<li>URL er noget i retning af <br/><b>http://www.ditmoodedomæne.org/auth/gsaml/moodlegadget.php </b>
<li> Den kan findes i indstillingerne for <b>Google-godkendelse</b> i administrationsblokken</li>
<li>Efter at du har kopieret URL\'en til URL-feltet. Klik på <b>Tilføj</b></li>
<li>Klik på <b>///Back to homepage</b></li>
<li>Du bør nu kunne se en blok med et link til dit Moodle-websted</li>
</ol>



<h3><a name="status" href="#status">Overvejelser (fra BETA-version)</a></h3>
<div class="indent">
Dette er betaprototypen for denne Google Moodle Gadget. Fremadrettet kan den være langt mere anvendelig.
Der er i øjeblikket en kendt fejl i form af, at gadgetten ikke opdateres direkte ved installation.
Udviklere ser på sagen.
</div>';
$string['event_user_authenticated'] = 'Bruger godkendt';
