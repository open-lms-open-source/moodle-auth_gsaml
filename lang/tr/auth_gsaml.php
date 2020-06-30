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

$string['pluginname'] = 'Google SAML Kimlik Doğrulaması';
$string['blockname'] = 'Google SAML Kimlik Doğrulaması';
$string['domainname'] = 'Etki Alanı';
$string['auth_gsamldescription'] = 'Bu kimlik doğrulaması eklentisi, Moodle\'ın SAML SPS ile Tek Parolayla Oturum Açmasını sağlar.';
$string['auth_gsamltitle'] = 'Google Kimlik Doğrulaması';
$string['cert'] = 'Sertifika';
$string['key'] = 'RSA Anahtarı';
$string['domainnamestr'] = 'Etki Alanı Adı';
$string['rsakeystr'] = 'RSA Anahtar Dosyası';
$string['desckeystr'] = 'RSA anahtarını (pem) yükleyin. Moodle SAML hizmetinin yalnızca RSA imzalı anahtarları desteklediğini unutmayın.';
$string['googauthconfstr'] = 'Google Kimlik Doğrulaması Yapılandırması';
$string['ssl_str'] = 'SSL İmza Sertifikası';
$string['desc_certstr'] = 'X.509 Sertifikasını Karşıya Yükleyin. Bunun Google\'a da yükleyeceğiniz dosya ile aynı dosya olduğunu unutmayın.';
$string['setupinstrctstr'] = 'Kurulum Talimatları ';
$string['mgadgetstr'] = 'Moodle Aracı ';
$string['mgadgethelp'] = 'Moodle Aracı Yardımı';
$string['googdiag'] = 'Google Entegrasyonu Tanılamaları';
$string['googdebugopts'] = 'Yapılandırmayı tamamladıktan sonra yeniden giriş yapabilir ve ziyaret edebilirsiniz ';
$string['thediagnosticspage'] = 'Tanılama Sayfası';
$string['notadminnopermin'] = 'Yönetici değilsiniz. Bu ayarları görme izniniz yok.';
$string['nokeyuploaded'] = 'Yüklenmiş bir anahtar yok';
$string['filesnotsaved'] = 'Dosyalar kaydedilmedi.';
$string['keypathnotsaved'] = 'Anahtar yolu kaydedilmedi.';
$string['uploadkeystr'] = 'Anahtarı karşıya yükle';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Karşıya Yükle';
$string['uploadthekey'] = 'Anahtarı Karşıya Yükle';
$string['gadgetinfostr'] = 'Moodle Aracını Google Başlangıç Sayfanıza eklemek için şu URL\'yi kullanın<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Google Ayarları Bağlantısı';
$string['nodomainyet'] = 'Henüz Bir Etki Alanı Belirlenmemiş';
$string['gsamlsetuptableinfo'] = '<ol><li>Google hizmet etki alanı adınız için <b>Etki Alanı</b>’nı belirleyin, ardından <b>Değişiklikleri Kaydet</b>’i tıklatın<br/><br/></li>
<li>Yeni bir pencerede Google Apps Kontrol Paneli sayfasını yönetici olarak açın (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li><b>Gelişmiş araçlar</b> sekmesini tıklatın.<br/><br/></li>
<li>Kimlik doğrulamanın yanındaki <b>Tek parolayla oturum açma (SSO) ayarı</b> bağlantısını tıklatın.<br/><br/></li>
<li>İlk olarak <b>Tek parolayla oturum açmayı etkinleştir</b> kutusunu işaretleyin.<br/><br/></li>
<li>Şimdi bu URL\'yi <b>Oturum açma sayfası URL\'si</b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Bu URL\'yi <b>Oturum kapatma sayfası URL\'si</b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Bu URL\'yi <b>Parola değiştirme URL\'si </b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li><b>Bir doğrulama sertifikası (genel anahtar içeren bir X.509 sertifikası)</b> oluşturup Google\'a yükleyin<br/><br/></li>
<li>Özel anahtar ve sertifikayı da Moodle\'a yükleyin ve ardından <b>Değişiklikleri Kaydet</b>\'i tıklatın</b><br/></li></ol>';
$string['tomoodle'] = 'Moodle uygulamasına';
$string['errusernotloggedin'] = 'Kullanıcı oturum açamadı';
$string['pwdnotvalid'] = 'Parola geçersiz';
$string['samlcodefailed'] = 'SAML Kodu Başarısız... Nedenini bulmak için hata ayıklamayı açın';
$string['samlauthcodefailed'] = 'SAML Kimlik Doğrulama Kodu Başarısız... Daha fazla bilgi için hata ayıklamayı açın';
$string['sixcharmsg'] = 'Google Entegrasyonu için Kullanıcı Parolası 6 karakterden uzun olmalıdır. Yöneticinizden site politikası ayarlarını düzenlemesini rica edin';
$string['errordecodingsamlrequest'] = 'SAML İsteğinin veya gzinflating kod çözümü sırasında problem oluştu (HTTPS ayarlarıyla ilgili bir hata olabilir, Google SSO yapılandırmanızı kontrol edin): {$a}';
$string['googsamldiag'] = 'Google SAML Tanılamaları';
$string['notadminnoperm'] = 'Site yöneticisi değilsiniz. Bu bilgiyi görme izniniz yok';
$string['gdatanotconfig'] = 'GData yapılandırma tablosu ayarlanmamış.';
$string['googlesamlconfigdata'] = 'Google SAML Yapılandırma Verileri';
$string['gsamlconfignotset'] = 'Google SAML yapılandırması henüz ayarlanmadı';
$string['gdataconfignotset'] = 'GData yapılandırma tablosu ayarlanmamış';
$string['gdataconfig'] = 'GData Yapılandırması';
$string['gmailconfig'] = 'Gmail Yapılandırması';
$string['componentinstallcheck'] = 'Bileşen Yüklemesi Ön Kontrolü';
$string['gdatanotinstalled'] = 'GData bloku yüklenmemiş\\n';
$string['gappsblockinstalled'] = 'GApps Bloku yüklenmiş\\n';
$string['gmailblocknotinstalled'] = 'Gmail bloku yüklenmemiş';
$string['gmailblockinstalled'] = 'Gmail Bloku yüklenmiş\\n';
$string['gdataapitestresults'] = 'GData API\'si Test Sonuçları';
$string['trytoinitgdataconnection'] = 'Bir GData-Google bağlantısı kurulmaya çalışılıyor<br/>';
$string['gsamlsuccess'] = 'Başarılı';
$string['gmailtestresults'] = 'Gmail Test Sonuçları';
$string['gmailtestwillnotrun'] = 'Gmail Testi, Moodle DEBUG_DEVELOPER Modu\'nda olmadığı sürece çalışmaz';
$string['obtainemailfeed'] = 'E-posta akışının alındığı kullanıcı adı: ';
$string['currfileupload'] = 'Geçerli Dosya:';
$string['nonestr'] = 'Hiçbiri';
$string['privatekeystr'] = 'Özel Anahtar';
$string['certificatestr'] = 'Sertifika';
$string['statustab'] = 'Durum';
$string['logstab'] = 'SAML Günlükleri';
$string['ssoteststab'] = 'SSO Testleri';
$string['docstab'] = 'Belgeler';
$string['id'] = 'Kimlik';
$string['time'] = 'Saat';
$string['userid'] = 'Kullanıcı No';
$string['ip'] = 'IP Adresi';
$string['course'] = 'Kurs';
$string['module'] = 'Modül';
$string['cmid'] = 'cmid';
$string['action'] = 'Eylem';
$string['url'] = 'URL';
$string['info'] = 'Bilgiler';
$string['config_gsaml'] = 'Google SAML Yapılandırılıyor';
$string['config_gsaml_help'] = '<h2>Kurulumu Tamamla</h2>

<p>Google-Moodle entegrasyonunun tam olarak kurulması için biraz yapılandırma gerekir. Bu yardım dosyası
Google Kimlik Doğrulama Eklentisinin yapılandırması ve GData bloku ile Gmail blokunun hazır hale getirilmesi sürecinin
büyük bölümünde size yol gösterecektir.</p>

<h4>İçindekiler:</h4>
<ul>
    <li><a href="#pre">Ön Koşullar</a></li>
    <li><a href="#status">Adımlar</a></li>
    <li><a href="#expect">Beklenen Sonuçlar</a></li>
    <li><a href="#consider">Değerlendirilmesi Gereken Hususlar</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps Durumu</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Ön koşullar/varsayımlar</a></h4>
<p>
<ol>
    <li>GSAML, GAccess, Gmail, GData kodu yüklendi</li>
    <ul>
    <li>auth/gsaml</li>
    <li>blocks/gmail</li>
    <li>blocks/gdata</li>
    <li>blocks/gaccess</li>
    <li>blocks/mgadget (beta sürümünden itibaren isteğe bağlı)</li>
    </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Adımlar</a></h4>
<ol>
    <li>Moodle\'da Yönetici Olarak Oturum Açın</li>
    <li>Blok tablolarını güncelleştirmek için <b>Bildirimler</b>\'i tıklatın</li>
    <li>Eklentileri Yönet yönetici sayfasından <b>Google Kimlik Doğrulama</b> eklentisini etkinleştirin</li>
    <li>Şimdi Kullanıcı Kimlik Doğrulama\'yı Seçin ve <b>Google Kimlik Doğrulama</b>\'ya gidin sayfada izlenecek yönergeler bulunmaktadır.</li>
    <li>Google iş ortağı sayfanızın etki alanını girin</li>
    <li>Sertifikayı Yükleyin (bunu oluşturmayla ilgili daha fazla bilgi almak için <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Anahtar Oluşturmayla İlgili Google Belgeleri</a>\'ne bakın)</li>
    <li>Özel Anahtarı Yükleyin (bunu oluşturmayla ilgili daha fazla bilgi almak için <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">Anahtar Oluşturmayla İlgili Google Belgeleri</a>\'ni ziyaret edin)</li>
    <li>Kaydet\'i tıklatın</li>
    <li>Google SSO sayfasına uygun URL\'leri eklemeyle ilgili talimatları izleyin</li>
    <li>SSO\'yu etkinleştirmek için Google sitesindeki onay kutusunu tıklatın</li>
    <li>Google Site üzerinde yetkilendirme API\'sinin etkinleştirildiğine emin olun, aksi takdirde hiçbir kullanıcı güncelleştirilmez.</li>
    <li>Google Site üzerinde Yetkilendirme API\'sinin Etkin olduğuna emin olun</li>
    <li>Google Site üzerinde daha çok Kullanıcı hesabı istemeniz gerekebilir</li>
    <li>Moodle\'ın ana sayfasına dönün</li>
    <li>Düzenle\'yi tıklatın</li>
    <li>Sayfaya GAccess, Gmail ve GData bloklarını ekleyin.</li>
    <li><b>Google Apps</b> blokunda <b>Ayarlar</b>\'ı tıklatın. Yapılandırma bilgilerini girin.</li>
    <li>Google Apps blokunuzun uygun şekilde ayarlandığını doğrulamak için Durum bağlantısını tıklatın.</li>
    <li>Site Yönetimi &gt; Güvenlik &gt; Site politikaları</li>
    <li>Parola Politikasını Okuyun</li>
    <li>Parola Uzunluğunu en az 6 karakter olacak şekilde ayarlayın (Google\'ın parola politikası için gereklidir)</li>
    <li>GData blokunda senkronize edilecek kullanıcıları eklemeniz gerekir. Bunu <b>Google Apps
    blokundaki</b> senkronize edilecek kullanıcıları ekleme bağlantısını tıklatarak yapın. GData bloku cron değerini 1 dakikaya ayarlarsanız sonucu görmenize yardımcı olur.</li>
    <li>Bu Moodle Kullanıcılarını Google\'a Yüklemek için admin/cron.php dosyasına giderek cron\'u manuel olarak çalıştırabilirsiniz. Senkronizasyon sonuçları okunan değerlerde görünür.
    <b>Bu beta sürümünden itibaren Moodle Kullanıcılarını Google ile senkronize etmenin <em>uzun</em> sürebileceğini lütfen göz önünde bulundurun.</b></li>
</ol>

<h4><a name="pre" href="#expect">Beklenen Sonuçlar</a></h4>
<ul class="alternate" type="square">
    <li>Herhangi bir Google Hizmeti bağlantısının tıklatılması veya Google İş Ortağı sayfasından hizmetlere gidilmesi
    Moodle\'da Kimlik Doğrulaması yapar.</li>
    <li>Kullanıcının Google İş Ortağı Hizmetleri\'nin yanı sıra Moodle\'da da oturum açması gerekir.</li>
    <li>Daha fazla bilgi edinmek için kurulumunuzun GSAML ayarlarında yer alan <b>Tanılamalar Sayfası</b>\'na bakın.</li>
</ul>


<h4><a name="pre" href="#consider">Değerlendirilmesi Gereken Hususlar (BETA sürümünden itibaren)</a></h4>
<ul class="alternate" type="square">
    <li>Gmail akışı bulunmayabilir. Bu, büyük olasılıkla kullanıcının parolasının Google kullanıcı parolası ile eşleşmemesinden kaynaklanabilir.
    İleride bu sorun olmayacaktır. Şimdilik kullanıcıları Google Apps blokuyla senkronize ettiğinize emin olun. E-posta, oturum açma işleminin
    ardından güncelleştirilir. İleride, okunmayan iletiler gerçek zamanlı olarak güncelleştirilecektir.</li>

    <li>Google Kimlik Doğrulama Eklentisi\'nin Kimlik Doğrulama sırasındaki konumu önemlidir.
    Şu anda bir Moodle kullanıcısı parola değiştirdiğinde kullanıcının kimlik doğrulama türünün değiştirilmesi gerekir.
    Bu da MNet kullanıcılarını etkileyebilir. Soruna henüz bir çözüm bulunamamıştır.</li>

</ul>

</div>';
$string['diagnostics'] = 'Tanılamalar';
$string['diagnostics_help'] = '<h2>Google Entegrasyon Tanılamaları</h2>
<p>Tanılamalar sayfası Gmail, GData ve SAML bağlantı durumuyla ilgili bilgiler verir.
Tanılama bilgilerini görmeye sadece yöneticilerin izni vardır.</p>

<h3>İçindekiler:</h3>
<ul>
    <li><a href="#setup">Kurulum Tablosu Bilgileri</a></li>
    <li><a href="#gdata">GData Bağlantı Durumu</a></li>
    <li><a href="#gmail">Gmail Blok Bağlantı Testi</a></li>
    <li><a href="#saml">SAML SSO Durumu Testi</a></li>
</ul>

<h3><a name="setup" href="#setup">Yapılandırma Tablosu Bilgileri</a></h3>
<div class="indent">
    Bu tablolar Moodle-Google Entegrasyonunun geçerli yapılandırmasını belirtir. Değerlerin tümünün ayarlandığına emin olun.
</div>

<h3><a name="gdata" href="#gdata">GData Bağlantısı </a></h3>
<div class="indent">
Bloklar klasöründe bulunan GData bloku, çeşitli Google Hizmetlerine yönelik kitaplıklar içerir. Bunun, Google hizmetlerine bağlanabildiğini
doğrulamanız gerekir. GData Blok Ayarları sayfasındaki değerleri ayarlamanız gerekir.
</div>

<h3><a name="gmail" href="#gmail">Gmail Blok Bağlantısı Testi</a></h3>
<div class="indent">
Şu anda Gmail bloku, kullanıcının giriş yapmasının ardından sadece okunmamış iletileri yeniler. Hata ayıklama açıksa
testi ancak burada çalıştırabilirsiniz. Okunmamış iletileri gerçek zamanlı olarak görüntüleme desteği geliyor.

</div>

<h3><a name="saml" href="#saml">SAML SSO Durum Testi</a></h3>
<div class="indent">
SAML durum testi, SSO yetkilendirme işleminin bağımsız kontrolüdür. Henüz hayata geçirilmemiştir.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Anahtarlar';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO Anahtarları</h3>
<p>Moodle ve Google\'ın ikisinin birden önemli kaynaklara erişimi güvenlikli olarak yetkilendirmesi gerekir.
Yönetici, bir <b>Doğrulama Sertifikası</b> oluşturmalı ve Google\'a X.509 formatlı bir sertifikayı ekli bir
genel anahtar
ile yüklemelidir.<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Anahtar Oluşturmayla İlgili Google Belgeleri</a>
SAML Moodle SSO hizmetinin sadece <b>RSA anahtarlarını kullandığını unutmayın.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">Google Apps Durumu</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">Sertifika</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle Aracı';
$string['mgadget_help'] = '<h2>Google-Moodle Aracı</h2>

<p>Bu yardım dosyası, Moodle sitenizin Google Aracına kısa bir genel bakış sağlar.</p>

<h3><a name="status" href="#status">Moodle Aracı</a></h3>
<div class="indent">
<em>Moodle Aracı</em> Google İş Ortağı başlangıç sayfasına ekleyebileceğiniz bir araçtır.

</div>


<p><b>Kullanıcı Başlangıç Sayfalarına yükleme adımları</b></p>
<ol>
<li>Moodle\'a Giriş Yapın</li>
<li><b>Google Hizmetleri Erişim</b> blokunda</li> <b>Google İş Ortağı Sayfası</b>\'nı tıklatın.
<li> <b>Öğe Ekle</b> bağlantısını tıklatın</li>
<li> <b>Url\'mi ekle</b> öğesini tıklatın</li>
<li>Moodlegadget URL\'sini girin</li>
<li>URL, <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
benzeri bir adrestir.<li> Yönetici blokunda <b>Google Kimlik Doğrulama</b> Ayarları</li>\'nda bulunabilir
<li>Sonra URL\'yi URL alanına kopyalayın. <b>Ekle</b>\'yi tıklatın</li>
<li><b>Ana sayfaya geri dön</b> öğesini tıklatın</li>
<li>Burada Moodle sitenizin bağlantısını içeren bir blok görürsünüz.</li>
</ol>



<h3><a name="status" href="#status">Değerlendirilmesi Gereken Hususlar (BETA sürümünden itibaren)</a></h3>
<div class="indent">
Bu, Google Moodle Aracı için bir beta ön modeldir. Gelecekte çok daha yararlı olabilir.
Hâlen Araç\'ın yüklenme sonrası hemen güncelleştirme yapmamasıyla ilgili bilinen bir hata bulunmaktadır.
Geliştiriciler konu üzerinde çalışıyorlar.
</div>';
$string['event_user_authenticated'] = 'Kullanıcı kimliği doğrulandı';
