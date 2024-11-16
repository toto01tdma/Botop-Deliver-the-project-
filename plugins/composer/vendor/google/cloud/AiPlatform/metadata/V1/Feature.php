<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Feature
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureMonitoringStats::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/aiplatform/v1/feature.protogoogle.cloud.aiplatform.v1google/api/resource.proto9google/cloud/aiplatform/v1/feature_monitoring_stats.protogoogle/protobuf/timestamp.proto"�
Feature
name (	B�A
description (	I

value_type (2-.google.cloud.aiplatform.v1.Feature.ValueTypeB�A�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AD
labels (2/.google.cloud.aiplatform.v1.Feature.LabelsEntryB�A
etag (	
disable_monitoring (B�Ac
monitoring_stats_anomalies (2:.google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomalyB�A�
MonitoringStatsAnomaly\\
	objective (2D.google.cloud.aiplatform.v1.Feature.MonitoringStatsAnomaly.ObjectiveB�AS
feature_stats_anomaly (2/.google.cloud.aiplatform.v1.FeatureStatsAnomalyB�A"Z
	Objective
OBJECTIVE_UNSPECIFIED 
IMPORT_FEATURE_ANALYSIS
SNAPSHOT_ANALYSIS-
LabelsEntry
key (	
value (	:8"�
	ValueType
VALUE_TYPE_UNSPECIFIED 
BOOL

BOOL_ARRAY

DOUBLE
DOUBLE_ARRAY	
INT64	
INT64_ARRAY


STRING
STRING_ARRAY	
BYTES:��A�
!aiplatform.googleapis.com/Featureqprojects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}/features/{feature}B�
com.google.cloud.aiplatform.v1BFeatureProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

