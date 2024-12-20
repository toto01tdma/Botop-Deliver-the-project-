<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Index
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeployedIndexRef::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/aiplatform/v1/index.protogoogle.cloud.aiplatform.v1google/api/resource.proto3google/cloud/aiplatform/v1/deployed_index_ref.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Index
name (	B�A
display_name (	B�A
description (	 
metadata_schema_uri (	B�A(
metadata (2.google.protobuf.ValueK
deployed_indexes (2,.google.cloud.aiplatform.v1.DeployedIndexRefB�A
etag (	=
labels	 (2-.google.cloud.aiplatform.v1.Index.LabelsEntry4
create_time
 (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A@
index_stats (2&.google.cloud.aiplatform.v1.IndexStatsB�AU
index_update_method (23.google.cloud.aiplatform.v1.Index.IndexUpdateMethodB�A-
LabelsEntry
key (	
value (	:8"]
IndexUpdateMethod#
INDEX_UPDATE_METHOD_UNSPECIFIED 
BATCH_UPDATE
STREAM_UPDATE:]�AZ
aiplatform.googleapis.com/Index7projects/{project}/locations/{location}/indexes/{index}"�
IndexDatapoint
datapoint_id (	B�A
feature_vector (B�AN
	restricts (26.google.cloud.aiplatform.v1.IndexDatapoint.RestrictionB�AQ
crowding_tag (26.google.cloud.aiplatform.v1.IndexDatapoint.CrowdingTagB�AG
Restriction
	namespace (	

allow_list (	
	deny_list (	)
CrowdingTag
crowding_attribute (	"C

IndexStats
vectors_count (B�A
shards_count (B�AB�
com.google.cloud.aiplatform.v1B
IndexProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

