<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/file.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2;

class File
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/devtools/artifactregistry/v1beta2/file.proto(google.devtools.artifactregistry.v1beta2google/protobuf/timestamp.proto"�
HashE
type (27.google.devtools.artifactregistry.v1beta2.Hash.HashType
value (":
HashType
HASH_TYPE_UNSPECIFIED 

SHA256
MD5"�
File
name (	

size_bytes (>
hashes (2..google.devtools.artifactregistry.v1beta2.Hash/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
owner (	:y�Av
$artifactregistry.googleapis.com/FileNprojects/{project}/locations/{location}/repositories/{repository}/files/{file}"Y
ListFilesRequest
parent (	
filter (	
	page_size (

page_token (	"k
ListFilesResponse=
files (2..google.devtools.artifactregistry.v1beta2.File
next_page_token (	"
GetFileRequest
name (	B�
,com.google.devtools.artifactregistry.v1beta2B	FileProtoPZUcloud.google.com/go/artifactregistry/apiv1beta2/artifactregistrypb;artifactregistrypb�%Google.Cloud.ArtifactRegistry.V1Beta2�%Google\\Cloud\\ArtifactRegistry\\V1beta2�(Google::Cloud::ArtifactRegistry::V1beta2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

