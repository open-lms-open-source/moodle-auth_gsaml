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

$string['pluginname'] = 'Autenticación SAML de Google';
$string['blockname'] = 'Autenticación SAML de Google';
$string['domainname'] = 'Dominio';
$string['auth_gsamldescription'] = 'Esta extensión de autenticación le permite a Moodle realizar un inicio de sesión único con SAML SPS.';
$string['auth_gsamltitle'] = 'Autenticación de Google';
$string['cert'] = 'Certificado';
$string['key'] = 'Clave RSA';
$string['domainnamestr'] = 'Nombre del dominio';
$string['rsakeystr'] = 'Archivo clave RSA';
$string['desckeystr'] = 'Suba la clave RSA (pem). Tenga en cuenta que el servicio SAML de Moodle solo es compatible con claves RSA firmadas.';
$string['googauthconfstr'] = 'Configuración de la autenticación de Google';
$string['ssl_str'] = 'Certificado de firma SSL';
$string['desc_certstr'] = 'Suba el Certificado X.509. Tenga en cuenta que este es el mismo archivo que también subirá a Google.';
$string['setupinstrctstr'] = 'Instrucciones de configuración';
$string['mgadgetstr'] = 'Gadget de Moodle';
$string['mgadgethelp'] = 'Ayuda de Gadget de Moodle';
$string['googdiag'] = 'Diagnóstico de integración con Google';
$string['googdebugopts'] = 'Una vez que haya finalizado la configuración, puede iniciar sesión nuevamente y visitar';
$string['thediagnosticspage'] = 'La página de diagnósticos';
$string['notadminnopermin'] = 'No es un administrador. No tiene permiso para ver estos ajustes.';
$string['nokeyuploaded'] = 'No se subió ninguna clave';
$string['filesnotsaved'] = 'Los archivos no se guardaron.';
$string['keypathnotsaved'] = 'La ruta de la clave no se guardó.';
$string['uploadkeystr'] = 'Subir la clave';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Subir';
$string['uploadthekey'] = 'Subir clave';
$string['gadgetinfostr'] = 'Use la siguiente URL para agregar el gadget de Moodle a su página de inicio de Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Enlace a los ajustes de Google';
$string['nodomainyet'] = 'Aún no se ajustó ningún dominio';
$string['gsamlsetuptableinfo'] = '<ol><li>Establezca el <b>nombre de dominio</b> en el nombre de dominio del servicio de Google y, a continuación, haga clic en <b>Guardar cambios</b>.<br/><br/></li>
<li>En una nueva ventana, abra la página del panel de control de Google Apps como administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Haga clic en la pestaña <b>Herramientas avanzadas</b>.<br/><br/></li>
<li>Haga clic en el enlace <b>Configurar inicio de sesión único (SSO)</b> situado junto a Autenticación.<br/><br/></li>
<li>En primer lugar, marque la casilla <b>Habilitar inicio de sesión único</b>.<br/><br/></li>
<li>Ahora inserte esta URL en el campo de texto <b>URL de la página de inicio de sesión</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Inserte esta URL en el campo de texto <b>URL de la página de cierre de sesión</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Inserte esta URL en el campo de texto <b>URL de cambio de contraseña</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Genere y cargue un <b>certificado de verificación en Google (certificado X.509 que contiene la clave pública)</b><br/><br/></li>
<li>Cargue también la clave privada y el certificado en Moodle y, a continuación, haga clic en <b>Guardar cambios</b>.</b><br/></li></ol>';
$string['tomoodle'] = 'A Moodle';
$string['errusernotloggedin'] = 'El usuario no pudo acceder';
$string['pwdnotvalid'] = 'Contraseña no válida';
$string['samlcodefailed'] = 'Error en el código SAML; active el depurador para saber por qué';
$string['samlauthcodefailed'] = 'Error en el código de autenticación SAML; active el depurador para obtener más información';
$string['sixcharmsg'] = 'La contraseña del usuario debe tener más de 6 caracteres para la integración con Google. Pídale al Administrador que modifique los ajustes de la política del sitio.';
$string['errordecodingsamlrequest'] = 'Problema al decodificar la solicitud SAML o gzinflating (puede ser un error de ajustes de HTTPS; verifique la configuración SSO de Google): {$a}';
$string['googsamldiag'] = 'Diagnóstico SAML de Google';
$string['notadminnoperm'] = 'No es un administrador del sitio. No tiene permiso para ver esta información.';
$string['gdatanotconfig'] = 'Tabla de configuración de GData no establecida.';
$string['googlesamlconfigdata'] = 'Datos de configuración SAML de Google';
$string['gsamlconfignotset'] = 'Aún no se ha ajustado la configuración SAML de Google';
$string['gdataconfignotset'] = 'Tabla de config. de GData no establecida';
$string['gdataconfig'] = 'Configuración de GData';
$string['gmailconfig'] = 'Configuración de Gmail';
$string['componentinstallcheck'] = 'Comprobación previa de la instalación del componente';
$string['gdatanotinstalled'] = 'El bloque GData no está instalado.\\n';
$string['gappsblockinstalled'] = 'Bloque de Gapps instalado\\n';
$string['gmailblocknotinstalled'] = 'El bloque Gmail no está instalado.';
$string['gmailblockinstalled'] = 'Bloque Gmail instalado\\n';
$string['gdataapitestresults'] = 'Resultados de la Prueba API de GData';
$string['trytoinitgdataconnection'] = 'Intentando iniciar un GData para la conexión de Google<br/>';
$string['gsamlsuccess'] = 'Éxito';
$string['gmailtestresults'] = 'Resultados de la prueba de Gmail';
$string['gmailtestwillnotrun'] = 'La prueba de Gmail no se ejecutará a menos que Moodle esté en modo DEBUG_DEVELOPER.';
$string['obtainemailfeed'] = 'Obtención de fuente de correo electrónico para nombre de usuario:';
$string['currfileupload'] = 'Archivo actual:';
$string['nonestr'] = 'Ninguno';
$string['privatekeystr'] = 'Clave privada';
$string['certificatestr'] = 'Certificado';
$string['statustab'] = 'Estado';
$string['logstab'] = 'Registros SAML';
$string['ssoteststab'] = 'Pruebas SSO';
$string['docstab'] = 'Documentación';
$string['id'] = 'Id.';
$string['time'] = 'Hora';
$string['userid'] = 'ID de usuario';
$string['ip'] = 'Dirección IP';
$string['course'] = 'Curso';
$string['module'] = 'Módulo';
$string['cmid'] = 'cmid';
$string['action'] = 'Acción';
$string['url'] = 'URL';
$string['info'] = 'Información';
$string['contextinstanceid'] = 'ID de instancia';
$string['courseid'] = 'ID del curso';
$string['eventname'] = 'Nombre del evento';
$string['otherlog'] = 'Otro';
$string['useraccesedgservice'] = 'Fecha del primer acceso del usuario a gservice';
$string['userneedsredirect'] = 'El usuario tiene una solicitud SAML, pero necesita iniciar sesión/redirigir';
$string['userislogged'] = 'El usuario ha iniciado sesión y tiene una solicitud SAML';
$string['login'] = 'Inicio de sesión';
$string['config_gsaml'] = 'Configurando Google SAML';
$string['config_gsaml_help'] = '<h2>Configuración completa</h2>

<p>La integración completa de Google en Moodle requiere cierto trabajo de configuración. Este archivo de ayuda debería
guiarle a través de la mayor parte del proceso para configurar el complemento de autenticación de Google, así como el bloque GData y
el bloque Gmail.</p>

<h4>Tabla de contenido:</h4>
<ul>
<li><a href="#pre">Condiciones previas</a></li>
<li><a href="#status">Pasos</a></li>
<li><a href="#expect">Resultados esperados</a></li>
<li><a href="#consider">Consideraciones</a></li>
</ul>

<h4><a name="status" href="#status">Estados de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Condiciones previas/supuestos</a></h4>
<p>
<ol>
<li>Se han instalado los códigos GSAML, GAccess, Gmail y GData</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (opcional a partir de la versión beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Pasos</a></h4>
<ol>
<li>Inicie sesión en Moodle como administrador.</li>
<li>Haga clic en <b>Notificaciones</b> para actualizar las tablas de bloques.</li>
<li>Active el complemento de <b>Autenticación de Google</b> en la página de administración de Gestionar complementos.</li>
<li>A continuación, seleccione Autenticación de usuarios y vaya a <b>Autenticación de Google</b>. En la página deberían aparecer las instrucciones que debe seguir.</li>
<li>Introduzca el dominio de su página de partner de Google.</li>
<li>Cargue el certificado (para obtener más información sobre cómo crearlo, visite <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Documentación de Google sobre la generación de claves</a>).</li>
<li>Cargue la clave privada (para obtener más información sobre cómo crearla, visite <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Documentación de Google sobre la generación de claves</a>).</li>
<li>Haga clic en Guardar.</li>
<li>Siga las instrucciones para agregar las URL correspondientes a la página de SSO de Google.</li>
<li>Haga clic en la casilla de verificación del sitio de Google para habilitar SSO.</li>
<li>En el sitio de Google, asegúrese de activar la API de aprovisionamiento o no se actualizará ningún usuario.</li>
<li>En el sitio de Google, asegúrese de que esté habilitado el aprovisionamiento de API.</li>
<li>En Google, es posible que necesite solicitar más cuentas de usuario.</li>
<li>Vuelva a la página principal de Moodle.</li>
<li>Haga clic en Editar.</li>
<li>Añada los bloques GAccess, Gmail y GData a la página.</li>
<li>Haga clic en <b>Configuración</b> en el bloque <b>Google Apps</b>. Rellene la información de configuración.</li>
<li>Haga clic en el enlace Estado para confirmar que el bloque Google Apps se ha configurado correctamente.</li>
<li>Vaya a Administración del sitio &gt; Seguridad &gt; Políticas del sitio.</li>
<li>Compruebe la política de contraseñas.</li>
<li>Establezca la longitud de la contraseña en 6 caracteres o más (obligatorio según la política de contraseñas de Google).</li>
<li>En el bloque GData debe agregar usuarios para sincronizar. Para ello, haga clic en el enlace Agregar usuarios para sincronizar en el bloque <b>Google Apps
</b>. Esto sirve también para comprobar el resultado si establece el cron del bloque GData en 1 min.</li>
<li>Para cargar esos usuarios de Moodle en Google, puede ejecutar el cron manualmente visitando admin/cron.php. Los resultados de la sincronización deben aparecer en la lectura.
<b>Tenga en cuenta que, a partir de esta versión beta, la sincronización de los usuarios de Moodle con Google puede tardar <em>MUCHO</em> tiempo.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultados esperados</a></h4>
<ul class="alternate" type="square">
<li>Si hace clic en cualquier enlace de los servicios de Google o visita los servicios desde la página de Google Partner,
podrá realizar la autenticación de Moodle.</li>
<li>El usuario debe haber iniciado sesión en Moodle, así como en los servicios de Google Partner.</li>
<li>Consulte la <b>Página de diagnósticos</b> en la configuración de GSAML para obtener más información sobre cómo realizar la configuración.</li>
</ul>


<h4><a name="pre" href="#consider">Consideraciones (a partir de la versión beta)</a></h4>
<ul class="alternate" type="square">
<li>Es posible que no se encuentre el feed de Gmail. Esto se debe probablemente a que la contraseña del usuario no coincide con la contraseña de usuario de Google.
En el futuro, esto no será un problema. Por el momento, asegúrese de sincronizar los usuarios con el bloque Google Apps. El correo electrónico se actualizará
al iniciar sesión. En el futuro, los mensajes no leídos se actualizarán en tiempo real.</li>

<li>La ubicación del complemento de autenticación de Google en el orden de autenticación es importante.
A partir de este momento, necesita anular el tipo de autenticación de un usuario cuando un usuario de Moodle cambie las contraseñas.
Este comportamiento puede afectar a los usuarios de MNet. Aún no se ha encontrado una solución para este problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnósticos';
$string['diagnostics_help'] = '<h2>Diagnóstico de integración con Google</h2>
<p>La página de diagnóstico mostrará información sobre el estado de conexión de Gmail, GData y SAML.
Solamente los administradores tienen permiso para ver información de diagnóstico.</p>

<h3>Tabla de contenido:</h3>
<ul>
<li><a href="#setup">Información de la tabla de configuración</a></li>
<li><a href="#gdata">Estado de conexión de GData</a></li>
<li><a href="#gmail">Prueba de conexión del bloque Gmail</a></li>
<li><a href="#saml">Prueba de estado de SSO de SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Información de la tabla de configuración</a></h3>
<div class="indent">
Estas tablas representan la configuración actual de la integración de Moodle con Google. Asegúrese de que todos los valores están configurados.
</div>

<h3><a name="gdata" href="#gdata">Conexión de GData</a></h3>
<div class="indent">
El bloque GData ubicado en la carpeta de bloques contiene las bibliotecas de una gran variedad de servicios de Google. Debe confirmar
que pueda conectarse a los servicios de Google. Es posible que tenga que ajustar los valores en la página Configuración de bloque GData.
</div>

<h3><a name="gmail" href="#gmail">Prueba de conexión del bloque Gmail</a></h3>
<div class="indent">
Por el momento, el bloque Gmail solo actualizará los mensajes no leídos de los usuarios al iniciar sesión. Solo podrá
ejecutar la prueba aquí si la depuración está activada. Próximamente se incorporará compatibilidad con la visualización de mensajes no leídos en tiempo real.
</div>

<h3><a name="saml" href="#saml">Prueba de estado de SSO de SAML</a></h3>
<div class="indent">
La prueba de estado de SAML es una comprobación independiente del proceso de autorización de SSO. No se ha implementado por el momento.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Claves';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Claves SSO de Google</h3>
<p>Tanto Moodle como Google deben ser capaces de autorizar de forma segura el acceso a recursos importantes.
El administrador debe generar un <b>certificado de verificación</b> y cargar en Google un certificado con formato X.509 con una
clave pública incrustada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentación de Google sobre la generación de claves</a>
Tenga en cuenta que el servicio SSO de SAML para Moodle solamente utiliza <b>claves RSA.</b>
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
$string['mgadget'] = 'Gadget de Moodle';
$string['mgadget_help'] = '<h2>Gadget de Google a Moodle</h2>

<p>Este archivo de ayuda proporciona una breve descripción general del gadget de Google para su sitio de Moodle.</p>

<h3><a name="status" href="#status">Gadget de Moodle</a></h3>
<div class="indent">
El <em>gadget de Moodle</em> es un gadget que puede incrustar en la página de inicio de Google Partner.
</div>


<p><b>Pasos para la instalación en una página de inicio de usuarios</b></p>
<ol>
<li>Inicie sesión en Moodle.</li>
<li>Haga clic en la <b>página de Google Partner</b> en el bloque <b>Acceso a los servicios de Google</b>.</li>
<li>Haga clic en el enlace <b>Agregar material</b>.</li>
<li>Haga clic en <b>Agregar mi URL</b>.</li>
<li>Introduzca la URL de moodlegadget.</li>
<li>La URL será similar a esta:<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>Se puede encontrar en la configuración de <b>Autenticación de Google</b> en el bloque Administrador.</li>
<li>Después de copiar la URL en el campo URL, haga clic en <b>Agregar</b>.</li>
<li>Haga clic en <b>Volver a la página de inicio</b>.</li>
<li>Ahora debería ver un bloque que contiene un enlace a su sitio de Moodle.</li>
</ol>



<h3><a name="status" href="#status">Consideraciones (a partir de la versión beta)</a></h3>
<div class="indent">
Este es el prototipo beta de este gadget Moodle de Google. En el futuro puede ser mucho más útil.
En estos momentos, existe un error conocido que impide que el gadget se actualice inmediatamente después de la instalación.
Los desarrolladores lo están investigando.
</div>';
$string['event_user_authenticated'] = 'Autenticado por el usuario';
