<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore_federation.proto

namespace GPBMetadata\Google\Cloud\Metastore\V1Alpha;

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
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/metastore/v1alpha/metastore_federation.protogoogle.cloud.metastore.v1alphagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto.google/cloud/metastore/v1alpha/metastore.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Federation
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AF
labels (26.google.cloud.metastore.v1alpha.Federation.LabelsEntry
version (	B�A]
backend_metastores (2A.google.cloud.metastore.v1alpha.Federation.BackendMetastoresEntry
endpoint_uri (	B�AD
state (20.google.cloud.metastore.v1alpha.Federation.StateB�A
state_message	 (	B�A
uid
 (	B�A-
LabelsEntry
key (	
value (	:8j
BackendMetastoresEntry
key (?
value (20.google.cloud.metastore.v1alpha.BackendMetastore:8"_
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING	
ERROR:j�Ag
#metastore.googleapis.com/Federation@projects/{project}/locations/{location}/federations/{federation}"�
BackendMetastore
name (	V
metastore_type (2>.google.cloud.metastore.v1alpha.BackendMetastore.MetastoreType"c
MetastoreType
METASTORE_TYPE_UNSPECIFIED 
DATAPLEX
BIGQUERY
DATAPROC_METASTORE"�
ListFederationsRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListFederationsResponse?
federations (2*.google.cloud.metastore.v1alpha.Federation
next_page_token (	
unreachable (	"Q
GetFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation"�
CreateFederationRequest;
parent (	B+�A�A%#metastore.googleapis.com/Federation
federation_id (	B�AC

federation (2*.google.cloud.metastore.v1alpha.FederationB�A

request_id (	B�A"�
UpdateFederationRequest4
update_mask (2.google.protobuf.FieldMaskB�AC

federation (2*.google.cloud.metastore.v1alpha.FederationB�A

request_id (	B�A"m
DeleteFederationRequest9
name (	B+�A�A%
#metastore.googleapis.com/Federation

request_id (	B�A2�

DataprocMetastoreFederation�
ListFederations6.google.cloud.metastore.v1alpha.ListFederationsRequest7.google.cloud.metastore.v1alpha.ListFederationsResponse"E���64/v1alpha/{parent=projects/*/locations/*}/federations�Aparent�
GetFederation4.google.cloud.metastore.v1alpha.GetFederationRequest*.google.cloud.metastore.v1alpha.Federation"C���64/v1alpha/{name=projects/*/locations/*/federations/*}�Aname�
CreateFederation7.google.cloud.metastore.v1alpha.CreateFederationRequest.google.longrunning.Operation"����B"4/v1alpha/{parent=projects/*/locations/*}/federations:
federation�Aparent,federation,federation_id�A>

Federation0google.cloud.metastore.v1alpha.OperationMetadata�
UpdateFederation7.google.cloud.metastore.v1alpha.UpdateFederationRequest.google.longrunning.Operation"����M2?/v1alpha/{federation.name=projects/*/locations/*/federations/*}:
federation�Afederation,update_mask�A>

Federation0google.cloud.metastore.v1alpha.OperationMetadata�
DeleteFederation7.google.cloud.metastore.v1alpha.DeleteFederationRequest.google.longrunning.Operation"����6*4/v1alpha/{name=projects/*/locations/*/federations/*}�Aname�AI
google.protobuf.Empty0google.cloud.metastore.v1alpha.OperationMetadataL�Ametastore.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
"com.google.cloud.metastore.v1alphaBMetastoreFederationProtoPZ@cloud.google.com/go/metastore/apiv1alpha/metastorepb;metastorepbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

