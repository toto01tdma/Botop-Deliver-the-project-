<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/mutation_record.proto

namespace GPBMetadata\Google\Monitoring\V3;

class MutationRecord
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
�
*google/monitoring/v3/mutation_record.protogoogle.monitoring.v3"U
MutationRecord/
mutate_time (2.google.protobuf.Timestamp

mutated_by (	B�
com.google.monitoring.v3BMutationRecordProtoPZAcloud.google.com/go/monitoring/apiv3/v2/monitoringpb;monitoringpb�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

