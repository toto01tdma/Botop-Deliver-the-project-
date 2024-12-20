<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_stats.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class DataStats
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/automl/v1beta1/data_stats.protogoogle.cloud.automl.v1beta1"�
	DataStatsB
float64_stats (2).google.cloud.automl.v1beta1.Float64StatsH @
string_stats (2(.google.cloud.automl.v1beta1.StringStatsH F
timestamp_stats (2+.google.cloud.automl.v1beta1.TimestampStatsH >
array_stats (2\'.google.cloud.automl.v1beta1.ArrayStatsH @
struct_stats (2(.google.cloud.automl.v1beta1.StructStatsH D
category_stats (2*.google.cloud.automl.v1beta1.CategoryStatsH 
distinct_value_count (
null_value_count (
valid_value_count	 (B
stats"�
Float64Stats
mean (
standard_deviation (
	quantiles (T
histogram_buckets (29.google.cloud.automl.v1beta1.Float64Stats.HistogramBucket:
HistogramBucket
min (
max (
count ("�
StringStatsP
top_unigram_stats (25.google.cloud.automl.v1beta1.StringStats.UnigramStats,
UnigramStats
value (	
count ("�
TimestampStatsV
granular_stats (2>.google.cloud.automl.v1beta1.TimestampStats.GranularStatsEntry�
GranularStatsW
buckets (2F.google.cloud.automl.v1beta1.TimestampStats.GranularStats.BucketsEntry.
BucketsEntry
key (
value (:8o
GranularStatsEntry
key (	H
value (29.google.cloud.automl.v1beta1.TimestampStats.GranularStats:8"J

ArrayStats<
member_stats (2&.google.cloud.automl.v1beta1.DataStats"�
StructStatsM
field_stats (28.google.cloud.automl.v1beta1.StructStats.FieldStatsEntryY
FieldStatsEntry
key (	5
value (2&.google.cloud.automl.v1beta1.DataStats:8"�
CategoryStatsZ
top_category_stats (2>.google.cloud.automl.v1beta1.CategoryStats.SingleCategoryStats3
SingleCategoryStats
value (	
count ("%
CorrelationStats
	cramers_v (B�
com.google.cloud.automl.v1beta1PZ7cloud.google.com/go/automl/apiv1beta1/automlpb;automlpb�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

