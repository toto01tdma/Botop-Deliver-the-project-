<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class ModelService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluatedAnnotation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelEvaluation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelEvaluationSlice::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�F
.google/cloud/aiplatform/v1/model_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto5google/cloud/aiplatform/v1/evaluated_annotation.proto#google/cloud/aiplatform/v1/io.proto&google/cloud/aiplatform/v1/model.proto1google/cloud/aiplatform/v1/model_evaluation.proto7google/cloud/aiplatform/v1/model_evaluation_slice.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
UploadModelRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
parent_model (	B�A
model_id (	B�A5
model (2!.google.cloud.aiplatform.v1.ModelB�A
service_account (	B�A"n
UploadModelOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"i
UploadModelResponse3
model (	B$�A!
aiplatform.googleapis.com/Model
model_version_id (	B�A"H
GetModelRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Model"�
ListModelsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"`
ListModelsResponse1
models (2!.google.cloud.aiplatform.v1.Model
next_page_token (	"�
ListModelVersionsRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Model
	page_size (

page_token (	
filter (	-
	read_mask (2.google.protobuf.FieldMask
order_by (	"g
ListModelVersionsResponse1
models (2!.google.cloud.aiplatform.v1.Model
next_page_token (	"�
UpdateModelRequest5
model (2!.google.cloud.aiplatform.v1.ModelB�A4
update_mask (2.google.protobuf.FieldMaskB�A"K
DeleteModelRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Model"R
DeleteModelVersionRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Model"q
MergeVersionAliasesRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/Model
version_aliases (	B�A"�
ExportModelRequest5
name (	B\'�A�A!
aiplatform.googleapis.com/ModelW
output_config (2;.google.cloud.aiplatform.v1.ExportModelRequest.OutputConfigB�A�
OutputConfig
export_format_id (	H
artifact_destination (2*.google.cloud.aiplatform.v1.GcsDestinationS
image_destination (28.google.cloud.aiplatform.v1.ContainerRegistryDestination"�
ExportModelOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata]
output_info (2C.google.cloud.aiplatform.v1.ExportModelOperationMetadata.OutputInfoB�AM

OutputInfo 
artifact_output_uri (	B�A
image_output_uri (	B�A"
ExportModelResponse"�
CopyModelRequest
model_id (	B�AH ?
parent_model (	B\'�A�A!
aiplatform.googleapis.com/ModelH 9
parent (	B)�A�A#
!locations.googleapis.com/Location=
source_model (	B\'�A�A!
aiplatform.googleapis.com/ModelC
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpecB
destination_model"l
CopyModelOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"g
CopyModelResponse3
model (	B$�A!
aiplatform.googleapis.com/Model
model_version_id (	B�A"�
ImportModelEvaluationRequest7
parent (	B\'�A�A!
aiplatform.googleapis.com/ModelJ
model_evaluation (2+.google.cloud.aiplatform.v1.ModelEvaluationB�A"�
\'BatchImportModelEvaluationSlicesRequestA
parent (	B1�A�A+
)aiplatform.googleapis.com/ModelEvaluationV
model_evaluation_slices (20.google.cloud.aiplatform.v1.ModelEvaluationSliceB�A"Y
(BatchImportModelEvaluationSlicesResponse-
 imported_model_evaluation_slices (	B�A"�
&BatchImportEvaluatedAnnotationsRequestF
parent (	B6�A�A0
.aiplatform.googleapis.com/ModelEvaluationSliceS
evaluated_annotations (2/.google.cloud.aiplatform.v1.EvaluatedAnnotationB�A"\\
\'BatchImportEvaluatedAnnotationsResponse1
$imported_evaluated_annotations_count (B�A"\\
GetModelEvaluationRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/ModelEvaluation"�
ListModelEvaluationsRequest7
parent (	B\'�A�A!
aiplatform.googleapis.com/Model
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"
ListModelEvaluationsResponseF
model_evaluations (2+.google.cloud.aiplatform.v1.ModelEvaluation
next_page_token (	"f
GetModelEvaluationSliceRequestD
name (	B6�A�A0
.aiplatform.googleapis.com/ModelEvaluationSlice"�
 ListModelEvaluationSlicesRequestA
parent (	B1�A�A+
)aiplatform.googleapis.com/ModelEvaluation
filter (	
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"�
!ListModelEvaluationSlicesResponseQ
model_evaluation_slices (20.google.cloud.aiplatform.v1.ModelEvaluationSlice
next_page_token (	2�
ModelService�
UploadModel..google.cloud.aiplatform.v1.UploadModelRequest.google.longrunning.Operation"����6"1/v1/{parent=projects/*/locations/*}/models:upload:*�Aparent,model�A3
UploadModelResponseUploadModelOperationMetadata�
GetModel+.google.cloud.aiplatform.v1.GetModelRequest!.google.cloud.aiplatform.v1.Model"9���,*/v1/{name=projects/*/locations/*/models/*}�Aname�

ListModels-.google.cloud.aiplatform.v1.ListModelsRequest..google.cloud.aiplatform.v1.ListModelsResponse";���,*/v1/{parent=projects/*/locations/*}/models�Aparent�
ListModelVersions4.google.cloud.aiplatform.v1.ListModelVersionsRequest5.google.cloud.aiplatform.v1.ListModelVersionsResponse"F���97/v1/{name=projects/*/locations/*/models/*}:listVersions�Aname�
UpdateModel..google.cloud.aiplatform.v1.UpdateModelRequest!.google.cloud.aiplatform.v1.Model"S���920/v1/{model.name=projects/*/locations/*/models/*}:model�Amodel,update_mask�
DeleteModel..google.cloud.aiplatform.v1.DeleteModelRequest.google.longrunning.Operation"l���,**/v1/{name=projects/*/locations/*/models/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
DeleteModelVersion5.google.cloud.aiplatform.v1.DeleteModelVersionRequest.google.longrunning.Operation"z���:*8/v1/{name=projects/*/locations/*/models/*}:deleteVersion�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
MergeVersionAliases6.google.cloud.aiplatform.v1.MergeVersionAliasesRequest!.google.cloud.aiplatform.v1.Model"`���C">/v1/{name=projects/*/locations/*/models/*}:mergeVersionAliases:*�Aname,version_aliases�
ExportModel..google.cloud.aiplatform.v1.ExportModelRequest.google.longrunning.Operation"����6"1/v1/{name=projects/*/locations/*/models/*}:export:*�Aname,output_config�A3
ExportModelResponseExportModelOperationMetadata�
	CopyModel,.google.cloud.aiplatform.v1.CopyModelRequest.google.longrunning.Operation"����4"//v1/{parent=projects/*/locations/*}/models:copy:*�Aparent,source_model�A/
CopyModelResponseCopyModelOperationMetadata�
ImportModelEvaluation8.google.cloud.aiplatform.v1.ImportModelEvaluationRequest+.google.cloud.aiplatform.v1.ModelEvaluation"d���D"?/v1/{parent=projects/*/locations/*/models/*}/evaluations:import:*�Aparent,model_evaluation�
 BatchImportModelEvaluationSlicesC.google.cloud.aiplatform.v1.BatchImportModelEvaluationSlicesRequestD.google.cloud.aiplatform.v1.BatchImportModelEvaluationSlicesResponse"y���R"M/v1/{parent=projects/*/locations/*/models/*/evaluations/*}/slices:batchImport:*�Aparent,model_evaluation_slices�
BatchImportEvaluatedAnnotationsB.google.cloud.aiplatform.v1.BatchImportEvaluatedAnnotationsRequestC.google.cloud.aiplatform.v1.BatchImportEvaluatedAnnotationsResponse"y���T"O/v1/{parent=projects/*/locations/*/models/*/evaluations/*/slices/*}:batchImport:*�Aparent,evaluated_annotations�
GetModelEvaluation5.google.cloud.aiplatform.v1.GetModelEvaluationRequest+.google.cloud.aiplatform.v1.ModelEvaluation"G���:8/v1/{name=projects/*/locations/*/models/*/evaluations/*}�Aname�
ListModelEvaluations7.google.cloud.aiplatform.v1.ListModelEvaluationsRequest8.google.cloud.aiplatform.v1.ListModelEvaluationsResponse"I���:8/v1/{parent=projects/*/locations/*/models/*}/evaluations�Aparent�
GetModelEvaluationSlice:.google.cloud.aiplatform.v1.GetModelEvaluationSliceRequest0.google.cloud.aiplatform.v1.ModelEvaluationSlice"P���CA/v1/{name=projects/*/locations/*/models/*/evaluations/*/slices/*}�Aname�
ListModelEvaluationSlices<.google.cloud.aiplatform.v1.ListModelEvaluationSlicesRequest=.google.cloud.aiplatform.v1.ListModelEvaluationSlicesResponse"R���CA/v1/{parent=projects/*/locations/*/models/*/evaluations/*}/slices�AparentM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BModelServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

