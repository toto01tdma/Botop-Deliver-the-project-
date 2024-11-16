<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech_adaptation.proto

namespace GPBMetadata\Google\Cloud\Speech\V1;

class CloudSpeechAdaptation
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
        \GPBMetadata\Google\Cloud\Speech\V1\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/speech/v1/cloud_speech_adaptation.protogoogle.cloud.speech.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto%google/cloud/speech/v1/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreatePhraseSetRequest7
parent (	B\'�A�A!speech.googleapis.com/PhraseSet
phrase_set_id (	B�A:

phrase_set (2!.google.cloud.speech.v1.PhraseSetB�A"�
UpdatePhraseSetRequest:

phrase_set (2!.google.cloud.speech.v1.PhraseSetB�A/
update_mask (2.google.protobuf.FieldMask"L
GetPhraseSetRequest5
name (	B\'�A�A!
speech.googleapis.com/PhraseSet"v
ListPhraseSetRequest7
parent (	B\'�A�A!speech.googleapis.com/PhraseSet
	page_size (

page_token (	"h
ListPhraseSetResponse6
phrase_sets (2!.google.cloud.speech.v1.PhraseSet
next_page_token (	"O
DeletePhraseSetRequest5
name (	B\'�A�A!
speech.googleapis.com/PhraseSet"�
CreateCustomClassRequest9
parent (	B)�A�A#!speech.googleapis.com/CustomClass
custom_class_id (	B�A>
custom_class (2#.google.cloud.speech.v1.CustomClassB�A"�
UpdateCustomClassRequest>
custom_class (2#.google.cloud.speech.v1.CustomClassB�A/
update_mask (2.google.protobuf.FieldMask"P
GetCustomClassRequest7
name (	B)�A�A#
!speech.googleapis.com/CustomClass"|
ListCustomClassesRequest9
parent (	B)�A�A#!speech.googleapis.com/CustomClass
	page_size (

page_token (	"q
ListCustomClassesResponse;
custom_classes (2#.google.cloud.speech.v1.CustomClass
next_page_token (	"S
DeleteCustomClassRequest7
name (	B)�A�A#
!speech.googleapis.com/CustomClass2�

Adaptation�
CreatePhraseSet..google.cloud.speech.v1.CreatePhraseSetRequest!.google.cloud.speech.v1.PhraseSet"[���3"./v1/{parent=projects/*/locations/*}/phraseSets:*�Aparent,phrase_set,phrase_set_id�
GetPhraseSet+.google.cloud.speech.v1.GetPhraseSetRequest!.google.cloud.speech.v1.PhraseSet"=���0./v1/{name=projects/*/locations/*/phraseSets/*}�Aname�
ListPhraseSet,.google.cloud.speech.v1.ListPhraseSetRequest-.google.cloud.speech.v1.ListPhraseSetResponse"?���0./v1/{parent=projects/*/locations/*}/phraseSets�Aparent�
UpdatePhraseSet..google.cloud.speech.v1.UpdatePhraseSetRequest!.google.cloud.speech.v1.PhraseSet"f���G29/v1/{phrase_set.name=projects/*/locations/*/phraseSets/*}:
phrase_set�Aphrase_set,update_mask�
DeletePhraseSet..google.cloud.speech.v1.DeletePhraseSetRequest.google.protobuf.Empty"=���0*./v1/{name=projects/*/locations/*/phraseSets/*}�Aname�
CreateCustomClass0.google.cloud.speech.v1.CreateCustomClassRequest#.google.cloud.speech.v1.CustomClass"b���6"1/v1/{parent=projects/*/locations/*}/customClasses:*�A#parent,custom_class,custom_class_id�
GetCustomClass-.google.cloud.speech.v1.GetCustomClassRequest#.google.cloud.speech.v1.CustomClass"@���31/v1/{name=projects/*/locations/*/customClasses/*}�Aname�
ListCustomClasses0.google.cloud.speech.v1.ListCustomClassesRequest1.google.cloud.speech.v1.ListCustomClassesResponse"B���31/v1/{parent=projects/*/locations/*}/customClasses�Aparent�
UpdateCustomClass0.google.cloud.speech.v1.UpdateCustomClassRequest#.google.cloud.speech.v1.CustomClass"o���N2>/v1/{custom_class.name=projects/*/locations/*/customClasses/*}:custom_class�Acustom_class,update_mask�
DeleteCustomClass0.google.cloud.speech.v1.DeleteCustomClassRequest.google.protobuf.Empty"@���3*1/v1/{name=projects/*/locations/*/customClasses/*}�AnameI�Aspeech.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBr
com.google.cloud.speech.v1BSpeechAdaptationProtoPZ2cloud.google.com/go/speech/apiv1/speechpb;speechpb��GCSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

