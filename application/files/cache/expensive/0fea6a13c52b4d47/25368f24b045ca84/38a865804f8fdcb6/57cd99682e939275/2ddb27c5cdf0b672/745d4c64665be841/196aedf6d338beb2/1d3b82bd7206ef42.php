<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\set$keys][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T12:59:14+02:00 */



$loaded = true;
$expiration = 1742036354;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'set',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\SetKey',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'asDisplayOrder' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741612215;
