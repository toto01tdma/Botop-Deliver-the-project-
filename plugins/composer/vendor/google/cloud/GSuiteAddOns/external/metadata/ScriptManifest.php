<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/script_manifest.proto

namespace GPBMetadata\Google\Apps\Script\Type;

class ScriptManifest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Apps\Script\Type\AddonWidgetSet::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\ExtensionPoint::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/apps/script/type/script_manifest.protogoogle.apps.script.type-google/apps/script/type/extension_point.protogoogle/protobuf/struct.proto"�
CommonAddOnManifest
name (	
logo_url (	D
layout_properties (2).google.apps.script.type.LayoutPropertiesB
add_on_widget_set (2\'.google.apps.script.type.AddOnWidgetSet
use_locale_from_app (I
homepage_trigger (2/.google.apps.script.type.HomepageExtensionPointQ
universal_actions (26.google.apps.script.type.UniversalActionExtensionPoint:
open_link_url_prefixes (2.google.protobuf.ListValue"B
LayoutProperties
primary_color (	
secondary_color (	"]
HttpOptionsN
authorization_header (20.google.apps.script.type.HttpAuthorizationHeader*v
HttpAuthorizationHeader)
%HTTP_AUTHORIZATION_HEADER_UNSPECIFIED 
SYSTEM_ID_TOKEN
USER_ID_TOKEN
NONEB�
com.google.apps.script.typePZ6google.golang.org/genproto/googleapis/apps/script/type�Google.Apps.Script.Type�Google\\Apps\\Script\\Type�Google::Apps::Script::Typebproto3'
        , true);

        static::$is_initialized = true;
    }
}

