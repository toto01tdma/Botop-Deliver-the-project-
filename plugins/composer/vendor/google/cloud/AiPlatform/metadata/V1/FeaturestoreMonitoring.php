<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_monitoring.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeaturestoreMonitoring
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�

8google/cloud/aiplatform/v1/featurestore_monitoring.protogoogle.cloud.aiplatform.v1"�
FeaturestoreMonitoringConfigd
snapshot_analysis (2I.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysisq
import_features_analysis (2O.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysisl
numerical_threshold_config (2H.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfign
categorical_threshold_config (2H.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig^
SnapshotAnalysis
disabled ( 
monitoring_interval_days (
staleness_days (�
ImportFeaturesAnalysisd
state (2U.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.State|
anomaly_detection_baseline (2X.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis.Baseline"F
State
STATE_UNSPECIFIED 
DEFAULT
ENABLED
DISABLED"z
Baseline
BASELINE_UNSPECIFIED 
LATEST_STATS
MOST_RECENT_SNAPSHOT_STATS"
PREVIOUS_IMPORT_FEATURES_STATS/
ThresholdConfig
value (H B
	thresholdB�
com.google.cloud.aiplatform.v1BFeaturestoreMonitoringProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

