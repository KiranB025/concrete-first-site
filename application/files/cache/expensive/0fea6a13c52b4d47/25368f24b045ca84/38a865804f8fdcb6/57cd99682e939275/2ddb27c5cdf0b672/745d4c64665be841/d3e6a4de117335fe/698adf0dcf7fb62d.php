<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$attributes][1]/ */
/* Type: array */
/* Expiration: 2025-03-14T22:12:00+02:00 */



$loaded = true;
$expiration = 1741983120;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entity',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Key\\ExpressKey',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741612131;
