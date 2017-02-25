<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\OtherRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'extra_data1',
   'fieldName' => 'extraData1',
   'type' => 'text',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'extra_data2',
   'fieldName' => 'extraData2',
   'type' => 'text',
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'extra_data3',
   'fieldName' => 'extraData3',
   'type' => 'text',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);