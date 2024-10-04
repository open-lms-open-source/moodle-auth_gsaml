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
$string['gsamlsetuptableinfo'] = '<ol><li>Googleサービスのドメイン名に<b>ドメイン名</b>を設定して、[<b>変更を保存</b>]をクリックします。<br/><br/></li>
<li>新しいウィンドウで、管理者としてGoogle Appsのコントロールパネルページを開きます（<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>）。<br/><br/></li>
<li>[<b>高度なツール（Advanced tools）</b>]タブをクリックします。<br/><br/></li>
<li>[認証]の横にある[<b>シングルサインオンン（SSO）の設定（Set up single sign-on (SSO)）</b>]リンクをクリックします。<br/><br/></li>
<li>最初に、[<b>シングルサインオンを有効にする（Enable Single Sign-on）</b>]ボックスを選択します。<br/><br/></li>
<li>これで、このURLを[<b>サインインページのURL（Sign-in page URL）</b>]テキストフィールドに挿入できるようになりました。<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>このURLを[<b>サインアウトページのURL（Sign-out page URL）</b>]テキストフィールドに挿入します。<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>このURLを[<b>パスワード変更URL</b>]テキストフィールドに挿入します。<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li><b>検証証明書を生成し、Google（公開鍵を含むX.509証明書）</b>にアップロードします。<br/><br/></li>
<li>プライベートキーと証明書をMoodleにアップロードして、[<b>変更を保存</b>]をクリックします。</b><br/></li></ol>';
$string['tomoodle'] = 'Moodleへ';
$string['errusernotloggedin'] = 'ユーザはログインできませんでした';
$string['pwdnotvalid'] = 'パスワードが有効ではありません';
$string['samlcodefailed'] = 'SAMLコードでは、原因を特定するためのデバッグの有効化に失敗しました';
$string['samlauthcodefailed'] = 'SAML認証コードでは、詳細情報に関するデバッグの有効化に失敗しました';
$string['sixcharmsg'] = 'Google統合では、7文字以上の長さのユーザパスワードを指定する必要があります。サイトポリシーの設定を調整するよう管理者に問い合わせてください';
$string['errordecodingsamlrequest'] = 'SAMLリクエストのデコード中またはdeflate圧縮された文字列の解凍中に問題が発生しました (HTTPSの設定エラーの可能性があるため、Google SSO設定を確認してください)：{$a}';
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
$string['trytoinitgdataconnection'] = 'GdataからGoogleへの接続を開始しています<br/>';
$string['gsamlsuccess'] = '成功';
$string['gmailtestresults'] = 'Gmailのテスト結果';
$string['gmailtestwillnotrun'] = 'MoodleがDEBUG_DEVELOPERモードでない場合、Gmailのテストは実行されません';
$string['obtainemailfeed'] = 'ユーザ名についてメールのフィードを取得しています：';
$string['currfileupload'] = '現在のファイル：';
$string['nonestr'] = 'なし';
$string['privatekeystr'] = 'プライベートキー';
$string['certificatestr'] = '証明書';
$string['statustab'] = '状態';
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
$string['action'] = '動作';
$string['url'] = 'URL';
$string['info'] = '情報';
$string['contextinstanceid'] = 'インスタンスID';
$string['courseid'] = 'コースID';
$string['eventname'] = 'イベント名';
$string['otherlog'] = 'その他';
$string['useraccesedgservice'] = '最初にユーザがgserviceにアクセスしました。';
$string['userneedsredirect'] = 'ユーザがSAMLリクエストを送信していますが、ログイン/リダイレクトする必要があります。';
$string['userislogged'] = 'ユーザがログインして、SAMLリクエストを送信しています';
$string['login'] = 'ログイン';
$string['config_gsaml'] = 'Google SAMLを設定中';
$string['config_gsaml_help'] = '<h2>完了設定</h2>

<p>GoogleとMoodleの完全な統合を設定するには、いくつかの手順を実行する必要があります。
このヘルプファイルでは、Google認証プラグインを設定し、GDataブロックや
Gmailブロックを使用できるようにするためのほとんどのプロセスを説明します。</p>

<h4>目次：</h4>
<ul>
<li><a href="#pre">前提条件</a></li>
<li><a href="#status">ステップ</a></li>
<li><a href="#expect">期待される結果</a></li>
<li><a href="#consider">考慮事項</a></li>
</ul>

<h4><a name="status" href="#status">Google Appsのステータス</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">前提条件/前提</a></h4>
<p>
<ol>
<li>GSAML、GAccess、Gmail、GDataコードがインストールされている</li>
<ul>
<li>auth/gsaml</li>
<li>ブロック/gsaml</li>
<li>ブロック/gdata</li>
<li>ブロック/gaccess</li>
<li>ブロック/mgadget（ベータ版のオプション）</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">ステップ</a></h4>
<ol>
<li>管理者としてMoodleにログインする</li>
<li>[<b>通知</b>]をクリックして、ブロックテーブルを更新します。</li>
<li>[プラグインの管理（Manage Plugins）]管理者ページで<b>Google認証</b>プラグインを有効にします。</li>
<li>[ユーザの認証（Users Authentication）]を選択して、[<b>Google認証</b>]に移動します。表示されたページの手順に従います。</li>
<li>Googleパートナーページのドメインを入力します</li>
<li>証明書をアップロードします（この作成方法については <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;キー生成に関するGoogleのドキュメント</a>を参照）</li>
<li>プライベートキーをアップロードします（この作成方法については <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;キー生成に関するGoogleのドキュメント</a>を参照）</li>
<li>[保存]をクリックします</li>
<li>正しいURLをGoogle SSOのページに追加するには、次の手順に従います</li>
<li>GoogleのサイトのチェックボックスをクリックしてSSOを有効にします</li>
<li>Googleのサイトで、APIのプロビジョニングを有効にしてください。有効にしない場合、ユーザは更新されません。</li>
<li>Googleのサイトで、APIプロビジョニングが有効になっていることを確認します</li>
<li>Googleのサイトで、さらにユーザアカウントをリクエストできます</li>
<li>Moodleのメインページに戻る</li>
<li>[編集]をクリックします</li>
<li>GAccess、Gmail、GDataの各ブロックをページに追加します。</li>
<li>[<b>Google Apps</b>]ブロックで[<b>設定</b>]をクリックします。設定情報を入力します。</li>
<li>[ステータス]リンクをクリックして、Google Appsブロックが正しく設定されていることを確認します。</li>
<li>[サイト管理者] &gt; [セキュリティ] &gt; [サイトのポリシー（Site policies）]に移動します</li>
<li>パスワードポリシーを確認します</li>
<li>パスワードの文字数を6文字以上に設定します（Googleのパスワードポリシーの要件）</li>
<li>GDataブロックで、同期するユーザを追加する必要があります。これを実行するには、<b>Google Apps
ブロック</b>で[同期するユーザを追加する（add users to sync）]リンクをクリックします。</li>
<li>これらのMoodleユーザをGoogleにアップロードするには、admin/cron.phpにアクセスしてcronを手動で実行します。同期の結果は、読み取り画面に表示されます。
<b>このベータ版ではMoodleユーザとGoogleの同期には<em>時間がかかる</em>場合があります。</b></li>
</ol>

<h4><a name="pre" href="#expect">期待される結果</a></h4>
<ul class="alternate" type="square">
<li>Googleサービスリンクをクリックするか、Googleパートナーページからサービスにログインすると、
Moodleが認証されます。</li>
<li>ユーザは、MoodleとGoogleパートナーサービスにログインする必要があります。</li>
<li>設定の詳細については、GSAMLの<b>診断ページ</b>を参照してください。</li>
</ul>


<h4><a name="pre" href="#consider">考慮事項（ベータ版の場合）</a></h4>
<ul class="alternate" type="square">
<li>Gmailのフィードが見つかりません。これは、ユーザのパスワードがGoogleユーザのパスワードと一致しないことが原因です。
今後、この問題は解決される予定です。現時点では、ユーザとGoogle Appsブロックを同期してください。メールはログイン時に
更新されます。今後、未読のメッセージはリアルタイムで更新されます。</li>

<li>認証順序におけるGoogle認証プラグインの位置は重要です。
この時点では、Moodleユーザがパスワードを変更すると、ユーザの認証タイプがオーバーライドされる必要があります。
この動作により、MNetユーザが影響を受けます。この問題の解決策は、まだ特定されていません。</li>

</ul>

</div>';
$string['diagnostics'] = '診断';
$string['diagnostics_help'] = '<h2>Google統合診断</h2>
<p>診断ページには、Gmail、GData、およびSAML接続ステータスに関する情報が表示されます。
診断情報は管理者のみが表示できます。</p>

<h3>目次：</h3>
<ul>
<li><a href="#setup">テーブル情報のセットアップ</a></li>
<li><a href="#gdata">GData接続ステータス</a></li>
<li><a href="#gmail">Gmailブロック接続テスト</a></li>
<li><a href="#saml">SAML SSOステータステスト</a></li>
</ul>

<h3><a name="setup" href="#setup">構成テーブル情報</a></h3>
<div class="indent">
これらのテーブルには、MoodleとGoogleの統合の現在の設定が表示されます。すべての値が設定されていることを確認してください。
</div>

<h3><a name="gdata" href="#gdata">GDataコネクション</a></h3>
<div class="indent">
ブロックフォルダのGDataブロックには、さまざまなGoogleサービスのライブラリが含まれています。
Googleサービスに接続できることを確認する必要があります。[GDataブロック設定（GData Block Settings）]ページで値の調整が必要な場合があります。
</div>

<h3><a name="gmail" href="#gmail">Gmailブロック接続テスト</a></h3>
<div class="indent">
現時点では、Gmailブロックではログイン時にユーザの未読のメッセージのみが更新されます。
デバッグを有効にした場合、ここでテストのみを実行できます。今後、リアルタイムで未読のメッセージを表示できるようになる予定です。
</div>

<h3><a name="saml" href="#saml">SAML SSOステータステスト</a></h3>
<div class="indent">
SAMLステータステストはSSO認証プロセスの独立したチェックです。このテストはまだ実装されていません。
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'キー';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSOキー</h3>
<p>MoodleおよびGoogleの両方は重要なリソースへの安全なアクセスを認証します。
管理者は<b>検証証明書</b>を生成し、公開鍵が埋め込まれたフォーマットされたX.509証明書をGoogleに
アップロードします。
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">キーの生成に関するGoogleのドキュメント</a>
SAML Moodle SSOサービスは<b>RSAキー</b>のみを使用することに注意してください。
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
$string['mgadget'] = 'Moodleガジェット';
$string['mgadget_help'] = '<h2>Google to Moodleガジェット</h2>

<p>このヘルプファイルでは、MoodleサイトのGoogleガジェットの概要を簡単に説明します。</p>

<h3><a name="status" href="#status">Moodleガジェット</a></h3>
<div class="indent">
<em>Moodleガジェット</em>はGoogleパートナーのスタートページに埋め込むことのできるガジェットです。
</div>


<p><b>ユーザのスタートページにインストールするステップ</b></p>
<ol>
<li>Moodleにログインします</li>
<li>[<b>Googleサービスアクセス</b>]ブロックで[<b>Googleパートナーページ</b>]をクリックします。</li>
<li>[<b>スタッフの追加（Add Stuff）</b>]リンクをクリックします。</li>
<li>[<b>URLを追加（Add my url）</b>]をクリックします</li>
<li>moodlegadget URLを入力します</li>
<li>URLは次のようになります<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>これは、管理者ブロックの<b>Google認証</b>設定で確認できます。</li>
<li>URLフィールドにこのURLをコピーしたら、[<b>追加</b>]をクリックします。</li>
<li>[<b>ホームページに戻る（Back to homepage）</b>]をクリックします。</li>
<li>お使いのMoodleサイトへのリンクを含むブロックが表示されるようになります。</li>
</ol>



<h3><a name="status" href="#status">考慮事項（ベータ版の場合）</a></h3>
<div class="indent">
これはGoogle Moodleガジェットのベータ版プロトタイプです。今後、このベータ版はさらに機能向上する予定です。
現在、インストール時にガジェットがすぐに更新されない既知のバグがあります。
このバグは、開発者が調査しています。
</div>';
$string['event_user_authenticated'] = 'ユーザが認証されました';
