<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\user\user$alerts][1]/ */
/* Type: array */
/* Expiration: 2025-03-11T08:32:27+02:00 */



$loaded = true;
$expiration = 1741674747;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'user',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Notification\\NotificationAlert',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
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
$data['createdOn'] = 1741268513;
