<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_tiers.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlTiers
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/sql/v1/cloud_sql_tiers.protogoogle.cloud.sql.v1google/api/client.proto"&
SqlTiersListRequest
project (	"K
TiersListResponse
kind (	(
items (2.google.cloud.sql.v1.Tier"S
Tier
tier (	
RAM (
kind (	

Disk_Quota (
region (	2�
SqlTiersService~
List(.google.cloud.sql.v1.SqlTiersListRequest&.google.cloud.sql.v1.TiersListResponse"$���/v1/projects/{project}/tiers|�Asqladmin.googleapis.com�A_https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/sqlservice.adminBZ
com.google.cloud.sql.v1BCloudSqlTiersProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

