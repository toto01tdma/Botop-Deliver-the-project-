<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/table.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Storage\V1;

class Table
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/bigquery/storage/v1/table.proto google.cloud.bigquery.storage.v1"Q
TableSchemaB
fields (22.google.cloud.bigquery.storage.v1.TableFieldSchema"�
TableFieldSchema
name (	B�AJ
type (27.google.cloud.bigquery.storage.v1.TableFieldSchema.TypeB�AJ
mode (27.google.cloud.bigquery.storage.v1.TableFieldSchema.ModeB�AG
fields (22.google.cloud.bigquery.storage.v1.TableFieldSchemaB�A
description (	B�A

max_length (B�A
	precision (B�A
scale	 (B�A%
default_value_expression
 (	B�A"�
Type
TYPE_UNSPECIFIED 

STRING	
INT64

DOUBLE

STRUCT	
BYTES
BOOL
	TIMESTAMP
DATE
TIME	
DATETIME

	GEOGRAPHY
NUMERIC

BIGNUMERIC
INTERVAL
JSON"F
Mode
MODE_UNSPECIFIED 
NULLABLE
REQUIRED
REPEATEDB�
$com.google.cloud.bigquery.storage.v1B
TableProtoPZ>cloud.google.com/go/bigquery/storage/apiv1/storagepb;storagepb� Google.Cloud.BigQuery.Storage.V1� Google\\Cloud\\BigQuery\\Storage\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

