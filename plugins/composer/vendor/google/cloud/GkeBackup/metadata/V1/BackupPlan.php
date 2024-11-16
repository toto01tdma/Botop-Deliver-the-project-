<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace GPBMetadata\Google\Cloud\Gkebackup\V1;

class BackupPlan
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/gkebackup/v1/backup_plan.protogoogle.cloud.gkebackup.v1google/api/resource.proto&google/cloud/gkebackup/v1/common.protogoogle/protobuf/timestamp.proto"�	

BackupPlan
name (	B�A
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
description (	<
cluster (	B+�A�A�A"
 container.googleapis.com/ClusterO
retention_policy (25.google.cloud.gkebackup.v1.BackupPlan.RetentionPolicyA
labels (21.google.cloud.gkebackup.v1.BackupPlan.LabelsEntryG
backup_schedule	 (2..google.cloud.gkebackup.v1.BackupPlan.Schedule
etag
 (	B�A
deactivated (I
backup_config (22.google.cloud.gkebackup.v1.BackupPlan.BackupConfig 
protected_pod_count (B�A^
RetentionPolicy
backup_delete_lock_days (
backup_retain_days (
locked (1
Schedule
cron_schedule (	
paused (�
BackupConfig
all_namespaces (H D
selected_namespaces (2%.google.cloud.gkebackup.v1.NamespacesH K
selected_applications (2*.google.cloud.gkebackup.v1.NamespacedNamesH 
include_volume_data (
include_secrets (@
encryption_key (2(.google.cloud.gkebackup.v1.EncryptionKeyB
backup_scope-
LabelsEntry
key (	
value (	:8:k�Ah
#gkebackup.googleapis.com/BackupPlanAprojects/{project}/locations/{location}/backupPlans/{backup_plan}B�
com.google.cloud.gkebackup.v1BBackupPlanProtoPZ;cloud.google.com/go/gkebackup/apiv1/gkebackuppb;gkebackuppb�Google.Cloud.GkeBackup.V1�Google\\Cloud\\GkeBackup\\V1�Google::Cloud::GkeBackup::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

