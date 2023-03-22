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

$string['pluginname'] = 'Ověření SAML Google';
$string['blockname'] = 'Ověření SAML Google';
$string['domainname'] = 'Doména';
$string['auth_gsamldescription'] = 'Tento ověřovací plugin umožňuje jednotné přihlašování k Moodlu pomocí služby SAML SPS.';
$string['auth_gsamltitle'] = 'Ověření Google';
$string['cert'] = 'Osvědčení';
$string['key'] = 'Klíč RSA';
$string['domainnamestr'] = 'Název domény';
$string['rsakeystr'] = 'Soubor klíče RSA';
$string['desckeystr'] = 'Nahrajte klíč RSA (PEM). Upozorňujeme, že služba SAML systému Moodle podporuje pouze klíče s podpisem RSA.';
$string['googauthconfstr'] = 'Konfigurace ověření Google';
$string['ssl_str'] = 'Podpisový certifikát SSL';
$string['desc_certstr'] = 'Nahrajte certifikát X.509. Upozorňujeme, že tento soubor je stejný jako soubor, který nahrajete do služby Google.';
$string['setupinstrctstr'] = 'Pokyny k nastavení';
$string['mgadgetstr'] = 'Miniaplikace Moodle';
$string['mgadgethelp'] = 'Nápověda k miniaplikaci Moodle';
$string['googdiag'] = 'Diagnostika integrace Google';
$string['googdebugopts'] = 'Po dokončení konfigurace se můžete znovu přihlásit a navštívit';
$string['thediagnosticspage'] = 'Stránka diagnostiky';
$string['notadminnopermin'] = 'Nejste administrátor. K zobrazení těchto nastavení nemáte oprávnění.';
$string['nokeyuploaded'] = 'Nebyl nahrán žádný klíč.';
$string['filesnotsaved'] = 'Soubory nebyly uloženy.';
$string['keypathnotsaved'] = 'Cesta ke klíči není uložena.';
$string['uploadkeystr'] = 'Nahrát klíč';
$string['uploadkey'] = 'Nahrát klíč';
$string['uploadstr'] = 'Vložit';
$string['uploadthekey'] = 'Nahrát klíč';
$string['gadgetinfostr'] = 'Na následující adrese URL můžete přidat miniaplikaci Moodle na svou úvodní stránku Google.<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Odkaz na nastavení Google';
$string['nodomainyet'] = 'Zatím není nastavena žádná doména';
$string['gsamlsetuptableinfo'] = '<ol><li>Nastavte <b>Název domény</b> na název domény služby Google a potom klikněte na volbu <b>Uložit změny</b>.<br/><br/></li>
<li>V novém okně otevřete stránku Ovládací panel Google Apps jako správce (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Klikněte na kartu <b>Pokročilé nástroje</b>.<br/><br/></li>
<li>Klikněte na odkaz <b>Nastavit jednotné přihlášení (SSO)</b> vedle položky Ověření.<br/><br/></li>
<li>Nejprve zaškrtněte políčko <b>Povolit jednotné přihlášení</b>.<br/><br/></li>
<li>Nyní zadejte tuto adresu URL do textového pole <b>Adresa URL přihlašovací stránky</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Zadejte tuto adresu URL do textového pole <b>Adresa URL odhlašovací stránky</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Zadejte tuto adresu URL do textového pole <b>Adresa URL pro změnu hesla</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Vygenerujte a nahrajte <b>Osvědčení ověření pro Google (osvědčení X.509 obsahující veřejný klíč)</b><br/><br/></li>
<li>Nahrajte soukromý klíč a osvědčení také do systému Moodle a potom klikněte na volbu <b>Uložit změny</b></b><br/></li></ol>';
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
$string['trytoinitgdataconnection'] = 'Provádí se pokus o inicializaci bloku Gdata pro připojení ke službě Google<br/>';
$string['gsamlsuccess'] = 'Úspěch';
$string['gmailtestresults'] = 'Výsledky testu bloku Gmail';
$string['gmailtestwillnotrun'] = 'Test bloku Gmail nebude spuštěn, pokud služba Moodle není v režimu DEBUG_DEVELOPER.';
$string['obtainemailfeed'] = 'Získávání e-mailového kanálu pro uživatelské jméno:';
$string['currfileupload'] = 'Aktuální soubor:';
$string['nonestr'] = 'Bez určení';
$string['privatekeystr'] = 'Soukromý klíč';
$string['certificatestr'] = 'Osvědčení';
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
$string['info'] = 'Poznámka';
$string['contextinstanceid'] = 'ID instance';
$string['courseid'] = 'ID kurzu';
$string['eventname'] = 'Název události';
$string['otherlog'] = 'Jiné';
$string['useraccesedgservice'] = 'Uživatel nejprve přešel do služby gservice';
$string['userneedsredirect'] = 'Uživatel má požadavek SAML, ale potřebuje přihlášení/přesměrování';
$string['userislogged'] = 'Uživatel je přihlášen a má požadavek SAML';
$string['login'] = 'Přihlásit se';
$string['config_gsaml'] = 'Konfigurace SAML Google';
$string['config_gsaml_help'] = '<h2>Dokončení nastavení</h2>

<p>Nastavení úplné integrace Googlu do systému Moodle vyžaduje určitou konfiguraci. Tento soubor nápovědy by vás měl
provést většinou procesu konfigurace modulu plugin Ověření Google, stejně jako bloku GData a
bloku Gmail.</p>

<h4>Obsah:</h4>
<ul>
<li><a href="#pre">Předpoklady</a></li>
<li><a href="#status">Kroky</a></li>
<li><a href="#expect">Očekávané výsledky</a></li>
<li><a href="#consider">Důležité informace</a></li>
</ul>

<h4><a name="status" href="#status">Stav Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Předpoklady</a></h4>
<p>
<ol>
<li>GSAML, GAccess, Gmail, kód GData byly nainstalovány</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (volitelné od beta verze)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Kroky</a></h4>
<ol>
<li>Přihlášení se do systému Moodle jako správce</li>
<li>Kliknutím na volbu <b>Oznámení</b> aktualizujte tabulky bloku.</li>
<li>Povolte modul plugin <b>Ověření Google</b> ze stránky Správa modulů plugin.</li>
<li>Nyní vyberte ověření uživatelů, přejděte do části <b>Ověření Google</b>, na stránce by měly být uvedeny pokyny, kterými je třeba se řídit.</li>
<li>Zadejte doménu partnerské stránky Google.</li>
<li>Nahrajte osvědčení (další informace o vytvoření: <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Dokumentace Google týkající se generování klíčů</a>)</li>
<li>Nahrajte soukromý klíč (další informace o vytvoření: <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Dokumentace Google týkající se generování klíčů</a>)</li>
<li>Klikněte na Uložit.</li>
<li>Postupujte podle pokynů pro přidání správných adres URL na stránku Google SSO.</li>
<li>Kliknutím na zaškrtávací políčko na stránce Google povolte SSO.</li>
<li>Na stránce Google nezapomeňte povolit rozhraní API pro poskytování služeb, jinak nebudou aktualizováni žádní uživatelé.</li>
<li>Na webu Google se ujistěte, že je povoleno poskytování rozhraní API.</li>
<li>Ze strany společnosti Google bude možná potřeba vyžádat si více uživatelských účtů.</li>
<li>Vraťte se na hlavní stránku systému Moodle.</li>
<li>Klikněte na možnost Upravit.</li>
<li>Přidejte na stránku bloky GAccess, Gmail a GData.</li>
<li>Klikněte na možnost <b>Nastavení</b> v bloku <b>Google Apps</b>. Vyplňte informace o konfiguraci.</li>
<li>Klikněte na odkaz Stav a potvrďte, že je blok Google Apps správně nastaven.</li>
<li>Přejděte do části Správa webu &gt; Zabezpečení &gt; Zásady webu</li>
<li>Zkontrolujte zásady hesel.</li>
<li>Nastavte Délku hesla na 6 nebo více (vyžadováno pro zásady hesel Google).</li>
<li>V bloku GData je třeba přidat uživatele k synchronizaci. To provedete kliknutím na odkaz Přidat uživatele k synchronizaci v <b>bloku
Google Apps</b>. Pro zobrazení výsledku pomůže, když nastavíte cron bloku GData na hodnotu 1 min.</li>
<li>Pro nahrání těchto uživatelů systému Moodle do Googlu můžete spustit cron ručně z adresy admin/cron.php. Výsledky synchronizace by se měly objevit ve výpisu.
<b>Pozor, od této beta verze může synchronizace uživatelů systému Moodle s Googlem trvat <em>DLOUHO</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">Očekávané výsledky</a></h4>
<ul class="alternate" type="square">
<li>Kliknutím na libovolný odkaz na službu Google nebo návštěvou služeb na partnerské stránce Google se
provede ověření proti systému Moodle.</li>
<li>Uživatel by měl být přihlášen do systému Moodle i do partnerských služeb Google.</li>
<li>Další informace o vašem nastavení najdete na <b>stránce Diagnostika</b> v nastavení GSAML.</li>
</ul>


<h4><a name="pre" href="#consider">Důležité informace (od BETA verze)</a></h4>
<ul class="alternate" type="square">
<li>Kanál služby Gmail možná nebude nalezen. Důvodem je pravděpodobně to, že heslo uživatele neodpovídá uživatelskému heslu Google.
V budoucnu to již nebude problém. Prozatím nezapomeňte uživatele synchronizovat s blokem Google Apps. E-mail se aktualizuje
po přihlášení. V budoucnu by se nepřečtené zprávy měly aktualizovat v reálném čase.</li>

<li>Důležité je umístění modulu plugin Ověření Google v pořadí ověřování.
Od této chvíle musí přepsat typ ověření uživatele, když uživatel systému Moodle změní heslo.
Toto chování může mít vliv na uživatele MNet. Řešení tohoto problému prozatím nebylo nalezeno.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostika';
$string['diagnostics_help'] = '<h2>Diagnostika integrace Google</h2>
<p>Na stránce Diagnostika se zobrazují informace o stavu připojení služeb Gmail, GData a SAML.
Oprávnění k zobrazení diagnostických informací mají jen správci.</p>

<h3>Obsah:</h3>
<ul>
<li><a href="#setup">Nastavení tabulkových informací</a></li>
<li><a href="#gdata">Stav propojení GData</a></li>
<li><a href="#gmail">Test připojení bloku služby Gmail</a></li>
<li><a href="#saml">Test stavu SSO SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informace o konfigurační tabulce</a></h3>
<div class="indent">
Tyto tabulky představují aktuální konfiguraci integrace systému Moodle s Googlem. Zkontrolujte, zda jsou nastaveny všechny hodnoty.
</div>

<h3><a name="gdata" href="#gdata">Propojení GData</a></h3>
<div class="indent">
Blok GData umístěný ve složce bloků obsahuje knihovny pro různé služby Google. Je třeba potvrdit,
že se dokáže ke službám Google připojit. Možná bude nutné upravit hodnoty na stránce Nastavení bloku GData.
</div>

<h3><a name="gmail" href="#gmail">Test připojení bloku služby Gmail</a></h3>
<div class="indent">
V současné době blok Gmail pouze obnoví nepřečtené zprávy uživatele po přihlášení. Test zde bude možné
spustit pouze v případě, že je zapnuto ladění. Podpora zobrazování nepřečtených zpráv v reálném čase se chystá.
</div>

<h3><a name="saml" href="#saml">Test stavu SSO SAML</a></h3>
<div class="indent">
Test stavu SAML je nezávislou kontrolou procesu autorizace SSO. Zatím nebyl implementován.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Klíče';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Klíče SSO Google</h3>
<p>Systémy Moodle i Google musejí být schopny bezpečně autorizovat přístup k důležitým zdrojům.
Správce musí vygenerovat <b>osvědčení ověření</b> a nahrát do služby Google osvědčení ve formátu X.509 s vloženým
veřejným klíčem.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Dokumentace Google týkající se generování klíčů</a>
Služba SAML Moodle SSO používá pouze <b>klíče RSA</b>.
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
$string['mgadget'] = 'Miniaplikace Moodle';
$string['mgadget_help'] = '<h2>Miniaplikace Google do systému Moodle</h2>

<p>Tento soubor nápovědy poskytuje stručný přehled miniaplikace Google pro váš web Moodle.</p>

<h3><a name="status" href="#status">Miniaplikace Moodle</a></h3>
<div class="indent">
<em>Miniaplikace Moodle</em> je miniaplikace, kterou můžete vložit na úvodní stránku partnerské služby Google.
</div>


<p><b>Kroky pro instalaci na úvodní stránku uživatele</b></p>
<ol>
<li>Přihlaste se do systému Moodle.</li>
<li>Klikněte na <b>partnerskou stránku Google</b> v bloku <b>Přístup ke službám Google</b>.</li>
<li>Klikněte na odkaz <b>Přidat položky</b>.</li>
<li>Klikněte na <b>Přidat mou adresu URL</b>.</li>
<li>Zadejte adresu URL miniaplikace Moodle</li>
<li>Adresa URL bude vypadat nějak takto:<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Dá se najít v nastavení <b>Ověření Google</b> z bloku pro správu.</li>
<li>Po zkopírování adresy URL do pole adresy URL klikněte na tlačítko <b>Přidat</b></li>
<li>Klikněte na možnost <b>Zpět na domovskou stránku</b>.</li>
<li>Nyní byste měli vidět blok obsahující odkaz na váš web systému Moodle.</li>
</ol>



<h3><a name="status" href="#status">Důležité informace (od BETA verze)</a></h3>
<div class="indent">
Jedná se o beta verzi prototypu této miniaplikace Google Moodle. V budoucnu může být mnohem užitečnější.
V současné době je známa chyba týkající se miniaplikace, kdy se miniaplikace neaktualizuje ihned po instalaci.
Vývojáři se jí zabývají.
</div>';
$string['event_user_authenticated'] = 'Uživatel ověřen';
