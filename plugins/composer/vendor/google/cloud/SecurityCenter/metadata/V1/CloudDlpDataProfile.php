<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/cloud_dlp_data_profile.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class CloudDlpDataProfile
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
�
;google/cloud/securitycenter/v1/cloud_dlp_data_profile.protogoogle.cloud.securitycenter.v1"U
CloudDlpDataProfile>
data_profile (	B(�A%
#dlp.googleapis.com/TableDataProfileB�
"com.google.cloud.securitycenter.v1BCloudDlpDataProfileProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1�A�
#dlp.googleapis.com/TableDataProfile0projects/{project}/tableProfiles/{table_profile}Eprojects/{project}/locations/{location}/tableProfiles/{table_profile}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

