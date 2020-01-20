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

$string['pluginname'] = 'مصادقة Google SAML';
$string['blockname'] = 'مصادقة Google SAML';
$string['domainname'] = 'مجال';
$string['auth_gsamldescription'] = 'مكون المصادقة الإضافي هذا يتيح لـ Moodle تسجيل الدخول الأحادي من خلال SAML SPS.';
$string['auth_gsamltitle'] = 'مصادقة Google';
$string['cert'] = 'شهادة';
$string['key'] = 'مفتاح RSA';
$string['domainnamestr'] = 'اسم المجال';
$string['rsakeystr'] = 'ملف مفتاح RSA';
$string['desckeystr'] = 'ارفع مفتاح RSA ‏(pem). لاحظ أن خدمة Moodle SAML تدعم مفاتيح RSA الموقعة فقط.';
$string['googauthconfstr'] = 'تكوين مصادقة Google';
$string['ssl_str'] = 'شهادة توقيع SSL';
$string['desc_certstr'] = 'ارفع شهادة X.509. لاحظ أن هذا هو نفس الملف الذي سوف ترفعه إلى Google أيضًا.';
$string['setupinstrctstr'] = 'إعداد الإرشادات ';
$string['mgadgetstr'] = 'أدوات Moodle الذكية ';
$string['mgadgethelp'] = 'مساعدة أدوات Moodle الذكية';
$string['googdiag'] = 'تشخيصات تكامل Google';
$string['googdebugopts'] = 'عقب الانتهاء من التكوين، يمكنك تسجيل الدخول مجددًا وزيارة ';
$string['thediagnosticspage'] = 'صفحة التشخيصات';
$string['notadminnopermin'] = 'لست مسؤولاً. لا تمتلك إذنًا بعرض تلك الإعدادات.';
$string['nokeyuploaded'] = 'لم يتم رفع أي مفتاح';
$string['filesnotsaved'] = 'لم يتم حفظ الملف.';
$string['keypathnotsaved'] = 'لم يتم حفظ مسار المفتاح.';
$string['uploadkeystr'] = 'رفع المفتاح';
$string['uploadkey'] = 'رفع المفتاح';
$string['uploadstr'] = 'رفع';
$string['uploadthekey'] = 'رفع المفتاح';
$string['gadgetinfostr'] = 'استخدم عنوان URL التالي لإضافة أدوات Moodle الذكية إلى صفحة البدء في Google‏<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'ربط بإعدادات Google';
$string['nodomainyet'] = 'لم يتم تعيين مجال بعد';
$string['gsamlsetuptableinfo'] = '<ol><li>قم بتعيين <b>اسم المجال</b> إلى اسم مجال خدمة Google ثم انقر فوق <b>حفظ التغييرات</b><br/><br/></li>
<li>في نافذة جديدة، افتح صفحة لوحة التحكم في Google Apps كمسؤول (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>انقر فوق علامة التبويب <b>أدوات متقدمة</b>.<br/><br/></li>
<li>انقر فوق الرابط <b>إعداد تسجيل الدخول الأحادي (SSO)</b> بجوار المصادقة.<br/><br/></li>
<li>حدد المربع <b>تمكين تسجيل الدخول الأحادي</b> أولاً.<br/><br/></li>
<li>والآن قم بإدراج عنوان URL هذا إلى حقل النص <b>عنوان URL لصفحة تسجيل الدخول</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>قم بإدراج عنوان URL هذا في حقل النص<b>عنوان URL لصفحة تسجيل الخروج</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>قم بإدراج عنوان URL هذا في حقل النص <b>عنوان URL الخاص بتغيير كلمة المرور</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>قم بإنشاء ورفع <b>شهادة التحقق من الصحة إلى Google (شهادة X.509 تحتوي على مفتاح عام)</b><br/><br/></li>
<li>ارفع المفتاح الخاص والشهادة إلى Moodle أيضًا ثم انقر فوق <b>حفظ التغييرات</b></b><br/></li></ol>';
$string['tomoodle'] = 'إلى Moodle';
$string['errusernotloggedin'] = 'تعذر تسجيل دخول المستخدم';
$string['pwdnotvalid'] = 'كلمة المرور غير صالحة';
$string['samlcodefailed'] = 'فشل رمز SAML. قم بتشغيل تصحيح الأخطاء لمعرفة السبب';
$string['samlauthcodefailed'] = 'فشل رمز مصادقة SAML. قم بتشغيل تصحيح الأخطاء لمزيد من المعلومات';
$string['sixcharmsg'] = 'يجب أن تكون كلمة مرور المستخدم أطول من 6 أحرف لتكامل Google. اطلب من المسؤول لديك تعديل إعدادات سياسة الموقع';
$string['errordecodingsamlrequest'] = 'حدثت مشكلة أثناء فك ترميز طلب SAML أو gzinflating (ربما إعدادات HTTPS غير صحيحة، تحقق من تكوين تسجيل الدخول الأحادي في Google): {$a}';
$string['googsamldiag'] = 'تشخيصات Google SAML';
$string['notadminnoperm'] = 'أنت لست مسؤول موقع. لا تمتلك إذنًا بعرض تلك المعلومات';
$string['gdatanotconfig'] = 'لم يتم تعيين جدول تكوين GData.';
$string['googlesamlconfigdata'] = 'بيانات تكوين Google SAML';
$string['gsamlconfignotset'] = 'لم يتم بعد تعيين تكوين Google SAML';
$string['gdataconfignotset'] = 'لم يتم تعيين جدول تكوين GData';
$string['gdataconfig'] = 'تكوين GData';
$string['gmailconfig'] = 'تكوين Gmail';
$string['componentinstallcheck'] = 'الفحص المسبق لتثبيت المكون';
$string['gdatanotinstalled'] = 'كتلة GData غير مثبتة\\n';
$string['gappsblockinstalled'] = 'كتلة GApps مثبتة\\n';
$string['gmailblocknotinstalled'] = 'كتلة Gmail غير مثبتة';
$string['gmailblockinstalled'] = 'كتلة Gmail مثبتة\\n';
$string['gdataapitestresults'] = 'نتائج اختبار واجهة برمجة تطبيقات GData';
$string['trytoinitgdataconnection'] = 'محاولة تهيئة GData إلى اتصال Google<br/>';
$string['gsamlsuccess'] = 'نجاح';
$string['gmailtestresults'] = 'نتائج اختبار Gmail';
$string['gmailtestwillnotrun'] = 'لن يتم إجراء اختبار Gmail إلا إذا كان Moodle في الوضع DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'الحصول على موجز البريد الإلكتروني لاسم المستخدم: ';
$string['currfileupload'] = 'الملف الحالي:';
$string['nonestr'] = 'بلا';
$string['privatekeystr'] = 'المفتاح الخاص';
$string['certificatestr'] = 'شهادة';
$string['statustab'] = 'الحالة';
$string['logstab'] = 'سجلات SAML';
$string['ssoteststab'] = 'اختبارات تسجيل الدخول الأحادي';
$string['docstab'] = 'الوثائق';
$string['id'] = 'المعرف';
$string['time'] = 'الوقت';
$string['userid'] = 'معرف المستخدم';
$string['ip'] = 'عنوان IP';
$string['course'] = 'المقرر الدراسي';
$string['module'] = 'الوحدة النمطية';
$string['cmid'] = 'cmid';
$string['action'] = 'الإجراء';
$string['url'] = 'URL';
$string['info'] = 'معلومات';
$string['config_gsaml'] = 'تكوين Google SAML';
$string['config_gsaml_help'] = '<h2>إكمال الإعداد</h2>

<p>إعداد تكامل Google بالكامل مع Moodle يتطلب قليلاً من التكوين. ينبغي أن يرشدك ملف المساعدة هذا
خلال معظم خطوات العملية لتكوين المكون الإضافي لمصادقة Google وكذلك تجهيز
كتلة GData وكتلة Gmail.</p>

<h4>جدول المحتويات:</h4>
<ul>
<li><a href="#pre">الشروط المسبقة</a></li>
<li><a href="#status">الخطوات</a></li>
<li><a href="#expect">النتائج المتوقعة</a></li>
<li><a href="#consider">الاعتبارات</a></li>
</ul>

<h4><a name="status" href="#status">حالة Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">الشروط المسبقة/الافتراضات</a></h4>
<p>
<ol>
<li>تثبيت رمز GSAML وGAccessوGmail وGData</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (اختياري بدءًا من إصدار بيتا)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">الخطوات</a></h4>
<ol>
<li>قم بتسجيل الدخول إلى Moodle كمسؤول</li>
<li>انقر فوق <b>الإعلانات</b> لتحديث جداول الكتل</li>
<li>قم بتمكين المكون الإضافي <b>لمصادقة Google</b> من صفحة المسؤول "إدارة المكونات الإضافية"</li>
<li>الآن حدد مصادقة المستخدمين للانتقال إلى <b>مصادقة Google</b> حيث توجد توجيهات بالصفحة جديرة بالاتباع.</li>
<li>ادخل إلى مجال صفحة شريك Google لديك</li>
<li>ارفع الشهادة (لمزيد من المعلومات حول إنشاء ذلك <a

    href="http://code.google.com/apis/apps/articles/sso-keygen.html">وثائق Google بخصوص إنشاء المفاتيح</a> )</li>
<li>ارفع المفتاح الخاص (لمزيد من المعلومات حول إنشاء ذلك، يرجى زيارة <a

    href="http://code.google.com/apis/apps/articles/sso-keygen.html">وثائق Google بخصوص إنشاء المفاتيح</a>)</li>
<li>انقر فوق حفظ</li>
<li>اتبع التوجيهات لإضافة عناوين URL المناسبة إلى صفحة تسجيل الدخول الأحادي إلى Google</li>
<li>انقر فوق خانة الاختيار في موقع Google لتمكين تسجيل الدخول الأحادي</li>
<li>في موقع Google، تأكد من تمكين واجهة برمجة التطبيقات لإدارة الحسابات وإلا لن يتم تحديث أي مستخدمين.</li>
<li>تأكد من تمكين API Provisioning في موقع Google</li>
<li>ربما تحتاج إلى طلب مزيد من حسابات المستخدمين في موقع Google</li>
<li>ارجع إلى صفحة Moodle الرئيسية</li>
<li>انقر فوق تحرير</li>
<li>قم بإضافة كتل GAccess وGmail وGData إلى الصفحة.</li>
<li>انقر فوق <b>الإعدادات</b> في كتلة <b>Google Apps</b>. املأ معلومات التكوين.</li>
<li>انقر فوق رابط الحالة للتأكيد على أن كتلة Google Apps لديك معدّة بشكل صحيح.</li>
<li>انتقل إلى إدارة الموقع &gt; الأمان &gt; سياسات الموقع</li>
<li>تحقق من سياسة كلمة المرور</li>
<li>قم بتعيين طول كلمة المرور إلى 6 أحرف أو أكثر (مطلوب لسياسة كلمة مرور Google)</li>
<li>في كتلة GData، عليك إضافة مستخدمين للمزامنة. يمكنك القيام بذلك من خلال النقر فوق الرابط "إضافة مستخدمين للمزامنة" في كتلة <b>Google Apps
</b>. قد يكون مفيدًا أن تري النتيجة إن قمت بتعيين           cron لكتلة GData إلى 1 دقيقة.</li>
<li>لرفع مستخدمي Moodle هؤلاء إلى Google، يمكنك تشغيل cron يدويًا من خلال زيارة admin/cron.php. ينبغي أن تظهر نتائج المزامنة في القراءة.
<b>انتبه إلى أن تلك المزامنة التجريبية لمستخدمي Moodle مع Google قد تستغرق وقتًا <em>طويلاً</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">النتائج المتوقعة</a></h4>
<ul class="alternate" type="square">
<li>النقر فوق أي من ارتباطات خدمة Google أو زيارة الخدمات المقدمة في صفحة شريك Google سوف
يؤدي إلى المصادقة مقابل Moodle.</li>
<li>يجب تسجيل دخول المستخدم إلى Moodle وكذلك خدمات شريك Google</li>
<li>راجع <b>صفحة التشخيصات</b> في إعدادات GSAML لمزيد من المعلومات حول الإعداد الخاص بك.</li>
</ul>


<h4><a name="pre" href="#consider">الاعتبارات (بدءًا من إصدار بيتا)</a></h4>
<ul class="alternate" type="square">
<li>ربما لا يتم العثور على موجز Gmail. قد يرجع السبب في ذلك إلى أن كلمة مرور المستخدم لا تطابق كلمة مرور مستخدم Google.
لكن ذلك لن يشكل مشكلة في المستقبل. فلتتأكد حاليًا من مزامنة المستخدمين مع كتلة Google Apps. سيتم تحديث البريد الإلكتروني
عقب تسجيل الدخول. في المستقبل سيتم تحديث الرسائل غير المقروءة في الوقت الفعلي.</li>

<li>موقع المكون الإضافي لمصادقة Google في أمر المصادقة مهم.
بدءًا من تلك اللحظة، يجب تجاوز نوع مصادقة المستخدم عندما يقوم مستخدم Moodle بتغيير كلمات المرور.
قد يؤثر هذا السلوك على مستخدمي MNet. لم يتم العثور على حل لتلك المشكلة إلى اللحظة.</li>

</ul>

</div>';
$string['diagnostics'] = 'التشخيصات';
$string['diagnostics_help'] = '<h2>تشخيصات تكامل Google</h2>
<p>سوف تحتوي صفحة التشخيصات على معلومات حول حالة اتصال Gmail وGData وSAML
فقط المسؤولون هم من لديهم إذن عرض المعلومات التشخيصية.</p>

<h3>جدول المحتويات:</h3>
<ul>
<li><a href="#setup">إعداد معلومات الجدول</a></li>
<li><a href="#gdata">حالة اتصال GData</a></li>
<li><a href="#gmail">اختبار اتصال كتلة Gmail</a></li>
<li><a href="#saml">اختبار حالة SAML SSO</a></li>
</ul>

<h3><a name="setup" href="#setup">معلومات جدول التكوين</a></h3>
<div class="indent">
هذه الجداول تمثل التكوين الحالي الذي يخص Moodle إلى تكامل Google. تأكد من تعيين كل القيم.
</div>

<h3><a name="gdata" href="#gdata">اتصال GData </a></h3>
<div class="indent">
تحتوي كتلة GData الموجودة في مجلد الكتل على مكتبات لمجموعة متنوعة من خدمات Google. عليك التأكد
من أن بإمكانها الاتصال بخدمات Google. ربما تضطر إلى تعديل القيم في صفحة إعدادات كتلة GData.
</div>

<h3><a name="gmail" href="#gmail">اختبار اتصال كتلة Gmail</a></h3>
<div class="indent">
في اللحظة الحالية، لن تقوم كتلة Gmail بتحديث رسائل المستخدم غير المقروءة إلا عقب تسجيل الدخول. لن يكون بإمكانك تشغيل
الاختبار هنا إلا إذا كان تصحيح الأخطاء قيد التشغيل.  سيتوفر قريبًا دعم عرض الرسائل غير المقروءة في الوقت الفعلي.

</div>

<h3><a name="saml" href="#saml">اختبار حالة SAML SSO</a></h3>
<div class="indent">
اختبار حالة SAML عبارة عن فحص مستقل لعملية تفويض تسجيل الدخول الأحادي. لم يتم تطبيقه بعد.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'المفاتيح';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>مفاتيح تسجيل الدخول الأحادي إلى Google</h3>
<p>يجب أن يكون بإمكان كل من Moodle وGoogle منح تفويضات الوصول إلى الموارد المهمة بأمان.
ويجب على المسؤول إنشاء <b>شهادة تحقق من الصحة</b> ورفع شهادة بتنسيق X.509 إلى Google مع مفتاح
عام مضمّن.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">وثائق Google بخصوص إنشاء المفاتيح</a>
لاحظ أن خدمة SAML Moodle SSO لا تستخدم إلا <b>مفاتيح RSA.</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">حالة Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">الشهادة</a></h4>
<div class="indent">
-->
</div>';
$string['mgadget'] = 'أدوات Moodle الذكية';
$string['mgadget_help'] = '<h2>Google إلى أداة Moodle الذكية</h2>

<p>يوفر ملف المساعدة هذا نظرة عامة مقتضبة على أداة Google الذكية لموقع Moodle الخاص بك</p>

<h3><a name="status" href="#status">أداة Moodle الذكية</a></h3>
<div class="indent">
إن <em>أداة Moodle الذكية</em> عبارة عن أداة ذكية يمكنك تضمينها في صفحة البداية لشريك Google

</div>


<p><b>خطوات التثبيت في صفحة بداية للمستخدمين</b></p>
<ol>
<li>قم بتسجيل الدخول إلى Moodle</li>
<li>انقر فوق <b>صفحة شريك Google</b> في كتلة <b> الوصول إلى خدمات Google</b>.</li>
<li>انقر فوق الرابط <b>إضافة عنصر</b> </li>
<li>انقر فوق<b>إضافة عنوان URL الخاص بي</b></li>
<li>أدخل عنوان URL الخاص بـ moodlegadget</li>
<li>يبدو عنوان URL مثل <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
<li> ويمكن العثور عليه في إعدادات <b>مصادقة Google</b> من كتلة المسؤول</li>
<li>بعد أن تنسخ عنوان URL إلى حقل عنوان URL. انقر فوق <b>إضافة</b></li>
<li>انقر فوق <b>رجوع إلى الصفحة الرئيسية</b></li>
<li>ينبغي أن ترى الآن كتلة تحتوي على رابط إلى موقع Moodle</li>
</ol>



<h3><a name="status" href="#status">الاعتبارات (بدءًا من إصدار بيتا)</a></h3>
<div class="indent">
هذا هو النموذج الأولى التجريبي من أداة Google Moodle الذكية تلك. وقد تكون في المستقبل أكثر وأعم نفعًا.
يوجد حاليًا خطأ معروف بالأداة الذكية حيث لا يتم تحديثها مباشرة عقب التثبيت.
لكن المطورون يعملون بجد على إيجاد حل له.
</div>';
$string['event_user_authenticated'] = 'تمت مصادقة المستخدم';
