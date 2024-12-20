<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_time_series.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class TensorboardTimeSeries
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
8google/cloud/aiplatform/v1/tensorboard_time_series.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
TensorboardTimeSeries
name (	B�A
display_name (	B�A
description (	W

value_type (2;.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueTypeB�A�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	
plugin_name (	B�A
plugin_data	 (Q
metadata
 (2:.google.cloud.aiplatform.v1.TensorboardTimeSeries.MetadataB�A�
Metadata
max_step (B�A6
max_wall_time (2.google.protobuf.TimestampB�A%
max_blob_sequence_length (B�A"R
	ValueType
VALUE_TYPE_UNSPECIFIED 

SCALAR

TENSOR
BLOB_SEQUENCE:��A�
/aiplatform.googleapis.com/TensorboardTimeSeriesprojects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}B�
com.google.cloud.aiplatform.v1BTensorboardTimeSeriesProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

