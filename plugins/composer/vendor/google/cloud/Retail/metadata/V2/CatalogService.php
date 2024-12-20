<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class CatalogService
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
        \GPBMetadata\Google\Cloud\Retail\V2\Catalog::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
,google/cloud/retail/v2/catalog_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto$google/cloud/retail/v2/catalog.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"w
ListCatalogsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"b
ListCatalogsResponse1
catalogs (2.google.cloud.retail.v2.Catalog
next_page_token (	"~
UpdateCatalogRequest5
catalog (2.google.cloud.retail.v2.CatalogB�A/
update_mask (2.google.protobuf.FieldMask"�
SetDefaultBranchRequest3
catalog (	B"�A
retail.googleapis.com/Catalog4
	branch_id (	B!�A
retail.googleapis.com/Branch
note (	
force ("N
GetDefaultBranchRequest3
catalog (	B"�A
retail.googleapis.com/Catalog"�
GetDefaultBranchResponse1
branch (	B!�A
retail.googleapis.com/Branch,
set_time (2.google.protobuf.Timestamp
note (	"Z
GetCompletionConfigRequest<
name (	B.�A�A(
&retail.googleapis.com/CompletionConfig"�
UpdateCompletionConfigRequestH
completion_config (2(.google.cloud.retail.v2.CompletionConfigB�A/
update_mask (2.google.protobuf.FieldMask"Z
GetAttributesConfigRequest<
name (	B.�A�A(
&retail.googleapis.com/AttributesConfig"�
UpdateAttributesConfigRequestH
attributes_config (2(.google.cloud.retail.v2.AttributesConfigB�A/
update_mask (2.google.protobuf.FieldMask"�
AddCatalogAttributeRequestI
attributes_config (	B.�A�A(
&retail.googleapis.com/AttributesConfigH
catalog_attribute (2(.google.cloud.retail.v2.CatalogAttributeB�A"|
RemoveCatalogAttributeRequestI
attributes_config (	B.�A�A(
&retail.googleapis.com/AttributesConfig
key (	B�A"�
ReplaceCatalogAttributeRequestI
attributes_config (	B.�A�A(
&retail.googleapis.com/AttributesConfigH
catalog_attribute (2(.google.cloud.retail.v2.CatalogAttributeB�A/
update_mask (2.google.protobuf.FieldMask2�
CatalogService�
ListCatalogs+.google.cloud.retail.v2.ListCatalogsRequest,.google.cloud.retail.v2.ListCatalogsResponse"=���.,/v2/{parent=projects/*/locations/*}/catalogs�Aparent�
UpdateCatalog,.google.cloud.retail.v2.UpdateCatalogRequest.google.cloud.retail.v2.Catalog"[���?24/v2/{catalog.name=projects/*/locations/*/catalogs/*}:catalog�Acatalog,update_mask�
SetDefaultBranch/.google.cloud.retail.v2.SetDefaultBranchRequest.google.protobuf.Empty"U���E"@/v2/{catalog=projects/*/locations/*/catalogs/*}:setDefaultBranch:*�Acatalog�
GetDefaultBranch/.google.cloud.retail.v2.GetDefaultBranchRequest0.google.cloud.retail.v2.GetDefaultBranchResponse"R���B@/v2/{catalog=projects/*/locations/*/catalogs/*}:getDefaultBranch�Acatalog�
GetCompletionConfig2.google.cloud.retail.v2.GetCompletionConfigRequest(.google.cloud.retail.v2.CompletionConfig"L���?=/v2/{name=projects/*/locations/*/catalogs/*/completionConfig}�Aname�
UpdateCompletionConfig5.google.cloud.retail.v2.UpdateCompletionConfigRequest(.google.cloud.retail.v2.CompletionConfig"����d2O/v2/{completion_config.name=projects/*/locations/*/catalogs/*/completionConfig}:completion_config�Acompletion_config,update_mask�
GetAttributesConfig2.google.cloud.retail.v2.GetAttributesConfigRequest(.google.cloud.retail.v2.AttributesConfig"L���?=/v2/{name=projects/*/locations/*/catalogs/*/attributesConfig}�Aname�
UpdateAttributesConfig5.google.cloud.retail.v2.UpdateAttributesConfigRequest(.google.cloud.retail.v2.AttributesConfig"����d2O/v2/{attributes_config.name=projects/*/locations/*/catalogs/*/attributesConfig}:attributes_config�Aattributes_config,update_mask�
AddCatalogAttribute2.google.cloud.retail.v2.AddCatalogAttributeRequest(.google.cloud.retail.v2.AttributesConfig"i���c"^/v2/{attributes_config=projects/*/locations/*/catalogs/*/attributesConfig}:addCatalogAttribute:*�
RemoveCatalogAttribute5.google.cloud.retail.v2.RemoveCatalogAttributeRequest(.google.cloud.retail.v2.AttributesConfig"l���f"a/v2/{attributes_config=projects/*/locations/*/catalogs/*/attributesConfig}:removeCatalogAttribute:*�
ReplaceCatalogAttribute6.google.cloud.retail.v2.ReplaceCatalogAttributeRequest(.google.cloud.retail.v2.AttributesConfig"m���g"b/v2/{attributes_config=projects/*/locations/*/catalogs/*/attributesConfig}:replaceCatalogAttribute:*I�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BCatalogServiceProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

