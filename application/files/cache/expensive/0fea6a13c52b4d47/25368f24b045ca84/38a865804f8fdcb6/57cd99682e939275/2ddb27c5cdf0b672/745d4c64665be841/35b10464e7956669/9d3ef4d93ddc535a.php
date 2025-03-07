<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\setkey$attribute_key][1]/ */
/* Type: array */
/* Expiration: 2025-03-10T22:01:23+02:00 */



$loaded = true;
$expiration = 1741636883;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Key\\Key',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'set_keys',
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'akID',
     'referencedColumnName' => 'akID',
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
$data['createdOn'] = 1741268496;
