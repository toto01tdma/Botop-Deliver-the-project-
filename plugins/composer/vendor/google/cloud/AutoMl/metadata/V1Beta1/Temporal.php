<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/temporal.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Temporal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/automl/v1beta1/temporal.protogoogle.cloud.automl.v1beta1"w
TimeSegment4
start_time_offset (2.google.protobuf.Duration2
end_time_offset (2.google.protobuf.DurationB�
com.google.cloud.automl.v1beta1PZ7cloud.google.com/go/automl/apiv1beta1/automlpb;automlpb�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

