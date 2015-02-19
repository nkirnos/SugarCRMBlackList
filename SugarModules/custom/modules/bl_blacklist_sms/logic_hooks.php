<?php

$hook_version = 1;
$hook_array = Array(
    'before_save' => Array(
        Array(1, 'beforeSave', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'beforeSave'),
    ),
    'after_save' => Array(
        Array(2, 'afterSave', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'afterSave'),
    ),
    'before_delete' => Array(
        Array(3, 'beforeDelete', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'beforeDelete'),
    ),
    'after_delete' => Array(
        Array(4, 'afterDelete phone number from sms blacklist', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'afterDelete'),
    ),
);
