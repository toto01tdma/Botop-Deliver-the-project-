<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/attached_service.proto

namespace GPBMetadata\Google\Cloud\Gkemulticloud\V1;

class AttachedService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AttachedResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
� 
4google/cloud/gkemulticloud/v1/attached_service.protogoogle.cloud.gkemulticloud.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto6google/cloud/gkemulticloud/v1/attached_resources.proto#google/longrunning/operations.proto google/protobuf/field_mask.proto"�
-GenerateAttachedClusterInstallManifestRequestD
parent (	B4�A�A.,gkemulticloud.googleapis.com/AttachedCluster 
attached_cluster_id (	B�A
platform_version (	B�A"B
.GenerateAttachedClusterInstallManifestResponse
manifest (	"�
CreateAttachedClusterRequestD
parent (	B4�A�A.,gkemulticloud.googleapis.com/AttachedClusterM
attached_cluster (2..google.cloud.gkemulticloud.v1.AttachedClusterB�A 
attached_cluster_id (	B�A
validate_only ("�
ImportAttachedClusterRequestD
parent (	B4�A�A.,gkemulticloud.googleapis.com/AttachedCluster
validate_only (
fleet_membership (	B�A
platform_version (	B�A
distribution (	B�A"�
UpdateAttachedClusterRequestM
attached_cluster (2..google.cloud.gkemulticloud.v1.AttachedClusterB�A
validate_only (4
update_mask (2.google.protobuf.FieldMaskB�A"_
GetAttachedClusterRequestB
name (	B4�A�A.
,gkemulticloud.googleapis.com/AttachedCluster"�
ListAttachedClustersRequestD
parent (	B4�A�A.,gkemulticloud.googleapis.com/AttachedCluster
	page_size (

page_token (	"�
ListAttachedClustersResponseI
attached_clusters (2..google.cloud.gkemulticloud.v1.AttachedCluster
next_page_token (	"�
DeleteAttachedClusterRequestB
name (	B4�A�A.
,gkemulticloud.googleapis.com/AttachedCluster
validate_only (
allow_missing (
ignore_errors (
etag (	"i
GetAttachedServerConfigRequestG
name (	B9�A�A3
1gkemulticloud.googleapis.com/AttachedServerConfig2�
AttachedClusters�
CreateAttachedCluster;.google.cloud.gkemulticloud.v1.CreateAttachedClusterRequest.google.longrunning.Operation"����H"4/v1/{parent=projects/*/locations/*}/attachedClusters:attached_cluster�A+parent,attached_cluster,attached_cluster_id�A$
AttachedClusterOperationMetadata�
UpdateAttachedCluster;.google.cloud.gkemulticloud.v1.UpdateAttachedClusterRequest.google.longrunning.Operation"����Y2E/v1/{attached_cluster.name=projects/*/locations/*/attachedClusters/*}:attached_cluster�Aattached_cluster,update_mask�A$
AttachedClusterOperationMetadata�
ImportAttachedCluster;.google.cloud.gkemulticloud.v1.ImportAttachedClusterRequest.google.longrunning.Operation"����@";/v1/{parent=projects/*/locations/*}/attachedClusters:import:*�Aparent,fleet_membership�A$
AttachedClusterOperationMetadata�
GetAttachedCluster8.google.cloud.gkemulticloud.v1.GetAttachedClusterRequest..google.cloud.gkemulticloud.v1.AttachedCluster"C���64/v1/{name=projects/*/locations/*/attachedClusters/*}�Aname�
ListAttachedClusters:.google.cloud.gkemulticloud.v1.ListAttachedClustersRequest;.google.cloud.gkemulticloud.v1.ListAttachedClustersResponse"E���64/v1/{parent=projects/*/locations/*}/attachedClusters�Aparent�
DeleteAttachedCluster;.google.cloud.gkemulticloud.v1.DeleteAttachedClusterRequest.google.longrunning.Operation"p���6*4/v1/{name=projects/*/locations/*/attachedClusters/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetAttachedServerConfig=.google.cloud.gkemulticloud.v1.GetAttachedServerConfigRequest3.google.cloud.gkemulticloud.v1.AttachedServerConfig"E���86/v1/{name=projects/*/locations/*/attachedServerConfig}�Aname�
&GenerateAttachedClusterInstallManifestL.google.cloud.gkemulticloud.v1.GenerateAttachedClusterInstallManifestRequestM.google.cloud.gkemulticloud.v1.GenerateAttachedClusterInstallManifestResponse"o���LJ/v1/{parent=projects/*/locations/*}:generateAttachedClusterInstallManifest�Aparent,attached_cluster_idP�Agkemulticloud.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.gkemulticloud.v1BAttachedServiceProtoPZGcloud.google.com/go/gkemulticloud/apiv1/gkemulticloudpb;gkemulticloudpb�Google.Cloud.GkeMultiCloud.V1�Google\\Cloud\\GkeMultiCloud\\V1� Google::Cloud::GkeMultiCloud::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

