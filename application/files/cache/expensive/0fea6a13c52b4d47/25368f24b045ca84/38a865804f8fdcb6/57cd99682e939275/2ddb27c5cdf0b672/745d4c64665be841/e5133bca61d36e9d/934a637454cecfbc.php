<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\slottemplate$tags][1]/ */
/* Type: array */
/* Expiration: 2025-03-12T08:30:34+02:00 */



$loaded = true;
$expiration = 1741761034;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Design\\DesignTag',
     'mappedBy' => NULL,
     'inversedBy' => NULL,
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinTable::__set_state(array(
     'name' => 'BoardSlotTemplateTags',
     'schema' => NULL,
     'joinColumns' => 
    array (
    ),
     'inverseJoinColumns' => 
    array (
    ),
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1741356471;
