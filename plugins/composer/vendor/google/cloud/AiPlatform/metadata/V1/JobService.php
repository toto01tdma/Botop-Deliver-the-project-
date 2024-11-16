<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class JobService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\BatchPredictionJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataLabelingJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\HyperparameterTuningJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelDeploymentMonitoringJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NasJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�x
,google/cloud/aiplatform/v1/job_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto5google/cloud/aiplatform/v1/batch_prediction_job.proto+google/cloud/aiplatform/v1/custom_job.proto2google/cloud/aiplatform/v1/data_labeling_job.proto:google/cloud/aiplatform/v1/hyperparameter_tuning_job.proto@google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto(google/cloud/aiplatform/v1/nas_job.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateCustomJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location>

custom_job (2%.google.cloud.aiplatform.v1.CustomJobB�A"P
GetCustomJobRequest9
name (	B+�A�A%
#aiplatform.googleapis.com/CustomJob"�
ListCustomJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"m
ListCustomJobsResponse:
custom_jobs (2%.google.cloud.aiplatform.v1.CustomJob
next_page_token (	"S
DeleteCustomJobRequest9
name (	B+�A�A%
#aiplatform.googleapis.com/CustomJob"S
CancelCustomJobRequest9
name (	B+�A�A%
#aiplatform.googleapis.com/CustomJob"�
CreateDataLabelingJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationK
data_labeling_job (2+.google.cloud.aiplatform.v1.DataLabelingJobB�A"\\
GetDataLabelingJobRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/DataLabelingJob"�
ListDataLabelingJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"�
ListDataLabelingJobsResponseG
data_labeling_jobs (2+.google.cloud.aiplatform.v1.DataLabelingJob
next_page_token (	"_
DeleteDataLabelingJobRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/DataLabelingJob"_
CancelDataLabelingJobRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/DataLabelingJob"�
$CreateHyperparameterTuningJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location[
hyperparameter_tuning_job (23.google.cloud.aiplatform.v1.HyperparameterTuningJobB�A"l
!GetHyperparameterTuningJobRequestG
name (	B9�A�A3
1aiplatform.googleapis.com/HyperparameterTuningJob"�
#ListHyperparameterTuningJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"�
$ListHyperparameterTuningJobsResponseW
hyperparameter_tuning_jobs (23.google.cloud.aiplatform.v1.HyperparameterTuningJob
next_page_token (	"o
$DeleteHyperparameterTuningJobRequestG
name (	B9�A�A3
1aiplatform.googleapis.com/HyperparameterTuningJob"o
$CancelHyperparameterTuningJobRequestG
name (	B9�A�A3
1aiplatform.googleapis.com/HyperparameterTuningJob"�
CreateNasJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location8
nas_job (2".google.cloud.aiplatform.v1.NasJobB�A"J
GetNasJobRequest6
name (	B(�A�A"
 aiplatform.googleapis.com/NasJob"�
ListNasJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"d
ListNasJobsResponse4
nas_jobs (2".google.cloud.aiplatform.v1.NasJob
next_page_token (	"M
DeleteNasJobRequest6
name (	B(�A�A"
 aiplatform.googleapis.com/NasJob"M
CancelNasJobRequest6
name (	B(�A�A"
 aiplatform.googleapis.com/NasJob"Z
GetNasTrialDetailRequest>
name (	B0�A�A*
(aiplatform.googleapis.com/NasTrialDetail"}
ListNasTrialDetailsRequest8
parent (	B(�A�A"
 aiplatform.googleapis.com/NasJob
	page_size (

page_token (	"}
ListNasTrialDetailsResponseE
nas_trial_details (2*.google.cloud.aiplatform.v1.NasTrialDetail
next_page_token (	"�
CreateBatchPredictionJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationQ
batch_prediction_job (2..google.cloud.aiplatform.v1.BatchPredictionJobB�A"b
GetBatchPredictionJobRequestB
name (	B4�A�A.
,aiplatform.googleapis.com/BatchPredictionJob"�
ListBatchPredictionJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"�
ListBatchPredictionJobsResponseM
batch_prediction_jobs (2..google.cloud.aiplatform.v1.BatchPredictionJob
next_page_token (	"e
DeleteBatchPredictionJobRequestB
name (	B4�A�A.
,aiplatform.googleapis.com/BatchPredictionJob"e
CancelBatchPredictionJobRequestB
name (	B4�A�A.
,aiplatform.googleapis.com/BatchPredictionJob"�
)CreateModelDeploymentMonitoringJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/Locationf
model_deployment_monitoring_job (28.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJobB�A"�
4SearchModelDeploymentMonitoringStatsAnomaliesRequestg
model_deployment_monitoring_job (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJob
deployed_model_id (	B�A
feature_display_name (	�

objectives (2h.google.cloud.aiplatform.v1.SearchModelDeploymentMonitoringStatsAnomaliesRequest.StatsAnomaliesObjectiveB�A
	page_size (

page_token (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp�
StatsAnomaliesObjectiveP
type (2B.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType
top_feature_count ("�
5SearchModelDeploymentMonitoringStatsAnomaliesResponseS
monitoring_stats (29.google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies
next_page_token (	"v
&GetModelDeploymentMonitoringJobRequestL
name (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJob"�
(ListModelDeploymentMonitoringJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"�
)ListModelDeploymentMonitoringJobsResponseb
 model_deployment_monitoring_jobs (28.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob
next_page_token (	"�
)UpdateModelDeploymentMonitoringJobRequestf
model_deployment_monitoring_job (28.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJobB�A4
update_mask (2.google.protobuf.FieldMaskB�A"y
)DeleteModelDeploymentMonitoringJobRequestL
name (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJob"x
(PauseModelDeploymentMonitoringJobRequestL
name (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJob"y
)ResumeModelDeploymentMonitoringJobRequestL
name (	B>�A�A8
6aiplatform.googleapis.com/ModelDeploymentMonitoringJob"�
3UpdateModelDeploymentMonitoringJobOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata2�?

JobService�
CreateCustomJob2.google.cloud.aiplatform.v1.CreateCustomJobRequest%.google.cloud.aiplatform.v1.CustomJob"V���<"./v1/{parent=projects/*/locations/*}/customJobs:
custom_job�Aparent,custom_job�
GetCustomJob/.google.cloud.aiplatform.v1.GetCustomJobRequest%.google.cloud.aiplatform.v1.CustomJob"=���0./v1/{name=projects/*/locations/*/customJobs/*}�Aname�
ListCustomJobs1.google.cloud.aiplatform.v1.ListCustomJobsRequest2.google.cloud.aiplatform.v1.ListCustomJobsResponse"?���0./v1/{parent=projects/*/locations/*}/customJobs�Aparent�
DeleteCustomJob2.google.cloud.aiplatform.v1.DeleteCustomJobRequest.google.longrunning.Operation"p���0*./v1/{name=projects/*/locations/*/customJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
CancelCustomJob2.google.cloud.aiplatform.v1.CancelCustomJobRequest.google.protobuf.Empty"G���:"5/v1/{name=projects/*/locations/*/customJobs/*}:cancel:*�Aname�
CreateDataLabelingJob8.google.cloud.aiplatform.v1.CreateDataLabelingJobRequest+.google.cloud.aiplatform.v1.DataLabelingJob"j���I"4/v1/{parent=projects/*/locations/*}/dataLabelingJobs:data_labeling_job�Aparent,data_labeling_job�
GetDataLabelingJob5.google.cloud.aiplatform.v1.GetDataLabelingJobRequest+.google.cloud.aiplatform.v1.DataLabelingJob"C���64/v1/{name=projects/*/locations/*/dataLabelingJobs/*}�Aname�
ListDataLabelingJobs7.google.cloud.aiplatform.v1.ListDataLabelingJobsRequest8.google.cloud.aiplatform.v1.ListDataLabelingJobsResponse"E���64/v1/{parent=projects/*/locations/*}/dataLabelingJobs�Aparent�
DeleteDataLabelingJob8.google.cloud.aiplatform.v1.DeleteDataLabelingJobRequest.google.longrunning.Operation"v���6*4/v1/{name=projects/*/locations/*/dataLabelingJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
CancelDataLabelingJob8.google.cloud.aiplatform.v1.CancelDataLabelingJobRequest.google.protobuf.Empty"M���@";/v1/{name=projects/*/locations/*/dataLabelingJobs/*}:cancel:*�Aname�
CreateHyperparameterTuningJob@.google.cloud.aiplatform.v1.CreateHyperparameterTuningJobRequest3.google.cloud.aiplatform.v1.HyperparameterTuningJob"����Y"</v1/{parent=projects/*/locations/*}/hyperparameterTuningJobs:hyperparameter_tuning_job�A parent,hyperparameter_tuning_job�
GetHyperparameterTuningJob=.google.cloud.aiplatform.v1.GetHyperparameterTuningJobRequest3.google.cloud.aiplatform.v1.HyperparameterTuningJob"K���></v1/{name=projects/*/locations/*/hyperparameterTuningJobs/*}�Aname�
ListHyperparameterTuningJobs?.google.cloud.aiplatform.v1.ListHyperparameterTuningJobsRequest@.google.cloud.aiplatform.v1.ListHyperparameterTuningJobsResponse"M���></v1/{parent=projects/*/locations/*}/hyperparameterTuningJobs�Aparent�
DeleteHyperparameterTuningJob@.google.cloud.aiplatform.v1.DeleteHyperparameterTuningJobRequest.google.longrunning.Operation"~���>*</v1/{name=projects/*/locations/*/hyperparameterTuningJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
CancelHyperparameterTuningJob@.google.cloud.aiplatform.v1.CancelHyperparameterTuningJobRequest.google.protobuf.Empty"U���H"C/v1/{name=projects/*/locations/*/hyperparameterTuningJobs/*}:cancel:*�Aname�
CreateNasJob/.google.cloud.aiplatform.v1.CreateNasJobRequest".google.cloud.aiplatform.v1.NasJob"M���6"+/v1/{parent=projects/*/locations/*}/nasJobs:nas_job�Aparent,nas_job�
	GetNasJob,.google.cloud.aiplatform.v1.GetNasJobRequest".google.cloud.aiplatform.v1.NasJob":���-+/v1/{name=projects/*/locations/*/nasJobs/*}�Aname�
ListNasJobs..google.cloud.aiplatform.v1.ListNasJobsRequest/.google.cloud.aiplatform.v1.ListNasJobsResponse"<���-+/v1/{parent=projects/*/locations/*}/nasJobs�Aparent�
DeleteNasJob/.google.cloud.aiplatform.v1.DeleteNasJobRequest.google.longrunning.Operation"m���-*+/v1/{name=projects/*/locations/*/nasJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
CancelNasJob/.google.cloud.aiplatform.v1.CancelNasJobRequest.google.protobuf.Empty"D���7"2/v1/{name=projects/*/locations/*/nasJobs/*}:cancel:*�Aname�
GetNasTrialDetail4.google.cloud.aiplatform.v1.GetNasTrialDetailRequest*.google.cloud.aiplatform.v1.NasTrialDetail"L���?=/v1/{name=projects/*/locations/*/nasJobs/*/nasTrialDetails/*}�Aname�
ListNasTrialDetails6.google.cloud.aiplatform.v1.ListNasTrialDetailsRequest7.google.cloud.aiplatform.v1.ListNasTrialDetailsResponse"N���?=/v1/{parent=projects/*/locations/*/nasJobs/*}/nasTrialDetails�Aparent�
CreateBatchPredictionJob;.google.cloud.aiplatform.v1.CreateBatchPredictionJobRequest..google.cloud.aiplatform.v1.BatchPredictionJob"s���O"7/v1/{parent=projects/*/locations/*}/batchPredictionJobs:batch_prediction_job�Aparent,batch_prediction_job�
GetBatchPredictionJob8.google.cloud.aiplatform.v1.GetBatchPredictionJobRequest..google.cloud.aiplatform.v1.BatchPredictionJob"F���97/v1/{name=projects/*/locations/*/batchPredictionJobs/*}�Aname�
ListBatchPredictionJobs:.google.cloud.aiplatform.v1.ListBatchPredictionJobsRequest;.google.cloud.aiplatform.v1.ListBatchPredictionJobsResponse"H���97/v1/{parent=projects/*/locations/*}/batchPredictionJobs�Aparent�
DeleteBatchPredictionJob;.google.cloud.aiplatform.v1.DeleteBatchPredictionJobRequest.google.longrunning.Operation"y���9*7/v1/{name=projects/*/locations/*/batchPredictionJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
CancelBatchPredictionJob;.google.cloud.aiplatform.v1.CancelBatchPredictionJobRequest.google.protobuf.Empty"P���C">/v1/{name=projects/*/locations/*/batchPredictionJobs/*}:cancel:*�Aname�
"CreateModelDeploymentMonitoringJobE.google.cloud.aiplatform.v1.CreateModelDeploymentMonitoringJobRequest8.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob"����d"A/v1/{parent=projects/*/locations/*}/modelDeploymentMonitoringJobs:model_deployment_monitoring_job�A&parent,model_deployment_monitoring_job�
-SearchModelDeploymentMonitoringStatsAnomaliesP.google.cloud.aiplatform.v1.SearchModelDeploymentMonitoringStatsAnomaliesRequestQ.google.cloud.aiplatform.v1.SearchModelDeploymentMonitoringStatsAnomaliesResponse"�����"�/v1/{model_deployment_monitoring_job=projects/*/locations/*/modelDeploymentMonitoringJobs/*}:searchModelDeploymentMonitoringStatsAnomalies:*�A1model_deployment_monitoring_job,deployed_model_id�
GetModelDeploymentMonitoringJobB.google.cloud.aiplatform.v1.GetModelDeploymentMonitoringJobRequest8.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob"P���CA/v1/{name=projects/*/locations/*/modelDeploymentMonitoringJobs/*}�Aname�
!ListModelDeploymentMonitoringJobsD.google.cloud.aiplatform.v1.ListModelDeploymentMonitoringJobsRequestE.google.cloud.aiplatform.v1.ListModelDeploymentMonitoringJobsResponse"R���CA/v1/{parent=projects/*/locations/*}/modelDeploymentMonitoringJobs�Aparent�
"UpdateModelDeploymentMonitoringJobE.google.cloud.aiplatform.v1.UpdateModelDeploymentMonitoringJobRequest.google.longrunning.Operation"�����2a/v1/{model_deployment_monitoring_job.name=projects/*/locations/*/modelDeploymentMonitoringJobs/*}:model_deployment_monitoring_job�A+model_deployment_monitoring_job,update_mask�AS
ModelDeploymentMonitoringJob3UpdateModelDeploymentMonitoringJobOperationMetadata�
"DeleteModelDeploymentMonitoringJobE.google.cloud.aiplatform.v1.DeleteModelDeploymentMonitoringJobRequest.google.longrunning.Operation"����C*A/v1/{name=projects/*/locations/*/modelDeploymentMonitoringJobs/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
!PauseModelDeploymentMonitoringJobD.google.cloud.aiplatform.v1.PauseModelDeploymentMonitoringJobRequest.google.protobuf.Empty"Y���L"G/v1/{name=projects/*/locations/*/modelDeploymentMonitoringJobs/*}:pause:*�Aname�
"ResumeModelDeploymentMonitoringJobE.google.cloud.aiplatform.v1.ResumeModelDeploymentMonitoringJobRequest.google.protobuf.Empty"Z���M"H/v1/{name=projects/*/locations/*/modelDeploymentMonitoringJobs/*}:resume:*�Aname��Aaiplatform.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
com.google.cloud.aiplatform.v1BJobServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

