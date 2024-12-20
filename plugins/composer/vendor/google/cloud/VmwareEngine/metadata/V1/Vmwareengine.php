<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace GPBMetadata\Google\Cloud\Vmwareengine\V1;

class Vmwareengine
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
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�l
/google/cloud/vmwareengine/v1/vmwareengine.protogoogle.cloud.vmwareengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto9google/cloud/vmwareengine/v1/vmwareengine_resources.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListPrivateCloudsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListPrivateCloudsResponseB
private_clouds (2*.google.cloud.vmwareengine.v1.PrivateCloud
next_page_token (	
unreachable (	"X
GetPrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"�
CreatePrivateCloudRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
private_cloud_id (	B�AF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A

request_id (	B�A
validate_only (B�A"�
UpdatePrivateCloudRequestF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
DeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A
force (B�A
delay_hours (B�AH �B
_delay_hours"v
UndeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ListClustersRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"}
ListClustersResponse7
clusters (2%.google.cloud.vmwareengine.v1.Cluster
next_page_token (	
unreachable (	"N
GetClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster"�
CreateClusterRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

cluster_id (	B�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"j
DeleteClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster

request_id (	B�A"}
ListSubnetsRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"e
ListSubnetsResponse5
subnets (2$.google.cloud.vmwareengine.v1.Subnet
next_page_token (	"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
ListNodeTypesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"�
ListNodeTypesResponse:

node_types (2&.google.cloud.vmwareengine.v1.NodeType
next_page_token (	
unreachable (	"P
GetNodeTypeRequest:
name (	B,�A�A&
$vmwareengine.googleapis.com/NodeType"d
ShowNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"h
ShowVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"~
ResetNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ResetVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ListHcxActivationKeysResponseK
hcx_activation_keys (2..google.cloud.vmwareengine.v1.HcxActivationKey
next_page_token (	
unreachable (	"�
ListHcxActivationKeysRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"`
GetHcxActivationKeyRequestB
name (	B4�A�A.
,vmwareengine.googleapis.com/HcxActivationKey"�
CreateHcxActivationKeyRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloudO
hcx_activation_key (2..google.cloud.vmwareengine.v1.HcxActivationKeyB�A"
hcx_activation_key_id (	B�A

request_id (	"�
ListNetworkPoliciesRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
	page_size (

page_token (	
filter (	
order_by (	"�
ListNetworkPoliciesResponseE
network_policies (2+.google.cloud.vmwareengine.v1.NetworkPolicy
next_page_token (	
unreachable (	"Z
GetNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy"�
UpdateNetworkPolicyRequestH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
CreateNetworkPolicyRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
network_policy_id (	B�AH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A

request_id (	B�A"v
DeleteNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy

request_id (	B�A"�
 CreateVmwareEngineNetworkRequestG
parent (	B7�A�A1/vmwareengine.googleapis.com/VmwareEngineNetwork%
vmware_engine_network_id (	B�AU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A

request_id (	B�A"�
 UpdateVmwareEngineNetworkRequestU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
 DeleteVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork

request_id (	B�A
etag (	B�A"f
GetVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork"�
ListVmwareEngineNetworksRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
 ListVmwareEngineNetworksResponseQ
vmware_engine_networks (21.google.cloud.vmwareengine.v1.VmwareEngineNetwork
next_page_token (	
unreachable (	2�9
VmwareEngine�
ListPrivateClouds6.google.cloud.vmwareengine.v1.ListPrivateCloudsRequest7.google.cloud.vmwareengine.v1.ListPrivateCloudsResponse"B���31/v1/{parent=projects/*/locations/*}/privateClouds�Aparent�
GetPrivateCloud4.google.cloud.vmwareengine.v1.GetPrivateCloudRequest*.google.cloud.vmwareengine.v1.PrivateCloud"@���31/v1/{name=projects/*/locations/*/privateClouds/*}�Aname�
CreatePrivateCloud7.google.cloud.vmwareengine.v1.CreatePrivateCloudRequest.google.longrunning.Operation"����B"1/v1/{parent=projects/*/locations/*}/privateClouds:private_cloud�A%parent,private_cloud,private_cloud_id�A!
PrivateCloudOperationMetadata�
UpdatePrivateCloud7.google.cloud.vmwareengine.v1.UpdatePrivateCloudRequest.google.longrunning.Operation"����P2?/v1/{private_cloud.name=projects/*/locations/*/privateClouds/*}:private_cloud�Aprivate_cloud,update_mask�A!
PrivateCloudOperationMetadata�
DeletePrivateCloud7.google.cloud.vmwareengine.v1.DeletePrivateCloudRequest.google.longrunning.Operation"d���3*1/v1/{name=projects/*/locations/*/privateClouds/*}�Aname�A!
PrivateCloudOperationMetadata�
UndeletePrivateCloud9.google.cloud.vmwareengine.v1.UndeletePrivateCloudRequest.google.longrunning.Operation"p���?":/v1/{name=projects/*/locations/*/privateClouds/*}:undelete:*�Aname�A!
PrivateCloudOperationMetadata�
ListClusters1.google.cloud.vmwareengine.v1.ListClustersRequest2.google.cloud.vmwareengine.v1.ListClustersResponse"M���></v1/{parent=projects/*/locations/*/privateClouds/*}/clusters�Aparent�

GetCluster/.google.cloud.vmwareengine.v1.GetClusterRequest%.google.cloud.vmwareengine.v1.Cluster"K���></v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�Aname�
CreateCluster2.google.cloud.vmwareengine.v1.CreateClusterRequest.google.longrunning.Operation"����G"</v1/{parent=projects/*/locations/*/privateClouds/*}/clusters:cluster�Aparent,cluster,cluster_id�A
ClusterOperationMetadata�
UpdateCluster2.google.cloud.vmwareengine.v1.UpdateClusterRequest.google.longrunning.Operation"����O2D/v1/{cluster.name=projects/*/locations/*/privateClouds/*/clusters/*}:cluster�Acluster,update_mask�A
ClusterOperationMetadata�
DeleteCluster2.google.cloud.vmwareengine.v1.DeleteClusterRequest.google.longrunning.Operation"x���>*</v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListSubnets0.google.cloud.vmwareengine.v1.ListSubnetsRequest1.google.cloud.vmwareengine.v1.ListSubnetsResponse"L���=;/v1/{parent=projects/*/locations/*/privateClouds/*}/subnets�Aparent�
ListNodeTypes2.google.cloud.vmwareengine.v1.ListNodeTypesRequest3.google.cloud.vmwareengine.v1.ListNodeTypesResponse">���/-/v1/{parent=projects/*/locations/*}/nodeTypes�Aparent�
GetNodeType0.google.cloud.vmwareengine.v1.GetNodeTypeRequest&.google.cloud.vmwareengine.v1.NodeType"<���/-/v1/{name=projects/*/locations/*/nodeTypes/*}�Aname�
ShowNsxCredentials7.google.cloud.vmwareengine.v1.ShowNsxCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"e���OM/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showNsxCredentials�Aprivate_cloud�
ShowVcenterCredentials;.google.cloud.vmwareengine.v1.ShowVcenterCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"i���SQ/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showVcenterCredentials�Aprivate_cloud�
ResetNsxCredentials8.google.cloud.vmwareengine.v1.ResetNsxCredentialsRequest.google.longrunning.Operation"����S"N/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetNsxCredentials:*�Aprivate_cloud�A!
PrivateCloudOperationMetadata�
ResetVcenterCredentials<.google.cloud.vmwareengine.v1.ResetVcenterCredentialsRequest.google.longrunning.Operation"����W"R/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetVcenterCredentials:*�Aprivate_cloud�A!
PrivateCloudOperationMetadata�
CreateHcxActivationKey;.google.cloud.vmwareengine.v1.CreateHcxActivationKeyRequest.google.longrunning.Operation"����["E/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys:hcx_activation_key�A/parent,hcx_activation_key,hcx_activation_key_id�A%
HcxActivationKeyOperationMetadata�
ListHcxActivationKeys:.google.cloud.vmwareengine.v1.ListHcxActivationKeysRequest;.google.cloud.vmwareengine.v1.ListHcxActivationKeysResponse"V���GE/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys�Aparent�
GetHcxActivationKey8.google.cloud.vmwareengine.v1.GetHcxActivationKeyRequest..google.cloud.vmwareengine.v1.HcxActivationKey"T���GE/v1/{name=projects/*/locations/*/privateClouds/*/hcxActivationKeys/*}�Aname�
GetNetworkPolicy5.google.cloud.vmwareengine.v1.GetNetworkPolicyRequest+.google.cloud.vmwareengine.v1.NetworkPolicy"B���53/v1/{name=projects/*/locations/*/networkPolicies/*}�Aname�
ListNetworkPolicies8.google.cloud.vmwareengine.v1.ListNetworkPoliciesRequest9.google.cloud.vmwareengine.v1.ListNetworkPoliciesResponse"D���53/v1/{parent=projects/*/locations/*}/networkPolicies�Aparent�
CreateNetworkPolicy8.google.cloud.vmwareengine.v1.CreateNetworkPolicyRequest.google.longrunning.Operation"����E"3/v1/{parent=projects/*/locations/*}/networkPolicies:network_policy�A\'parent,network_policy,network_policy_id�A"
NetworkPolicyOperationMetadata�
UpdateNetworkPolicy8.google.cloud.vmwareengine.v1.UpdateNetworkPolicyRequest.google.longrunning.Operation"����T2B/v1/{network_policy.name=projects/*/locations/*/networkPolicies/*}:network_policy�Anetwork_policy,update_mask�A"
NetworkPolicyOperationMetadata�
DeleteNetworkPolicy8.google.cloud.vmwareengine.v1.DeleteNetworkPolicyRequest.google.longrunning.Operation"o���5*3/v1/{name=projects/*/locations/*/networkPolicies/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
CreateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.CreateVmwareEngineNetworkRequest.google.longrunning.Operation"����Q"8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks:vmware_engine_network�A5parent,vmware_engine_network,vmware_engine_network_id�A(
VmwareEngineNetworkOperationMetadata�
UpdateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.UpdateVmwareEngineNetworkRequest.google.longrunning.Operation"����g2N/v1/{vmware_engine_network.name=projects/*/locations/*/vmwareEngineNetworks/*}:vmware_engine_network�A!vmware_engine_network,update_mask�A(
VmwareEngineNetworkOperationMetadata�
DeleteVmwareEngineNetwork>.google.cloud.vmwareengine.v1.DeleteVmwareEngineNetworkRequest.google.longrunning.Operation"t���:*8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetVmwareEngineNetwork;.google.cloud.vmwareengine.v1.GetVmwareEngineNetworkRequest1.google.cloud.vmwareengine.v1.VmwareEngineNetwork"G���:8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�Aname�
ListVmwareEngineNetworks=.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksRequest>.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksResponse"I���:8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks�AparentO�Avmwareengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.vmwareengine.v1BVmwareengineProtoPZDcloud.google.com/go/vmwareengine/apiv1/vmwareenginepb;vmwareenginepb�Google.Cloud.VmwareEngine.V1�Google\\Cloud\\VmwareEngine\\V1�Google::Cloud::VmwareEngine::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

