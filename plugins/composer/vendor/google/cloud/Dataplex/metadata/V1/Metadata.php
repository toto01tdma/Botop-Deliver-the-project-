<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class Metadata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�9
\'google/cloud/dataplex/v1/metadata.protogoogle.cloud.dataplex.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
CreateEntityRequest4
parent (	B$�A�A
dataplex.googleapis.com/Zone5
entity (2 .google.cloud.dataplex.v1.EntityB�A
validate_only (B�A"h
UpdateEntityRequest5
entity (2 .google.cloud.dataplex.v1.EntityB�A
validate_only (B�A"^
DeleteEntityRequest4
name (	B&�A�A 
dataplex.googleapis.com/Entity
etag (	B�A"�
ListEntitiesRequest4
parent (	B$�A�A
dataplex.googleapis.com/ZoneK
view (28.google.cloud.dataplex.v1.ListEntitiesRequest.EntityViewB�A
	page_size (B�A

page_token (	B�A
filter (	B�A"C

EntityView
ENTITY_VIEW_UNSPECIFIED 

TABLES
FILESETS"c
ListEntitiesResponse2
entities (2 .google.cloud.dataplex.v1.Entity
next_page_token (	"�
GetEntityRequest4
name (	B&�A�A 
dataplex.googleapis.com/EntityH
view (25.google.cloud.dataplex.v1.GetEntityRequest.EntityViewB�A"J

EntityView
ENTITY_VIEW_UNSPECIFIED 	
BASIC

SCHEMA
FULL"�
ListPartitionsRequest6
parent (	B&�A�A 
dataplex.googleapis.com/Entity
	page_size (B�A

page_token (	B�A
filter (	B�A"�
CreatePartitionRequest6
parent (	B&�A�A 
dataplex.googleapis.com/Entity;
	partition (2#.google.cloud.dataplex.v1.PartitionB�A
validate_only (B�A"f
DeletePartitionRequest7
name (	B)�A�A#
!dataplex.googleapis.com/Partition
etag (	B�A"j
ListPartitionsResponse7

partitions (2#.google.cloud.dataplex.v1.Partition
next_page_token (	"N
GetPartitionRequest7
name (	B)�A�A#
!dataplex.googleapis.com/Partition"�	
Entity4
name (	B&�A�A 
dataplex.googleapis.com/Entity
display_name (	B�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
id (	B�A
etag (	B�A;
type
 (2%.google.cloud.dataplex.v1.Entity.TypeB�A�A
asset (	B�A�A
	data_path (	B�A�A
data_path_pattern (	B�A
catalog_entry (	B�A?
system (2\'.google.cloud.dataplex.v1.StorageSystemB�A�A<
format (2\'.google.cloud.dataplex.v1.StorageFormatB�AP
compatibility (24.google.cloud.dataplex.v1.Entity.CompatibilityStatusB�A<
access (2\'.google.cloud.dataplex.v1.StorageAccessB�A
uid (	B�A5
schema2 (2 .google.cloud.dataplex.v1.SchemaB�A�
CompatibilityStatus_
hive_metastore (2B.google.cloud.dataplex.v1.Entity.CompatibilityStatus.CompatibilityB�AY
bigquery (2B.google.cloud.dataplex.v1.Entity.CompatibilityStatus.CompatibilityB�A=
Compatibility

compatible (B�A
reason (	B�A"4
Type
TYPE_UNSPECIFIED 	
TABLE
FILESET:x�Au
dataplex.googleapis.com/EntitySprojects/{project}/locations/{location}/lakes/{lake}/zones/{zone}/entities/{entity}"�
	Partition7
name (	B)�A�A#
!dataplex.googleapis.com/Partition
values (	B�A�A
location (	B�A�A
etag (	B�A:��A�
!dataplex.googleapis.com/Partitionjprojects/{project}/locations/{location}/lakes/{lake}/zones/{zone}/entities/{entity}/partitions/{partition}"�
Schema
user_managed (B�AA
fields (2,.google.cloud.dataplex.v1.Schema.SchemaFieldB�AN
partition_fields (2/.google.cloud.dataplex.v1.Schema.PartitionFieldB�AM
partition_style (2/.google.cloud.dataplex.v1.Schema.PartitionStyleB�A�
SchemaField
name (	B�A
description (	B�A8
type (2%.google.cloud.dataplex.v1.Schema.TypeB�A8
mode (2%.google.cloud.dataplex.v1.Schema.ModeB�AA
fields
 (2,.google.cloud.dataplex.v1.Schema.SchemaFieldB�A`
PartitionField
name (	B�A;
type (2%.google.cloud.dataplex.v1.Schema.TypeB�A�A"�
Type
TYPE_UNSPECIFIED 
BOOLEAN
BYTE	
INT16	
INT32	
INT64	
FLOAT

DOUBLE
DECIMAL

STRING	

BINARY

	TIMESTAMP
DATE
TIME

RECORD
NULLd"F
Mode
MODE_UNSPECIFIED 
REQUIRED
NULLABLE
REPEATED"F
PartitionStyle
PARTITION_STYLE_UNSPECIFIED 
HIVE_COMPATIBLE"�
StorageFormatC
format (2..google.cloud.dataplex.v1.StorageFormat.FormatB�AZ
compression_format (29.google.cloud.dataplex.v1.StorageFormat.CompressionFormatB�A
	mime_type (	B�AF
csv
 (22.google.cloud.dataplex.v1.StorageFormat.CsvOptionsB�AH H
json (23.google.cloud.dataplex.v1.StorageFormat.JsonOptionsB�AH N
iceberg (26.google.cloud.dataplex.v1.StorageFormat.IcebergOptionsB�AH i

CsvOptions
encoding (	B�A
header_rows (B�A
	delimiter (	B�A
quote (	B�A$
JsonOptions
encoding (	B�A0
IcebergOptions
metadata_location (	B�A"�
Format
FORMAT_UNSPECIFIED 
PARQUET
AVRO
ORC
CSVd
JSONe

IMAGE�

AUDIO�

VIDEO�	
TEXT�
TFRECORD�

OTHER�
UNKNOWN�"L
CompressionFormat"
COMPRESSION_FORMAT_UNSPECIFIED 
GZIP	
BZIP2B	
options"�
StorageAccessE
read (22.google.cloud.dataplex.v1.StorageAccess.AccessModeB�A"B

AccessMode
ACCESS_MODE_UNSPECIFIED 

DIRECT
MANAGED*P
StorageSystem
STORAGE_SYSTEM_UNSPECIFIED 
CLOUD_STORAGE
BIGQUERY2�
MetadataService�
CreateEntity-.google.cloud.dataplex.v1.CreateEntityRequest .google.cloud.dataplex.v1.Entity"\\���F"</v1/{parent=projects/*/locations/*/lakes/*/zones/*}/entities:entity�Aparent,entity�
UpdateEntity-.google.cloud.dataplex.v1.UpdateEntityRequest .google.cloud.dataplex.v1.Entity"S���MC/v1/{entity.name=projects/*/locations/*/lakes/*/zones/*/entities/*}:entity�
DeleteEntity-.google.cloud.dataplex.v1.DeleteEntityRequest.google.protobuf.Empty"K���>*</v1/{name=projects/*/locations/*/lakes/*/zones/*/entities/*}�Aname�
	GetEntity*.google.cloud.dataplex.v1.GetEntityRequest .google.cloud.dataplex.v1.Entity"K���></v1/{name=projects/*/locations/*/lakes/*/zones/*/entities/*}�Aname�
ListEntities-.google.cloud.dataplex.v1.ListEntitiesRequest..google.cloud.dataplex.v1.ListEntitiesResponse"M���></v1/{parent=projects/*/locations/*/lakes/*/zones/*}/entities�Aparent�
CreatePartition0.google.cloud.dataplex.v1.CreatePartitionRequest#.google.cloud.dataplex.v1.Partition"o���V"I/v1/{parent=projects/*/locations/*/lakes/*/zones/*/entities/*}/partitions:	partition�Aparent,partition�
DeletePartition0.google.cloud.dataplex.v1.DeletePartitionRequest.google.protobuf.Empty"Y���L*J/v1/{name=projects/*/locations/*/lakes/*/zones/*/entities/*/partitions/**}�Aname�
GetPartition-.google.cloud.dataplex.v1.GetPartitionRequest#.google.cloud.dataplex.v1.Partition"Y���LJ/v1/{name=projects/*/locations/*/lakes/*/zones/*/entities/*/partitions/**}�Aname�
ListPartitions/.google.cloud.dataplex.v1.ListPartitionsRequest0.google.cloud.dataplex.v1.ListPartitionsResponse"Z���KI/v1/{parent=projects/*/locations/*/lakes/*/zones/*/entities/*}/partitions�AparentK�Adataplex.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBi
com.google.cloud.dataplex.v1BMetadataProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

