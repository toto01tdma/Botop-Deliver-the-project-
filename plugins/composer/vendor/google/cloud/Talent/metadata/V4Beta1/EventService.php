<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/event_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class EventService
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
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Event::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/talent/v4beta1/event_service.protogoogle.cloud.talent.v4beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/cloud/talent/v4beta1/event.proto"�
CreateClientEventRequest3
parent (	B#�A�Ajobs.googleapis.com/CompanyC
client_event (2(.google.cloud.talent.v4beta1.ClientEventB�A2�
EventService�
CreateClientEvent5.google.cloud.talent.v4beta1.CreateClientEventRequest(.google.cloud.talent.v4beta1.ClientEvent"����h"3/v4beta1/{parent=projects/*/tenants/*}/clientEvents:*Z.")/v4beta1/{parent=projects/*}/clientEvents:*�Aparent,client_eventl�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsBu
com.google.cloud.talent.v4beta1BEventServiceProtoPZ7cloud.google.com/go/talent/apiv4beta1/talentpb;talentpb�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

