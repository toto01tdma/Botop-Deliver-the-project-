<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/entity.proto

namespace GPBMetadata\Google\Datastore\V1;

class Entity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

 google/datastore/v1/entity.protogoogle.datastore.v1google/protobuf/timestamp.protogoogle/type/latlng.proto"L
PartitionId

project_id (	
database_id (	
namespace_id (	"�
Key6
partition_id (2 .google.datastore.v1.PartitionId2
path (2$.google.datastore.v1.Key.PathElementD
PathElement
kind (	
id (H 
name (	H B	
id_type"8

ArrayValue*
values (2.google.datastore.v1.Value"�
Value0

null_value (2.google.protobuf.NullValueH 
boolean_value (H 
integer_value (H 
double_value (H 5
timestamp_value
 (2.google.protobuf.TimestampH -
	key_value (2.google.datastore.v1.KeyH 
string_value (	H 

blob_value (H .
geo_point_value (2.google.type.LatLngH 3
entity_value (2.google.datastore.v1.EntityH 6
array_value	 (2.google.datastore.v1.ArrayValueH 
meaning (
exclude_from_indexes (B

value_type"�
Entity%
key (2.google.datastore.v1.Key?

properties (2+.google.datastore.v1.Entity.PropertiesEntryM
PropertiesEntry
key (	)
value (2.google.datastore.v1.Value:8B�
com.google.datastore.v1BEntityProtoPZ<google.golang.org/genproto/googleapis/datastore/v1;datastore�Google.Cloud.Datastore.V1�Google\\Cloud\\Datastore\\V1�Google::Cloud::Datastore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

