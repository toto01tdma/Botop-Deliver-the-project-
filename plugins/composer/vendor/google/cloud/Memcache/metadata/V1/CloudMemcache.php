<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace GPBMetadata\Google\Cloud\Memcache\V1;

class CloudMemcache
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
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�7
-google/cloud/memcache/v1/cloud_memcache.protogoogle.cloud.memcache.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto"�
Instance
name (	B�A
display_name (	>
labels (2..google.cloud.memcache.v1.Instance.LabelsEntry
authorized_network (	
zones (	

node_count (B�AG
node_config (2-.google.cloud.memcache.v1.Instance.NodeConfigB�AC
memcache_version	 (2).google.cloud.memcache.v1.MemcacheVersion@

parameters (2,.google.cloud.memcache.v1.MemcacheParametersD
memcache_nodes (2\'.google.cloud.memcache.v1.Instance.NodeB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A<
state (2(.google.cloud.memcache.v1.Instance.StateB�A"
memcache_full_version (	B�AM
instance_messages (22.google.cloud.memcache.v1.Instance.InstanceMessage
discovery_endpoint (	B�AG
maintenance_policy (2+.google.cloud.memcache.v1.MaintenancePolicyP
maintenance_schedule (2-.google.cloud.memcache.v1.MaintenanceScheduleB�AA

NodeConfig
	cpu_count (B�A
memory_size_mb (B�A�
Node
node_id (	B�A
zone (	B�AA
state (2-.google.cloud.memcache.v1.Instance.Node.StateB�A
host (	B�A
port (B�A@

parameters (2,.google.cloud.memcache.v1.MemcacheParameters"S
State
STATE_UNSPECIFIED 
CREATING	
READY
DELETING
UPDATING�
InstanceMessageE
code (27.google.cloud.memcache.v1.Instance.InstanceMessage.Code
message (	">
Code
CODE_UNSPECIFIED  
ZONE_DISTRIBUTION_UNBALANCED-
LabelsEntry
key (	
value (	:8"o
State
STATE_UNSPECIFIED 
CREATING	
READY
UPDATING
DELETING
PERFORMING_MAINTENANCE:c�A`
 memcache.googleapis.com/Instance<projects/{project}/locations/{location}/instances/{instance}"�
MaintenancePolicy4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	Y
weekly_maintenance_window (21.google.cloud.memcache.v1.WeeklyMaintenanceWindowB�A"�
WeeklyMaintenanceWindow(
day (2.google.type.DayOfWeekB�A/

start_time (2.google.type.TimeOfDayB�A0
duration (2.google.protobuf.DurationB�A"�
MaintenanceSchedule3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A?
schedule_deadline_time (2.google.protobuf.TimestampB�A"�
RescheduleMaintenanceRequest:
instance (	B(�A�A"
 memcache.googleapis.com/Instancec
reschedule_type (2E.google.cloud.memcache.v1.RescheduleMaintenanceRequest.RescheduleTypeB�A1
schedule_time (2.google.protobuf.Timestamp"n
RescheduleType
RESCHEDULE_TYPE_UNSPECIFIED 
	IMMEDIATE
NEXT_AVAILABLE_WINDOW
SPECIFIC_TIME"�
ListInstancesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"|
ListInstancesResponse5
	instances (2".google.cloud.memcache.v1.Instance
next_page_token (	
unreachable (	"L
GetInstanceRequest6
name (	B(�A�A"
 memcache.googleapis.com/Instance"�
CreateInstanceRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
instance_id (	B�A9
instance (2".google.cloud.memcache.v1.InstanceB�A"�
UpdateInstanceRequest4
update_mask (2.google.protobuf.FieldMaskB�A9
instance (2".google.cloud.memcache.v1.InstanceB�A"O
DeleteInstanceRequest6
name (	B(�A�A"
 memcache.googleapis.com/Instance"u
ApplyParametersRequest6
name (	B(�A�A"
 memcache.googleapis.com/Instance
node_ids (	
	apply_all ("�
UpdateParametersRequest6
name (	B(�A�A"
 memcache.googleapis.com/Instance4
update_mask (2.google.protobuf.FieldMaskB�A@

parameters (2,.google.cloud.memcache.v1.MemcacheParameters"�
MemcacheParameters
id (	B�AH
params (28.google.cloud.memcache.v1.MemcacheParameters.ParamsEntry-
ParamsEntry
key (	
value (	:8"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_detail (	B�A
cancel_requested (B�A
api_version (	B�A"�
LocationMetadata\\
available_zones (2>.google.cloud.memcache.v1.LocationMetadata.AvailableZonesEntryB�A]
AvailableZonesEntry
key (	5
value (2&.google.cloud.memcache.v1.ZoneMetadata:8"
ZoneMetadata*E
MemcacheVersion 
MEMCACHE_VERSION_UNSPECIFIED 
MEMCACHE_1_52�
CloudMemcache�
ListInstances..google.cloud.memcache.v1.ListInstancesRequest/.google.cloud.memcache.v1.ListInstancesResponse">���/-/v1/{parent=projects/*/locations/*}/instances�Aparent�
GetInstance,.google.cloud.memcache.v1.GetInstanceRequest".google.cloud.memcache.v1.Instance"<���/-/v1/{name=projects/*/locations/*/instances/*}�Aname�
CreateInstance/.google.cloud.memcache.v1.CreateInstanceRequest.google.longrunning.Operation"����9"-/v1/{parent=projects/*/locations/*}/instances:instance�Aparent,instance,instance_id�AO
!google.cloud.memcache.v1.Instance*google.cloud.memcache.v1.OperationMetadata�
UpdateInstance/.google.cloud.memcache.v1.UpdateInstanceRequest.google.longrunning.Operation"����B26/v1/{instance.name=projects/*/locations/*/instances/*}:instance�Ainstance,update_mask�AO
!google.cloud.memcache.v1.Instance*google.cloud.memcache.v1.OperationMetadata�
UpdateParameters1.google.cloud.memcache.v1.UpdateParametersRequest.google.longrunning.Operation"����C2>/v1/{name=projects/*/locations/*/instances/*}:updateParameters:*�Aname,update_mask,parameters�AO
!google.cloud.memcache.v1.Instance*google.cloud.memcache.v1.OperationMetadata�
DeleteInstance/.google.cloud.memcache.v1.DeleteInstanceRequest.google.longrunning.Operation"����/*-/v1/{name=projects/*/locations/*/instances/*}�Aname�AC
google.protobuf.Empty*google.cloud.memcache.v1.OperationMetadata�
ApplyParameters0.google.cloud.memcache.v1.ApplyParametersRequest.google.longrunning.Operation"����B"=/v1/{name=projects/*/locations/*/instances/*}:applyParameters:*�Aname,node_ids,apply_all�AO
!google.cloud.memcache.v1.Instance*google.cloud.memcache.v1.OperationMetadata�
RescheduleMaintenance6.google.cloud.memcache.v1.RescheduleMaintenanceRequest.google.longrunning.Operation"����L"G/v1/{instance=projects/*/locations/*/instances/*}:rescheduleMaintenance:*�A(instance, reschedule_type, schedule_time�AO
!google.cloud.memcache.v1.Instance*google.cloud.memcache.v1.OperationMetadataK�Amemcache.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBn
com.google.cloud.memcache.v1BCloudMemcacheProtoPZ8cloud.google.com/go/memcache/apiv1/memcachepb;memcachepbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

