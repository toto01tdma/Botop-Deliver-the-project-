<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class Model
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/cloud/retail/v2/model.protogoogle.cloud.retail.v2google/api/resource.proto#google/cloud/retail/v2/common.protogoogle/protobuf/timestamp.proto"�

Model
name (	B�A
display_name (	B�AH
training_state (2+.google.cloud.retail.v2.Model.TrainingStateB�AF
serving_state (2*.google.cloud.retail.v2.Model.ServingStateB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
type (	B�A#
optimization_objective (	B�AU
periodic_tuning_state (21.google.cloud.retail.v2.Model.PeriodicTuningStateB�A7
last_tune_time (2.google.protobuf.TimestampB�A
tuning_operation (	B�A@

data_state (2\'.google.cloud.retail.v2.Model.DataStateB�AU
filtering_option (26.google.cloud.retail.v2.RecommendationsFilteringOptionB�AR
serving_config_lists (2/.google.cloud.retail.v2.Model.ServingConfigListB�A4
ServingConfigList
serving_config_ids (	B�A"R
ServingState
SERVING_STATE_UNSPECIFIED 
INACTIVE

ACTIVE	
TUNED"I
TrainingState
TRAINING_STATE_UNSPECIFIED 

PAUSED
TRAINING"�
PeriodicTuningState%
!PERIODIC_TUNING_STATE_UNSPECIFIED 
PERIODIC_TUNING_DISABLED
ALL_TUNING_DISABLED
PERIODIC_TUNING_ENABLED"D
	DataState
DATA_STATE_UNSPECIFIED 
DATA_OK

DATA_ERROR:k�Ah
retail.googleapis.com/ModelIprojects/{project}/locations/{location}/catalogs/{catalog}/models/{model}B�
com.google.cloud.retail.v2B
ModelProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

