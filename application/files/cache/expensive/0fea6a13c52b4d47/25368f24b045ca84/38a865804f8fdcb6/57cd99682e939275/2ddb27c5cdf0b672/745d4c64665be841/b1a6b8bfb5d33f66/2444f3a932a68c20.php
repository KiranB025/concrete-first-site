<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\usersignup$user][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T13:26:16+02:00 */



$loaded = true;
$expiration = 1742037976;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\User\\User',
     'mappedBy' => NULL,
     'inversedBy' => 'signup',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'uID',
     'referencedColumnName' => 'uID',
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
$data['createdOn'] = 1741612075;
