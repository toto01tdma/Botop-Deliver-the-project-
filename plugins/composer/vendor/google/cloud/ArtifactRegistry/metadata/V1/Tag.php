<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/tag.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class Tag
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/devtools/artifactregistry/v1/tag.proto#google.devtools.artifactregistry.v1 google/protobuf/field_mask.proto"�
Tag
name (	
version (	:��A�
#artifactregistry.googleapis.com/Tag_projects/{project}/locations/{location}/repositories/{repository}/packages/{package}/tags/{tag}"X
ListTagsRequest
parent (	
filter (	
	page_size (

page_token (	"c
ListTagsResponse6
tags (2(.google.devtools.artifactregistry.v1.Tag
next_page_token (	"
GetTagRequest
name (	"i
CreateTagRequest
parent (	
tag_id (	5
tag (2(.google.devtools.artifactregistry.v1.Tag"z
UpdateTagRequest5
tag (2(.google.devtools.artifactregistry.v1.Tag/
update_mask (2.google.protobuf.FieldMask" 
DeleteTagRequest
name (	B�
\'com.google.devtools.artifactregistry.v1BTagProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

