<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/environment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Environment
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
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Fulfillment::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�"
,google/cloud/dialogflow/v2/environment.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/v2/audio_config.proto,google/cloud/dialogflow/v2/fulfillment.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Environment
name (	B�A
description (	B�A@
agent_version (	B)�A�A#
!dialogflow.googleapis.com/VersionA
state (2-.google.cloud.dialogflow.v2.Environment.StateB�A4
update_time (2.google.protobuf.TimestampB�AV
text_to_speech_settings (20.google.cloud.dialogflow.v2.TextToSpeechSettingsB�AA
fulfillment (2\'.google.cloud.dialogflow.v2.FulfillmentB�A"E
State
STATE_UNSPECIFIED 
STOPPED
LOADING
RUNNING:��A�
%dialogflow.googleapis.com/Environment3projects/{project}/agent/environments/{environment}Hprojects/{project}/locations/{location}/agent/environments/{environment}"�
TextToSpeechSettings"
enable_text_to_speech (B�AS
output_audio_encoding (2/.google.cloud.dialogflow.v2.OutputAudioEncodingB�A
sample_rate_hertz (B�Au
synthesize_speech_configs (2M.google.cloud.dialogflow.v2.TextToSpeechSettings.SynthesizeSpeechConfigsEntryB�Ar
SynthesizeSpeechConfigsEntry
key (	A
value (22.google.cloud.dialogflow.v2.SynthesizeSpeechConfig:8"�
ListEnvironmentsRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/Environment
	page_size (B�A

page_token (	B�A"r
ListEnvironmentsResponse=
environments (2\'.google.cloud.dialogflow.v2.Environment
next_page_token (	"T
GetEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
CreateEnvironmentRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/EnvironmentA
environment (2\'.google.cloud.dialogflow.v2.EnvironmentB�A
environment_id (	B�A"�
UpdateEnvironmentRequestA
environment (2\'.google.cloud.dialogflow.v2.EnvironmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A4
\'allow_load_to_draft_and_discard_changes (B�A"W
DeleteEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
GetEnvironmentHistoryRequest=
parent (	B-�A�A\'
%dialogflow.googleapis.com/Environment
	page_size (B�A

page_token (	B�A"�
EnvironmentHistory
parent (	B�AJ
entries (24.google.cloud.dialogflow.v2.EnvironmentHistory.EntryB�A
next_page_token (	B�Ad
Entry
agent_version (	
description (	/
create_time (2.google.protobuf.Timestamp2�
Environments�
ListEnvironments3.google.cloud.dialogflow.v2.ListEnvironmentsRequest4.google.cloud.dialogflow.v2.ListEnvironmentsResponse"u���f*/v2/{parent=projects/*/agent}/environmentsZ86/v2/{parent=projects/*/locations/*/agent}/environments�Aparent�
GetEnvironment1.google.cloud.dialogflow.v2.GetEnvironmentRequest\'.google.cloud.dialogflow.v2.Environment"l���f*/v2/{name=projects/*/agent/environments/*}Z86/v2/{name=projects/*/locations/*/agent/environments/*}�
CreateEnvironment4.google.cloud.dialogflow.v2.CreateEnvironmentRequest\'.google.cloud.dialogflow.v2.Environment"�����"*/v2/{parent=projects/*/agent}/environments:environmentZE"6/v2/{parent=projects/*/locations/*/agent}/environments:environment�
UpdateEnvironment4.google.cloud.dialogflow.v2.UpdateEnvironmentRequest\'.google.cloud.dialogflow.v2.Environment"�����26/v2/{environment.name=projects/*/agent/environments/*}:environmentZQ2B/v2/{environment.name=projects/*/locations/*/agent/environments/*}:environment�
DeleteEnvironment4.google.cloud.dialogflow.v2.DeleteEnvironmentRequest.google.protobuf.Empty"l���f**/v2/{name=projects/*/agent/environments/*}Z8*6/v2/{name=projects/*/locations/*/agent/environments/*}�
GetEnvironmentHistory8.google.cloud.dialogflow.v2.GetEnvironmentHistoryRequest..google.cloud.dialogflow.v2.EnvironmentHistory"����z4/v2/{parent=projects/*/agent/environments/*}/historyZB@/v2/{parent=projects/*/locations/*/agent/environments/*}/historyx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BEnvironmentProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

