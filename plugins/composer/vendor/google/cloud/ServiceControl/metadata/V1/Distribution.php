<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/distribution.proto

namespace GPBMetadata\Google\Api\Servicecontrol\V1;

class Distribution
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Distribution::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/api/servicecontrol/v1/distribution.protogoogle.api.servicecontrol.v1"�
Distribution
count (
mean (
minimum (
maximum ( 
sum_of_squared_deviation (
bucket_counts (R
linear_buckets (28.google.api.servicecontrol.v1.Distribution.LinearBucketsH \\
exponential_buckets (2=.google.api.servicecontrol.v1.Distribution.ExponentialBucketsH V
explicit_buckets	 (2:.google.api.servicecontrol.v1.Distribution.ExplicitBucketsH 4
	exemplars
 (2!.google.api.Distribution.ExemplarJ
LinearBuckets
num_finite_buckets (
width (
offset (V
ExponentialBuckets
num_finite_buckets (
growth_factor (
scale (!
ExplicitBuckets
bounds (B
bucket_optionB�
 com.google.api.servicecontrol.v1BDistributionProtoPZJcloud.google.com/go/servicecontrol/apiv1/servicecontrolpb;servicecontrolpb��Google.Cloud.ServiceControl.V1�Google\\Cloud\\ServiceControl\\V1�!Google::Cloud::ServiceControl::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

