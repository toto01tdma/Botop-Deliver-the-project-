<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeaturestoreOnlineService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureSelector::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Types::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/aiplatform/v1/featurestore_online_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/aiplatform/v1/feature_selector.proto&google/cloud/aiplatform/v1/types.protogoogle/protobuf/timestamp.proto"�
WriteFeatureValuesRequestA
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityTypeL
payloads (25.google.cloud.aiplatform.v1.WriteFeatureValuesPayloadB�A"�
WriteFeatureValuesPayload
	entity_id (	B�Ae
feature_values (2H.google.cloud.aiplatform.v1.WriteFeatureValuesPayload.FeatureValuesEntryB�A^
FeatureValuesEntry
key (	7
value (2(.google.cloud.aiplatform.v1.FeatureValue:8"
WriteFeatureValuesResponse"�
ReadFeatureValuesRequestA
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityType
	entity_id (	B�AJ
feature_selector (2+.google.cloud.aiplatform.v1.FeatureSelectorB�A"�
ReadFeatureValuesResponseL
header (2<.google.cloud.aiplatform.v1.ReadFeatureValuesResponse.HeaderU
entity_view (2@.google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView
FeatureDescriptor

id (	�
Header>
entity_type (	B)�A&
$aiplatform.googleapis.com/EntityTyped
feature_descriptors (2G.google.cloud.aiplatform.v1.ReadFeatureValuesResponse.FeatureDescriptor�

EntityView
	entity_id (	S
data (2E.google.cloud.aiplatform.v1.ReadFeatureValuesResponse.EntityView.Data�
Data9
value (2(.google.cloud.aiplatform.v1.FeatureValueH >
values (2,.google.cloud.aiplatform.v1.FeatureValueListH B
data"�
!StreamingReadFeatureValuesRequestA
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityType

entity_ids (	B�AJ
feature_selector (2+.google.cloud.aiplatform.v1.FeatureSelectorB�A"�
FeatureValue

bool_value (H 
double_value (H 
int64_value (H 
string_value (	H A
bool_array_value (2%.google.cloud.aiplatform.v1.BoolArrayH E
double_array_value (2\'.google.cloud.aiplatform.v1.DoubleArrayH C
int64_array_value (2&.google.cloud.aiplatform.v1.Int64ArrayH E
string_array_value (2\'.google.cloud.aiplatform.v1.StringArrayH 
bytes_value (H C
metadata (21.google.cloud.aiplatform.v1.FeatureValue.Metadata=
Metadata1
generate_time (2.google.protobuf.TimestampB
value"L
FeatureValueList8
values (2(.google.cloud.aiplatform.v1.FeatureValue2�
 FeaturestoreOnlineServingService�
ReadFeatureValues4.google.cloud.aiplatform.v1.ReadFeatureValuesRequest5.google.cloud.aiplatform.v1.ReadFeatureValuesResponse"q���]"X/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:readFeatureValues:*�Aentity_type�
StreamingReadFeatureValues=.google.cloud.aiplatform.v1.StreamingReadFeatureValuesRequest5.google.cloud.aiplatform.v1.ReadFeatureValuesResponse"z���f"a/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:streamingReadFeatureValues:*�Aentity_type0�
WriteFeatureValues5.google.cloud.aiplatform.v1.WriteFeatureValuesRequest6.google.cloud.aiplatform.v1.WriteFeatureValuesResponse"{���^"Y/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:writeFeatureValues:*�Aentity_type,payloadsM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BFeaturestoreOnlineServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

