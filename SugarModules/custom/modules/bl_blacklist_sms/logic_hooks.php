<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'beforeSave', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'beforeSave');

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'afterSave', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'afterSave');

$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'beforeDelete', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'beforeDelete');

$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(1, 'afterDelete', 'custom/modules/bl_blacklist_sms/hooks.php','Hooks', 'afterDelete');
