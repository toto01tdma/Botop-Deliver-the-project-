<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_selector.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeatureSelector
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/aiplatform/v1/feature_selector.protogoogle.cloud.aiplatform.v1"
	IdMatcher
ids (	B�A"Q
FeatureSelector>

id_matcher (2%.google.cloud.aiplatform.v1.IdMatcherB�AB�
com.google.cloud.aiplatform.v1BFeatureSelectorProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

