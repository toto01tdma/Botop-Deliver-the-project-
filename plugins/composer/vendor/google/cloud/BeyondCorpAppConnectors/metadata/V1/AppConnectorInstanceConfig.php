<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/app_connector_instance_config.proto

namespace GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1;

class AppConnectorInstanceConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Lgoogle/cloud/beyondcorp/appconnectors/v1/app_connector_instance_config.proto(google.cloud.beyondcorp.appconnectors.v1google/protobuf/any.proto"�
AppConnectorInstanceConfig
sequence_number (B�A-
instance_config (2.google.protobuf.AnyY
notification_config (2<.google.cloud.beyondcorp.appconnectors.v1.NotificationConfigK
image_config (25.google.cloud.beyondcorp.appconnectors.v1.ImageConfig"�
NotificationConfigy
pubsub_notification (2Z.google.cloud.beyondcorp.appconnectors.v1.NotificationConfig.CloudPubSubNotificationConfigH <
CloudPubSubNotificationConfig
pubsub_subscription (	B
config"9
ImageConfig
target_image (	
stable_image (	B�
,com.google.cloud.beyondcorp.appconnectors.v1BAppConnectorInstanceConfigProtoPZRcloud.google.com/go/beyondcorp/appconnectors/apiv1/appconnectorspb;appconnectorspb�(Google.Cloud.BeyondCorp.AppConnectors.V1�(Google\\Cloud\\BeyondCorp\\AppConnectors\\V1�,Google::Cloud::BeyondCorp::AppConnectors::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

