<?php
require_once 'custom/include/ExpertSender/ExpertSenderHelper.php';

class Hooks
{
    public function beforeSave(&$bean, $event, $arguments)
    {

    }

    public function afterSave(&$bean, $event, $arguments)
    {
        $es_helper = ExpertSenderHelper::getInstance();
        if(!empty($bean->fetched_row['name']) && $bean->fetched_row['name'] != $bean->name)
        {
            $es_helper->deleteStopListEntry(1, $bean->fetched_row['name']);
        }
        $es_helper->addStopListEntry(1, $bean->name);
    }

    public function beforeDelete(&$bean, $event, $arguments)
    {
        $es_helper = ExpertSenderHelper::getInstance();

        $es_helper->deleteStopListEntry(1, $bean->name);
    }

    public function afterDelete(&$bean, $event, $arguments)
    {

    }
}