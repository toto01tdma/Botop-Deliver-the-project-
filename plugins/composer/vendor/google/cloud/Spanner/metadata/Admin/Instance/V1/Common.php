<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/common.proto

namespace GPBMetadata\Google\Spanner\Admin\Instance\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/spanner/admin/instance/v1/common.proto google.spanner.admin.instance.v1"�
OperationProgress
progress_percent (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampB�
$com.google.spanner.admin.instance.v1BCommonProtoPZFcloud.google.com/go/spanner/admin/instance/apiv1/instancepb;instancepb�&Google.Cloud.Spanner.Admin.Instance.V1�&Google\\Cloud\\Spanner\\Admin\\Instance\\V1�+Google::Cloud::Spanner::Admin::Instance::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

