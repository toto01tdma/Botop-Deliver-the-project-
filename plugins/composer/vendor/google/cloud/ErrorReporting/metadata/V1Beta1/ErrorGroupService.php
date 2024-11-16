<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_group_service.proto

namespace GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1;

class ErrorGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
Egoogle/devtools/clouderrorreporting/v1beta1/error_group_service.proto+google.devtools.clouderrorreporting.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto8google/devtools/clouderrorreporting/v1beta1/common.proto"\\
GetGroupRequestI

group_name (	B5�A�A/
-clouderrorreporting.googleapis.com/ErrorGroup"a
UpdateGroupRequestK
group (27.google.devtools.clouderrorreporting.v1beta1.ErrorGroupB�A2�
ErrorGroupService�
GetGroup<.google.devtools.clouderrorreporting.v1beta1.GetGroupRequest7.google.devtools.clouderrorreporting.v1beta1.ErrorGroup">���+)/v1beta1/{group_name=projects/*/groups/*}�A
group_name�
UpdateGroup?.google.devtools.clouderrorreporting.v1beta1.UpdateGroupRequest7.google.devtools.clouderrorreporting.v1beta1.ErrorGroup"@���2)/v1beta1/{group.name=projects/*/groups/*}:group�AgroupV�A"clouderrorreporting.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
/com.google.devtools.clouderrorreporting.v1beta1BErrorGroupServiceProtoPZOcloud.google.com/go/errorreporting/apiv1beta1/errorreportingpb;errorreportingpb��#Google.Cloud.ErrorReporting.V1Beta1�#Google\\Cloud\\ErrorReporting\\V1beta1�&Google::Cloud::ErrorReporting::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

