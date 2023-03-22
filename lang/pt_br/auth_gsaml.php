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
$string['setupinstrctstr'] = 'Configurar instruções';
$string['mgadgetstr'] = 'Gadget do Moodle';
$string['mgadgethelp'] = 'Ajuda do gadget do Moodle';
$string['googdiag'] = 'Diagnóstico de integração do Google';
$string['googdebugopts'] = 'Depois de concluir a configuração, você pode fazer login novamente e acessar';
$string['thediagnosticspage'] = 'A página de diagnósticos';
$string['notadminnopermin'] = 'Você não é um administrador. Você não possui permissão para visualizar essas configurações.';
$string['nokeyuploaded'] = 'Nenhuma chave foi carregada';
$string['filesnotsaved'] = 'Os arquivos não foram salvos.';
$string['keypathnotsaved'] = 'O caminho de chave não foi salvo.';
$string['uploadkeystr'] = 'Carregar a chave';
$string['uploadkey'] = 'Carregar chave';
$string['uploadstr'] = 'Upload';
$string['uploadthekey'] = 'Carregar chave';
$string['gadgetinfostr'] = 'Use o URL a seguir para adicionar o Moodle Gadget à sua página inicial do Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Link para configurações do Google';
$string['nodomainyet'] = 'Nenhum domínio definido ainda';
$string['gsamlsetuptableinfo'] = '<ol><li>Defina o <b>Nome do domínio</b> como seu nome de domínio de serviço do Google e clique em <b>Salvar alterações</b><br/><br/></li>
<li>Em uma nova janela, abra a página do Painel de controle do Google Apps como administrador (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>Clique na guia <b>Ferramentas avançadas</b>.<br/><br/></li>
<li>Clique no link <b>Configurar logon único (SSO)</b> ao lado de Autenticação.<br/><br/></li>
<li>Primeiro, marque a caixa <b>Habilitar logon único</b>.<br/><br/></li>
<li>Agora insira este URL no campo de texto <b>URL da página de login</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Insira este URL no campo de texto <b>URL da página de logout</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Insira este URL no campo de texto <b>URL de alteração de senha</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Gere e carregue um <b>certificado de verificação para o Google (certificado X.509 contendo a chave pública)</b><br/><br/></li>
<li>Carregue também a chave privada e o certificado no Moodle e, em seguida, clique em <b>Salvar alterações</b></b><br/></li></ol>';
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
$string['obtainemailfeed'] = 'Obtendo feed de e-mail para nome de usuário:';
$string['currfileupload'] = 'Arquivo atual:';
$string['nonestr'] = 'Nenhuma';
$string['privatekeystr'] = 'Chave privada';
$string['certificatestr'] = 'Certificado';
$string['statustab'] = 'Estado';
$string['logstab'] = 'Registros SAML';
$string['ssoteststab'] = 'Testes SSO';
$string['docstab'] = 'Documentação';
$string['id'] = 'Código';
$string['time'] = 'Tempo';
$string['userid'] = 'UserID';
$string['ip'] = 'Endereço IP';
$string['course'] = 'Curso';
$string['module'] = 'Módulo';
$string['cmid'] = 'cmid';
$string['action'] = 'Ação';
$string['url'] = 'URL';
$string['info'] = 'Informação';
$string['contextinstanceid'] = 'ID da instância';
$string['courseid'] = 'Código do curso';
$string['eventname'] = 'Nome do evento';
$string['otherlog'] = 'Outro';
$string['useraccesedgservice'] = 'O usuário acessou o gservice primeiro';
$string['userneedsredirect'] = 'O usuário tem uma solicitação saml, mas precisa de login/redirecionamento';
$string['userislogged'] = 'O usuário está conectado e tem uma solicitação saml';
$string['login'] = 'Login';
$string['config_gsaml'] = 'Configurando SAML do Google';
$string['config_gsaml_help'] = '<h2>Configuração completa</h2>

<p>Configurar a integração completa do Google ao Moodle requer algumas etapas. Este arquivo de ajuda deve
orientar você em relação à maioria dos processos para configurar o plug-in de Autenticação do Google, bem como o bloco GData e
deixar o bloco do Gmail pronto.</p>

<h4>Sumário:</h4>
<ul>
<li><a href="#pre">Pré-condições</a></li>
<li><a href="#status">Etapas</a></li>
<li><a href="#expect">Resultados esperados</a></li>
<li><a href="#consider">Considerações</a></li>
</ul>

<h4><a name="status" href="#status">Status do Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Pré-condições/suposições</a></h4>
<p>
<ol>
<li>Os códigos de GSAML, GAccess, Gmail e GData foram instalados</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (opcional a partir da versão beta)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Etapas</a></h4>
<ol>
<li>Faça login no Moodle como Administrador</li>
<li>Clique em <b>Notificações</b> para atualizar tabelas de bloco</li>
<li>Habilite o plug-in da <b>Autenticação do Google</b> na página de administração Gerenciar plug-ins</li>
<li>Agora, para selecionar a autenticação de usuários, vá para <b>Autenticação do Google</b>. Deve haver instruções na página seguinte.</li>
<li>Insira o domínio da sua página de parceiro do Google</li>
<li>Carregar certificado (para obter mais informações sobre como criar isso <a
href=&quot;http://code.google.com/apis/apps/articles/sso-keygen.html&quot;&gt;Documentação do Google sobre geração de chaves</a> )</li>
<li>Carregar chave privada (para obter mais informações sobre como criar isso, acesse <a
href=&quot;http://code.google.com/apis/apps/articles/sso-keygen.html&quot;&gt;Documentação do Google sobre geração de chaves</a>)</li>
<li>Clique em Salvar</li>
<li>Siga as instruções para adicionar os URLs apropriados à página de SSO do Google</li>
<li>Clique na caixa de seleção no site do Google para ativar o SSO</li>
<li>No site do Google, certifique-se de habilitar a API de provisionamento ou nenhum usuário será atualizado.</li>
<li>No site do Google, verifique se o provisionamento de API está habilitado</li>
<li>No Google, talvez seja necessário solicitar mais contas de usuário</li>
<li>Retorne à página principal do Moodle</li>
<li>Clique em Editar</li>
<li>Adicione blocos do GAccess, Gmail e GData à página.</li>
<li>Clique em <b>Configurações</b> no bloco do <b>Google Apps</b>. Preencha as informações de configuração.</li>
<li>Clique no link Status para confirmar se o bloco do Google Apps está configurado corretamente.</li>
<li>Vá para Administração do site &gt; Segurança &gt; Políticas do site</li>
<li>Verifique a política de senha</li>
<li>Defina o comprimento da senha como 6 ou superior (obrigatório para a política de senha do Google)</li>
<li>No bloco do GData, você precisa adicionar usuários para sincronizar. Faça isso clicando no link Adicionar usuários para sincronizar no <b>bloco do Google
Apps</b>. É mais fácil ver o resultado se você definir o cron do bloco do GData para 1 min.</li>
<li>Para carregar esses usuários do Moodle no Google, você pode executar o cron manualmente visitando admin/cron.php. Os resultados da sincronização devem aparecer na leitura.
<b>Cuidado, a partir deste beta, a sincronização de usuários do Moodle com o Google pode demorar <em>MUITO</em> tempo.</b></li>
</ol>

<h4><a name="pre" href="#expect">Resultados esperados</a></h4>
<ul class="alternate" type="square">
<li>Clicar em qualquer link de Serviços do Google ou acessar os serviços na página do Google Partners
levará à autenticação no Moodle.</li>
<li>O usuário deve estar conectado ao Moodle, bem como aos Serviços do Google Partners</li>
<li>Consulte a <b>página de diagnósticos</b> nas configurações do GSAML para obter mais informações sobre a configuração.</li>
</ul>


<h4><a name="pre" href="#consider">Considerações (a partir da versão BETA)</a></h4>
<ul class="alternate" type="square">
<li>O feed do Gmail pode não ser encontrado. Isso provavelmente ocorre porque a senha do usuário não corresponde à senha do usuário do Google.
No futuro, isso não será um problema. Por enquanto, certifique-se de sincronizar os usuários com o bloco do Google Apps. O e-mail será atualizado
após o login. No futuro, as mensagens não lidas devem ser atualizadas em tempo real.</li>

<li>A localização do plug-in de Autenticação do Google na ordem de autenticação é importante.
A partir desse momento, ele precisa substituir o tipo de autenticação de um usuário quando um usuário do Moodle altera as senhas.
Esse comportamento pode afetar os usuários do MNet. Ainda não foi encontrada uma solução para esse problema.</li>

</ul>

</div>';
$string['diagnostics'] = 'Diagnóstico';
$string['diagnostics_help'] = '<h2>Diagnóstico de integração do Google</h2>
<p>A página de diagnósticos revelará informações sobre o status da conexão do Gmail, GData e SAML.
Somente administradores têm permissão para visualizar informações de diagnóstico.</p>

<h3>Sumário:</h3>
<ul>
<li><a href="#setup">Configurar informações da tabela</a></li>
<li><a href="#gdata">Status da conexão com GData</a></li>
<li><a href="#gmail">Teste de conexão do bloco do Gmail</a></li>
<li><a href="#saml">Teste de status de SSO do SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">Informações da tabela de configuração</a></h3>
<div class="indent">
Essas tabelas representam a configuração atual do Moodle para a integração com o Google. Certifique-se de que todos os valores estejam definidos.
</div>

<h3><a name="gdata" href="#gdata">Conexão com GData</a></h3>
<div class="indent">
O bloco do GData localizado na pasta Blocos contém as bibliotecas para uma variedade de Serviços do Google. Você deve confirmar
que ele é capaz de se conectar aos Serviços do Google. Talvez seja necessário ajustar os valores na página Configurações do bloco do GData.
</div>

<h3><a name="gmail" href="#gmail">Teste de conexão do bloco do Gmail</a></h3>
<div class="indent">
No momento atual, o bloco do Gmail atualizará apenas as mensagens não lidas dos usuários no login. Você só
poderá executar o teste aqui se a depuração estiver ativada. O suporte para visualizar mensagens não lidas em tempo real está chegando.
</div>

<h3><a name="saml" href="#saml">Teste de status de SSO do SAML</a></h3>
<div class="indent">
O teste de status do SAML é uma verificação independente do processo de autorização de SSO. Ele ainda não foi implementado.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Chaves';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Chaves de SSO do Google</h3>
<p>Tanto o Moodle quanto o Google devem ser capazes de autorizar com segurança o acesso a recursos importantes.
O administrador deve gerar um <b>certificado de verificação</b> e carregar no Google um certificado formatado X.509 com uma chave
pública incorporada.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Documentação do Google sobre geração de chave</a>
Observe que o serviço de SSO do Moodle do SAML usa apenas <b>chaves RSA.</b>
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
$string['mgadget'] = 'Gadget do Moodle';
$string['mgadget_help'] = '<h2>Do Google para Gadget do Moodle</h2>

<p>Este arquivo de ajuda fornece uma breve visão geral do gadget do Google para seu site do Moodle</p>

<h3><a name="status" href="#status">O Gadget do Moodle</a></h3>
<div class="indent">
O <em>Gadget do Moodle</em> pode ser incorporado em sua página inicial do Google Partners.
</div>


<p><b>Etapas para instalar em uma página inicial do usuário</b></p>
<ol>
<li>Faça login no Moodle</li>
<li>Clique na <b>página do Google Partners</b> no bloco de <b>Acesso aos Serviços do Google</b></li>
<li>Clique no link <b>Adicionar item</b></li>
<li>Clique em <b>Adicionar meu URL</b></li>
<li>Insira o URL do moodlegadget</li>
<li>O URL é algo como<br/><b>http://www.seudominiomoodle.org/auth/gsaml/moodlegadget.php</b>
<li>Ele pode ser encontrado nas Configurações de <b>Autenticação do Google</b> no bloco do Administrador</li>
<li>Depois de copiar o URL para o campo URL, clique em <b>Adicionar</b></li>
<li>Clique em <b>Voltar à página inicial</b></li>
<li>Agora você deve ver um bloco contendo um link para seu site do Moodle</li>
</ol>



<h3><a name="status" href="#status">Considerações (a partir da versão BETA)</a></h3>
<div class="indent">
Este é o protótipo beta desse Gadget do Moodle no Google. No futuro, pode ser muito mais útil.
Atualmente, há um bug conhecido que faz o Gadget não atualizar imediatamente após a instalação.
Os desenvolvedores estão analisando isso.
</div>';
$string['event_user_authenticated'] = 'Usuário autenticado';
