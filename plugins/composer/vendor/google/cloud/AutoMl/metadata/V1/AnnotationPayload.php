<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/annotation_payload.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class AnnotationPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Detection::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\TextExtraction::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\TextSentiment::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1\Translation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/automl/v1/annotation_payload.protogoogle.cloud.automl.v1&google/cloud/automl/v1/detection.proto,google/cloud/automl/v1/text_extraction.proto+google/cloud/automl/v1/text_sentiment.proto(google/cloud/automl/v1/translation.proto"�
AnnotationPayloadD
translation (2-.google.cloud.automl.v1.TranslationAnnotationH J
classification (20.google.cloud.automl.v1.ClassificationAnnotationH X
image_object_detection (26.google.cloud.automl.v1.ImageObjectDetectionAnnotationH K
text_extraction (20.google.cloud.automl.v1.TextExtractionAnnotationH I
text_sentiment (2/.google.cloud.automl.v1.TextSentimentAnnotationH 
annotation_spec_id (	
display_name (	B
detailB�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

