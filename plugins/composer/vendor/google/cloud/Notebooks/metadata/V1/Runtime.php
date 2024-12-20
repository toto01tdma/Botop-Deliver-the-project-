<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace GPBMetadata\Google\Cloud\Notebooks\V1;

class Runtime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Notebooks\V1\Environment::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�)
\'google/cloud/notebooks/v1/runtime.protogoogle.cloud.notebooks.v1google/api/resource.proto+google/cloud/notebooks/v1/environment.protogoogle/protobuf/timestamp.proto"�
Runtime
name (	B�AD
virtual_machine (2).google.cloud.notebooks.v1.VirtualMachineH <
state (2(.google.cloud.notebooks.v1.Runtime.StateB�AI
health_state (2..google.cloud.notebooks.v1.Runtime.HealthStateB�AE
access_config (2..google.cloud.notebooks.v1.RuntimeAccessConfigI
software_config (20.google.cloud.notebooks.v1.RuntimeSoftwareConfig?
metrics (2).google.cloud.notebooks.v1.RuntimeMetricsB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A"�
State
STATE_UNSPECIFIED 
STARTING
PROVISIONING

ACTIVE
STOPPING
STOPPED
DELETING
	UPGRADING
INITIALIZING"w
HealthState
HEALTH_STATE_UNSPECIFIED 
HEALTHY
	UNHEALTHY
AGENT_NOT_INSTALLED
AGENT_NOT_RUNNING:a�A^
 notebooks.googleapis.com/Runtime:projects/{project}/locations/{location}/runtimes/{runtime}B
runtime_type"�
RuntimeAcceleratorConfigQ
type (2C.google.cloud.notebooks.v1.RuntimeAcceleratorConfig.AcceleratorType

core_count ("�
AcceleratorType 
ACCELERATOR_TYPE_UNSPECIFIED 
NVIDIA_TESLA_K80
NVIDIA_TESLA_P100
NVIDIA_TESLA_V100
NVIDIA_TESLA_P4
NVIDIA_TESLA_T4
NVIDIA_TESLA_A100

TPU_V2

TPU_V3
NVIDIA_TESLA_T4_VWS	
NVIDIA_TESLA_P100_VWS

NVIDIA_TESLA_P4_VWS"#
EncryptionConfig
kms_key (	"�
	LocalDisk
auto_delete (B�A
boot (B�A
device_name (	B�AZ
guest_os_features (2:.google.cloud.notebooks.v1.LocalDisk.RuntimeGuestOsFeatureB�A
index (B�AT
initialize_params (24.google.cloud.notebooks.v1.LocalDiskInitializeParamsB�A
	interface (	
kind (	B�A
licenses	 (	B�A
mode
 (	
source (	
type (	%
RuntimeGuestOsFeature
type (	"�
LocalDiskInitializeParams
description (	B�A
	disk_name (	B�A
disk_size_gb (B�AU
	disk_type (2=.google.cloud.notebooks.v1.LocalDiskInitializeParams.DiskTypeB�AU
labels (2@.google.cloud.notebooks.v1.LocalDiskInitializeParams.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8"c
DiskType
DISK_TYPE_UNSPECIFIED 
PD_STANDARD

PD_SSD
PD_BALANCED

PD_EXTREME"�
RuntimeAccessConfigU
access_type (2@.google.cloud.notebooks.v1.RuntimeAccessConfig.RuntimeAccessType
runtime_owner (	
	proxy_uri (	B�A"^
RuntimeAccessType#
RUNTIME_ACCESS_TYPE_UNSPECIFIED 
SINGLE_USER
SERVICE_ACCOUNT"�
RuntimeSoftwareConfig!
notebook_upgrade_schedule (	%
enable_health_monitoring (H �
idle_shutdown (H�
idle_shutdown_timeout (
install_gpu_driver (
custom_gpu_driver_path (	
post_startup_script (	?
kernels (2).google.cloud.notebooks.v1.ContainerImageB�A
upgradeable	 (B�AH�p
post_startup_script_behavior
 (2J.google.cloud.notebooks.v1.RuntimeSoftwareConfig.PostStartupScriptBehavior
disable_terminal (H�
version (	B�AH�"�
PostStartupScriptBehavior,
(POST_STARTUP_SCRIPT_BEHAVIOR_UNSPECIFIED 
RUN_EVERY_START 
DOWNLOAD_AND_RUN_EVERY_STARTB
_enable_health_monitoringB
_idle_shutdownB
_upgradeableB
_disable_terminalB

_version"�
RuntimeMetricsY
system_metrics (2<.google.cloud.notebooks.v1.RuntimeMetrics.SystemMetricsEntryB�A4
SystemMetricsEntry
key (	
value (	:8"u
RuntimeShieldedInstanceConfig
enable_secure_boot (
enable_vtpm (#
enable_integrity_monitoring ("�
VirtualMachine
instance_name (	B�A
instance_id (	B�AO
virtual_machine_config (2/.google.cloud.notebooks.v1.VirtualMachineConfig"�	
VirtualMachineConfig
zone (	B�A
machine_type (	B�AH
container_images (2).google.cloud.notebooks.v1.ContainerImageB�A<
	data_disk (2$.google.cloud.notebooks.v1.LocalDiskB�AK
encryption_config (2+.google.cloud.notebooks.v1.EncryptionConfigB�A_
shielded_instance_config (28.google.cloud.notebooks.v1.RuntimeShieldedInstanceConfigB�AT
accelerator_config (23.google.cloud.notebooks.v1.RuntimeAcceleratorConfigB�A
network (	B�A
subnet	 (	B�A
internal_ip_only
 (B�A
tags (	B�Ac
guest_attributes (2D.google.cloud.notebooks.v1.VirtualMachineConfig.GuestAttributesEntryB�AT
metadata (2=.google.cloud.notebooks.v1.VirtualMachineConfig.MetadataEntryB�AP
labels (2;.google.cloud.notebooks.v1.VirtualMachineConfig.LabelsEntryB�AN
nic_type (27.google.cloud.notebooks.v1.VirtualMachineConfig.NicTypeB�A
reserved_ip_range (	B�AR

boot_image (29.google.cloud.notebooks.v1.VirtualMachineConfig.BootImageB�A
	BootImage6
GuestAttributesEntry
key (	
value (	:8/
MetadataEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8">
NicType
UNSPECIFIED_NIC_TYPE 

VIRTIO_NET	
GVNICB�
com.google.cloud.notebooks.v1BRuntimeProtoPZ;cloud.google.com/go/notebooks/apiv1/notebookspb;notebookspb�Google.Cloud.Notebooks.V1�Google\\Cloud\\Notebooks\\V1�Google::Cloud::Notebooks::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

