<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement;

class Configmanagement
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
>google/cloud/gkehub/v1/configmanagement/configmanagement.proto\'google.cloud.gkehub.configmanagement.v1"�
MembershipState
cluster_name (	P
membership_spec (27.google.cloud.gkehub.configmanagement.v1.MembershipSpecN
operator_state (26.google.cloud.gkehub.configmanagement.v1.OperatorStateS
config_sync_state (28.google.cloud.gkehub.configmanagement.v1.ConfigSyncState_
policy_controller_state (2>.google.cloud.gkehub.configmanagement.v1.PolicyControllerStatee
hierarchy_controller_state (2A.google.cloud.gkehub.configmanagement.v1.HierarchyControllerState"�
MembershipSpecH
config_sync (23.google.cloud.gkehub.configmanagement.v1.ConfigSyncT
policy_controller (29.google.cloud.gkehub.configmanagement.v1.PolicyController`
hierarchy_controller (2B.google.cloud.gkehub.configmanagement.v1.HierarchyControllerConfig
version
 (	"d

ConfigSync?
git (22.google.cloud.gkehub.configmanagement.v1.GitConfig
source_format (	"�
	GitConfig
	sync_repo (	
sync_branch (	

policy_dir (	
sync_wait_secs (
sync_rev (	
secret_type (	
https_proxy (	!
gcp_service_account_email (	"�
PolicyController
enabled (\'
template_library_installed (H �#
audit_interval_seconds (H�
exemptable_namespaces (	!
referential_rules_enabled (
log_denies_enabled (B
_template_library_installedB
_audit_interval_seconds"x
HierarchyControllerConfig
enabled (
enable_pod_tree_labels (*
"enable_hierarchical_resource_quota ("�
"HierarchyControllerDeploymentStateE
hnc (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateK
	extension (28.google.cloud.gkehub.configmanagement.v1.DeploymentState"<
HierarchyControllerVersion
hnc (	
	extension (	"�
HierarchyControllerStateT
version (2C.google.cloud.gkehub.configmanagement.v1.HierarchyControllerVersionZ
state (2K.google.cloud.gkehub.configmanagement.v1.HierarchyControllerDeploymentState"�
OperatorState
version (	R
deployment_state (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateE
errors (25.google.cloud.gkehub.configmanagement.v1.InstallError"%
InstallError
error_message (	"�
ConfigSyncStateK
version (2:.google.cloud.gkehub.configmanagement.v1.ConfigSyncVersion\\
deployment_state (2B.google.cloud.gkehub.configmanagement.v1.ConfigSyncDeploymentStateF

sync_state (22.google.cloud.gkehub.configmanagement.v1.SyncState"�
ConfigSyncVersion
importer (	
syncer (	
git_sync (	
monitor (	
reconciler_manager (	
root_reconciler (	"�
ConfigSyncDeploymentStateJ
importer (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateH
syncer (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateJ
git_sync (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateI
monitor (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateT
reconciler_manager (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateQ
root_reconciler (28.google.cloud.gkehub.configmanagement.v1.DeploymentState"�
	SyncState
source_token (	
import_token (	

sync_token (	
	last_sync (	B2
last_sync_time (2.google.protobuf.TimestampI
code (2;.google.cloud.gkehub.configmanagement.v1.SyncState.SyncCodeB
errors (22.google.cloud.gkehub.configmanagement.v1.SyncError"�
SyncCode
SYNC_CODE_UNSPECIFIED 

SYNCED
PENDING	
ERROR
NOT_CONFIGURED
NOT_INSTALLED
UNAUTHORIZED
UNREACHABLE"�
	SyncError
code (	
error_message (	O
error_resources (26.google.cloud.gkehub.configmanagement.v1.ErrorResource"�
ErrorResource
source_path (	
resource_name (	
resource_namespace (	O
resource_gvk (29.google.cloud.gkehub.configmanagement.v1.GroupVersionKind"@
GroupVersionKind
group (	
version (	
kind (	"�
PolicyControllerStateQ
version (2@.google.cloud.gkehub.configmanagement.v1.PolicyControllerVersion\\
deployment_state (2B.google.cloud.gkehub.configmanagement.v1.GatekeeperDeploymentState"*
PolicyControllerVersion
version (	"�
GatekeeperDeploymentStatee
#gatekeeper_controller_manager_state (28.google.cloud.gkehub.configmanagement.v1.DeploymentStateR
gatekeeper_audit (28.google.cloud.gkehub.configmanagement.v1.DeploymentState*`
DeploymentState 
DEPLOYMENT_STATE_UNSPECIFIED 
NOT_INSTALLED
	INSTALLED	
ERRORB�
+com.google.cloud.gkehub.configmanagement.v1BConfigManagementProtoPZWcloud.google.com/go/gkehub/configmanagement/apiv1/configmanagementpb;configmanagementpb�\'Google.Cloud.GkeHub.ConfigManagement.V1�\'Google\\Cloud\\GkeHub\\ConfigManagement\\V1�+Google::Cloud::GkeHub::ConfigManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

