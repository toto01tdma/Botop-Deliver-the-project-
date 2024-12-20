<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_evaluation_slice.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class ModelEvaluationSlice
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/aiplatform/v1/model_evaluation_slice.protogoogle.cloud.aiplatform.v1google/api/resource.proto,google/cloud/aiplatform/v1/explanation.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�	
ModelEvaluationSlice
name (	B�AJ
slice (26.google.cloud.aiplatform.v1.ModelEvaluationSlice.SliceB�A
metrics_schema_uri (	B�A,
metrics (2.google.protobuf.ValueB�A4
create_time (2.google.protobuf.TimestampB�AL
model_explanation (2,.google.cloud.aiplatform.v1.ModelExplanationB�A�
Slice
	dimension (	B�A
value (	B�AY

slice_spec (2@.google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpecB�A�
	SliceSpec^
configs (2M.google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.ConfigsEntry�
SliceConfigW
value (2F.google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.ValueH W
range (2F.google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.RangeH 0

all_values (2.google.protobuf.BoolValueH B
kind"
Range
low (
high (>
Value
string_value (	H 
float_value (H B
kind|
ConfigsEntry
key (	[
value (2L.google.cloud.aiplatform.v1.ModelEvaluationSlice.Slice.SliceSpec.SliceConfig:8:��A�
.aiplatform.googleapis.com/ModelEvaluationSlice^projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}/slices/{slice}B�
com.google.cloud.aiplatform.v1BModelEvaluationSliceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

