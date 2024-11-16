<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace GPBMetadata\Google\Cloud\Gkemulticloud\V1;

class AwsResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�0
1google/cloud/gkemulticloud/v1/aws_resources.protogoogle.cloud.gkemulticloud.v1google/api/resource.proto4google/cloud/gkemulticloud/v1/common_resources.protogoogle/protobuf/timestamp.proto"�


AwsCluster
name (	
description (	B�AL

networking (23.google.cloud.gkemulticloud.v1.AwsClusterNetworkingB�A

aws_region (	B�AJ
control_plane (2..google.cloud.gkemulticloud.v1.AwsControlPlaneB�AK
authorization (2/.google.cloud.gkemulticloud.v1.AwsAuthorizationB�AC
state (2/.google.cloud.gkemulticloud.v1.AwsCluster.StateB�A
endpoint (	B�A
uid	 (	B�A
reconciling
 (B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	T
annotations (2:.google.cloud.gkemulticloud.v1.AwsCluster.AnnotationsEntryB�A\\
workload_identity_config (25.google.cloud.gkemulticloud.v1.WorkloadIdentityConfigB�A#
cluster_ca_certificate (	B�A8
fleet (2$.google.cloud.gkemulticloud.v1.FleetB�AI
logging_config (2,.google.cloud.gkemulticloud.v1.LoggingConfigB�AC
errors (2..google.cloud.gkemulticloud.v1.AwsClusterErrorB�AO
monitoring_config (2/.google.cloud.gkemulticloud.v1.MonitoringConfigB�A2
AnnotationsEntry
key (	
value (	:8"u
State
STATE_UNSPECIFIED 
PROVISIONING
RUNNING
RECONCILING
STOPPING	
ERROR
DEGRADED:o�Al
\'gkemulticloud.googleapis.com/AwsClusterAprojects/{project}/locations/{location}/awsClusters/{aws_cluster}"�
AwsControlPlane
version (	B�A
instance_type (	B�AD

ssh_config (2+.google.cloud.gkemulticloud.v1.AwsSshConfigB�A

subnet_ids (	B�A
security_group_ids (	B�A!
iam_instance_profile (	B�AJ
root_volume (20.google.cloud.gkemulticloud.v1.AwsVolumeTemplateB�AJ
main_volume	 (20.google.cloud.gkemulticloud.v1.AwsVolumeTemplateB�AV
database_encryption
 (24.google.cloud.gkemulticloud.v1.AwsDatabaseEncryptionB�AK
tags (28.google.cloud.gkemulticloud.v1.AwsControlPlane.TagsEntryB�Ab
aws_services_authentication (28.google.cloud.gkemulticloud.v1.AwsServicesAuthenticationB�AH
proxy_config (2-.google.cloud.gkemulticloud.v1.AwsProxyConfigB�AR
config_encryption (22.google.cloud.gkemulticloud.v1.AwsConfigEncryptionB�AT
instance_placement (23.google.cloud.gkemulticloud.v1.AwsInstancePlacementB�A+
	TagsEntry
key (	
value (	:8"R
AwsServicesAuthentication
role_arn (	B�A
role_session_name (	B�A"[
AwsAuthorizationG
admin_users (2-.google.cloud.gkemulticloud.v1.AwsClusterUserB�A"\'
AwsClusterUser
username (	B�A"1
AwsDatabaseEncryption
kms_key_arn (	B�A"�
AwsVolumeTemplate
size_gib (B�AU
volume_type (2;.google.cloud.gkemulticloud.v1.AwsVolumeTemplate.VolumeTypeB�A
iops (B�A
kms_key_arn (	B�A";

VolumeType
VOLUME_TYPE_UNSPECIFIED 
GP2
GP3"{
AwsClusterNetworking
vpc_id (	B�A$
pod_address_cidr_blocks (	B�A(
service_address_cidr_blocks (	B�A"�
AwsNodePool
name (	
version (	B�AA
config (2,.google.cloud.gkemulticloud.v1.AwsNodeConfigB�AO
autoscaling (25.google.cloud.gkemulticloud.v1.AwsNodePoolAutoscalingB�A
	subnet_id (	B�AD
state (20.google.cloud.gkemulticloud.v1.AwsNodePool.StateB�A
uid (	B�A
reconciling (B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	U
annotations (2;.google.cloud.gkemulticloud.v1.AwsNodePool.AnnotationsEntryB�AR
max_pods_constraint (20.google.cloud.gkemulticloud.v1.MaxPodsConstraintB�AD
errors (2/.google.cloud.gkemulticloud.v1.AwsNodePoolErrorB�A2
AnnotationsEntry
key (	
value (	:8"u
State
STATE_UNSPECIFIED 
PROVISIONING
RUNNING
RECONCILING
STOPPING	
ERROR
DEGRADED:��A�
(gkemulticloud.googleapis.com/AwsNodePool^projects/{project}/locations/{location}/awsClusters/{aws_cluster}/awsNodePools/{aws_node_pool}"�
AwsNodeConfig
instance_type (	B�AJ
root_volume (20.google.cloud.gkemulticloud.v1.AwsVolumeTemplateB�A=
taints (2(.google.cloud.gkemulticloud.v1.NodeTaintB�AM
labels (28.google.cloud.gkemulticloud.v1.AwsNodeConfig.LabelsEntryB�AI
tags (26.google.cloud.gkemulticloud.v1.AwsNodeConfig.TagsEntryB�A!
iam_instance_profile (	B�A

image_type (	B�AD

ssh_config	 (2+.google.cloud.gkemulticloud.v1.AwsSshConfigB�A
security_group_ids
 (	B�AH
proxy_config (2-.google.cloud.gkemulticloud.v1.AwsProxyConfigB�AR
config_encryption (22.google.cloud.gkemulticloud.v1.AwsConfigEncryptionB�AT
instance_placement (23.google.cloud.gkemulticloud.v1.AwsInstancePlacementB�Ap
autoscaling_metrics_collection (2C.google.cloud.gkemulticloud.v1.AwsAutoscalingGroupMetricsCollectionB�A-
LabelsEntry
key (	
value (	:8+
	TagsEntry
key (	
value (	:8"R
AwsNodePoolAutoscaling
min_node_count (B�A
max_node_count (B�A"�
AwsServerConfig
name (	H
valid_versions (20.google.cloud.gkemulticloud.v1.AwsK8sVersionInfo
supported_aws_regions (	:j�Ag
,gkemulticloud.googleapis.com/AwsServerConfig7projects/{project}/locations/{location}/awsServerConfig"$
AwsK8sVersionInfo
version (	")
AwsSshConfig
ec2_key_pair (	B�A"<
AwsProxyConfig

secret_arn (	
secret_version (	"/
AwsConfigEncryption
kms_key_arn (	B�A"�
AwsInstancePlacementQ
tenancy (2;.google.cloud.gkemulticloud.v1.AwsInstancePlacement.TenancyB�A"H
Tenancy
TENANCY_UNSPECIFIED 
DEFAULT
	DEDICATED
HOST"V
$AwsAutoscalingGroupMetricsCollection
granularity (	B�A
metrics (	B�A""
AwsClusterError
message (	"#
AwsNodePoolError
message (	B�
!com.google.cloud.gkemulticloud.v1BAwsResourcesProtoPZGcloud.google.com/go/gkemulticloud/apiv1/gkemulticloudpb;gkemulticloudpb�Google.Cloud.GkeMultiCloud.V1�Google\\Cloud\\GkeMultiCloud\\V1� Google::Cloud::GkeMultiCloud::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

