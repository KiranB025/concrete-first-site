<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\downloadstatistics$id][1]/ */
/* Type: array */
/* Expiration: 2025-03-11T23:07:12+02:00 */



$loaded = true;
$expiration = 1741727232;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\Column::__set_state(array(
     'name' => 'dsID',
     'type' => 'integer',
     'length' => NULL,
     'precision' => NULL,
     'scale' => NULL,
     'unique' => false,
     'nullable' => false,
     'insertable' => true,
     'updatable' => true,
     'enumType' => NULL,
     'options' => 
    array (
      'unsigned' => true,
      'comment' => 'DownloadStatistics record ID',
    ),
     'columnDefinition' => NULL,
     'generated' => NULL,
  )),
  2 => 
  Doctrine\ORM\Mapping\GeneratedValue::__set_state(array(
     'strategy' => 'AUTO',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741356530;
