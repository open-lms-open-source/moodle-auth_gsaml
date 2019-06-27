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
 * @copyright  Copyright (c) 2019 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Autenticació SAML a Google';
$string['blockname'] = 'Autenticació SAML a Google';
$string['domainname'] = 'Domini';
$string['auth_gsamldescription'] = 'Aquesta extensió d\'autenticació permet a Moodle realitzar un inici de sessió únic amb SAML SPS.';
$string['auth_gsamltitle'] = 'Autenticació de Google';
$string['cert'] = 'Certificat';
$string['key'] = 'Clau RSA';
$string['domainnamestr'] = 'Nom de domini';
$string['rsakeystr'] = 'Fitxer clau RSA';
$string['desckeystr'] = 'Carregueu la clau RSA (pem) Tingueu en compte que el servei SAML de Moodle solament és compatible amb claus RSA signades.';
$string['googauthconfstr'] = 'Configuració de l’autenticació de Google';
$string['ssl_str'] = 'Certificat de signatura SSL';
$string['desc_certstr'] = 'Carrega el certificat X.509. Aquest és el mateix fitxer que carregareu a Google.';
$string['setupinstrctstr'] = 'Instruccions de configuració ';
$string['mgadgetstr'] = 'Giny de Moodle ';
$string['mgadgethelp'] = 'Ajuda del giny de Moodle';
$string['googdiag'] = 'Diagnòstic de la integració amb Google';
$string['googdebugopts'] = 'Un cop acabada la configuració, podeu tornar a iniciar la sessió i consultar ';
$string['thediagnosticspage'] = 'La pàgina de diagnòstic';
$string['notadminnopermin'] = 'No sou administrador. No teniu permisos per visualitzar aquests paràmetres.';
$string['nokeyuploaded'] = 'No s\'ha carregar cap clau.';
$string['filesnotsaved'] = 'No s’han desat els fitxers.';
$string['keypathnotsaved'] = 'No s’ha desat el camí de la clau.';
$string['uploadkeystr'] = 'Carrega la clau';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Penja';
$string['uploadthekey'] = 'Carrega una clau';
$string['gadgetinfostr'] = 'Utilitzeu l\'URL següent per afegir el giny de Moodle a la pàgina d\'inici de Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Enllaç als paràmetres de Google';
$string['nodomainyet'] = 'Encara no s’ha establert cap domini';
$string['gsamlsetuptableinfo'] = '<ol><li>Establiu com a <b>Nom de domini</b> el vostre nom de domini dels serveis de Google i, seguidament, feu clic a <b>Desa els canvis</b><br/><br/></li>
<li>Obriu en una finestra nova la pàgina Tauler de control de Google Apps com a administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Feu clic a la pestanya <b>Eines avançades</b>.<br/><br/></li>
<li>Feu clic a l’enllaç <b>Configura l’inici de sessió únic (SSO)</b> que trobareu al costat d’Autenticació.<br/><br/></li>
<li>Primer marqueu la casella <b>Habilita l\'inici de sessió únic</b>.<br/><br/></li>
<li>A continuació, inseriu aquest URL al camp de text <b>URL de la pàgina d’inici de sessió</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Inseriu aquest URL en el camp de text <b>URL de la pàgina de tancament de sessió</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Inseriu aquest URL en el camp de text <b>URL de la pàgina de canvi de contrasenya</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Genereu i carregueu un <b>certificat de comprovació a Google (certificat X.509 que conté la clau pública)</b><br/><br/></li>
<li>Carregueu també la clau privada i el certificat a Moodle i, seguidament, feu clic a <b>Desa els canvis</b></b><br/></li></ol>';
$string['tomoodle'] = 'A Moodle';
$string['errusernotloggedin'] = 'No s’ha pogut iniciar la sessió d\'aquest usuari';
$string['pwdnotvalid'] = 'La contrasenya no és vàlida';
$string['samlcodefailed'] = 'El codi SAML no ha activat la depuració per esbrinar el motiu';
$string['samlauthcodefailed'] = 'El codi d’autenticació SAML no ha activat la depuració per obtenir més informació';
$string['sixcharmsg'] = 'La contrasenya de l’usuari ha de tenir més de 6 caràcters per a la integració amb Google. Demaneu a l’administrador que ajusti els paràmetres de la política del lloc';
$string['errordecodingsamlrequest'] = 'S’ha produït un problema en descodificar la sol·licitud SAML o gzinflating (pot ser un error de configuració d\'HTTPS; verifiqueu la configuració SSO de Google): {$a}';
$string['googsamldiag'] = 'Diagnòstic SAML de Google';
$string['notadminnoperm'] = 'No sou administrador del lloc. No teniu permisos per visualitzar aquesta informació.';
$string['gdatanotconfig'] = 'No s’ha establert la taula de configuració de GData.';
$string['googlesamlconfigdata'] = 'Dades de configuració SAML de Google';
$string['gsamlconfignotset'] = 'Encara no s’ha establert la configuració SAML de Google';
$string['gdataconfignotset'] = 'No s’ha establert la taula de configuració de GData.';
$string['gdataconfig'] = 'Configuració de GData';
$string['gmailconfig'] = 'Configuració de Gmail';
$string['componentinstallcheck'] = 'Comprovació prèvia a la instal·lació de components';
$string['gdatanotinstalled'] = 'El bloc GData no està instal·lat\\n';
$string['gappsblockinstalled'] = 'El bloc GApps està instal·lat\\n';
$string['gmailblocknotinstalled'] = 'El bloc Gmail no està instal·lat';
$string['gmailblockinstalled'] = 'El bloc Gmail està instal·lat\\n';
$string['gdataapitestresults'] = 'Resultats de la prova d\'API de GData';
$string['trytoinitgdataconnection'] = 'S’està intentant iniciar una connexió de GData a Google<br/>';
$string['gsamlsuccess'] = 'Èxit';
$string['gmailtestresults'] = 'Resultats de la prova de Google';
$string['gmailtestwillnotrun'] = 'La prova de Gmail no s’executarà si no és que Moodle es troba en mode DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Obtenció de canal de continguts de correu electrònic per al nom d\'usuari: ';
$string['currfileupload'] = 'Fitxer actual:';
$string['nonestr'] = 'Cap';
$string['privatekeystr'] = 'Clau privada';
$string['certificatestr'] = 'Certificat';
$string['statustab'] = 'Estat';
$string['logstab'] = 'Registres SAML';
$string['ssoteststab'] = 'Proves SSO';
$string['docstab'] = 'Documentació';
$string['id'] = 'ID';
$string['time'] = 'Temps';
$string['userid'] = 'ID d’usuari';
$string['ip'] = 'Adreça IP';
$string['course'] = 'Curs';
$string['module'] = 'Mòdul';
$string['cmid'] = 'cmid';
$string['action'] = 'Acció';
$string['url'] = 'URL';
$string['info'] = 'Informació';
$string['config_gsaml'] = 'Configuració de SAML de Google';
$string['config_gsaml_help'] = '<h2>Configuració completa</h2>

<p>La configuració de la integració completa de Google amb Moodle requereix ajustar uns quants paràmetres. Aquest fitxer d’ajuda
us guiarà en el procés de configurar el connector d’autenticació de Google, el bloc de GData i
el bloc de Gmail.</p>

<h4>Taula de continguts:</h4>
<ul>
<li><a href="#pre">Condicions prèvies</a></li>
<li><a href="#status">Passos</a></li>
<li><a href="#expect">Resultats esperats</a></li>
<li><a href="#consider">Consideracions</a></li>
</ul>

<h4><a name="status" href="#status">Estat de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Condicions prèvies / assumpcions</a></h4>
<p>
<ol>
<li>S’ha instal·lat el codi de GSAML, GAccess, Gmail, GData</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (opcional, fins ara beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Passos</a></h4>
<ol>
<li>Inicieu la sessió a Moodle com a administrador</li>
<li>Feu clic a <b>Notificacions</b> per actualitzar les taules del bloc</li>
<li>Habiliteu el connector d’<b>autenticació de Google</b> des de la pàgina d’administració de connectors</li>
<li>Per seleccionar l’autenticació d’usuaris, aneu a la pàgina <b>Autenticació de Google</b>, on hi trobareu indicacions.</li>
<li>Introduïu el domini de la pagina de partner de Google</li>
<li>Carregueu el certificat (per obtenir més informació sobre com crear-lo <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google sobre la generació de claus</a>)</li>
<li>Carregueu la clau privada (per obtenir més informació sobre com crear-la <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google sobre la generació de claus</a>)</li>
<li>Feu clic a Desa</li>
<li>Seguiu les instruccions per afegir URL a la pàgina SSO de Google</li>
<li>Feu clic a la casella de verificació del lloc de Google per habilitar SSO</li>
<li>En el lloc de Google, assegureu-vos d\'habilitar l’API d’aprovisionament o no s’actualitzarà cap usuari.</li>
<li>En el lloc de Google, comproveu que l’API d’aprovisionament estigui habilitada</li>
<li>És possible que hàgiu de demanar més comptes d\'usuari a Google</li>
<li>Torneu a la pàgina principal de Moodle</li>
<li>Feu clic a Edició</li>
<li>Afegiu els blocs GAccess, Gmail i GData a la pàgina.</li>
<li>Feu clic a <b>Paràmetres</b> al bloc de <b>Google Apps</b>. Empleneu la informació de configuració.</li>
<li>Feu clic a l\'enllaç d’estat per confirmar que el bloc de Google Apps estigui correctament configurat.</li>
<li>Aneu a Administració del lloc &gt; Seguretat &gt; Polítiques del lloc</li>
<li>Política de comprovació de contrasenyes</li>
<li>Estableix la longitud de la contrasenya en 6 caràcters o més (obligatori segons la política de contrasenyes de Google)</li>
<li>Haureu d’afegir usuaris al bloc GData per a realitzar la sincronització. Feu-ho fent clic a l’enllaç per afegir usuaris per sincronitzar al bloc de <b>Google Apps
</b>. És útil veure el resultat si establiu el cron del bloc GData en 1 min.</li>
<li>Per carregar aquests usuaris de Moodle a Google pot ser útil executar el cron manualment anant a admin/cron.php Els resultats de la sincronització han d\'aparèixer als registres.
<b>Tingueu en compte que, com que aquesta sincronització d’usuaris de Moodle amb Google està en fase beta, pot tardar <em>MOLT</em> de temps.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultats esperats</a></h4>
<ul class="alternate" type="square">
<li>Si feu clic a qualsevol dels enllaços de serveis de Google o consulteu els serveis de la pàgina de partner de Google, se us
autenticarà contra Moodle.</li>
<li>L’usuari ha d’haver iniciat la sessió tant a Moodle com als serveis per a partners de Google</li>
<li>Consulteu la <b>Pàgina de diagnòstic</b> dels paràmetres de GSAML per obtenir més informació sobre la configuració.</li>
</ul>


<h4><a name="pre" href="#consider">Consideracions (com a versió BETA)</a></h4>
<ul class="alternate" type="square">
<li>És possible que no es trobi el canal de continguts de Gmail. Això pot ser degut a que la contrasenya de l’usuari no coincideix amb la contrasenya de l’usuari de Google.
Aviat aquest problema estarà resolt. De moment, assegureu-vos de sincronitzar els usuaris amb el bloc de Google Apps. El correu electrònic s’actualitzarà
després de l’inici de sessió. Aviat els missatges no llegits s’actualitzaran en temps real.</li>

<li>És important la ubicació del connector d’autenticació de Google pel que fa a l’ordre d’autenticació.
Actualment cal que anul·li el tipus d’autenticació d’usuari quan un usuari Moodle canvia la contrasenya.
Aquest comportament pot afectar els usuaris d\'MNet. Encara no s’ha trobat solució a aquest problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnòstic';
$string['diagnostics_help'] = '<h2>Diagnòstic de la integració amb Google</h2>
<p>La pàgina de diagnòstic proporciona informació sobre l’estat de connexió de Gmail, GData i SAML.
Només els administradors poden consultar aquesta informació de diagnòstic.</p>

<h3>Taula de continguts:</h3>
<ul>
<li><a href="#setup">Informació de la taula de configuració</a></li>
<li><a href="#gdata">Estat de la connexió de GData</a></li>
<li><a href="#gmail">Prova de la connexió del bloc Gmail</a></li>
<li><a href="#saml">Prova de l’estat d\'SSO de SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informació sobre la taula de configuració</a></h3>
<div class="indent">
Aquestes taules representen la configuració actual de la integració de Moodle amb Google. Verifiqueu que s’hagin establert tots els valors.
</div>

<h3><a name="gdata" href="#gdata">Connexió de GData </a></h3>
<div class="indent">
El bloc GData es troba a la carpeta de blocs que conté les biblioteques de diversos serveis de Google. Heu de comprovar
que pugui connectar amb els serveis de Google. Potser haureu d’ajustar valors a la pàgina de paràmetres del bloc GData.
</div>

<h3><a name="gmail" href="#gmail">Prova de connexió del bloc Gmail</a></h3>
<div class="indent">
De moment el bloc Gmail només actualitza els missatges no llegits dels usuaris en el moment d’iniciar la sessió. Només podreu
executar la prova aquí si la funció de depuració està habilitada. Aviat es podran veure els missatges no llegits en temps real.

</div>

<h3><a name="saml" href="#saml">Prova de l’estat d\'SSO de SAML</a></h3>
<div class="indent">
La prova de l’estat de SAML és una comprovació independent del procés d\'autorització SSO. Encara no ha estat implementada.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Claus';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Claus SSO de Google</h3>
<p>Tant Moodle com Google han de poder autoritzar de manera segura l’accés a recursos importants.
L\'administrador ha de generar un <b>Certificat de comprovació</b> i carregar-lo a Google, un certificat amb format X.509 amb una clau pública
incorporada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentació de Google sobre la generació de claus</a>
Tingueu en compte que el servei SSO de SAML de Moodle solament utilitza <b>claus RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Estat de Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificat</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Giny de Moodle';
$string['mgadget_help'] = '<h2>Giny de Google a Moodle</h2>

<p>Aquest fitxer d’ajuda vol ser una breu descripció del giny de Google per al vostre lloc de Moodle</p>

<h3><a name="status" href="#status">El giny de Moodle</a></h3>
<div class="indent">
El <em>giny de Moodle</em> és un giny que podeu incorporar a la vostra pàgina d’inici de partner de Google.

</div>


<p><b>Passos per instal·lar-lo a la pàgina d’inici dels usuaris</b></p>
<ol>
<li>Accediu a Moodle</li>
<li>Feu clic a la <b>pàgina de partner de Google</b> al bloc <b>Accés a serveis de Google</b></li>
<li>Feu clic a l\'enllaç <b>Afegeix coses</b></li>
<li>Feu clic a <b>Afegeix el meu url</b></li>
<li>Introduïu l’URL de moodlegadget</li>
<li>Tindrà un aspecte semblant a aquest: <br/><b>http://www.elvostredominimoodle.org/auth/gsaml/moodlegadget.php </b>
<li> Es pot trobar als paràmetres de l’<b>Autenticació de Google</b> accedint des del bloc d’administració</li>
<li>A continuació, copieu l’URL en el camp corresponent. Feu clic a <b>Afegeix</b></li>
<li>Feu clic a <b>Torna a la pàgina principal</b></li>
<li>Heu de veure un bloc que conté un enllaç al vostre lloc de Moodle</li>
</ol>



<h3><a name="status" href="#status">Consideracions (versió BETA)</a></h3>
<div class="indent">
Aquest és un prototip en fase beta del giny de Google per a Moodle. Més endavant serà molt més útil.
Actualment hi ha un problema conegut i és que el giny no s’actualitza immediatament després de la instal·lació.
Els desenvolupadors hi estan treballant.
</div>';
$string['event_user_authenticated'] = 'Usuari autenticat';
