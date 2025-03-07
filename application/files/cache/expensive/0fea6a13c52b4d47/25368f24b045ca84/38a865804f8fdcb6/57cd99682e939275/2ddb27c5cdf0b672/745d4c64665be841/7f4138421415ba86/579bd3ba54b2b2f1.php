<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\task$set_tasks][1]/ */
/* Type: array */
/* Expiration: 2025-03-11T06:26:54+02:00 */



$loaded = true;
$expiration = 1741667214;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'task',
     'targetEntity' => 'TaskSetTask',
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
$data['createdOn'] = 1741268525;
