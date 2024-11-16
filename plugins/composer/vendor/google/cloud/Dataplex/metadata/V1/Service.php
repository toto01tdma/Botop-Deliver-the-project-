<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class Service
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
        \GPBMetadata\Google\Cloud\Dataplex\V1\Analyze::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�`
&google/cloud/dataplex/v1/service.protogoogle.cloud.dataplex.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/dataplex/v1/analyze.proto(google/cloud/dataplex/v1/resources.proto$google/cloud/dataplex/v1/tasks.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateLakeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
lake_id (	B�A1
lake (2.google.cloud.dataplex.v1.LakeB�A
validate_only (B�A"�
UpdateLakeRequest4
update_mask (2.google.protobuf.FieldMaskB�A1
lake (2.google.cloud.dataplex.v1.LakeB�A
validate_only (B�A"G
DeleteLakeRequest2
name (	B$�A�A
dataplex.googleapis.com/Lake"�
ListLakesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"z
ListLakesResponse-
lakes (2.google.cloud.dataplex.v1.Lake
next_page_token (	
unreachable_locations (	"
ListLakeActionsRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
	page_size (B�A

page_token (	B�A"a
ListActionsResponse1
actions (2 .google.cloud.dataplex.v1.Action
next_page_token (	"D
GetLakeRequest2
name (	B$�A�A
dataplex.googleapis.com/Lake"�
CreateZoneRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
zone_id (	B�A1
zone (2.google.cloud.dataplex.v1.ZoneB�A
validate_only (B�A"�
UpdateZoneRequest4
update_mask (2.google.protobuf.FieldMaskB�A1
zone (2.google.cloud.dataplex.v1.ZoneB�A
validate_only (B�A"G
DeleteZoneRequest2
name (	B$�A�A
dataplex.googleapis.com/Zone"�
ListZonesRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"[
ListZonesResponse-
zones (2.google.cloud.dataplex.v1.Zone
next_page_token (	"
ListZoneActionsRequest4
parent (	B$�A�A
dataplex.googleapis.com/Zone
	page_size (B�A

page_token (	B�A"D
GetZoneRequest2
name (	B$�A�A
dataplex.googleapis.com/Zone"�
CreateAssetRequest4
parent (	B$�A�A
dataplex.googleapis.com/Zone
asset_id (	B�A3
asset (2.google.cloud.dataplex.v1.AssetB�A
validate_only (B�A"�
UpdateAssetRequest4
update_mask (2.google.protobuf.FieldMaskB�A3
asset (2.google.cloud.dataplex.v1.AssetB�A
validate_only (B�A"I
DeleteAssetRequest3
name (	B%�A�A
dataplex.googleapis.com/Asset"�
ListAssetsRequest4
parent (	B$�A�A
dataplex.googleapis.com/Zone
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"^
ListAssetsResponse/
assets (2.google.cloud.dataplex.v1.Asset
next_page_token (	"�
ListAssetActionsRequest5
parent (	B%�A�A
dataplex.googleapis.com/Asset
	page_size (B�A

page_token (	B�A"F
GetAssetRequest3
name (	B%�A�A
dataplex.googleapis.com/Asset"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
CreateTaskRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
task_id (	B�A1
task (2.google.cloud.dataplex.v1.TaskB�A
validate_only (B�A"�
UpdateTaskRequest4
update_mask (2.google.protobuf.FieldMaskB�A1
task (2.google.cloud.dataplex.v1.TaskB�A
validate_only (B�A"G
DeleteTaskRequest2
name (	B$�A�A
dataplex.googleapis.com/Task"�
ListTasksRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"z
ListTasksResponse-
tasks (2.google.cloud.dataplex.v1.Task
next_page_token (	
unreachable_locations (	"D
GetTaskRequest2
name (	B$�A�A
dataplex.googleapis.com/Task"B
GetJobRequest1
name (	B#�A�A
dataplex.googleapis.com/Job"D
RunTaskRequest2
name (	B$�A�A
dataplex.googleapis.com/Task"=
RunTaskResponse*
job (2.google.cloud.dataplex.v1.Job"x
ListJobsRequest4
parent (	B$�A�A
dataplex.googleapis.com/Task
	page_size (B�A

page_token (	B�A"X
ListJobsResponse+
jobs (2.google.cloud.dataplex.v1.Job
next_page_token (	"E
CancelJobRequest1
name (	B#�A�A
dataplex.googleapis.com/Job"�
CreateEnvironmentRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
environment_id (	B�A?
environment (2%.google.cloud.dataplex.v1.EnvironmentB�A
validate_only (B�A"�
UpdateEnvironmentRequest4
update_mask (2.google.protobuf.FieldMaskB�A?
environment (2%.google.cloud.dataplex.v1.EnvironmentB�A
validate_only (B�A"U
DeleteEnvironmentRequest9
name (	B+�A�A%
#dataplex.googleapis.com/Environment"�
ListEnvironmentsRequest4
parent (	B$�A�A
dataplex.googleapis.com/Lake
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"p
ListEnvironmentsResponse;
environments (2%.google.cloud.dataplex.v1.Environment
next_page_token (	"R
GetEnvironmentRequest9
name (	B+�A�A%
#dataplex.googleapis.com/Environment"�
ListSessionsRequest;
parent (	B+�A�A%
#dataplex.googleapis.com/Environment
	page_size (B�A

page_token (	B�A
filter (	B�A"d
ListSessionsResponse3
sessions (2!.google.cloud.dataplex.v1.Session
next_page_token (	2�2
DataplexService�

CreateLake+.google.cloud.dataplex.v1.CreateLakeRequest.google.longrunning.Operation"i���1")/v1/{parent=projects/*/locations/*}/lakes:lake�Aparent,lake,lake_id�A
LakeOperationMetadata�

UpdateLake+.google.cloud.dataplex.v1.UpdateLakeRequest.google.longrunning.Operation"k���62./v1/{lake.name=projects/*/locations/*/lakes/*}:lake�Alake,update_mask�A
LakeOperationMetadata�

DeleteLake+.google.cloud.dataplex.v1.DeleteLakeRequest.google.longrunning.Operation"e���+*)/v1/{name=projects/*/locations/*/lakes/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
	ListLakes*.google.cloud.dataplex.v1.ListLakesRequest+.google.cloud.dataplex.v1.ListLakesResponse":���+)/v1/{parent=projects/*/locations/*}/lakes�Aparent�
GetLake(.google.cloud.dataplex.v1.GetLakeRequest.google.cloud.dataplex.v1.Lake"8���+)/v1/{name=projects/*/locations/*/lakes/*}�Aname�
ListLakeActions0.google.cloud.dataplex.v1.ListLakeActionsRequest-.google.cloud.dataplex.v1.ListActionsResponse"D���53/v1/{parent=projects/*/locations/*/lakes/*}/actions�Aparent�

CreateZone+.google.cloud.dataplex.v1.CreateZoneRequest.google.longrunning.Operation"q���9"1/v1/{parent=projects/*/locations/*/lakes/*}/zones:zone�Aparent,zone,zone_id�A
ZoneOperationMetadata�

UpdateZone+.google.cloud.dataplex.v1.UpdateZoneRequest.google.longrunning.Operation"s���>26/v1/{zone.name=projects/*/locations/*/lakes/*/zones/*}:zone�Azone,update_mask�A
ZoneOperationMetadata�

DeleteZone+.google.cloud.dataplex.v1.DeleteZoneRequest.google.longrunning.Operation"m���3*1/v1/{name=projects/*/locations/*/lakes/*/zones/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
	ListZones*.google.cloud.dataplex.v1.ListZonesRequest+.google.cloud.dataplex.v1.ListZonesResponse"B���31/v1/{parent=projects/*/locations/*/lakes/*}/zones�Aparent�
GetZone(.google.cloud.dataplex.v1.GetZoneRequest.google.cloud.dataplex.v1.Zone"@���31/v1/{name=projects/*/locations/*/lakes/*/zones/*}�Aname�
ListZoneActions0.google.cloud.dataplex.v1.ListZoneActionsRequest-.google.cloud.dataplex.v1.ListActionsResponse"L���=;/v1/{parent=projects/*/locations/*/lakes/*/zones/*}/actions�Aparent�
CreateAsset,.google.cloud.dataplex.v1.CreateAssetRequest.google.longrunning.Operation"~���C":/v1/{parent=projects/*/locations/*/lakes/*/zones/*}/assets:asset�Aparent,asset,asset_id�A
AssetOperationMetadata�
UpdateAsset,.google.cloud.dataplex.v1.UpdateAssetRequest.google.longrunning.Operation"����I2@/v1/{asset.name=projects/*/locations/*/lakes/*/zones/*/assets/*}:asset�Aasset,update_mask�A
AssetOperationMetadata�
DeleteAsset,.google.cloud.dataplex.v1.DeleteAssetRequest.google.longrunning.Operation"v���<*:/v1/{name=projects/*/locations/*/lakes/*/zones/*/assets/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�

ListAssets+.google.cloud.dataplex.v1.ListAssetsRequest,.google.cloud.dataplex.v1.ListAssetsResponse"K���<:/v1/{parent=projects/*/locations/*/lakes/*/zones/*}/assets�Aparent�
GetAsset).google.cloud.dataplex.v1.GetAssetRequest.google.cloud.dataplex.v1.Asset"I���<:/v1/{name=projects/*/locations/*/lakes/*/zones/*/assets/*}�Aname�
ListAssetActions1.google.cloud.dataplex.v1.ListAssetActionsRequest-.google.cloud.dataplex.v1.ListActionsResponse"U���FD/v1/{parent=projects/*/locations/*/lakes/*/zones/*/assets/*}/actions�Aparent�

CreateTask+.google.cloud.dataplex.v1.CreateTaskRequest.google.longrunning.Operation"q���9"1/v1/{parent=projects/*/locations/*/lakes/*}/tasks:task�Aparent,task,task_id�A
TaskOperationMetadata�

UpdateTask+.google.cloud.dataplex.v1.UpdateTaskRequest.google.longrunning.Operation"s���>26/v1/{task.name=projects/*/locations/*/lakes/*/tasks/*}:task�Atask,update_mask�A
TaskOperationMetadata�

DeleteTask+.google.cloud.dataplex.v1.DeleteTaskRequest.google.longrunning.Operation"m���3*1/v1/{name=projects/*/locations/*/lakes/*/tasks/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
	ListTasks*.google.cloud.dataplex.v1.ListTasksRequest+.google.cloud.dataplex.v1.ListTasksResponse"B���31/v1/{parent=projects/*/locations/*/lakes/*}/tasks�Aparent�
GetTask(.google.cloud.dataplex.v1.GetTaskRequest.google.cloud.dataplex.v1.Task"@���31/v1/{name=projects/*/locations/*/lakes/*/tasks/*}�Aname�
ListJobs).google.cloud.dataplex.v1.ListJobsRequest*.google.cloud.dataplex.v1.ListJobsResponse"I���:8/v1/{parent=projects/*/locations/*/lakes/*/tasks/*}/jobs�Aparent�
RunTask(.google.cloud.dataplex.v1.RunTaskRequest).google.cloud.dataplex.v1.RunTaskResponse"G���:"5/v1/{name=projects/*/locations/*/lakes/*/tasks/*}:run:*�Aname�
GetJob\'.google.cloud.dataplex.v1.GetJobRequest.google.cloud.dataplex.v1.Job"G���:8/v1/{name=projects/*/locations/*/lakes/*/tasks/*/jobs/*}�Aname�
	CancelJob*.google.cloud.dataplex.v1.CancelJobRequest.google.protobuf.Empty"Q���D"?/v1/{name=projects/*/locations/*/lakes/*/tasks/*/jobs/*}:cancel:*�Aname�
CreateEnvironment2.google.cloud.dataplex.v1.CreateEnvironmentRequest.google.longrunning.Operation"����G"8/v1/{parent=projects/*/locations/*/lakes/*}/environments:environment�A!parent,environment,environment_id�A 
EnvironmentOperationMetadata�
UpdateEnvironment2.google.cloud.dataplex.v1.UpdateEnvironmentRequest.google.longrunning.Operation"����S2D/v1/{environment.name=projects/*/locations/*/lakes/*/environments/*}:environment�Aenvironment,update_mask�A 
EnvironmentOperationMetadata�
DeleteEnvironment2.google.cloud.dataplex.v1.DeleteEnvironmentRequest.google.longrunning.Operation"t���:*8/v1/{name=projects/*/locations/*/lakes/*/environments/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListEnvironments1.google.cloud.dataplex.v1.ListEnvironmentsRequest2.google.cloud.dataplex.v1.ListEnvironmentsResponse"I���:8/v1/{parent=projects/*/locations/*/lakes/*}/environments�Aparent�
GetEnvironment/.google.cloud.dataplex.v1.GetEnvironmentRequest%.google.cloud.dataplex.v1.Environment"G���:8/v1/{name=projects/*/locations/*/lakes/*/environments/*}�Aname�
ListSessions-.google.cloud.dataplex.v1.ListSessionsRequest..google.cloud.dataplex.v1.ListSessionsResponse"T���EC/v1/{parent=projects/*/locations/*/lakes/*/environments/*}/sessions�AparentK�Adataplex.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBh
com.google.cloud.dataplex.v1BServiceProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

