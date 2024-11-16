<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace GPBMetadata\Google\Cloud\Alloydb\V1Beta;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
�M
+google/cloud/alloydb/v1beta/resources.protogoogle.cloud.alloydb.v1betagoogle/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto".
UserPassword
user (	
password (	"�
MigrationSource
	host_port (	B�A
reference_id (	B�AZ
source_type (2@.google.cloud.alloydb.v1beta.MigrationSource.MigrationSourceTypeB�A"E
MigrationSourceType%
!MIGRATION_SOURCE_TYPE_UNSPECIFIED 
DMS"(
EncryptionConfig
kms_key_name (	"�
EncryptionInfoN
encryption_type (20.google.cloud.alloydb.v1beta.EncryptionInfo.TypeB�AJ
kms_key_versions (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion"\\
Type
TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTION"�
	SslConfigE
ssl_mode (2..google.cloud.alloydb.v1beta.SslConfig.SslModeB�AG
	ca_source (2/.google.cloud.alloydb.v1beta.SslConfig.CaSourceB�A"e
SslMode
SSL_MODE_UNSPECIFIED 
SSL_MODE_ALLOW
SSL_MODE_REQUIRE
SSL_MODE_VERIFY_CA"<
CaSource
CA_SOURCE_UNSPECIFIED 
CA_SOURCE_MANAGED"�
AutomatedBackupPolicy\\
weekly_schedule (2A.google.cloud.alloydb.v1beta.AutomatedBackupPolicy.WeeklyScheduleH e
time_based_retention (2E.google.cloud.alloydb.v1beta.AutomatedBackupPolicy.TimeBasedRetentionHm
quantity_based_retention (2I.google.cloud.alloydb.v1beta.AutomatedBackupPolicy.QuantityBasedRetentionH
enabled (H�0
backup_window (2.google.protobuf.DurationM
encryption_config (2-.google.cloud.alloydb.v1beta.EncryptionConfigB�A
location (	N
labels (2>.google.cloud.alloydb.v1beta.AutomatedBackupPolicy.LabelsEntryk
WeeklySchedule+
start_times (2.google.type.TimeOfDay,
days_of_week (2.google.type.DayOfWeekI
TimeBasedRetention3
retention_period (2.google.protobuf.Duration\'
QuantityBasedRetention
count (-
LabelsEntry
key (	
value (	:8B

scheduleB
	retentionB

_enabled"�
ContinuousBackupConfig
enabled (H �
recovery_window_days (H
encryption_config (2-.google.cloud.alloydb.v1beta.EncryptionConfigB

_enabled"�
ContinuousBackupInfoI
encryption_info (2+.google.cloud.alloydb.v1beta.EncryptionInfoB�A5
enabled_time (2.google.protobuf.TimestampB�A-
schedule (2.google.type.DayOfWeekB�A"c
BackupSource

backup_uid (	B�A:
backup_name (	B%�A�A
alloydb.googleapis.com/Backup"f
ContinuousBackupSource
cluster (	B�A6
point_in_time (2.google.protobuf.TimestampB�A"�
ClusterG
backup_source (2).google.cloud.alloydb.v1beta.BackupSourceB�AH M
migration_source (2,.google.cloud.alloydb.v1beta.MigrationSourceB�AH 
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A@
labels (20.google.cloud.alloydb.v1beta.Cluster.LabelsEntry>
state (2*.google.cloud.alloydb.v1beta.Cluster.StateB�AK
cluster_type (20.google.cloud.alloydb.v1beta.Cluster.ClusterTypeB�AK
database_version	 (2,.google.cloud.alloydb.v1beta.DatabaseVersionB�A7
network
 (	B&�A�A 
compute.googleapis.com/Network
etag (	J
annotations (25.google.cloud.alloydb.v1beta.Cluster.AnnotationsEntry
reconciling (B�AD
initial_user (2).google.cloud.alloydb.v1beta.UserPasswordB�AS
automated_backup_policy (22.google.cloud.alloydb.v1beta.AutomatedBackupPolicy:

ssl_config (2&.google.cloud.alloydb.v1beta.SslConfigM
encryption_config (2-.google.cloud.alloydb.v1beta.EncryptionConfigB�AI
encryption_info (2+.google.cloud.alloydb.v1beta.EncryptionInfoB�AZ
continuous_backup_config (23.google.cloud.alloydb.v1beta.ContinuousBackupConfigB�AV
continuous_backup_info (21.google.cloud.alloydb.v1beta.ContinuousBackupInfoB�AN
secondary_config (24.google.cloud.alloydb.v1beta.Cluster.SecondaryConfigO
primary_config (22.google.cloud.alloydb.v1beta.Cluster.PrimaryConfigB�A/
SecondaryConfig
primary_cluster_name (	5
PrimaryConfig$
secondary_cluster_names (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED	
EMPTY
CREATING
DELETING

FAILED
BOOTSTRAPPING
MAINTENANCE
	PROMOTING	"G
ClusterType
CLUSTER_TYPE_UNSPECIFIED 
PRIMARY
	SECONDARY:b�A_
alloydb.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}RB
source"�
Instance
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�AA
labels (21.google.cloud.alloydb.v1beta.Instance.LabelsEntry?
state (2+.google.cloud.alloydb.v1beta.Instance.StateB�AN
instance_type	 (22.google.cloud.alloydb.v1beta.Instance.InstanceTypeB�AK
machine_config
 (23.google.cloud.alloydb.v1beta.Instance.MachineConfigQ
availability_type (26.google.cloud.alloydb.v1beta.Instance.AvailabilityType
gce_zone (	P
database_flags (28.google.cloud.alloydb.v1beta.Instance.DatabaseFlagsEntryF
writable_node (2*.google.cloud.alloydb.v1beta.Instance.NodeB�A>
nodes (2*.google.cloud.alloydb.v1beta.Instance.NodeB�A`
query_insights_config (2A.google.cloud.alloydb.v1beta.Instance.QueryInsightsInstanceConfigN
read_pool_config (24.google.cloud.alloydb.v1beta.Instance.ReadPoolConfig

ip_address (	B�A
reconciling (B�A
etag (	K
annotations (26.google.cloud.alloydb.v1beta.Instance.AnnotationsEntry"
MachineConfig
	cpu_count (>
Node
zone_id (	

id (	

ip (	
state (	�
QueryInsightsInstanceConfig$
record_application_tags (H �"
record_client_address (H�
query_string_length (#
query_plans_per_minute (H�B
_record_application_tagsB
_record_client_addressB
_query_plans_per_minute$
ReadPoolConfig

node_count (-
LabelsEntry
key (	
value (	:84
DatabaseFlagsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 	
READY
STOPPED
CREATING
DELETING
MAINTENANCE

FAILED
BOOTSTRAPPING
	PROMOTING	"X
InstanceType
INSTANCE_TYPE_UNSPECIFIED 
PRIMARY
	READ_POOL
	SECONDARY"N
AvailabilityType!
AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL:x�Au
alloydb.googleapis.com/InstanceOprojects/{project}/locations/{location}/clusters/{cluster}/instances/{instance}R"�
ConnectionInfo
name (	

ip_address (	B�A"
pem_certificate_chain (	B�A
instance_uid (	B�A:��A�
%alloydb.googleapis.com/ConnectionInfo^projects/{project}/locations/{location}/clusters/{cluster}/instances/{instance}/connectionInfo"�	
Backup
name (	B�A
display_name (	
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A?
labels (2/.google.cloud.alloydb.v1beta.Backup.LabelsEntry=
state (2).google.cloud.alloydb.v1beta.Backup.StateB�A6
type (2(.google.cloud.alloydb.v1beta.Backup.Type
description	 (	
cluster_uid (	B�A<
cluster_name
 (	B&�A�A 
alloydb.googleapis.com/Cluster
reconciling (B�AM
encryption_config (2-.google.cloud.alloydb.v1beta.EncryptionConfigB�AI
encryption_info (2+.google.cloud.alloydb.v1beta.EncryptionInfoB�A
etag (	I
annotations (24.google.cloud.alloydb.v1beta.Backup.AnnotationsEntry

size_bytes (B�A4
expiry_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8"Q
State
STATE_UNSPECIFIED 	
READY
CREATING

FAILED
DELETING"J
Type
TYPE_UNSPECIFIED 
	ON_DEMAND
	AUTOMATED

CONTINUOUS:_�A\\
alloydb.googleapis.com/Backup8projects/{project}/locations/{location}/backups/{backup}R"�
SupportedDatabaseFlagd
string_restrictions (2E.google.cloud.alloydb.v1beta.SupportedDatabaseFlag.StringRestrictionsH f
integer_restrictions (2F.google.cloud.alloydb.v1beta.SupportedDatabaseFlag.IntegerRestrictionsH 
name (	
	flag_name (	P

value_type (2<.google.cloud.alloydb.v1beta.SupportedDatabaseFlag.ValueType
accepts_multiple_values (K
supported_db_versions (2,.google.cloud.alloydb.v1beta.DatabaseVersion
requires_db_restart (,
StringRestrictions
allowed_values (	u
IntegerRestrictions.
	min_value (2.google.protobuf.Int64Value.
	max_value (2.google.protobuf.Int64Value"U
	ValueType
VALUE_TYPE_UNSPECIFIED 

STRING
INTEGER	
FLOAT
NONE:g�Ad
,alloydb.googleapis.com/SupportedDatabaseFlag4projects/{project}/locations/{location}/flags/{flag}B
restrictions*Y
DatabaseVersion 
DATABASE_VERSION_UNSPECIFIED 
POSTGRES_13
POSTGRES_14*^
InstanceView
INSTANCE_VIEW_UNSPECIFIED 
INSTANCE_VIEW_BASIC
INSTANCE_VIEW_FULLB�
com.google.cloud.alloydb.v1betaBResourcesProtoPZ9cloud.google.com/go/alloydb/apiv1beta/alloydbpb;alloydbpb�Google.Cloud.AlloyDb.V1Beta�Google\\Cloud\\AlloyDb\\V1beta�Google::Cloud::AlloyDB::V1beta�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

