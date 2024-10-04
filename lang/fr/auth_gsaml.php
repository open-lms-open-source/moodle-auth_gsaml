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

$string['pluginname'] = 'Google SAML Auth';
$string['blockname'] = 'Authentification Google SAML';
$string['domainname'] = 'Domaine';
$string['auth_gsamldescription'] = 'Grâce à ce plug-in d\'authentification, Moodle bénéficie de la technologie d\'authentification unique des fournisseurs de services SAML.*';
$string['auth_gsamltitle'] = 'Authentification Google';
$string['cert'] = 'Certificat';
$string['key'] = 'Clé de chiffrement RSA';
$string['domainnamestr'] = 'Nom de domaine';
$string['rsakeystr'] = 'Fichier de clé de chiffrement RSA';
$string['desckeystr'] = 'Téléchargez la clé de chiffrement RSA (format PEM). Remarque : le service SAML de Moodle prend en charge uniquement les clés de chiffrement RSA.';
$string['googauthconfstr'] = 'Configuration de l\'authentification Google';
$string['ssl_str'] = 'Certificat de connexion SSL';
$string['desc_certstr'] = 'Téléchargez le certificat X.509. Remarque : vous devrez télécharger ce même fichier pour Google.';
$string['setupinstrctstr'] = 'Instructions de configuration';
$string['mgadgetstr'] = 'Gadget Moodle';
$string['mgadgethelp'] = 'Aide relative au Gadget Moodle';
$string['googdiag'] = 'Diagnostics d\'intégration Google';
$string['googdebugopts'] = 'Une fois la configuration terminée, reconnectez-vous et commencez à explorer';
$string['thediagnosticspage'] = 'Page de diagnostics';
$string['notadminnopermin'] = 'Vous n\'êtes pas un administrateur. Vous n\'avez pas l\'autorisation de visualiser ces paramètres.';
$string['nokeyuploaded'] = 'Aucune clé téléchargée';
$string['filesnotsaved'] = 'Les fichiers n\'ont pas été enregistrés.';
$string['keypathnotsaved'] = 'Le chemin de la clé n\'a pas été enregistré.';
$string['uploadkeystr'] = 'Téléchargement de la clé';
$string['uploadkey'] = 'TéléchargerClé';
$string['uploadstr'] = 'Télécharger';
$string['uploadthekey'] = 'Télécharger Clé';
$string['gadgetinfostr'] = 'Rendez-vous sur la page suivante pour ajouter le Gadget Moodle à votre site :<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Lien vers les paramètres Google';
$string['nodomainyet'] = 'Aucun domaine configuré';
$string['gsamlsetuptableinfo'] = '<ol><li>Définissez <b>le nom de domaine</b> sur le nom de domaine de votre service Google, puis cliquez sur <b>Enregistrer les modifications</b><br/><br/></li>
<li>Dans une nouvelle fenêtre, ouvrez la page du panneau de configuration de Google Apps en tant qu\'administrateur (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Cliquez sur l\'onglet <b>Outils avancés</b>.<br/><br/></li>
<li>Cliquez sur le lien <b>Configurer l\'authentification unique (SSO)</b> en regard de Authentification.<br/><br/></li>
<li>Cochez d\'abord la case <b>Activer l\'authentification unique</b>.<br/><br/></li>
<li>Insérez maintenant cette URL dans le champ de texte <b>URL de la page de connexion</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Insérez cette URL dans le champ de texte <b>URL de la page de déconnexion</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Insérez cette URL dans le champ de texte <b>Modifier l\'URL du mot de passe</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Générer et charger un <b>Certificat de vérification sur Google (certificat X.509 contenant la clé publique)</b><br/><br/></li>
<li>Chargez également la clé privée et le certificat sur Moodle, puis cliquez sur <b>Enregistrer les modifications</b></b><br/></li></ol>';
$string['tomoodle'] = 'Vers Moodle';
$string['errusernotloggedin'] = 'Connexion impossible pour l\'utilisateur';
$string['pwdnotvalid'] = 'Mot de passe incorrect';
$string['samlcodefailed'] = 'Échec du code SAML, activez le débogage pour en savoir plus';
$string['samlauthcodefailed'] = 'Échec du code d\'authentification SAML, activez le débogage pour en savoir plus';
$string['sixcharmsg'] = 'Le mot de passe de l\'intégration Google doit contenir plus de 6 caractères. Demandez à votre administrateur d\'ajuster les règles du site.';
$string['errordecodingsamlrequest'] = 'Problème de décodage de la requête SAML ou gzinflating (il peut s\'agir d\'une erreur de paramètres https, vérifiez la configuration de votre authentification unique Google) : {$a}';
$string['googsamldiag'] = 'Diagnostics SAML Google';
$string['notadminnoperm'] = 'Vous n\'êtes pas administrateur du site. Vous n\'êtes pas autorisé à consulter cette information.';
$string['gdatanotconfig'] = 'La table de configuration GData n\'est pas définie.';
$string['googlesamlconfigdata'] = 'Données de configuration SAML Google';
$string['gsamlconfignotset'] = 'La configuration SAML Google n\'a pas encore été réalisée';
$string['gdataconfignotset'] = 'Table de config GData non configurée';
$string['gdataconfig'] = 'Configuration GData';
$string['gmailconfig'] = 'Configuration GMail';
$string['componentinstallcheck'] = 'Vérification de l\'installation de composant';
$string['gdatanotinstalled'] = 'Bloc GData non installé\\n';
$string['gappsblockinstalled'] = 'Bloc GApps installé\\n';
$string['gmailblocknotinstalled'] = 'Bloc GMail non installé';
$string['gmailblockinstalled'] = 'Bloc GMail installé\\n';
$string['gdataapitestresults'] = 'Résultats du test API GData';
$string['trytoinitgdataconnection'] = 'Tentative d\'initialisation d\'une connexion GData - Google<br/>';
$string['gsamlsuccess'] = 'Réussie';
$string['gmailtestresults'] = 'Résultats du test GMail';
$string['gmailtestwillnotrun'] = 'Le test Gmail ne sera exécuté que si Moodle est en mode DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Récupération du flux de messages pour le nom d\'utilisateur :';
$string['currfileupload'] = 'Fichier actuel :';
$string['nonestr'] = 'Aucune';
$string['privatekeystr'] = 'Clé privée';
$string['certificatestr'] = 'Certificat';
$string['statustab'] = 'Statut';
$string['logstab'] = 'Journaux SAML';
$string['ssoteststab'] = 'Tests d\'authentification unique';
$string['docstab'] = 'Documentation';
$string['id'] = 'Identifiant';
$string['time'] = 'à';
$string['userid'] = 'Identifiant utilisateur';
$string['ip'] = 'Adresse IP';
$string['course'] = 'Cours';
$string['module'] = 'Module';
$string['cmid'] = 'cmid';
$string['action'] = 'Action';
$string['url'] = 'URL';
$string['info'] = 'Description';
$string['contextinstanceid'] = 'Identifiant d\'instance';
$string['courseid'] = 'Identifiant de cours';
$string['eventname'] = 'Nom de l\'événement';
$string['otherlog'] = 'Autre';
$string['useraccesedgservice'] = 'L\'utilisateur a accédé à gservice en premier';
$string['userneedsredirect'] = 'L\'utilisateur a une demande saml mais a besoin d\'une connexion/redirection';
$string['userislogged'] = 'L\'utilisateur s\'est connecté et samlrequest';
$string['login'] = 'Connexion';
$string['config_gsaml'] = 'Configuration de SAML pour Google';
$string['config_gsaml_help'] = '<h2>Configuration complète</h2>

<p>La configuration de l\'intégration complète de Google à Moodle nécessite un peu de configuration. Ce fichier d\'aide devrait
vous guider tout au long du processus de configuration du plug-in d\'authentification Google ainsi que des blocs GData
et Gmail.</p>

<h4>Table des matières :</h4>
<ul>
<li><a href="#pre">Conditions préalables</a></li>
<li><a href="#status">Étapes</a></li>
<li><a href="#expect">Résultats attendus</a></li>
<li><a href="#consider">Considérations</a></li>
</ul>

<h4><a name="status" href="#status">Statut de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Conditions préalables/hypothèses</a></h4>
<p>
<ol>
<li>Les codes GSAML, GAccess, Gmail, GData ont été installés</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (facultatif à partir de la version bêta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Étapes</a></h4>
<ol>
<li>Connexion à Moodle en tant qu\'administrateur</li>
<li>Cliquez sur <b>Notifications</b> pour mettre à jour les tableaux de bloc</li>
<li>Activez le plug-in <b>Authentification Google</b> à partir de la page d\'administration Gérer les plug-ins</li>
<li>Sélectionnez maintenant Authentification des utilisateurs et accédez à <b>Authentification Google</b>. Il devrait y avoir des instructions à suivre sur la page.</li>
<li>Saisissez le nom de domaine de votre page partenaire Google</li>
<li>Chargez le certificat (pour plus d\'informations sur la création de ce certificat : <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html&quot; Documentation Google concernant la génération de clés</a>)</li>
<li>Chargez la clé privée (pour plus d\'informations sur la création de cette clé, rendez-vous sur <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html&quot; Documentation Google concernant la génération de clés</a>)</li>
<li>Cliquez sur Enregistrer</li>
<li>Suivez les instructions pour ajouter les URL appropriées à la page SSO de Google</li>
<li>Cochez la case sur le site Google pour activer SSO</li>
<li>Sur le site Google, assurez-vous d\'activer l\'API d\'approvisionnement, sinon aucun utilisateur ne sera mis à jour.</li>
<li>Sur le site Google, assurez-vous que l\'API d\'approvisionnement est activée</li>
<li>Du côté de Google, vous devrez peut-être demander plus de comptes utilisateur</li>
<li>Revenez à la page principale de Moodle</li>
<li>Cliquez pour modifier</li>
<li>Ajoutez les blocs GAccess, Gmail et GData à la page.</li>
<li>Cliquez sur <b>Paramètres</b> dans le bloc <b>Google Apps</b>. Renseignez les informations de configuration.</li>
<li>Cliquez sur le lien Statut pour confirmer que votre bloc Google Apps est correctement configuré.</li>
<li>Accédez à Administration du site &gt; Sécurité &gt; Politiques du site</li>
<li>Vérifiez la politique de mot de passe</li>
<li>Définissez la longueur du mot de passe sur 6 ou plus (obligatoire pour la stratégie de mot de passe de Google)</li>
<li>Dans le bloc GData, vous devez ajouter des utilisateurs à synchroniser. Pour ce faire, cliquez sur le lien Ajouter des utilisateurs à synchroniser dans le <b>bloc Google
Apps</b>. Il est utile de voir le résultat si vous définissez la tâche cron du bloc GData sur 1 minute.</li>
<li>Pour charger ces utilisateurs Moodle dans Google, vous pouvez exécuter la tâche cron manuellement en accédant à admin/cron.php. Les résultats de la synchronisation doivent apparaître dans la fenêtre de lecture.
<b>Attention, à partir de cette version bêta, la synchronisation des utilisateurs de Moodle avec Google peut prendre <em>BEAUCOUP</em> de temps.</b></li>
</ol>

<h4><a name="pre" href="#expect">Résultats attendus</a></h4>
<ul class="alternate" type="square">
<li>Si vous cliquez sur un lien vers un service Google ou si vous visitez un service à partir de la page des partenaires Google,
vous serez authentifié par Moodle.</li>
<li>L\'utilisateur doit être connecté à Moodle ainsi qu\'à Google Partner Services</li>
<li>Pour plus d\'informations sur votre configuration, reportez-vous à la <b>page Diagnostics</b> dans les paramètres GSAML.</li>
</ul>


<h4><a name="pre" href="#consider">Considérations (à partir de la version BÊTA)</a></h4>
<ul class="alternate" type="square">
<li>Le flux Gmail est peut-être introuvable. Cela est probablement dû au fait que le mot de passe de l\'utilisateur ne correspond pas au mot de passe de l\'utilisateur de Google.
À l\'avenir, ce ne sera plus un problème. Pour l\'instant, assurez-vous de synchroniser les utilisateurs avec le bloc Google Apps. L\'e-mail sera mis à jour
lors de la connexion. À l\'avenir, les messages non lus seront mis à jour en temps réel.</li>

<li>L\'emplacement du plug-in d\'authentification Google dans l\'ordre d\'authentification est important.
Pour le moment, il doit remplacer le type d\'authentification d\'un utilisateur lorsqu\'un utilisateur Moodle change de mot de passe.
Ce comportement peut affecter les utilisateurs MNet. Aucune solution à ce problème n\'a encore été trouvée.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostics';
$string['diagnostics_help'] = '<h2>Diagnostics d\'intégration Google</h2>
<p>La page de diagnostic révèle des informations sur l\'état des connexions Gmail, GData et SAML.
Seuls les administrateurs ont le droit de consulter les informations de diagnostic.</p>

<h3>Table des matières :</h3>
<ul>
<li><a href="#setup">Configurer les informations du tableau</a></li>
<li><a href="#gdata">Statut de la connexion GData</a></li>
<li><a href="#gmail">Test de connexion du bloc Gmail</a></li>
<li><a href="#saml">Test de statut SSO SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informations sur le tableau de configuration</a></h3>
<div class="indent">
Ces tableaux représentent la configuration actuelle de l\'intégration Moodle à Google. Assurez-vous que les valeurs sont toutes définies.
</div>

<h3><a name="gdata" href="#gdata">Connexion à GData</a></h3>
<div class="indent">
Le bloc GData situé dans le dossier Blocs contient les bibliothèques de divers services Google. Vous devez confirmer
qu\'il est en mesure de se connecter aux services Google. Vous devrez peut-être ajuster les valeurs sur la page des paramètres du bloc GData.
</div>

<h3><a name="gmail" href="#gmail">Test de connexion du bloc Gmail</a></h3>
<div class="indent">
Pour le moment, le bloc Gmail actualise uniquement les messages non lus d\'un utilisateur lors de la connexion. Vous ne pourrez exécuter le test
ici que si le débogage est activé. La prise en charge de l\'affichage des messages non lus en temps réel sera bientôt disponible.
</div>

<h3><a name="saml" href="#saml">Test de statut SSO SAML</a></h3>
<div class="indent">
Le test de statut SAML est une vérification indépendante du processus d\'autorisation SSO. Il n\'a pas encore été mis en œuvre.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Clés';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Clés SSO Google</h3>
<p>Moodle et Google doivent tous deux être en mesure d\'autoriser de manière sécurisée l\'accès aux ressources importantes.
L\'administrateur doit générer un <b>Certificat de vérification</b> et charger sur Google un certificat au format X.509 avec une
clé publique intégrée.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentation Google concernant la génération de clés)</a>
Notez que le service SAML Moodle SSO utilise uniquement des <b>clés RSA.</b>
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
$string['mgadget'] = 'Gadget Moodle';
$string['mgadget_help'] = '<h2>Google vers gadget Moodle</h2>

<p>Ce fichier d\'aide fournit un bref aperçu du gadget Google pour votre site Moodle</p>

<h3><a name="status" href="#status">Le gadget Moodle</a></h3>
<div class="indent">
Le <em>gadget Moodle</em> est un gadget que vous pouvez intégrer à votre page de démarrage partenaire Google.
</div>


<p><b>Étapes d\'installation sur la page d\'accueil d\'un utilisateur</b></p>
<ol>
<li>Connexion à Moodle</li>
<li>Cliquez sur la <b>Page partenaire Google</b> dans le bloc <b>Accès aux services Google</b></li>
<li>Cliquez sur le lien <b>Ajouter des éléments</b></li>
<li>Cliquez sur <b>Ajouter mon URL</b></li>
<li>Saisissez l’URL moodlegadget</li>
<li>L\'URL ressemble à<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Elle se trouve dans les paramètres <b>Authentification Google</b> dans le bloc d\'administration</li>
<li>Après avoir copié l\'URL dans le champ URL. Cliquez sur <b>Ajouter</b></li>
<li>Cliquez sur <b>Revenir à la page d\'accueil</b></li>
<li>Vous devriez maintenant voir un bloc contenant un lien vers votre site Moodle</li>
</ol>



<h3><a name="status" href="#status">Considérations (à partir de la version BÊTA)</a></h3>
<div class="indent">
Il s\'agit du prototype bêta de ce gadget Moodle Google. À l\'avenir, il pourrait être beaucoup plus utile.
Il existe actuellement un bug connu concernant le gadget, qui ne se met pas à jour immédiatement après l\'installation.
Les développeurs s\'en occupent.
</div>';
$string['event_user_authenticated'] = 'Utilisateur authentifié';
