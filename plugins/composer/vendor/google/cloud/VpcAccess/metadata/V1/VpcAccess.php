<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vpcaccess/v1/vpc_access.proto

namespace GPBMetadata\Google\Cloud\Vpcaccess\V1;

class VpcAccess
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
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/vpcaccess/v1/vpc_access.protogoogle.cloud.vpcaccess.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
	Connector
name (	
network (	
ip_cidr_range (	>
state (2*.google.cloud.vpcaccess.v1.Connector.StateB�A
min_throughput (
max_throughput (
connected_projects (	B�A;
subnet (2+.google.cloud.vpcaccess.v1.Connector.Subnet
machine_type
 (	
min_instances (
max_instances (*
Subnet
name (	

project_id (	"^
State
STATE_UNSPECIFIED 	
READY
CREATING
DELETING	
ERROR
UPDATING:g�Ad
"vpcaccess.googleapis.com/Connector>projects/{project}/locations/{location}/connectors/{connector}"�
CreateConnectorRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
connector_id (	B�A<
	connector (2$.google.cloud.vpcaccess.v1.ConnectorB�A"O
GetConnectorRequest8
name (	B*�A�A$
"vpcaccess.googleapis.com/Connector"y
ListConnectorsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"k
ListConnectorsResponse8

connectors (2$.google.cloud.vpcaccess.v1.Connector
next_page_token (	"R
DeleteConnectorRequest8
name (	B*�A�A$
"vpcaccess.googleapis.com/Connector"�
OperationMetadata
method (	B�A4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A:
target (	B*�A�A$
"vpcaccess.googleapis.com/Connector2�
VpcAccessService�
CreateConnector1.google.cloud.vpcaccess.v1.CreateConnectorRequest.google.longrunning.Operation"����;"./v1/{parent=projects/*/locations/*}/connectors:	connector�Aparent,connector_id,connector�A
	ConnectorOperationMetadata�
GetConnector..google.cloud.vpcaccess.v1.GetConnectorRequest$.google.cloud.vpcaccess.v1.Connector"=���0./v1/{name=projects/*/locations/*/connectors/*}�Aname�
ListConnectors0.google.cloud.vpcaccess.v1.ListConnectorsRequest1.google.cloud.vpcaccess.v1.ListConnectorsResponse"?���0./v1/{parent=projects/*/locations/*}/connectors�Aparent�
DeleteConnector1.google.cloud.vpcaccess.v1.DeleteConnectorRequest.google.longrunning.Operation"j���0*./v1/{name=projects/*/locations/*/connectors/*}�Aname�A*
google.protobuf.EmptyOperationMetadataL�Avpcaccess.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.vpcaccess.v1BVpcAccessProtoPZ;cloud.google.com/go/vpcaccess/apiv1/vpcaccesspb;vpcaccesspb�Google.Cloud.VpcAccess.V1�Google\\Cloud\\VpcAccess\\V1�Google::Cloud::VpcAccess::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

