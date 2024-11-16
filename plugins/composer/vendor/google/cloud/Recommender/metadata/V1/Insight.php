<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/insight.proto

namespace GPBMetadata\Google\Cloud\Recommender\V1;

class Insight
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/recommender/v1/insight.protogoogle.cloud.recommender.v1google/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�	
Insight
name (	
description (	
target_resources	 (	
insight_subtype
 (	(
content (2.google.protobuf.Struct5
last_refresh_time (2.google.protobuf.Timestamp5
observation_period (2.google.protobuf.DurationA

state_info (2-.google.cloud.recommender.v1.InsightStateInfo?
category (2-.google.cloud.recommender.v1.Insight.Category?
severity (2-.google.cloud.recommender.v1.Insight.Severity
etag (	`
associated_recommendations (2<.google.cloud.recommender.v1.Insight.RecommendationReference1
RecommendationReference
recommendation (	"`
Category
CATEGORY_UNSPECIFIED 
COST
SECURITY
PERFORMANCE
MANAGEABILITY"Q
Severity
SEVERITY_UNSPECIFIED 
LOW

MEDIUM
HIGH
CRITICAL:��A�
"recommender.googleapis.com/InsightVprojects/{project}/locations/{location}/insightTypes/{insight_type}/insights/{insight}ebillingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}/insights/{insight}Tfolders/{folder}/locations/{location}/insightTypes/{insight_type}/insights/{insight}`organizations/{organization}/locations/{location}/insightTypes/{insight_type}/insights/{insight}"�
InsightStateInfoB
state (23.google.cloud.recommender.v1.InsightStateInfo.StateX
state_metadata (2@.google.cloud.recommender.v1.InsightStateInfo.StateMetadataEntry4
StateMetadataEntry
key (	
value (	:8"G
State
STATE_UNSPECIFIED 

ACTIVE
ACCEPTED
	DISMISSEDB�
com.google.cloud.recommender.v1BInsightProtoPZAcloud.google.com/go/recommender/apiv1/recommenderpb;recommenderpb�CREC�Google.Cloud.Recommender.V1�A�
&recommender.googleapis.com/InsightTypeCprojects/{project}/locations/{location}/insightTypes/{insight_type}RbillingAccounts/{billing_account}/locations/{location}/insightTypes/{insight_type}Afolders/{folder}/locations/{location}/insightTypes/{insight_type}Morganizations/{organization}/locations/{location}/insightTypes/{insight_type}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

