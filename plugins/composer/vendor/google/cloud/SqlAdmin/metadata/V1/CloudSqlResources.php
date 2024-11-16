<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace GPBMetadata\Google\Cloud\Sql\V1;

class CloudSqlResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�M
-google/cloud/sql/v1/cloud_sql_resources.protogoogle.cloud.sql.v1google/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"o
AclEntry
value (	3
expiration_time (2.google.protobuf.Timestamp
name (	B�A
kind (	"�

ApiWarning?
code (21.google.cloud.sql.v1.ApiWarning.SqlApiWarningCode
message (	
region (	"Q
SqlApiWarningCode$
 SQL_API_WARNING_CODE_UNSPECIFIED 
REGION_UNREACHABLE"�
BackupRetentionSettingsR
retention_unit (2:.google.cloud.sql.v1.BackupRetentionSettings.RetentionUnit5
retained_backups (2.google.protobuf.Int32Value":
RetentionUnit
RETENTION_UNIT_UNSPECIFIED 	
COUNT"�
BackupConfiguration

start_time (	+
enabled (2.google.protobuf.BoolValue
kind (	6
binary_log_enabled (2.google.protobuf.BoolValueE
!replication_log_archiving_enabled (2.google.protobuf.BoolValue
location (	B
point_in_time_recovery_enabled (2.google.protobuf.BoolValueO
backup_retention_settings (2,.google.cloud.sql.v1.BackupRetentionSettingsC
transaction_log_retention_days	 (2.google.protobuf.Int32Value"0
BackupContext
	backup_id (
kind (	"�
Database
kind (	
charset (	
	collation (	
etag (	
name (	
instance (	
	self_link (	
project (	S
sqlserver_database_details	 (2-.google.cloud.sql.v1.SqlServerDatabaseDetailsH B
database_details"O
SqlServerDatabaseDetails
compatibility_level (
recovery_model (	",
DatabaseFlags
name (	
value (	"M
MySqlSyncConfig:
initial_sync_flags (2.google.cloud.sql.v1.SyncFlags"(
	SyncFlags
name (	
value (	"B
InstanceReference
name (	
region (	
project (	"�
DemoteMasterConfiguration
kind (	_
mysql_replica_configuration (2:.google.cloud.sql.v1.DemoteMasterMySqlReplicaConfiguration"�
%DemoteMasterMySqlReplicaConfiguration
kind (	
username (	
password (	

client_key (	
client_certificate (	
ca_certificate (	"�
ExportContext
uri (	
	databases (	
kind (	O
sql_export_options (23.google.cloud.sql.v1.ExportContext.SqlExportOptionsR
csv_export_options (26.google.cloud.sql.v1.ExportContext.SqlCsvExportOptions3
	file_type (2 .google.cloud.sql.v1.SqlFileType+
offload (2.google.protobuf.BoolValue�
SqlCsvExportOptions
select_query (	
escape_character (	
quote_character (	
fields_terminated_by (	
lines_terminated_by (	�
SqlExportOptions
tables (	/
schema_only (2.google.protobuf.BoolValued
mysql_export_options (2F.google.cloud.sql.v1.ExportContext.SqlExportOptions.MysqlExportOptionsF
MysqlExportOptions0
master_data (2.google.protobuf.Int32Value"�
ImportContext
uri (	
database (	
kind (	3
	file_type (2 .google.cloud.sql.v1.SqlFileTypeR
csv_import_options (26.google.cloud.sql.v1.ImportContext.SqlCsvImportOptions
import_user (	R
bak_import_options (26.google.cloud.sql.v1.ImportContext.SqlBakImportOptions�
SqlCsvImportOptions
table (	
columns (	
escape_character (	
quote_character (	
fields_terminated_by (	
lines_terminated_by (	�
SqlBakImportOptionsd
encryption_options (2H.google.cloud.sql.v1.ImportContext.SqlBakImportOptions.EncryptionOptionsN
EncryptionOptions
	cert_path (	
pvk_path (	
pvk_password (	"�
IpConfiguration0
ipv4_enabled (2.google.protobuf.BoolValue
private_network (	/
require_ssl (2.google.protobuf.BoolValue:
authorized_networks (2.google.cloud.sql.v1.AclEntry
allocated_ip_range (	"l
LocationPreference"
follow_gae_application (	B
zone (	
secondary_zone (	
kind (	"�
MaintenanceWindow)
hour (2.google.protobuf.Int32Value(
day (2.google.protobuf.Int32Value9
update_track (2#.google.cloud.sql.v1.SqlUpdateTrack
kind (	"K
DenyMaintenancePeriod

start_date (	
end_date (	
time (	"�
InsightsConfig
query_insights_enabled (
record_client_address (
record_application_tags (8
query_string_length (2.google.protobuf.Int32Value;
query_plans_per_minute (2.google.protobuf.Int32Value"�
MySqlReplicaConfiguration
dump_file_path (	
username (	
password (	;
connect_retry_interval (2.google.protobuf.Int32Value<
master_heartbeat_period (2.google.protobuf.Int64Value
ca_certificate (	
client_certificate (	

client_key (	

ssl_cipher	 (	=
verify_server_certificate
 (2.google.protobuf.BoolValue
kind (	"A
DiskEncryptionConfiguration
kms_key_name (	
kind (	"B
DiskEncryptionStatus
kms_key_version_name (	
kind (	"�
	IpMapping3
type (2%.google.cloud.sql.v1.SqlIpAddressType

ip_address (	2
time_to_retire (2.google.protobuf.Timestamp"�
	Operation
kind (	
target_link (	A
status (21.google.cloud.sql.v1.Operation.SqlOperationStatus
user (	/
insert_time (2.google.protobuf.Timestamp.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp3
error (2$.google.cloud.sql.v1.OperationErrorsG
operation_type	 (2/.google.cloud.sql.v1.Operation.SqlOperationType:
import_context
 (2".google.cloud.sql.v1.ImportContext:
export_context (2".google.cloud.sql.v1.ExportContext:
backup_context (2".google.cloud.sql.v1.BackupContext
name (	
	target_id (	
	self_link (	
target_project (	"�
SqlOperationType"
SQL_OPERATION_TYPE_UNSPECIFIED 

IMPORT

EXPORT

CREATE

UPDATE

DELETE
RESTART
BACKUP
SNAPSHOT
BACKUP_VOLUME	
DELETE_VOLUME

RESTORE_VOLUME
INJECT_USER	
CLONE
STOP_REPLICA
START_REPLICA
PROMOTE_REPLICA
CREATE_REPLICA
CREATE_USER
DELETE_USER
UPDATE_USER
CREATE_DATABASE
DELETE_DATABASE
UPDATE_DATABASE
FAILOVER
DELETE_BACKUP
RECREATE_REPLICA
TRUNCATE_LOG
DEMOTE_MASTER
MAINTENANCE
ENABLE_PRIVATE_IP
DEFER_MAINTENANCE 
CREATE_CLONE!
RESCHEDULE_MAINTENANCE"
START_EXTERNAL_SYNC#"^
SqlOperationStatus$
 SQL_OPERATION_STATUS_UNSPECIFIED 
PENDING
RUNNING
DONE"=
OperationError
kind (	
code (	
message (	"T
OperationErrors
kind (	3
errors (2#.google.cloud.sql.v1.OperationError"�
Settings5
settings_version (2.google.protobuf.Int64Value\'
authorized_gae_applications (	B
tier (	
kind (	B
user_labels (2-.google.cloud.sql.v1.Settings.UserLabelsEntryC
availability_type (2(.google.cloud.sql.v1.SqlAvailabilityType9
pricing_plan (2#.google.cloud.sql.v1.SqlPricingPlanE
replication_type (2\'.google.cloud.sql.v1.SqlReplicationTypeB>
storage_auto_resize_limit	 (2.google.protobuf.Int64ValueL
activation_policy
 (21.google.cloud.sql.v1.Settings.SqlActivationPolicy>
ip_configuration (2$.google.cloud.sql.v1.IpConfiguration7
storage_auto_resize (2.google.protobuf.BoolValueD
location_preference (2\'.google.cloud.sql.v1.LocationPreference:
database_flags (2".google.cloud.sql.v1.DatabaseFlags<
data_disk_type (2$.google.cloud.sql.v1.SqlDataDiskTypeB
maintenance_window (2&.google.cloud.sql.v1.MaintenanceWindowF
backup_configuration (2(.google.cloud.sql.v1.BackupConfiguration@
database_replication_enabled (2.google.protobuf.BoolValueF
crash_safe_replication_enabled (2.google.protobuf.BoolValueB6
data_disk_size_gb (2.google.protobuf.Int64ValueN
active_directory_config (2-.google.cloud.sql.v1.SqlActiveDirectoryConfig
	collation (	L
deny_maintenance_periods (2*.google.cloud.sql.v1.DenyMaintenancePeriod<
insights_config (2#.google.cloud.sql.v1.InsightsConfigJ
sql_server_audit_config (2).google.cloud.sql.v1.SqlServerAuditConfig1
UserLabelsEntry
key (	
value (	:8"f
SqlActivationPolicy%
!SQL_ACTIVATION_POLICY_UNSPECIFIED 

ALWAYS	
NEVER
	ON_DEMAND"�
SslCert
kind (	
cert_serial_number (	
cert (	/
create_time (2.google.protobuf.Timestamp
common_name (	3
expiration_time (2.google.protobuf.Timestamp
sha1_fingerprint (	
instance (	
	self_link	 (	"Z
SslCertDetail/
	cert_info (2.google.cloud.sql.v1.SslCert
cert_private_key (	"8
SqlActiveDirectoryConfig
kind (	
domain (	"4
SqlServerAuditConfig
kind (	
bucket (	*G
SqlFileType
SQL_FILE_TYPE_UNSPECIFIED 
SQL
CSV
BAK*c
SqlBackendType 
SQL_BACKEND_TYPE_UNSPECIFIED 
	FIRST_GEN

SECOND_GEN
EXTERNAL*u
SqlIpAddressType#
SQL_IP_ADDRESS_TYPE_UNSPECIFIED 
PRIMARY
OUTGOING
PRIVATE
MIGRATED_1ST_GEN*�
SqlDatabaseVersion$
 SQL_DATABASE_VERSION_UNSPECIFIED 
	MYSQL_5_1
	MYSQL_5_5
	MYSQL_5_6
	MYSQL_5_7
POSTGRES_9_6	
POSTGRES_11

SQLSERVER_2017_STANDARD
SQLSERVER_2017_ENTERPRISE
SQLSERVER_2017_EXPRESS
SQLSERVER_2017_WEB
POSTGRES_10
POSTGRES_12
POSTGRES_13
SQLSERVER_2019_STANDARD
SQLSERVER_2019_ENTERPRISE
SQLSERVER_2019_EXPRESS
SQLSERVER_2019_WEB*L
SqlPricingPlan 
SQL_PRICING_PLAN_UNSPECIFIED 
PACKAGE
PER_USE*]
SqlReplicationType$
 SQL_REPLICATION_TYPE_UNSPECIFIED 
SYNCHRONOUS
ASYNCHRONOUS*i
SqlDataDiskType"
SQL_DATA_DISK_TYPE_UNSPECIFIED 

PD_SSD

PD_HDD
OBSOLETE_LOCAL_SSD*U
SqlAvailabilityType%
!SQL_AVAILABILITY_TYPE_UNSPECIFIED 	
ZONAL
REGIONAL*J
SqlUpdateTrack 
SQL_UPDATE_TRACK_UNSPECIFIED 

canary

stableB^
com.google.cloud.sql.v1BCloudSqlResourcesProtoPZ)cloud.google.com/go/sql/apiv1/sqlpb;sqlpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

