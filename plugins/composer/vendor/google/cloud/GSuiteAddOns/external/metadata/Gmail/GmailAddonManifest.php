<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/gmail/gmail_addon_manifest.proto

namespace GPBMetadata\Google\Apps\Script\Type\Gmail;

class GmailAddonManifest
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
�	
8google/apps/script/type/gmail/gmail_addon_manifest.protogoogle.apps.script.type.gmail-google/apps/script/type/extension_point.protogoogle/protobuf/struct.proto"�
GmailAddOnManifestI
homepage_trigger (2/.google.apps.script.type.HomepageExtensionPointM
contextual_triggers (20.google.apps.script.type.gmail.ContextualTriggerI
universal_actions (2..google.apps.script.type.gmail.UniversalActionF
compose_trigger (2-.google.apps.script.type.gmail.ComposeTrigger$
authorization_check_function (	"[
UniversalAction
text (	
	open_link (	H 
run_function (	H B
action_type"�
ComposeTrigger@
actions (2/.google.apps.script.type.MenuItemExtensionPointO
draft_access (29.google.apps.script.type.gmail.ComposeTrigger.DraftAccess"6
DraftAccess
UNSPECIFIED 
NONE
METADATA"�
ContextualTriggerL
unconditional (23.google.apps.script.type.gmail.UnconditionalTriggerH 
on_trigger_function (	B	
trigger"
UnconditionalTriggerB�
!com.google.apps.script.type.gmailBGmailAddOnManifestProtoPZ<google.golang.org/genproto/googleapis/apps/script/type/gmail�Google.Apps.Script.Type.Gmail�Google\\Apps\\Script\\Type\\Gmail�!Google::Apps::Script::Type::Gmailbproto3'
        , true);

        static::$is_initialized = true;
    }
}

