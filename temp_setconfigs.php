<?php
// this file will be deleted when done with dev
require_once('../config.php');
global $CFG;
// Althought files can be uploaded to the site I still haven't finished the
// file find code so for now I have to leave these in until development is complete
set_config('privatekey',$CFG->dataroot.'/samlkeys/privatekey.pem','auth/gsaml');
set_config('certificate',$CFG->dataroot.'/samlkeys/certificate.pem','auth/gsaml');

?>
