<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_models.proto

namespace GPBMetadata\Google\Cloud\Apigeeregistry\V1;

class RegistryModels
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
�
4google/cloud/apigeeregistry/v1/registry_models.protogoogle.cloud.apigeeregistry.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Api
name (	
display_name (	
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
availability (	J
recommended_version (	B-�A*
(apigeeregistry.googleapis.com/ApiVersionP
recommended_deployment (	B0�A-
+apigeeregistry.googleapis.com/ApiDeployment?
labels	 (2/.google.cloud.apigeeregistry.v1.Api.LabelsEntryI
annotations
 (24.google.cloud.apigeeregistry.v1.Api.AnnotationsEntry-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:Z�AW
!apigeeregistry.googleapis.com/Api2projects/{project}/locations/{location}/apis/{api}"�

ApiVersion
name (	
display_name (	
description (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
state (	F
labels (26.google.cloud.apigeeregistry.v1.ApiVersion.LabelsEntryP
annotations (2;.google.cloud.apigeeregistry.v1.ApiVersion.AnnotationsEntry-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:t�Aq
(apigeeregistry.googleapis.com/ApiVersionEprojects/{project}/locations/{location}/apis/{api}/versions/{version}"�
ApiSpec
name (	
filename (	
description (	
revision_id (	B�A�A4
create_time (2.google.protobuf.TimestampB�A=
revision_create_time (2.google.protobuf.TimestampB�A=
revision_update_time (2.google.protobuf.TimestampB�A
	mime_type (	

size_bytes	 (B�A
hash
 (	B�A

source_uri (	
contents (B�AC
labels (23.google.cloud.apigeeregistry.v1.ApiSpec.LabelsEntryM
annotations (28.google.cloud.apigeeregistry.v1.ApiSpec.AnnotationsEntry-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:~�A{
%apigeeregistry.googleapis.com/ApiSpecRprojects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}"�
ApiDeployment
name (	
display_name (	
description (	
revision_id (	B�A�A4
create_time (2.google.protobuf.TimestampB�A=
revision_create_time (2.google.protobuf.TimestampB�A=
revision_update_time (2.google.protobuf.TimestampB�AE
api_spec_revision (	B*�A\'
%apigeeregistry.googleapis.com/ApiSpec
endpoint_uri	 (	
external_channel_uri
 (	
intended_audience (	
access_guidance (	I
labels (29.google.cloud.apigeeregistry.v1.ApiDeployment.LabelsEntryS
annotations (2>.google.cloud.apigeeregistry.v1.ApiDeployment.AnnotationsEntry-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:}�Az
+apigeeregistry.googleapis.com/ApiDeploymentKprojects/{project}/locations/{location}/apis/{api}/deployments/{deployment}"�
Artifact
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
	mime_type (	

size_bytes (B�A
hash (	B�A
contents (B�A:��A�
&apigeeregistry.googleapis.com/Artifact<projects/{project}/locations/{location}/artifacts/{artifact}Gprojects/{project}/locations/{location}/apis/{api}/artifacts/{artifact}Zprojects/{project}/locations/{location}/apis/{api}/versions/{version}/artifacts/{artifact}gprojects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}/artifacts/{artifact}`projects/{project}/locations/{location}/apis/{api}/deployments/{deployment}/artifacts/{artifact}B�
"com.google.cloud.apigeeregistry.v1BRegistryModelsProtoPZJcloud.google.com/go/apigeeregistry/apiv1/apigeeregistrypb;apigeeregistrypb�Google.Cloud.ApigeeRegistry.V1�Google\\Cloud\\ApigeeRegistry\\V1�!Google::Cloud::ApigeeRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

