<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class ImportConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Document::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\UserEvent::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/discoveryengine/v1beta/import_config.proto#google.cloud.discoveryengine.v1betagoogle/api/resource.proto2google/cloud/discoveryengine/v1beta/document.proto4google/cloud/discoveryengine/v1beta/user_event.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/date.proto"9
	GcsSource

input_uris (	B�A
data_schema (	"�
BigQuerySource+
partition_date (2.google.type.DateH 

project_id (	

dataset_id (	B�A
table_id (	B�A
gcs_staging_dir (	
data_schema (	B
	partition"8
ImportErrorConfig

gcs_prefix (	H B
destination"�
ImportUserEventsRequestg
inline_source (2I.google.cloud.discoveryengine.v1beta.ImportUserEventsRequest.InlineSourceB�AH I

gcs_source (2..google.cloud.discoveryengine.v1beta.GcsSourceB�AH S
bigquery_source (23.google.cloud.discoveryengine.v1beta.BigQuerySourceB�AH @
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreL
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfigX
InlineSourceH
user_events (2..google.cloud.discoveryengine.v1beta.UserEventB�AB
source"�
ImportUserEventsResponse)
error_samples (2.google.rpc.StatusL
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfig
joined_events_count (
unjoined_events_count ("�
ImportUserEventsMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
success_count (
failure_count ("�
ImportDocumentsMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
success_count (
failure_count ("�
ImportDocumentsRequesta
inline_source (2H.google.cloud.discoveryengine.v1beta.ImportDocumentsRequest.InlineSourceH D

gcs_source (2..google.cloud.discoveryengine.v1beta.GcsSourceH N
bigquery_source (23.google.cloud.discoveryengine.v1beta.BigQuerySourceH =
parent (	B-�A�A\'
%discoveryengine.googleapis.com/BranchL
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfigk
reconciliation_mode (2N.google.cloud.discoveryengine.v1beta.ImportDocumentsRequest.ReconciliationMode
auto_generate_ids (
id_field	 (	U
InlineSourceE
	documents (2-.google.cloud.discoveryengine.v1beta.DocumentB�A"T
ReconciliationMode#
RECONCILIATION_MODE_UNSPECIFIED 
INCREMENTAL
FULLB
source"�
ImportDocumentsResponse)
error_samples (2.google.rpc.StatusL
error_config (26.google.cloud.discoveryengine.v1beta.ImportErrorConfigB�
\'com.google.cloud.discoveryengine.v1betaBImportConfigProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

