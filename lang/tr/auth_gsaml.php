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
$string['setupinstrctstr'] = 'Kurulum Talimatları';
$string['mgadgetstr'] = 'Moodle Aracı';
$string['mgadgethelp'] = 'Moodle Aracı Yardımı';
$string['googdiag'] = 'Google Entegrasyonu Tanılamaları';
$string['googdebugopts'] = 'Yapılandırmayı tamamladıktan sonra yeniden giriş yapabilir ve ziyaret edebilirsiniz';
$string['thediagnosticspage'] = 'Tanılama Sayfası';
$string['notadminnopermin'] = 'Yönetici değilsiniz. Bu ayarları görme izniniz yok.';
$string['nokeyuploaded'] = 'Yüklenmiş bir anahtar yok';
$string['filesnotsaved'] = 'Dosyalar kaydedilmedi.';
$string['keypathnotsaved'] = 'Anahtar yolu kaydedilmedi.';
$string['uploadkeystr'] = 'Anahtarı karşıya yükle';
$string['uploadkey'] = 'UploadKey';
$string['uploadstr'] = 'Karşıya Yükle';
$string['uploadthekey'] = 'Anahtarı Karşıya Yükle';
$string['gadgetinfostr'] = 'Moodle Aracını Google Başlangıç Sayfanıza eklemek için şu URL\'yi kullanın:<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'Google Ayarları Bağlantısı';
$string['nodomainyet'] = 'Henüz Bir Etki Alanı Belirlenmemiş';
$string['gsamlsetuptableinfo'] = '<ol><li><b>Etki Alanı Adını</b> Google hizmet etki alanı adı olarak belirleyin, ardından <b>Değişiklikleri Kaydet</b> seçeneğine tıklayın<br/><br/></li>
<li>Yeni bir pencerede Google Apps Denetim Masası sayfasını yönetici olarak açın (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li><b>Gelişmiş araçlar</b> sekmesine tıklayın.<br/><br/></li>
<li>Kimlik Doğrulama öğesinin yanındaki <b>Çoklu oturum açmayı (SSO) kur</b> bağlantısına tıklayın.<br/><br/></li>
<li>Önce, <b>Çoklu Oturum Açmayı Etkinleştir</b> kutusunu işaretleyin.<br/><br/></li>
<li>Şimdi bu URL\'yi <b>Oturum açma sayfası URL\'si</b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>Bu URL\'yi <b>Oturum kapatma sayfası URL\'si</b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Bu URL\'yi <b>Parola değiştirme URL\'si</b> metin alanına ekleyin.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>Bir <b>Google için doğrulama sertifikası (açık anahtar içeren X.509 sertifikası)</b> oluşturup yükleyin<br/><br/></li>
<li>Özel anahtarla sertifikayı Moodle\'a yükleyin ve ardından <b>Değişiklikleri Kaydet</b> öğesine tıklayın</b><br/></li></ol>';
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
$string['obtainemailfeed'] = 'E-posta akışının alındığı kullanıcı adı:';
$string['currfileupload'] = 'Geçerli Dosya:';
$string['nonestr'] = 'Yok';
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
$string['contextinstanceid'] = 'Örnek Kimliği';
$string['courseid'] = 'Kurs Kimliği';
$string['eventname'] = 'Olay Adı';
$string['otherlog'] = 'Diğer';
$string['useraccesedgservice'] = 'Gservice\'e ilk olarak kullanıcı erişti';
$string['userneedsredirect'] = 'Kullanıcının saml talebi var ancak oturum açma/yönlendirme gerekiyor';
$string['userislogged'] = 'Kullanıcı oturum açtı ve saml talebinde bulundu';
$string['login'] = 'Oturum Aç';
$string['config_gsaml'] = 'Google SAML Yapılandırılıyor';
$string['config_gsaml_help'] = '<h2>Kurulumu Tamamlama</h2>

<p>Google ile Moodle arasında tam entegrasyonun kurulması için bazı yapılandırmalar gerekir. Bu yardım dosyası
Google Kimlik Doğrulama Eklentisi\'ni yapılandırırken ve GData ile Gmail bloklarını hazırlarken
sizi tüm süreç boyunca yönlendirecektir.</p>

<h4>İçindekiler:</h4>
<ul>
<li><a href="#pre">Ön koşullar</a></li>
<li><a href="#status">Adımlar</a></li>
<li><a href="#expect">Beklenen Sonuçlar</a></li>
<li><a href="#consider">Dikkat Edilmesi Gerekenler</a></li>
</ul>

<h4><a name="status" href="#status">Google Apps Durumu</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Ön koşullar/varsayımlar</a></h4>
<p>
<ol>
<li>GSAML, GAccess, Gmail, GData kodları yüklenmiştir</li>
<ul>
<li>kimlik doğrulama/gsaml</li>
<li>bloklar/gmail</li>
<li>bloklar/gdata</li>
<li>bloklar/gaccess</li>
<li>bloklar/mgadget (beta sürümü itibariyle isteğe bağlı)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">Adımlar</a></h4>
<ol>
<li>Moodle\'da Yönetici olarak oturum açın</li>
<li>Blok tablolarını güncellemek için <b>Bildirimler</b> öğesine tıklayın</li>
<li>Eklentileri Yönet yönetici sayfasından <b>Google Kimlik Doğrulama</b> eklentisini etkinleştirin</li>
<li>Kullanıcı Kimliği Doğrulama öğesini seçin ve <b>Google Kimlik Doğrulama</b> bölümüne gidin. Sayfada takip etmeniz gereken talimatlar bulunmaktadır.</li>
<li>Google iş ortağı sayfası etki alanınızı girin</li>
<li>Sertifikayı yükleyin (sertifikayı nasıl oluşturacağınıza dair daha fazla bilgi için: <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Anahtar Oluşturma Hakkında Google Belgeleri</a>)</li>
<li>Özel Anahtarı yükleyin (anahtarı nasıl oluşturacağınıza dair daha fazla bilgi için şu sayfayı ziyaret edin: <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;Anahtar Oluşturma Hakkında Google Belgeleri</a>)</li>
<li>Kaydet öğesine tıklayın</li>
<li>Google SSO sayfasına doğru URL\'leri eklemek için talimatları izleyin</li>
<li>SSO\'yu etkinleştirmek için Google sayfasındaki onay kutusuna tıklayın</li>
<li>Google Sitesinde sağlama API\'sini etkinleştirdiğinizden emin olun. Aksi takdirde hiçbir kullanıcı güncellenmeyecektir.</li>
<li>Google Sitesinde API Sağlama özelliğinin etkinleştirildiğinden emin olun</li>
<li>Google tarafında daha fazla Kullanıcı hesabı talep etmeniz gerekebilir</li>
<li>Moodle ana sayfasına dönün</li>
<li>Düzenle öğesine tıklayın</li>
<li>GAccess, Gmail ve GData bloklarını sayfaya ekleyin.</li>
<li><b>Google Apps</b> blokunda <b>Ayarlar</b> seçeneğine tıklayın. Yapılandırma bilgilerini doldurun.</li>
<li>Google Apps blokunun doğru şekilde kurulduğunu teyit etmek için Durum bağlantısına tıklayın.</li>
<li>Site Yönetimi &gt; Güvenlik &gt; Site politikaları bölümüne gidin</li>
<li>Parola Politikası öğesine tıklayın</li>
<li>Parola Uzunluğu değerini 6 veya daha yüksek olacak şekilde ayarlayın (Google\'ın parola politikası için gereklidir)</li>
<li>GData blokunda eşitleme için kullanıcı eklemeniz gerekir. Bunun için <b>Google Apps
blokundaki</b> eşitlemek için kullanıcı ekleme bağlantısına tıklayın. GData blok cron\'u 1 dakikaya ayarlamak sonuçları görmenize yardımcı olur.</li>
<li>Bu Moodle kullanıcılarını Google\'a yüklemek için admin/cron.php adresini ziyaret ederek cron\'u manuel olarak çalıştırabilirsiniz. Eşitlemenin sonuçları okumada görüntülenmelidir.
<b>Bu beta eşitleme sonrasında Moodle Kullanıcılarının Google ile eşitlenmesi <em>DAHA UZUN SÜREBİLİR</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">Beklenen Sonuçlar</a></h4>
<ul class="alternate" type="square">
<li>Google İş Ortağı sayfasındaki hizmetleri ziyaret ettiğinizde veya herhangi bir Google Hizmeti bağlantısına tıkladığınızda
Moodle ile kimlik doğrulaması gerçekleştirilir.</li>
<li>Kullanıcı Moodle ve Google İş Ortağı Hizmetlerinde oturum açar</li>
<li>Kurulumla ilgili daha fazla bilgi için GSAML ayarlarındaki <b>Tanılama Sayfasına</b> bakın.</li>
</ul>


<h4><a name="pre" href="#consider">Dikkat Edilmesi Gerekenler (BETA Sürümü sonrası)</a></h4>
<ul class="alternate" type="square">
<li>Gmail akışı bulunamayabilir. Bunun nedeni kullanıcı parolasının Google kullanıcı parolasıyla eşleşmemesi olabilir.
Gelecekte böyle bir sorun yaşanmayacaktır. Şimdilik kullanıcıları Google Apps blokuyla eşitlediğinizden emin olun. E-posta
oturum açıldıktan sonra güncelleştirilecektir. Gelecekte okunmamış mesajlar gerçek zamanlı olarak güncelleştirilir.</li>

<li>Google Kimlik Doğrulama Eklentisinin Kimlik Doğrulama sırasındaki konumu önemlidir.
Bundan sonra Moodle kullanıcıları parolalarını değiştirdiğinde kullanıcıların kimlik doğrulama türünün geçersiz kılınması gerekir.
Bu davranış MNet kullanıcılarını etkileyebilir. Bu sorun için henüz bir çözüm bulunmamaktadır.</li>

</ul>

</div>';
$string['diagnostics'] = 'Tanılamalar';
$string['diagnostics_help'] = '<h2>Google Entegrasyonu Tanılamaları</h2>
<p>Tanılama sayfası Gmail, GData ve SAML bağlantı durumu ile ilgili bilgileri gösterir.
Yalnızca yöneticiler tanılama sayfasını görüntüleme yetkisine sahiptir.</p>

<h3>İçindekiler:</h3>
<ul>
<li><a href="#setup">Kurulum Tablosu Bilgileri</a></li>
<li><a href="#gdata">GData Bağlantı Durumu</a></li>
<li><a href="#gmail">Gmail Bloku Bağlantı Testi</a></li>
<li><a href="#saml">SAML SSO Durumu Testi</a></li>
</ul>

<h3><a name="setup" href="#setup">Yapılandırma Tablosu Bilgileri</a></h3>
<div class="indent">
Bu tablolar, Moodle ile Google Entegrasyonuna dair mevcut yapılandırmayı yansıtır. Tüm değerlerin belirlendiğinden emin olun.
</div>

<h3><a name="gdata" href="#gdata">GData Bağlantısı</a></h3>
<div class="indent">
Bloklar klasöründe bulunan GData bloku, çeşitli Google Hizmetleri kitaplıklarını içerir. Google Hizmetlerine bağlanabildiğini
onaylamanız gerekir. Bunun için GData Bloku Ayarları sayfasındaki değerleri düzenlemeniz gerekebilir.
</div>

<h3><a name="gmail" href="#gmail">Gmail Bloku Bağlantı Testi</a></h3>
<div class="indent">
Şu anda Gmail bloku, yalnızca oturum açıldığında kullanıcılar için okunmamış mesajlarını yeniler. Hata ayıklama etkinleştirildiğinde
testi sadece buradan gerçekleştirebilirsiniz. Okunmamış mesajları gerçek zamanlı görüntüleme desteği yakında sağlanacaktır.
</div>

<h3><a name="saml" href="#saml">SAML SSO Durumu Testi</a></h3>
<div class="indent">
SAML durumu testi, SSO yetkilendirme işlemi için bağımsız bir denetimdir. Henüz uygulamaya geçilmemiştir.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'Anahtarlar';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>Google SSO Anahtarları</h3>
<p>Hem Moodle hem de Google, önemli kaynaklara erişimi güvenli bir şekilde onaylayabilmelidir.
Yönetici bir <b>Doğrulama Sertifikası</b> oluşturarak Google\'a açık anahtar içeren X.509 formatındaki sertifikayı
yüklemelidir.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">Anahtar Oluşturma Hakkında Google Belgeleri</a>
SAML Moodle SSO hizmetinin yalnızca <b>RSA anahtarlarını</b> kullandığını unutmayın.
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
$string['mgadget'] = 'Moodle Aracı';
$string['mgadget_help'] = '<h2>Google-Moodle Aracı</h2>

<p>Bu yardım dosyası, Moodle siteniz için Google aracı hakkında kısa bir genel bakış sunar</p>

<h3><a name="status" href="#status">Moodle Aracı</a></h3>
<div class="indent">
<em>Moodle Aracı</em>, Google İş Ortağı başlangıç sayfanıza ekleyebileceğiniz bir araçtır.
</div>


<p><b>Kullanıcı Başlangıç Sayfasına yükleme adımları</b></p>
<ol>
<li>Moodle\'da oturum açın</li>
<li><b>Google Hizmetleri Erişimi</b> blokunda <b>Google İş Ortağı Sayfası</b>\'na tıklayın</li>
<li><b>Öğe Ekle</b> bağlantısına tıklayın</li>
<li><b>Url\'mi ekle</b> öğesine tıklayın</li>
<li>Moodle aracı URL\'si girin</li>
<li>URL şuna benzer bir formattadır:<br/><b>http://www.moodleetkialaniniz.org/auth/gsaml/moodlegadget.php</b>
<li>Bu, Yönetici blokundaki <b>Google Kimlik Doğrulama</b> Ayarlarında bulunabilir</li>
<li>Url\'yi url alanına kopyaladıktan sonra <b>Ekle</b> öğesine tıklayın</li>
<li><b>Ana sayfaya dön</b> öğesine tıklayın</li>
<li>Artık Moodle sitenizin bağlantısını içeren bir blok görebilirsiniz</li>
</ol>



<h3><a name="status" href="#status">Dikkat Edilmesi Gerekenler (BETA sürümü sonrası)</a></h3>
<div class="indent">
Bu, Google Moodle Aracının beta prototipidir. Gelecekte çok daha faydalı bir araç haline gelebilir.
Şu anda yükleme sonrasında Aracın hemen güncelleştirilmemesiyle ilgili bilinen bir hata mevcuttur.
Geliştiriciler bunu araştırmaktadır.
</div>';
$string['event_user_authenticated'] = 'Kullanıcı kimliği doğrulandı';
