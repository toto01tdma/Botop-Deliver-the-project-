<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1;

class Datatransfer
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
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Transfer::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�P
8google/cloud/bigquery/datatransfer/v1/datatransfer.proto%google.cloud.bigquery.datatransfer.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto4google/cloud/bigquery/datatransfer/v1/transfer.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
DataSourceParameter
param_id (	
display_name (	
description (	M
type (2?.google.cloud.bigquery.datatransfer.v1.DataSourceParameter.Type
required (
repeated (
validation_regex (	
allowed_values (	/
	min_value	 (2.google.protobuf.DoubleValue/
	max_value
 (2.google.protobuf.DoubleValueJ
fields (2:.google.cloud.bigquery.datatransfer.v1.DataSourceParameter
validation_description (	
validation_help_url (	
	immutable (
recurse (

deprecated ("i
Type
TYPE_UNSPECIFIED 

STRING
INTEGER

DOUBLE
BOOLEAN

RECORD
	PLUS_PAGE"�	

DataSource
name (	B�A
data_source_id (	
display_name (	
description (	
	client_id (	
scopes (	N
transfer_type (23.google.cloud.bigquery.datatransfer.v1.TransferTypeB\'
supports_multiple_transfers (B
update_deadline_seconds	 (
default_schedule
 (	 
supports_custom_schedule (N

parameters (2:.google.cloud.bigquery.datatransfer.v1.DataSourceParameter
help_url (	_
authorization_type (2C.google.cloud.bigquery.datatransfer.v1.DataSource.AuthorizationType\\
data_refresh_type (2A.google.cloud.bigquery.datatransfer.v1.DataSource.DataRefreshType(
 default_data_refresh_window_days (
manual_runs_disabled (<
minimum_schedule_interval (2.google.protobuf.Duration"�
AuthorizationType"
AUTHORIZATION_TYPE_UNSPECIFIED 
AUTHORIZATION_CODE"
GOOGLE_PLUS_AUTHORIZATION_CODE
FIRST_PARTY_OAUTH"c
DataRefreshType!
DATA_REFRESH_TYPE_UNSPECIFIED 
SLIDING_WINDOW
CUSTOM_SLIDING_WINDOW:��A�
.bigquerydatatransfer.googleapis.com/DataSource,projects/{project}/dataSources/{data_source}Aprojects/{project}/locations/{location}/dataSources/{data_source}"\\
GetDataSourceRequestD
name (	B6�A�A0
.bigquerydatatransfer.googleapis.com/DataSource"�
ListDataSourcesRequestF
parent (	B6�A�A0.bigquerydatatransfer.googleapis.com/DataSource

page_token (	
	page_size ("�
ListDataSourcesResponseG
data_sources (21.google.cloud.bigquery.datatransfer.v1.DataSource
next_page_token (	B�A"�
CreateTransferConfigRequestJ
parent (	B:�A�A42bigquerydatatransfer.googleapis.com/TransferConfigS
transfer_config (25.google.cloud.bigquery.datatransfer.v1.TransferConfigB�A
authorization_code (	
version_info (	
service_account_name (	"�
UpdateTransferConfigRequestS
transfer_config (25.google.cloud.bigquery.datatransfer.v1.TransferConfigB�A
authorization_code (	4
update_mask (2.google.protobuf.FieldMaskB�A
version_info (	
service_account_name (	"d
GetTransferConfigRequestH
name (	B:�A�A4
2bigquerydatatransfer.googleapis.com/TransferConfig"g
DeleteTransferConfigRequestH
name (	B:�A�A4
2bigquerydatatransfer.googleapis.com/TransferConfig"V
GetTransferRunRequest=
name (	B/�A�A)
\'bigquerydatatransfer.googleapis.com/Run"Y
DeleteTransferRunRequest=
name (	B/�A�A)
\'bigquerydatatransfer.googleapis.com/Run"�
ListTransferConfigsRequestJ
parent (	B:�A�A42bigquerydatatransfer.googleapis.com/TransferConfig
data_source_ids (	

page_token (	
	page_size ("�
ListTransferConfigsResponseT
transfer_configs (25.google.cloud.bigquery.datatransfer.v1.TransferConfigB�A
next_page_token (	B�A"�
ListTransferRunsRequest?
parent (	B/�A�A)\'bigquerydatatransfer.googleapis.com/RunD
states (24.google.cloud.bigquery.datatransfer.v1.TransferState

page_token (	
	page_size (^
run_attempt (2I.google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest.RunAttempt"5

RunAttempt
RUN_ATTEMPT_UNSPECIFIED 

LATEST"�
ListTransferRunsResponseN
transfer_runs (22.google.cloud.bigquery.datatransfer.v1.TransferRunB�A
next_page_token (	B�A"�
ListTransferLogsRequest?
parent (	B/�A�A)
\'bigquerydatatransfer.googleapis.com/Run

page_token (	
	page_size (]
message_types (2F.google.cloud.bigquery.datatransfer.v1.TransferMessage.MessageSeverity"�
ListTransferLogsResponseV
transfer_messages (26.google.cloud.bigquery.datatransfer.v1.TransferMessageB�A
next_page_token (	B�A"^
CheckValidCredsRequestD
name (	B6�A�A0
.bigquerydatatransfer.googleapis.com/DataSource"2
CheckValidCredsResponse
has_valid_creds ("�
ScheduleTransferRunsRequestJ
parent (	B:�A�A4
2bigquerydatatransfer.googleapis.com/TransferConfig3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"`
ScheduleTransferRunsResponse@
runs (22.google.cloud.bigquery.datatransfer.v1.TransferRun"�
StartManualTransferRunsRequestG
parent (	B7�A4
2bigquerydatatransfer.googleapis.com/TransferConfigo
requested_time_range (2O.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequest.TimeRangeH 8
requested_run_time (2.google.protobuf.TimestampH i
	TimeRange.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampB
time"c
StartManualTransferRunsResponse@
runs (22.google.cloud.bigquery.datatransfer.v1.TransferRun"A
EnrollDataSourcesRequest
name (	
data_source_ids (	2�!
DataTransferService�
GetDataSource;.google.cloud.bigquery.datatransfer.v1.GetDataSourceRequest1.google.cloud.bigquery.datatransfer.v1.DataSource"e���X//v1/{name=projects/*/locations/*/dataSources/*}Z%#/v1/{name=projects/*/dataSources/*}�Aname�
ListDataSources=.google.cloud.bigquery.datatransfer.v1.ListDataSourcesRequest>.google.cloud.bigquery.datatransfer.v1.ListDataSourcesResponse"g���X//v1/{parent=projects/*/locations/*}/dataSourcesZ%#/v1/{parent=projects/*}/dataSources�Aparent�
CreateTransferConfigB.google.cloud.bigquery.datatransfer.v1.CreateTransferConfigRequest5.google.cloud.bigquery.datatransfer.v1.TransferConfig"�����"3/v1/{parent=projects/*/locations/*}/transferConfigs:transfer_configZ:"\'/v1/{parent=projects/*}/transferConfigs:transfer_config�Aparent,transfer_config�
UpdateTransferConfigB.google.cloud.bigquery.datatransfer.v1.UpdateTransferConfigRequest5.google.cloud.bigquery.datatransfer.v1.TransferConfig"�����2C/v1/{transfer_config.name=projects/*/locations/*/transferConfigs/*}:transfer_configZJ27/v1/{transfer_config.name=projects/*/transferConfigs/*}:transfer_config�Atransfer_config,update_mask�
DeleteTransferConfigB.google.cloud.bigquery.datatransfer.v1.DeleteTransferConfigRequest.google.protobuf.Empty"m���`*3/v1/{name=projects/*/locations/*/transferConfigs/*}Z)*\'/v1/{name=projects/*/transferConfigs/*}�Aname�
GetTransferConfig?.google.cloud.bigquery.datatransfer.v1.GetTransferConfigRequest5.google.cloud.bigquery.datatransfer.v1.TransferConfig"m���`3/v1/{name=projects/*/locations/*/transferConfigs/*}Z)\'/v1/{name=projects/*/transferConfigs/*}�Aname�
ListTransferConfigsA.google.cloud.bigquery.datatransfer.v1.ListTransferConfigsRequestB.google.cloud.bigquery.datatransfer.v1.ListTransferConfigsResponse"o���`3/v1/{parent=projects/*/locations/*}/transferConfigsZ)\'/v1/{parent=projects/*}/transferConfigs�Aparent�
ScheduleTransferRunsB.google.cloud.bigquery.datatransfer.v1.ScheduleTransferRunsRequestC.google.cloud.bigquery.datatransfer.v1.ScheduleTransferRunsResponse"������"B/v1/{parent=projects/*/locations/*/transferConfigs/*}:scheduleRuns:*Z;"6/v1/{parent=projects/*/transferConfigs/*}:scheduleRuns:*�Aparent,start_time,end_time�
StartManualTransferRunsE.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsRequestF.google.cloud.bigquery.datatransfer.v1.StartManualTransferRunsResponse"�����"E/v1/{parent=projects/*/locations/*/transferConfigs/*}:startManualRuns:*Z>"9/v1/{parent=projects/*/transferConfigs/*}:startManualRuns:*�
GetTransferRun<.google.cloud.bigquery.datatransfer.v1.GetTransferRunRequest2.google.cloud.bigquery.datatransfer.v1.TransferRun"{���n:/v1/{name=projects/*/locations/*/transferConfigs/*/runs/*}Z0./v1/{name=projects/*/transferConfigs/*/runs/*}�Aname�
DeleteTransferRun?.google.cloud.bigquery.datatransfer.v1.DeleteTransferRunRequest.google.protobuf.Empty"{���n*:/v1/{name=projects/*/locations/*/transferConfigs/*/runs/*}Z0*./v1/{name=projects/*/transferConfigs/*/runs/*}�Aname�
ListTransferRuns>.google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest?.google.cloud.bigquery.datatransfer.v1.ListTransferRunsResponse"}���n:/v1/{parent=projects/*/locations/*/transferConfigs/*}/runsZ0./v1/{parent=projects/*/transferConfigs/*}/runs�Aparent�
ListTransferLogs>.google.cloud.bigquery.datatransfer.v1.ListTransferLogsRequest?.google.cloud.bigquery.datatransfer.v1.ListTransferLogsResponse"�����I/v1/{parent=projects/*/locations/*/transferConfigs/*/runs/*}/transferLogsZ?=/v1/{parent=projects/*/transferConfigs/*/runs/*}/transferLogs�Aparent�
CheckValidCreds=.google.cloud.bigquery.datatransfer.v1.CheckValidCredsRequest>.google.cloud.bigquery.datatransfer.v1.CheckValidCredsResponse"����~"?/v1/{name=projects/*/locations/*/dataSources/*}:checkValidCreds:*Z8"3/v1/{name=projects/*/dataSources/*}:checkValidCreds:*�Aname�
EnrollDataSources?.google.cloud.bigquery.datatransfer.v1.EnrollDataSourcesRequest.google.protobuf.Empty"l���f"3/v1/{name=projects/*/locations/*}:enrollDataSources:*Z,"\'/v1/{name=projects/*}:enrollDataSources:*W�A#bigquerydatatransfer.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.bigquery.datatransfer.v1BDataTransferProtoPZMcloud.google.com/go/bigquery/datatransfer/apiv1/datatransferpb;datatransferpb�%Google.Cloud.BigQuery.DataTransfer.V1�%Google\\Cloud\\BigQuery\\DataTransfer\\V1�)Google::Cloud::Bigquery::DataTransfer::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

