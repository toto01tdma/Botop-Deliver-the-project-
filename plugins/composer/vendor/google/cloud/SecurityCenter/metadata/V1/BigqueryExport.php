<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/bigquery_export.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class BigqueryExport
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
�
4google/cloud/securitycenter/v1/bigquery_export.protogoogle.cloud.securitycenter.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
BigQueryExport
name (	
description (	
filter (	
dataset (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
most_recent_editor (	B�A
	principal (	B�A:��A�
,securitycenter.googleapis.com/BigQueryExport5organizations/{organization}/bigQueryExports/{export})folders/{folder}/bigQueryExports/{export}+projects/{project}/bigQueryExports/{export}B�
"com.google.cloud.securitycenter.v1BBigQueryExportProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

