<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if(ACLController::checkAccess('Gluussos', '', true)){
    $global_control_links['gluu'] = array('linkinfo' => array('Gluu SSO 2.4.4' => 'index.php?module=Gluussos&action=general'),
        'submenu' => ''
    );
}
?>
<style>
    #gluu_link{
        color: green !important;
    }
</style>