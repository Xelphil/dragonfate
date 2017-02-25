<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\NotificationRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'title',
   'fieldName' => 'title',
   'type' => 'string',
   'length' => '45',
  ));
$metadata->mapField(array(
   'columnName' => 'state',
   'fieldName' => 'state',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'date',
   'fieldName' => 'date',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'descripcion',
   'fieldName' => 'descripcion',
   'type' => 'text',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);