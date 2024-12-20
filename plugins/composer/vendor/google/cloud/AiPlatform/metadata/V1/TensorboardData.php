<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_data.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class TensorboardData
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardTimeSeries::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/aiplatform/v1/tensorboard_data.protogoogle.cloud.aiplatform.v18google/cloud/aiplatform/v1/tensorboard_time_series.protogoogle/protobuf/timestamp.proto"�
TimeSeriesData\'
tensorboard_time_series_id (	B�AW

value_type (2;.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueTypeB�A�AD
values (2/.google.cloud.aiplatform.v1.TimeSeriesDataPointB�A"�
TimeSeriesDataPoint4
scalar (2".google.cloud.aiplatform.v1.ScalarH ?
tensor (2-.google.cloud.aiplatform.v1.TensorboardTensorH D
blobs (23.google.cloud.aiplatform.v1.TensorboardBlobSequenceH -
	wall_time (2.google.protobuf.Timestamp
step (B
value"
Scalar
value ("D
TensorboardTensor
value (B�A
version_number (B�A"V
TensorboardBlobSequence;
values (2+.google.cloud.aiplatform.v1.TensorboardBlob"5
TensorboardBlob
id (	B�A
data (B�AB�
com.google.cloud.aiplatform.v1BTensorboardDataProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

