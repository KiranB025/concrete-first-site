<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$associations][1]/ */
/* Type: array */
/* Expiration: 2025-03-11T23:09:30+02:00 */



$loaded = true;
$expiration = 1741727370;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'source_entity',
     'targetEntity' => 'Association',
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
$data['createdOn'] = 1741355634;
