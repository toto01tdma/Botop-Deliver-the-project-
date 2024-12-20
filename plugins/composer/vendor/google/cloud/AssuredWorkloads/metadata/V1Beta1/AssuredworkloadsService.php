<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_service.proto

namespace GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1;

class AssuredworkloadsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/cloud/assuredworkloads/v1beta1/assuredworkloads_service.proto%google.cloud.assuredworkloads.v1beta1google/api/client.proto<google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto2�
AssuredWorkloadsService�
CreateWorkload<.google.cloud.assuredworkloads.v1beta1.CreateWorkloadRequest.google.longrunning.Operation"����C"7/v1beta1/{parent=organizations/*/locations/*}/workloads:workload�Aparent,workload�A+
WorkloadCreateWorkloadOperationMetadata�
UpdateWorkload<.google.cloud.assuredworkloads.v1beta1.UpdateWorkloadRequest/.google.cloud.assuredworkloads.v1beta1.Workload"�Aworkload,update_mask�
RestrictAllowedResourcesF.google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequestG.google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesResponse"[���U"P/v1beta1/{name=organizations/*/locations/*/workloads/*}:restrictAllowedResources:*�
DeleteWorkload<.google.cloud.assuredworkloads.v1beta1.DeleteWorkloadRequest.google.protobuf.Empty"F���9*7/v1beta1/{name=organizations/*/locations/*/workloads/*}�Aname�
GetWorkload9.google.cloud.assuredworkloads.v1beta1.GetWorkloadRequest/.google.cloud.assuredworkloads.v1beta1.Workload"�Aname�
AnalyzeWorkloadMoveA.google.cloud.assuredworkloads.v1beta1.AnalyzeWorkloadMoveRequestB.google.cloud.assuredworkloads.v1beta1.AnalyzeWorkloadMoveResponse"�Aproject,target�
ListWorkloads;.google.cloud.assuredworkloads.v1beta1.ListWorkloadsRequest<.google.cloud.assuredworkloads.v1beta1.ListWorkloadsResponse"	�AparentS�Aassuredworkloads.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.assuredworkloads.v1beta1BAssuredworkloadsServiceProtoPZUcloud.google.com/go/assuredworkloads/apiv1beta1/assuredworkloadspb;assuredworkloadspb�%Google.Cloud.AssuredWorkloads.V1Beta1�%Google\\Cloud\\AssuredWorkloads\\V1beta1�(Google::Cloud::AssuredWorkloads::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

