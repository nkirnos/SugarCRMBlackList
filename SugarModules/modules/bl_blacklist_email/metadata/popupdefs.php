<?php
$popupMeta = array (
    'moduleMain' => 'bl_blacklist_email',
    'varName' => 'bl_blacklist_email',
    'orderBy' => 'bl_blacklist_email.name',
    'whereClauses' => array (
  'name' => 'bl_blacklist_email.name',
),
    'searchInputs' => array (
  0 => 'bl_blacklist_email_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
),
);
