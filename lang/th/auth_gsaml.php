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
 * @copyright  Copyright (c) 2019 Blackboard Inc. (http://www.blackboard.com)
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
$string['setupinstrctstr'] = 'ตั้งค่าคำแนะนำ ';
$string['mgadgetstr'] = 'Moodle Gadget ';
$string['mgadgethelp'] = 'ความช่วยเหลือของ Moodle Gadget';
$string['googdiag'] = 'Google Integration Diagnostics';
$string['googdebugopts'] = 'เมื่อเสร็จสิ้นการกำหนดค่าคุณสามารถเข้าสู่ระบบอีกครั้งและเยี่ยมชม ';
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
$string['gsamlsetuptableinfo'] = '<ol><li>ตั้งค่า <b>ชื่อโดเมน</b> เป็นชื่อโดเมนบริการของ Google แล้วคลิก <b>บันทึกการเปลี่ยนแปลง</b><br/><br/></li>
<li>ในหน้าต่างใหม่ ให้เปิดหน้าแผงควบคุม Google Apps ในฐานะผู้ดูแลระบบ (<a href="https://www.google.com/a/{$a->domainname}">{$a->googsettings}</a>)<br/><br/></li>
<li>คลิกที่แท็บ <b>เครื่องมือขั้นสูง</b><br/><br/></li>
<li>คลิกที่ลิงก์ <b>ติดตั้งการลงชื่อเข้าใช้ระบบแบบครั้งเดียว (SSO)</b> ที่อยู่ถัดจากการยืนยันตัวตน<br/><br/></li>
<li>ขั้นตอนแรก ให้ทำเครื่องหมายที่กล่อง <b>เปิดใช้งานการลงชื่อเข้าใช้ครั้งเดียว</b><br/><br/></li>
<li>จากนั้น ใส่ URL นี้ไปยังฟิลด์ข้อความ <b>URL หน้าเข้าสู่ระบบ</b><br/><b>{$a->wwwroot}/login/index.php</b><br/><br/></li>
<li>ใส่ URL นี้ไปยังฟิลด์ข้อความ <b>URL หน้าออกจากระบบ</b><br/><b>{$a->wwwroot}/login/logout.php</b><br/><br/></li>
<li>ใส่ URL นี้ไปยังฟิลด์ข้อความ <b>URL เปลี่ยนรหัสผ่าน</b><br/><b>{$a->wwwroot}/login/change_password.php</b><br/><br/></li>
<li>สร้างและอัปโหลด <b>ใบรับรองการตรวจสอบยืนยันไปยัง Google (ใบรับรอง X.509 ที่มีคีย์สาธารณะ)</b><br/><br/></li>
<li>อัปโหลดคีย์สาธารณะและใบรับรองไปยัง Moodle ด้วย แล้วคลิก <b>บันทึกการเปลี่ยนแปลง</b></b><br/></li></ol>';
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
$string['obtainemailfeed'] = 'กำลังรับฟีดอีเมลสำหรับชื่อผู้ใช้งาน: ';
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
$string['cmid'] = 'cmid';
$string['action'] = 'การดำเนินการ';
$string['url'] = 'URL';
$string['info'] = 'ข้อมูล';
$string['config_gsaml'] = 'กำหนดค่า Google SAML';
$string['config_gsaml_help'] = '<h2>การตั้งค่าให้เสร็จสมบูรณ์</h2>

<p>การตั้งค่า Google แบบเต็มรูปแบบให้เป็น Moodle จำเป็นต้องมีการกำหนดค่าเล็กน้อย ซึ่งนี่อาจจะช่วยให้ไฟล์นำทางคุณผ่านกระบวนการเพื่อกำหนดค่าปลั๊กอิน การยืนยันตัวตนของ Google รวมถึงเตรียมบล็อก GData และบล็อก Gmail ให้พร้อม</p>

<h4>สารบัญ:</h4>
<ul>
  <li><a href="#pre">เงื่อนไขเบื้องต้น</a></li>
  <li><a href="#status">ขั้นตอน</a></li>
  <li><a href="#expect">ผลที่คาดว่าจะได้รับ</a></li>
  <li><a href="#consider">การพิจารณา</a></li>
</ul>

<h4><a name="status" href="#status">สถานะแอป Google</a></h4>
<div class="indent">


<h4><a name="pre" href="#status">เงื่อนไขเบื้องต้น/การสันนิษฐาน</a></h4>
<p>
<ol>
  <li>ติดตั้งรหัส GSAML, GAccess, Gmail แล้ว</li>
  <ul>
  <li>auth/gsaml</li>
  <li>blocks/gmail</li>
  <li>blocks/gdata</li>
  <li>blocks/gaccess</li>
  <li>blocks/mgadget (ตัวเลือกจาก beta)</li>
  </ul>
</ol>
</p>

<h4><a name="pre" href="#steps">ขั้นตอน</a></h4>
<ol>
  <li>เข้าสู่ระบบ Moodle ในฐานะผู้ดูแลระบบ</li>
  <li>คลิก <b>การแจ้งเตือน</b> เพื่ออัปเดตตารางบล็อก</li>
  <li>เปิดใช้งานปลั๊กอิน <b>การยืนยันตัวตนของ Google</b> จากหน้าผู้ดูแลระบบการจัดการปลั๊กอิน</li>
  <li>ถึงตอนนี้ให้เลือกตรวจสอบความถูกต้องของผู้ใช้งาน ไปที่ <b>การยืนยันตัวตนของ Google</b> ซึ่งจะมีคำแนะนำเกี่ยวกับขั้นตอนที่ควรปฏิบัติตามระบุอยู่บนหน้าข้อมูล</li>
  <li>ป้อนโดเมนหน้าพันธมิตรของ Google ของคุณ</li>
  <li>อัปโหลดใบรับรอง (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้างในส่วนนี้ <a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสารบน Google เกี่ยวกับการสร้างรหัส</a>)</li>
  <li>อัปโหลดรหัสส่วนตัว (สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการสร้างในส่วนนี้ ให้ไปที่<a
    href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสารบน Google เกี่ยวกับการสร้างรหัส</a>)</li>
  <li>คลิกบันทึก</li>
  <li>ปฏิบัติตามคำแนะนำในการเพิ่ม URL ที่ถูกต้องไปยังหน้า การลงชื่อเข้าใช้ระบบแบบครั้งเดียว ของ Google</li>
  <li>คลิกที่กล่องทำเครื่องหมายบนเว็บไซต์ Google เพื่อเปิดใช้งาน การลงชื่อเข้าใช้ระบบแบบครั้งเดียว</li>
  <li>บนเว็บไซต์ Google อย่าลืมเปิดใช้งานการจัดเตรียม API ไม่เช่นนั้นจะไม่มีการอัปเดตผู้ใช้งานใดๆ</li>
  <li>บนเว็บไซต์ Google อย่าลืมตรวจดูให้แน่ใจว่ามีการจัดเตรียม API แล้ว</li>
  <li>บนเว็บไซต์ Google คุณอาจจำเป็นต้องขอบัญชีผู้ใช้งานเพิ่มเติม</li>
  <li>กลับไปยังหน้าหลักของ Moodle</li>
  <li>คลิกแก้ไข</li>
  <li>เพิ่มบล็อก GAccess, Gmail และ GData ไปยังหน้าข้อมูล</li>
  <li>คลิก <b>การตั้งค่า</b> ในบล็อก <b>แอป Google</b> กรอกข้อมูลการกำหนดค่า</li>
  <li>คลิกลิงก์สถานะเพื่อยืนยันว่าบล็อกแอป Google ของคุณได้รับการตั้งค่าอย่างถูกต้องแล้ว</li>
  <li>ไปที่ ผู้ดูแลระบบเว็บไซต์ &gt; ความปลอดภัย &gt; นโยบายของเว็บไซต์</li>
  <li>ตรวจสอบนโยบายรหัสผ่าน</li>
  <li>ตั้งค่ารหัสผ่านที่มีตัวอักษรตั้งแต่ 6 ตัวอักษรขึ้นไป (จำเป็นต้องใช้เพื่อให้เป็นไปตามนโยบายรหัสผ่านของ Google)</li>
  <li>ในบล็อก GData คุณจำเป็นต้องเพิ่มผู้ใช้งานในการซิงก์ ดำเนินการนี้โดยการคลิกลิงก์เพิ่มผู้ใช้งานในการซิงก์ในบล็อก <b>แอป Google</b> จะช่วยให้คุณเห็นผลลัพธ์หากคุณตั้งค่าโครนบล็อก GData เป็น 1 นาที</li>
  <li>หากต้องการอัปโหลดผู้ใช้งาน Moodle ไปยัง Google คุณอาจต้องดำเนินการโครนด้วยตัวเองโดยไปที่ admin/cron.php ผลสำหรับการซิงก์ควรจะปรากฏในหน้าแสดงผลลัพธ์
  <b>ควรระมัดระวัง เนื่องจากการซิงก์ผู้ใช้งาน Moodle เข้ากับ Google อาจใช้เวลา<em>นานมาก</em></b></li>
</ol>

<h4><a name="pre" href="#expect">ผลที่คาดว่าจะได้รับ</a></h4>
<ul class="alternate" type="square">
  <li>การคลิกบนลิงก์บริการใดๆ ของ Google หรือไปที่หน้าบริการจากหน้าพันธมิตรของ Google จะเป็นการอนุมัติรับรองต่อ
 Moodle</li>
  <li>ผู้ใช้งานควรจะได้เข้าสู่ระบบใน Moodle รวมถึงบริการของพันธมิตรของ Google</li>
  <li>ดูที่ <b>หน้าการวินิจฉัย</b> ในการตั้งค่า GSAML เพื่อดูข้อมูลเพิ่มเติมเกี่ยวกับการตั้งค่าของคุณ</li>
</ul>


<h4><a name="pre" href="#consider">การพิจารณา (จากเวอร์ชัน BETA)</a></h4>
<ul class="alternate" type="square">
  <li>อาจไม่พบฟีด Gmail ซึ่งอาจเกิดจากการที่รหัสผ่านของผู้ใช้งานไม่ตรงกับรหัสผ่านผู้ใช้งานบน Google
  ในอนาคต สิ่งนี้จะไม่ใช่ปัญหา แต่ในปัจจุบันควรตรวจสอบให้แน่ใจว่าได้ซิงก์ผู้ใช้งานกับบล็อกแอป Google แล้ว จะมีการอัปเดตอีเมลในระหว่างการเข้าสู่ระบบ ในอนาคต ข้อความที่ยังไม่ได้เปิดอ่านควรมีการอัปเดตแบบเรียลไทม์</li>

  <li>ตำแหน่งของปลั๊กอินการตรวจสอบความถูกต้องของ Google ในลำดับการตรวจสอบความถูกต้องนั้นเป็นสิ่งสำคัญ เนื่องจากในเวลานี้ จำเป็นต้องมีการบันทึกแทนที่ประเภทการตรวจสอบความถูกต้องของผู้ใช้งานเมื่อผู้ใช้งาน Moodle เปลี่ยนรหัสผ่าน ซึ่งพฤติกรรมนี้อาจส่งผลต่อผู้ใช้งาน MNet ได้ และปัจจุบันก็ยังไม่พบทางแก้ปัญหานี้</li>
</ul>
</div>';
$string['diagnostics'] = 'การวินิจฉัย';
$string['diagnostics_help'] = '<h2>Google Integration Diagnostics</h2>
<p>หน้าการวินิจฉัยจะเปิดเผยข้อมูลเกี่ยวกับสถานะการเชื่อมต่อ Gmail, GData และ SAML
เฉพาะผู้ดูแลระบบเท่านั้นที่มีสิทธิ์ในการดูข้อมูลการวินิจฉัย</p>

<h3>สารบัญ:</h3>
<ul>
  <li><a href="#setup">ข้อมูลตารางการตั้งค่า</a></li>
  <li><a href="#gdata">สถานะการเชื่อมต่อ GData</a></li>
  <li><a href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></li>
  <li><a href="#saml">การทดสอบสถานะ การลงชื่อเข้าใช้ระบบแบบครั้งเดียว ของ SAML</a></li>
</ul>

<h3><a name="setup" href="#setup">ข้อมูลตารางการกำหนดค่า</a></h3>
<div class="indent">
  ตารางเหล่านี้แสดงถึงการกำหนดค่าปัจจุบันของ Moodle เป็น Google Integration ตรวจดูให้แน่ใจว่ามีการตั้งค่าทุกอย่างเรียบร้อยแล้ว
</div>

<h3><a name="gdata" href="#gdata">การเชื่อมต่อ GData</a></h3>
<div class="indent">
บล็อก GData ในโฟลเดอร์บล็อกประกอบด้วยคลังสำหรับชุดการบริการที่หลากหลายของ Google คุณจะต้องยืนยันว่าสามารถเชื่อมต่อกับ Google Services ได้ คุณอาจจำเป็นต้องปรับค่าในหน้าการตั้งค่าบล็อก GData
</div>

<h3><a name="gmail" href="#gmail">การทดสอบการเชื่อมต่อบล็อก Gmail</a></h3>
<div class="indent">
ในขณะนี้ บล็อก Gmail จะรีเฟรชข้อความที่ยังไม่ได้เปิดอ่านของผู้ใช้งานในระหว่างการเข้าสู่ระบบเท่านั้น คุณจะสามารถทำการทดสอบที่นี่ได้ต่อเมื่อมีการเปิดการดีบักเท่านั้น ตัวช่วยสำหรับการดูข้อความที่ยังไม่ได้เปิดอ่านแบบเรียลไทม์กำลังมีขึ้นในอีกไม่ช้า

</div>

<h3><a name="saml" href="#saml">การทดสอบสถานะ SSO ของ SAML</a></h3>
<div class="indent">
การทดสอบสถานะ SAML เป็นการตรวจสอบแบบอิสระของกระบวนการตรวจสอบความถูกต้องของ SSO ซึ่งยังไม่ได้มีการนำไปปรับใช้
<!--But with debugging turned on and set to DEBUG_DEVELOPER error information should be revealed upon login -->
</div>';
$string['keys'] = 'คีย์';
$string['keys_help'] = '<span style="font-size: 1.2em"><h3>คีย์ Google SSO</h3><p>ทั้ง Moodle และ Google จะต้องสามารถอนุญาตการเข้าถึงแหล่งข้อมูลที่สำคัญได้อย่างปลอดภัย ผู้ดูแลระบบจะต้องสร้าง<b>ใบรับรองการตรวจสอบยืนยัน</b> และอัปโหลดใบรับรอง X.509 ที่ฟอร์แมตแล้วให้กับ Google พร้อมคีย์สาธารณะแบบฝัง <a href="http://code.google.com/apis/apps/articles/sso-keygen.html">เอกสารของ Google เกี่ยวกับการสร้างคีย์</a> โปรดทราบว่าบริการ SAML Moodle SSO ใช้เพียง<b>คีย์ RSA</b> </p> </span> <!--
<h4> <a name="pem" href="#status">สถานะของ Google Apps</a> </h4> <div class="indent"> </div> <h4> <a name="crt" href="#status">ใบรับรอง</a></h4> <div class="indent"> --> </div>';
$string['mgadget'] = 'Moodle Gadget';
$string['mgadget_help'] = '<h2>จาก Google สู่ Moodle Gadget</h2>

<p>วิธีการจะช่วยให้ไฟล์สามารถให้ข้อมูลภาพรวมโดยย่อของเครื่องมือของ Google สำหรับเว็บไซต์ Moodle ของคุณได้</p>

<h3><a name="status" href="#status">Moodle Gadget</a></h3>
<div class="indent">
  <em>Moodle Gadget</em> เป็นเครื่องมือขนาดเล็กที่คุณสามารถฝังไว้บนหน้าพันธมิตรของ Google ของคุณได้

</div>


<p><b>ขั้นตอนในการติดตั้งบนหน้าเริ่มต้นของผู้ใช้งาน</b></p>
<ol>
  <li>เข้าสู่ระบบ Moodle</li>
  <li>คลิกที่ <b>หน้าพันธมิตรของ Google</b> ในบล็อก <b>การเข้าถึงบริการ Google Services</b></li>
  <li>คลิกที่ <b>เพิ่มรายการ</b></li>
  <li>คลิกที่ <b>เพิ่ม URL ของฉัน</b></li>
  <li>ป้อน URL ของ moodlegadget</li>
  <li>URL มีลักษณะอย่างเช่น <br/><b>http://www.yourmoodedomain.org/auth/gsaml/moodlegadget.php </b>
  <li>สามารถพบได้ในการตั้งค่า <b>การยืนยันตัวตนของ Google</b> จากบล็อกผู้ดูแลระบบ</li>
  <li>หลังจากที่คุณคัดลอก URL ใส่ในช่อง URL แล้ว ให้คลิก <b>เพิ่ม</b></li>
  <li>คลิก <b>กลับไปหน้าหลัก</b></li>
  <li>ขณะนี้คุณควรจะได้เห็นบล็อกที่มีลิงก์ไปยังเว็บไซต์ Moodle ของคุณ</li>
</ol>



<h3><a name="status" href="#status">การพิจารณา (จากการเปิดใช้งาน BETA)</a></h3>
<div class="indent">
    นี่คือต้นแบบเบตาสำหรับ Google Moodle Gadget นี้ ในอนาคตสิ่งนี้อาจจะยิ่งมีประโยชน์มากขึ้น แต่ในปัจจุบันยังมีปัญหาในเรื่องที่ว่า Gadget ไม่สามารถปรับปรุงให้เป็นปัจจุบันได้ทันทีในระหว่างการติดตั้ง ผู้พัฒนาคิดค้นกำลังหาทางแก้ไขปัญหานี้อยู่</div>';
$string['event_user_authenticated'] = 'ยืนยันตัวตนผู้ใช้งานแล้ว';
