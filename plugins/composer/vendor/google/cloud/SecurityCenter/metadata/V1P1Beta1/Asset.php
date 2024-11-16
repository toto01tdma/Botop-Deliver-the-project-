<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/asset.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class Asset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Folder::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecurityMarks::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/securitycenter/v1p1beta1/asset.proto%google.cloud.securitycenter.v1p1beta12google/cloud/securitycenter/v1p1beta1/folder.proto:google/cloud/securitycenter/v1p1beta1/security_marks.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Asset
name (	i
security_center_properties (2E.google.cloud.securitycenter.v1p1beta1.Asset.SecurityCenterPropertiesa
resource_properties (2D.google.cloud.securitycenter.v1p1beta1.Asset.ResourcePropertiesEntryL
security_marks (24.google.cloud.securitycenter.v1p1beta1.SecurityMarks/
create_time	 (2.google.protobuf.Timestamp/
update_time
 (2.google.protobuf.TimestampJ

iam_policy (26.google.cloud.securitycenter.v1p1beta1.Asset.IamPolicy
canonical_name (	�
SecurityCenterProperties
resource_name (	
resource_type (	
resource_parent (	
resource_project (	
resource_owners (	
resource_display_name (	$
resource_parent_display_name (	%
resource_project_display_name (	>
folders
 (2-.google.cloud.securitycenter.v1p1beta1.Folder 
	IamPolicy
policy_blob (	Q
ResourcePropertiesEntry
key (	%
value (2.google.protobuf.Value:8:��A�
#securitycenter.googleapis.com/Asset+organizations/{organization}/assets/{asset}folders/{folder}/assets/{asset}!projects/{project}/assets/{asset}B�
)com.google.cloud.securitycenter.v1p1beta1PZQcloud.google.com/go/securitycenter/apiv1p1beta1/securitycenterpb;securitycenterpb�%Google.Cloud.SecurityCenter.V1P1Beta1�%Google\\Cloud\\SecurityCenter\\V1p1beta1�(Google::Cloud::SecurityCenter::V1p1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

