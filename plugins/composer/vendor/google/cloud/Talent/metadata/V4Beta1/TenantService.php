<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/tenant_service.proto

namespace GPBMetadata\Google\Cloud\Talent\V4Beta1;

class TenantService
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
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Tenant::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/talent/v4beta1/tenant_service.protogoogle.cloud.talent.v4beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/talent/v4beta1/common.proto(google/cloud/talent/v4beta1/tenant.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
CreateTenantRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project8
tenant (2#.google.cloud.talent.v4beta1.TenantB�A"D
GetTenantRequest0
name (	B"�A�A
jobs.googleapis.com/Tenant"�
UpdateTenantRequest8
tenant (2#.google.cloud.talent.v4beta1.TenantB�A/
update_mask (2.google.protobuf.FieldMask"G
DeleteTenantRequest0
name (	B"�A�A
jobs.googleapis.com/Tenant"�
ListTenantsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project

page_token (	
	page_size ("�
ListTenantsResponse4
tenants (2#.google.cloud.talent.v4beta1.Tenant
next_page_token (	?
metadata (2-.google.cloud.talent.v4beta1.ResponseMetadata2�
TenantService�
CreateTenant0.google.cloud.talent.v4beta1.CreateTenantRequest#.google.cloud.talent.v4beta1.Tenant"?���)"$/v4beta1/{parent=projects/*}/tenants:*�Aparent,tenant�
	GetTenant-.google.cloud.talent.v4beta1.GetTenantRequest#.google.cloud.talent.v4beta1.Tenant"3���&$/v4beta1/{name=projects/*/tenants/*}�Aname�
UpdateTenant0.google.cloud.talent.v4beta1.UpdateTenantRequest#.google.cloud.talent.v4beta1.Tenant"?���02+/v4beta1/{tenant.name=projects/*/tenants/*}:*�Atenant�
DeleteTenant0.google.cloud.talent.v4beta1.DeleteTenantRequest.google.protobuf.Empty"3���&*$/v4beta1/{name=projects/*/tenants/*}�Aname�
ListTenants/.google.cloud.talent.v4beta1.ListTenantsRequest0.google.cloud.talent.v4beta1.ListTenantsResponse"5���&$/v4beta1/{parent=projects/*}/tenants�Aparentl�Ajobs.googleapis.com�AShttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/jobsBv
com.google.cloud.talent.v4beta1BTenantServiceProtoPZ7cloud.google.com/go/talent/apiv4beta1/talentpb;talentpb�CTSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

