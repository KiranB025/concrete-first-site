<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\set$category][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T12:43:08+02:00 */



$loaded = true;
$expiration = 1742035388;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Category',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'sets',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akCategoryID',
     'referencedColumnName' => 'akCategoryID',
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
$data['createdOn'] = 1741612215;
