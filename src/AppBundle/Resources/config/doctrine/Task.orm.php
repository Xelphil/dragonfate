<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\TaskRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'name',
   'fieldName' => 'name',
   'type' => 'string',
   'length' => '50',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'descripcion',
   'fieldName' => 'descripcion',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'date',
   'fieldName' => 'date',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'state',
   'fieldName' => 'state',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'cost',
   'fieldName' => 'cost',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'priority',
   'fieldName' => 'priority',
   'type' => 'integer',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);