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
$string['setupinstrctstr'] = 'Instructions de configuration ';
$string['mgadgetstr'] = 'Gadget Moodle ';
$string['mgadgethelp'] = 'Aide relative au Gadget Moodle';
$string['googdiag'] = 'Diagnostics d\'intégration Google';
$string['googdebugopts'] = 'Une fois la configuration terminée, reconnectez-vous et commencez à explorer ';
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
$string['gsamlsetuptableinfo'] = '<ol><li>Configurez le <b>nom de domaine</b> pour le nom de domaine de vos services Google, puis cliquez sur <b>Enregistrer les modifications</b><br/><br/></li>
<li>Dans une nouvelle fenêtre, ouvrez la Console d\'administration de Google Apps en tant qu\'administrateur (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Cliquez sur l\'onglet <b>Outils avancés</b>.<br/><br/></li>
<li>À côté d\'Authentification, cliquez sur le lien <b>Activer l\'authentification unique</b>.<br/><br/></li>
<li>Cochez d\'abord la case <b>Activer l\'authentification unique</b>.<br/><br/></li>
<li>Ensuite, insérez cette URL dans le champ <b>URL de la page de connexion</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Insérez cette URL dans le champ <b>URL de la page de déconnexion</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Insérez cette URL dans le champ <b>URL de changement de mot de passe</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Générez et téléchargez un <b>certificat de vérification dans Google (Certificat X.509 contenant la clé publique)</b><br/><br/></li>
<li>Téléchargez également la clé privée et le certificat sur Moodle, puis cliquez sur <b>Enregistrer les modifications</b></b><br/></li></ol>';
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
$string['obtainemailfeed'] = 'Récupération du flux de messages pour le nom d\'utilisateur : ';
$string['currfileupload'] = 'Fichier actuel :';
$string['nonestr'] = 'Aucun';
$string['privatekeystr'] = 'Clé privée';
$string['certificatestr'] = 'Certificat';
$string['statustab'] = 'État';
$string['logstab'] = 'Journaux SAML';
$string['ssoteststab'] = 'Tests d\'authentification unique';
$string['docstab'] = 'Documentation';
$string['id'] = 'Identifiant';
$string['time'] = 'Heure';
$string['userid'] = 'Identifiant utilisateur';
$string['ip'] = 'Adresse IP';
$string['course'] = 'Cours';
$string['module'] = 'Module';
$string['cmid'] = 'cmid';
$string['action'] = 'Action';
$string['url'] = 'URL';
$string['info'] = 'Informations';
$string['config_gsaml'] = 'Configuration de SAML pour Google';
$string['config_gsaml_help'] = '<h2>Configuration complète</h2>

<p>La configuration complète de l\'intégration Google dans Moodle nécessite quelques réglages.
Ce fichier d\'aide vous guidera au cours des principales étapes du processus de configuration du plug-in
d\'authentification Google et de préparation des blocs GData et GMail.</p>

<h4>Table des matières :</h4>
<ul>
    <li><a href="#pre">Conditions requises</a></li>
    <li><a href="#status">Étapes</a></li>
    <li><a href="#expect">Résultats attendus</a></li>
    <li><a href="#consider">À savoir</a></li>
</ul>

<h4><a name="status" href="#status">État de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Conditions requises/Exigences</a></h4>
<p>
<ol>
    <li>Les codes GSAML, GAccess, Gmail et GData doivent être installés</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (facultatif en version bêta)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Étapes</a></h4>
<ol>
    <li>Connectez-vous à Moodle en tant qu\'administrateur.</li>
    <li>Cliquez sur <b>Notifications</b> pour mettre à jour les tables des blocs.</li>
    <li>Activez le plug-in d\'<b>authentification Google</b> à partir de la page d\'administration Gestion des plug-ins.</li>
    <li>Sélectionnez l\'authentification des utilisateurs, puis accédez à l\'<b>authentification Google</b> et suivez les instructions indiquées sur la page.</li>
    <li>Saisissez le domaine de votre page partenaire Google.</li>
    <li>Téléchargez le certificat (pour plus d\'informations sur sa création, consultez la <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentation Google sur la génération de clé</a>).</li>
    <li>Téléchargez la clé privée (pour plus d\'informations sur sa création, consultez la <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentation Google sur la génération de clé</a>).</li>
    <li>Cliquez sur Enregistrer.</li>
    <li>Suivez les instructions pour ajouter les URL appropriées sur la page d\'authentification unique Google.</li>
    <li>Cochez la case sur le site Google pour activer l\'authentification unique.</li>
    <li>Sur le site Google, assurez-vous que l\'API Provisioning est activée, sinon aucun utilisateur ne sera mis à jour.</li>
    <li>Sur le site Google, assurez-vous que l\'API Provisioning est activée.</li>
    <li>Côté Google, il se peut que vous ayez besoin de demander plus de comptes utilisateurs.</li>
    <li>Revenez à la page principale de Moodle.</li>
    <li>Cliquez sur Modifier.</li>
    <li>Ajoutez les blocs GAccess, GMail et GData à la page.</li>
    <li>Cliquez sur <b>Paramètres</b> dans le bloc <b>Google Apps</b>. Saisissez les informations de configuration.</li>
    <li>Cliquez sur le lien d\'état pour confirmer que vous avez bien configuré votre bloc Google Apps.</li>
    <li>Accédez à Administration du site > Sécurité > Règles site.</li>
    <li>Vérifiez la règle concernant les mots de passe.</li>
    <li>Exigez un mot de passe de 6 caractères minimum (conformément aux exigences Google pour les mots de passe).</li>
    <li>Dans le bloc GData vous devez ajouter des utilisateurs à synchroniser. Pour cela, cliquez sur le lien Ajouter des utilisateurs à synchroniser dans le <b>bloc Google Apps</b>. Pour mieux voir le résultat, réglez le Cron du bloc GData sur 1 min.</li>
     <li>Pour télécharger ces utilisateurs Moodle dans Google, vous devez exécuter le Cron manuellement en visitant admin/cron.php. Les résultats de la synchronisation doivent apparaître dans l\'afficheur.
    <b>Attention, avec cette version bêta, la synchronisation des utilisateurs Moodle avec Google peut durer <em>LONGTEMPS</em></b>.</li>
</ol>

<h4><a name="pre" href="#expect">Résultats attendus</a></h4>
<ul class="alternate" type="square">
    <li>Cliquez sur un service Google ou consultez les services sur la page partenaire Google
    pour l\'authentification auprès de Moodle.</li>
    <li>L\'utilisateur doit être connecté à Moodle ainsi qu\'aux services partenaires Google.</li>
    <li>Consultez la <b>page des diagnostics</b> dans les paramètres GSAML pour en savoir plus sur votre configuration.</li>
</ul>


<h4><a name="pre" href="#consider">À savoir (pour la version BÊTA)</a></h4>
<ul class="alternate" type="square">
    <li>Le flux GMail peut rester introuvable. C\'est sans doute parce que le mot de passe utilisateur ne correspond
     pas à celui de Google. Ce problème doit être résolu dans les versions suivantes. Pour l\'instant, assurez-vous que les utilisateurs sont synchronisés
     avec le bloc Google Apps. L\'adresse électronique se met à jour lors de la connexion. Nous travaillons pour que bientôt, les
     messages non lus soient mis à jour en temps réel.</li>

    <li>Il est important que l\'emplacement du plug-in d\'authentification Google soit classé dans l\'ordre d\'authentification.
    Pour le moment il doit contourner le type d\'authentification utilisateur lorsque l\'utilisateur Moodle modifie des mots de passe.
    Ce comportement peut avoir un impact sur les utilisateurs MNet. Nous n\'avons encore pas trouvé
    de solution à ce problème.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnostics';
$string['diagnostics_help'] = '<h2>Diagnostics d\'intégration Google</h2>
<p>La page Diagnostics fournit des informations sur l\'état de la connexion Gmail, GData et SAML.
Seuls les administrateurs disposent d\'une autorisation permettant de visualiser les informations de diagnostics.</p>

<h3>Table des matières :</h3>
<ul>
    <li><a href="#setup">Définition des informations de table</a></li>
    <li><a href="#gdata">État de la connexion GData</a></li>
    <li><a href="#gmail">Test de connexion au bloc GMail</a></li>
    <li><a href="#saml">Test de l\'état de l\'authentification unique SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Définition des informations de table</a></h3>
<div class="indent">
    Ces tables représentent la configuration actuelle de l\'intégration de Moodle dans Google. Assurez-vous que les valeurs ont bien été définies.
</div>

<h3><a name="gdata" href="#gdata">État de la connexion GData</a></h3>
<div class="indent">
Le bloc GData situé dans le dossier des blocs contient les bibliothèques de plusieurs services Google. Vous devez confirmer
qu\'il est en mesure de se connecter à ces services. Vous devrez peut-être modifier certaines valeurs sur la page des paramètres du bloc GData.
</div>

<h3><a name="gmail" href="#gmail">Test de connexion au bloc GMail</a></h3>
<div class="indent">
Pour le moment, à la connexion, le bloc GMail ne réactualise que les messages non lus de l\'utilisateur. Vous ne
pouvez réaliser le test que si le débogage est activé. Nous prendrons bientôt en charge la visualisation des messages non lus en temps réel.

</div>

<h3><a name="saml" href="#saml">Test de l\'état de l\'authentification unique SAML</a></h3>
<div class="indent">
Le test d\'état SAML est une vérification indépendante du processus d\'autorisation avec authentification unique. Il n\'a pas encore été mis en place.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Clés';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Clés d\'authentification unique Google</h3>
<p>Aussi bien Moodle que Google doivent être en mesure d\'autoriser un accès sécurisé aux ressources importantes.
L\'administrateur doit générer un <b>Certificat de vérification</b> et télécharger sur Google un certificat au format X.509 avec une clé publique intégrée.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentation Google sur la génération de clé</a>
Remarque : le service d\'authentification unique Moodle SAML n\'utilise que des <b>clés de chiffrement RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">État de Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificat</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Gadget Moodle';
$string['mgadget_help'] = '<h2>Gadget Google - Moodle</h2>

<p>Ce fichier d\'aide fournit un bref aperçu du gadget Google pour votre site Moodle</p>

<h3><a name="status" href="#status">Le gadget Moodle</a></h3>
<div class="indent">
    Le <em>gadget Moodle</em> s\'intègre dans votre page d\'accueil partenaire Google.

</div>


<p><b>Étapes d\'installation sur une page d\'accueil utilisateur</b></p>
<ol>
    <li>Connectez-vous à Moodle</li>
    <li>Cliquez sur la <b>page partenaire Google</b> dans le bloc <b>Accès aux services Google</b></li>
    <li>Cliquez sur le lien <b>Ajouter quelque chose</b></li>
    <li>Cliquez sur <b>Ajouter mon URL</b></li>
    <li>Saisissez l\'URL moodlegadget</li>
    <li>L\'URL est de type <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
    <li>Vous pouvez la trouver dans les paramètres d\'<b>Authentification Google</b> du bloc Admin</li>
    <li>Après avoir copié l\'URL dans le champ prévu à cet effet, cliquez sur <b>Ajouter</b></li>
    <li>Cliquez sur <b>Retour à la page d\'accueil</b></li>
    <li>Vous devriez désormais voir un bloc contenant un lien retour vers votre site Moodle.</li>
</ol>



<h3><a name="status" href="#status">À savoir (pour la version BÊTA)</a></h3>
<div class="indent">
    Il s\'agit du prototype bêta de ce gadget Google - Moodle. Il devrait être beaucoup plus utile à l\'avenir.
    Actuellement, un bug connu empêche le Gadget de se mettre à jour immédiatement après l\'installation.
    Nos développeurs essaient de le résoudre.
</div>';
$string['event_user_authenticated'] = 'Utilisateur authentifié';
