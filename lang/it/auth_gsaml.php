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
 * @copyright  Copyright (c) 2021 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Aut Google SAML';
$string['blockname'] = 'Autenticazione Google SAML';
$string['domainname'] = 'Dominio';
$string['auth_gsamldescription'] = 'Questo plugin di autenticazione consente a Moodle si effettuare il Single Sign On con SAML SPS.';
$string['auth_gsamltitle'] = 'Autenticazione Google';
$string['cert'] = 'Certificato';
$string['key'] = 'Chiave RSA';
$string['domainnamestr'] = 'Nome dominio';
$string['rsakeystr'] = 'File di chiave RSA';
$string['desckeystr'] = 'Carica la chiave RSA (pem). Ricorda che il servizio SAML per Moodle supporta solo le chiavi firmate RSA.';
$string['googauthconfstr'] = 'Configurazione autenticazione Google';
$string['ssl_str'] = 'Certificato di firma SSL';
$string['desc_certstr'] = 'Carica il certificato X.509. Ricorda che questo è lo stesso file che caricherai su Google.';
$string['setupinstrctstr'] = 'Istruzioni per il setup';
$string['mgadgetstr'] = 'Gadget Moodle';
$string['mgadgethelp'] = 'Assistenza gadget Moodle';
$string['googdiag'] = 'Diagnostica integrazione di Google';
$string['googdebugopts'] = 'Una volta terminata la configurazione è possibile effettuare nuovamente il login e visitare';
$string['thediagnosticspage'] = 'La pagina Diagnostica';
$string['notadminnopermin'] = 'Non sei un amministratore. Non disponi dell\'autorizzazione per visualizzare queste impostazioni.';
$string['nokeyuploaded'] = 'Nessuna chiave caricata';
$string['filesnotsaved'] = 'File non salvati.';
$string['keypathnotsaved'] = 'Percorso chiave non salvato.';
$string['uploadkeystr'] = 'Carica la chiave';
$string['uploadkey'] = 'Carica chiave';
$string['uploadstr'] = 'Consegna';
$string['uploadthekey'] = 'Carica chiave';
$string['gadgetinfostr'] = 'Utilizza il seguente URL per aggiungere il Gadget Moodle alla tua pagina iniziale di Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link alle impostazioni di Google';
$string['nodomainyet'] = 'Nessun dominio ancora impostato';
$string['gsamlsetuptableinfo'] = '<ol><li>Impostare il <b>Nome di dominio</b> sul nome di dominio del servizio Google, quindi fare clic su <b>Salva Modifiche</b><br/><br/></li>
<li>In una nuova finestra, aprire la pagina del pannello di controllo di Google Apps come amministratore (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Fare clic sulla scheda <b>Strumenti avanzati</b>.<br/><br/></li>
<li>Fare clic sul link <b>Configura Single Sign-On (SSO)</b> accanto ad Autenticazione.<br/><br/></li>
<li>Prima selezionare la casella <b>Abilita Single Sign-On</b>.<br/><br/></li>
<li>Ora inserire questo URL nel campo di testo <b>URL pagina di accesso</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Inserire questo URL nel campo di testo <b>URL pagina di disconnessione</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Inserire questo URL nel campo di testo <b>URL modifica password</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Generare e caricare un <b>Certificato di verifica su Google (certificato X.509 contenente la chiave pubblica)</b><br/><br/></li>
<li>Caricare la privatekey e il certificato anche su Moodle e fare clic su <b>Salva modifiche</b></b><br/></li></ol>';
$string['tomoodle'] = 'Utilizzo di Moodle';
$string['errusernotloggedin'] = 'L\'utente non è riuscito a eseguire l\'accesso';
$string['pwdnotvalid'] = 'Password non valida';
$string['samlcodefailed'] = 'Il codice SAML non è riuscito ad attivare il debugging per scoprire il perché';
$string['samlauthcodefailed'] = 'Il codice di autenticazione SAML non è riuscito ad attivare il debugging per ulteriori informazioni';
$string['sixcharmsg'] = 'La password utente deve essere più lunga di 6 caratteri per l\'integrazione di Google. Contattare l\'amministratore per regolare le impostazioni di criterio del sito';
$string['errordecodingsamlrequest'] = 'Si è verificato un problema durante la codifica della richiesta SAML o di gzinflate (potrebbe trattarsi di un errore delle impostazioni HTTPS. Verificare la configurazione di Google SSO): {$a}';
$string['googsamldiag'] = 'Diagnostica SAML Google';
$string['notadminnoperm'] = 'Non sei un amministratore del sito. Non hai l\'autorizzazione per visualizzare queste informazioni';
$string['gdatanotconfig'] = 'Tabella di configurazione GData non impostata.';
$string['googlesamlconfigdata'] = 'Dati di configurazione SAML Google';
$string['gsamlconfignotset'] = 'La configurazione SAML Google non è stata ancora impostata';
$string['gdataconfignotset'] = 'Tabella di config. GData non impostata';
$string['gdataconfig'] = 'Configurazione GData';
$string['gmailconfig'] = 'Configurazione Gmail';
$string['componentinstallcheck'] = 'Verifica preliminare di installazione del componente';
$string['gdatanotinstalled'] = 'Block GData non installato\\n';
$string['gappsblockinstalled'] = 'Block GApps installato\\n';
$string['gmailblocknotinstalled'] = 'Block Gmail non installato';
$string['gmailblockinstalled'] = 'Block Gmail installato\\n';
$string['gdataapitestresults'] = 'Risultati test GData API';
$string['trytoinitgdataconnection'] = 'Tentativo di inizializzare una connessione tra GData e Google in corso<br/>';
$string['gsamlsuccess'] = 'Operazione riuscita';
$string['gmailtestresults'] = 'Risultati test Gmail';
$string['gmailtestwillnotrun'] = 'Non è possibile eseguire il test di Gmail finché Moodle è nella modalità DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Ottenere email per username:';
$string['currfileupload'] = 'File attuale:';
$string['nonestr'] = 'Senza numerazione';
$string['privatekeystr'] = 'Chiave privata';
$string['certificatestr'] = 'Certificato';
$string['statustab'] = 'Stato';
$string['logstab'] = 'Log SAML';
$string['ssoteststab'] = 'Test SSO';
$string['docstab'] = 'Documentazione';
$string['id'] = 'ID';
$string['time'] = 'Tempo';
$string['userid'] = 'ID utente';
$string['ip'] = 'Indirizzo IP';
$string['course'] = 'Corso';
$string['module'] = 'Modulo';
$string['cmid'] = 'cmid';
$string['action'] = 'Azione';
$string['url'] = 'URL';
$string['info'] = 'Informazione';
$string['config_gsaml'] = 'Configurazione SAML Google';
$string['config_gsaml_help'] = '<h2>Configurazione completa</h2>

<p>L\'integrazione completa di Google in Moodle richiede alcuni processi di configurazione. Questo File Guida
illustra la maggior parte dei processi utili per configurare il plugin di autenticazione di Google, il block GData e il block disponibile per Gmail.</p>

<h4>Sommario:</h4>i
<ul>
<li><a href="#pre">Precondizioni</a></li>
<li><a href="#status">Passaggi</a></li>
<li><a href="#expect">Risultati previsti</a></li>
<li><a href="#consider">Considerazioni</a></li>
</ul>

<h4><a name="status" href="#status">Stato di Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Precondizioni/presupposti</a></h4>
<p>
<ol>
<li>I codici GSAML, GAccess, Gmail, GData sono stati installati</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (facoltativo perché beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Passaggi</a></h4>
<ol>
<li>Esegui il login a Moodle come amministratore</li>
<li>Fai clic su <b>Notifiche</b> per aggiornare le tabelle di block</li>
<li>Abilita il plugin <b>Autenticazione di Google</b> dalla pagina ammin. Gestisci plugin</li>
<li>Ora seleziona Autenticazione utenti, accedi a <b>Autenticazione Google</b> dove troverai le istruzioni da seguire.</li>
<li>Inserisci il dominio della pagina partner di Google</li>
<li>Carica il certificato (per ulteriori informazioni consulta <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentazione di Google sulla generazione di chiavi</a> )</li>
<li>Carica la chiave privata (per ulteriori informazioni consulta <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentazione di Google sulla generazione di chiavi</a>)</li>
<li>Fai clic su salva</li>
<li>Segui le istruzioni per aggiungere gli URL corretti alla pagina SSO di Google</li>
<li>Fai clic sulla casella di controllo sul sito di Google per abilitare SSO</li>
<li>Sul sito di Google accertati di abilitare l\'API provisioning o non verrà aggiornato alcun utente.</li>
<li>Sul sito di Google verifica di abilitare l\'API Provisioning</li>
<li>Sul sito di Google potresti aver bisogno di richiedere più account utente</li>
<li>Torna alla pagina principale di Moodle</li>
<li>Fai clic su Modifica</li>
<li>Aggiungi i block GAccess, Gmail e GData alla pagina.</li>
<li>Fai clic su <b>Impostazioni</b> nel block <b>Google Apps</b>. Completa le informazioni di configurazione.</li>
<li>Fai clic sul link dello stato per confermare che il block Google Apps sia configurato correttamente.</li>
<li>Accedi ad Amministrazione del sito, Sicurezza e policy del sito</li>
<li>Verifica la policy relativa alla password</li>
<li>Imposta la lunghezza della password su 6 caratteri (richiesto dalla policy della password di Google)</li>
<li>Nel block GData devi aggiungere gli utenti alla sincronizzazione. Fai clic sul link Aggiungi utenti da sincronizzare nel block <b>Google Apps
</b>. Per visualizzare i risultati è utile impostare il          cron del block GData su 1 min.</li>
<li>Per caricare gli utenti Moodle in Google puoi eseguire cron manualmente visitando admin/cron.php I risultati della sincronizzazione vengono visualizzati sulla schermata.
<b>Attenzione, la sincronizzazione beta degli utenti Moodle con Google potrebbe impiegare <em>MOLTO</em> tempo.</b></li>
</ol>

<h4><a name="pre" href="#expect">Risultati previsti</a></h4>
<ul class="alternate" type="square">
<li>Facendo clic su qualsiasi link di Google Service o accedendo ai servizi dalla pagina dei partner Google    si viene autenticati su Moodle.</li>
<li>Gli utenti devono essere connessi a Moodle e ai servizi dei partner di Google  </li>
<li>Leggi la <b>pagina Diagnostica</b> nelle impostazioni GSAML per maggiori informazioni sulla configurazione.</li>
</ul>


<h4><a name="pre" href="#consider">Considerazioni (come parte della versione BETA)</a></h4>
<ul class="alternate" type="square">
<li>È impossibile trovare il feed Gmail. È probabile che la password dell\'utente non corrisponda alla password dell\'utente di Google.
In futuro questo non sarà un problema. Per ora assicurati di sincronizzare gli utenti con il block Google Apps. L\'email verrà aggiornata
dopo il login. In futuro i messaggi non letti dovrebbero aggiornarsi in tempo reale.</li>

<li>La posizione del plugin di autenticazione di Google nell\'ordine di Autenticazione è importante.
A partire da questo momento è necessario l\'annullamento di un tipo di autenticazione dell\'utente quando un utente Moodle cambia la password.
Questo comportamento può incidere sugli utenti MNet. Al momento non ci sono soluzioni per questo problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostica';
$string['diagnostics_help'] = '<h2>Diagnostica dell\'integrazione di Google</h2>
<p>La pagina Diagnostica mostra informazioni riguardanti lo stato sulla connessione di Gmail, GData e SAML.
Solo gli amministratori hanno l\'autorizzazione di visualizzare le informazioni della diagnostica.</p>

<h3>Sommario:</h3>
<ul>
<li><a href="#setup">Informazioni tabella di configurazione</a></li>
<li><a href="#gdata">Stato della connessione di GData</a></li>
<li><a href="#gmail">Test di connessione block Gmail</a></li>
<li><a href="#saml">Test stato SSO SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informazioni tabella di configurazione</a></h3>
<div class="indent">
Queste tabelle rappresentano l\'attuale configurazione dell\'integrazione di Moodle in Google. Assicurati che i valori siano tutti impostati correttamente.
</div>

<h3><a name="gdata" href="#gdata">Connessione GData</a></h3>
<div class="indent">
Il block GData situato nella cartella block contiene le librerie di diversi servizi Google. Devi confermare che sia in grado di
collegarsi ai servizi di Google. Se necessario modifica i valori nella pagina delle impostazioni del block GData.
</div>

<h3><a name="gmail" href="#gmail">Test di connessione block Gmail</a></h3>
<div class="indent">
Al momento il block Gmail aggiorna soltanto i messaggi non letti degli utenti dopo il login. Sarai in grado di eseguire il test qui
solo se il debugging è attivato. Il supporto per la visualizzazione dei messaggi non letti in tempo reale è in arrivo.

</div>

<h3><a name="saml" href="#saml">Test stato SSO SAML</a></h3>
<div class="indent">
Il test dello stato SAML è un controllo indipendente del processo di autorizzazione SSO. Non è ancora stato implementato.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Chiavi';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Chiavi SSO Google</h3>
<p>Sia Moodle che Google devono essere in grado di autorizzare l\'accesso sicuro a risorse importanti.
L\'amministratore deve generare un <b>Certificato di verifica</b> e caricare su Google un certificato formattato X.509 con una chiave pubblica
incorporata.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentazione di Google sulla generazioni di chiavi</a>
Tieni presente che il servizio SSO Moodle SAML utilizza solo <b>chiavi RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Stato di Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificato</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Gadget Moodle';
$string['mgadget_help'] = '<h2>Gadget Google su Moodle </h2>

<p>Questo File Guida fornisce una breve panoramica del gadget di Google per il tuo sito Moodle</p>

<h3><a name="status" href="#status">Il Gadget Moodle</a></h3>
<div class="indent">
Il <em>Gadget Moodle</em> è un gadget che puoi incorporare nella pagina iniziale del partner Google.

</div>


<p><b>Passaggi per l\'installazione su una pagina iniziale utente</b></p>
<ol>
<li>Esegui il login a Moodle</li>
<li>Fai clic sulla <b>pagina del partner di Google</b> nel block <b>Accesso ai servizi Google</b></li>
<li>Fai clic sul link <b>Aggiungi elementi</b> link</li>
<li>Fai clic su <b>Aggiungi il mio url</b></li>
<li>Inserisci l\'URL moodlegadget</li>
<li>L\'URL deve apparire come <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
<li>È disponibile nelle impostazioni dell\'<b>Autenticazione di Google</b> dal block Amministratore</li>
<li>Dopo aver copiato l\'url nel relativo campo, fai clic su <b>Aggiungi</b></li>
<li>Fai clic su <b>Torna alla home page</b></li>
<li>Ora dovresti visualizzare un block contenente un link al sito di Moodle</li>
</ol>



<h3><a name="status" href="#status">Considerazioni (riguardo alla versione BETA )</a></h3>
<div class="indent">
Questa versione è un prototipo beta del Gadget Google Moodle. In futuro potrebbe essere maggiormente utile.
Al momento è presente un bug conosciuto del Gadget che impedisce l\'aggiornamento immediato dopo l\'installazione.
Gli sviluppatori stanno tentando di risolvere il problema.
</div>';
$string['event_user_authenticated'] = 'Utente autenticato';
