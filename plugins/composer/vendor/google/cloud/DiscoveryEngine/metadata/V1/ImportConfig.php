<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/discoveryengine/v1/import_config.protogoogle.cloud.discoveryengine.v1google/api/resource.proto.google/cloud/discoveryengine/v1/document.proto0google/cloud/discoveryengine/v1/user_event.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/date.proto"9
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
ImportUserEventsRequestc
inline_source (2E.google.cloud.discoveryengine.v1.ImportUserEventsRequest.InlineSourceB�AH E

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceB�AH O
bigquery_source (2/.google.cloud.discoveryengine.v1.BigQuerySourceB�AH @
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfigT
InlineSourceD
user_events (2*.google.cloud.discoveryengine.v1.UserEventB�AB
source"�
ImportUserEventsResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig
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
ImportDocumentsRequest]
inline_source (2D.google.cloud.discoveryengine.v1.ImportDocumentsRequest.InlineSourceH @

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceH J
bigquery_source (2/.google.cloud.discoveryengine.v1.BigQuerySourceH =
parent (	B-�A�A\'
%discoveryengine.googleapis.com/BranchH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfigg
reconciliation_mode (2J.google.cloud.discoveryengine.v1.ImportDocumentsRequest.ReconciliationMode
auto_generate_ids (
id_field	 (	Q
InlineSourceA
	documents (2).google.cloud.discoveryengine.v1.DocumentB�A"T
ReconciliationMode#
RECONCILIATION_MODE_UNSPECIFIED 
INCREMENTAL
FULLB
source"�
ImportDocumentsResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfigB�
#com.google.cloud.discoveryengine.v1BImportConfigProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

