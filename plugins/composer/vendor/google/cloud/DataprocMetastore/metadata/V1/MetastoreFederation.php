<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore_federation.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1;

class MetastoreFederation
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
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/metastore/v1/metastore_federation.protogoogle.cloud.metastore.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto)google/cloud/metastore/v1/metastore.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Federation
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AA
labels (21.google.cloud.metastore.v1.Federation.LabelsEntry
version (	B�AX
backend_metastores (2<.google.cloud.metastore.v1.Federation.BackendMetastoresEntry
endpoint_uri (	B�A?
state (2+.google.cloud.metastore.v1.Federation.StateB�A
state_message	 (	B�A
uid
 (	B�A-
LabelsEntry
key (	
value (	:8e
BackendMetastoresEntry
key (:
value (2+.google.cloud.metastore.v1.BackendMetastore:8"_
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING	
ERROR:j�Ag
#metastore.googleapis.com/Federation@projects/{project}/locations/{location}/federations/{federation}"�
BackendMetastore
name (	Q
metastore_type (29.google.cloud.metastore.v1.BackendMetastore.MetastoreType"G
MetastoreType
METASTORE_TYPE_UNSPECIFIED 
DATAPROC_METASTORE"�
ListFederationsRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListFederationsResponse:
federations (2%.google.cloud.metastore.v1.Federation
next_page_token (	
unreachable (	"Q
GetFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation"�
CreateFederationRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
federation_id (	B�A>

federation (2%.google.cloud.metastore.v1.FederationB�A

request_id (	B�A"�
UpdateFederationRequest4
update_mask (2.google.protobuf.FieldMaskB�A>

federation (2%.google.cloud.metastore.v1.FederationB�A

request_id (	B�A"m
DeleteFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation

request_id (	B�A2�	
DataprocMetastoreFederation�
ListFederations1.google.cloud.metastore.v1.ListFederationsRequest2.google.cloud.metastore.v1.ListFederationsResponse"@���1//v1/{parent=projects/*/locations/*}/federations�Aparent�
GetFederation/.google.cloud.metastore.v1.GetFederationRequest%.google.cloud.metastore.v1.Federation">���1//v1/{name=projects/*/locations/*/federations/*}�Aname�
CreateFederation2.google.cloud.metastore.v1.CreateFederationRequest.google.longrunning.Operation"����="//v1/{parent=projects/*/locations/*}/federations:
federation�Aparent,federation,federation_id�A9

Federation+google.cloud.metastore.v1.OperationMetadata�
UpdateFederation2.google.cloud.metastore.v1.UpdateFederationRequest.google.longrunning.Operation"����H2:/v1/{federation.name=projects/*/locations/*/federations/*}:
federation�Afederation,update_mask�A9

Federation+google.cloud.metastore.v1.OperationMetadata�
DeleteFederation2.google.cloud.metastore.v1.DeleteFederationRequest.google.longrunning.Operation"����1*//v1/{name=projects/*/locations/*/federations/*}�Aname�AD
google.protobuf.Empty+google.cloud.metastore.v1.OperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBx
com.google.cloud.metastore.v1BMetastoreFederationProtoPZ;cloud.google.com/go/metastore/apiv1/metastorepb;metastorepbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

