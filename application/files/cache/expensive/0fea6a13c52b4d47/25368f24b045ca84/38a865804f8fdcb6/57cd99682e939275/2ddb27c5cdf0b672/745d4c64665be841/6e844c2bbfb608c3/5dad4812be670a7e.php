<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\summary\field$package][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T12:07:52+02:00 */



$loaded = true;
$expiration = 1742033272;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Package',
     'cascade' => 
    array (
      0 => 'persist',
    ),
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'pkgID',
     'referencedColumnName' => 'pkgID',
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
$data['createdOn'] = 1741612128;
