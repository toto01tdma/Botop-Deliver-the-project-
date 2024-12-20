<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/network.proto

namespace GPBMetadata\Google\Cloud\Baremetalsolution\V2;

class Network
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
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/baremetalsolution/v2/network.proto!google.cloud.baremetalsolution.v2google/api/resource.proto google/protobuf/field_mask.proto"�
Network
name (	B�A

id
 (	=
type (2/.google.cloud.baremetalsolution.v2.Network.Type

ip_address (	
mac_address (	?
state (20.google.cloud.baremetalsolution.v2.Network.State
vlan_id (	
cidr (	3
vrf	 (2&.google.cloud.baremetalsolution.v2.VRFF
labels (26.google.cloud.baremetalsolution.v2.Network.LabelsEntry
services_cidr (	R
reservations (2<.google.cloud.baremetalsolution.v2.NetworkAddressReservation-
LabelsEntry
key (	
value (	:8"5
Type
TYPE_UNSPECIFIED 

CLIENT
PRIVATE"A
State
STATE_UNSPECIFIED 
PROVISIONING
PROVISIONED:i�Af
(baremetalsolution.googleapis.com/Network:projects/{project}/locations/{location}/networks/{network}"U
NetworkAddressReservation
start_address (	
end_address (	
note (	"�
VRF
name (	;
state (2,.google.cloud.baremetalsolution.v2.VRF.StateD

qos_policy (20.google.cloud.baremetalsolution.v2.VRF.QosPolicyO
vlan_attachments (25.google.cloud.baremetalsolution.v2.VRF.VlanAttachment#
	QosPolicy
bandwidth_gbps (J
VlanAttachment
peer_vlan_id (
peer_ip (	
	router_ip (	"A
State
STATE_UNSPECIFIED 
PROVISIONING
PROVISIONED"�
LogicalInterfaceo
logical_network_interfaces (2K.google.cloud.baremetalsolution.v2.LogicalInterface.LogicalNetworkInterface
name (	
interface_index (�
LogicalNetworkInterface
network (	

ip_address (	
default_gateway (E
network_type (2/.google.cloud.baremetalsolution.v2.Network.Type

id (	"S
GetNetworkRequest>
name (	B0�A�A*
(baremetalsolution.googleapis.com/Network"�
ListNetworksRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"�
ListNetworksResponse<
networks (2*.google.cloud.baremetalsolution.v2.Network
next_page_token (	
unreachable (	"�
UpdateNetworkRequest@
network (2*.google.cloud.baremetalsolution.v2.NetworkB�A/
update_mask (2.google.protobuf.FieldMask"]
NetworkUsage;
network (2*.google.cloud.baremetalsolution.v2.Network
used_ips (	"V
ListNetworkUsageRequest;
location (	B)�A�A#
!locations.googleapis.com/Location"]
ListNetworkUsageResponseA
networks (2/.google.cloud.baremetalsolution.v2.NetworkUsageB�
%com.google.cloud.baremetalsolution.v2BNetworkProtoPZScloud.google.com/go/baremetalsolution/apiv2/baremetalsolutionpb;baremetalsolutionpb�!Google.Cloud.BareMetalSolution.V2�!Google\\Cloud\\BareMetalSolution\\V2�$Google::Cloud::BareMetalSolution::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

