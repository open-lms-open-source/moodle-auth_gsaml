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

$string['pluginname'] = 'Google SAML 驗證';
$string['blockname'] = 'Google SAML 驗證';
$string['domainname'] = '網域';
$string['auth_gsamldescription'] = '此驗證外掛程式會使用 SAMLSPS，針對 Moodle 啟用單點登入。';
$string['auth_gsamltitle'] = 'Google 驗證';
$string['cert'] = '憑證';
$string['key'] = 'RSA 金鑰';
$string['domainnamestr'] = '網域名稱';
$string['rsakeystr'] = 'RSA 金鑰檔案';
$string['desckeystr'] = '上傳 RSA 金鑰 (pem)。請注意：Moodle SAML 服務僅支援 RSA 簽署的金鑰。';
$string['googauthconfstr'] = 'Google 驗證設定';
$string['ssl_str'] = 'SSL 簽署憑證';
$string['desc_certstr'] = '上傳 X.509 憑證。請注意：之後上傳 Google 的檔案亦與此相同。';
$string['setupinstrctstr'] = '設定指示';
$string['mgadgetstr'] = 'Moodle Gadget';
$string['mgadgethelp'] = 'Moodle Gadget 說明';
$string['googdiag'] = 'Google 整合診斷';
$string['googdebugopts'] = '在完成設定之後，您就可以重新登入並造訪';
$string['thediagnosticspage'] = '診斷頁面';
$string['notadminnopermin'] = '您不是管理員，沒有檢視這些設定的權限。';
$string['nokeyuploaded'] = '未上傳任何金鑰';
$string['filesnotsaved'] = '檔案未儲存。';
$string['keypathnotsaved'] = '金鑰路徑未儲存。';
$string['uploadkeystr'] = '上傳金鑰';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = '上傳';
$string['uploadthekey'] = '上傳金鑰';
$string['gadgetinfostr'] = '使用下列 URL，以便將 Moodle Gadget 加入您的 Google 起始頁面<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Google 連結設定';
$string['nodomainyet'] = '尚未設定任何網域';
$string['gsamlsetuptableinfo'] = '<ol><li>將「<b>網域名稱</b>」設為您的 Google 服務網域名稱，然後按一下「<b>儲存變更</b>」<br/><br/></li>
<li>在新視窗中以管理員身分開啟 Google Apps 控制面板頁面 (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>按一下「<b>進階工具</b>」頁籤。<br/><br/></li>
<li>按一下「驗證」旁的「<b>設定單一登入 (SSO)</b>」連結。<br/><br/></li>
<li>首先檢查「<b>啟用單一登入</b>」方塊。<br/><br/></li>
<li>現在將此 URL 插入「<b>登入頁面 URL</b>」文字欄位。<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>將此 URL 插入「<b>登出頁面 URL</b>」文字欄位。<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>將此 URL 插入「<b>變更密碼 URL</b>」文字欄位。<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>產生並上傳<b>驗證憑證至 Google (包含公開金鑰的 X.509 憑證)</b><br/><br/></li>
<li>亦將私密金鑰和憑證上傳至 Moodle，然後按一下「<b>儲存變更</b>」</b><br/></li></ol>';
$string['tomoodle'] = '至 Moodle';
$string['errusernotloggedin'] = '無法登入使用者';
$string['pwdnotvalid'] = '密碼無效';
$string['samlcodefailed'] = '「SAML 碼失敗」會開啟除錯以找出原因';
$string['samlauthcodefailed'] = '「SAML 驗證碼失敗」會開啟除錯以找出更多資訊';
$string['sixcharmsg'] = '「Google 整合」的使用者密碼必須大於 6 個字元。請告知您的管理員，以便調整網站原則設定';
$string['errordecodingsamlrequest'] = '解碼 SAML 請求或 gzinflating 時發生問題(可能是 HTTPS 設定錯誤，請檢查您的 Google SSO 設定)：{$a}';
$string['googsamldiag'] = 'Google SAML 診斷';
$string['notadminnoperm'] = '您不是網站管理員，沒有檢視此資訊的權限';
$string['gdatanotconfig'] = '尚未設定 GData 配置表格。';
$string['googlesamlconfigdata'] = 'Google SAML 配置資料';
$string['gsamlconfignotset'] = '尚未設定 Google SAML 配置';
$string['gdataconfignotset'] = '尚未設定 GData 配置表格';
$string['gdataconfig'] = 'GData 配置';
$string['gmailconfig'] = 'Gmail 配置';
$string['componentinstallcheck'] = '元件安裝前置檢查';
$string['gdatanotinstalled'] = '尚未安裝 GData 區塊\\n';
$string['gappsblockinstalled'] = '已安裝 GApps 區塊\\n';
$string['gmailblocknotinstalled'] = '尚未安裝 Gmail 區塊';
$string['gmailblockinstalled'] = '已安裝 Gmail 區塊\\n';
$string['gdataapitestresults'] = 'GData API 測試結果';
$string['trytoinitgdataconnection'] = '正在嘗試初始 GData 至 Google 的連接<br/>';
$string['gsamlsuccess'] = '成功';
$string['gmailtestresults'] = 'Gmail 測試結果';
$string['gmailtestwillnotrun'] = 'Gmail 測試只會在 Moodle 為 DEBUG_DEVELOPER 模式時執行';
$string['obtainemailfeed'] = '正在取得使用者名稱的電子郵件摘要：';
$string['currfileupload'] = '目前檔案：';
$string['nonestr'] = '無';
$string['privatekeystr'] = '私密金鑰';
$string['certificatestr'] = '憑證';
$string['statustab'] = '狀態';
$string['logstab'] = 'SAML 日誌';
$string['ssoteststab'] = 'SSO 測試';
$string['docstab'] = '文件';
$string['id'] = '編號';
$string['time'] = '時間';
$string['userid'] = '使用者編號';
$string['ip'] = 'IP 位址';
$string['course'] = '課程';
$string['module'] = '模組';
$string['cmid'] = 'cmid';
$string['action'] = '動作';
$string['url'] = 'URL';
$string['info'] = '資訊';
$string['config_gsaml'] = '正在配置 Google SAML';
$string['config_gsaml_help'] = '<h2>完成設定</h2>

<p>將 Google 完整設定至 Moodle 整合需要進行一些配置。此說明檔應能帶您進行大部分的流程，助您配置 Google 驗證外掛程式，並將 GData 區塊和 Gmail 區塊備妥。</p>

<h4>目錄：</h4>
<ul>
<li><a href="#pre">前置條件</a></li>
<li><a href="#status">執行步驟</a></li>
<li><a href="#expect">預期結果</a></li>
<li><a href="#consider">考量情況</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps 狀態</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">前置條件/假設</a></h4>
<p>
<ol>
<li>GSAML、GAccess、Gmail、GData 程式碼已經安裝</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdataa</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (Beta 版後為可選)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">執行步驟</a></h4>
<ol>
<li>以管理員身分登入 Moodle</li>
<li>按一下「<b>通知</b>」以更新區塊表格</li>
<li>在「管理外掛程式」管理員頁面中，啟用「<b>Google 驗證</b>」外掛程式</li>
<li>現在選取「使用者驗證」並前往「<b>Google 驗證</b>」，頁面上應會有指示供您遵循。</li>
<li>輸入您的 Google 合作夥伴頁面網域</li>
<li>上傳憑證 (如需建立資訊，請參閱「<a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google 金鑰產生說明文件</a> 」)</li>
<li>上傳私密金鑰 (如需建立資訊，請參閱「<a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google 金鑰產生說明文件</a>」)</li>
<li>按一下「儲存」</li>
<li>遵循指示將適當的 URL 加入 GoogleSSO 頁面</li>
<li>按一下 Google 網站上的核取方塊來啟用 SSO</li>
<li>在 Google 網站上，務必啟用佈建 API，否則將不會更新任何使用者。</li>
<li>在 Google 網站上，確認「佈建 API」已啟用</li>
<li>在 Google 網站上，您可能會需要請求更多使用者帳戶</li>
<li>返回 Moodle 主頁面</li>
<li>按一下「編輯」</li>
<li>將 GAccess、Gmail 和 GData 區塊新增至頁面。</li>
<li>按一下「<b>Google Apps</b>」區塊中的「<b>設定</b>」，填寫設定資訊。</li>
<li>按一下「狀態」連結，確認您的 GoogleApps 區塊已正確設定。</li>
<li>前往「網站管理」gt;「安全性」gt;「網站原則」</li>
<li>檢查「密碼原則」</li>
<li>將「密碼長度」設為 6 以上 (Google 密碼原則要求)</li>
<li>在 GData 區塊中，您需要將使用者新增至同步，做法為：按一下 <b>Google Apps</b> 區塊中的新增使用者至同步連結。若您將 Gdata 區塊 cron 設為 1 分鐘，在查看結果時會有幫助。</li>
<li>將這些 Moodle 使用者上傳至 Google時，您可以造訪 admin/cron.PHP 來手動執行 cron。同步結果應會出現在讀出裝置中。
<b>請注意：自此 Beta 版後，與 Google 同步 Moodle 使用者可能會花<em>很久</em>的時間。</b></li>
</ol>

<h4><a name="pre" href="#expect">預期結果</a></h4>
<ul class="alternate" type="square">
<li>當您按一下任何 Google 服務連結，或從 Google 合作夥伴頁面造訪服務時，會針對 Moodle 驗證。</li>
<li>系統應將使用者登入至 Moodle 和 Google 合作夥伴服務</li>
<li>設定時如需更多資訊，請查看 GSAML 設定中的「<b>診斷頁面</b>」。</li>
</ul>


<h4><a name="pre" href="#consider">考量情況 (自 BETA 版起)</a></h4>
<ul class="alternate" type="square">
<li>可能找不到 Gmail 摘要。這可能是因為使用者的密碼與 Google 使用者密碼不符。
此問題在之後就會解決，現在則請您務必將使用者與 Google Apps 區塊同步。電子郵件會在登入時更新。未讀訊息在未來應會即時更新。</li>

<li>「Google 驗證外掛程式」在驗證次序中的位置相當重要。
Moodle 使用者在變更密碼時，現階段需要取代使用者的驗證類型。
此行為可能會影響 MNet 使用者，目前尚未找到此問題的解決方案。</li>

</ul>

</div>';
$string['diagnostics'] = '診斷';
$string['diagnostics_help'] = '<h2>Google 整合診斷</h2>
<p>診斷頁面會告知有關 Gmail、Gdata 和 SAML 連接狀態的資訊。只有管理員有權檢視診斷資訊。</p>

<h3>目錄：</h3>
<ul>
<li><a href="#setup">設定表格資訊</a></li>
<li><a href="#gdata">GData 連接狀態</a></li>
<li><a href="#gmail">Gmail 區塊連接測試</a></li>
<li><a href="#saml">SAML SSO 狀態測試</a></li>
</ul>

<h3><a name="setup" href="#setup">配置表格資訊</a></h3>
<div class="indent">
這些表格說明 Moodle 至 Google 整合的目前設定。請確認所有數值都已設定。</div>

<h3><a name="gdata" href="#gdata">GData 連接 </a></h3>
<div class="indent">位於區塊資料夾中的 GData 區塊包含多種 Google 服務的程式庫，您必須確認可以連線至 Google 服務。您可能需要調整「GData 區塊設定」頁面上的值。
</div>

<h3><a name="gmail" href="#gmail">Gmail 區塊連接測試</a></h3>
<div class="indent">Gmail 區塊現階段只會在登入時重新整理使用者未讀的訊息。測試只能在開啟除錯後執行。即時檢視未讀訊息的支援即將推出。

</div>

<h3><a name="saml" href="#saml">SAML SSO 狀態測試</a></h3>
<div class="indent">
SAML狀態測試為 SSO 授權流程的獨立檢查，至今尚未實施。
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = '金鑰';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO 金鑰</h3>
<p>Moodle 和 Google 都必須能夠安全地授予重要資源的存取權。
管理員必須產生「<b>驗證憑證</b>」，並將以 X.509 格式化且嵌入公開金鑰的憑證上傳至 Google。
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Google 金鑰產生說明文件</a>
請注意：SAML Moodle SSO 服務只能使用 <b>RSA 金鑰。</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps 狀態</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">憑證</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>Google 至 Moodle Gadget</h2>

<p>此說明檔簡述供 Moodle 網站使用的 Google 小工具</p>

<h3><a name="status" href="#status">Moodle Gadget</a></h3>
<div class="indent">
The <em>Moodle Gadget</em>是一種可讓您嵌入 Google 合作夥伴起始頁面的小工具。

</div>


<p><b>安裝至使用者起始頁面的步驟</b></p>
<ol>
<li>登入 Moodle</li>
<li>按一下「<b>Google服務存取</b>」區塊中的「<b>Google合作夥伴頁面</b>」</li>
<li>按一下「<b>新增項目</b>」連結</li>
<li>按一下「<b>新增我的URL</b>」</li>
<li>輸入 Moodle gadget URL</li>
<li>URL的樣子如<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
<li> 這可在「管理員」區塊中的「<b>Google 驗證</b>」設定中找到</li>
<li>在將 URL 複製到 URL 欄位後，按一下「<b>新增</b>」</li>
<li>按一下「<b>回到首頁</b>」</li>
<li>您現在應會看到包含 Moodle 網站連結的區塊</li>
</ol>



<h3><a name="status" href="#status">考量情況 (自 BETA 版起)</a></h3>
<div class="indent">
這是該 Google Moodle Gadget 的Beta 版原型，未來會變得更加好用。
目前已知有 Gadget 在安裝時不會立即更新的錯誤。
開發人員已對此展開調查。
</div>';
$string['event_user_authenticated'] = '使用者已驗證';
