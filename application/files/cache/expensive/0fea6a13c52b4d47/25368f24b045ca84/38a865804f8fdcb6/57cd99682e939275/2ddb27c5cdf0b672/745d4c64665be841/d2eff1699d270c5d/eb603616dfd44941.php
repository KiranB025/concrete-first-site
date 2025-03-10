<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\type$sites][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T09:33:07+02:00 */



$loaded = true;
$expiration = 1742023987;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'type',
     'targetEntity' => 'Site',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741612064;
