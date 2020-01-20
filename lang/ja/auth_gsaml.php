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
 * @copyright  Copyright (c) 2020 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Google SAML認証';
$string['blockname'] = 'Google SAML認証';
$string['domainname'] = 'ドメイン';
$string['auth_gsamldescription'] = 'この認証プラグインを導入すると、SAML SPSを使用して、Moodleでシングルサインオンが可能になります。';
$string['auth_gsamltitle'] = 'Google認証';
$string['cert'] = '証明書';
$string['key'] = 'RSAキー';
$string['domainnamestr'] = 'ドメイン名';
$string['rsakeystr'] = 'RSAキーファイル';
$string['desckeystr'] = 'RSAキー (pem) をアップロードします。Moodle SAMLサービスでは、RSA署名キーのみがサポートされます。';
$string['googauthconfstr'] = 'Google認証設定';
$string['ssl_str'] = 'SSL署名証明書';
$string['desc_certstr'] = 'X.509証明書をアップロードします。これは、Googleにアップロードするのと同じファイルです。';
$string['setupinstrctstr'] = 'セットアップインストラクション';
$string['mgadgetstr'] = 'Moodleガジェット';
$string['mgadgethelp'] = 'Moodleガジェットヘルプ';
$string['googdiag'] = 'Google統合診断';
$string['googdebugopts'] = '設定が完了したら、再びログインしてアクセスできるようになります';
$string['thediagnosticspage'] = '診断ページ';
$string['notadminnopermin'] = '管理者ではないため、これらの設定を表示するパーミッションがありません。';
$string['nokeyuploaded'] = 'キーはアップロードされませんでした';
$string['filesnotsaved'] = 'ファイルは保存されませんでした。';
$string['keypathnotsaved'] = 'キーのパスが保存されていません。';
$string['uploadkeystr'] = 'キーをアップロードする';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'アップロード';
$string['uploadthekey'] = 'キーをアップロードする';
$string['gadgetinfostr'] = '次のURLを使用して、MoodleガジェットをGoogleスタートページに追加します<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Google設定にリンクする';
$string['nodomainyet'] = 'ドメインが設定されていません';
$string['gsamlsetuptableinfo'] = '<ol><li>[<b>ドメイン名</b>]をGoogleサービスのドメイン名に設定し、[<b>変更を保存</b>]をクリックします。<br/><br/></li>
<li>新しいウィンドウで、Google Appsコントロールパネルを管理者として開きます (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)。<br/><br/></li>
<li>[<b>高度なツール</b>]タブをクリックします。<br/><br/></li>
<li>[認証]の横にある[<b>シングルサインオン (SSO) の設定</b>]リンクをクリックします。<br/><br/></li>
<li>[<b>シングルサインオンを有効にする</b>]チェックボックスをオンにします。<br/><br/></li>
<li>次のURLを[<b>ログインページのURL</b>]テキストフィールドに挿入します。<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>次のURLを[<b>ログアウトページのURL</b>]テキストフィールドに挿入します。<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>次のURLを[<b>パスワード変更ページのURL</b>]テキストフィールドに挿入します。<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li><b>検証証明書 (公開鍵が記述されているX.509証明書)</b> を生成して、Googleにアップロードします。<br/><br/></li>
<li>秘密鍵と証明書をMoodleにアップロードし、[<b>変更を保存</b>]</b>をクリックします。<br/></li></ol>';
$string['tomoodle'] = 'Moodleへ';
$string['errusernotloggedin'] = 'ユーザはログインできませんでした';
$string['pwdnotvalid'] = 'パスワードが有効ではありません';
$string['samlcodefailed'] = 'SAMLコードでは、原因を特定するためのデバッグの有効化に失敗しました';
$string['samlauthcodefailed'] = 'SAML認証コードでは、詳細情報に関するデバッグの有効化に失敗しました';
$string['sixcharmsg'] = 'Google統合では、7文字以上の長さのユーザパスワードを指定する必要があります。サイトポリシーの設定を調整するよう管理者に問い合わせてください';
$string['errordecodingsamlrequest'] = 'SAMLリクエストのデコード中またはdeflate圧縮された文字列の解凍中に問題が発生しました (HTTPSの設定エラーの可能性があるため、Google SSO設定を確認してください) : {$a}';
$string['googsamldiag'] = 'Google SAML診断';
$string['notadminnoperm'] = 'サイト管理者ではないため、この情報を表示するパーミッションがありません';
$string['gdatanotconfig'] = 'GData設定テーブルが設定されていません。';
$string['googlesamlconfigdata'] = 'Google SAML設定データ';
$string['gsamlconfignotset'] = 'Google SAML設定が設定されていません';
$string['gdataconfignotset'] = 'GData設定テーブルが設定されていません';
$string['gdataconfig'] = 'GData設定';
$string['gmailconfig'] = 'Gmail設定';
$string['componentinstallcheck'] = 'コンポーネントのインストールのプリチェック';
$string['gdatanotinstalled'] = 'GDataブロックがインストールされていません\\n';
$string['gappsblockinstalled'] = 'GAppsブロックがインストールされています\\n';
$string['gmailblocknotinstalled'] = 'Gmailブロックがインストールされていません';
$string['gmailblockinstalled'] = 'Gmailブロックがインストールされています\\n';
$string['gdataapitestresults'] = 'GData APIのテスト結果';
$string['trytoinitgdataconnection'] = 'GdataからGoogleへの接続開始を試みています<br/>';
$string['gsamlsuccess'] = '成功';
$string['gmailtestresults'] = 'Gmailのテスト結果';
$string['gmailtestwillnotrun'] = 'MoodleがDEBUG_DEVELOPERモードでない場合、Gmailのテストは実行されません';
$string['obtainemailfeed'] = 'ユーザ名についてメールのフィードを取得しています : ';
$string['currfileupload'] = '現在のファイル :';
$string['nonestr'] = 'なし';
$string['privatekeystr'] = '秘密鍵';
$string['certificatestr'] = '証明書';
$string['statustab'] = 'ステータス';
$string['logstab'] = 'SAMLログ';
$string['ssoteststab'] = 'シングルサインオンのテスト';
$string['docstab'] = 'ドキュメンテーション';
$string['id'] = 'ID';
$string['time'] = '時間';
$string['userid'] = 'ユーザID';
$string['ip'] = 'IPアドレス';
$string['course'] = 'コース';
$string['module'] = 'モジュール';
$string['cmid'] = 'CMID';
$string['action'] = '活動';
$string['url'] = 'URL';
$string['info'] = 'インフォメーション';
$string['config_gsaml'] = 'Google SAMLを設定中';
$string['config_gsaml_help'] = '<h2>完全セットアップ</h2>

<p>完全なGoogleとMoodleの統合をセットアップするには、若干の設定作業が必要です。
このヘルプでは、Google認証プラグインの設定手順、およびGDataブロックとGmailブロックの準備手順について
説明します。</p>

<h4>目次 :</h4>
<ul>
    <li><a href="#pre">前提条件</a></li>
    <li><a href="#status">手順</a></li>
    <li><a href="#expect">想定される結果</a></li>
    <li><a href="#consider">考慮事項</a></li>
</ul>

<h4><a name="status" href="#status">Google Appsのステータス</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">前提条件</a></h4>
<p>
<ol>
    <li>GSAML、GAccess、Gmail、GDataコードがインストール済みであること</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (ベータの時点では任意)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">手順</a></h4>
<ol>
    <li>管理者としてMoodleにログインします。</li>
    <li>[<b>通知</b>]をクリックして、ブロックテーブルを更新します。</li>
    <li>[プラグインの管理]管理ページで、<b>Google認証</b>プラグインを有効にします。</li>
    <li>ユーザの認証を選択し、<b>Google認証</b>に移動します。表示されるページに、説明が記載されています。</li>
    <li>Google Partnerページのドメインを入力します。</li>    
    <li>証明書をアップロードします (証明書の作成方法の詳細については、<a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">キーの生成に関するGoogleのドキュメント</a>を参照してください)。</li>
    <li>秘密鍵をアップロードします (秘密鍵の作成方法の詳細については、<a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">キーの生成に関するGoogleのドキュメント</a>を参照してください)。</li>
    <li>[保存]をクリックします。</li>
    <li>説明に従って、適切なURLをGoogleのシングルサインオンページに追加します。</li>
    <li>Googleサイトのチェックボックスをオンにして、シングルサインオンを有効にします。</li>
    <li>Googleサイトで、プロビジョニングAPIを必ず有効にしてください。有効にしないと、ユーザが更新されなくなります。</li>
    <li>Googleサイトで、プロビジョニングAPIが有効になっていることを確認します。</li>
    <li>Google側でユーザアカウントの追加のリクエストが必要がなることがあります。</li>
    <li>Moodleのメインページに戻ります。</li>
    <li>[編集]をクリックします。</li>
    <li>GAccess、Gmail、GDataの各ブロックをページに追加します。</li>
    <li><b>Google Apps</b>ブロックの[<b>設定</b>]をクリックします。設定情報を入力します。</li>
    <li>[ステータス]リンクをクリックして、Google Appsブロックが適切に設定されていることを確認します。</li>
    <li>[サイト管理] &gt; [セキュリティ] &gt; [サイトポリシー]の順に選択します。</li>
    <li>[パスワードポリシー]チェックボックスをオンにします。</li>
    <li>パスワードの長さを6文字以上に設定します (Googleのパスワードポリシーで必須)。</li>
    <li>GDataブロックで、同期するユーザを追加する必要があります。追加するには、<b>Google Apps
    ブロック</b>で、[同期するユーザを追加する]リンクをクリックします。GDataブロックのCronを1分に設定すると、結果を容易に確認できます。</li>
    <li>MoodleユーザをGoogleにアップロードする場合、admin/cron.phpにアクセスして、Cronを手動で実行することもできます。同期の結果が画面に表示されます。
    <b>このベータでは、MoodleユーザとGoogleとの同期に<em>長い</em>時間がかかることがある点に留意してください。</b></li>
</ol>

<h4><a name="pre" href="#expect">想定される結果</a></h4>
<ul class="alternate" type="square">
    <li>任意のGoogleサービスのリンクをクリックするか、Google Partnerページからサービスにアクセスすると、
    Moodleに対して認証が行われます。</li>
    <li>ユーザは、MoodleとGoogle Partnerのサービスの両方にログインします。</li>
    <li>セットアップの詳細については、GSAML設定の<b>診断ページ</b>を参照してください。</li>
</ul>


<h4><a name="pre" href="#consider">考慮事項 (ベータ版時点)</a></h4>
<ul class="alternate" type="square">
    <li>Gmailのフィードが見つからないことがあります。原因としては、ユーザのパスワードがGoogleのユーザパスワードと一致していない可能性が挙げられます。
    将来、この問題は解消される予定です。現時点では、ユーザとGoogle Appsブロックを必ず同期してください。メールは、ログイン時に
    更新されます。将来、未読メッセージはリアルタイムで更新されるようになる予定です。</li>

    <li>認証順序におけるGoogle認証プラグインのロケーションは重要です。
    現時点では、Moodleユーザがパスワードを変更した場合、ユーザの認証タイプをオーバーライドする必要があります。
    この動作は、MNetユーザに影響が生じる可能性があります。この問題の解決策は現在のところ見つかっていません。</li>

</ul>

</div>';
$string['diagnostics'] = '診断';
$string['diagnostics_help'] = '<h2>Google統合診断</h2>
<p>診断ページには、Gmail、GData、SAMLの接続ステータスに関する情報が表示されます。
診断情報を表示するパーミッションは管理者にのみ割り当てられます。</p>

<h3>目次 :</h3>
<ul>
    <li><a href="#setup">設定テーブルの情報</a></li>
    <li><a href="#gdata">GDataの接続ステータス</a></li>
    <li><a href="#gmail">Gmailブロックの接続テスト</a></li>
    <li><a href="#saml">SAMLシングルサインオンのステータステスト</a></li>
</ul>

<h3><a name="setup" href="#setup">設定テーブルの情報</a></h3>
<div class="indent">
    一連のテーブルは、MoodleとGoogleの統合に関する現在の設定を表します。値がすべて設定されていることを確認してください。
</div>

<h3><a name="gdata" href="#gdata">GDataの接続</a></h3>
<div class="indent">
ブロックのフォルダにあるGDataブロックには、さまざまなGoogleのサービスのライブラリが格納されています。Googleのサービスに
接続できることを確認する必要があります。GDataブロックの設定ページで値の調整が必要になる場合もあります。
</div>

<h3><a name="gmail" href="#gmail">Gmailブロックの接続テスト</a></h3>
<div class="indent">
現時点では、Gmailブロックは、ログイン時にユーザの未読メッセージのみを更新します。ここでのテストは、
デバッグを有効にした場合にのみ実行できます。未読メッセージのリアルタイムでの表示がまもなくサポートされる予定です。

</div>

<h3><a name="saml" href="#saml">SAML SSOのステータステスト</a></h3>
<div class="indent">
SAMLのステータステストは、SSOの認証処理から独立したチェックです。現時点では、実装されていません。
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'キー';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSOのキー</h3>
<p>MoodleとGoogleのいずれも、重要なリソースへのアクセスを安全に認証できる必要があります。
管理者は、<b>検証証明書</b>を生成して、公開鍵が埋め込まれたX.509フォーマットの証明書をGoogleにアップロードする
必要があります。
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">キーの生成に関するGoogleのドキュメント</a>
SAML Moodleシングルサインオンサービスでは、<b>RSAキー</b>のみが使用される点に注意してください。

</p>
</span>

<!--

<h4><a name="pem" href="#status">Google Appsのステータス</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">証明書</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodleガジェット';
$string['mgadget_help'] = '<h2>GoogleとMoodleガジェット</h2>

<p>このヘルプでは、Moodleサイト用のGoogleガジェットについて概説します。</p>

<h3><a name="status" href="#status">Moodleガジェット</a></h3>
<div class="indent">
    <em>Moodleガジェット</em>は、Google Partnerのスタートページに埋め込むことができるガジェットです。

</div>


<p><b>ユーザのスタートページへのインストール手順</b></p>
<ol>
    <li>Moodleにログインします。</li>
    <li><b>Googleサービスへのアクセス</b>ブロックの[<b>Google Partnerページ</b>]をクリックします。</li>
    <li>[<b>コンテンツの追加</b>]リンクをクリックします。</li>
    <li>[<b>自分のページに追加</b>]をクリックします。</li>
    <li>MoodleガジェットのURLを入力します。</li>
    <li>URLの例を次に示します。<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
    <li>これは、管理ブロックの<b>Google認証</b>の設定で確認できます。</li>
    <li>URLをURLフィールドにコピーしたら、[<b>追加</b>]をクリックします。</li>
    <li>[<b>ホームページに戻る</b>]をクリックします。</li>
    <li>Moodleサイトへのリンクを含むブロックが表示されるようになります。</li>
</ol>



<h3><a name="status" href="#status">考慮事項 (ベータリリース時点)</a></h3>
<div class="indent">
    これは、Google Moodleガジェットのベータプロトタイプです。将来、利便性が大幅に向上するよう開発を継続いたします。
    現時点では、インストール時にガジェットが即座に更新されないバグが把握されています。
    この点については、開発者が調査を進めています。
</div>';
$string['event_user_authenticated'] = 'ユーザが認証されました';
