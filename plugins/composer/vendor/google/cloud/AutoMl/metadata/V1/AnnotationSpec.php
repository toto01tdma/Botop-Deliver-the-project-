<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/annotation_spec.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class AnnotationSpec
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/automl/v1/annotation_spec.protogoogle.cloud.automl.v1"�
AnnotationSpec
name (	
display_name (	
example_count	 (:��A�
$automl.googleapis.com/AnnotationSpec\\projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}B�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

