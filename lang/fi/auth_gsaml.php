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

$string['pluginname'] = 'Google SAML -todennus';
$string['blockname'] = 'Googlen SAML-todennus';
$string['domainname'] = 'Toimialue';
$string['auth_gsamldescription'] = 'Tämä todennuslisäosa mahdollistaa Moodlen kertakirjautumisen SAML-palveluntarjoajien kanssa.';
$string['auth_gsamltitle'] = 'Google-todennus';
$string['cert'] = 'Varmenne';
$string['key'] = 'RSA-avain';
$string['domainnamestr'] = 'Toimialuenimi';
$string['rsakeystr'] = 'RSA-avaintiedosto';
$string['desckeystr'] = 'Lataa RSA-avain (pem). Huomaa, että Moodlen SAML-palvelu tukee vain RSA-allekirjoitettuja avaimia.';
$string['googauthconfstr'] = 'Google-todennuksen määritys';
$string['ssl_str'] = 'SSL-varmenne';
$string['desc_certstr'] = 'Lataa X.509-varmenne. Huomaa, että tämä on sama tiedosto, jonka lataat myös Googleen.';
$string['setupinstrctstr'] = 'Asennusohjeet';
$string['mgadgetstr'] = 'Moodle-pienoisohjelma';
$string['mgadgethelp'] = 'Moodle-pienoisohjelman ohje';
$string['googdiag'] = 'Google-integroinnin diagnostiikka';
$string['googdebugopts'] = 'Kun asetukset on määritetty, kirjaudu uudelleen ja avaa';
$string['thediagnosticspage'] = 'Diagnostiikkasivu';
$string['notadminnopermin'] = 'Et ole järjestelmänvalvoja. Sinulla ei ole oikeuksia tarkastella näitä asetuksia.';
$string['nokeyuploaded'] = 'Avainta ei ladattu';
$string['filesnotsaved'] = 'Tiedostoja ei tallennettu.';
$string['keypathnotsaved'] = 'Avainpolkua ei tallennettu.';
$string['uploadkeystr'] = 'Lataa avain';
$string['uploadkey'] = 'Lataa avain';
$string['uploadstr'] = 'Tiedostojen palautus';
$string['uploadthekey'] = 'Lataa avain';
$string['gadgetinfostr'] = 'Lisää Moodle-pienoisohjelma Google-aloitussivullesi seuraavan verkko-osoitteen avulla<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Linkki Google-asetuksiin';
$string['nodomainyet'] = 'Toimialuetta ei ole määritetty';
$string['gsamlsetuptableinfo'] = '<ol><li>Määritä <b>Toimialuenimi</b>-kohtaan Google-palvelun toimialuenimi ja valitse <b>Tallenna muutokset</b>.<br/><br/></li>
<li>Avaa uudessa ikkunassa Google Apps Control Panel -sivu ylläpitäjänä (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>).<br/><br/></li>
<li>Napsauta <b>Advanced tools</b> -välilehteä.<br/><br/></li>
<li>Napsauta Authentication-kohdan vieressä olevaa <b>Set up single sign-on (SSO)</b> -linkkiä.<br/><br/></li>
<li>Valitse ensin <b>Enable Single Sign-on</b> -ruutu.<br/><br/></li>
<li>Syötä nyt tämä URL-osoite <b>Sign-in page URL</b> -tekstikenttään.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Syötä tämä URL-osoite <b>Sign-out page URL</b> -tekstikenttään.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Syötä tämä URL-osoite <b>Change password URL</b> -tekstikenttään.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Luo ja lataa <b>Tarkistusvarmenne Googlea varten (X.509-varmenne, joka sisältää julkisen avaimen)</b>.<br/><br/></li>
<li>Lataa yksityinen avain ja varmenne myös Moodleen ja valitse <b>Tallenna muutokset</b>.</b><br/></li></ol>';
$string['tomoodle'] = 'Moodleen';
$string['errusernotloggedin'] = 'Käyttäjää ei voitu kirjata sisään';
$string['pwdnotvalid'] = 'Salasana ei kelpaa';
$string['samlcodefailed'] = 'SAML-koodivirhe. Tarkista syy virheenkorjaustilassa.';
$string['samlauthcodefailed'] = 'SAML-todennuskoodivirhe. Katso lisätiedot virheenkorjaustilassa.';
$string['sixcharmsg'] = 'Käyttäjän salasanassa on oltava yli 6 merkkiä Google-integrointia varten. Pyydä järjestelmänvalvojaa muuttamaan sivuston käytäntöasetuksia.';
$string['errordecodingsamlrequest'] = 'Ongelma SAML-pyynnön purkamisessa tai gzinflate-virhe (Tämä saattaa olla https-asetusvirhe, tarkista Google SSO -määritykset): {$a}';
$string['googsamldiag'] = 'Google SAML -diagnostiikka';
$string['notadminnoperm'] = 'Et ole sivuston ylläpitäjä. Sinulla ei ole oikeuksia tarkastella näitä tietoja.';
$string['gdatanotconfig'] = 'GData-määritystaulua ei ole valittu.';
$string['googlesamlconfigdata'] = 'Google SAML -määritystiedot';
$string['gsamlconfignotset'] = 'Google SAML -asetuksia ei ole vielä määritetty';
$string['gdataconfignotset'] = 'GData-määritystaulua ei ole valittu';
$string['gdataconfig'] = 'GData-määritys';
$string['gmailconfig'] = 'Gmail-määritys';
$string['componentinstallcheck'] = 'Komponenttien asennuksen esitarkistus';
$string['gdatanotinstalled'] = 'GData-lohkoa ei ole asennettu\\n';
$string['gappsblockinstalled'] = 'GApps-lohko on asennettu\\n';
$string['gmailblocknotinstalled'] = 'Gmail-lohkoa ei ole asennettu';
$string['gmailblockinstalled'] = 'Gmail-lohko on asennettu\\n';
$string['gdataapitestresults'] = 'GData API -tekstitulokset';
$string['trytoinitgdataconnection'] = 'Yritetään muodostaa yhteyttä GData-lohkon ja Googlen välille<br/>';
$string['gsamlsuccess'] = 'Onnistui';
$string['gmailtestresults'] = 'Gmail-testitulokset';
$string['gmailtestwillnotrun'] = 'Gmail-testiä ei voi suorittaa, jos Moodle ole DEBUG_DEVELOPER-tilassa';
$string['obtainemailfeed'] = 'Haetaan sähköpostisyötettä käyttäjänimelle:';
$string['currfileupload'] = 'Nykyinen tiedosto:';
$string['nonestr'] = 'ei mitään';
$string['privatekeystr'] = 'Yksityinen avain';
$string['certificatestr'] = 'Varmenne';
$string['statustab'] = 'Status';
$string['logstab'] = 'SAML-lokit';
$string['ssoteststab'] = 'SSO-testit';
$string['docstab'] = 'Dokumentaatio';
$string['id'] = 'Tunnus';
$string['time'] = 'kello';
$string['userid'] = 'Käyttäjätunnus';
$string['ip'] = 'IP-osoite';
$string['course'] = 'Kurssi';
$string['module'] = 'Moduuli';
$string['cmid'] = 'cmid';
$string['action'] = 'Toimenpide';
$string['url'] = 'Web-osoite';
$string['info'] = 'Informaatio';
$string['contextinstanceid'] = 'Ilmentymän tunnus';
$string['courseid'] = 'Kurssitunnus';
$string['eventname'] = 'Tapahtuman nimi';
$string['otherlog'] = 'Muu';
$string['useraccesedgservice'] = 'Käyttäjä on käyttänyt ensin gserviceä';
$string['userneedsredirect'] = 'Käyttäjällä on saml-pyyntö, mutta vaaditaan kirjautuminen/uudelleenohjaus';
$string['userislogged'] = 'Käyttäjä on kirjautunut ja hänellä on saml-pyyntö';
$string['login'] = 'Kirjaudu';
$string['config_gsaml'] = 'Google SAML:n määrittäminen';
$string['config_gsaml_help'] = '<h2>Suorita määritys</h2>

<p>Googlen ja Moodlen täydellisen integroinnin käyttöönotto vaatii joitakin määrityksiä. Tämä ohjetiedosto
opastaa prosessissa, jossa määritetään Google-todennuksen lisäosa sekä GData-lohko ja
Gmail-lohko.</p>

<h4>Sisällysluettelo:</h4>
<ul>
<li><a href="#pre">Edellytykset</a></li>
<li><a href="#status">Vaiheet</a></li>
<li><a href="#expect">Odotetut tulokset</a></li>
<li><a href="#consider">Huomioitavaa</a></li>
</ul>

<h4><a name="status" href="#status">Google Appsin tila</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Edellytykset/oletukset</a></h4>
<p>
<ol>
<li>GSAML-, GAccess-, Gmail- ja GData-koodi on asennettu</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (beeta-versiossa valinnainen)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Vaiheet</a></h4>
<ol>
<li>Kirjaudu Moodleen ylläpitäjänä.</li>
<li>Päivitä lohkotaulukot valitsemalla <b>Ilmoitukset</b>.</li>
<li>Ota <b>Google-todennus</b>-lisäosa käyttöön Hallinnoi lisäosia -sivulta.</li>
<li>Valitse käyttäjien todennus valitsemalla <b>Google-todennus</b> ja noudata sivulla olevia ohjeita.</li>
<li>Siirry Googlen kumppanisivujen toimialueelle.</li>
<li>Lataa varmenne (lisätietoja sen luonnista on kohdassa <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Google Documentation Regarding Key Generation</a>).</li>
<li>Lataa yksityinen avain (lisätietoja sen luonnista on kohdassa <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Google Documentation Regarding Key Generation</a>).</li>
<li>Valitse Tallenna.</li>
<li>Noudata ohjeita ja lisää oikeat URL-osoitteet Googlen SSO-sivulle.</li>
<li>Ota SSO käyttöön valitsemalla Google-sivustossa oleva valintaruutu.</li>
<li>Varmista, että otat Google-sivustossa käyttöön valmistelun ohjelmointirajapinnan, tai käyttäjiä ei päivitetä.</li>
<li>Varmista Google-sivustossa, että API Provisioning on valittu.</li>
<li>Googlen puolelta voi olla tarpeen pyytää lisää käyttäjätilejä.</li>
<li>Palaa Moodlen etusivulle.</li>
<li>Valitse Muokkaa.</li>
<li>Lisää GAccess-, Gmail- ja GData-lohkot sivulle.</li>
<li>Valitse <b>Google Apps</b> -lohkossa <b>Asetukset</b>. Täytä määritystiedot.</li>
<li>Vahvista Tila-linkkiä napsauttamalla, että Google Apps -lohko on määritetty oikein.</li>
<li>Valitse Sivuston hallinta &gt; Tietoturva &gt; Sivuston käyttöehdot.</li>
<li>Valitse Salasanakäytäntö.</li>
<li>Määritä salasanan pituudeksi vähintään 6 (vaaditaan Googlen salasanakäytäntöä varten).</li>
<li>GData-lohkoon on lisättävä käyttäjiä synkronointia varten. Tee tämä napsauttamalla Lisää synkronoitavia käyttäjiä -linkkiä <b>Google Apps
-lohkossa</b>. Tuloksen näkee helpommin, kun GData-lohkon cron-asetukseksi määritetään 1 minuutti.</li>
<li>Kun lataat Moodle-käyttäjiä Googleen, voit suorittaa cronin manuaalisesti siirtymällä tiedostoon admin/cron.php. Synkronoinnin tulosten pitäisi näkyä lukemassa.
<b>Huomaa, että beeta-versiossa Moodle-käyttäjien synkronointi Googleen kanssa voi kestää <em>KAUAN</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">Odotetut tulokset</a></h4>
<ul class="alternate" type="square">
<li>Google-palvelujen linkkien napsauttaminen tai Googlen kumppanisivujen palveluissa käyminen
suorittaa todennuksen Moodleen.</li>
<li>Käyttäjien on kirjauduttava sekä Moodleen että Google-kumppanipalveluihin.</li>
<li>Katso GSAML-asetusten <b>Diagnostiikkasivulta</b> lisätietoja määrityksestä.</li>
</ul>


<h4><a name="pre" href="#consider">Huomioitavaa (BEETA-versiossa)</a></h4>
<ul class="alternate" type="square">
<li>Gmail-syötettä ei välttämättä löydy. Tämä voi johtua siitä, että käyttäjän salasana ei vastaa Google-käyttäjän salasanaa.
Jatkossa tämä ei ole ongelma. Muista toistaiseksi synkronoida käyttäjät Google Apps -lohkon kanssa. Sähköposti päivittyy
kirjautumisen yhteydessä. Jatkossa lukemattomien viestien pitäisi päivittyä reaaliaikaisesti.</li>

<li>Google-todennuksen lisäosan sijainti todennusjärjestyksessä on tärkeä.
Tällä hetkellä sen on ohitettava käyttäjän todennustyyppi, kun Moodle-käyttäjä vaihtaa salasanan.
Tämä toiminta voi vaikuttaa MNet-käyttäjiin. Tähän ongelmaan ei ole vielä löydetty ratkaisua.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostiikka';
$string['diagnostics_help'] = '<h2>Google-integroinnin diagnostiikka</h2>
<p>Diagnostiikkasivulla on tietoja Gmail-, GData- ja SAML-yhteyden tilasta.
Vain järjestelmänvalvojilla on oikeus katsella diagnostiikkatietoja.</p>

<h3>Sisällysluettelo:</h3>
<ul>
<li><a href="#setup">Määritä taulukoiden tiedot</a></li>
<li><a href="#gdata">GData-yhteyden tila</a></li>
<li><a href="#gmail">Gmail-lohkon yhteystesti</a></li>
<li><a href="#saml">SAML:n SSO-tilan testi</a></li>
</ul>

<h3><a name="setup" href="#setup">Määritystaulukoiden tiedot</a></h3>
<div class="indent">
Näissä taulukoissa on Moodlen ja Googlen integroinnin nykyinen määritys. Varmista, että kaikki arvot on määritetty.
</div>

<h3><a name="gdata" href="#gdata">GData-yhteys</a></h3>
<div class="indent">
GData-lohko, joka on lohkojen kansiossa, sisältää eri Google-palvelujen kirjastot. Sinun on varmistettava,
että se saa yhteyden Google-palveluihin. Sinun voi olla tarpeen säätää arvoja GData-lohkon asetussivulla.
</div>

<h3><a name="gmail" href="#gmail">Gmail-lohkon yhteystesti</a></h3>
<div class="indent">
Tällä hetkellä Gmail-lohko päivittää käyttäjien lukemattomat viestit vain kirjautumisen yhteydessä. Voit
suorittaa testin tässä vain, jos virheenkorjaus on otettu käyttöön. Tuki lukemattomien viestien reaaliaikaiselle katselemiselle on tulossa.
</div>

<h3><a name="saml" href="#saml">SAML:n SSO-tilan testi</a></h3>
<div class="indent">
SAML:n tilan testi on SSO-todennusprosessista erillinen testi. Sitä ei ole vielä toteutettu.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Avaimet';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Googlen SSO-avaimet</h3>
<p>Sekä Moodlen että Googlen on voitava varmentaa suojatusti pääsy tärkeisiin resursseihin.
Järjestelmänvalvojan on luotava <b>Tarkistusvarmenne</b> ja ladattava Googleen X.509-muotoa oleva varmenne, jossa on upotettu
julkinen avain.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Googlen ohjeet avainten luontiin</a>
Huomaa, että Moodlen SAML:ia käyttävä SSO-palvelu käyttää vain <b>RSA-avaimia</b>.
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
$string['mgadget'] = 'Moodle-pienoisohjelma';
$string['mgadget_help'] = '<h2>Googlen Moodle-pienoisohjelma</h2>

<p>Tässä ohjetiedostossa on lyhyt yhteenveto Moodle-sivuston Google-pienoisohjelmasta.</p>

<h3><a name="status" href="#status">Moodle-pienoisohjelma</a></h3>
<div class="indent">
<em>Moodle-pienoisohjelma</em> on pienoisohjelma, jonka voi upottaa Google-kumppaneiden etusivulle.
</div>


<p><b>Käyttäjien aloitussivulle asentaminen</b></p>
<ol>
<li>Kirjaudu Moodleen.</li>
<li>Valitse <b>Google-kumppanisivu</b> <b>Google-palvelujen käyttö</b> -lohkossa.</li>
<li>Napsauta <b>Lisää kohteita</b> -linkkiä.</li>
<li>Valitse <b>Lisää oma URL</b>.</li>
<li>Lisää moodlegadget-URL.</li>
<li>URL-osoite voi olla esimerkiksi seuraavanlainen:<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Se löytyy Hallinta-lohkon <b>Google-todennus</b>-kohdan Asetuksista.</li>
<li>Kun olet kopioinut URL-osoitteen kenttäänsä, valitse <b>Lisää</b>.</li>
<li>Valitse <b>Takaisin etusivulle</b>.</li>
<li>Sinun pitäisi nähdä nyt lohko, jossa on linkki Moodle-sivustoosi.</li>
</ol>



<h3><a name="status" href="#status">Huomioitavaa (BEETA-julkaisussa)</a></h3>
<div class="indent">
Tämä on Googlen Moodle-pienoisohjelman beeta-prototyyppi. Jatkossa siitä voi olla enemmän hyötyä.
Tällä hetkellä siinä on tunnettu virhe, joka liittyy siihen, että pienoisohjelma ei lataudu välittömästi asennuksen yhteydessä.
Kehittäjät tutkivat asiaa.
</div>';
$string['event_user_authenticated'] = 'Käyttäjä todennettu';
