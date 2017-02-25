<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\SprintRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'version',
   'fieldName' => 'version',
   'type' => 'string',
   'length' => '15',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'start_date',
   'fieldName' => 'startDate',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'end_date',
   'fieldName' => 'endDate',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'total_cost',
   'fieldName' => 'totalCost',
   'type' => 'integer',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'done_cost',
   'fieldName' => 'doneCost',
   'type' => 'integer',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);