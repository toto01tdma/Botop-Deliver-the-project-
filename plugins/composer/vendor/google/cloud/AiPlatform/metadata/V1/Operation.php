<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/operation.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Operation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/aiplatform/v1/operation.protogoogle.cloud.aiplatform.v1google/protobuf/timestamp.protogoogle/rpc/status.proto"�
GenericOperationMetadata1
partial_failures (2.google.rpc.StatusB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A"i
DeleteOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadataB�
com.google.cloud.aiplatform.v1BOperationProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

