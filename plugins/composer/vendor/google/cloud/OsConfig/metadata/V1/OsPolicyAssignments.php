<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace GPBMetadata\Google\Cloud\Osconfig\V1;

class OsPolicyAssignments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsconfigCommon::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/osconfig/v1/os_policy_assignments.protogoogle.cloud.osconfig.v1google/api/resource.proto(google/cloud/osconfig/v1/os_policy.proto.google/cloud/osconfig/v1/osconfig_common.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
OSPolicyAssignment
name (	
description (	<
os_policies (2".google.cloud.osconfig.v1.OSPolicyB�AY
instance_filter (2;.google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilterB�AJ
rollout (24.google.cloud.osconfig.v1.OSPolicyAssignment.RolloutB�A
revision_id (	B�A=
revision_create_time (2.google.protobuf.TimestampB�A
etag (	U
rollout_state	 (29.google.cloud.osconfig.v1.OSPolicyAssignment.RolloutStateB�A
baseline
 (B�A
deleted (B�A
reconciling (B�A
uid (	B�A�
LabelSetQ
labels (2A.google.cloud.osconfig.v1.OSPolicyAssignment.LabelSet.LabelsEntry-
LabelsEntry
key (	
value (	:8�
InstanceFilter
all (O
inclusion_labels (25.google.cloud.osconfig.v1.OSPolicyAssignment.LabelSetO
exclusion_labels (25.google.cloud.osconfig.v1.OSPolicyAssignment.LabelSetZ
inventories (2E.google.cloud.osconfig.v1.OSPolicyAssignment.InstanceFilter.Inventory;
	Inventory
os_short_name (	B�A

os_version (	�
RolloutH
disruption_budget (2(.google.cloud.osconfig.v1.FixedOrPercentB�A9
min_wait_duration (2.google.protobuf.DurationB�A"l
RolloutState
ROLLOUT_STATE_UNSPECIFIED 
IN_PROGRESS

CANCELLING
	CANCELLED
	SUCCEEDED:��A�
*osconfig.googleapis.com/OSPolicyAssignmentRprojects/{project}/locations/{location}/osPolicyAssignments/{os_policy_assignment}"�
#OSPolicyAssignmentOperationMetadataM
os_policy_assignment (	B/�A,
*osconfig.googleapis.com/OSPolicyAssignment[

api_method (2G.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.APIMethoda
rollout_state (2J.google.cloud.osconfig.v1.OSPolicyAssignmentOperationMetadata.RolloutState6
rollout_start_time (2.google.protobuf.Timestamp7
rollout_update_time (2.google.protobuf.Timestamp"K
	APIMethod
API_METHOD_UNSPECIFIED 

CREATE

UPDATE

DELETE"l
RolloutState
ROLLOUT_STATE_UNSPECIFIED 
IN_PROGRESS

CANCELLING
	CANCELLED
	SUCCEEDED"�
CreateOSPolicyAssignmentRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationO
os_policy_assignment (2,.google.cloud.osconfig.v1.OSPolicyAssignmentB�A$
os_policy_assignment_id (	B�A"�
UpdateOSPolicyAssignmentRequestO
os_policy_assignment (2,.google.cloud.osconfig.v1.OSPolicyAssignmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A"`
GetOSPolicyAssignmentRequest@
name (	B2�A�A,
*osconfig.googleapis.com/OSPolicyAssignment"�
ListOSPolicyAssignmentsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"�
ListOSPolicyAssignmentsResponseK
os_policy_assignments (2,.google.cloud.osconfig.v1.OSPolicyAssignment
next_page_token (	"�
&ListOSPolicyAssignmentRevisionsRequest@
name (	B2�A�A,
*osconfig.googleapis.com/OSPolicyAssignment
	page_size (

page_token (	"�
\'ListOSPolicyAssignmentRevisionsResponseK
os_policy_assignments (2,.google.cloud.osconfig.v1.OSPolicyAssignment
next_page_token (	"c
DeleteOSPolicyAssignmentRequest@
name (	B2�A�A,
*osconfig.googleapis.com/OSPolicyAssignmentB�
com.google.cloud.osconfig.v1BOsPolicyAssignmentsProtoPZ8cloud.google.com/go/osconfig/apiv1/osconfigpb;osconfigpb�Google.Cloud.OsConfig.V1�Google\\Cloud\\OsConfig\\V1�Google::Cloud::OsConfig::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

