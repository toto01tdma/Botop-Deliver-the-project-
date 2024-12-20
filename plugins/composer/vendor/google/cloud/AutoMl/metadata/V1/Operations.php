<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/operations.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1\Io::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/cloud/automl/v1/operations.protogoogle.cloud.automl.v1google/protobuf/timestamp.protogoogle/rpc/status.proto"�
OperationMetadataI
delete_details (2/.google.cloud.automl.v1.DeleteOperationMetadataH T
deploy_model_details (24.google.cloud.automl.v1.DeployModelOperationMetadataH X
undeploy_model_details (26.google.cloud.automl.v1.UndeployModelOperationMetadataH T
create_model_details
 (24.google.cloud.automl.v1.CreateModelOperationMetadataH X
create_dataset_details (26.google.cloud.automl.v1.CreateDatasetOperationMetadataH R
import_data_details (23.google.cloud.automl.v1.ImportDataOperationMetadataH V
batch_predict_details (25.google.cloud.automl.v1.BatchPredictOperationMetadataH R
export_data_details (23.google.cloud.automl.v1.ExportDataOperationMetadataH T
export_model_details (24.google.cloud.automl.v1.ExportModelOperationMetadataH 
progress_percent (,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.TimestampB	
details"
DeleteOperationMetadata"
DeployModelOperationMetadata" 
UndeployModelOperationMetadata" 
CreateDatasetOperationMetadata"
CreateModelOperationMetadata"
ImportDataOperationMetadata"�
ExportDataOperationMetadata]
output_info (2H.google.cloud.automl.v1.ExportDataOperationMetadata.ExportDataOutputInfoI
ExportDataOutputInfo
gcs_output_directory (	H B
output_location"�
BatchPredictOperationMetadataE
input_config (2/.google.cloud.automl.v1.BatchPredictInputConfiga
output_info (2L.google.cloud.automl.v1.BatchPredictOperationMetadata.BatchPredictOutputInfoK
BatchPredictOutputInfo
gcs_output_directory (	H B
output_location"�
ExportModelOperationMetadata_
output_info (2J.google.cloud.automl.v1.ExportModelOperationMetadata.ExportModelOutputInfo5
ExportModelOutputInfo
gcs_output_directory (	B�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

