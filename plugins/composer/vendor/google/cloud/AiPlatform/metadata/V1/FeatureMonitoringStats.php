<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_monitoring_stats.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeatureMonitoringStats
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
�
9google/cloud/aiplatform/v1/feature_monitoring_stats.protogoogle.cloud.aiplatform.v1"�
FeatureStatsAnomaly
score (
	stats_uri (	
anomaly_uri (	
distribution_deviation (#
anomaly_detection_threshold	 (.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampB�
com.google.cloud.aiplatform.v1BFeatureMonitoringStatsProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

