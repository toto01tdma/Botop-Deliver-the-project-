<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/artifact.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class Artifact
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
�
2google/devtools/artifactregistry/v1/artifact.proto#google.devtools.artifactregistry.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
DockerImage
name (	B�A
uri (	B�A
tags (	
image_size_bytes (/
upload_time (2.google.protobuf.Timestamp

media_type (	.

build_time (2.google.protobuf.Timestamp4
update_time (2.google.protobuf.TimestampB�A:��A�
+artifactregistry.googleapis.com/DockerImage]projects/{project}/locations/{location}/repositories/{repository}/dockerImages/{docker_image}"g
ListDockerImagesRequest
parent (	B�A
	page_size (

page_token (	
order_by (	"|
ListDockerImagesResponseG
docker_images (20.google.devtools.artifactregistry.v1.DockerImage
next_page_token (	"Z
GetDockerImageRequestA
name (	B3�A�A-
+artifactregistry.googleapis.com/DockerImage"�
MavenArtifact
name (	B�A
pom_uri (	B�A
group_id (	
artifact_id (	
version (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
-artifactregistry.googleapis.com/MavenArtifactaprojects/{project}/locations/{location}/repositories/{repository}/mavenArtifacts/{maven_artifact}"�
ListMavenArtifactsRequestE
parent (	B5�A�A/-artifactregistry.googleapis.com/MavenArtifact
	page_size (

page_token (	"�
ListMavenArtifactsResponseK
maven_artifacts (22.google.devtools.artifactregistry.v1.MavenArtifact
next_page_token (	"^
GetMavenArtifactRequestC
name (	B5�A�A/
-artifactregistry.googleapis.com/MavenArtifact"�

NpmPackage
name (	B�A
package_name (	
version (	
tags (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
*artifactregistry.googleapis.com/NpmPackage[projects/{project}/locations/{location}/repositories/{repository}/npmPackages/{npm_package}"�
ListNpmPackagesRequestB
parent (	B2�A�A,*artifactregistry.googleapis.com/NpmPackage
	page_size (

page_token (	"y
ListNpmPackagesResponseE
npm_packages (2/.google.devtools.artifactregistry.v1.NpmPackage
next_page_token (	"X
GetNpmPackageRequest@
name (	B2�A�A,
*artifactregistry.googleapis.com/NpmPackage"�
PythonPackage
name (	B�A
uri (	B�A
package_name (	
version (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
-artifactregistry.googleapis.com/PythonPackageaprojects/{project}/locations/{location}/repositories/{repository}/pythonPackages/{python_package}"�
ListPythonPackagesRequestE
parent (	B5�A�A/-artifactregistry.googleapis.com/PythonPackage
	page_size (

page_token (	"�
ListPythonPackagesResponseK
python_packages (22.google.devtools.artifactregistry.v1.PythonPackage
next_page_token (	"^
GetPythonPackageRequestC
name (	B5�A�A/
-artifactregistry.googleapis.com/PythonPackageB�
\'com.google.devtools.artifactregistry.v1BArtifactProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

