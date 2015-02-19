<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'custom/include/SMS/SMS.php';

class Hooks
{
    function beforeSave(&$bean, $event, $arguments)
    {
        $bean->name = preg_replace("/[^0-9]/", "", $bean->name);
    }

    function afterSave(&$bean, $event, $arguments)
    {
        $sms = new SMS();
        if(!empty($bean->fetched_row['name']) && $bean->fetched_row['name'] != $bean->name)
        {
            $sms->blacklistDelete(array($bean->fetched_row['name']));
        }
        $sms->blacklistAdd(array($bean->name));
    }

    function beforeDelete(&$bean, $event, $arguments)
    {

    }

    function afterDelete(&$bean, $event, $arguments)
    {
        $sms = new SMS();
        $res = $sms->blacklistDelete(array($bean->name));
    }
}