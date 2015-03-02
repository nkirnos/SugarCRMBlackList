<?php
require_once 'custom/include/SMS/SMS.php';

class Hooks
{
    public function beforeSave(&$bean, $event, $arguments)
    {
        $bean->name = preg_replace("/[^0-9]/", "", $bean->name);
    }

    public function afterSave(&$bean, $event, $arguments)
    {
        $sms = new SMS();
        if(!empty($bean->fetched_row['name']) && $bean->fetched_row['name'] != $bean->name)
        {
            $sms->blacklistDelete(array($bean->fetched_row['name']));
        }
        $sms->blacklistAdd(array($bean->name));
    }

    public function beforeDelete(&$bean, $event, $arguments)
    {
        $sms = new SMS();
        $sms->blacklistDelete(array($bean->name));
    }

    public function afterDelete(&$bean, $event, $arguments)
    {

    }
}