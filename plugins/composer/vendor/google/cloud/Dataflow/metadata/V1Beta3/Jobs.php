<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace GPBMetadata\Google\Dataflow\V1Beta3;

class Jobs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Dataflow\V1Beta3\Environment::initOnce();
        \GPBMetadata\Google\Dataflow\V1Beta3\Snapshots::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�?
"google/dataflow/v1beta3/jobs.protogoogle.dataflow.v1beta3google/api/client.proto)google/dataflow/v1beta3/environment.proto\'google/dataflow/v1beta3/snapshots.protogoogle/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�	
Job

id (	

project_id (	
name (	.
type (2 .google.dataflow.v1beta3.JobType9
environment (2$.google.dataflow.v1beta3.Environment,
steps (2.google.dataflow.v1beta3.Step
steps_location (	8
current_state (2!.google.dataflow.v1beta3.JobState6
current_state_time (2.google.protobuf.Timestamp:
requested_state	 (2!.google.dataflow.v1beta3.JobStateA
execution_info
 (2).google.dataflow.v1beta3.JobExecutionInfo/
create_time (2.google.protobuf.Timestamp
replace_job_id (	V
transform_name_mapping (26.google.dataflow.v1beta3.Job.TransformNameMappingEntry
client_request_id (	
replaced_by_job_id (	

temp_files (	8
labels (2(.google.dataflow.v1beta3.Job.LabelsEntry
location (	J
pipeline_description (2,.google.dataflow.v1beta3.PipelineDescriptionB
stage_states (2,.google.dataflow.v1beta3.ExecutionStageState:
job_metadata (2$.google.dataflow.v1beta3.JobMetadata.

start_time (2.google.protobuf.Timestamp 
created_from_snapshot_id (	
satisfies_pzs (;
TransformNameMappingEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8";
DatastoreIODetails
	namespace (	

project_id (	"6
PubSubIODetails
topic (	
subscription (	"%
FileIODetails
file_pattern (	"N
BigTableIODetails

project_id (	
instance_id (	
table_id (	"V
BigQueryIODetails
table (	
dataset (	

project_id (	
query (	"P
SpannerIODetails

project_id (	
instance_id (	
database_id (	"�

SdkVersion
version (	
version_display_name (	P
sdk_support_status (24.google.dataflow.v1beta3.SdkVersion.SdkSupportStatus"Z
SdkSupportStatus
UNKNOWN 
	SUPPORTED	
STALE

DEPRECATED
UNSUPPORTED"�
JobMetadata8
sdk_version (2#.google.dataflow.v1beta3.SdkVersionB
spanner_details (2).google.dataflow.v1beta3.SpannerIODetailsD
bigquery_details (2*.google.dataflow.v1beta3.BigQueryIODetailsE
big_table_details (2*.google.dataflow.v1beta3.BigTableIODetails@
pubsub_details (2(.google.dataflow.v1beta3.PubSubIODetails<
file_details (2&.google.dataflow.v1beta3.FileIODetailsF
datastore_details (2+.google.dataflow.v1beta3.DatastoreIODetails"�
ExecutionStageState
execution_stage_name (	@
execution_stage_state (2!.google.dataflow.v1beta3.JobState6
current_state_time (2.google.protobuf.Timestamp"�
PipelineDescriptionN
original_pipeline_transform (2).google.dataflow.v1beta3.TransformSummaryP
execution_pipeline_stage (2..google.dataflow.v1beta3.ExecutionStageSummary:
display_data (2$.google.dataflow.v1beta3.DisplayData"�
TransformSummary/
kind (2!.google.dataflow.v1beta3.KindType

id (	
name (	:
display_data (2$.google.dataflow.v1beta3.DisplayData
output_collection_name (	
input_collection_name (	"�
ExecutionStageSummary
name (	

id (	/
kind (2!.google.dataflow.v1beta3.KindTypeP
input_source (2:.google.dataflow.v1beta3.ExecutionStageSummary.StageSourceQ
output_source (2:.google.dataflow.v1beta3.ExecutionStageSummary.StageSource
prerequisite_stage (	^
component_transform (2A.google.dataflow.v1beta3.ExecutionStageSummary.ComponentTransformX
component_source (2>.google.dataflow.v1beta3.ExecutionStageSummary.ComponentSourcel
StageSource
	user_name (	
name (	(
 original_transform_or_collection (	

size_bytes (Q
ComponentTransform
	user_name (	
name (	
original_transform (	\\
ComponentSource
	user_name (	
name (	(
 original_transform_or_collection (	"�
DisplayData
key (	
	namespace (	
	str_value (	H 
int64_value (H 
float_value (H 
java_class_value (	H 5
timestamp_value (2.google.protobuf.TimestampH 3
duration_value	 (2.google.protobuf.DurationH 

bool_value
 (H 
short_str_value (	
url (	
label (	B
Value"O
Step
kind (	
name (	+

properties (2.google.protobuf.Struct"�
JobExecutionInfoE
stages (25.google.dataflow.v1beta3.JobExecutionInfo.StagesEntry]
StagesEntry
key (	=
value (2..google.dataflow.v1beta3.JobExecutionStageInfo:8"*
JobExecutionStageInfo
	step_name (	"�
CreateJobRequest

project_id (	)
job (2.google.dataflow.v1beta3.Job.
view (2 .google.dataflow.v1beta3.JobView
replace_job_id (	
location (	"u
GetJobRequest

project_id (	
job_id (	.
view (2 .google.dataflow.v1beta3.JobView
location (	"s
UpdateJobRequest

project_id (	
job_id (	)
job (2.google.dataflow.v1beta3.Job
location (	"�
ListJobsRequest?
filter (2/.google.dataflow.v1beta3.ListJobsRequest.Filter

project_id (	2
view (2 .google.dataflow.v1beta3.JobViewB
	page_size (

page_token (	
location (	":
Filter
UNKNOWN 
ALL

TERMINATED

ACTIVE"
FailedLocation
name (	"�
ListJobsResponse*
jobs (2.google.dataflow.v1beta3.Job
next_page_token (	@
failed_location (2\'.google.dataflow.v1beta3.FailedLocation"�
SnapshotJobRequest

project_id (	
job_id (	&
ttl (2.google.protobuf.Duration
location (	
snapshot_sources (
description (	",
CheckActiveJobsRequest

project_id (	"4
CheckActiveJobsResponse
active_jobs_exist (*�
KindType
UNKNOWN_KIND 
PAR_DO_KIND
GROUP_BY_KEY_KIND
FLATTEN_KIND
	READ_KIND

WRITE_KIND
CONSTANT_KIND
SINGLETON_KIND
SHUFFLE_KIND*�
JobState
JOB_STATE_UNKNOWN 
JOB_STATE_STOPPED
JOB_STATE_RUNNING
JOB_STATE_DONE
JOB_STATE_FAILED
JOB_STATE_CANCELLED
JOB_STATE_UPDATED
JOB_STATE_DRAINING
JOB_STATE_DRAINED
JOB_STATE_PENDING	
JOB_STATE_CANCELLING

JOB_STATE_QUEUED"
JOB_STATE_RESOURCE_CLEANING_UP*a
JobView
JOB_VIEW_UNKNOWN 
JOB_VIEW_SUMMARY
JOB_VIEW_ALL
JOB_VIEW_DESCRIPTION2�
JobsV1Beta3�
	CreateJob).google.dataflow.v1beta3.CreateJobRequest.google.dataflow.v1beta3.Job"k���e"5/v1b3/projects/{project_id}/locations/{location}/jobs:jobZ\'" /v1b3/projects/{project_id}/jobs:job�
GetJob&.google.dataflow.v1beta3.GetJobRequest.google.dataflow.v1beta3.Job"s���m>/v1b3/projects/{project_id}/locations/{location}/jobs/{job_id}Z+)/v1b3/projects/{project_id}/jobs/{job_id}�
	UpdateJob).google.dataflow.v1beta3.UpdateJobRequest.google.dataflow.v1beta3.Job"}���w>/v1b3/projects/{project_id}/locations/{location}/jobs/{job_id}:jobZ0)/v1b3/projects/{project_id}/jobs/{job_id}:job�
ListJobs(.google.dataflow.v1beta3.ListJobsRequest).google.dataflow.v1beta3.ListJobsResponse"a���[5/v1b3/projects/{project_id}/locations/{location}/jobsZ" /v1b3/projects/{project_id}/jobs�
AggregatedListJobs(.google.dataflow.v1beta3.ListJobsRequest).google.dataflow.v1beta3.ListJobsResponse"3���-+/v1b3/projects/{project_id}/jobs:aggregatedv
CheckActiveJobs/.google.dataflow.v1beta3.CheckActiveJobsRequest0.google.dataflow.v1beta3.CheckActiveJobsResponse" �
SnapshotJob+.google.dataflow.v1beta3.SnapshotJobRequest!.google.dataflow.v1beta3.Snapshot"�����"G/v1b3/projects/{project_id}/locations/{location}/jobs/{job_id}:snapshot:*Z7"2/v1b3/projects/{project_id}/jobs/{job_id}:snapshot:*��Adataflow.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/compute,https://www.googleapis.com/auth/compute.readonly,https://www.googleapis.com/auth/userinfo.emailB�
com.google.dataflow.v1beta3B	JobsProtoPZ=cloud.google.com/go/dataflow/apiv1beta3/dataflowpb;dataflowpb�Google.Cloud.Dataflow.V1Beta3�Google\\Cloud\\Dataflow\\V1beta3� Google::Cloud::Dataflow::V1beta3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

