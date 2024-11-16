<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace GPBMetadata\Google\Cloud\Tpu\V2;

class CloudTpu
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�A
#google/cloud/tpu/v2/cloud_tpu.protogoogle.cloud.tpu.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"e
GuestAttributes

query_path (	>
query_value (2).google.cloud.tpu.v2.GuestAttributesValue"P
GuestAttributesValue8
items (2).google.cloud.tpu.v2.GuestAttributesEntry"E
GuestAttributesEntry
	namespace (	
key (	
value (	"�
AttachedDisk
source_disk (	8
mode (2*.google.cloud.tpu.v2.AttachedDisk.DiskMode"D
DiskMode
DISK_MODE_UNSPECIFIED 

READ_WRITE
	READ_ONLY"9
SchedulingConfig
preemptible (
reserved ("m
NetworkEndpoint

ip_address (	
port (8
access_config (2!.google.cloud.tpu.v2.AccessConfig"(
AccessConfig
external_ip (	B�A"i
NetworkConfig
network (	

subnetwork (	
enable_external_ips (
can_ip_forward (".
ServiceAccount
email (	
scope (	"�
Node
name (	B�A�A
description (	
accelerator_type (	B�A3
state	 (2.google.cloud.tpu.v2.Node.StateB�A
health_description
 (	B�A
runtime_version (	B�A:
network_config$ (2".google.cloud.tpu.v2.NetworkConfig

cidr_block (	<
service_account% (2#.google.cloud.tpu.v2.ServiceAccount4
create_time (2.google.protobuf.TimestampB�A@
scheduling_config (2%.google.cloud.tpu.v2.SchedulingConfigD
network_endpoints (2$.google.cloud.tpu.v2.NetworkEndpointB�A0
health (2 .google.cloud.tpu.v2.Node.Health5
labels (2%.google.cloud.tpu.v2.Node.LabelsEntry9
metadata" (2\'.google.cloud.tpu.v2.Node.MetadataEntry
tags( (	
id! (B�A5

data_disks) (2!.google.cloud.tpu.v2.AttachedDisk>
api_version& (2$.google.cloud.tpu.v2.Node.ApiVersionB�A3
symptoms\' (2.google.cloud.tpu.v2.SymptomB�AM
shielded_instance_config- (2+.google.cloud.tpu.v2.ShieldedInstanceConfigB
accelerator_config. (2&.google.cloud.tpu.v2.AcceleratorConfig-
LabelsEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
CREATING	
READY

RESTARTING
	REIMAGING
DELETING
	REPAIRING
STOPPED
STOPPING	
STARTING

	PREEMPTED

TERMINATED

HIDING

HIDDEN
UNHIDING"o
Health
HEALTH_UNSPECIFIED 
HEALTHY
TIMEOUT
UNHEALTHY_TENSORFLOW
UNHEALTHY_MAINTENANCE"W

ApiVersion
API_VERSION_UNSPECIFIED 
	V1_ALPHA1
V1
	V2_ALPHA1
V2:R�AO
tpu.googleapis.com/Node4projects/{project}/locations/{location}/nodes/{node}"j
ListNodesRequest/
parent (	B�A�Atpu.googleapis.com/Node
	page_size (

page_token (	"k
ListNodesResponse(
nodes (2.google.cloud.tpu.v2.Node
next_page_token (	
unreachable (	"?
GetNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"�
CreateNodeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
node_id (	,
node (2.google.cloud.tpu.v2.NodeB�A"B
DeleteNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"@
StopNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"A
StartNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"w
UpdateNodeRequest4
update_mask (2.google.protobuf.FieldMaskB�A,
node (2.google.cloud.tpu.v2.NodeB�A" 
ServiceIdentity
email (	"[
GenerateServiceIdentityRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location"Y
GenerateServiceIdentityResponse6
identity (2$.google.cloud.tpu.v2.ServiceIdentity"�
AcceleratorType
name (	
type (	C
accelerator_configs (2&.google.cloud.tpu.v2.AcceleratorConfig:t�Aq
"tpu.googleapis.com/AcceleratorTypeKprojects/{project}/locations/{location}/acceleratorTypes/{accelerator_type}"U
GetAcceleratorTypeRequest8
name (	B*�A�A$
"tpu.googleapis.com/AcceleratorType"�
ListAcceleratorTypesRequest:
parent (	B*�A�A$"tpu.googleapis.com/AcceleratorType
	page_size (

page_token (	
filter (	
order_by (	"�
ListAcceleratorTypesResponse?
accelerator_types (2$.google.cloud.tpu.v2.AcceleratorType
next_page_token (	
unreachable (	"�
RuntimeVersion
name (	
version (	:q�An
!tpu.googleapis.com/RuntimeVersionIprojects/{project}/locations/{location}/runtimeVersions/{runtime_version}"S
GetRuntimeVersionRequest7
name (	B)�A�A#
!tpu.googleapis.com/RuntimeVersion"�
ListRuntimeVersionsRequest9
parent (	B)�A�A#!tpu.googleapis.com/RuntimeVersion
	page_size (

page_token (	
filter (	
order_by (	"�
ListRuntimeVersionsResponse=
runtime_versions (2#.google.cloud.tpu.v2.RuntimeVersion
next_page_token (	
unreachable (	"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
cancel_requested (
api_version (	"�
Symptom/
create_time (2.google.protobuf.Timestamp>
symptom_type (2(.google.cloud.tpu.v2.Symptom.SymptomType
details (	
	worker_id (	"�
SymptomType
SYMPTOM_TYPE_UNSPECIFIED 

LOW_MEMORY
OUT_OF_MEMORY
EXECUTE_TIMED_OUT
MESH_BUILD_FAIL
HBM_OUT_OF_MEMORY
PROJECT_ABUSE"r
GetGuestAttributesRequest-
name (	B�A�A
tpu.googleapis.com/Node

query_path (	

worker_ids (	"\\
GetGuestAttributesResponse>
guest_attributes (2$.google.cloud.tpu.v2.GuestAttributes"�
AcceleratorConfig>
type (2+.google.cloud.tpu.v2.AcceleratorConfig.TypeB�A
topology (	B�A"4
Type
TYPE_UNSPECIFIED 
V2
V3
V4"4
ShieldedInstanceConfig
enable_secure_boot (2�
Tpu�
	ListNodes%.google.cloud.tpu.v2.ListNodesRequest&.google.cloud.tpu.v2.ListNodesResponse":���+)/v2/{parent=projects/*/locations/*}/nodes�Aparent�
GetNode#.google.cloud.tpu.v2.GetNodeRequest.google.cloud.tpu.v2.Node"8���+)/v2/{name=projects/*/locations/*/nodes/*}�Aname�

CreateNode&.google.cloud.tpu.v2.CreateNodeRequest.google.longrunning.Operation"i���1")/v2/{parent=projects/*/locations/*}/nodes:node�Aparent,node,node_id�A
NodeOperationMetadata�

DeleteNode&.google.cloud.tpu.v2.DeleteNodeRequest.google.longrunning.Operation"e���+*)/v2/{name=projects/*/locations/*/nodes/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
StopNode$.google.cloud.tpu.v2.StopNodeRequest.google.longrunning.Operation"U���3"./v2/{name=projects/*/locations/*/nodes/*}:stop:*�A
NodeOperationMetadata�
	StartNode%.google.cloud.tpu.v2.StartNodeRequest.google.longrunning.Operation"V���4"//v2/{name=projects/*/locations/*/nodes/*}:start:*�A
NodeOperationMetadata�

UpdateNode&.google.cloud.tpu.v2.UpdateNodeRequest.google.longrunning.Operation"k���62./v2/{node.name=projects/*/locations/*/nodes/*}:node�Anode,update_mask�A
NodeOperationMetadata�
GenerateServiceIdentity3.google.cloud.tpu.v2.GenerateServiceIdentityRequest4.google.cloud.tpu.v2.GenerateServiceIdentityResponse"F���@";/v2/{parent=projects/*/locations/*}:generateServiceIdentity:*�
ListAcceleratorTypes0.google.cloud.tpu.v2.ListAcceleratorTypesRequest1.google.cloud.tpu.v2.ListAcceleratorTypesResponse"E���64/v2/{parent=projects/*/locations/*}/acceleratorTypes�Aparent�
GetAcceleratorType..google.cloud.tpu.v2.GetAcceleratorTypeRequest$.google.cloud.tpu.v2.AcceleratorType"C���64/v2/{name=projects/*/locations/*/acceleratorTypes/*}�Aname�
ListRuntimeVersions/.google.cloud.tpu.v2.ListRuntimeVersionsRequest0.google.cloud.tpu.v2.ListRuntimeVersionsResponse"D���53/v2/{parent=projects/*/locations/*}/runtimeVersions�Aparent�
GetRuntimeVersion-.google.cloud.tpu.v2.GetRuntimeVersionRequest#.google.cloud.tpu.v2.RuntimeVersion"B���53/v2/{name=projects/*/locations/*/runtimeVersions/*}�Aname�
GetGuestAttributes..google.cloud.tpu.v2.GetGuestAttributesRequest/.google.cloud.tpu.v2.GetGuestAttributesResponse"G���A"</v2/{name=projects/*/locations/*/nodes/*}:getGuestAttributes:*F�Atpu.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBU
com.google.cloud.tpu.v2BCloudTpuProtoPZ)cloud.google.com/go/tpu/apiv2/tpupb;tpupbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

