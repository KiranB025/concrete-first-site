<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\association$entry][1]/ */
/* Type: array */
/* Expiration: 2025-03-12T07:13:09+02:00 */



$loaded = true;
$expiration = 1741756389;

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
$data['createdOn'] = 1741355635;
