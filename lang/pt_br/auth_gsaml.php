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
 * @copyright  Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Autenticação SAML do Google';
$string['blockname'] = 'Autenticação SAML do Google';
$string['domainname'] = 'Domínio';
$string['auth_gsamldescription'] = 'Este plug-in de autenticação possibilita que o Moodle faça logon único com SAML SPS.';
$string['auth_gsamltitle'] = 'Autenticação do Google';
$string['cert'] = 'Certificado';
$string['key'] = 'Chave RSA';
$string['domainnamestr'] = 'Nome do domínio';
$string['rsakeystr'] = 'Arquivo de chave RSA';
$string['desckeystr'] = 'Carregue a chave RSA (pem). Observe que o serviço SAML do Moodle só oferece suporte a chaves RSA assinadas.';
$string['googauthconfstr'] = 'Configuração de autenticação do Google';
$string['ssl_str'] = 'Certificado de assinatura SSL';
$string['desc_certstr'] = 'Carregue o certificado X.509. Observe que esse é o mesmo arquivo que você enviará para o Google.';
$string['setupinstrctstr'] = 'Configurar instruções ';
$string['mgadgetstr'] = 'Gadget do Moodle ';
$string['mgadgethelp'] = 'Ajuda do gadget do Moodle';
$string['googdiag'] = 'Diagnóstico de integração do Google';
$string['googdebugopts'] = 'Depois de concluir a configuração, você pode fazer login novamente e acessar ';
$string['thediagnosticspage'] = 'A página de diagnósticos';
$string['notadminnopermin'] = 'Você não é um administrador. Você não possui permissão para visualizar essas configurações.';
$string['nokeyuploaded'] = 'Nenhuma chave foi carregada';
$string['filesnotsaved'] = 'Os arquivos não foram salvos.';
$string['keypathnotsaved'] = 'O caminho de chave não foi salvo.';
$string['uploadkeystr'] = 'Carregar a chave';
$string['uploadkey'] = 'Carregar chave';
$string['uploadstr'] = 'Carregar';
$string['uploadthekey'] = 'Carregar chave';
$string['gadgetinfostr'] = 'Use a URL a seguir para adicionar o Moodle Gadget à sua página inicial do Google <br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link para configurações do Google';
$string['nodomainyet'] = 'Nenhum domínio definido ainda';
$string['gsamlsetuptableinfo'] = '<ol><li>Defina o <b>Nome de domínio</b> como seu nome de domínio de serviços do Google e depois clique em <b>Salvar alterações</b><br/><br/></li>
<li>Em uma nova janela, abra a página do painel de controle do Google Apps como administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Clique na guia <b>Ferramentas avançadas</b>.<br/><br/></li>
<li>Clique no link <b>Configurar logon único (SSO)</b> ao lado de "Autenticação".<br/><br/></li>
<li>Primeiramente, marque a caixa <b>Ativar logon único</b>.<br/><br/></li>
<li>Depois, insira este URL no campo de texto <b>URL da página de login</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Insira este URL no campo de texto <b>URL da página de logout</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Insira este URL no campo de texto <b>URL para alteração de senha</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Gere e carregue um <b>Certificado de verificação para o Google (certificado X.509 que contenha a chave pública)</b><br/><br/></li>
<li>Carregue a chave particular e o certificado no Moodle e depois clique em <b>Salvar alterações</b></b><br/></li></ol>';
$string['tomoodle'] = 'Para o Moodle';
$string['errusernotloggedin'] = 'O usuário não pôde ser autenticado';
$string['pwdnotvalid'] = 'Senha inválida';
$string['samlcodefailed'] = 'Falha de código SAM. Ative a depuração para descobrir o motivo';
$string['samlauthcodefailed'] = 'Falha de código de autenticação SAML; ative a depuração para obter mais informações';
$string['sixcharmsg'] = 'A senha do usuário precisa ter mais de 6 caracteres para a integração com o Google. Peça ao seu administrador para ajustar as configurações da política do site';
$string['errordecodingsamlrequest'] = 'Problema ao decodificar solicitação SAML ou gzinflating (pode ser um erro de configurações HTTPS; verifique sua configuração de SSO do Google): {$a}';
$string['googsamldiag'] = 'Diagnóstico SAML do Google';
$string['notadminnoperm'] = 'Você não é um administrador de site. Você não tem permissão para visualizar essas informações';
$string['gdatanotconfig'] = 'Tabela de configuração GData não definida.';
$string['googlesamlconfigdata'] = 'Dados de configuração SAML do Google';
$string['gsamlconfignotset'] = 'Configuração SAML do Google ainda não definida';
$string['gdataconfignotset'] = 'Tabela de configuração GData não definida';
$string['gdataconfig'] = 'Configuração do GData';
$string['gmailconfig'] = 'Configuração do Gmail';
$string['componentinstallcheck'] = 'Pré-verificação de instalação de componentes';
$string['gdatanotinstalled'] = 'O bloco GData não está instalado\\n';
$string['gappsblockinstalled'] = 'Bloco do GApps instalado\\n';
$string['gmailblocknotinstalled'] = 'O bloco do Gmail não está instalado';
$string['gmailblockinstalled'] = 'Bloco do Gmail instalado\\n';
$string['gdataapitestresults'] = 'Resultados do teste de API do GData';
$string['trytoinitgdataconnection'] = 'Tentando iniciar um GData para conexão com o Google<br/>';
$string['gsamlsuccess'] = 'Sucesso';
$string['gmailtestresults'] = 'Resultados de teste do Gmail';
$string['gmailtestwillnotrun'] = 'O teste do Gmail não será executado a menos que o Moodle esteja no modo DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'Obtendo feed de e-mail para nome de usuário: ';
$string['currfileupload'] = 'Arquivo atual:';
$string['nonestr'] = 'Nenhuma';
$string['privatekeystr'] = 'Chave privada';
$string['certificatestr'] = 'Certificado';
$string['statustab'] = 'Status';
$string['logstab'] = 'Registros SAML';
$string['ssoteststab'] = 'Testes SSO';
$string['docstab'] = 'Documentação';
$string['id'] = 'ID';
$string['time'] = 'Hora';
$string['userid'] = 'UserID';
$string['ip'] = 'Endereço IP';
$string['course'] = 'Curso';
$string['module'] = 'Módulo';
$string['cmid'] = 'cmid';
$string['action'] = 'Ação';
$string['url'] = 'URL';
$string['info'] = 'Informações';
$string['config_gsaml'] = 'Configurando SAML do Google';
$string['config_gsaml_help'] = '<h2>Configuração completa</h2>

<p>A configuração completa da integração do Google com o Moodle exige alguns ajustes. Este arquivo de ajuda deve 
orientar você durante a maior parte do processo de configuração do plug-in de autenticação do Google, além da preparação do bloco GData e do bloco
do Gmail.</p>

<h4>Índice:</h4>
<ul>
    <li><a href="#pre">Pré-condições</a></li>
    <li><a href="#status">Etapas</a></li>
    <li><a href="#expect">Resultados esperados</a></li>
    <li><a href="#consider">Considerações</a></li>
</ul>

<h4><a name="status" href="#status">Status do Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Pré-condições/pressuposições</a></h4>
<p>
<ol>
    <li>Códigos de GSAML, GAccess, Gmail e GData instalados</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (opcional até a versão beta)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Etapas</a></h4>
<ol>
    <li>Faça login no Moodle como administrador</li>
    <li>Clique em <b>Notificações</b> para atualizar as tabelas de blocos</li>
    <li>Habilite o plug-in de <b>Autenticação do Google</b> a partir da página de administração "Gerenciar plug-ins"</li>
    <li>Agora, selecione "Autenticação de usuários" e acesse <b>Autenticação do Google</b>; a página a seguir deverá ter orientações.</li>
    <li>Acesse seu domínio de página de parceiro do Google</li>
    <li>Carregue o certificado (para obter mais informações sobre a criação do certificado, acesse a <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentação do Google sobre a geração de chaves</a> )</li>
    <li>Carregue a chave privada (para obter mais informações sobre como criá-la, acesse a <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentação do Google sobre a geração de chaves</a>)</li>
    <li>Clique em "Salvar"</li>
    <li>Siga as orientações para adicionar os URLs adequados na página de SSO do Google</li>
    <li>Clique na caixa de seleção no site do Google para habilitar o SSO</li>
    <li>No site do Google, lembre-se de habilitar a API de provisionamento; caso contrário, os usuários não serão atualizados.</li>
    <li>No site do Google, certifique-se de que o provisionamento de API esteja habilitado</li>
    <li>No site do Google, talvez seja necessário solicitar mais contas de usuário</li>
    <li>Volte à página principal do Moodle</li>
    <li>Clique em "Editar"</li>
    <li>Adicione blocos do GAccess, Gmail e GData à página.</li>
    <li>Clique em <b>Configurações</b> no bloco <b>Google Apps</b>. Preencha as informações de configuração.</li>
    <li>Clique no link "Status" para confirmar que o seu bloco do Google Apps está configurado corretamente.</li>
    <li>Acesse Administração do site > Segurança > Políticas do site</li>
    <li>Marque "Política de senhas"</li>
    <li>Ajuste o comprimento da senha para 6 ou mais caracteres (obrigatório para a política de senhas do Google)</li>
    <li>No bloco GData, é necessário adicionar usuários para sincronizar. Faça isso clicando no link "Adicionar usuários para sincronizar" no <b>bloco do Google Apps</b>. Isso ajudará a visualizar o resultado caso você ajuste o cron do bloco do GData para 1 minuto.</li>
    <li>Para carregar esses usuários do Moodle no Google, você pode executar o cron manualmente acessando admin/cron.php. Os resultados da sincronização devem ser exibidos na leitura.
    <b>Esteja ciente de que a sincronização beta de usuários do Moodle com o Google pode levar <em>MUITO</em> tempo.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultados esperados</a></h4>
<ul class="alternate" type="square">
    <li>Clicar em quaisquer links de serviço do Google ou acessar serviços a partir da página de parceiros do Google
    realizará a autenticação em relação ao Moodle.</li>
    <li>O usuário deve estar logado no Moodle e nos serviços de parceiro do Google</li>
    <li>Consulte a <b>Página de diagnóstico</b> nas configurações de GSAML para obter mais informações sobre a sua configuração.</li>
</ul>


<h4><a name="pre" href="#consider">Considerações (válidas até a versão BETA)</a></h4>
<ul class="alternate" type="square">
    <li>O feed do Gmail pode não ser encontrado. Isso provavelmente se deve ao fato da senha do usuário não corresponder à senha do usuário no Google.
    No futuro, isso não será um problema. Por enquanto, lembre-se de sincronizar os usuários com o bloco do Google Apps. O e-mail será atualizado após
    a conexão. No futuro, as mensagens não lidas deverão ser atualizadas em tempo real.</li>

    <li>O local do plug-in de autenticação do Google na ordem de autenticação é importante.
    Por enquanto, é necessário sobrescrever o tipo de autenticação de um usuário quando um usuário do Moodle altera sua senha.
    Esse comportamento pode afetar usuários do MNet. Ainda não foi encontrada uma
    solução para esse problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnóstico';
$string['diagnostics_help'] = '<h2>Diagnóstico de integração do Google</h2>
<p>A página "Diagnóstico" exibe informações relacionadas ao status de conexão com Gmail, GData e SAML.
Apenas administradores têm permissão para visualizar as informações de diagnóstico.</p>

<h3>Índice:</h3>
<ul>
    <li><a href="#setup">Configurar informações de tabela</a></li>
    <li><a href="#gdata">Status de conexão do GData </a></li>
    <li><a href="#gmail">Teste de conexão de bloco do Gmail</a></li>
    <li><a href="#saml">Teste de status de SSO do SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informações da tabela de configuração</a></h3>
<div class="indent">
    Essas tabelas representam a configuração atual da integração do Moodle com o Google. Certifique-se de que todos os valores estejam definidos.
</div>

<h3><a name="gdata" href="#gdata">Conexão do GData </a></h3>
<div class="indent">
O bloco do GData localizado na pasta de blocos contém as bibliotecas para vários serviços do Google. É necessário confirmar
que você consegue se conectar aos serviços do Google. Talvez seja necessário ajustar os valores na página de configurações de bloco do GData.
</div>

<h3><a name="gmail" href="#gmail">Teste de conexão de bloco do GMail </a></h3>
<div class="indent">
Atualmente, o bloco do GMail só atualiza as mensagens não lidas no momento da conexão. Você só poderá
executar o teste aqui caso a depuração esteja ativada. O suporte para visualização de mensagens não lidas em tempo real será disponibilizado em breve.

</div>

<h3><a name="saml" href="#saml">Teste de status de SSO do SAML</a></h3>
<div class="indent">
O teste de status do SAML é uma verificação independente do processo de autorização do SSO. Ele ainda não foi implementado.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Chaves';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Chaves SSO do Google</h3>
<p>É necessário que o Moodle e o Google consigam autorizar o acesso com segurança a recursos importantes.
O administrador precisa gerar um <b>Certificado de confirmação</b> e enviar para o Google um certificado formatado em X.509 com uma chave pública incorporada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentação do Google relacionada à geração de chaves</a>
Observe que o serviço SSO do SAML do Moodle só utiliza <b>chaves RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Status do Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Certificado</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Gadget do Moodle';
$string['mgadget_help'] = '<h2>Gadget do Google para o Moodle</h2>

<p>Este arquivo de ajuda oferece uma breve visão geral sobre o Gadget do Google para o seu site do Moodle</p>

<h3><a name="status" href="#status">O Moodle Gadget</a></h3>
<div class="indent">
    O <em>Gadget do Moodle</em> é um gadget que pode ser incorporado em sua página inicial de parceiro do Google.

</div>


<p><b>Etapas para instalar na página inicial de um usuário</b></p>
<ol>
    <li>Faça login no Moodle</li>
    <li>Clique na <b>Página de parceiro do Google</b> no bloco <b>Acesso a serviços do Google</b>.</li>
    <li>Clique no link <b>Adicionar itens</b></li>
    <li>Clique em <b>Adicionar meu URL</b></li>
    <li>Insira o URL do Gadget do Moodle </li>
    <li>O URL tem o formato parecido com <br/><b>http://www.seudominiodomoodle.org/auth/gsaml/moodlegadget.php </b>
    <li> Ela pode ser encontrada nas configurações de <b>Autenticação do Google</b> no bloco de administração</li>
    <li>Depois de copiar o URL para o campo "URL", clique em <b>Adicionar</b></li>
    <li>Clique em <b>Voltar à página inicial</b></li>
    <li>Agora deve ser possível visualizar um bloco que contém um link para o seu site do Moodle</li>
</ol>



<h3><a name="status" href="#status">Considerações (válidas até a versão BETA)</a></h3>
<div class="indent">
    Este é o protótipo beta para esse Gadget do Moodle para Google. No futuro, ele será bem mais útil.
    Atualmente, há um bug conhecido relacionado à não atualização imediata do gadget após a instalação.
    Os desenvolvedores ainda estão resolvendo essa pergunta.
</div>';
$string['event_user_authenticated'] = 'Usuário autenticado';
