<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/operations.proto

namespace GPBMetadata\Google\Cloud\Functions\V1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/functions/v1/operations.protogoogle.cloud.functions.v1google/protobuf/timestamp.proto"�
OperationMetadataV1
target (	6
type (2(.google.cloud.functions.v1.OperationType%
request (2.google.protobuf.Any

version_id (/
update_time (2.google.protobuf.Timestamp
build_id (	
source_token (	

build_name (	*i
OperationType
OPERATION_UNSPECIFIED 
CREATE_FUNCTION
UPDATE_FUNCTION
DELETE_FUNCTIONBx
com.google.cloud.functions.v1BFunctionsOperationsProtoPZ;cloud.google.com/go/functions/apiv1/functionspb;functionspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

