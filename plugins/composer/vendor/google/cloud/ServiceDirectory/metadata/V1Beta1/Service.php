<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/service.proto

namespace GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\Endpoint::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/servicedirectory/v1beta1/service.proto%google.cloud.servicedirectory.v1beta1google/api/resource.proto4google/cloud/servicedirectory/v1beta1/endpoint.protogoogle/protobuf/timestamp.proto"�
Service
name (	B�AS
metadata (2<.google.cloud.servicedirectory.v1beta1.Service.MetadataEntryB�AG
	endpoints (2/.google.cloud.servicedirectory.v1beta1.EndpointB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A/
MetadataEntry
key (	
value (	:8:�A|
\'servicedirectory.googleapis.com/ServiceQprojects/{project}/locations/{location}/namespaces/{namespace}/services/{service}B�
)com.google.cloud.servicedirectory.v1beta1BServiceProtoPZUcloud.google.com/go/servicedirectory/apiv1beta1/servicedirectorypb;servicedirectorypb��%Google.Cloud.ServiceDirectory.V1Beta1�%Google\\Cloud\\ServiceDirectory\\V1beta1�(Google::Cloud::ServiceDirectory::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

