<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_config.proto

namespace GPBMetadata\Google\Cloud\Recommender\V1;

class RecommenderConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/recommender/v1/recommender_config.protogoogle.cloud.recommender.v1google/api/resource.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
RecommenderConfig
name (	_
recommender_generation_config (28.google.cloud.recommender.v1.RecommenderGenerationConfig
etag (	/
update_time (2.google.protobuf.Timestamp
revision_id (	B�A�AT
annotations (2?.google.cloud.recommender.v1.RecommenderConfig.AnnotationsEntry
display_name (	2
AnnotationsEntry
key (	
value (	:8:��A�
,recommender.googleapis.com/RecommenderConfigIprojects/{project}/locations/{location}/recommenders/{recommender}/configSorganizations/{organization}/locations/{location}/recommenders/{recommender}/config"F
RecommenderGenerationConfig\'
params (2.google.protobuf.StructB�
com.google.cloud.recommender.v1BRecommenderConfigProtoPZAcloud.google.com/go/recommender/apiv1/recommenderpb;recommenderpb�CREC�Google.Cloud.Recommender.V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

