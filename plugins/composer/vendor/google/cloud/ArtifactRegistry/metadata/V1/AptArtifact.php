<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/apt_artifact.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class AptArtifact
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/devtools/artifactregistry/v1/apt_artifact.proto#google.devtools.artifactregistry.v1google/api/resource.protogoogle/rpc/status.proto"�
AptArtifact
name (	B�A
package_name (	B�AW
package_type (2<.google.devtools.artifactregistry.v1.AptArtifact.PackageTypeB�A
architecture (	B�A
	component (	B�A
control_file (B�A"C
PackageType
PACKAGE_TYPE_UNSPECIFIED 

BINARY

SOURCE:��A�
+artifactregistry.googleapis.com/AptArtifact]projects/{project}/locations/{location}/repositories/{repository}/aptArtifacts/{apt_artifact}"B
ImportAptArtifactsGcsSource
uris (	
use_wildcards ("�
ImportAptArtifactsRequestV

gcs_source (2@.google.devtools.artifactregistry.v1.ImportAptArtifactsGcsSourceH 
parent (	B
source"�
ImportAptArtifactsErrorInfoV

gcs_source (2@.google.devtools.artifactregistry.v1.ImportAptArtifactsGcsSourceH !
error (2.google.rpc.StatusB
source"�
ImportAptArtifactsResponseG
apt_artifacts (20.google.devtools.artifactregistry.v1.AptArtifactP
errors (2@.google.devtools.artifactregistry.v1.ImportAptArtifactsErrorInfo"
ImportAptArtifactsMetadataB�
\'com.google.devtools.artifactregistry.v1BAptArtifactProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

