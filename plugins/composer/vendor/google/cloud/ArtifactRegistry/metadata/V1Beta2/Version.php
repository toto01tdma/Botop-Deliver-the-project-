<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/version.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2;

class Version
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Tag::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/devtools/artifactregistry/v1beta2/version.proto(google.devtools.artifactregistry.v1beta2google/api/resource.proto2google/devtools/artifactregistry/v1beta2/tag.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Version
name (	
description (	/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.TimestampC
related_tags (2-.google.devtools.artifactregistry.v1beta2.Tag.
metadata (2.google.protobuf.StructB�A:��A�
\'artifactregistry.googleapis.com/Versiongprojects/{project}/locations/{location}/repositories/{repository}/packages/{package}/versions/{version}"�
ListVersionsRequest
parent (	
	page_size (

page_token (	C
view (25.google.devtools.artifactregistry.v1beta2.VersionView
order_by (	B�A"t
ListVersionsResponseC
versions (21.google.devtools.artifactregistry.v1beta2.Version
next_page_token (	"f
GetVersionRequest
name (	C
view (25.google.devtools.artifactregistry.v1beta2.VersionView"3
DeleteVersionRequest
name (	
force (*@
VersionView
VERSION_VIEW_UNSPECIFIED 	
BASIC
FULLB�
,com.google.devtools.artifactregistry.v1beta2BVersionProtoPZUcloud.google.com/go/artifactregistry/apiv1beta2/artifactregistrypb;artifactregistrypb�%Google.Cloud.ArtifactRegistry.V1Beta2�%Google\\Cloud\\ArtifactRegistry\\V1beta2�(Google::Cloud::ArtifactRegistry::V1beta2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

