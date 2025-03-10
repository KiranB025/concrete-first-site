<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$forms][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T05:54:59+02:00 */



$loaded = true;
$expiration = 1742010899;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entity',
     'targetEntity' => 'Form',
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
