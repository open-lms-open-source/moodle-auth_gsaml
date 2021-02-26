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
 * @copyright  Copyright (c) 2020 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Ověření SAML Google';
$string['blockname'] = 'Ověření SAML Google';
$string['domainname'] = 'Doména';
$string['auth_gsamldescription'] = 'Tento ověřovací plugin umožňuje jednotné přihlašování k Moodlu pomocí služby SAML SPS.';
$string['auth_gsamltitle'] = 'Ověření Google';
$string['cert'] = 'Certifikát';
$string['key'] = 'Klíč RSA';
$string['domainnamestr'] = 'Název domény';
$string['rsakeystr'] = 'Soubor klíče RSA';
$string['desckeystr'] = 'Nahrajte klíč RSA (PEM). Upozorňujeme, že služba SAML systému Moodle podporuje pouze klíče s podpisem RSA.';
$string['googauthconfstr'] = 'Konfigurace ověření Google';
$string['ssl_str'] = 'Podpisový certifikát SSL';
$string['desc_certstr'] = 'Nahrajte certifikát X.509. Upozorňujeme, že tento soubor je stejný jako soubor, který nahrajete do služby Google.';
$string['setupinstrctstr'] = 'Pokyny k nastavení ';
$string['mgadgetstr'] = 'Miniaplikace Moodle ';
$string['mgadgethelp'] = 'Nápověda k miniaplikaci Moodle';
$string['googdiag'] = 'Diagnostika integrace Google';
$string['googdebugopts'] = 'Po dokončení konfigurace se můžete znovu přihlásit a navštívit ';
$string['thediagnosticspage'] = 'Stránka diagnostiky';
$string['notadminnopermin'] = 'Nejste administrátor. K zobrazení těchto nastavení nemáte oprávnění.';
$string['nokeyuploaded'] = 'Nebyl nahrán žádný klíč.';
$string['filesnotsaved'] = 'Soubory nebyly uloženy.';
$string['keypathnotsaved'] = 'Cesta ke klíči není uložena.';
$string['uploadkeystr'] = 'Nahrát klíč';
$string['uploadkey'] = 'Nahrát klíč';
$string['uploadstr'] = 'Nahrát';
$string['uploadthekey'] = 'Nahrát klíč';
$string['gadgetinfostr'] = 'Na následující adrese URL můžete přidat miniaplikaci Moodle na svou úvodní stránku Google.<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Odkaz na nastavení Google';
$string['nodomainyet'] = 'Zatím není nastavena žádná doména';
$string['gsamlsetuptableinfo'] = '<ol><li>V poli <b>Název domény</b> nastavte název vaší domény pro služby Google a klikněte na položku <b>Uložit změny</b>.<br/><br/></li>
<li>V novém okně otevřete jako administrátor stránku Ovládací panel Google Apps (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>).<br/><br/></li>
<li>Klikněte na kartu <b>Pokročilé nástroje</b>.<br/><br/></li>
<li>Klikněte na odkaz <b>Nastavit jednotné přihlašování (SSO)</b> vedle položky Ověření.<br/><br/></li>
<li>Nejprve zaškrtněte políčko <b>Povolit jednotné přihlašování</b>.<br/><br/></li>
<li>Potom vložte tuto adresu URL do textového pole <b>Adresa URL stránky pro přihlášení</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Vložte tuto adresu URL do textového pole <b>Adresa URL stránky pro odhlášení</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Vložte tuto adresu URL do textového pole <b>Adresa URL pro změnu hesla</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Vygenerujte a nahrajte <b>Ověřovací certifikát do služby Google (certifikát X.509 s veřejným klíčem)</b>.<br/><br/></li>
<li>Nahrajte soukromý klíč s certifikátem také do služby Moodle a klikněte na položku <b>Uložit změny</b></b>.<br/></li></ol>';
$string['tomoodle'] = 'Do služby Moodle';
$string['errusernotloggedin'] = 'Uživatele nelze přihlásit.';
$string['pwdnotvalid'] = 'Heslo není platné.';
$string['samlcodefailed'] = 'Akce s kódem SAML se nezdařila. Chcete-li znát příčinu, zapněte ladění.';
$string['samlauthcodefailed'] = 'Akce s ověřovacím kódem SAML se nezdařila. Chcete-li další informace, zapněte ladění.';
$string['sixcharmsg'] = 'Heslo uživatele pro integraci do služby Google musí být delší než 6 znaků. Požádejte administrátora, aby upravil nastavení zásad webu.';
$string['errordecodingsamlrequest'] = 'Při dekódování požadavku SAML nebo komprimaci souboru GZ došlo k potížím (může jít o chybu nastavení protokolu HTTPS; zkontrolujte konfiguraci jednotného přihlašování (SSO) ve službě Google): {$a}';
$string['googsamldiag'] = 'Diagnostika SAML Google';
$string['notadminnoperm'] = 'Nejste administrátor webu. K zobrazení těchto informací nemáte oprávnění.';
$string['gdatanotconfig'] = 'Tabulka konfigurace bloku Gdata není nastavena.';
$string['googlesamlconfigdata'] = 'Data konfigurace SAML Google';
$string['gsamlconfignotset'] = 'Konfigurace SAML Google nebyla ještě nastavena.';
$string['gdataconfignotset'] = 'Tabulka konfigurace bloku Gdata není nastavena.';
$string['gdataconfig'] = 'Konfigurace bloku Gdata';
$string['gmailconfig'] = 'Konfigurace bloku Gmail';
$string['componentinstallcheck'] = 'Předběžná kontrola instalace komponenty';
$string['gdatanotinstalled'] = 'Blok Gdata není nainstalován\\n';
$string['gappsblockinstalled'] = 'Blok GApps je nainstalován\\n';
$string['gmailblocknotinstalled'] = 'Blok Gmail není nainstalován';
$string['gmailblockinstalled'] = 'Blok Gmail je nainstalován\\n';
$string['gdataapitestresults'] = 'Výsledky test rozhraní API Gdata';
$string['trytoinitgdataconnection'] = 'Provádí se pokus o inicializaci bloku Gdata pro připojení ke službě Google<br/>';
$string['gsamlsuccess'] = 'Úspěch';
$string['gmailtestresults'] = 'Výsledky testu bloku Gmail';
$string['gmailtestwillnotrun'] = 'Test bloku Gmail nebude spuštěn, pokud služba Moodle není v režimu DEBUG_DEVELOPER.';
$string['obtainemailfeed'] = 'Získávání e-mailového kanálu pro uživatelské jméno: ';
$string['currfileupload'] = 'Aktuální soubor:';
$string['nonestr'] = 'Žádné';
$string['privatekeystr'] = 'Soukromý klíč';
$string['certificatestr'] = 'Certifikát';
$string['statustab'] = 'Stav';
$string['logstab'] = 'Protokoly SAML';
$string['ssoteststab'] = 'Testy jednotného přihlášení';
$string['docstab'] = 'Dokumentace';
$string['id'] = 'ID';
$string['time'] = 'Čas';
$string['userid'] = 'ID uživatele';
$string['ip'] = 'IP adresa';
$string['course'] = 'Kurz';
$string['module'] = 'Modul';
$string['cmid'] = 'cmid';
$string['action'] = 'Akce';
$string['url'] = 'Adresa URL';
$string['info'] = 'Informace';
$string['config_gsaml'] = 'Konfigurace SAML Google';
$string['config_gsaml_help'] = '<h2>Úplné nastavení</h2>

<p>Nastavení celé integrace služeb Google do služeb Moodle vyžaduje množství konfiguračních úkonů. 
Tento soubor nápovědy vás provede větší částí postupu konfigurace modulu plug-in Ověření Google a přípravy 
bloků GData a Gmail.</p>

<h4>Obsah:</h4>
<ul>
    <li><a href="#pre">Východiska a předpoklady</a></li>
    <li><a href="#status">Postup</a></li>
    <li><a href="#expect">Očekávané výsledky</a></li>
    <li><a href="#consider">Požadavky</a></li>
</ul>

<h4><a name="status" href="#status">Stav sady Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Východiska a předpoklady</a></h4>
<p>
<ol>
    <li>Byl nainstalován kód Gsaml, Gaccess, Gmail a Gdata</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (volitelně jako verze beta)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Postup</a></h4>
<ol>
    <li>Přihlaste se ke službě Moodle jako administrátor.</li>
    <li>Kliknutím na položku <b>Upozornění</b> aktualizujte tabulky bloků.</li>
    <li>Povolte modul plug-in <b>Ověření Google</b> ze stránky administrátora Správa modulů plug-in.</li>
    <li>Poté vyberte možnost Ověření uživatelů a přejděte k volbě <b>Ověření Google</b>. Na stránce se zobrazí další postup.</li>
    <li>Zadejte doménu stránky partnera Google.</li>
    <li>Nahrajte certifikát (další informace o jeho vytvoření naleznete v<a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html"> dokumentaci Google týkající se generování klíčů</a> ).</li>
    <li>Nahrajte soukromý klíč (další informace o jeho vytvoření naleznete v <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">dokumentaci Google týkající se generování klíčů</a>).</li>
    <li>Klikněte na položku Uložit.</li>
    <li>Postupujte podle pokynů k přidání správných adres URL na stránku jednotného přihlašování (SSO) Google.</li>
    <li>Zaškrtnutím políčka povolte jednotné přihlašování (SSO) na stránce Google.</li>
    <li>Na serveru Google povolte poskytování rozhraní API, jinak nedojde k aktualizaci uživatelů.</li>
    <li>Na serveru Google povolte poskytování rozhraní API.</li>
    <li>Na straně serveru Google bude pravděpodobné potřebné požádat o více uživatelských účtů.</li>
    <li>Vraťte se na hlavní stránku Moodle.</li>
    <li>Klikněte na položku Upravit.</li>
    <li>Přidejte na stránku bloky Gaccess, Gmail a Gdata.</li>
    <li>V bloku <b>Google Apps</b> klikněte na položku <b>Nastavení</b>. Vyplňte konfigurační informace.</li>
    <li>Kliknutím na odkaz Stav ověřte správné nastavení bloku Google Apps.</li>
    <li>Přejděte k nabídce Administrace serveru &gt; Zabezpečení &gt; Zásady serveru.</li>
    <li>Zkontrolujte zásady pro heslo.</li>
    <li>Nastavte délku hesla na 6 nebo více znaků (vyžadováno zásadami pro hesla Google).</li>
    <li>V bloku GData musíte přidat uživatele k synchronizaci tímto postupem: kliknutím přidejte uživatele do odkazu 
pro synchronizaci v <b>bloku Google Apps</b>. Pokud nastavíte proces Cron bloku GData na 1 minutu, usnadní to zobrazení výsledků.</li>
    <li>Chcete-li nahrát uživatele služby Moodle do služby Google, můžete proces Cron spustit ručně ze stránky admin/cron.php. Výsledky synchronizace by se měly zobrazit ve výpisu.
    <b>Upozorňujeme, že tato verze beta synchronizace uživatelů služby Moodle se službou Google může trvat <em>DLOUHO</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">Očekávané výsledky</a></h4>
<ul class="alternate" type="square">
    <li>Po kliknutí na některý z odkazů služby Google nebo přechodu na služby ze stránky partnera Google bude provedeno ověření ve službě Moodle.</li>
    <li>Uživatel bude přihlášen do služby Moodle i do služeb pro partnery Google.</li>
    <li>Další informace o nastavení naleznete na stránce <b>Diagnostika</b> v nastavení bloku GSAML.</li>
</ul>


<h4><a name="pre" href="#consider">Požadavky (pro verzi beta)</a></h4>
<ul class="alternate" type="square">
    <li>Kanál Gmail nebyl nalezen. Pravděpodobnou příčinou je skutečnost, že heslo uživatele nesouhlasí s heslem uživatele ve službě Google.
    V budoucnu nebude tato skutečnost způsobovat potíže. V současnosti je třeba synchronizovat uživatele pomocí bloku Google Apps. Aktualizace e-mailu bude provedena
    při přihlášení. V budoucnu budou nepřečtené zprávy aktualizovány v reálném čase.</li>

    <li>Umístění modulu plug-in Ověření Google v pořadí ověřování je důležité.
    V tuto chvíli musí být typ ověření uživatelů přepsán, když uživatel služby Moodle změní heslo.
    Toto chování může mít vliv na uživatele služby MNet. Řešení tohoto
    problému nebylo dosud nalezeno.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostika';
$string['diagnostics_help'] = '<h2>Diagnostika integrace Google</h2>
<p>Stránka diagnostiky zobrazuje informace o stavu připojení bloků Gmail, GData a SAML.
Zobrazení diagnostických informací mají povoleno pouze administrátoři.</p>

<h3>Obsah:</h3>
<ul>
    <li><a href="#setup">Informace o tabulkách konfigurace</a></li>
    <li><a href="#gdata">Stav připojení bloku Gdata</a></li>
    <li><a href="#gmail">Test připojení bloku Gmail</a></li>
    <li><a href="#saml">Test stavu jednotného přihlášení (SSO) služby SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informace o tabulkách konfigurace</a></h3>
<div class="indent">
    Tyto tabulky představují aktuální konfiguraci integrace služeb Moodle do služeb Google. Nastaveny musí být všechny hodnoty.
</div>

<h3><a name="gdata" href="#gdata">Připojení bloku Gdata</a></h3>
<div class="indent">
Blok Gdata umístěný ve složce blocks obsahuje knihovny různých služeb Google. Musíte potvrdit, že blok se dokáže připojit 
ke službám Google. Hodnoty můžete v případě potřeby upravit na stránce nastavení bloku Gdata.
</div>

<h3><a name="gmail" href="#gmail">Test připojení bloku Gmail</a></h3>
<div class="indent">
V současné době provede blok Gmail při přihlášení pouze obnovení nepřečtených zpráv uživatelů. Tento 
test lze spustit jen tehdy, je-li zapnuto ladění. Připravuje se podpora zobrazení nepřečtených zpráv v reálném čase.

</div>

<h3><a name="saml" href="#saml">Stav testu jednotného přihlašování (SSO) služby SAML</a></h3>
<div class="indent">
Test stavu služby SAML je nezávislou kontrolou procesu autorizace pomocí jednotného přihlašování (SSO). Proces ještě nebyl implementován.
<!--Je-li zapnuto ladění a nastaveno na hodnotu DEBUG_DEVELOPER, lze při přihlášení zobrazit informace o chybě. -->
</div>';
$string['keys'] = 'Klíče';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Klíče pro jednotné přihlašování (SSO) ke službám Google</h3>
<p>Služby Moodle i Google musí poskytovat zabezpečený autorizovaný přístup k důležitým prostředkům.
Administrátor musí vytvořit <b>ověřovací certifikát</b> a nahrát do služby Google certifikát ve formátu X.509 s vloženým veřejným klíčem.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Dokumentace Google týkající se generování klíčů</a>
Upozorňujeme, že služba jednotného přihlašování SAML ve službě Moodle využívá pouze <b>klíče RSA</b>.

</p>
</span>

<!--
<h4><a name="pem" href="#status">Stav sady Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certifikát</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Miniaplikace Moodle';
$string['mgadget_help'] = '<h2>Miniaplikace Google to Moodle</h2>

<p>Tento soubor nápovědy obsahuje stručný přehled miniaplikace Google to Moodle.</p>

<h3><a name="status" href="#status">Miniaplikace Moodle</a></h3>
<div class="indent">
    The <em>Miniaplikace Moodle</em> je miniaturní aplikace, kterou lze vložit na úvodní stránku partnera Google.

</div>


<p><b>Postup instalace na úvodní stránku uživatele</b></p>
<ol>
    <li>Přihlaste se ke službě Moodle.</li>
    <li>Klikněte na položku <b>Stránka partnera Google</b> v bloku <b>Přístup ke službám Google</b>.</li>
    <li>Klikněte na odkaz <b>Přidat položky</b>.</li>
    <li>Klikněte na odkaz <b>Přidat moji adresu URL</b>.</li>
    <li>Zadejte adresu URL miniaplikace Moodle.</li>
    <li>Adresa URL bude vypadat podobně: <br/><b>http://www.vasedomenamoodle.cz/auth/gsaml/moodlegadget.php.</b>
    <li>Adresu naleznete v nastavení modulu plug-in <b>Ověření Google</b> v bloku Administrace.</li>
    <li>Potom zkopírujte adresu URL do pole pro adresu URL. Klikněte na položku <b>Přidat</b>.</li>
    <li>Klikněte na položku <b>Zpět na hlavní stránku</b>.</li>
    <li>Zobrazí se blok s odkazem na váš web Moodle.</li>
</ol>



<h3><a name="status" href="#status">Požadavky (pro verzi beta)</a></h3>
<div class="indent">
    Toto je verze beta miniaplikace Google to Moodle. V budoucnu bude užitečnější.
    Aktuálně existuje známá chyba spočívající v tom, že se miniaplikace neaktualizuje ihned po instalaci.
    Na odstranění vývojáři pracují.
</div>';
$string['event_user_authenticated'] = 'Uživatel ověřen';
