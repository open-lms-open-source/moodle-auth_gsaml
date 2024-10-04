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
$string['gsamlsetuptableinfo'] = '<ol><li>Verwenden Sie als <b>Domänennamen</b> Ihren Google-Service-Domänennamen, und klicken Sie dann auf <b>Änderungen speichern</b><br/><br/></li>
<li>Öffnen Sie in einem neuen Fenster das Google Apps Control Panel (Admin-Konsole) als Admin (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>).<br/><br/></li>
<li>Klicken Sie auf die Registerkarte <b>Erweiterte Werkzeuge</b>.<br/><br/></li>
<li>Klicken Sie neben Authentifizierung auf den Link <b>Single Sign-On (SSO) einrichten</b>.<br/><br/></li>
<li>Aktivieren Sie zunächst das Kontrollkästchen <b>Single Sign-On aktivieren</b>.<br/><br/></li>
<li>Fügen Sie nun diese URL in das Textfeld <b>URL der Anmeldeseite</b> ein.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Fügen Sie diese URL in das Textfeld <b>URL der Abmeldeseite</b> ein.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Geben Sie diese URL in das Textfeld <b>URL zur Kennwortänderung</b> ein.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Erstellen Sie ein <b>Verifizierungszertifikat auf Google (X.509-Zertifikat mit dem öffentlichen Schlüssel)</b> und laden Sie es hoch.<br/><br/></li>
<li>Laden Sie auch den privatkey und das Zertifikat in Moodle hoch und klicken Sie dann auf <b>Änderungen speichern</b>.</b><br/></li></ol>';
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
$string['contextinstanceid'] = 'Instanz-ID';
$string['courseid'] = 'Kurs-ID';
$string['eventname'] = 'Name des Ereignisses';
$string['otherlog'] = 'Sonstige';
$string['useraccesedgservice'] = 'Nutzer/in hat zuerst auf gservice zugegriffen';
$string['userneedsredirect'] = 'Nutzer/in hat saml-Anforderung, benötigt aber Login/Umleitung';
$string['userislogged'] = 'Nutzer/in ist angemeldet und samlrequest';
$string['login'] = 'Anmelden';
$string['config_gsaml'] = 'Konfigurieren von Google SAML';
$string['config_gsaml_help'] = '<h2>Einrichtung abschließen</h2>

<p>Die Einrichtung der vollständigen Google-zu-Moodle-Integration erfordert eine gewisse Konfiguration. Diese Hilfedatei soll
Sie durch den Großteil des Prozesses führen, um das Google Authentication-Plug-in sowie den GData-Block zu konfigurieren und
den Gmail-Block vorzubereiten.</p>

<h4>Inhaltsverzeichnis:</h4>
<ul>
<li><a href="#pre">Voraussetzungen</a></li>
<li><a href="#status">Schritte</a></li>
<li><a href="#expect">Zu erwartende Ergebnisse</a></li>
<li><a href="#consider">Überlegungen</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps-Status</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Voraussetzungen/Annahmen</a></h4>
<p>
<ol>
<li>GSAML-, GAccess-, Gmail-, GData-Code wurden installiert</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (optional ab beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Schritte</a></h4>
<ol>
<li>Melden Sie sich als Administrator/in bei Moodle an</li>
<li>Klicken Sie auf <b>Benachrichtigungen</b>, um Blocktabellen zu aktualisieren</li>
<li>Aktivieren Sie das <b>Google-Authentifizierungs-Plug-in</b> auf der Admin-Seite &quot;Plug-ins verwalten&quot;</li>
<li>Wählen Sie nun &quot;Nutzer/innen-Authentifizierung&quot; aus. Gehen Sie zu <b>Google Authentifizierung</b>. Auf der Seite finden Sie Anweisungen.</li>
<li>Geben Sie Ihre Google-Partnerseitendomäne ein</li>
<li>Laden Sie das Zertifikat hoch (weitere Informationen zum Erstellen dieses Zertifikats finden Sie unter <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zum Generieren von Schlüsseln</a> )</li>
<li>Laden Sie den privaten Schlüssel hoch (weitere Informationen zum Erstellen dieses Besuchs finden Sie unter <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zum Generieren von Schlüsseln</a>)</li>
<li>Klicken Sie auf &quot;Speichern&quot;</li>
<li>Befolgen Sie die Anweisungen zum Hinzufügen der richtigen URLs zur Google SSO-Seite</li>
<li>Klicken Sie auf das Kontrollkästchen auf der Google-Website, um SSO zu aktivieren</li>
<li>Stellen Sie auf der Google-Website sicher, dass die bereitstellende API aktiviert ist, da sonst keine Nutzer/innen aktualisiert werden.</li>
<li>Stellen Sie auf der Google-Website sicher, dass die API-Bereitstellung aktiviert ist</li>
<li>Auf der Google-Seite müssen Sie möglicherweise weitere Nutzer/innenkonten anfordern</li>
<li>Kehren Sie zur Moodle-Hauptseite zurück</li>
<li>Klicken Sie auf &quot;Bearbeiten&quot;</li>
<li>Fügen Sie der Seite GAccess-, Gmail- und GData-Blöcke hinzu.</li>
<li>Klicken Sie im Block <b>Google Apps</b> auf <b>Einstellungen</b>. Geben Sie die Konfigurationsinformationen ein.</li>
<li>Klicken Sie auf den Status-Link, um zu bestätigen, dass Ihr Google Apps-Block richtig eingerichtet ist.</li>
<li>Gehen Sie zu Website-Administration &gt; Sicherheit &gt; Website-Richtlinien</li>
<li>Prüfen Sie die Kennwortrichtlinie</li>
<li>Legen Sie die Kennwortlänge auf 6 oder höher fest (erforderlich für die Kennwortrichtlinie von Google)</li>
<li>Im GData-Block müssen Sie Nutzer/innen zur Synchronisierung hinzufügen. Klicken Sie dazu im <b>Google Apps-
Block</b> auf den Link &quot;Nutzer/in zur Synchronisierung hinzufügen&quot;. Es hilft, das Ergebnis zu sehen, wenn Sie den GData-Block cron auf 1 min festlegen.</li>
<li>Um diese Moodle-Nutzer/innen in Google hochzuladen, können Sie den Cron manuell ausführen, indem Sie admin/cron.php aufrufen. Die Ergebnisse für die Synchronisierung sollten im Readout angezeigt werden.
<b>Beachten Sie, dass die Synchronisierung von Moodle-Nutzer/innen mit Google <em>LANGE</em> dauern kann.</b></li>
</ol>

<h4><a name="pre" href="#expect">Zu erwartende Ergebnisse</a></h4>
<ul class="alternate" type="square">
<li>Wenn Sie auf einen beliebigen Google-Service-Link klicken oder auf der Google-Partner-Seite Dienste besuchen, erfolgt eine
Authentifizierung gegen Moodle.</li>
<li>Nutzer/innen sollten bei Moodle sowie bei Google Partner Services angemeldet sein</li>
<li>Weitere Informationen zu Ihrer Einrichtung finden Sie auf der <b>Diagnoseseite</b> in den GSAML-Einstellungen.</li>
</ul>


<h4><a name="pre" href="#consider">Überlegungen (ab BETAVERSION)</a></h4>
<ul class="alternate" type="square">
<li>Der Gmail-Feed wurde möglicherweise nicht gefunden. Dies liegt wahrscheinlich daran, dass das Nutzer/innen-Kennwort nicht mit dem Nutzer/innen-Kennwort von Google übereinstimmt.
In Zukunft wird dies kein Problem sein. Stellen Sie zunächst sicher, dass Sie Nutzer/innen mit dem Google Apps-Block synchronisieren. Die E-Mail wird
bei der Anmeldung aktualisiert. In Zukunft sollten ungelesene Nachrichten in Echtzeit aktualisiert werden.</li>

<li>Die Position des Google-Authentifizierungs-Plugins in der Authentifizierungsreihenfolge ist wichtig.
Ab diesem Zeitpunkt muss der Authentifizierungstyp von Nutzer/innen außer Kraft gesetzt werden, wenn Moodle-Nutzer/innen Kennwörter ändern.
Dieses Verhalten kann sich auf MNet-Nutzer/innen auswirken. Eine Lösung für dieses Problem wurde noch nicht gefunden.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnose';
$string['diagnostics_help'] = '<h2>Google Integration-Diagnose</h2>
<p>Auf der Seite &quot;Diagnose&quot; werden Informationen zum Gmail-, GData- und SAML-Verbindungsstatus angezeigt.
Nur Administrator/innen haben die Berechtigung, Diagnoseinformationen anzuzeigen.</p>

<h3>Inhaltsverzeichnis:</h3>
<ul>
<li><a href="#setup">Tabelleninformationen einrichten</a></li>
<li><a href="#gdata">GData-Verbindungsstatus</a></li>
<li><a href="#gmail">Verbindungstest für Gmail-Block</a></li>
<li><a href="#saml">SAML SSO-Statustest</a></li>
</ul>

<h3><a name="setup" href="#setup">Konfigurationstabelleninfo</a></h3>
<div class="indent">
Diese Tabellen stellen die aktuelle Konfiguration der Moodle-zu-Google-Integration dar. Stellen Sie sicher, dass alle Werte festgelegt sind.
</div>

<h3><a name="gdata" href="#gdata">GData-Verbindung</a></h3>
<div class="indent">
Der GData-Block im Blockordner enthält die Bibliotheken für eine Vielzahl von Google Services. Sie müssen bestätigen,
dass eine Verbindung zu den Google-Diensten hergestellt werden kann. Möglicherweise müssen Sie die Werte auf der Seite für die GData-Blockeinstellungen anpassen.
</div>

<h3><a name="gmail" href="#gmail">Verbindungstest für Gmail-Block</a></h3>
<div class="indent">
Derzeit aktualisiert der Gmail-Block bei der Anmeldung nur ungelesene Nachrichten von Nutzer/innen. Sie können
den Test hier nur durchführen, wenn Debugging eingeschaltet ist. Das Anzeigen ungelesener Nachrichten in Echtzeit wird bald möglich sein.
</div>

<h3><a name="saml" href="#saml">SAML SSO-Statustest</a></h3>
<div class="indent">
Der SAML-Statustest ist eine unabhängige Prüfung des SSO-Autorisierungsprozesses. Er ist noch nicht implementiert.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Schlüssel';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO-Schlüssel</h3>
<p>Sowohl Moodle als auch Google müssen den Zugriff auf wichtige Ressourcen sicher autorisieren können.
Administrator/innen müssen ein <b>Verifizierungszertifikat</b> generieren und ein im X.509-Format formatiertes Zertifikat mit einem eingebetteten
öffentlichen Schlüssel auf Google hochladen.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google-Dokumentation zum Generieren von Schlüsseln</a>
Beachten Sie, dass der SAML Moodle SSO-Service nur <b>RSA-Schlüssel verwendet.</b>
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
$string['mgadget'] = 'Moodle-Gadget';
$string['mgadget_help'] = '<h2>Google-zu-Moodle-Gadget</h2>

<p>Diese Hilfedatei bietet einen kurzen Überblick über das Google-Gadget für Ihre Moodle-Website</p>

<h3><a name="status" href="#status">Das Moodle-Gadget</a></h3>
<div class="indent">
Das <em>Moodle-Gadget</em> ist ein Gadget, das Sie auf Ihrer Google Partner-Startseite einbetten können.
</div>


<p><b>Schritte zur Installation auf einer Nutzer/innen-Startseite</b></p>
<ol>
<li>Melden Sie sich bei Moodle an</li>
<li>Klicken Sie im Block <b>Google Services Access</b> auf die <b>Google-Partnerseite</b>.</li>
<li>Klicken Sie auf den Link <b>Sachen hinzufügen</b>.</li>
<li>Klicken Sie auf <b>Meine URL hinzufügen</b></li>
<li>Geben Sie die moodlegadget-URL ein</li>
<li>Die URL ist so etwas wie<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Sie finden sie in den <b>Google-Authentifizierungseinstellungen</b> im Admin-Block</li>
<li>Nachdem Sie die URL in das Feld &quot;URL&quot; kopiert haben, klicken Sie auf <b>Hinzufügen</b></li>
<li>Klicken Sie auf <b>Zurück zur Startseite</b></li>
<li>Nun sollte ein Block mit einem Link zu Ihrer Moodle-Website angezeigt werden</li>
</ol>



<h3><a name="status" href="#status">Überlegungen (ab BEATA-Release)</a></h3>
<div class="indent">
Dies ist der Beta-Prototyp für dieses Google Moodle-Gadget. In Zukunft könnte es viel nützlicher sein.
Derzeit gibt es einen bekannten Fehler, der sich darauf bezieht, dass das Gadget nicht sofort nach der Installation aktualisiert wird.
Die Entwickler sind dabei, dies zu untersuchen.
</div>';
$string['event_user_authenticated'] = 'Durch Benutzer authentifiziert';
