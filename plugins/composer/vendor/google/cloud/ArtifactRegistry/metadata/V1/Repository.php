<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class Repository
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/devtools/artifactregistry/v1/repository.proto#google.devtools.artifactregistry.v1google/api/resource.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Repository]
maven_config	 (2E.google.devtools.artifactregistry.v1.Repository.MavenRepositoryConfigH 
name (	F
format (26.google.devtools.artifactregistry.v1.Repository.Format
description (	K
labels (2;.google.devtools.artifactregistry.v1.Repository.LabelsEntry/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
kms_key_name (	�
MavenRepositoryConfig!
allow_snapshot_overwrites (k
version_policy (2S.google.devtools.artifactregistry.v1.Repository.MavenRepositoryConfig.VersionPolicy"J
VersionPolicy
VERSION_POLICY_UNSPECIFIED 
RELEASE
SNAPSHOT-
LabelsEntry
key (	
value (	:8"^
Format
FORMAT_UNSPECIFIED 

DOCKER	
MAVEN
NPM
APT
YUM

PYTHON:r�Ao
*artifactregistry.googleapis.com/RepositoryAprojects/{project}/locations/{location}/repositories/{repository}B
format_config"�
ListRepositoriesRequestB
parent (	B2�A�A,*artifactregistry.googleapis.com/Repository
	page_size (

page_token (	"z
ListRepositoriesResponseE
repositories (2/.google.devtools.artifactregistry.v1.Repository
next_page_token (	"X
GetRepositoryRequest@
name (	B2�A�A,
*artifactregistry.googleapis.com/Repository"�
CreateRepositoryRequestB
parent (	B2�A�A,*artifactregistry.googleapis.com/Repository
repository_id (	C

repository (2/.google.devtools.artifactregistry.v1.Repository"�
UpdateRepositoryRequestC

repository (2/.google.devtools.artifactregistry.v1.Repository/
update_mask (2.google.protobuf.FieldMask"[
DeleteRepositoryRequest@
name (	B2�A�A,
*artifactregistry.googleapis.com/RepositoryB�
\'com.google.devtools.artifactregistry.v1BRepositoryProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

