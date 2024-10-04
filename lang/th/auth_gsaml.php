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
$string['gadgetinfostr'] = 'ใช้ URL ต่อไปนี้เพื่อเพิ่มแกดเจ็ท Moodle ลงในหน้าเริ่มต้นของ Google ของคุณ<br/><b>{$a->wwwroot}/auth/gsaml/moodlegadget.php</b>';
$string['lnktogoogsettings'] = 'เชื่อมโยงไปยังการตั้งค่า Google';
$string['nodomainyet'] = 'ยังไม่มีการตั้งค่าโดเมน';
$string['gsamlsetuptableinfo'] = '<ol><li>กำหนด <b>ชื่อโดเมน</b> เป็นชื่อโดเมนบริการ Google จากนั้นคลิก <b>บันทึกการเปลี่ยนแปลง</b><br/><br/></li>
<li>ในหน้าต่างใหม่ ให้เปิดหน้า Google Apps Control Panel ในฐานะผู้ดูแลระบบ (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>คลิกแท็บ <b>เครื่องมือขั้นสูง</b><br/><br/></li>
<li>คลิกลิงค์ <b>ตั้งค่าการลงชื่อเข้าใช้แบบครั้งเดียว (SSO)</b> ถัดจาก การตรวจสอบความถูกต้อง<br/><br/></li>
<li>อันดับแรก เลือกกล่อง <b>เปิดใช้งานการลงชื่อเข้าใช้แบบครั้งเดียว</b><br/><br/></li>
<li>ในขั้นตอนนี้ แทรก URL นี้ลงในฟิลด์ข้อความ <b>URL หน้าการลงชื่อเข้าใช้</b><br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>แทรก URL นี้ลงในฟิลด์ข้อความ <b>URL หน้าการออกจากระบบ</b><br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>แทรก URL นี้ลงในฟิลด์ข้อความ <b>URL การเปลี่ยนรหัสผ่าน</b><br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>สร้างและอัปโหลด <b>ใบรับรองการตรวจสอบความถูกต้องไปยัง Google (ใบรับรอง X.509 ที่มีคีย์สาธารณะ)</b><br/><br/></li>
<li>อัปโหลดคีย์ส่วนบุคคลและใบรับรอไปยัง Moodle เช่นกัน จากนั้นคลิก <b>บันทึกการเปลี่ยนแปลง</b></b><br/></li></ol>';
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
$string['contextinstanceid'] = 'ID อินสแตนซ์';
$string['courseid'] = 'ID รายวิชา';
$string['eventname'] = 'ชื่อเหตุการณ์';
$string['otherlog'] = 'อื่นๆ';
$string['useraccesedgservice'] = 'ผู้ใช้งานเข้าสู่ gservice เป็นครั้งแรก';
$string['userneedsredirect'] = 'ผู้ใช้มีคำขอ saml แต่ต้องการเข้าสู่ระบบ/เปลี่ยนเส้นทาง';
$string['userislogged'] = 'ผู้ใช้เข้าสู่ระบบแล้วและมีคำขอ samlrequest';
$string['login'] = 'เข้าสู่ระบบ';
$string['config_gsaml'] = 'กำหนดค่า Google SAML';
$string['config_gsaml_help'] = '<h2>การตั้งค่าเสร็จสมบูรณ์</h2>

<p>การจัดเตรียมการผสานรวม Google กับ Moodle อย่างเต็มรูปแบบจำเป็นต้องมีการกำหนดค่าเล็กน้อย ไฟล์วิธีใช้นี้จะ
แนะนำคุณผ่านกระบวนการส่วนใหญ่ในการกำหนดค่าปลั๊กอิน Google Authentication รวมถึงการเตรียมพร้อมบล็อค GData
และบล็อค Gmail</p>

<h4>สารบัญ:</h4>
<ul>
<li><a href="#pre">เงื่อนไขเบื้องต้น</a></li>
<li><a href="#status">ขั้นตอน</a></li>
<li><a href="#expect">ผลที่คาด</a></li>
<li><a href="#consider">การพิจารณา</a></li>
</ul>

<h4><a name="status" href="#status">สถานะ Google Apps</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">เงื่อนไขเบื้องต้น/สมมติฐาน</a></h4>
<p>
<ol>
<li>รหัส GSAML, GAccess, Gmail, GData ได้รับการติดตั้งแล้ว</li>
<ul>
<li>auth/gsaml</li>
<li>blocks/gmail</li>
<li>blocks/gdata</li>
<li>blocks/gaccess</li>
<li>blocks/mgadget (ไม่บังคับสำหรับเวอร์ชันเบต้า)</li>
</ul>
</ol>
</p>

<h4><a name="pre" href="#steps">ขั้นตอน</a></h4>
<ol>
<li>เข้าสู่ระบบ Moodle ในฐานะผู้ดูแลระบบ</li>
<li>คลิก <b>การแจ้งเตือน</b> เพื่ออัปเดตตารางบล็อค</li>
<li>เปิดใช้งานปลั๊กอิน <b>Google Authentication</b> จากหน้า จัดการปลั๊กอิน ของผู้ดูแลระบบ</li>
<li>ในขั้นตอนนี้ เลือก การตรวจสอบความถูกต้องของผู้ใช้ ไปที่ <b>Google Authentication</b> จะมีคำแนะนำให้ดำเนินการตามบนหน้าดังกล่าว</li>
<li>ป้อนโดเมนของหน้าพาร์ทเนอร์ Google ของคุณ</li>
<li>อัปโหลดใบรับรอง (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้างใบรับรองนี้ <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;เอกสารของ Google เกี่ยวกับการสร้างคีย์</a>)</li>
<li>อัปโหลดคีย์ส่วนบุคคล (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้างคีย์นี้ โปรดไปที่ <a
href="http://code.google.com/apis/apps/articles/sso-keygen.html"&gt;เอกสารของ Google เกี่ยวกับการสร้างคีย์</a>)</li>
<li>คลิก บันทึก</li>
<li>ทำตามคำแนะนำสำหรับการเพิ่ม URL ที่เหมาะสมไปยังหน้า Google SSO</li>
<li>คลิกกล่องทำเครื่องหมายบนไซต์ Google เพื่อเปิดใช้งาน SSO</li>
<li>บนไซต์ Google โปรดเปิดใช้งาน API การให้บริการ ไม่เช่นนั้นจะไม่มีผู้ใช้ได้รับการอัปเดต</li>
<li>บนไซต์ Google ตรวจสอบให้แน่ใจว่าได้เปิดใช้งาน API การให้บริการ</li>
<li>บนไซต์ Google คุณอาจจำเป็นต้องส่งคำขอบัญชีผู้ใช้เพิ่มเติม</li>
<li>กลับไปยังหน้าหลักของ Moodle</li>
<li>คลิก แก้ไข</li>
<li>เพิ่มบล็อก GAccess, Gmail และ GData ลงในหน้า</li>
<li>คลิก <b>การตั้งค่า</b> ในบล็อก <b>Google Apps</b> กรอกข้อมูลการกำหนดค่า</li>
<li>คลิกลิงค์สถานะเพื่อยืนยันว่าบล็อค Google Apps ของคุณได้รับการจัดเตรียมอย่างเหมาะสมแล้ว</li>
<li>ไปที่ การดูแลระบบไซต์ &gt; ความปลอดภัย &gt; นโยบายของไซต์</li>
<li>ตรวจสอบนโยบายรหัสผ่าน</li>
<li>กำหนดความยาวของรหัสผ่านเป็น 6 หรือมากกว่า (จำเป็นสำหรับนโยบายรหัสผ่านของ Google)</li>
<li>ในบล็อก GData ที่คุณต้องการเพิ่มผู้ใช้งานเพื่อซิงค์ ดำเนินขั้นตอนนี้ด้วยการคลิกลิงก์เพิ่มผู้ใช้งานเพื่อซิงค์ใน บล็อก <b>Google
Apps</b> ซึ่งจะมีประโยชน์ในการมองเห็นผลลัพธ์หากคุณตั้งค่า          cron ของบล็อก GData เป็น 1 นาที</li>
<li>เพื่ออัปโหลดผู้ใช้ Moodle เหล่านี้เข้าสู่ Google คุณอาจเรียกใช้ cron ด้วยตนเองโดยการไปที่ admin/cron.php ผลลัพธ์ของการซิงค์จะปรากฏในรายการผลลัพธ์
<b>โปรดระวัง เนื่องจากในเบต้านี้การซิงค์ผู้ใช้ Moodle กับ Google อาจใช้เวลา<em>นาน</em></b></li>
</ol>

<h4><a name="pre" href="#expect">ผลที่คาด</a></h4>
<ul class="alternate" type="square">
<li>การคลิกลิงค์บริการ Google ใดๆ หรือการไปที่บริการต่างๆ จากหน้า Google Partner จะเป็นการ
ตรวจสอบความถูกต้องของ Moodle</li>
<li>ผู้ใช้ควรเข้าสู่ระบบ Moodle เช่นเดียวกับบริการ Google Partner</li>
<li>โปรดดู <b>หน้าการวินิจฉัย</b> ในการตั้งค่า GSAML สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการจัดเตรียมของคุณ</li>
</ul>


<h4><a name="pre" href="#consider">ข้อควรพิจารณา (สำหรับเวอร์ชันเบต้า)</a></h4>
<ul class="alternate" type="square">
<li>อาจไม่พบฟีด Gmail ซึ่งอาจเป็นเพราะรหัสผ่านของผู้ใช้งานไม่ตรงกับรหัสผ่านของผู้ใช้งาน Google
ในอนาคต ปัญหานี้จะหมดไป สำหรับปัจจุบัน โปรดอย่าลืมซิงค์ผู้ใช้งานกับบล็อก Google Apps อีเมลจะอัปเดต
เมื่อเข้าสู่ระบบ ในอนาคต ข้อความที่ยังไม่ได้อ่านจะอัปเดตในแบบเรียลไทม์</li>

<li>ตำแหน่งของปลั๊กอิน Google Authentication ในลำดับการตรวจสอบความถูกต้องเป็นสิ่งสำคัญ
สำหรับในปัจจุบัน ปลั๊กอินดังกล่าวจำเป็นต้องแทนที่ประเภทการตรวจสอบความถูกต้องของผู้ใช้เมื่อผู้ใช้ Moodle เปลี่ยนรหัสผ่าน
การกระทำนี้อาจส่งผลกระทบต่อผู้ใช้งาน MNet ยังไม่พบวิธีแก้ไขปัญหานี้</li>

</ul>

</div>';
$string['diagnostics'] = 'การวินิจฉัย';
$string['diagnostics_help'] = '<h2>Google Integration Diagnostics</h2>
<p>หน้าการวินิจฉัยจะเปิดเผยข้อมูลเกี่ยวกับสถานะการเชื่อมต่อ  Gmail, Gdata และ SAML
เฉพาะผู้ดูแลระบบเท่านั้นที่สามารถดูข้อมูลการวินิจฉัยได้</p>

<h3>สารบัญ:</h3>
<ul>
<li><a href="#setup">ตั้งค่าข้อมูลตาราง</a></li>
<li><a href="#gdata">สถานะการเชื่อมต่อ GData</a></li>
<li><a href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></li>
<li><a href="#saml">การทดสอบสถานะ SAML SSO</a></li>
</ul>

<h3><a name="setup" href="#setup">ข้อมูลตารางการกำหนดค่า</a></h3>
<div class="indent">
ตารางเหล่านี้แสดงถึงการกำหนดค่าปัจจุบันของการผสานรวม Moodle เข้ากับ Google ตรวจสอบให้แน่ใจว่าได้กำหนดค่าทั้งหมดแล้ว
</div>

<h3><a name="gdata" href="#gdata">การเชื่อมต่อ GData</a></h3>
<div class="indent">
บล็อก GData ที่อยู่ในโฟลเดอร์บล็อกประกอบด้วยไลบรารีสำหรับบริการ Google มากมาย คุณต้องยืนยัน
ว่าบล็อกดังกล่าวสามารถเชื่อมต่อกับบริการ Google ได้ คุณอาจจำเป็นต้องปรับค่าต่างๆ บนหน้าการตั้งค่าบล็อก GData
</div>

<h3><a name="gmail" href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></h3>
<div class="indent">
ในขณะนี้ บล็อก Gmail จะรีเฟรชข้อความที่ยังไม่ได้อ่านของผู้ใช้งานเมื่อมีการเข้าสู่ระบบเท่านั้น คุณจะสามารถเรียกใช้
การทดสอบในที่นี้ได้ก็ต่อเมื่อการแก้ไขปัญหาเปิดอยู่เท่านั้น การสนับสนุนสำหรับการดูข้อความที่ยังไม่ได้อ่านในแบบเรียลไทม์กำลังจะมาถึง
</div>

<h3><a name="saml" href="#saml">การทดสอบสถานะ SAML SSO</a></h3>
<div class="indent">
การทดสอบสถานะ SAML เป็นการตรวจสอบอิสระของกระบวนการการตรวจสอบสิทธิ์ SSO กระบวนการนี้ยังไม่ได้ถูกนำมาใช้
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'คีย์';
$string['keys_help'] = '<span style="font-size: 1.2em">
<h3>คีย์ SSO ของ Google</h3>
<p>ทั้ง Moodle และ Google ต้องสามารถตรวจสอบความถูกต้องของการเข้าถึงทรัพยากรสำคัญๆ อย่างปลอดภัยได้
ผู้ดูแลระบบต้องสร้าง <b>ใบรับรองการตรวจสอบความถูกต้อง</b> และอัปโหลดใบรับรองที่จัดรูปแบบ X.509 ไปยัง Google พร้อมคีย์สาธารณะ
แบบฝัง
<a href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสารของ Google เกี่ยวกับการสร้างคีย์</a>
โปรดทราบว่าบริการ SAML Moodle SSO ใช้เฉพาะ<b>คีย์ RSA</b> เท่านั้น
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
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>แกดเจ็ท Google ไปยัง Moodle</h2>

<p>บทนี้จะให้ภาพรวมคร่าวๆ เกี่ยวกับแกดเจ็ท Google สำหรับไซต์ Moodle ของคุณ</p>

<h3><a name="status" href="#status">Moodle Gadget</a></h3>
<div class="indent">
<em>Moodle Gadget</em> เป็นแกดเจ็ทที่คุณสามารถฝังลงบนหน้าเริ่มต้นของ Google Partner ของคุณได้
</div>


<p><b>ขั้นตอนการติดตั้งบนหน้าเริ่มต้นของผู้ใช้</b></p>
<ol>
<li>เข้าสู่ระบบ Moodle</li>
<li>คลิกที่ <b>หน้า Google Partner</b> ในบล็อค <b>Google Services Access</b></li>
<li>คลิกลิงค์ <b>เพิ่มส่วนประกอบ</b></li>
<li>คลิกที่ <b>เพิ่ม URL ของฉัน</b></li>
<li>ป้อน URL ของแกดเจ็ท Moodle</li>
<li>URL มีลักษณะคือ<br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php</b>
<li>ซึ่งสามารถพบได้ในการตั้งค่า <b>Google Authentication</b> จากบล็อคผู้ดูแลระบบ</li>
<li>หลังจากที่คุณคัดลอก url ไปยังฟิลด์ url ให้คลิก <b>เพิ่ม</b></li>
<li>คลิก <b>กลับไปหน้าแรก</b></li>
<li>ในขั้นตอนนี้ คุณจะเห็นบล็อคที่มีลิงค์ไปยังไซต์ Moodle ของคุณ</li>
</ol>



<h3><a name="status" href="#status">ข้อควรพิจารณา (สำหรับรุ่นเบต้า)</a></h3>
<div class="indent">
นี่คือต้นแบบเบต้าสำหรับแกดเจ็ท Google ไปยัง Moodle นี้ ในอนาคต อาจมีประโยชน์มากขึ้นอย่างมาก
ขณะนี้มีบั๊กที่ทราบเกี่ยวกับการที่แกดเจ็ทไม่อัปเดตทันทีเมื่อติดตั้ง
นักพัฒนากำลังแก้ไขปัญหานี้
</div>';
$string['event_user_authenticated'] = 'ยืนยันตัวตนผู้ใช้งานแล้ว';
