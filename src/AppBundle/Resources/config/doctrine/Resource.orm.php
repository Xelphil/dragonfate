<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\ResourceRepository';
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
   'columnName' => 'url',
   'fieldName' => 'url',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'upload_date',
   'fieldName' => 'uploadDate',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'type',
   'fieldName' => 'type',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'state',
   'fieldName' => 'state',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'author',
   'fieldName' => 'author',
   'type' => 'string',
   'length' => '45',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);