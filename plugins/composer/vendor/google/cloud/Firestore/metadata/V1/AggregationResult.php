<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/aggregation_result.proto

namespace GPBMetadata\Google\Firestore\V1;

class AggregationResult
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/firestore/v1/aggregation_result.protogoogle.firestore.v1"�
AggregationResultU
aggregate_fields (2;.google.firestore.v1.AggregationResult.AggregateFieldsEntryR
AggregateFieldsEntry
key (	)
value (2.google.firestore.v1.Value:8B�
com.google.firestore.v1BAggregationResultProtoPZ;cloud.google.com/go/firestore/apiv1/firestorepb;firestorepb�GCFS�Google.Cloud.Firestore.V1�Google\\Cloud\\Firestore\\V1�Google::Cloud::Firestore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

