<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/common.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class Common
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
�

0google/cloud/discoveryengine/v1beta/common.proto#google.cloud.discoveryengine.v1beta"x
Interval
minimum (H 
exclusive_minimum (H 
maximum (H
exclusive_maximum (HB
minB
max"0
CustomAttribute
text (	
numbers ("/
UserInfo
user_id (	

user_agent (	B�
\'com.google.cloud.discoveryengine.v1betaBCommonProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1beta�A�
%discoveryengine.googleapis.com/BranchQprojects/{project}/locations/{location}/dataStores/{data_store}/branches/{branch}jprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}�A�
(discoveryengine.googleapis.com/DataStore?projects/{project}/locations/{location}/dataStores/{data_store}Xprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}�A�
,discoveryengine.googleapis.com/ServingConfig_projects/{project}/locations/{location}/dataStores/{data_store}/servingConfigs/{serving_config}xprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/servingConfigs/{serving_config}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

