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

$string['pluginname'] = 'Uwierzytelnienie Google SAML';
$string['blockname'] = 'Uwierzytelnienie Google SAML';
$string['domainname'] = 'Domena';
$string['auth_gsamldescription'] = 'Ta wtyczka uwierzytelnienia włączy jednokrotne logowanie SSO w systemie Moodle za pośrednictwem dostawców usług SAML.';
$string['auth_gsamltitle'] = 'Uwierzytelnienie Google';
$string['cert'] = 'Certyfikat';
$string['key'] = 'Klucz RSA';
$string['domainnamestr'] = 'Nazwa domeny';
$string['rsakeystr'] = 'Plik klucza RSA';
$string['desckeystr'] = 'Należy przesłać klucz RSA (pem). Usługa SAML Moodle obsługuje wyłącznie oznaczone klucze RSA.';
$string['googauthconfstr'] = 'Konfiguracja uwierzytelnienia Google';
$string['ssl_str'] = 'Certyfikat SSL';
$string['desc_certstr'] = 'Należy przesłać certyfikat X.509. Jest to ten sam plik, który zostanie przesłany do przeglądarki Google.';
$string['setupinstrctstr'] = 'Instrukcje konfigurowania';
$string['mgadgetstr'] = 'Moodle Gadget';
$string['mgadgethelp'] = 'Pomoc Moodle Gadget';
$string['googdiag'] = 'Diagnostyka integracji Google';
$string['googdebugopts'] = 'Po zakończeniu konfiguracji można zalogować się ponownie, aby odwiedzić stronę';
$string['thediagnosticspage'] = 'Strona diagnostyczna';
$string['notadminnopermin'] = 'Nie jesteś administratorem. Nie masz uprawnień, aby wyświetlić te ustawienia.';
$string['nokeyuploaded'] = 'Nie przesłano żadnego klucza';
$string['filesnotsaved'] = 'Pliki nie zostały zapisane.';
$string['keypathnotsaved'] = 'Ścieżka klucza nie została zapisana.';
$string['uploadkeystr'] = 'Prześlij klucz';
$string['uploadkey'] = 'Prześlij klucz';
$string['uploadstr'] = 'Prześlij';
$string['uploadthekey'] = 'Prześlij klucz';
$string['gadgetinfostr'] = 'Skorzystaj z poniższego adresu URL, aby dodać gadżet Moodle do swojej strony startowej Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link do ustawień Google';
$string['nodomainyet'] = 'Nie ustawiono żadnej domeny';
$string['gsamlsetuptableinfo'] = '<ol><li>Jako <b>Nazwę domeny</b> ustaw nazwę domeny usługi Google, a następnie kliknij przycisk <b>Zapisz zmiany</b><br/><br/></li>
<li>W nowym oknie otwórz stronę panelu sterowania Google Apps jako administrator (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Kliknij kartę <b>Narzędzia zaawansowane</b>.<br/><br/></li>
<li>Kliknij łącze <b>Skonfiguruj jednokrotne logowanie</b> obok opcji Uwierzytelnienie.<br/><br/></li>
<li>Najpierw zaznacz pole <b>Włącz jednokrotne logowanie</b>.<br/><br/></li>
<li>Następnie wpisz poniższy adres URL w polu tekstowym <b>adresu URL na stronie logowania</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Wpisz poniższy adres URL w polu tekstowym <b>adresu URL na stronie wylogowania</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Wpisz poniższy adres URL w polu tekstowym <b>adresu URL zmiany hasła</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Wygeneruj i prześlij <b>certyfikat weryfikacji do przeglądarki Google (certyfikat X.509 zawierający klucz publiczny)</b><br/><br/></li>
<li>Prześlij prywatny klucz i certyfikat również do systemu Moodle, a następnie kliknij <b>Zapisz zmiany</b></b><br/></li></ol>';
$string['tomoodle'] = 'Do Moodle';
$string['errusernotloggedin'] = 'Logowanie użytkownika nie powiodło się';
$string['pwdnotvalid'] = 'Niepoprawne hasło';
$string['samlcodefailed'] = 'Błąd kodu SAML. Aby odkryć przyczynę, włącz debugowanie.';
$string['samlauthcodefailed'] = 'Błąd kodu uwierzytelnienia SAML. Aby odkryć przyczynę, włącz debugowanie.';
$string['sixcharmsg'] = 'Hasło użytkownika do integracji przeglądarki Google musi być dłuższe niż 6 znaków. Należy powiadomić administratora o potrzebie zmiany ustawień zasad użytkowania witryny.';
$string['errordecodingsamlrequest'] = 'Problem z odkodowaniem żądania SAML lub gzinflating (możliwe, że jest to błąd ustawień protokołu HTTPS; należy sprawdzić konfigurację pojedycznego logowania przeglądarki Google): {$a}';
$string['googsamldiag'] = 'Diagnostyka Google SAML';
$string['notadminnoperm'] = 'Użytkownik nie jest administratorem strony. Brak uprawnień do wyświetlenia tych informacji.';
$string['gdatanotconfig'] = 'Tabela konfiguracji GData nie została ustawiona.';
$string['googlesamlconfigdata'] = 'Dane konfiguracji Google SAML';
$string['gsamlconfignotset'] = 'Konfiguracja Google SAML nie została ustawiona';
$string['gdataconfignotset'] = 'Tabela konfiguracji GData nie została ustawiona';
$string['gdataconfig'] = 'Konfiguracja GData';
$string['gmailconfig'] = 'Konfiguracja GMail';
$string['componentinstallcheck'] = 'Wstępna kontrola instalacji komponentów';
$string['gdatanotinstalled'] = 'Blok GData nie został zainstalowany\\n';
$string['gappsblockinstalled'] = 'Blok GApps został zainstalowany\\n';
$string['gmailblocknotinstalled'] = 'Blok GMail nie został zainstalowany';
$string['gmailblockinstalled'] = 'Blok GMail został zainstalowany\\n';
$string['gdataapitestresults'] = 'Wyniki testu GData API';
$string['trytoinitgdataconnection'] = 'Próba nawiązania połączenia aplikacji GData z przeglądarką Google<br/>';
$string['gsamlsuccess'] = 'Gotowe';
$string['gmailtestresults'] = 'Wyniki testu aplikacji GMail';
$string['gmailtestwillnotrun'] = 'Aby uruchomić test aplikacji GMail, system Moodle musi działać w trybie DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Uzyskiwanie kanału wiadomości e-mail dla nazwy użytkownika:';
$string['currfileupload'] = 'Bieżący plik:';
$string['nonestr'] = 'żaden';
$string['privatekeystr'] = 'Klucz prywatny';
$string['certificatestr'] = 'Certyfikat';
$string['statustab'] = 'Stan';
$string['logstab'] = 'Dzienniki SAML';
$string['ssoteststab'] = 'Testy pojedynczego logowania';
$string['docstab'] = 'Dokumentacja';
$string['id'] = 'Id';
$string['time'] = 'Czas (suma)';
$string['userid'] = 'ID użytkownika';
$string['ip'] = 'Adres IP';
$string['course'] = 'Kurs';
$string['module'] = 'Moduł';
$string['cmid'] = 'cmid';
$string['action'] = 'Akcja';
$string['url'] = 'adres URL';
$string['info'] = 'Informacja';
$string['contextinstanceid'] = 'ID instancji';
$string['courseid'] = 'ID kursu';
$string['eventname'] = 'Nazwa wydarzenia';
$string['otherlog'] = 'Inny';
$string['useraccesedgservice'] = 'Użytkownik najpierw uzyskał dostęp do gservice';
$string['userneedsredirect'] = 'Użytkownik ma żądanie saml, ale potrzebuje zalogowania/przekierowania';
$string['userislogged'] = 'Użytkownik jest zalogowany i ma żądanie saml';
$string['login'] = 'Zaloguj się';
$string['config_gsaml'] = 'Konfiguracja Google SAML';
$string['config_gsaml_help'] = '<h2>Pełna konfiguracja</h2>

<p>Ustawienie pełnej integracji Google z systemem Moodle wymaga przeprowadzenia odpowiedniej konfiguracji. Ten plik pomocy
opisuje prawie cały proces konfiguracji wtyczki Uwierzytelnianie Google oraz przygotowania bloków GData
i Gmail.</p>

<h4>Tabela zawartości:</h4>
<ul>
<li><a href="#pre">Warunki wstępne</a></li>
<li><a href="#status">Kroki</a></li>
<li><a href="#expect">Oczekiwane wyniki</a></li>
<li><a href="#consider">Inne kwestie</a></li>
</ul>

<h4><a name="status" href="#status">Stan Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Warunki wstępne / założenia</a></h4>
<p>
<ol>
<li>Kody GSAML, GAccess, Gmail, GData zostały zainstalowane</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (opcjonalnie od wersji beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Kroki</a></h4>
<ol>
<li>Zaloguj się do Moodle jako administrator</li>
<li>Kliknij <b>Powiadomienia</b>, aby zaktualizować tabele bloków</li>
<li>Włącz wtyczkę <b>Uwierzytelnianie Google</b> na stronie administratora Zarządzaj wtyczkami</li>
<li>Następnie wybierz opcję Uwierzytelnianie użytkowników i przejdź do strony <b>Uwierzytelnianie Google</b>, na której powinny znajdować się dalsze instrukcje.</li>
<li>Wprowadź domenę strony Google Partner</li>
<li>Prześlij certyfikat (dodatkowe informacje na temat jego tworzenia zawiera <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;dokumentacja przeglądarki Google dotycząca generowania kluczy</a> )</li>
<li>Prześlij klucz prywatny (dodatkowe informacje na temat jego tworzenia zawiera <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;dokumentacja przeglądarki Google dotycząca generowania kluczy</a>)</li>
<li>Kliknij przycisk Zapisz</li>
<li>Postępuj zgodnie z instrukcjami dotyczącymi dodawania właściwych adresów URL na stronie logowania jednokrotnego (SSO) przeglądarki Google</li>
<li>Zaznacz pole wyboru na stronie Google, aby włączyć logowanie jednokrotne</li>
<li>Na stronie Google włącz opcję Zastrzeganie interfejsu API — w przeciwnym wypadku użytkownicy nie zostaną zaktualizowani.</li>
<li>Na stronie Google upewnij się, że opcja Zastrzeganie interfejsu API jest włączona</li>
<li>Na stronie Google można zażądać utworzenia większej liczby kont użytkowników</li>
<li>Wróć do strony głównej systemu Moodle</li>
<li>Kliknij opcję Edytuj</li>
<li>Dodaj do strony bloki GAccess, Gmail i GData.</li>
<li>Kliknij opcję <b>Ustawienia</b> w bloku <b>Google Apps</b>. Wprowadź informacje dotyczące konfiguracji.</li>
<li>Kliknij łącze Status, aby potwierdzić, że blok Google Apps został prawidłowo skonfigurowany.</li>
<li>Przejedź do strony Administracja &gt; Bezpieczeństwo &gt; Zasady korzystania z witryny</li>
<li>Sprawdź zasady korzystania z haseł</li>
<li>Ustaw długość hasła na 6 znaków lub więcej (wymóg określony przez zasady korzystania z haseł w przeglądarce Google)</li>
<li>W bloku GData dodaj użytkowników do synchronizacji. W tym celu kliknij łącze Dodaj użytkowników do synchronizacji w bloku <b>Google
Apps</b>. Warto sprawdzić wyniki w przypadku ustawienia crona bloku GData na 1 minutę.</li>
<li>Aby przesłać wybranych użytkowników systemu Moodle do usług Google, możesz uruchomić crona ręcznie z poziomu strony admin/cron.php. Wyniki synchronizacji powinny pojawić się w odczycie.
<b>Uwaga: w wersji beta synchronizacja użytkowników Moodle z platformą Google może zająć <em>DUŻO</em> czasu.</b></li>
</ol>

<h4><a name="pre" href="#expect">Oczekiwane wyniki</a></h4>
<ul class="alternate" type="square">
<li>Kliknięcie dowolnego łącza do usług Google lub przejście do usług ze strony Google Partner
zapewni uwierzytelnienie systemu Moodle.</li>
<li>Użytkownik powinien być zalogowany w systemie Moodle oraz w usługach Google Partner</li>
<li>Dodatkowe informacje na temat konfiguracji są dostępne na stronie <b>Diagnostyka</b> w ustawieniach GSAML.</li>
</ul>


<h4><a name="pre" href="#consider">Inne kwestie (wersja BETA)</a></h4>
<ul class="alternate" type="square">
<li>Może wystąpić problem z wyszukaniem kanału Gmail. Prawdopodobną przyczyną jest niezgodność hasła użytkownika z hasłem użytkownika na platformie Google.
W przyszłości ten problem zostanie rozwiązany. Obecnie trzeba zsynchronizować użytkowników za pośrednictwem bloku Google Apps. Skrzynka poczty elektronicznej zostanie zaktualizowana
po zalogowaniu się. W przyszłości nieprzeczytane wiadomości będą aktualizowane w czasie rzeczywistym.</li>

<li>Istotna jest lokalizacja wtyczki Uwierzytelnianie Google w kolejności uwierzytelniania.
Obecnie musi zastąpić typ uwierzytelnienia użytkownika systemu Moodle, gdy ten zmieni hasło.
Może to powodować problemy dla użytkowników usługi MNet. Nie znaleziono jeszcze rozwiązania tego problemu.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostyka';
$string['diagnostics_help'] = '<h2>Diagnostyka integracji Google</h2>
<p>Strona Diagnostyka zawiera informacje na temat statusu połączeń Gmail, GData i SAML.
Tylko administratorzy mają uprawnienia do wyświetlania informacji diagnostycznych.</p>

<h3>Tabela zawartości:</h3>
<ul>
<li><a href="#setup">Informacje dotyczące tabel konfiguracji</a></li>
<li><a href="#gdata">Status połączenia GData</a></li>
<li><a href="#gmail">Test połączenia bloku Gmail</a></li>
<li><a href="#saml">Test stanu logowania jednokrotnego SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informacje dotyczące tabel konfiguracji</a></h3>
<div class="indent">
Te tabele przedstawiają aktualną konfigurację integracji systemu Moodle z usługami Google. Upewnij się, że ustawiono wszystkie wartości.
</div>

<h3><a name="gdata" href="#gdata">Połączenie GData</a></h3>
<div class="indent">
Blok GData, który znajduje się w folderze bloków, zawiera biblioteki dla różnych usług Google. Należy sprawdzić,
czy blok może połączyć się z usługami Google. Może być konieczne dostosowanie wartości na stronie ustawień bloku GData.
</div>

<h3><a name="gmail" href="#gmail">Test połączenia bloku Gmail</a></h3>
<div class="indent">
W chwili obecnej blok Gmail odświeża nieprzeczytane wiadomości użytkowników tylko podczas logowania. Ten test można
przeprowadzić tylko po włączeniu opcji usuwania błędów. Wkrótce uruchomiona zostanie obsługa nieprzeczytanych wiadomości w czasie rzeczywistym.
</div>

<h3><a name="saml" href="#saml">Test stanu logowania jednokrotnego SAML</a></h3>
<div class="indent">
Test stanu SAML to niezależna kontrola procesu uwierzytelniania logowania jednokrotnego. Nie został jeszcze wdrożony.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Klucze';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Klucze logowania jednokrotnego do usług Google</h3>
<p>Zarówno system Moodle, jak i usługi Google muszą być w stanie zapewnić bezpieczne uwierzytelnienie dostępu do ważnych zasobów.
Administrator musi wygenerować <b>Certyfikat weryfikacji</b>, a następnie przesłać sformatowany certyfikat X.509 z osadzonym kluczem
publicznym do firmy Google.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Dokumentacja Google dotycząca generowania kluczy</a>
Pamiętaj, że usługa logowania jednokrotnego SAML Moodle korzysta wyłącznie z <b>kluczy RSA.</b>
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
$string['mgadget_help'] = '<h2>Gadżet Google do systemu Moodle</h2>

<p>Ten plik pomocy zawiera krótki opis gadżetów Google do stosowania w witrynie Moodle</p>

<h3><a name="status" href="#status">Gadżet Moodle</a></h3>
<div class="indent">
<em>Gadżet Moodle</em> to gadżet, który można osadzić na stronie startowej Google Partner.
</div>


<p><b>Etapy instalacji na stronie startowej użytkowników</b></p>
<ol>
<li>Zaloguj się do systemu Moodle</li>
<li>Kliknij <b>stronę Google Partner</b> w bloku <b>Dostęp do usług Google</b></li>
<li>Kliknij łącze <b>Dodaj elementy</b></li>
<li>Kliknij opcję <b>Dodaj mój adres URL</b></li>
<li>Wprowadź adres URL gadżetu moodle</li>
<li>Ten adres URL wygląda mniej więcej tak:<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Można go znaleźć w ustawieniach <b>Uwierzytelnienie Google</b> w bloku administracyjnym</li>
<li>Po skopiowaniu adresu URL do pola adresu URL kliknij opcję <b>Dodaj</b></li>
<li>Kliknij opcję <b>Wróć do strony głównej</b></li>
<li>Blok zawierający łącze do strony Moodle użytkownika powinien już być widoczny</li>
</ol>



<h3><a name="status" href="#status">Inne kwestie (wersja BETA)</a></h3>
<div class="indent">
Jest to wersja beta prototypu gadżetu Google do systemu Moodle. W przyszłości jego funkcjonalność będzie o wiele większa.
Aktualnie stwierdzono błąd polegający na braku natychmiastowej aktualizacji po instalacji.
Programiści obecnie nad tym pracują.
</div>';
$string['event_user_authenticated'] = 'Użytkownik uwierzytelniony';
