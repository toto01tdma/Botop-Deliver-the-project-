<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/cloudscheduler.proto

namespace GPBMetadata\Google\Cloud\Scheduler\V1;

class Cloudscheduler
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
        \GPBMetadata\Google\Cloud\Scheduler\V1\Job::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/scheduler/v1/cloudscheduler.protogoogle.cloud.scheduler.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/cloud/scheduler/v1/job.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"s
ListJobsRequest9
parent (	B)�A�A#!cloudscheduler.googleapis.com/Job
	page_size (

page_token (	"Y
ListJobsResponse,
jobs (2.google.cloud.scheduler.v1.Job
next_page_token (	"H
GetJobRequest7
name (	B)�A�A#
!cloudscheduler.googleapis.com/Job"
CreateJobRequest9
parent (	B)�A�A#!cloudscheduler.googleapis.com/Job0
job (2.google.cloud.scheduler.v1.JobB�A"u
UpdateJobRequest0
job (2.google.cloud.scheduler.v1.JobB�A/
update_mask (2.google.protobuf.FieldMask"K
DeleteJobRequest7
name (	B)�A�A#
!cloudscheduler.googleapis.com/Job"J
PauseJobRequest7
name (	B)�A�A#
!cloudscheduler.googleapis.com/Job"K
ResumeJobRequest7
name (	B)�A�A#
!cloudscheduler.googleapis.com/Job"H
RunJobRequest7
name (	B)�A�A#
!cloudscheduler.googleapis.com/Job2�

CloudScheduler�
ListJobs*.google.cloud.scheduler.v1.ListJobsRequest+.google.cloud.scheduler.v1.ListJobsResponse"9���*(/v1/{parent=projects/*/locations/*}/jobs�Aparent�
GetJob(.google.cloud.scheduler.v1.GetJobRequest.google.cloud.scheduler.v1.Job"7���*(/v1/{name=projects/*/locations/*/jobs/*}�Aname�
	CreateJob+.google.cloud.scheduler.v1.CreateJobRequest.google.cloud.scheduler.v1.Job"B���/"(/v1/{parent=projects/*/locations/*}/jobs:job�A
parent,job�
	UpdateJob+.google.cloud.scheduler.v1.UpdateJobRequest.google.cloud.scheduler.v1.Job"K���32,/v1/{job.name=projects/*/locations/*/jobs/*}:job�Ajob,update_mask�
	DeleteJob+.google.cloud.scheduler.v1.DeleteJobRequest.google.protobuf.Empty"7���**(/v1/{name=projects/*/locations/*/jobs/*}�Aname�
PauseJob*.google.cloud.scheduler.v1.PauseJobRequest.google.cloud.scheduler.v1.Job"@���3"./v1/{name=projects/*/locations/*/jobs/*}:pause:*�Aname�
	ResumeJob+.google.cloud.scheduler.v1.ResumeJobRequest.google.cloud.scheduler.v1.Job"A���4"//v1/{name=projects/*/locations/*/jobs/*}:resume:*�Aname�
RunJob(.google.cloud.scheduler.v1.RunJobRequest.google.cloud.scheduler.v1.Job">���1",/v1/{name=projects/*/locations/*/jobs/*}:run:*�AnameQ�Acloudscheduler.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBz
com.google.cloud.scheduler.v1BSchedulerProtoPZ;cloud.google.com/go/scheduler/apiv1/schedulerpb;schedulerpb�	SCHEDULERbproto3'
        , true);

        static::$is_initialized = true;
    }
}

