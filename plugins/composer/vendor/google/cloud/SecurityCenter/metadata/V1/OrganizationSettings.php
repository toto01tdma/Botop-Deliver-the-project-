<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/organization_settings.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class OrganizationSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/securitycenter/v1/organization_settings.protogoogle.cloud.securitycenter.v1"�
OrganizationSettings
name (	
enable_asset_discovery (i
asset_discovery_config (2I.google.cloud.securitycenter.v1.OrganizationSettings.AssetDiscoveryConfig�
AssetDiscoveryConfig
project_ids (	o
inclusion_mode (2W.google.cloud.securitycenter.v1.OrganizationSettings.AssetDiscoveryConfig.InclusionMode

folder_ids (	"N
InclusionMode
INCLUSION_MODE_UNSPECIFIED 
INCLUDE_ONLY
EXCLUDE:j�Ag
2securitycenter.googleapis.com/OrganizationSettings1organizations/{organization}/organizationSettingsB�
"com.google.cloud.securitycenter.v1PZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

