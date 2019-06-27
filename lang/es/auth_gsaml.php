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
$string['setupinstrctstr'] = 'Instrucciones de configuración ';
$string['mgadgetstr'] = 'Gadget de Moodle ';
$string['mgadgethelp'] = 'Ayuda de Gadget de Moodle';
$string['googdiag'] = 'Diagnóstico de integración con Google';
$string['googdebugopts'] = 'Una vez que haya finalizado la configuración, puede iniciar sesión nuevamente y visitar ';
$string['thediagnosticspage'] = 'La página de diagnósticos';
$string['notadminnopermin'] = 'No es un administrador. No tiene permiso para ver estos ajustes.';
$string['nokeyuploaded'] = 'No se subió ninguna clave';
$string['filesnotsaved'] = 'Los archivos no se guardaron.';
$string['keypathnotsaved'] = 'La ruta de la clave no se guardó.';
$string['uploadkeystr'] = 'Subir la clave';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Subir';
$string['uploadthekey'] = 'Subir clave';
$string['gadgetinfostr'] = 'Use la siguiente URL para agregar el Gadget de Moodle a su Página de inicio de Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Enlace a los ajustes de Google';
$string['nodomainyet'] = 'Aún no se ajustó ningún dominio';
$string['gsamlsetuptableinfo'] = '<ol><li>Configure el <b>Nombre del dominio</b> de su nombre del dominio del servicio de Google y haga clic en <b>Guardar cambios</b><br/><br/></li>.
<li>En una nueva ventana, abra la página del panel de control de Google Apps como administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>.
<li>Haga clic en la pestaña <b>Herramientas avanzadas</b>.<br/><br/></li>
<li>Haga clic en el enlace <b>Configurar inicio de sesión único (SSO)</b> junto a Autenticación.<br/><br/></li>
<li>Primero marque la casilla <b>Activar inicio de sesión único</b>.<br/><br/></li>
<li>Ahora introduzca esta URL en el campo de texto <b>URL de la página de inicio de sesión</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Introduzca esta URL en el campo de texto <b>URL de la página de cierre de sesión</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Introduzca esta URL en el campo de texto <b>Cambiar URL de contraseña</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Genere y suba un <b>Certificado de verificación en Google (certificado X.509 que contiene la clave pública)</b><br/><br/></li>.
<li>Suba la clave privada y el certificado en Moodle y luego haga clic en <b>Guardar cambios</b></b><br/></li></ol>.';
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
$string['gdatanotinstalled'] = 'El block de GData no está instalado.\\n';
$string['gappsblockinstalled'] = 'Bloque de Gapps instalado\\n';
$string['gmailblocknotinstalled'] = 'El block de Gmail no está instalado.';
$string['gmailblockinstalled'] = 'Block de Gmail instalado\\n';
$string['gdataapitestresults'] = 'Resultados de la Prueba API de GData';
$string['trytoinitgdataconnection'] = 'Intentando iniciar un GData para la conexión de Google<br/>';
$string['gsamlsuccess'] = 'Éxito';
$string['gmailtestresults'] = 'Resultados de la prueba de Gmail';
$string['gmailtestwillnotrun'] = 'La prueba de Gmail no se ejecutará a menos que Moodle esté en modo DEBUG_DEVELOPER.';
$string['obtainemailfeed'] = 'Obtención de fuente de correo electrónico para nombre de usuario: ';
$string['currfileupload'] = 'Archivo actual:';
$string['nonestr'] = 'Ninguno';
$string['privatekeystr'] = 'Clave privada';
$string['certificatestr'] = 'Certificado';
$string['statustab'] = 'Estado';
$string['logstab'] = 'Registros SAML';
$string['ssoteststab'] = 'Pruebas SSO';
$string['docstab'] = 'Documentación';
$string['id'] = 'ID';
$string['time'] = 'Fecha';
$string['userid'] = 'ID de usuario';
$string['ip'] = 'Dirección IP';
$string['course'] = 'Curso';
$string['module'] = 'Módulo';
$string['cmid'] = 'cmid';
$string['action'] = 'Acción';
$string['url'] = 'URL';
$string['info'] = 'Información';
$string['config_gsaml'] = 'Configurando Google SAML';
$string['config_gsaml_help'] = '<h2>Finalizar la configuración</h2>

<p>Al realizar los ajustes de la integración total entre Google y Moodle, se deben realizar algunas configuraciones. Este archivo de ayuda
puede guiarlo a lo largo de la mayor parte del proceso para configurar la extensión de autenticación de Google, como también para dejar listos el block de GData y el block de Gmail.</p>

<h4>Tabla de Contenido:</h4>
<ul>
    <li><a href="#pre">Condiciones previas</a></li>
    <li><a href="#status">Pasos</a></li>
    <li><a href="#expect">Resultados esperados</a></li>
    <li><a href="#consider">Consideraciones</a></li>
</ul>

<h4><a name="status" href="#status">Estado de Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Condiciones previas/suposiciones</a></h4>
<p>
<ol>
    <li>Se instalaron los códigos GSAML, GAccess, Gmail, GData</li>
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
    <li>Inicie sesión en Moodle como Administrador</li>
    <li>Haga clic en <b>Notificaciones</b> para actualizar las tablas de bloques</li>
    <li>Habilite la extensión <b>Autenticación de Google</b> en la página Administrar extensiones</li>
    <li>En Seleccionar autenticación de usuario, vaya a la página <b>Autenticación de Google</b> donde encontrará instrucciones a seguir.</li>
    <li>Introduzca su dominio de la página de Google Partner</li>
    <li>Suba el certificado (para obtener más información sobre cómo crearlo, consulte la <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentación de Google relacionada con la generación de claves</a> )</li>
    <li>Suba la clave privada (para obtener más información sobre cómo crearla, consulte la <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentación de Google relacionada con la generación de claves</a>)</li>
    <li>Haga clic en Guardar</li>
    <li>Siga las instrucciones para agregar las URL adecuadas en la página SSO de Google</li>
    <li>Haga clic en la casilla de verificación de Google Sites para habilitar SSO</li>
    <li>En Google Sites, asegúrese de habilitar la API aprovisionada, o no se actualizarán los usuarios.</li>
    <li>En Google Sites, asegúrese de que el campo Aprovisionamiento de API esté habilitado</li>
    <li>En Google Sites, es posible que deba solicitar más cuentas de usuario</li>
    <li>Regrese a la página principal de Moodle</li>
    <li>Haga clic en Editar</li>
    <li>Agregue los bloques GAccess, Gmail y GData a la página.</li>
    <li>Haga clic en <b>Ajustes</b> en el bloque <b>Google Apps</b>. Complete la información de configuración.</li>
    <li>Haga clic en el enlace Estado para confirmar que su bloque de Google Apps se configuró correctamente.</li>
    <li>Vaya a Administración del sitio &gt; Seguridad &gt; Políticas del sitio</li>
    <li>Marque Política de contraseñas</li>
    <li>Configure el campo Longitud de la contraseña en 6 o más caracteres (necesario para la política de contraseñas de Google)</li>
    <li>En el bloque GData, deberá agregar usuarios a la sincronización. Para hacerlo, haga clic en el enlace Agregar usuarios a la sincronización que se encuentra en el <b>bloque de Google 
   Apps</b>. De esta manera, podrá ver el resultado si configura          el cron del bloque GData en 1 min.</li>
    <li>Para subir esos usuarios de Moodle a Google, puede ejecutar el cron manualmente desde admin/cron.php. Los resultados de la sincronización deberían aparecer en la zona de lectura.
    <b>Atención: esta sincronización beta de los usuarios de Moodle con Google podría demorar <em>MUCHO</em> tiempo.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultados esperados</a></h4>
<ul class="alternate" type="square">
    <li>Si hace clic en cualquier enlace de Google Services o visita Google Services desde la página de Google Partner, podrá realizar la autenticación de Moodle.</li>
    <li>El usuario debe haber accedido a Moodle y a Google Partner Services</li>
    <li>Consulte la <b>Página de diagnósticos</b> de los ajustes de GSAML para obtener más información sobre cómo realizar la configuración.</li>
</ul>


<h4><a name="pre" href="#consider">Consideraciones (a partir de la versión BETA)</a></h4>
<ul class="alternate" type="square">
    <li>No se pudo encontrar la fuente de Gmail. Esto se debe, probablemente, a que la contraseña del usuario no coincide con la del usuario de Google.
    En el futuro, esto ya no será un problema. Por el momento, asegúrese de sincronizar los usuarios con el bloque de Google Apps. El correo electrónico se actualizará cuando inicie sesión. En el futuro, los mensajes no leídos se actualizarán en tiempo real.</li>

    <li>La ubicación de la extensión de autenticación de Google en el orden de autenticación es importante.
    A este momento, debe invalidar el tipo de autenticación de un usuario cuando un usuario de Moodle cambia las contraseñas.
    Este comportamiento podría afectar a los usuarios de MNet. Aún no se encontró la solución para este problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnósticos';
$string['diagnostics_help'] = '<h2>Diagnóstico de integración con Google</h2>
<p>En la página Diagnósticos podrá encontrar información sobre el estado de conexión de los blocks de Gmail, GData y SAML.
Solo los administradores cuentan con permisos para ver la información de diagnóstico.</p>

<h3>Tabla de Contenido:</h3>
<ul>
    <li><a href="#setup">Configurar información de la tabla</a></li>
    <li><a href="#gdata">Estado de conexión de GData</a></li>
    <li><a href="#gmail">Prueba de conexión del bloque Gmail</a></li>
    <li><a href="#saml">Prueba del estado de SAML SSO</a></li>
</ul>

<h3><a name="setup" href="#setup">Información de la tabla de configuración</a></h3>
<div class="indent">
    Estas tablas poseen información sobre la configuración actual de la integración de Moodle con Google. Asegúrese de haber configurado todos los valores.
</div>

<h3><a name="gdata" href="#gdata">Conexión de GData </a></h3>
<div class="indent">
El bloque GData ubicado en la carpeta de bloques contiene las bibliotecas de diferentes servicios de Google Services. Deberá confirmar la conexión con Google Services. Es posible que deba ajustar valores en la página Ajustes del bloque GData.
</div>

<h3><a name="gmail" href="#gmail">Prueba de conexión del bloque Gmail</a></h3>
<div class="indent">
En este momento, el bloque Gmail solo actualizará los mensajes no leídos por los usuarios cuando inicien sesión. Aquí solo podrá ejecutar la prueba si activa la depuración. En breve estará admitida la visualización de los mensajes no leídos en tiempo real.

</div>

<h3><a name="saml" href="#saml">Prueba del estado de SAML SSO</a></h3>
<div class="indent">
La prueba del estado de SAML es una verificación independiente del proceso de autorización del SSO. Aún no se ha implementado.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Claves';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Claves de SSO en Google</h3>
<p>Tanto Moodle como Google deben poder autorizar el acceso seguro a recursos importantes.
El administrador debe generar un <b>Certificado de verificación</b> y subir un certificado con formato X.509 con una clave pública incrustada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentación de Google relacionada con la generación de claves</a>
Tenga en cuenta que el servicio de SSO de SAML para Moodle solo utiliza <b>claves RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Estado de Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificado</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Gadget de Moodle';
$string['mgadget_help'] = '<h2>Google para Gadget de Moodle</h2>

<p>En este archivo de ayuda podrá encontrar una breve descripción del gadget de Google para su sitio de Moodle.</p>

<h3><a name="status" href="#status">Gadget de Moodle</a></h3>
<div class="indent">
    <em>Gadget de Moodle</em> es un gadget que puede incluir en su página de inicio de Google Partner.

</div>


<p><b>Pasos para instalarlo en la página de inicio de un usuario</b></p>
<ol>
    <li>Inicie sesión en Moodle.</li>
    <li>Haga clic en la <b>página de Google Partner</b>, en el block <b>acceso a Google Services</b>.</li>
    <li>Haga clic en el enlace <b>Agregar material</b>.</li>
    <li>Haga clic en <b>Agregar mi URL</b></li>.
    <li>Introduzca la URL del gadget de Moodle.</li>
    <li>Esta URL deberá ser similar a la siguiente: <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
    <li> La encontrará en los Ajustes de la <b>Autenticación de Google</b>, en el block de administración.</li>
    <li>Luego, copie la URL en el campo URL. Haga clic en <b>Agregar</b>.</li>
    <li>Haga clic en <b>Volver a la Página de inicio</b>.</li>
    <li>Ahora verá un block con un enlace que lo llevará de vuelta a su sitio de Moodle.</li>
</ol>



<h3><a name="status" href="#status">Consideraciones (a partir de la versión BETA)</a></h3>
<div class="indent">
    Ese es el prototipo beta para este Gadget de Moodle para Google. En el futuro, podrá serle mucho más útil.
    Actualmente se conoce un error del gadget, ya que no se actualiza inmediatamente cuando se lo instala.
    Los desarrolladores están trabajando para solucionarlo.
</div>';
$string['event_user_authenticated'] = 'Autenticado por el usuario';
