<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Policytagmanager
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
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Timestamps::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�,
2google/cloud/datacatalog/v1/policytagmanager.protogoogle.cloud.datacatalog.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/datacatalog/v1/common.proto,google/cloud/datacatalog/v1/timestamps.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
Taxonomy
name (	B�A
display_name (	B�A
description (	B�A
policy_tag_count (B�AO
taxonomy_timestamps (2-.google.cloud.datacatalog.v1.SystemTimestampsB�AU
activated_policy_types (20.google.cloud.datacatalog.v1.Taxonomy.PolicyTypeB�AC
service (2-.google.cloud.datacatalog.v1.Taxonomy.ServiceB�AV
Service9
name (2+.google.cloud.datacatalog.v1.ManagingSystem
identity (	"J

PolicyType
POLICY_TYPE_UNSPECIFIED 
FINE_GRAINED_ACCESS_CONTROL:g�Ad
#datacatalog.googleapis.com/Taxonomy=projects/{project}/locations/{location}/taxonomies/{taxonomy}"�
	PolicyTag
name (	B�A
display_name (	B�A
description (	
parent_policy_tag (	
child_policy_tags (	B�A:��A}
$datacatalog.googleapis.com/PolicyTagUprojects/{project}/locations/{location}/taxonomies/{taxonomy}/policyTags/{policy_tag}"�
CreateTaxonomyRequest;
parent (	B+�A�A%#datacatalog.googleapis.com/Taxonomy7
taxonomy (2%.google.cloud.datacatalog.v1.Taxonomy"R
DeleteTaxonomyRequest9
name (	B+�A�A%
#datacatalog.googleapis.com/Taxonomy"�
UpdateTaxonomyRequest7
taxonomy (2%.google.cloud.datacatalog.v1.Taxonomy/
update_mask (2.google.protobuf.FieldMask"�
ListTaxonomiesRequest;
parent (	B+�A�A%#datacatalog.googleapis.com/Taxonomy
	page_size (

page_token (	
filter (	"l
ListTaxonomiesResponse9

taxonomies (2%.google.cloud.datacatalog.v1.Taxonomy
next_page_token (	"O
GetTaxonomyRequest9
name (	B+�A�A%
#datacatalog.googleapis.com/Taxonomy"�
CreatePolicyTagRequest<
parent (	B,�A�A&$datacatalog.googleapis.com/PolicyTag:

policy_tag (2&.google.cloud.datacatalog.v1.PolicyTag"T
DeletePolicyTagRequest:
name (	B,�A�A&
$datacatalog.googleapis.com/PolicyTag"�
UpdatePolicyTagRequest:

policy_tag (2&.google.cloud.datacatalog.v1.PolicyTag/
update_mask (2.google.protobuf.FieldMask"|
ListPolicyTagsRequest<
parent (	B,�A�A&$datacatalog.googleapis.com/PolicyTag
	page_size (

page_token (	"n
ListPolicyTagsResponse;
policy_tags (2&.google.cloud.datacatalog.v1.PolicyTag
next_page_token (	"Q
GetPolicyTagRequest:
name (	B,�A�A&
$datacatalog.googleapis.com/PolicyTag2�
PolicyTagManager�
CreateTaxonomy2.google.cloud.datacatalog.v1.CreateTaxonomyRequest%.google.cloud.datacatalog.v1.Taxonomy"R���:"./v1/{parent=projects/*/locations/*}/taxonomies:taxonomy�Aparent,taxonomy�
DeleteTaxonomy2.google.cloud.datacatalog.v1.DeleteTaxonomyRequest.google.protobuf.Empty"=���0*./v1/{name=projects/*/locations/*/taxonomies/*}�Aname�
UpdateTaxonomy2.google.cloud.datacatalog.v1.UpdateTaxonomyRequest%.google.cloud.datacatalog.v1.Taxonomy"T���C27/v1/{taxonomy.name=projects/*/locations/*/taxonomies/*}:taxonomy�Ataxonomy�
ListTaxonomies2.google.cloud.datacatalog.v1.ListTaxonomiesRequest3.google.cloud.datacatalog.v1.ListTaxonomiesResponse"?���0./v1/{parent=projects/*/locations/*}/taxonomies�Aparent�
GetTaxonomy/.google.cloud.datacatalog.v1.GetTaxonomyRequest%.google.cloud.datacatalog.v1.Taxonomy"=���0./v1/{name=projects/*/locations/*/taxonomies/*}�Aname�
CreatePolicyTag3.google.cloud.datacatalog.v1.CreatePolicyTagRequest&.google.cloud.datacatalog.v1.PolicyTag"c���I";/v1/{parent=projects/*/locations/*/taxonomies/*}/policyTags:
policy_tag�Aparent,policy_tag�
DeletePolicyTag3.google.cloud.datacatalog.v1.DeletePolicyTagRequest.google.protobuf.Empty"J���=*;/v1/{name=projects/*/locations/*/taxonomies/*/policyTags/*}�Aname�
UpdatePolicyTag3.google.cloud.datacatalog.v1.UpdatePolicyTagRequest&.google.cloud.datacatalog.v1.PolicyTag"g���T2F/v1/{policy_tag.name=projects/*/locations/*/taxonomies/*/policyTags/*}:
policy_tag�A
policy_tag�
ListPolicyTags2.google.cloud.datacatalog.v1.ListPolicyTagsRequest3.google.cloud.datacatalog.v1.ListPolicyTagsResponse"L���=;/v1/{parent=projects/*/locations/*/taxonomies/*}/policyTags�Aparent�
GetPolicyTag0.google.cloud.datacatalog.v1.GetPolicyTagRequest&.google.cloud.datacatalog.v1.PolicyTag"J���=;/v1/{name=projects/*/locations/*/taxonomies/*/policyTags/*}�Aname�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"�����"?/v1/{resource=projects/*/locations/*/taxonomies/*}:getIamPolicy:*ZQ"L/v1/{resource=projects/*/locations/*/taxonomies/*/policyTags/*}:getIamPolicy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"�����"?/v1/{resource=projects/*/locations/*/taxonomies/*}:setIamPolicy:*ZQ"L/v1/{resource=projects/*/locations/*/taxonomies/*/policyTags/*}:setIamPolicy:*�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"�����"E/v1/{resource=projects/*/locations/*/taxonomies/*}:testIamPermissions:*ZW"R/v1/{resource=projects/*/locations/*/taxonomies/*/policyTags/*}:testIamPermissions:*N�Adatacatalog.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.datacatalog.v1BPolicyTagManagerProtoPZAcloud.google.com/go/datacatalog/apiv1/datacatalogpb;datacatalogpb��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

