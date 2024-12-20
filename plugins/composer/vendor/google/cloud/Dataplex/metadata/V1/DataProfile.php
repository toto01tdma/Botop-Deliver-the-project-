<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class DataProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Dataplex\V1\Processing::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/dataplex/v1/data_profile.protogoogle.cloud.dataplex.v1)google/cloud/dataplex/v1/processing.proto"
DataProfileSpec"�	
DataProfileResult
	row_count (D
profile (23.google.cloud.dataplex.v1.DataProfileResult.Profile;
scanned_data (2%.google.cloud.dataplex.v1.ScannedData�
ProfileI
fields (29.google.cloud.dataplex.v1.DataProfileResult.Profile.Field�
Field
name (	
type (	
mode (	V
profile (2E.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo�
ProfileInfo

null_ratio (
distinct_ratio (e
top_n_values (2O.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.TopNValueo
string_profilee (2U.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.StringFieldInfoH q
integer_profilef (2V.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.IntegerFieldInfoH o
double_profileg (2U.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.DoubleFieldInfoH Q
StringFieldInfo

min_length (

max_length (
average_length (l
IntegerFieldInfo
average (
standard_deviation (
min (
	quartiles (
max (k
DoubleFieldInfo
average (
standard_deviation (
min (
	quartiles (
max ()
	TopNValue
value (	
count (B

field_infoBl
com.google.cloud.dataplex.v1BDataProfileProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

