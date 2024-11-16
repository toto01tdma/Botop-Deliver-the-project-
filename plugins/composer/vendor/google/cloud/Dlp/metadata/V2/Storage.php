<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�*
#google/privacy/dlp/v2/storage.protogoogle.privacy.dlp.v2google/protobuf/timestamp.proto")
InfoType
name (	
version (	"�
SensitivityScoreL
score (2=.google.privacy.dlp.v2.SensitivityScore.SensitivityScoreLevel"
SensitivityScoreLevel!
SENSITIVITY_SCORE_UNSPECIFIED 
SENSITIVITY_LOW

SENSITIVITY_MODERATE
SENSITIVITY_HIGH"K

StoredType
name (	/
create_time (2.google.protobuf.Timestamp"�
CustomInfoType2
	info_type (2.google.privacy.dlp.v2.InfoType5

likelihood (2!.google.privacy.dlp.v2.LikelihoodF

dictionary (20.google.privacy.dlp.v2.CustomInfoType.DictionaryH <
regex (2+.google.privacy.dlp.v2.CustomInfoType.RegexH M
surrogate_type (23.google.privacy.dlp.v2.CustomInfoType.SurrogateTypeH 8
stored_type (2!.google.privacy.dlp.v2.StoredTypeH L
detection_rules (23.google.privacy.dlp.v2.CustomInfoType.DetectionRuleK
exclusion_type (23.google.privacy.dlp.v2.CustomInfoType.ExclusionType�

DictionaryN
	word_list (29.google.privacy.dlp.v2.CustomInfoType.Dictionary.WordListH E
cloud_storage_path (2\'.google.privacy.dlp.v2.CloudStoragePathH 
WordList
words (	B
source/
Regex
pattern (	
group_indexes (
SurrogateType�
DetectionRuleW
hotword_rule (2?.google.privacy.dlp.v2.CustomInfoType.DetectionRule.HotwordRuleH 8
	Proximity
window_before (
window_after (�
LikelihoodAdjustment=
fixed_likelihood (2!.google.privacy.dlp.v2.LikelihoodH 
relative_likelihood (H B

adjustment�
HotwordRuleB
hotword_regex (2+.google.privacy.dlp.v2.CustomInfoType.RegexP
	proximity (2=.google.privacy.dlp.v2.CustomInfoType.DetectionRule.Proximityg
likelihood_adjustment (2H.google.privacy.dlp.v2.CustomInfoType.DetectionRule.LikelihoodAdjustmentB
type"K
ExclusionType
EXCLUSION_TYPE_UNSPECIFIED 
EXCLUSION_TYPE_EXCLUDEB
type"
FieldId
name (	"7
PartitionId

project_id (	
namespace_id (	"
KindExpression
name (	"�
DatastoreOptions8
partition_id (2".google.privacy.dlp.v2.PartitionId3
kind (2%.google.privacy.dlp.v2.KindExpression"]
CloudStorageRegexFileSet
bucket_name (	
include_regex (	
exclude_regex (	"�
CloudStorageOptionsD
file_set (22.google.privacy.dlp.v2.CloudStorageOptions.FileSet
bytes_limit_per_file ($
bytes_limit_per_file_percent (3

file_types (2.google.privacy.dlp.v2.FileTypeN
sample_method (27.google.privacy.dlp.v2.CloudStorageOptions.SampleMethod
files_limit_percent (_
FileSet
url (	G
regex_file_set (2/.google.privacy.dlp.v2.CloudStorageRegexFileSet"H
SampleMethod
SAMPLE_METHOD_UNSPECIFIED 
TOP
RANDOM_START""
CloudStorageFileSet
url (	" 
CloudStoragePath
path (	"�
BigQueryOptions=
table_reference (2$.google.privacy.dlp.v2.BigQueryTable:
identifying_fields (2.google.privacy.dlp.v2.FieldId

rows_limit (
rows_limit_percent (J
sample_method (23.google.privacy.dlp.v2.BigQueryOptions.SampleMethod7
excluded_fields (2.google.privacy.dlp.v2.FieldId7
included_fields (2.google.privacy.dlp.v2.FieldId"H
SampleMethod
SAMPLE_METHOD_UNSPECIFIED 
TOP
RANDOM_START"�
StorageConfigD
datastore_options (2\'.google.privacy.dlp.v2.DatastoreOptionsH K
cloud_storage_options (2*.google.privacy.dlp.v2.CloudStorageOptionsH C
big_query_options (2&.google.privacy.dlp.v2.BigQueryOptionsH >
hybrid_options	 (2$.google.privacy.dlp.v2.HybridOptionsH L
timespan_config (23.google.privacy.dlp.v2.StorageConfig.TimespanConfig�
TimespanConfig.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp7
timestamp_field (2.google.privacy.dlp.v2.FieldId1
)enable_auto_population_of_timespan_config (B
type"�
HybridOptions
description (	#
required_finding_label_keys (	@
labels (20.google.privacy.dlp.v2.HybridOptions.LabelsEntry:
table_options (2#.google.privacy.dlp.v2.TableOptions-
LabelsEntry
key (	
value (	:8"`
BigQueryKey=
table_reference (2$.google.privacy.dlp.v2.BigQueryTable

row_number (">
DatastoreKey.

entity_key (2.google.privacy.dlp.v2.Key"�
Key8
partition_id (2".google.privacy.dlp.v2.PartitionId4
path (2&.google.privacy.dlp.v2.Key.PathElementD
PathElement
kind (	
id (H 
name (	H B	
id_type"�
	RecordKey<
datastore_key (2#.google.privacy.dlp.v2.DatastoreKeyH ;
big_query_key (2".google.privacy.dlp.v2.BigQueryKeyH 
	id_values (	B
type"I
BigQueryTable

project_id (	

dataset_id (	
table_id (	"s
BigQueryField3
table (2$.google.privacy.dlp.v2.BigQueryTable-
field (2.google.privacy.dlp.v2.FieldId"9
EntityId-
field (2.google.privacy.dlp.v2.FieldId"J
TableOptions:
identifying_fields (2.google.privacy.dlp.v2.FieldId*t

Likelihood
LIKELIHOOD_UNSPECIFIED 
VERY_UNLIKELY
UNLIKELY
POSSIBLE

LIKELY
VERY_LIKELY*�
FileType
FILE_TYPE_UNSPECIFIED 
BINARY_FILE
	TEXT_FILE	
IMAGE
WORD
PDF
AVRO
CSV
TSV	

POWERPOINT	
EXCELB�
com.google.privacy.dlp.v2B
DlpStoragePZ)cloud.google.com/go/dlp/apiv2/dlppb;dlppb�Google.Cloud.Dlp.V2�Google\\Cloud\\Dlp\\V2�Google::Cloud::Dlp::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

