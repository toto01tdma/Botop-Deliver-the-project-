<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/services.proto

namespace GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1;

class Services
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
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/video/transcoder/v1beta1/services.proto%google.cloud.video.transcoder.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto5google/cloud/video/transcoder/v1beta1/resources.protogoogle/protobuf/empty.proto"�
CreateJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location<
job (2*.google.cloud.video.transcoder.v1beta1.JobB�A"s
ListJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"D
GetJobRequest3
name (	B%�A�A
transcoder.googleapis.com/Job"G
DeleteJobRequest3
name (	B%�A�A
transcoder.googleapis.com/Job"e
ListJobsResponse8
jobs (2*.google.cloud.video.transcoder.v1beta1.Job
next_page_token (	"�
CreateJobTemplateRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationM
job_template (22.google.cloud.video.transcoder.v1beta1.JobTemplateB�A
job_template_id (	B�A"{
ListJobTemplatesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"T
GetJobTemplateRequest;
name (	B-�A�A\'
%transcoder.googleapis.com/JobTemplate"W
DeleteJobTemplateRequest;
name (	B-�A�A\'
%transcoder.googleapis.com/JobTemplate"~
ListJobTemplatesResponseI
job_templates (22.google.cloud.video.transcoder.v1beta1.JobTemplate
next_page_token (	2�
TranscoderService�
	CreateJob7.google.cloud.video.transcoder.v1beta1.CreateJobRequest*.google.cloud.video.transcoder.v1beta1.Job"G���4"-/v1beta1/{parent=projects/*/locations/*}/jobs:job�A
parent,job�
ListJobs6.google.cloud.video.transcoder.v1beta1.ListJobsRequest7.google.cloud.video.transcoder.v1beta1.ListJobsResponse">���/-/v1beta1/{parent=projects/*/locations/*}/jobs�Aparent�
GetJob4.google.cloud.video.transcoder.v1beta1.GetJobRequest*.google.cloud.video.transcoder.v1beta1.Job"<���/-/v1beta1/{name=projects/*/locations/*/jobs/*}�Aname�
	DeleteJob7.google.cloud.video.transcoder.v1beta1.DeleteJobRequest.google.protobuf.Empty"<���/*-/v1beta1/{name=projects/*/locations/*/jobs/*}�Aname�
CreateJobTemplate?.google.cloud.video.transcoder.v1beta1.CreateJobTemplateRequest2.google.cloud.video.transcoder.v1beta1.JobTemplate"q���E"5/v1beta1/{parent=projects/*/locations/*}/jobTemplates:job_template�A#parent,job_template,job_template_id�
ListJobTemplates>.google.cloud.video.transcoder.v1beta1.ListJobTemplatesRequest?.google.cloud.video.transcoder.v1beta1.ListJobTemplatesResponse"F���75/v1beta1/{parent=projects/*/locations/*}/jobTemplates�Aparent�
GetJobTemplate<.google.cloud.video.transcoder.v1beta1.GetJobTemplateRequest2.google.cloud.video.transcoder.v1beta1.JobTemplate"D���75/v1beta1/{name=projects/*/locations/*/jobTemplates/*}�Aname�
DeleteJobTemplate?.google.cloud.video.transcoder.v1beta1.DeleteJobTemplateRequest.google.protobuf.Empty"D���7*5/v1beta1/{name=projects/*/locations/*/jobTemplates/*}�AnameP��Atranscoder.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.video.transcoder.v1beta1BServicesProtoPZOgoogle.golang.org/genproto/googleapis/cloud/video/transcoder/v1beta1;transcoderbproto3'
        , true);

        static::$is_initialized = true;
    }
}

