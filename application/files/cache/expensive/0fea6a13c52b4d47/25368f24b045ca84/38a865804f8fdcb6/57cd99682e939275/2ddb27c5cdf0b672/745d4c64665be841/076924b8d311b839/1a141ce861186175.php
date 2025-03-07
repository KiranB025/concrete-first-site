<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\site$type][1]/ */
/* Type: array */
/* Expiration: 2025-03-11T15:39:25+02:00 */



$loaded = true;
$expiration = 1741700365;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'sites',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteTypeID',
     'referencedColumnName' => 'siteTypeID',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741268429;
