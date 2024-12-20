<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/lun.proto

namespace GPBMetadata\Google\Cloud\Baremetalsolution\V2;

class Lun
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/baremetalsolution/v2/lun.proto!google.cloud.baremetalsolution.v2google/api/resource.proto"�
Lun
name (	B�A

id
 (	;
state (2,.google.cloud.baremetalsolution.v2.Lun.State
size_gb (T
multiprotocol_type (28.google.cloud.baremetalsolution.v2.Lun.MultiprotocolTypeD
storage_volume (	B,�A)
\'baremetalsolution.googleapis.com/Volume
	shareable (
boot_lun (H
storage_type (22.google.cloud.baremetalsolution.v2.Lun.StorageType
wwid	 (	"S
State
STATE_UNSPECIFIED 
CREATING
UPDATING	
READY
DELETING"B
MultiprotocolType"
MULTIPROTOCOL_TYPE_UNSPECIFIED 	
LINUX"=
StorageType
STORAGE_TYPE_UNSPECIFIED 
SSD
HDD:n�Ak
$baremetalsolution.googleapis.com/LunCprojects/{project}/locations/{location}/volumes/{volume}/luns/{lun}"K
GetLunRequest:
name (	B,�A�A&
$baremetalsolution.googleapis.com/Lun"y
ListLunsRequest?
parent (	B/�A�A)
\'baremetalsolution.googleapis.com/Volume
	page_size (

page_token (	"v
ListLunsResponse4
luns (2&.google.cloud.baremetalsolution.v2.Lun
next_page_token (	
unreachable (	B�
%com.google.cloud.baremetalsolution.v2BLunProtoPZScloud.google.com/go/baremetalsolution/apiv2/baremetalsolutionpb;baremetalsolutionpb�!Google.Cloud.BareMetalSolution.V2�!Google\\Cloud\\BareMetalSolution\\V2�$Google::Cloud::BareMetalSolution::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

