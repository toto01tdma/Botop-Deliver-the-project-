<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/run_asset_discovery_response.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class RunAssetDiscoveryResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/cloud/securitycenter/v1/run_asset_discovery_response.protogoogle.cloud.securitycenter.v1"�
RunAssetDiscoveryResponseN
state (2?.google.cloud.securitycenter.v1.RunAssetDiscoveryResponse.State+
duration (2.google.protobuf.Duration"M
State
STATE_UNSPECIFIED 
	COMPLETED

SUPERSEDED

TERMINATEDB�
"com.google.cloud.securitycenter.v1PZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

