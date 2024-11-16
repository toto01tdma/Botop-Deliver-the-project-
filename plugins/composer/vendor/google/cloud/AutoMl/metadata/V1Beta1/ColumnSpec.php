<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/column_spec.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class ColumnSpec
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataTypes::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/automl/v1beta1/column_spec.protogoogle.cloud.automl.v1beta1,google/cloud/automl/v1beta1/data_stats.proto,google/cloud/automl/v1beta1/data_types.proto"�

ColumnSpec
name (	8
	data_type (2%.google.cloud.automl.v1beta1.DataType
display_name (	:

data_stats (2&.google.cloud.automl.v1beta1.DataStatsX
top_correlated_columns (28.google.cloud.automl.v1beta1.ColumnSpec.CorrelatedColumn
etag (	t
CorrelatedColumn
column_spec_id (	H
correlation_stats (2-.google.cloud.automl.v1beta1.CorrelationStats:��A�
 automl.googleapis.com/ColumnSpeclprojects/{project}/locations/{location}/datasets/{dataset}/tableSpecs/{table_spec}/columnSpecs/{column_spec}B�
com.google.cloud.automl.v1beta1PZ7cloud.google.com/go/automl/apiv1beta1/automlpb;automlpb�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

