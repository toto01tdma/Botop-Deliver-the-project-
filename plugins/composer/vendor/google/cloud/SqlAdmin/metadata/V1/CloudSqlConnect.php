<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_connect.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlConnect
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/sql/v1/cloud_sql_connect.protogoogle.cloud.sql.v1google/api/field_behavior.proto-google/cloud/sql/v1/cloud_sql_resources.protogoogle/protobuf/timestamp.protogoogle/api/client.proto"r
GetConnectSettingsRequest
instance (	
project (	2
	read_time (2.google.protobuf.TimestampB�A"�
ConnectSettings
kind (	4
server_ca_cert (2.google.cloud.sql.v1.SslCert4
ip_addresses (2.google.cloud.sql.v1.IpMapping
region (	A
database_version (2\'.google.cloud.sql.v1.SqlDatabaseVersion9
backend_type  (2#.google.cloud.sql.v1.SqlBackendType"�
GenerateEphemeralCertRequest
instance (	
project (	

public_key (	
access_token (	B�A2
	read_time (2.google.protobuf.TimestampB�A"U
GenerateEphemeralCertResponse4
ephemeral_cert (2.google.cloud.sql.v1.SslCert2�
SqlConnectService�
GetConnectSettings..google.cloud.sql.v1.GetConnectSettingsRequest$.google.cloud.sql.v1.ConnectSettings"C���=;/v1/projects/{project}/instances/{instance}/connectSettings�
GenerateEphemeralCert1.google.cloud.sql.v1.GenerateEphemeralCertRequest2.google.cloud.sql.v1.GenerateEphemeralCertResponse"L���F"A/v1/projects/{project}/instances/{instance}:generateEphemeralCert:*|�Asqladmin.googleapis.com�A_https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/sqlservice.adminB\\
com.google.cloud.sql.v1BCloudSqlConnectProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

