<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class IndexEndpointService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpoint::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
7google/cloud/aiplatform/v1/index_endpoint_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto/google/cloud/aiplatform/v1/index_endpoint.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateIndexEndpointRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationF
index_endpoint (2).google.cloud.aiplatform.v1.IndexEndpointB�A"v
$CreateIndexEndpointOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"X
GetIndexEndpointRequest=
name (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint"�
ListIndexEndpointsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A2
	read_mask (2.google.protobuf.FieldMaskB�A"y
ListIndexEndpointsResponseB
index_endpoints (2).google.cloud.aiplatform.v1.IndexEndpoint
next_page_token (	"�
UpdateIndexEndpointRequestF
index_endpoint (2).google.cloud.aiplatform.v1.IndexEndpointB�A4
update_mask (2.google.protobuf.FieldMaskB�A"[
DeleteIndexEndpointRequest=
name (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint"�
DeployIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpointF
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndexB�A"X
DeployIndexResponseA
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndex"�
DeployIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
deployed_index_id (	"
UndeployIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint
deployed_index_id (	B�A"
UndeployIndexResponse"p
UndeployIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"�
MutateDeployedIndexRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpointF
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndexB�A"`
MutateDeployedIndexResponseA
deployed_index (2).google.cloud.aiplatform.v1.DeployedIndex"�
$MutateDeployedIndexOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
deployed_index_id (	2�
IndexEndpointService�
CreateIndexEndpoint6.google.cloud.aiplatform.v1.CreateIndexEndpointRequest.google.longrunning.Operation"����D"2/v1/{parent=projects/*/locations/*}/indexEndpoints:index_endpoint�Aparent,index_endpoint�A5
IndexEndpoint$CreateIndexEndpointOperationMetadata�
GetIndexEndpoint3.google.cloud.aiplatform.v1.GetIndexEndpointRequest).google.cloud.aiplatform.v1.IndexEndpoint"A���42/v1/{name=projects/*/locations/*/indexEndpoints/*}�Aname�
ListIndexEndpoints5.google.cloud.aiplatform.v1.ListIndexEndpointsRequest6.google.cloud.aiplatform.v1.ListIndexEndpointsResponse"C���42/v1/{parent=projects/*/locations/*}/indexEndpoints�Aparent�
UpdateIndexEndpoint6.google.cloud.aiplatform.v1.UpdateIndexEndpointRequest).google.cloud.aiplatform.v1.IndexEndpoint"v���S2A/v1/{index_endpoint.name=projects/*/locations/*/indexEndpoints/*}:index_endpoint�Aindex_endpoint,update_mask�
DeleteIndexEndpoint6.google.cloud.aiplatform.v1.DeleteIndexEndpointRequest.google.longrunning.Operation"t���4*2/v1/{name=projects/*/locations/*/indexEndpoints/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
DeployIndex..google.cloud.aiplatform.v1.DeployIndexRequest.google.longrunning.Operation"����M"H/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:deployIndex:*�Aindex_endpoint,deployed_index�A3
DeployIndexResponseDeployIndexOperationMetadata�
UndeployIndex0.google.cloud.aiplatform.v1.UndeployIndexRequest.google.longrunning.Operation"����O"J/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:undeployIndex:*�A index_endpoint,deployed_index_id�A7
UndeployIndexResponseUndeployIndexOperationMetadata�
MutateDeployedIndex6.google.cloud.aiplatform.v1.MutateDeployedIndexRequest.google.longrunning.Operation"����b"P/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:mutateDeployedIndex:deployed_index�Aindex_endpoint,deployed_index�AC
MutateDeployedIndexResponse$MutateDeployedIndexOperationMetadataM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BIndexEndpointServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

