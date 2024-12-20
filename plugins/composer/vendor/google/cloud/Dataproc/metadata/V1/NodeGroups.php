<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/node_groups.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class NodeGroups
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
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/dataproc/v1/node_groups.protogoogle.cloud.dataproc.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/cloud/dataproc/v1/clusters.proto#google/longrunning/operations.protogoogle/protobuf/duration.proto"�
CreateNodeGroupRequest9
parent (	B)�A�A#!dataproc.googleapis.com/NodeGroup<

node_group (2#.google.cloud.dataproc.v1.NodeGroupB�A
node_group_id (	B�A

request_id (	B�A"�
ResizeNodeGroupRequest
name (	B�A
size (B�A

request_id (	B�AE
graceful_decommission_timeout (2.google.protobuf.DurationB�A"N
GetNodeGroupRequest7
name (	B)�A�A#
!dataproc.googleapis.com/NodeGroup2�
NodeGroupController�
CreateNodeGroup0.google.cloud.dataproc.v1.CreateNodeGroupRequest.google.longrunning.Operation"����E"7/v1/{parent=projects/*/regions/*/clusters/*}/nodeGroups:
node_group�Aparent,node_group,node_group_id�A@
	NodeGroup3google.cloud.dataproc.v1.NodeGroupOperationMetadata�
ResizeNodeGroup0.google.cloud.dataproc.v1.ResizeNodeGroupRequest.google.longrunning.Operation"����C">/v1/{name=projects/*/regions/*/clusters/*/nodeGroups/*}:resize:*�A	name,size�A@
	NodeGroup3google.cloud.dataproc.v1.NodeGroupOperationMetadata�
GetNodeGroup-.google.cloud.dataproc.v1.GetNodeGroupRequest#.google.cloud.dataproc.v1.NodeGroup"F���97/v1/{name=projects/*/regions/*/clusters/*/nodeGroups/*}�AnameK�Adataproc.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.dataproc.v1BNodeGroupsProtoPZ;cloud.google.com/go/dataproc/v2/apiv1/dataprocpb;dataprocpb�A_
%dataproc.googleapis.com/ClusterRegion6projects/{project}/regions/{region}/clusters/{cluster}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

