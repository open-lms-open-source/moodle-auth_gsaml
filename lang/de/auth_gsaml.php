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
 * @copyright  Copyright (c) 2022 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Google SAML-Authentifizierung';
$string['blockname'] = 'Google SAML-Authentifizierung';
$string['domainname'] = 'Domäne';
$string['auth_gsamldescription'] = 'Dieses Authentifizierungs-Plugin ermöglicht Moodle ein Single-Sign-On mit SAML SPS.';
$string['auth_gsamltitle'] = 'Google-Authentifizierung';
$string['cert'] = 'Zertifikat';
$string['key'] = 'RSA-Schlüssel';
$string['domainnamestr'] = 'Domänenname';
$string['rsakeystr'] = 'RSA-Schlüsseldatei';
$string['desckeystr'] = 'Laden Sie den RSA-Schlüssel (pem) hoch. Beachten Sie, dass der Moodle SAML-Service nur signierte RSA-Schlüssel unterstützt.';
$string['googauthconfstr'] = 'Konfiguration der Google-Authentifizierung';
$string['ssl_str'] = 'SSL-Signierungszertifikat';
$string['desc_certstr'] = 'Laden Sie das X.509-Zertifikat hoch. Beachten Sie, dass dies dieselbe Datei ist, die Sie auch zu Google hochladen.';
$string['setupinstrctstr'] = 'Anweisungen einrichten';
$string['mgadgetstr'] = 'Moodle-Gadget';
$string['mgadgethelp'] = 'Hilfe zu Moodle-Gadget';
$string['googdiag'] = 'Google Integration-Diagnose';
$string['googdebugopts'] = 'Sobald die Konfiguration abgeschlossen ist, haben Sie die Möglichkeit zur erneuten Anmeldung und zum Öffnen von';
$string['thediagnosticspage'] = 'Die Seite Diagnose';
$string['notadminnopermin'] = 'Sie sind kein Administrator. Sie haben keine Berechtigung, diese Einstellungen anzuzeigen.';
$string['nokeyuploaded'] = 'Kein Schlüssel hochgeladen';
$string['filesnotsaved'] = 'Dateien nicht gespeichert.';
$string['keypathnotsaved'] = 'Schlüsselpfad nicht gespeichert.';
$string['uploadkeystr'] = 'Laden Sie den Schlüssel hoch';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Hochladen';
$string['uploadthekey'] = 'Schlüssel hochladen';
$string['gadgetinfostr'] = 'Verwenden Sie die folgende URL, um das Moodle-Gadget zu Ihrer Google-Startseite hinzuzufügen<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link zu Google-Einstellungen';
$string['nodomainyet'] = 'Noch keine Domäne festgelegt';
$string['gsamlsetuptableinfo'] = '<ol><li>Legen Sie den <b>Domänennamen</b> zu Ihrem Google Service-Domänennamen fest und klicken Sie dann auf <b>Änderungen speichern</b><br/><br/></li>
<li>Öffnen Sie Seite der Google Apps-Systemsteuerung in einem neuen Fenster als Administrator/in (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Klicken Sie auf die Registerkarte <b>Erweiterte Tools</b>.<br/><br/></li>
<li>Klicken Sie auf den Link <b>Einrichten von Single Sign-On (SSO)</b> neben Authentifizierung.<br/><br/></li>
<li>Aktivieren Sie zunächst das Kontrollkästchen <b>Single Sign-On aktivieren</b>.<br/><br/></li>
<li>Fügen Sie dann diese URL in das Textfeld <b>URL der Anmeldeseite</b> ein.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Fügen Sie diese URL in das Textfeld <b>URL der Abmeldeseite</b> ein.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Fügen Sie diese URL in das Textfeld <b>URL zur Kennwortänderung</b> ein.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Generieren Sie ein <b>Verifizierungszertifikat und laden Sie es in Google hoch (X.509-Zertifikat mit dem öffentlichen Schlüssel)</b><br/><br/></li>
<li>Laden Sie den privaten Schlüssel und das Zertifikat auch in Moodle hoch und klicken Sie dann auf <b>Änderungen speichern</b></b><br/></li></ol>';
$string['tomoodle'] = 'Zu Moodle';
$string['errusernotloggedin'] = 'Nutzer konnte nicht angemeldet werden';
$string['pwdnotvalid'] = 'Kennwort ungültig';
$string['samlcodefailed'] = 'SAML-Code konnte Debugging nicht aktivieren, um herauszufinden, warum';
$string['samlauthcodefailed'] = 'SAML-Authentifizierungscode konnte Debugging für weitere Informationen nicht aktivieren';
$string['sixcharmsg'] = 'Nutzerkennwort muss für Google Integration mehr als 6 Zeichen lang sein. Bitten Sie Ihren Admin, die Einstellungen der Website-Richtlinien anzupassen';
$string['errordecodingsamlrequest'] = 'Problem beim Decodieren von SAML-Anforderung oder GZ-Komprimierung (Möglicherweise ein Fehler der HTTPS-Einstellungen. Prüfen Sie Ihre Google SSO-Konfiguration): {$a}';
$string['googsamldiag'] = 'Google SAML-Diagnose';
$string['notadminnoperm'] = 'Sie sind kein Site-Administrator. Sie haben keine Berechtigung, diese Informationen anzuzeigen.';
$string['gdatanotconfig'] = 'GData-Konfigurationstabelle nicht festgelegt.';
$string['googlesamlconfigdata'] = 'Google SAML-Konfigurationsdaten';
$string['gsamlconfignotset'] = 'Google SAML-Konfiguration wurde noch nicht festgelegt';
$string['gdataconfignotset'] = 'GData-Konfigurationstabelle nicht festgelegt';
$string['gdataconfig'] = 'GData-Konfiguration';
$string['gmailconfig'] = 'Gmail-Konfiguration';
$string['componentinstallcheck'] = 'Vorabprüfung der Komponenteninstallation';
$string['gdatanotinstalled'] = 'GData-Block Design ist nicht installiert\\n';
$string['gappsblockinstalled'] = 'GApps-Block installiert\\n';
$string['gmailblocknotinstalled'] = 'Gmail-Block ist nicht installiert';
$string['gmailblockinstalled'] = 'Gmail-Block installiert\\n';
$string['gdataapitestresults'] = 'GData API-Testergebnisse';
$string['trytoinitgdataconnection'] = 'Versuch, eine GData-zu-Google-Verbindung zu initiieren<br/>';
$string['gsamlsuccess'] = 'Erfolg';
$string['gmailtestresults'] = 'Gmail-Testergebnisse';
$string['gmailtestwillnotrun'] = 'Gmail-Test wird nur ausgeführt, wenn Moodle im DEBUG_DEVELOPER-Modus ist';
$string['obtainemailfeed'] = 'Abrufen des E-Mail-Feeds für Nutzernamen:';
$string['currfileupload'] = 'Aktuelle Datei:';
$string['nonestr'] = 'Keine';
$string['privatekeystr'] = 'Privater Schlüssel';
$string['certificatestr'] = 'Zertifikat';
$string['statustab'] = 'Status';
$string['logstab'] = 'SAML-Protokolle';
$string['ssoteststab'] = 'SSO-Tests';
$string['docstab'] = 'Dokumentation';
$string['id'] = 'ID';
$string['time'] = 'Zeit';
$string['userid'] = 'UserID';
$string['ip'] = 'IP-Adresse';
$string['course'] = 'Kurs';
$string['module'] = 'Modul';
$string['cmid'] = 'cmid';
$string['action'] = 'Aktion';
$string['url'] = 'URL';
$string['info'] = 'Informationen';
$string['config_gsaml'] = 'Konfigurieren von Google SAML';
$string['config_gsaml_help'] = '<h2>Vollständige Einrichtung</h2>

<p>Für die Einrichtung der vollen Google zu Moodle-Integration ist ein wenig Konfiguration erforderlich. Diese Hilfedatei soll
Sie durch den Großteil des Vorgangs führen, die Google-Authentifizierungsmethode zu konfigurieren und den GData- und
Gmail-Block fertig zu stellen.</p>

<h4>Inhaltsverzeichnis:</h4>
<ul>
<li><a href="#pre">Voraussetzungen</a></li>
<li><a href="#status">Schritte</a></li>
<li><a href="#expect">Erwartete Ergebnisse</a></li>
<li><a href="#consider">Überlegungen</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps-Status</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Voraussetzungen/Annahmen</a></h4>
<p>
<ol>
<li>GSAML-, GAccess-, Gmail- und GData-Code wurden installiert</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (ab Beta-Version optional)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Schritte</a></h4>
<ol>
<li>Melden Sie sich bei Moodle als ein(e) Administrator/in an</li>
<li>Klicken Sie auf <b>Benachrichtigungen</b>, um die Blocktabellen zu aktualisieren</li>
<li>Aktivieren Sie das Plugin <b>Google-Authentifizierung</b> auf der Admin-Seite für die Plugin-Verwaltung</li>
<li>Wählen Sie nun die Nutzer-Authentifizierung. Gehen Sie dazu zu <b>Google-Authentifizierung</b>. Dort finden Sie Anleitungen auf der Seite.</li>
<li>Geben Sie die Domäne Ihrer Google-Partnerseite ein</li>
<li>Laden Sie das Zertifikat hoch (weitere Informationen zu dessen Erstellung finden Sie unter <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zur Schlüsselgenerierung</a>)</li>
<li>Laden Sie den privaten Schlüssel hoch (weitere Informationen zu dessen Erstellung finden Sie unter <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zur Schlüsselgenerierung</a>)</li>
<li>Klicken Sie auf Speichern</li>
<li>Gehen Sie gemäß den Anweisungen zum Hinzufügen der richtigen URLs zur SSO-Seite vor</li>
<li>Aktivieren Sie das Kontrollkästchen auf der Google-Website, um SSO zu aktivieren</li>
<li>Achten Sie darauf, das Bereitstellungs-API auf der Google-Website zu aktivieren, da sonst keine Nutzer/innen aktualisiert werden.</li>
<li>Stellen Sie sicher, dass die API-Bereitstellung auf der Google-Website aktiviert ist</li>
<li>Möglicherweise müssen Sie auf der Google-Website weitere Nutzerkonten anfordern</li>
<li>Kehren Sie zur Hauptseite von Moodle zurück</li>
<li>Klicken Sie auf Bearbeiten</li>
<li>Fügen Sie der Seite GAccess-, GMail- und Gdata-Blöcke hinzu.</li>
<li>Klicken Sie auf <b>Einstellungen</b> im <b>Google Apps-</b> Block. Tragen Sie die Konfigurationsinformationen ein.</li>
<li>Klicken Sie auf den Link Status, um zu bestätigen, dass Ihr Google Apps-Block ordnungsgemäß eingerichtet ist.</li>
<li>Wechseln Sie zu Website-Administration &gt; Sicherheit &gt; Website-Richtlinien</li>
<li>Überprüfen Sie die Kennwortregeln</li>
<li>Stellen Sie die Kennwortlänge auf 6 oder mehr Zeichen ein (erforderlich für die Google-Kennwortregeln)</li>
<li>Im Block GData müssen Sie zu synchronisierende Nutzer/innen hinzufügen. Klicken Sie dazu auf den Link zum Hinzufügen von zu synchronisierenden Nutzern/innen im <b>Google Apps-Block</b>. Das hilft bei der Anzeige der Ergebnisse, wenn Sie den Gdata-Block-Cron auf 1 Min. festlegen.</li>
<li>Um diese(n) Moodle-Nutzer/in in Google hochzuladen, können Sie den Cron manuell ausführen. Dazu öffnen Sie admin/cron.php. Die Ergebnisse für die Synchronisierung sollten im Lesebereich angezeigt werden.
<b>Vorsicht: Ab dieser Beta-Version kann die Synchronisierung von Moodle-Nutzern/innen mit Google eine <em>LANGE</em> Zeit dauern.</b></li>
</ol>

<h4><a name="pre" href="#expect">Erwartete Ergebnisse</a></h4>
<ul class="alternate" type="square">
<li>Wenn Sie auf keinen der Google Service-Links klicken oder Services von der Google-Partnerseite besuchen,
erfolgt eine Authentifizierung gegenüber Moodle.</li>
<li>Die Nutzer/innen müssen bei Moodle sowie bei Google-Partnerservices angemeldet sein</li>
<li>Auf der <b>Seite Diagnose</b> in den GSAML-Einstellungen finden Sie weitere Informationen zu Ihrer Einrichtung.</li>
</ul>


<h4><a name="pre" href="#consider">Überlegungen (ab BETA-Version)</a></h4>
<ul class="alternate" type="square">
<li>Der GMail-Feed kann nicht gefunden werden. Der Grund dafür ist wahrscheinlich, dass das Nutzer-Kennwort nicht mit dem Nutzer-Kennwort von Google übereinstimmt.
In Zukunft wird das kein Problem mehr sein. Im Moment müssen Sie die Nutzer/innen mit dem Google Apps-Block synchronisieren. E-Mail wird
nach der Anmeldung aktualisiert. In Zukunft sollten ungelesene Nachrichten in Echtzeit aktualisiert werden.</li>

<li>Der Speicherort des Google-Authentifizierungs-Plugins im Authentifizierungsauftrag ist wichtig.
Ab diesem Zeitpunkt muss ein Nutzer-Authentifizierungstyp überschrieben werden, wenn ein(e) Moodle-Nutzer/in Kennwörter ändert.
Dieses Verhalten kann sich auf MNet-Nutzer/innen auswirken. Eine Lösung für dieses Problem wurde noch nicht gefunden.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnose';
$string['diagnostics_help'] = '<h2>Google Integration-Diagnose</h2>
<p>Auf der Seite Diagnose werden Informationen über den Verbindungsstatus von Gmail, GData und SAML gezeigt.
Nur Administratoren/innen sind berechtigt, die Diagnoseinformationen anzuzeigen.</p>

<h3>Inhaltsverzeichnis:</h3>
<ul>
<li><a href="#setup">Tabelleninformationen einrichten</a></li>
<li><a href="#gdata">GData-Verbindungsstatus</a></li>
<li><a href="#gmail">Gmail-Block-Verbindungstest</a></li>
<li><a href="#saml">SAML SSO-Statustest</a></li>
</ul>

<h3><a name="setup" href="#setup">Konfigurationstabellen-Informationen</a></h3>
<div class="indent">
Diese Tabellen stellen die aktuelle Konfiguration der Moodle-zu-Google-Integration dar. Stellen Sie sicher, dass alle Werte eingestellt sind.
</div>

<h3><a name="gdata" href="#gdata">GData-Verbindung </a></h3>
<div class="indent">
Der GData-Block, der sich im Ordner Blöcke befindet, enthält die Bibliotheken für eine Vielzahl von Google Services. Sie müssen sich vergewissern,
dass eine Verbindung mit Google Services hergestellt werden kann. Möglicherweise müssen Sie die Werte auf der Seite der Einstellungen für den GData-Block anpassen.
</div>

<h3><a name="gmail" href="#gmail">GMail-Block-Verbindungstest</a></h3>
<div class="indent">
Zur Zeit aktualisiert der Gmail-Block die ungelesenen Nachrichten eines/einer Nutzers/in nur bei der Anmeldung. Sie können
den Test hier nur ausführen, wenn Debugging aktiviert ist. Unterstützung für die Anzeige ungelesener Nachrichten in Echtzeit wird in Zukunft verfügbar sein.

</div>

<h3><a name="saml" href="#saml">SAML SSO-Statustest</a></h3>
<div class="indent">
Der SAML-Statustest ist eine unabhängige Überprüfung des SSO-Autorisierungsvorgangs. Er wurde noch nicht implementiert.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Schlüssel';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO-Schlüssel</h3>
<p>Sowohl Moodle als auch Google müssen in der Lage sein, den Zugriff auf wichtige Ressourcen sicher zu autorisieren.
Der/Die Administrator/in muss ein <b>Verifizierungszertifikat</b> generieren und ein X.509-formatiertes Zertifikat mit einem eingebetteten
öffentlichen Schlüssel zu Google hochladen.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zur Schlüsselgenerierung</a>
Beachten Sie, dass der Moodle SAML SSO-Dienst nur <b>RSA-Schlüssel verwendet.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps-Status</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Zertifikat</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle-Gadget';
$string['mgadget_help'] = '<h2>Google-zu-Moodle-Gadget</h2>

<p>Diese Hilfedatei enthält eine kurze Übersicht über das Google-Gadget für Ihre Moodle-Website</p>

<h3><a name="status" href="#status">Das Moodle-Gadget</a></h3>
<div class="indent">
Das <em>Moodle-Gadget</em> ist ein Gadget, das Sie auf Ihrer Google-Partner-Startseite einbinden können.

</div>


<p><b>Schritte zur Installation auf einer Nutzer-Startseite</b></p>
<ol>
<li>Melden Sie sich bei Moodle an</li>
<li>Klicken Sie auf die <b>Google-Partnerseite</b> im <b>Google Services Access</b>-Block</li>
<li>Klicken Sie auf den <b>Material hinzufügen</b>-Link</li>
<li>Klicken Sie auf <b>Meine URL hinzufügen</b></li>
<li>Geben Sie die Moodle-Gadget-URL ein</li>
<li>Die URL sieht etwa so aus: <br/><b>http://www.yourmoodledomain.org/auth/gsaml/moodlegadget.php </b>
<li> Sie finden Sie in den <b>Google-Authentifizierungs</b>-Einstellungen im Admin-Block</li>
<li>Nachdem Sie die URL in das URL-Feld kopiert haben, klicken Sie auf <b>Hinzufügen</b></li>
<li>Klicken Sie auf <b>Zurück zur Startseite</b></li>
<li>Sie sollten nun einen Block mit einem Link zurück zu Ihrer Moodle-Website sehen.</li>
</ol>



<h3><a name="status" href="#status">Überlegungen (ab BETA-Release)</a></h3>
<div class="indent">
Dies ist der Beta-Prototyp für dieses Google-Moodle-Gadget. In der Zukunft wird es wesentlich nützlicher sein.
Derzeit gibt es einen bekannten Bug, sodass das Gadget nicht sofort bei der Installation aktualisiert wird.
Die Entwickler/innen sehen sich das an.
</div>';
$string['event_user_authenticated'] = 'Durch Benutzer authentifiziert';
