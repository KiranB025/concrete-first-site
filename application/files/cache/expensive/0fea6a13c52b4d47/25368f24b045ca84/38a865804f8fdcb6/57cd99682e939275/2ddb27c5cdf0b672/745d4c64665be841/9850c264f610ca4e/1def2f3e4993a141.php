<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\sitetree$locale][1]/ */
/* Type: array */
/* Expiration: 2025-03-10T22:30:50+02:00 */



$loaded = true;
$expiration = 1741638650;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Site\\Locale',
     'mappedBy' => NULL,
     'inversedBy' => 'tree',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteLocaleID',
     'referencedColumnName' => 'siteLocaleID',
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
$data['createdOn'] = 1741268483;
