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
 * @copyright  Copyright (c) 2021 Open LMS (https://www.openlms.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Google SAML Auth';
$string['blockname'] = 'การยืนยันตัวตน SAML ของ Google';
$string['domainname'] = 'โดเมน';
$string['auth_gsamldescription'] = 'ปลั๊กอินการยืนยันตัวตนนี้เปิดใช้งาน Moodle เป็นการลงชื่อเพียงครั้งเดียวด้วย SAML SPS';
$string['auth_gsamltitle'] = 'การยืนยันตัวตนของ Google';
$string['cert'] = 'ใบรับรอง';
$string['key'] = 'คีย์ RSA';
$string['domainnamestr'] = 'ชื่อโดเมน';
$string['rsakeystr'] = 'ไฟล์คีย์ RSA';
$string['desckeystr'] = 'อัปโหลดคีย์ RSA (pem) โปรดทราบว่าบริการ Moodle SAML รองรับคีย์ที่ลงชื่อด้วย RSA เท่านั้น';
$string['googauthconfstr'] = 'การยืนยันตัวตนของ Google';
$string['ssl_str'] = 'ใบรับรองการลงนาม SSL';
$string['desc_certstr'] = 'อัปโหลดใบรับรอง X.509 โปรดทราบว่าไฟล์นี้เป็นไฟล์เดียวกับที่คุณจะอัปโหลดไปยัง Google เช่นกัน';
$string['setupinstrctstr'] = 'ตั้งค่าคำแนะนำ';
$string['mgadgetstr'] = 'Moodle Gadget';
$string['mgadgethelp'] = 'ความช่วยเหลือของ Moodle Gadget';
$string['googdiag'] = 'Google Integration Diagnostics';
$string['googdebugopts'] = 'เมื่อเสร็จสิ้นการกำหนดค่าคุณสามารถเข้าสู่ระบบอีกครั้งและเยี่ยมชม';
$string['thediagnosticspage'] = 'หน้าการวินิจฉัย';
$string['notadminnopermin'] = 'คุณไม่ใช่ผู้ดูแลระบบ คุณไม่ได้รับอนุญาตให้ดูการตั้งค่าเหล่านี้';
$string['nokeyuploaded'] = 'ไม่มีการอัปโหลดคีย์';
$string['filesnotsaved'] = 'ไฟล์ไม่ได้บันทึก';
$string['keypathnotsaved'] = 'ไม่ได้บันทึกเส้นทางของคีย์';
$string['uploadkeystr'] = 'อัปโหลดคีย์';
$string['uploadkey'] = 'อัปโหลดคีย์';
$string['uploadstr'] = 'อัปโหลด';
$string['uploadthekey'] = 'อัปโหลดคีย์';
$string['gadgetinfostr'] = 'ใช้ URL ต่อไปนี้เพื่อเพิ่ม Moodle Gadget ไปยังหน้าเริ่มต้นของ Google<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'เชื่อมโยงไปยังการตั้งค่า Google';
$string['nodomainyet'] = 'ยังไม่มีการตั้งค่าโดเมน';
$string['gsamlsetuptableinfo'] = '<ol><li>กำหนด<b>ชื่อโดเมน</b>ไปที่ชื่อโดเมนการบริการกูเกิล จากนั้นคลิกที่ <b>บันทึกการเปลี่ยนแปลง</b><br/><br/></li> <li>ในหน้าต่างใหม่จะเปิดหน้าแผงควบคุมแอปกูิเกิลในฐานะผู้ดูแลระบบ(<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>คลิกที่ <b>แถบ</b> เครื่องมือขั้นสูง</b> tab.<br/><br/></li>
<li>คลิกที่ <b>ตั้งค่าลิงก์การลงชื่อเข้าระบบครั้งเดียว (SSO)</b> อยู่ถัดจากการยืนยันตัวตน<br/><br/></li>
<li>เริ่มด้วยการตรวจ <b>เปิดใช้งานกล่อง</b> การลงชื่อเข้าระบบครั้งเดียว<br/><br/></li>
<li>ตอนนี้แทรก URL นี้ลงใน <b>ฟิลด์ข้อความ</b> URL หน้าเข้าสู่ระบบ <br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>แทรก URL นี้ลงใน <b>ฟิลด์ข้อความ</b> URL หน้าออกจากระบบ<br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>Iแทรก URL นี้ลงใน<b>ฟิลด์ข้อความ<br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>สร้างและอัปโหลด<b>ใบรับรองการตรวจสอบความถูกต้องไปที่กูเกิล (X.509 ใบรับรองประกอบด้วยคีย์สาธารณะ)</b><br/><br/></li>
<li>อัปโหลดคีย์สาธารณะและใบรับรองไปที่ Moodle ด้วย และจากนั้นคลิก <b>บันทึกการเปลี่ยนแปลง</b></b><br/></li></ol>';
$string['tomoodle'] = 'เพื่อ Moodle';
$string['errusernotloggedin'] = 'ผู้ใช้งานไม่สามารถเข้าสู่ระบบได้';
$string['pwdnotvalid'] = 'รหัสผ่านไม่ถูกต้อง';
$string['samlcodefailed'] = 'รหัส SAML ล้มเหลว เปิดการดีบักเพื่อค้นหาสาเหตุ';
$string['samlauthcodefailed'] = 'รหัสการยืนยันตัวตน SAML ล้มเหลว เปิดการดีบักเพื่อดูข้อมูลเพิ่มเติม';
$string['sixcharmsg'] = 'รหัสผ่านผู้ใช้งานจะต้องมีอักขระมากกว่า 6 ตัวสำหรับ Google Integration กรุณาแจ้งผู้ดูแลระบบของคุณเพื่อปรับการตั้งค่านโยบายเว็บไซต์';
$string['errordecodingsamlrequest'] = 'ปัญหาในการถอดรหัสคำขอ SAML หรือ gzinflating (อาจเป็นข้อผิดพลาดการตั้งค่า HTTPS ตรวจสอบการกำหนดค่า Google SSO ของคุณ): {$a}';
$string['googsamldiag'] = 'Google SAML Diagnostics';
$string['notadminnoperm'] = 'คุณไม่ใช่ผู้ดูแลระบบเว็บไซต์ คุณไม่ได้รับอนุญาตให้ดูข้อมูลนี้';
$string['gdatanotconfig'] = 'ไม่ได้ตั้งค่าตารางการกำหนดค่า GData';
$string['googlesamlconfigdata'] = 'ข้อมูลการกำหนดค่า Google SAML';
$string['gsamlconfignotset'] = 'ยังไม่ได้ตั้งค่า Google SAML';
$string['gdataconfignotset'] = 'ไม่ได้ตั้งค่าตารางกำหนด GData';
$string['gdataconfig'] = 'การกำหนดค่า GData';
$string['gmailconfig'] = 'การกำหนดค่า Gmail';
$string['componentinstallcheck'] = 'ตรวจสอบการติดตั้งส่วนประกอบล่วงหน้า';
$string['gdatanotinstalled'] = 'ไม่ได้ติดตั้งบล็อก GData\\n';
$string['gappsblockinstalled'] = 'ติดตั้งบล็อก GApps แล้ว\\n';
$string['gmailblocknotinstalled'] = 'ไม่ได้ติดตั้งบล็อก Gmail';
$string['gmailblockinstalled'] = 'ติดตั้งบล็อก Gmail แล้ว\\n';
$string['gdataapitestresults'] = 'ผลการทดสอบ GData API';
$string['trytoinitgdataconnection'] = 'กำลังพยายามเริ่มต้นการเชื่อมต่อ GData กับ Google<br/>';
$string['gsamlsuccess'] = 'ความสำเร็จ';
$string['gmailtestresults'] = 'ผลการทดสอบ Gmail';
$string['gmailtestwillnotrun'] = 'การทดสอบ Gmail จะไม่ทำงานเว้นแต่ว่า Moodle จะอยู่ในโหมด DEBUG_DEVELOPER';
$string['obtainemailfeed'] = 'กำลังรับฟีดอีเมลสำหรับชื่อผู้ใช้งาน:';
$string['currfileupload'] = 'ไฟล์ปัจจุบัน:';
$string['nonestr'] = 'ไม่มี';
$string['privatekeystr'] = 'คีย์ส่วนตัว';
$string['certificatestr'] = 'ใบรับรอง';
$string['statustab'] = 'สถานะ';
$string['logstab'] = 'บันทึก SAML';
$string['ssoteststab'] = 'การทดสอบ การลงชื่อเข้าใช้ระบบแบบครั้งเดียว';
$string['docstab'] = 'เอกสาร';
$string['id'] = 'ID';
$string['time'] = 'เวลา';
$string['userid'] = 'ID ผู้ใช้งาน';
$string['ip'] = 'ที่อยู่ IP';
$string['course'] = 'รายวิชา';
$string['module'] = 'โมดูล';
$string['cmid'] = 'CMID';
$string['action'] = 'การดำเนินการ';
$string['url'] = 'URL';
$string['info'] = 'ข้อมูล';
$string['config_gsaml'] = 'กำหนดค่า Google SAML';
$string['config_gsaml_help'] = '<h2>ตั้งค่าให้เสร็จสมบูรณ์</h2>

<p>การตั้งค่าการรวม Google ไปที่ Moodle แบบสมบูรณ์จำเป็นต้องมีการปรับตั้งค่าเล็กน้อย โดยไฟล์ช่วยเหลือนี้
จะนำทางคุณให้ผ่านกระบวนการส่วนมากในการรับปลั๊กอินการรับรองความถูกต้องของ Google ที่กำหนดค่า ตลอดจนเตรียมพร้อมบล็อก Gdata และบล็อก Gmail</p>

<h4>สารบัญ:</h4>
<ul>
<li><a href="#pre">เงื่อนไขเบื้องต้น</a></li>
<li><a href="#status">ขั้นตอน</a></li>
<li><a href="#expect">ผลลัพธ์ที่คาดหวัง</a></li>
<li><a href="#consider">ข้อควรพิจารณา</a></li>
</ul>

<h4><a name="status" href="#status">สถานะแอป Google</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">Preconditions/assumptions</a></h4>
<p>
<ol>
<li>ติดตั้งรหัส GSAML, GAccess, Gmail, GData แล้ว</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li> <li>blocks/mgadget (ไม่บังคับตั้งแต่เบต้า)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">ขั้นตอน</a></h4>
<ol>
<li>เข้าสู่ระบบ Moodle ในฐานะผู้ดูแลระบบ</li>
<li>คลิกที่ <b>การแจ้งเตือน</b> เพื่ออัปเดตตารางบล็อก</li> <li>เปิดใช้งาน <b>ปลั๊กอินการรับรองความถูกต้องของ Google</b>จากหน้าผู้ดูแลระบบปลั๊กอินการจัดการ</li>
<li>ตอนนี้เลือก การรับรองความถูกต้องผู้ใช้งาน ไปที่<b>การรับรองความถูกต้องของ Google </b> ซึ่งจะมีทิศทางบนหน้าให้ติดตาม</li>
<li>ป้อนโดเมนหน้าพันธมิตรของ Google ของคุณ</li>
<li>อัปโหลดใบรับรอง (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้าง <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสาร Google นี้เกี่ยวกับการสร้างคีย์</a> )</li>
<li>อัปโหลดคีย์ส่วนตัว (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้างนี้ กรุณาไปที่ <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสาร Google เกี่ยวกับการสร้างคีย์</a>)</li>
<li>คลิก บันทึก</li>
<li>ปฏิบัติตามทิศทางสำหรับการเพิ่ม URL ที่เหมาะสมไปที่หน้า Google SSO</li>
<li>คลิกกล่องกาเครื่องหมายบนเว็บไซต์ Google เพื่อเปิดใช้งาน SSO</li>
<li>ตรวจสอบให้แน่ใจว่าบนเว็บไซต์ Google ได้เปิดใช้งาน การเตรียมใช้งาน API หรือไม่มีผู้ใช้งานที่จะอัปเดต</li>
<li>ตรวจสอบให้แน่ใจว่าบนเว็บไซต์ Google ได้เปิดใช้งาน การเตรียมใช้งาน API</li>
<li>ที่ด้านข้างของ Google คุณอาจต้องขอบัญชีผู้ใช้งานเพิ่มเติม</li>
<li>กลับไปที่หน้าหลักของ Moodle\'</li>
<li>คลิก แก้ไข</li>
<li>เพิ่มบล็อก GAccess, Gmail และ GData ไปที่หน้า</li>
<li>คลิก <b>การตั้งค่า</b> ในบล็อก <b>แอป Google</b> กรอกข้อมูลการกำหนดค่า</li>
<li>คลิกที่ ลิงก์สถานะ เพื่อยืนยันว่าบล็อกแอป Google ของคุณถูกตั้งค่าอย่างเหมาะสม</li>
<li>ไปที่เว็บไซต์ผู้ดูแลระบบ &gt; ความปลอดภัย &gt; นโยบายของเว็บไซต์</li>
<li>ตรวจสอบนโยบายรหัสผ่าน</li>
<li>ตั้งรหัสผ่านที่มีความยาว 6 ตัวหรือมากกว่า (มีความจำเป็นสำหรับนโยบายรหัสผ่านของ Google\'s )</li>
<li>ในบล็อก GData คุณต้องเพิ่มผู้ใช้งานเพื่อประสานข้อมูล เพื่อทำเช่นนี้โดยการคลิกที่ ลิงก์เพิ่มผู้ใช้งานเพื่อประสานข้อมูลใน <b>บล็อกแอป Google </b>ซึ่งจะช่วยให้เห็นผลลัพธ์หากคุณตั้งค่า          บล็อก GData cron ไปที่ 1 นาที</li>
<li>เพื่ออัปโหลดผู้ใช้งาน Moodle เหล่านี้ไปใน Google คุณอาจให้ cron ดำเนินการด้วยตัวเองโดยไปที่ admin/cron.php ผลลัพธ์สำหรับการประสานข้อมูลควรปรากฏในการอ่านออกเสียง
<b>โปรดทราบ เนื่องจากการประสานข้อมูลเบต้าผู้ใช้งาน Moodle กับ Google นี้อาจใช้<em>เวลา</em>นาน</b></li>
</ol>

<h4><a name="pre" href="#expect">ผลลัพธ์ที่คาดหวัง</a></h4> <ul class="alternate" type="square">
<li>คลิกที่ลิงก์บริการ Google ใด ๆ หรือไปที่บริการจากหน้าพันธมิตรของ Google ซึ่งจะ
รับรองความถูกต้องกับ Moodle</li>
<li>ผู้ใช้งานจะได้เข้าสู่ระบบ Moodle เช่นเดียวกับบริการพันธมิตรของ Google</li>
<li>ดู <b>หน้าการวินิจฉัย</b> ในการตั้งค่า GSAML สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการตั้งค่าของคุณ</li>
</ul>


<h4><a name="pre" href="#consider">ข้อควรพิจารณา (ตามเวอร์ชันของเบต้า)</a></h4>
<ul class="alternate" type="square">
<li>อาจไม่พบฟีดของ Gmail ซึ่งอาจเป็นเพราะว่ารหัสผ่านผู้ใช้งานไม่ตรงกับรหัสผ่านผู้ใช้งานของ  Google ซึ่งจะไม่เป็นปัญหา
ในอนาคต สำหรับตอนนี้โปรดตรวจสอบว่าการประสานข้อมูลผู้ใช้กับบล็อกแอป Google โดยอีเมลจะอัปเดต
เมื่อเข้าสู่ระบบ ในอนาคตข้อความที่ไม่ได้อ่านจะอัปเดตตามเวลาจริง</li>

<li>ตำแหน่งของปลั๊กอินการรับรองความถูกต้องของ Google ในลำดับการรับรองความถูกต้องนั้นมีความสำคัญ
เนื่องจากขณะนี้จำเป็นต้องเขียนทับประเภทการรับรองความถูกต้องของผู้ใช้งานเมื่อผู้ใช้งาน Moodle เปลี่ยนรหัสผ่าน
พฤติกรรมเช่นนี้อาจมีผลต่อผู้ใช้งาน MNet ซึ่งยังไม่พบทางออกของปัญหานี้users</li>

</ul>

</div>';
$string['diagnostics'] = 'การวินิจฉัย';
$string['diagnostics_help'] = '<h2>การวินิจฉัยแบบบูรณาการของ Google </h2>
<p>หน้าวินิจฉัยจะเปิดเผยข้อมูลเกี่ยวกับสถานะการเชื่อมต่อของ Gmail, GData และ SAML มีเพียงผู้ดูแลระบบเท่านั้นได้รับสิทธิ์ในการดูข้อมูลการวินิจฉัย</p>

<h3>สารบัญ:</h3>
<ul>
<li><a href="#setup">ตั้งค่าข้อมูลตาราง</a></li>
<li><a href="#gdata">สถานะการเชื่อมต่อ GData</a></li>
<li><a href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></li>
<li><a href="#saml">การทดสอบสถานะ SAML SSO</a></li>
</ul>

<h3><a name="setup" href="#setup">ข้อมูลตารางการปรับตั้งค่า</a></h3>
<div class="indent">
ตารางเหล่านี้แทนการปรับตั้งค่าปัจจุบันของการรวม Moodle ไปที่ Google โปรดตรวจสอบว่าได้กำหนดค่าทั้งหมดแล้ว
</div>

<h3><a name="gdata" href="#gdata">การเชื่อมต่อ GData </a></h3>
<div class="indent">
บล็อก GData อยู่ในโฟลเดอร์บล็อกซึ่งประกอบด้วยไลบรารีสำหรับบริการต่าง ๆ ของ Google โดยคุณต้องยืนยัน
ว่าสามารถเชื่อมต่อกับบริการของ Google คุณอาจต้องปรับค่าบนหน้าการตั้งค่าบล็อก GData </div>

<h3><a name="gmail" href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></h3>
<div class="indent">
ณ ตอนนี้บล็อก Gmail จะรีเฟรชเฉพาะข้อความที่ผู้ใช้ไม่ได้อ่านเมื่อเข้าสู่ระบบ คุณจะ
สามารถดำเนินการทดสอบได้ที่นี่เท่านั้นหากเปิดใช้งานการแก้จุดบกพร่อง ซึ่งสนับสนุนสำหรับการดูข้อความที่ไม่ได้อ่านแบบเวลาจริงที่กำลังเข้ามา

</div>

<h3><a name="saml" href="#saml">การทดสอบสถานะ SAML SSO</a></h3>
<div class="indent">
การทดสอบสถานะ SAML เป็นการตรวจสอบที่เป็นอิสระของกระบวนการอนุญาต SSO ซึ่งยังไม่ได้ใช้งาน <!--แต่ด้วยการเปิดการไขจุดบกพร่อง และกำหนดไปที่ DEBUG_DEVELOPER ข้อมูลความผิดพลาดจะถูกเปิดเผยเมื่อเข้าสู่ระบบ --> </div>';
$string['keys'] = 'คีย์';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>คีย์ Google SSO</h3>
<p>ทั้ง Moodle และ Google จะต้องสามารถอนุญาตการเข้าถึงแหล่งข้อมูลที่สำคัญ
ได้อย่างปลอดภัย ผู้ดูแลระบบจะต้องสร้าง<b>ใบรับรองการตรวจสอบยืนยัน</b> และอัปโหลดใบรับรอง X.509 ที่ฟอร์แมตแล้วให้กับ Google พร้อมคีย์สาธารณะแบบฝัง
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสารของ Google เกี่ยวกับการสร้างคีย์</a>
โปรดทราบว่าบริการ SAML Moodle SSO ใช้เพียง<b>คีย์ RSA</b>

</p>
</span>

<!--
<h4><a name="pem" href="#status">สถานะของ Google Apps</a></h4>
<div class="indent">

</div>

<h4><a name="crt" href="#status">ใบรับรอง</a></h4> <div class="indent">
-->
</div>';
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>แกดเจ็ต Google ไปที่ Moodle</h2>

<p>แกดเจ็ตนี้ช่วยไฟล์ให้ภาพรวมอย่างย่อของแกดเจ็ต Google สำหรับเว็บไซต์ Moodle ของคุณ</p>

<h3><a name="status" href="#status">แกดเจ็ต Moodle</a></h3>
<div class="indent">
<em>แกดเจ็ต Moodle</em>เป็นแกดเจ็ตที่คุณสามารถฝังไว้บนหน้าเริ่มต้นของพันธมิตรของ Google ของคุณ

</div>


<p><b>ขั้นตอนในการติดตั้งอยู่ที่หน้าเริ่มต้นของผู้ใช้/b></p>
<ol>
<li>เข้าสู่ระบบ Moodle</li>
<li>คลิกที่ <b>หน้าพันธมิตรของ Google</b>ใน<b>การเข้าถึงบริการของ Google</b> บล็อก</li>
<li>คลิกที่ <b>ลิงก์</b>เพิ่มสิ่งต่าง ๆ</li>
<li>คลิกที่ <b>เพิ่ม url ของฉัน</b></li>
<li>ป้อน URL moodlegadget</li>
<li>URL เป็นแบบนี้ เช่น <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
<li> ซึ่งจะพบในการตั้งค่า<b>การรับรองความถูกต้องของ Google</b>จากบล็อกผู้ดูแลระบบ</li>
<li>หลังจากที่คุณคัดลอกไปที่ฟิลด์ url คลิกที่ <b>เพิ่ม</b></li>
<li>คลิกที่ <b>กลับไปที่หน้าแรกของเว็บไซต์</b></li>
<li>ตอนนี้คุณจะเห็นบล็อกที่มีลิงก์ไปที่เว็บไซต์ Moodle ของคุณ</li>
</ol>



<h3><a name="status" href="#status">การพิจารณา (ตามเบต้าที่ปล่อย)</a></h3>
<div class="indent">
นี่เป็นต้นแบบเบต้าสำหรับแกดเจ็ต Google Moodle นี้ ซึ่งอาจมีประโยชน์เพิ่มเติมในอนาคต
ตอนนี้มีข้อบกพร่องที่ทราบแล้วเกี่ยวกับแกดเจ็ตที่ไม่ได้อัปเดตทันทีเมื่อติดตั้ง
นักพัฒนากำลังตรวจสอบอยู่
</div>';
$string['event_user_authenticated'] = 'ยืนยันตัวตนผู้ใช้งานแล้ว';
