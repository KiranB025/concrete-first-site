<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\association$entry][1]/ */
/* Type: array */
/* Expiration: 2025-03-15T00:37:11+02:00 */



$loaded = true;
$expiration = 1741991831;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'association',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Entry\\Association',
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
$data['createdOn'] = 1741612132;
