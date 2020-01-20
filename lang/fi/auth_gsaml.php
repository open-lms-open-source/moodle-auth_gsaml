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
 * @copyright  Copyright (c) 2020 Blackboard Inc. (http://www.blackboard.com)
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
$string['setupinstrctstr'] = 'Asennusohjeet ';
$string['mgadgetstr'] = 'Moodle-pienoisohjelma ';
$string['mgadgethelp'] = 'Moodle-pienoisohjelman ohje';
$string['googdiag'] = 'Google-integroinnin diagnostiikka';
$string['googdebugopts'] = 'Kun asetukset on määritetty, kirjaudu uudelleen ja avaa ';
$string['thediagnosticspage'] = 'Diagnostiikkasivu';
$string['notadminnopermin'] = 'Et ole järjestelmänvalvoja. Sinulla ei ole oikeuksia tarkastella näitä asetuksia.';
$string['nokeyuploaded'] = 'Avainta ei ladattu';
$string['filesnotsaved'] = 'Tiedostoja ei tallennettu.';
$string['keypathnotsaved'] = 'Avainpolkua ei tallennettu.';
$string['uploadkeystr'] = 'Lataa avain';
$string['uploadkey'] = 'Lataa avain';
$string['uploadstr'] = 'Lataa';
$string['uploadthekey'] = 'Lataa avain';
$string['gadgetinfostr'] = 'Lisää Moodle-pienoisohjelma Google-aloitussivullesi seuraavan verkko-osoitteen avulla<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Linkki Google-asetuksiin';
$string['nodomainyet'] = 'Toimialuetta ei ole määritetty';
$string['gsamlsetuptableinfo'] = '<ol><li>Määritä <b>Toimialuenimi</b>-kohtaan Google-palvelun toimialuenimi ja valitse <b>Tallenna muutokset</b>.<br/><br/></li>
<li>Avaa Google Apps -hallintakonsoli uuteen ikkunaan järjestelmänvalvojana (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>).<br/><br/></li>
<li>Valitse <b>Lisätyökalut</b>-välilehti.<br/><br/></li>
<li>Napsauta sitten <b>Set up single sign-on (SSO)</b> (Määritä kertakirjautuminen) -linkkiä kohdassa Authentication (Todennus).<br/><br/></li>
<li>Valitse ensin <b>Enable Single Sign-on</b> (Ota kertakirjautuminen käyttöön) -valintaruutu.<br/><br/></li>
<li>Lisää tämä verkko-osoite <b>Sign-in page URL</b> (Kirjautumissivun osoite) -tekstikenttään.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Lisää tämä verkko-osoite <b>Sign-out page URL</b> (Uloskirjautumissivun osoite) -tekstikenttään.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Lisää tämä verkko-osoite <b>Change password URL</b> (Salasanan vaihdon osoite) -tekstikenttään.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Luo ja lataa <b>tarkistusvarmenne Googleen (julkisen avaimen sisältämä X.509-varmenne).</b><br/><br/></li>
<li>Lataa yksityinen avain ja varmenne myös Moodleen ja valitse sitten <b>Tallenna muutokset</b></b>.<br/></li></ol>';
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
$string['obtainemailfeed'] = 'Haetaan sähköpostisyötettä käyttäjänimelle: ';
$string['currfileupload'] = 'Nykyinen tiedosto:';
$string['nonestr'] = 'Ei mitään';
$string['privatekeystr'] = 'Yksityinen avain';
$string['certificatestr'] = 'Varmenne';
$string['statustab'] = 'Tila';
$string['logstab'] = 'SAML-lokit';
$string['ssoteststab'] = 'SSO-testit';
$string['docstab'] = 'Dokumentaatio';
$string['id'] = 'Tunnus';
$string['time'] = 'Aika';
$string['userid'] = 'Käyttäjätunnus';
$string['ip'] = 'IP-osoite';
$string['course'] = 'Kurssi';
$string['module'] = 'Moduuli';
$string['cmid'] = 'cmid';
$string['action'] = 'Toiminto';
$string['url'] = 'Verkko-osoite';
$string['info'] = 'Tiedot';
$string['config_gsaml'] = 'Google SAML:n määrittäminen';
$string['config_gsaml_help'] = '<h2>Määritysohje</h2>

<p>Google-palvelun täydellinen integrointi Moodleen edellyttää muutamien määritystoimien tekemistä. Tämä
tiedosto opastaa Google-todennuslisäosan määrittämisessä sekä GData-lohkon ja Gmail-lohkon
valmistelemisessa.</p>

<h4>Sisällys:</h4>
<ul>
    <li><a href="#pre">Edellytykset</a></li>
    <li><a href="#status">Vaiheet</a></li>
    <li><a href="#expect">Odotetut tulokset</a></li>
    <li><a href="#consider">Huomioitavaa</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps -tila</a></h4>
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
    <li>blocks/mgadget (valinnainen beetaversio)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Vaiheet</a></h4>
<ol>
    <li>Kirjaudu Moodleen järjestelmänvalvojana.</li>
    <li>Päivitä lohkotaulut valitsemalla <b>Ilmoitukset</b>.</li>
    <li>Ota käyttöön <b>Google-todennus</b> hallintasivulta Lisäosien hallinta.</li>
    <li>Valitse käyttäjien todennus sivulla <b>Google-todennus</b>. Tältä sivulta löydät tarvittavat ohjeet.</li>
    <li>Lisää Google-kumppanisivun toimialue.</li>
    <li>Lataa varmenne (lisätietoja sen luomisesta on <a

    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Googlen avainten luontiin liittyvässä ohjeessa</a>).</li>
    <li>Lataa yksityinen avain (lisätietoja sen luomisesta on <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Googlen avainten luontiin liittyvässä ohjeessa</a>).</li>
    <li>Valitse Tallenna.</li>
    <li>Lisää asianmukaiset URL-osoitteet Googlen SSO-sivulle ohjeiden mukaisesti.</li>
    <li>Ota SSO-toiminto käyttöön Google-sivustossa.</li>
    <li>Ota API-valmistelu käyttöön Google-sivustossa tai muuten käyttäjiä ei päivitetä.</li>
    <li>Varmista, että API-valmistelu on käytössä Google-sivustossa.</li>
    <li>Saatat joutua pyytämään lisää käyttäjätilejä Googlen puolella.</li>
    <li>Palaa Moodlen pääsivulle.</li>
    <li>Valitse Muokkaa.</li>
    <li>Lisää GAccess-, GMail- ja Gdata-lohkot sivulle.</li>
    <li>Valitse <b>Google Apps</b> -lohkossa <b>Asetukset</b>. Lisää määritystiedot.</li>
    <li>Napsauta Tila-linkkiä ja varmista, että Google Apps -lohko on määritetty oikein.</li>
    <li>Avaa Sivuston hallinta &gt; Tietoturva &gt; Sivuston käyttöehdot</li>
    <li>Tarkista salasanavaatimukset.</li>
    <li>Määritä salasanan pituudeksi vähintään 6 merkkiä (Googlen salasanakäytännön vaatimus).</li>
    <li>Lisää synkronoitavat käyttäjät GData-lohkoon. Voit tämän napsauttamalla Lisää synkronoitavat käyttäjät -linkkiä <b>Google Apps -lohkossa</b>. Voit tarkistaa tulokset asettamalla          GData-lohkon Cron-päivitysväliksi 1 min.</li>
    <li>Voit ladata valitut Moodle-käyttäjät Googleen suorittamalla Cron-tehtävän manuaalisesti kohdassa admin/cron.php. Synkronoinnin tulosten pitäisi näkyä näytössä.
    <b>Huomaa, että Moodle-käyttäjien synkronointi Googleen voi kestää <em>HYVIN</em> pitkään tässä beetaversiossa.</b></li>
</ol>

<h4><a name="pre" href="#expect">Odotetut tulokset</a></h4>
<ul class="alternate" type="square">
    <li>Google-palvelujen linkkien napsauttaminen tai palvelujen avaaminen Google-kumppanin sivun
    kautta todentaa käyttäjän Moodleen.</li>
    <li>Käyttäjä kirjataan sekä Moodleen että Google-kumppanipalveluihin.</li>
    <li>Katso lisätietoja määrityksistä GSAML-asetusten<b>diagnostiikkasivulta</b>.</li>
</ul>


<h4><a name="pre" href="#consider">Huomioitavaa (BEETA-versiosta)</a></h4>
<ul class="alternate" type="square">
    <li>GMail-syötettä ei välttämättä löydy. Tämä johtuu siitä, että käyttäjän salasana ei täsmää käyttäjän Google-salasanaan.
    Tulevaisuudessa tämä ei ole ongelma. Toistaiseksi käyttäjät on synkronoitava Google Apps -lohkon avulla. Sähköposti
    päivitetään kirjautumisen yhteydessä. Tulevaisuudessa lukemattomat viestit päivitetään reaaliajassa.</li>

    <li>Google-todennuslisäosan sijainti todennusjärjestyksessä on tärkeä.
    Tällä hetkellä lisäosan on korvattava käyttäjän todennustyyppi, kun Moodle-käyttäjä vaihtaa salasanaa.
    Tämä toiminta voi vaikuttaa MNet-käyttäjiin. Tähän ongelmaan
    ei vielä ole ratkaisua.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostiikka';
$string['diagnostics_help'] = '<h2>Google-integroinnin diagnostiikka</h2>
<p>Diagnostiikka sivulla on tietoa Gmail-, GData- ja SAML-yhteyden tilasta.
Vain järjestelmänvalvojilla on oikeus tarkastella diagnostiikkatietoja.</p>

<h3>Sisällys:</h3>
<ul>
    <li><a href="#setup">Määritystaulukoiden tiedot</a></li>
    <li><a href="#gdata">GData-yhteyden tila</a></li>
    <li><a href="#gmail">Gmail-lohkon yhteystesti</a></li>
    <li><a href="#saml">SAML SSO -tilan testaus</a></li>
</ul>

<h3><a name="setup" href="#setup">Määritystaulukkojen tiedot</a></h3>
<div class="indent">
    Näissä taulukoissa on nykyiset Moodlen Google-integroinnin tiedot. Varmista, että kaikki arvot on määritetty oikein.
</div>

<h3><a name="gdata" href="#gdata">GData-yhteys</a></h3>
<div class="indent">
GData-lohko, joka sijaitsee blocks-kansiossa, sisältää eri Google-palvelujen kirjastot. Varmista, että lohko
pystyy muodostamaan yhteyden Google-palveluihin. Voit muuttaa arvoja GData-lohkon Asetukset-sivulla.
</div>

<h3><a name="gmail" href="#gmail">Gmail-lohkon yhteystesti</a></h3>
<div class="indent">
Tällä hetkellä Gmail-lohko päivittää käyttäjän lukemattomat viestit ainoastaan kirjautumisen yhteydessä. Tämän
testin voi suorittaa vain, kun virheenkorjaustila on käytössä. Lukemattomien viestien reaaliaikaisen tarkastelun tuki on kehityksessä.

</div>

<h3><a name="saml" href="#saml">SAML SSO -tilan testaus</a></h3>
<div class="indent">
SAML-tilan testaus on SSO-valtuutusprosessista erillään toimiva tarkistus. Sitä kehitetään vielä.
<!--Virhetiedot saa näkyviin ottamalla käyttöön DEBUG_DEVELOPER-virheenkorjaustilan. -->
</div>';
$string['keys'] = 'Avaimet';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Googlen SSO-avaimet</h3>
<p>Sekä Moodlen että Googlen on voitavat valtuuttaa tärkeiden resurssien suojattu käyttö.
Järjestelmänvalvojan on luotava <b>tarkistusvarmenne</b> ja ladattava julkisen avaimen sisältävä X.509-muotoinen varmenne Google-palveluun.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Googlen avainten luontiin liittyvät ohjeet</a>
Huomaa, että SAML Moodle SSO -palvelu käyttää vain <b>RSA-avaimia.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps -tila</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Varmenne</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle-pienoisohjelma';
$string['mgadget_help'] = '<h2>Moodlen Google-pienoisohjelma</h2>

<p>Tämä ohjetiedosto sisältää lyhyen yleiskuvauksen Moodle-sivustoon asennettavasta Google-pienoisohjelmasta.</p>

<h3><a name="status" href="#status">Moodle-pienoisohjelma</a></h3>
<div class="indent">
    <em>Moodle-pienoisohjelma</em> on Google-kumppanisivuston aloitussivulle upotettava ohjelma.

</div>


<p><b>Asentaminen käyttäjän aloitussivulle</b></p>
<ol>
    <li>Kirjaudu Moodleen.</li>
    <li>Napsauta <b>Google-kumppanisivu</b>-linkkiä <b>Google-palvelujen käyttö</b> -lohkossa.</li>
    <li>Napsauta <b>Add Stuff</b> (Lisää sisältöä) -linkkiä.</li>
    <li>Valitse <b>Add my url</b> (Lisää verkko-osoite).</li>
    <li>Anna moodlegadget-pienoisohjelman osoite.</li>
    <li>Verkko-osoite on tämänkaltainen <br/><b>http://www.omamoodletoimialue.org/auth/gsaml/moodlegadget.php </b>
    <li> Voit tarkistaa osoitteen hallintalohkon <b>Google-todennus</b>-lisäosan asetuksista.</li>
    <li>Kun olet kopioinut osoitteen osoitekenttään, valitse <b>Lisää</b>.</li>
    <li>Valitse <b>Takaisin kotisivulle</b>.</li>
    <li>Näytössä pitäisi nyt näkyä lohko, jossa on linkki Moodle-sivustoon.</li>
</ol>



<h3><a name="status" href="#status">Huomioitavaa (BEETA-julkaisussa)</a></h3>
<div class="indent">
    Tämä on Moodlen Google-pienoisohjelman beetaversio. Sen hyödyt voivat moninkertaistua tulevaisuudessa.
    Pienoisohjelma ei välttämättä päivity heti asentamisen jälkeen. Tämä on tunnettu ongelma.
    Kehittäjät selvittävät tätä ongelmaa.
</div>';
$string['event_user_authenticated'] = 'Käyttäjä todennettu';
