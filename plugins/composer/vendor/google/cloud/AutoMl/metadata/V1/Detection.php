<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/detection.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class Detection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1\Geometry::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/automl/v1/detection.protogoogle.cloud.automl.v1"k
ImageObjectDetectionAnnotation:
bounding_box (2$.google.cloud.automl.v1.BoundingPoly
score ("�
BoundingBoxMetricsEntry
iou_threshold (
mean_average_precision (j
confidence_metrics_entries (2F.google.cloud.automl.v1.BoundingBoxMetricsEntry.ConfidenceMetricsEntryk
ConfidenceMetricsEntry
confidence_threshold (
recall (
	precision (
f1_score ("�
%ImageObjectDetectionEvaluationMetrics$
evaluated_bounding_box_count (U
bounding_box_metrics_entries (2/.google.cloud.automl.v1.BoundingBoxMetricsEntry+
#bounding_box_mean_average_precision (B�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

