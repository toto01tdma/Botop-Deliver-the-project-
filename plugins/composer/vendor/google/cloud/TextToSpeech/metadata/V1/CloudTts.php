<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace GPBMetadata\Google\Cloud\Texttospeech\V1;

class CloudTts
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
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/texttospeech/v1/cloud_tts.protogoogle.cloud.texttospeech.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"/
ListVoicesRequest
language_code (	B�A"I
ListVoicesResponse3
voices (2#.google.cloud.texttospeech.v1.Voice"�
Voice
language_codes (	
name (	B
ssml_gender (2-.google.cloud.texttospeech.v1.SsmlVoiceGender!
natural_sample_rate_hertz ("�
SynthesizeSpeechRequest@
input (2,.google.cloud.texttospeech.v1.SynthesisInputB�AF
voice (22.google.cloud.texttospeech.v1.VoiceSelectionParamsB�AD
audio_config (2).google.cloud.texttospeech.v1.AudioConfigB�A"@
SynthesisInput
text (	H 
ssml (	H B
input_source"�
VoiceSelectionParams
language_code (	B�A
name (	B
ssml_gender (2-.google.cloud.texttospeech.v1.SsmlVoiceGenderE
custom_voice (2/.google.cloud.texttospeech.v1.CustomVoiceParams"�
AudioConfigH
audio_encoding (2+.google.cloud.texttospeech.v1.AudioEncodingB�A
speaking_rate (B�A�A
pitch (B�A�A
volume_gain_db (B�A�A
sample_rate_hertz (B�A"
effects_profile_id (	B�A�A"�
CustomVoiceParams2
model (	B#�A�A
automl.googleapis.com/ModelZ
reported_usage (2=.google.cloud.texttospeech.v1.CustomVoiceParams.ReportedUsageB�A"J
ReportedUsage
REPORTED_USAGE_UNSPECIFIED 
REALTIME
OFFLINE"1
SynthesizeSpeechResponse
audio_content (*W
SsmlVoiceGender!
SSML_VOICE_GENDER_UNSPECIFIED 
MALE

FEMALE
NEUTRAL*i
AudioEncoding
AUDIO_ENCODING_UNSPECIFIED 
LINEAR16
MP3
OGG_OPUS	
MULAW
ALAW2�
TextToSpeech�

ListVoices/.google.cloud.texttospeech.v1.ListVoicesRequest0.google.cloud.texttospeech.v1.ListVoicesResponse""���
/v1/voices�Alanguage_code�
SynthesizeSpeech5.google.cloud.texttospeech.v1.SynthesizeSpeechRequest6.google.cloud.texttospeech.v1.SynthesizeSpeechResponse"9���"/v1/text:synthesize:*�Ainput,voice,audio_configO�Atexttospeech.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.texttospeech.v1BTextToSpeechProtoPZDcloud.google.com/go/texttospeech/apiv1/texttospeechpb;texttospeechpb��Google.Cloud.TextToSpeech.V1�Google\\Cloud\\TextToSpeech\\V1�Google::Cloud::TextToSpeech::V1�AU
automl.googleapis.com/Model6projects/{project}/locations/{location}/models/{model}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

