<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/model_evaluation.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class ModelEvaluation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Detection::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\TextExtraction::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\TextSentiment::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Translation::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

-google/cloud/automl/v1/model_evaluation.protogoogle.cloud.automl.v1+google/cloud/automl/v1/classification.proto&google/cloud/automl/v1/detection.proto,google/cloud/automl/v1/text_extraction.proto+google/cloud/automl/v1/text_sentiment.proto(google/cloud/automl/v1/translation.protogoogle/protobuf/timestamp.proto"�
ModelEvaluationd
!classification_evaluation_metrics (27.google.cloud.automl.v1.ClassificationEvaluationMetricsH ^
translation_evaluation_metrics	 (24.google.cloud.automl.v1.TranslationEvaluationMetricsH r
)image_object_detection_evaluation_metrics (2=.google.cloud.automl.v1.ImageObjectDetectionEvaluationMetricsH c
!text_sentiment_evaluation_metrics (26.google.cloud.automl.v1.TextSentimentEvaluationMetricsH e
"text_extraction_evaluation_metrics (27.google.cloud.automl.v1.TextExtractionEvaluationMetricsH 
name (	
annotation_spec_id (	
display_name (	/
create_time (2.google.protobuf.Timestamp
evaluated_example_count (:��A�
%automl.googleapis.com/ModelEvaluationZprojects/{project}/locations/{location}/models/{model}/modelEvaluations/{model_evaluation}B	
metricsB�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

