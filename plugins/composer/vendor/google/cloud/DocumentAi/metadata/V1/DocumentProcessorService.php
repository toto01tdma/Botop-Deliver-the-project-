<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1;

class DocumentProcessorService
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
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentSchema::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\Evaluation::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\OperationMetadata::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\Processor::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\ProcessorType::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�j
;google/cloud/documentai/v1/document_processor_service.protogoogle.cloud.documentai.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto)google/cloud/documentai/v1/document.proto,google/cloud/documentai/v1/document_io.proto0google/cloud/documentai/v1/document_schema.proto+google/cloud/documentai/v1/evaluation.proto3google/cloud/documentai/v1/operation_metadata.proto*google/cloud/documentai/v1/processor.proto/google/cloud/documentai/v1/processor_type.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ProcessRequest?
inline_document (2$.google.cloud.documentai.v1.DocumentH ?
raw_document (2\'.google.cloud.documentai.v1.RawDocumentH 
name (	B	�A�A
*
skip_human_review (.

field_mask (2.google.protobuf.FieldMaskB
source"�
HumanReviewStatusB
state (23.google.cloud.documentai.v1.HumanReviewStatus.State
state_message (	
human_review_operation (	"^
State
STATE_UNSPECIFIED 
SKIPPED
VALIDATION_PASSED
IN_PROGRESS	
ERROR"�
ProcessResponse6
document (2$.google.cloud.documentai.v1.DocumentJ
human_review_status (2-.google.cloud.documentai.v1.HumanReviewStatus"�
BatchProcessRequest
name (	B	�A�A
*N
input_documents (25.google.cloud.documentai.v1.BatchDocumentsInputConfigP
document_output_config (20.google.cloud.documentai.v1.DocumentOutputConfig
skip_human_review ("
BatchProcessResponse"�
BatchProcessMetadataE
state (26.google.cloud.documentai.v1.BatchProcessMetadata.State
state_message (	/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestampm
individual_process_statuses (2H.google.cloud.documentai.v1.BatchProcessMetadata.IndividualProcessStatus�
IndividualProcessStatus
input_gcs_source (	"
status (2.google.rpc.Status
output_gcs_destination (	J
human_review_status (2-.google.cloud.documentai.v1.HumanReviewStatus"r
State
STATE_UNSPECIFIED 
WAITING
RUNNING
	SUCCEEDED

CANCELLING
	CANCELLED

FAILED"]
FetchProcessorTypesRequest?
parent (	B/�A�A)\'documentai.googleapis.com/ProcessorType"a
FetchProcessorTypesResponseB
processor_types (2).google.cloud.documentai.v1.ProcessorType"�
ListProcessorTypesRequest?
parent (	B/�A�A)\'documentai.googleapis.com/ProcessorType
	page_size (

page_token (	"y
ListProcessorTypesResponseB
processor_types (2).google.cloud.documentai.v1.ProcessorType
next_page_token (	"{
ListProcessorsRequest;
parent (	B+�A�A%#documentai.googleapis.com/Processor
	page_size (

page_token (	"l
ListProcessorsResponse9

processors (2%.google.cloud.documentai.v1.Processor
next_page_token (	"X
GetProcessorTypeRequest=
name (	B/�A�A)
\'documentai.googleapis.com/ProcessorType"P
GetProcessorRequest9
name (	B+�A�A%
#documentai.googleapis.com/Processor"^
GetProcessorVersionRequest@
name (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion"�
ListProcessorVersionsRequestB
parent (	B2�A�A,*documentai.googleapis.com/ProcessorVersion
	page_size (

page_token (	"�
ListProcessorVersionsResponseH
processor_versions (2,.google.cloud.documentai.v1.ProcessorVersion
next_page_token (	"a
DeleteProcessorVersionRequest@
name (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion"n
DeleteProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"a
DeployProcessorVersionRequest@
name (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion" 
DeployProcessorVersionResponse"n
DeployProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"c
UndeployProcessorVersionRequest@
name (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion""
 UndeployProcessorVersionResponse"p
 UndeployProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"�
CreateProcessorRequest;
parent (	B+�A�A%#documentai.googleapis.com/Processor=
	processor (2%.google.cloud.documentai.v1.ProcessorB�A"S
DeleteProcessorRequest9
name (	B+�A�A%
#documentai.googleapis.com/Processor"g
DeleteProcessorMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"S
EnableProcessorRequest9
name (	B+�A�A%
#documentai.googleapis.com/Processor"
EnableProcessorResponse"g
EnableProcessorMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"T
DisableProcessorRequest9
name (	B+�A�A%
#documentai.googleapis.com/Processor"
DisableProcessorResponse"h
DisableProcessorMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"�
!SetDefaultProcessorVersionRequest>
	processor (	B+�A�A%
#documentai.googleapis.com/ProcessorU
default_processor_version (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion"$
"SetDefaultProcessorVersionResponse"r
"SetDefaultProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"�
TrainProcessorVersionRequest;
parent (	B+�A�A%
#documentai.googleapis.com/ProcessorL
processor_version (2,.google.cloud.documentai.v1.ProcessorVersionB�AH
document_schema
 (2*.google.cloud.documentai.v1.DocumentSchemaB�A[

input_data (2B.google.cloud.documentai.v1.TrainProcessorVersionRequest.InputDataB�A#
base_processor_version (	B�A�
	InputDataQ
training_documents (25.google.cloud.documentai.v1.BatchDocumentsInputConfigM
test_documents (25.google.cloud.documentai.v1.BatchDocumentsInputConfig":
TrainProcessorVersionResponse
processor_version (	"�
TrainProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadatap
training_dataset_validation (2K.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidationl
test_dataset_validation (2K.google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation�
DatasetValidation
document_error_count (
dataset_error_count (+
document_errors (2.google.rpc.Status*
dataset_errors (2.google.rpc.Status"�
ReviewDocumentRequest?
inline_document (2$.google.cloud.documentai.v1.DocumentH P
human_review_config (	B3�A�A-
+documentai.googleapis.com/HumanReviewConfig 
enable_schema_validation (L
priority (2:.google.cloud.documentai.v1.ReviewDocumentRequest.PriorityC
document_schema (2*.google.cloud.documentai.v1.DocumentSchema"#
Priority
DEFAULT 

URGENTB
source"�
ReviewDocumentResponse
gcs_destination (	G
state (28.google.cloud.documentai.v1.ReviewDocumentResponse.State
rejection_reason (	";
State
STATE_UNSPECIFIED 
REJECTED
	SUCCEEDED"�
ReviewDocumentOperationMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata
question_id (	"�
EvaluateProcessorVersionRequestM
processor_version (	B2�A�A,
*documentai.googleapis.com/ProcessorVersionX
evaluation_documents (25.google.cloud.documentai.v1.BatchDocumentsInputConfigB�A"p
 EvaluateProcessorVersionMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata"6
 EvaluateProcessorVersionResponse

evaluation (	"R
GetEvaluationRequest:
name (	B,�A�A&
$documentai.googleapis.com/Evaluation"�
ListEvaluationsRequestB
parent (	B2�A�A,
*documentai.googleapis.com/ProcessorVersion
	page_size (

page_token (	"o
ListEvaluationsResponse;
evaluations (2&.google.cloud.documentai.v1.Evaluation
next_page_token (	2�*
DocumentProcessorService�
ProcessDocument*.google.cloud.documentai.v1.ProcessRequest+.google.cloud.documentai.v1.ProcessResponse"�����"6/v1/{name=projects/*/locations/*/processors/*}:process:*ZO"J/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}:process:*�Aname�
BatchProcessDocuments/.google.cloud.documentai.v1.BatchProcessRequest.google.longrunning.Operation"�����";/v1/{name=projects/*/locations/*/processors/*}:batchProcess:*ZT"O/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}:batchProcess:*�Aname�A,
BatchProcessResponseBatchProcessMetadata�
FetchProcessorTypes6.google.cloud.documentai.v1.FetchProcessorTypesRequest7.google.cloud.documentai.v1.FetchProcessorTypesResponse"H���97/v1/{parent=projects/*/locations/*}:fetchProcessorTypes�Aparent�
ListProcessorTypes5.google.cloud.documentai.v1.ListProcessorTypesRequest6.google.cloud.documentai.v1.ListProcessorTypesResponse"C���42/v1/{parent=projects/*/locations/*}/processorTypes�Aparent�
GetProcessorType3.google.cloud.documentai.v1.GetProcessorTypeRequest).google.cloud.documentai.v1.ProcessorType"A���42/v1/{name=projects/*/locations/*/processorTypes/*}�Aname�
ListProcessors1.google.cloud.documentai.v1.ListProcessorsRequest2.google.cloud.documentai.v1.ListProcessorsResponse"?���0./v1/{parent=projects/*/locations/*}/processors�Aparent�
GetProcessor/.google.cloud.documentai.v1.GetProcessorRequest%.google.cloud.documentai.v1.Processor"=���0./v1/{name=projects/*/locations/*/processors/*}�Aname�
TrainProcessorVersion8.google.cloud.documentai.v1.TrainProcessorVersionRequest.google.longrunning.Operation"����M"H/v1/{parent=projects/*/locations/*/processors/*}/processorVersions:train:*�Aparent,processor_version�A>
TrainProcessorVersionResponseTrainProcessorVersionMetadata�
GetProcessorVersion6.google.cloud.documentai.v1.GetProcessorVersionRequest,.google.cloud.documentai.v1.ProcessorVersion"Q���DB/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}�Aname�
ListProcessorVersions8.google.cloud.documentai.v1.ListProcessorVersionsRequest9.google.cloud.documentai.v1.ListProcessorVersionsResponse"S���DB/v1/{parent=projects/*/locations/*/processors/*}/processorVersions�Aparent�
DeleteProcessorVersion9.google.cloud.documentai.v1.DeleteProcessorVersionRequest.google.longrunning.Operation"����D*B/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}�Aname�A7
google.protobuf.EmptyDeleteProcessorVersionMetadata�
DeployProcessorVersion9.google.cloud.documentai.v1.DeployProcessorVersionRequest.google.longrunning.Operation"����N"I/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}:deploy:*�Aname�A@
DeployProcessorVersionResponseDeployProcessorVersionMetadata�
UndeployProcessorVersion;.google.cloud.documentai.v1.UndeployProcessorVersionRequest.google.longrunning.Operation"����P"K/v1/{name=projects/*/locations/*/processors/*/processorVersions/*}:undeploy:*�Aname�AD
 UndeployProcessorVersionResponse UndeployProcessorVersionMetadata�
CreateProcessor2.google.cloud.documentai.v1.CreateProcessorRequest%.google.cloud.documentai.v1.Processor"T���;"./v1/{parent=projects/*/locations/*}/processors:	processor�Aparent,processor�
DeleteProcessor2.google.cloud.documentai.v1.DeleteProcessorRequest.google.longrunning.Operation"p���0*./v1/{name=projects/*/locations/*/processors/*}�Aname�A0
google.protobuf.EmptyDeleteProcessorMetadata�
EnableProcessor2.google.cloud.documentai.v1.EnableProcessorRequest.google.longrunning.Operation"u���:"5/v1/{name=projects/*/locations/*/processors/*}:enable:*�A2
EnableProcessorResponseEnableProcessorMetadata�
DisableProcessor3.google.cloud.documentai.v1.DisableProcessorRequest.google.longrunning.Operation"x���;"6/v1/{name=projects/*/locations/*/processors/*}:disable:*�A4
DisableProcessorResponseDisableProcessorMetadata�
SetDefaultProcessorVersion=.google.cloud.documentai.v1.SetDefaultProcessorVersionRequest.google.longrunning.Operation"����S"N/v1/{processor=projects/*/locations/*/processors/*}:setDefaultProcessorVersion:*�AH
"SetDefaultProcessorVersionResponse"SetDefaultProcessorVersionMetadata�
ReviewDocument1.google.cloud.documentai.v1.ReviewDocumentRequest.google.longrunning.Operation"����c"^/v1/{human_review_config=projects/*/locations/*/processors/*/humanReviewConfig}:reviewDocument:*�Ahuman_review_config�A9
ReviewDocumentResponseReviewDocumentOperationMetadata�
EvaluateProcessorVersion;.google.cloud.documentai.v1.EvaluateProcessorVersionRequest.google.longrunning.Operation"����m"h/v1/{processor_version=projects/*/locations/*/processors/*/processorVersions/*}:evaluateProcessorVersion:*�Aprocessor_version�AD
 EvaluateProcessorVersionResponse EvaluateProcessorVersionMetadata�
GetEvaluation0.google.cloud.documentai.v1.GetEvaluationRequest&.google.cloud.documentai.v1.Evaluation"_���RP/v1/{name=projects/*/locations/*/processors/*/processorVersions/*/evaluations/*}�Aname�
ListEvaluations2.google.cloud.documentai.v1.ListEvaluationsRequest3.google.cloud.documentai.v1.ListEvaluationsResponse"a���RP/v1/{parent=projects/*/locations/*/processors/*/processorVersions/*}/evaluations�AparentM�Adocumentai.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.documentai.v1BDocumentAiProcessorServicePZ>cloud.google.com/go/documentai/apiv1/documentaipb;documentaipb�Google.Cloud.DocumentAI.V1�Google\\Cloud\\DocumentAI\\V1�Google::Cloud::DocumentAI::V1�A
+documentai.googleapis.com/HumanReviewConfigPprojects/{project}/locations/{location}/processors/{processor}/humanReviewConfig�AM
"documentai.googleapis.com/Location\'projects/{project}/locations/{location}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

