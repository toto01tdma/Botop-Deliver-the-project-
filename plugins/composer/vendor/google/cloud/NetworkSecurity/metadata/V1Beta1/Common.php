<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/common.proto

namespace GPBMetadata\Google\Cloud\Networksecurity\V1Beta1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/networksecurity/v1beta1/common.proto$google.cloud.networksecurity.v1beta1google/protobuf/timestamp.proto"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AB�
(com.google.cloud.networksecurity.v1beta1BCommonProtoPZRcloud.google.com/go/networksecurity/apiv1beta1/networksecuritypb;networksecuritypb�$Google.Cloud.NetworkSecurity.V1Beta1�$Google\\Cloud\\NetworkSecurity\\V1beta1�\'Google::Cloud::NetworkSecurity::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

