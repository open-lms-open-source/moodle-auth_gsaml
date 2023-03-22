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
$string['setupinstrctstr'] = 'إعداد الإرشادات';
$string['mgadgetstr'] = 'أدوات Moodle الذكية';
$string['mgadgethelp'] = 'مساعدة أدوات Moodle الذكية';
$string['googdiag'] = 'تشخيصات تكامل Google';
$string['googdebugopts'] = 'عقب الانتهاء من التكوين، يمكنك تسجيل الدخول مجددًا وزيارة';
$string['thediagnosticspage'] = 'صفحة التشخيصات';
$string['notadminnopermin'] = 'لست مسؤولاً. لا تمتلك إذنًا بعرض تلك الإعدادات.';
$string['nokeyuploaded'] = 'لم يتم رفع أي مفتاح';
$string['filesnotsaved'] = 'لم يتم حفظ الملف.';
$string['keypathnotsaved'] = 'لم يتم حفظ مسار المفتاح.';
$string['uploadkeystr'] = 'رفع المفتاح';
$string['uploadkey'] = 'رفع المفتاح';
$string['uploadstr'] = 'رفع';
$string['uploadthekey'] = 'رفع المفتاح';
$string['gadgetinfostr'] = 'استخدم عنوان URL الآتي لإضافة أدوات Moodle الذكية إلى صفحة البدء في Google<br/><b dir="rtl">{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'ربط بإعدادات Google';
$string['nodomainyet'] = 'لم يتم تعيين مجال بعد';
$string['gsamlsetuptableinfo'] = '<ol dir="rtl"><li>قم بتعيين <b>اسم المجال</b> على اسم مجال خدمة Google الخاص بك، ثم انقر فوق <b>حفظ التغييرات</b><br/><br/></li>
<li>في نافذة جديدة، افتح صفحة لوحة تحكم Google Apps كمسؤول (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>انقر فوق علامة التبويب <b>أدوات متقدمة</b>.<br/><br/></li>
<li>انقر فوق رابط <b>إعداد تسجيل الدخول الأحادي (SSO)</b> بجانب المصادقة.<br/><br/></li>
<li>حدد أولاً مربع <b>تمكين تسجيل الدخول الأحادي</b>.<br/><br/></li>
<li>أدخِل الآن عنوان URL هذا في الحقل النصي <b>عنوان URL لصفحة تسجيل الدخول</b>.<br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>أدخِل عنوان URL هذا في الحقل النصي <b>عنوان URL لصفحة تسجيل الخروج</b>.<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>أدخِل عنوان URL هذا في الحقل النصي <b>عنوان URL الخاص بتغيير كلمة المرور</b>.<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>قم بإنشاء <b>شهادة تحقق على Google (شهادة X.509 تحتوي على المفتاح العام)</b> ورفعها<br/><br/></li>
<li>قم برفع المفتاح الخاص والشهادة على Moodle كذلك، ثم انقر فوق <b>حفظ التغييرات</b></b><br/></li></ol>';
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
$string['obtainemailfeed'] = 'الحصول على موجز البريد الإلكتروني لاسم المستخدم:';
$string['currfileupload'] = 'الملف الحالي:';
$string['nonestr'] = 'بلا';
$string['privatekeystr'] = 'المفتاح الخاص';
$string['certificatestr'] = 'شهادة';
$string['statustab'] = 'الحالة';
$string['logstab'] = 'سجلات SAML';
$string['ssoteststab'] = 'اختبارات تسجيل الدخول الأحادي';
$string['docstab'] = 'الوثائق';
$string['id'] = 'ID';
$string['time'] = 'الوقت';
$string['userid'] = 'معرف المستخدم';
$string['ip'] = 'عنوان IP';
$string['course'] = 'المقرر الدراسي';
$string['module'] = 'الوحدة النمطية';
$string['cmid'] = 'cmid';
$string['action'] = 'الإجراء';
$string['url'] = 'عنوان URL';
$string['info'] = 'معلومات';
$string['contextinstanceid'] = 'معرف المثيل';
$string['courseid'] = 'معرف المقرر الدراسي';
$string['eventname'] = 'اسم الحدث';
$string['otherlog'] = 'أخرى';
$string['useraccesedgservice'] = 'قام المستخدم بالوصول إلى gservice أولاً';
$string['userneedsredirect'] = 'لدى المستخدم طلب saml لكنه يحتاج إلى تسجيل الدخول/إعادة التوجيه';
$string['userislogged'] = 'قام المستخدم بتسجيل الدخول ولديه طلب saml';
$string['login'] = 'تسجيل الدخول';
$string['config_gsaml'] = 'تكوين Google SAML';
$string['config_gsaml_help'] = '<h2 dir="rtl">إكمال الإعداد</h2>

<p dir="rtl">يتطلب إعداد التكامل الكامل من Google إلى Moodle القليل من التكوين. من شأن ملف التعليمات هذا أن يرشدك
خلال معظم العملية في تكوين المكون الإضافي مصادقة Google فضلاً عن تجهيز كتلة GData
وكتلة Gmail.</p>

<h4 dir="rtl">جدول المحتويات:</h4>
<ul dir="rtl">
<li><a href="#pre" dir="rtl">الشروط السابقة</a></li>
<li><a href="#status">الخطوات</a></li>
<li><a href="#expect">النتائج المتوقعة</a></li>
<li><a href="#consider">الاعتبارات</a></li>
</ul>

<h4 dir="rtl"><a name="status" href="#status" dir="rtl">حالة Google Apps</a></h4>
<div class="indent" dir="rtl">


<h4><a name="pre" href="#status" dir="rtl">الشروط السابقة/الافتراضات</a></h4>
<p>
<ol>
<li>تم تثبيت رمز GSAML وGAccess وGmail وGData</li>
<ul>
<li>المصادقة/gsaml</li>
<li>الكتل/gmail</li>
<li>الكتل/gdata</li>
<li>الكتل/gaccess</li>
<li>الكتل/mgadget (اختياري بدءًا من الإصدار التجريبي)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">الخطوات</a></h4>
<ol>
<li>قم بتسجيل الدخول إلى Moodle كمسؤول</li>
<li>انقر فوق <b>الإعلامات</b> لتحديث جداول الكتل</li>
<li>قم بتمكين المكون الإضافي <b>مصادقة Google</b> من صفحة المسؤول إدارة المكونات الإضافية</li>
<li>والآن حدد مصادقة المستخدمين، وانتقل إلى <b>مصادقة Google</b>، من المفترض أن تكون ثمة توجيهات في الصفحة لاتباعها.</li>
<li>أدخِل مجال صفحة شريك Google</li>
<li>قم برفع الشهادة (لمزيد من المعلومات عن إنشاء ذلك، تفضل بزيارة <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"‎&gt; وثائق Google في ما يتعلق بإنشاء المفاتيح</a>)</li>
<li>قم برفع المفتاح الخاص (لمزيد من المعلومات عن إنشاء ذلك، تفضل بزيارة <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"‎&gt; وثائق Google في ما يتعلق بإنشاء المفاتيح</a>)</li>
<li>انقر فوق حفظ</li>
<li>اتبع توجيهات إضافة عناوين URL المناسبة إلى صفحة تسجيل الدخول الأحادي في Google</li>
<li>انقر فوق خانة الاختيار في موقع Google لتمكين تسجيل الدخول الأحادي</li>
<li>في موقع Google، تأكد من تمكين واجهة برمجة تطبيقات التوفير وإلا فلن يتم تحديث أي مستخدم.</li>
<li>في موقع Google، تأكد من تمكين توفير واجهة برمجة التطبيقات</li>
<li>في موقع Google، قد يلزم طلب مزيد من حسابات المستخدمين</li>
<li>ارجع إلى صفحة Moodle الرئيسية</li>
<li>انقر فوق تحرير</li>
<li>أضِف كتل GAccess وGmail وGData إلى الصفحة.</li>
<li>انقر فوق <b>الإعدادات</b> في كتلة <b>Google Apps</b>. واملأ معلومات التكوين.</li>
<li>انقر فوق رابط الحالة لتأكيد أنه تم إعداد كتلة Google Apps بشكل سليم.</li>
<li>انتقل إلى إدارة الموقع &gt; الأمان &gt; سياسات الموقع</li>
<li>تحقق من سياسة كلمة المرور</li>
<li>قم بتعيين طول كلمة المرور على 6 أو أكبر (مطلوب لسياسة كلمة مرور Google)</li>
<li>في كتلة GData، تلزم إضافة مستخدمين لمزامنتهم. قم بذلك من خلال النقر فوق رابط إضافة مستخدمين لمزامنتهم في <b>كتلة
Google Apps</b>. من المفيد رؤية النتيجة إذا قمت بتعيين cron الخاص بكتلة GData على دقيقة واحدة.</li>
<li>لرفع مستخدمي Moodle هؤلاء على Google، يمكنك تشغيل cron يدويًا من خلال زيارة admin/cron.php، ومن المفترض أن تظهر نتائج المزامنة في نافذة القراءة.
<b>انتبه إلى أنه بدءًا من هذا الإصدار التجريبي، قد تستغرق مزامنة مستخدمي Moodle مع Google وقتًا <em>طويلاً</em>.</b></li>
</ol>

<h4><a name="pre" href="#expect">النتائج المتوقعة</a></h4>
<ul class="alternate" type="square">
<li>سيؤدي النقر فوق أي من روابط خدمة Google أو زيارة الخدمات من صفحة شريك Google إلى
المصادقة مقابل Moodle.</li>
<li>ينبغي تسجيل دخول المستخدم إلى Moodle بالإضافة إلى خدمات شريك Google</li>
<li>راجع <b>صفحة التشخيصات</b> في إعدادات GSAML لمزيد من المعلومات عن الإعداد الخاص بك.</li>
</ul>


<h4><a name="pre" href="#consider">الاعتبارات (بدءًا من الإصدار التجريبي)</a></h4>
<ul class="alternate" type="square">
<li>قد لا يتم العثور على موجز Gmail. ربما يرجع ذلك إلى أن كلمة مرور المستخدم لا تطابق كلمة مرور مستخدم Google.
لن تكون هذه مشكلة في المستقبل. في الوقت الحالي، تأكد من مزامنة المستخدمين مع كتلة Google Apps. سيتم تحديث البريد الإلكتروني
عند تسجيل الدخول. من المفترض في المستقبل أن يتم تحديث الرسائل غير المقروءة في الوقت الفعلي.</li>

<li>يُعَد موقع المكون الإضافي مصادقة Google في ترتيب المصادقة مهمًا.
بدءًا من هذه اللحظة، يلزم تجاوز نوع مصادقة المستخدم عندما يغير مستخدم Moodle كلمات المرور.
قد يؤثر هذا السلوك في مستخدمي MNet. لم يتم العثور على حل لهذه المشكلة حتى الآن.</li>

</ul>

</div>';
$string['diagnostics'] = 'التشخيصات';
$string['diagnostics_help'] = '<h2 dir="rtl">تشخيصات تكامل Google</h2>
<p dir="rtl">ستكشف صفحة التشخيصات عن معلومات متعلقة بحالة اتصال Gmail وGData وSAML.
يمتلك المسؤولون فقط صلاحية لعرض معلومات التشخيص.</p>

<h3 dir="rtl">جدول المحتويات:</h3>
<ul dir="rtl">
<li><a href="#setup" dir="rtl">معلومات جدول الإعداد</a></li>
<li><a href="#gdata">حالة اتصال GData</a></li>
<li><a href="#gmail">اختبار اتصال كتلة Gmail</a></li>
<li><a href="#saml">اختبار حالة تسجيل الدخول الأحادي لـ SAML</a></li>
</ul>

<h3 dir="rtl"><a name="setup" href="#setup" dir="rtl">معلومات جدول التكوين</a></h3>
<div class="indent" dir="rtl">
تمثل هذه الجداول التكوين الحالي للتكامل من Moodle إلى Google. تأكد من تعيين جميع القيم.
</div>

<h3 dir="rtl"><a name="gdata" href="#gdata" dir="rtl">اتصال GData</a></h3>
<div class="indent" dir="rtl">
تحتوي كتلة GData الموجودة في مجلد الكتل على مكتبات لمجموعة متنوعة من خدمات Google. يجب عليك تأكيد
قدرتها على الاتصال بخدمات Google. قد يلزم ضبط القيم في صفحة إعدادات كتلة GData.
</div>

<h3 dir="rtl"><a name="gmail" href="#gmail" dir="rtl">اختبار اتصال كتلة Gmail</a></h3>
<div class="indent" dir="rtl">
في الوقت الراهن، ستقوم كتلة Gmail بتحديث رسائل المستخدمين غير المقروءة فقط عند تسجيل الدخول. لن
تتمكن من تشغيل الاختبار هنا إلا إذا تم تشغيل تصحيح الأخطاء. سيتوفر دعم عرض الرسائل غير المقروءة في الوقت الفعلي قريبًا.
</div>

<h3 dir="rtl"><a name="saml" href="#saml" dir="rtl">اختبار حالة تسجيل الدخول الأحادي لـ SAML</a></h3>
<div class="indent" dir="rtl">
اختبار حالة SAML هو فحص مستقل لعملية تخويل تسجيل الدخول الأحادي. ولم يتم تنفيذه بعد.
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'المفاتيح';
$string['keys_help'] = '<span style="font-size: 1.2em" dir="rtl">
<h3>مفاتيح تسجيل الدخول الأحادي في Google</h3>
<p>يجب أن يتمكن كل من Moodle وGoogle من تخويل الوصول إلى الموارد المهمة بشكل آمن.
يجب على المسؤول إنشاء <b>شهادة تحقق</b> ورفع شهادة بتنسيق X.509 على Google مع مفتاح
عام مضمن.
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">وثائق Google في ما يتعلق بإنشاء المفاتيح</a>
لاحظ أن خدمة تسجيل الدخول الأحادي لـ SAML Moodle تستخدم <b>مفاتيح RSA</b> فقط.
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
$string['mgadget'] = 'أدوات Moodle الذكية';
$string['mgadget_help'] = '<h2 dir="rtl">Google إلى أدوات Moodle الذكية</h2>

<p dir="rtl">يوفر ملف التعليمات هذا نظرة عامة مختصرة على أدوات Google الذكية لموقع Moodle</p>

<h3 dir="rtl"><a name="status" href="#status" dir="rtl">أدوات Moodle الذكية</a></h3>
<div class="indent" dir="rtl">
<em>أدوات Moodle الذكية</em> هي أدوات ذكية يمكنك تضمينها في صفحة بدء شريك Google.
</div>


<p dir="rtl"><b dir="rtl">خطوات التثبيت في صفحة بدء المستخدمين</b></p>
<ol dir="rtl">
<li>قم بتسجيل الدخول إلى Moodle</li>
<li>انقر فوق <b>صفحة شريك Google</b> في كتلة <b>الوصول إلى خدمات Google</b></li>
<li>انقر فوق رابط <b>إضافة محتويات</b></li>
<li>انقر فوق <b>إضافة عنوان url الخاص بي</b></li>
<li>أدخِل عنوان URL لأدوات moodle الذكية</li>
<li>عنوان URL هو شيء يشبه<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>يمكن العثور عليه في إعدادات <b>مصادقة Google</b> من كتلة المسؤول</li>
<li>بعد نسخ عنوان url إلى حقل عنوان url، انقر فوق <b>إضافة</b></li>
<li>انقر فوق <b>العودة إلى الصفحة الرئيسية</b></li>
<li>من المفترض أن ترى الآن كتلة تحتوي على رابط إلى موقع Moodle الخاص بك</li>
</ol>



<h3 dir="rtl"><a name="status" href="#status" dir="rtl">الاعتبارات (بدءًا من الإصدار التجريبي)</a></h3>
<div class="indent" dir="rtl">
هذا هو النموذج الأولي التجريبي لأدوات Google Moodle الذكية. قد يكون مفيدًا أكثر بكثير في المستقبل.
ثمة حاليًا خطأ معروف في ما يتعلق بعدم تحديث الأدوات الذكية فور التثبيت.
ويبحث المطورون في ذلك الأمر.
</div>';
$string['event_user_authenticated'] = 'تمت مصادقة المستخدم';
