<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace GPBMetadata\Google\Cloud\Clouddms\V1;

class ClouddmsResources
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
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�W
1google/cloud/clouddms/v1/clouddms_resources.protogoogle.cloud.clouddms.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/rpc/status.proto"�
	SslConfig>
type (2+.google.cloud.clouddms.v1.SslConfig.SslTypeB�A

client_key (	B�A
client_certificate (	B�A
ca_certificate (	B�A�A"G
SslType
SSL_TYPE_UNSPECIFIED 
SERVER_ONLY
SERVER_CLIENT"�
MySqlConnectionProfile
host (	B�A
port (B�A
username (	B�A
password (	B�A�A
password_set (B�A0
ssl (2#.google.cloud.clouddms.v1.SslConfig
cloud_sql_id (	"�
PostgreSqlConnectionProfile
host (	B�A
port (B�A
username (	B�A
password (	B�A�A
password_set (B�A0
ssl (2#.google.cloud.clouddms.v1.SslConfig
cloud_sql_id (	P
network_architecture (2-.google.cloud.clouddms.v1.NetworkArchitectureB�AP
static_ip_connectivityd (2..google.cloud.clouddms.v1.StaticIpConnectivityH k
$private_service_connect_connectivitye (2;.google.cloud.clouddms.v1.PrivateServiceConnectConnectivityH B
connectivity"�
OracleConnectionProfile
host (	B�A
port (B�A
username (	B�A
password (	B�A�A
password_set (B�A
database_service (	B�A_
static_service_ip_connectivityd (25.google.cloud.clouddms.v1.StaticServiceIpConnectivityH Z
forward_ssh_connectivitye (26.google.cloud.clouddms.v1.ForwardSshTunnelConnectivityH M
private_connectivityf (2-.google.cloud.clouddms.v1.PrivateConnectivityH B
connectivity"�
CloudSqlConnectionProfile
cloud_sql_id (	B�AA
settings (2*.google.cloud.clouddms.v1.CloudSqlSettingsB�A

private_ip (	B�A
	public_ip (	B�A!
additional_public_ip (	B�A"u
AlloyDbConnectionProfile

cluster_id (	B�A@
settings (2).google.cloud.clouddms.v1.AlloyDbSettingsB�A"�
SqlAclEntry
value (	1
expire_time
 (2.google.protobuf.TimestampH -
ttl (2.google.protobuf.DurationB�AH 
label (	B

expiration"�
SqlIpConfig/
enable_ipv4 (2.google.protobuf.BoolValue
private_network (	
allocated_ip_range (	B�A/
require_ssl (2.google.protobuf.BoolValueB
authorized_networks (2%.google.cloud.clouddms.v1.SqlAclEntry"�
CloudSqlSettingsW
database_version (2=.google.cloud.clouddms.v1.CloudSqlSettings.SqlDatabaseVersionO
user_labels (2:.google.cloud.clouddms.v1.CloudSqlSettings.UserLabelsEntry
tier (	>
storage_auto_resize_limit (2.google.protobuf.Int64ValueY
activation_policy (2>.google.cloud.clouddms.v1.CloudSqlSettings.SqlActivationPolicy8
	ip_config (2%.google.cloud.clouddms.v1.SqlIpConfig9
auto_storage_increase (2.google.protobuf.BoolValueU
database_flags (2=.google.cloud.clouddms.v1.CloudSqlSettings.DatabaseFlagsEntryR
data_disk_type	 (2:.google.cloud.clouddms.v1.CloudSqlSettings.SqlDataDiskType6
data_disk_size_gb
 (2.google.protobuf.Int64Value
zone (	
secondary_zone (	B�A
	source_id (	
root_password (	B�A
root_password_set (B�A
	collation (	
cmek_key_name (	^
availability_type (2>.google.cloud.clouddms.v1.CloudSqlSettings.SqlAvailabilityTypeB�A1
UserLabelsEntry
key (	
value (	:84
DatabaseFlagsEntry
key (	
value (	:8"S
SqlActivationPolicy%
!SQL_ACTIVATION_POLICY_UNSPECIFIED 

ALWAYS	
NEVER"M
SqlDataDiskType"
SQL_DATA_DISK_TYPE_UNSPECIFIED 

PD_SSD

PD_HDD"�
SqlDatabaseVersion$
 SQL_DATABASE_VERSION_UNSPECIFIED 
	MYSQL_5_6
	MYSQL_5_7
POSTGRES_9_6
POSTGRES_11
POSTGRES_10
	MYSQL_8_0
POSTGRES_12
POSTGRES_13
POSTGRES_14"U
SqlAvailabilityType%
!SQL_AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL"�
AlloyDbSettingsT
initial_user (26.google.cloud.clouddms.v1.AlloyDbSettings.UserPasswordB�A�A
vpc_network (	B�AE
labels (25.google.cloud.clouddms.v1.AlloyDbSettings.LabelsEntryd
primary_instance_settings (2A.google.cloud.clouddms.v1.AlloyDbSettings.PrimaryInstanceSettingsZ
encryption_config (2:.google.cloud.clouddms.v1.AlloyDbSettings.EncryptionConfigB�AI
UserPassword
user (	
password (	
password_set (B�A�
PrimaryInstanceSettings
id (	B�Ag
machine_config (2O.google.cloud.clouddms.v1.AlloyDbSettings.PrimaryInstanceSettings.MachineConfigl
database_flags (2T.google.cloud.clouddms.v1.AlloyDbSettings.PrimaryInstanceSettings.DatabaseFlagsEntry]
labels (2M.google.cloud.clouddms.v1.AlloyDbSettings.PrimaryInstanceSettings.LabelsEntry

private_ip (	B�A"
MachineConfig
	cpu_count (4
DatabaseFlagsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8(
EncryptionConfig
kms_key_name (	-
LabelsEntry
key (	
value (	:8"
StaticIpConnectivity"D
!PrivateServiceConnectConnectivity
service_attachment (	B�A"[
ReverseSshConnectivity
vm_ip (	B�A
vm_port (B�A

vm (	
vpc (	"%
VpcPeeringConnectivity
vpc (	"�
ForwardSshTunnelConnectivity
hostname (	B�A
username (	B�A
port (
passwordd (	B�AH 
private_keye (	B�AH B
authentication_method"
StaticServiceIpConnectivity"6
PrivateConnectivity
private_connection (	B�A"�
DatabaseType<
provider (2*.google.cloud.clouddms.v1.DatabaseProvider8
engine (2(.google.cloud.clouddms.v1.DatabaseEngine"�
MigrationJob
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AB
labels (22.google.cloud.clouddms.v1.MigrationJob.LabelsEntry
display_name (	;
state (2,.google.cloud.clouddms.v1.MigrationJob.State@
phase (2,.google.cloud.clouddms.v1.MigrationJob.PhaseB�A>
type (2+.google.cloud.clouddms.v1.MigrationJob.TypeB�A
	dump_path	 (	D

dump_flags (20.google.cloud.clouddms.v1.MigrationJob.DumpFlags
source
 (	B�A
destination (	B�AT
reverse_ssh_connectivitye (20.google.cloud.clouddms.v1.ReverseSshConnectivityH T
vpc_peering_connectivityf (20.google.cloud.clouddms.v1.VpcPeeringConnectivityH P
static_ip_connectivityg (2..google.cloud.clouddms.v1.StaticIpConnectivityH 0
duration (2.google.protobuf.DurationB�A&
error (2.google.rpc.StatusB�A?
source_database (2&.google.cloud.clouddms.v1.DatabaseTypeD
destination_database (2&.google.cloud.clouddms.v1.DatabaseType1
end_time (2.google.protobuf.TimestampB�AO
conversion_workspace (21.google.cloud.clouddms.v1.ConversionWorkspaceInfo
filter (	
cmek_key_name (	\'
DumpFlag
name (	
value (	P
	DumpFlagsC

dump_flags (2/.google.cloud.clouddms.v1.MigrationJob.DumpFlag-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
MAINTENANCE	
DRAFT
CREATING
NOT_STARTED
RUNNING

FAILED
	COMPLETED
DELETING
STOPPING	
STOPPED

DELETED
UPDATING
STARTING

RESTARTING
RESUMING"�
Phase
PHASE_UNSPECIFIED 
	FULL_DUMP
CDC
PROMOTE_IN_PROGRESS%
!WAITING_FOR_SOURCE_WRITES_TO_STOP
PREPARING_THE_DUMP":
Type
TYPE_UNSPECIFIED 
ONE_TIME

CONTINUOUS:u�Ar
)datamigration.googleapis.com/MigrationJobEprojects/{project}/locations/{location}/migrationJobs/{migration_job}B
connectivity":
ConversionWorkspaceInfo
name (	
	commit_id (	"�
ConnectionProfile
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AG
labels (27.google.cloud.clouddms.v1.ConnectionProfile.LabelsEntry@
state (21.google.cloud.clouddms.v1.ConnectionProfile.State
display_name (	A
mysqld (20.google.cloud.clouddms.v1.MySqlConnectionProfileH K

postgresqle (25.google.cloud.clouddms.v1.PostgreSqlConnectionProfileH C
oracleh (21.google.cloud.clouddms.v1.OracleConnectionProfileH G
cloudsqlf (23.google.cloud.clouddms.v1.CloudSqlConnectionProfileH E
alloydbi (22.google.cloud.clouddms.v1.AlloyDbConnectionProfileH &
error (2.google.rpc.StatusB�A<
provider (2*.google.cloud.clouddms.v1.DatabaseProvider-
LabelsEntry
key (	
value (	:8"w
State
STATE_UNSPECIFIED 	
DRAFT
CREATING	
READY
UPDATING
DELETING
DELETED

FAILED:��A�
.datamigration.googleapis.com/ConnectionProfileOprojects/{project}/locations/{location}/connectionProfiles/{connection_profile}B
connection_profile"�
MigrationJobVerificationErrorZ

error_code (2A.google.cloud.clouddms.v1.MigrationJobVerificationError.ErrorCodeB�A
error_message (	B�A!
error_detail_message (	B�A"�
	ErrorCode
ERROR_CODE_UNSPECIFIED 
CONNECTION_FAILURE
AUTHENTICATION_FAILURE%
!INVALID_CONNECTION_PROFILE_CONFIG
VERSION_INCOMPATIBILITY,
(CONNECTION_PROFILE_TYPES_INCOMPATIBILITY
NO_PGLOGICAL_INSTALLED!
PGLOGICAL_NODE_ALREADY_EXISTS
INVALID_WAL_LEVEL	"
INVALID_SHARED_PRELOAD_LIBRARY
&
"INSUFFICIENT_MAX_REPLICATION_SLOTS 
INSUFFICIENT_MAX_WAL_SENDERS%
!INSUFFICIENT_MAX_WORKER_PROCESSES
UNSUPPORTED_EXTENSIONS
UNSUPPORTED_MIGRATION_TYPE#
INVALID_RDS_LOGICAL_REPLICATION
UNSUPPORTED_GTID_MODE 
UNSUPPORTED_TABLE_DEFINITION
UNSUPPORTED_DEFINER"
CANT_RESTART_RUNNING_MIGRATION
TABLES_WITH_LIMITED_SUPPORT
UNSUPPORTED_DATABASE_LOCALE#
UNSUPPORTED_DATABASE_FDW_CONFIG
ERROR_RDBMS!
SOURCE_SIZE_EXCEEDS_THRESHOLD"�
PrivateConnection
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AG
labels (27.google.cloud.clouddms.v1.PrivateConnection.LabelsEntry
display_name (	E
state (21.google.cloud.clouddms.v1.PrivateConnection.StateB�A&
error (2.google.rpc.StatusB�AH
vpc_peering_configd (2*.google.cloud.clouddms.v1.VpcPeeringConfigH -
LabelsEntry
key (	
value (	:8"v
State
STATE_UNSPECIFIED 
CREATING
CREATED

FAILED
DELETING
FAILED_TO_DELETE
DELETED:��A�
.datamigration.googleapis.com/PrivateConnectionOprojects/{project}/locations/{location}/privateConnections/{private_connection}B
connectivity"b
VpcPeeringConfig9
vpc_name (	B\'�A�A!
compute.googleapis.com/Networks
subnet (	B�A*�
NetworkArchitecture$
 NETWORK_ARCHITECTURE_UNSPECIFIED *
&NETWORK_ARCHITECTURE_OLD_CSQL_PRODUCER*
&NETWORK_ARCHITECTURE_NEW_CSQL_PRODUCER*X
DatabaseEngine
DATABASE_ENGINE_UNSPECIFIED 	
MYSQL

POSTGRESQL

ORACLE*e
DatabaseProvider!
DATABASE_PROVIDER_UNSPECIFIED 
CLOUDSQL
RDS

AURORA
ALLOYDBB�
com.google.cloud.clouddms.v1BClouddmsResourcesProtoPZ8cloud.google.com/go/clouddms/apiv1/clouddmspb;clouddmspb�Google.Cloud.CloudDms.V1�Google\\Cloud\\CloudDms\\V1�Google::Cloud::CloudDMS::V1�AO
compute.googleapis.com/Networks,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

