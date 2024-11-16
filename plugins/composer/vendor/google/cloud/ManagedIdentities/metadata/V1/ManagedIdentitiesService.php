<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/managed_identities_service.proto

namespace GPBMetadata\Google\Cloud\Managedidentities\V1;

class ManagedIdentitiesService
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
        \GPBMetadata\Google\Cloud\Managedidentities\V1\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�$
Bgoogle/cloud/managedidentities/v1/managed_identities_service.proto!google.cloud.managedidentities.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/managedidentities/v1/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

OpMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
CreateMicrosoftAdDomainRequest?
parent (	B/�A�A)\'managedidentities.googleapis.com/Domain
domain_name (	B�A>
domain (2).google.cloud.managedidentities.v1.DomainB�A"Z
ResetAdminPasswordRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain".
ResetAdminPasswordResponse
password (	"�
ListDomainsRequest?
parent (	B/�A�A)\'managedidentities.googleapis.com/Domain
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"
ListDomainsResponse:
domains (2).google.cloud.managedidentities.v1.Domain
next_page_token (	
unreachable (	"Q
GetDomainRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain"�
UpdateDomainRequest4
update_mask (2.google.protobuf.FieldMaskB�A>
domain (2).google.cloud.managedidentities.v1.DomainB�A"T
DeleteDomainRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain"�
AttachTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain<
trust (2(.google.cloud.managedidentities.v1.TrustB�A"�
ReconfigureTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain
target_domain_name (	B�A$
target_dns_ip_addresses (	B�A"�
DetachTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain<
trust (2(.google.cloud.managedidentities.v1.TrustB�A"�
ValidateTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain<
trust (2(.google.cloud.managedidentities.v1.TrustB�A2�
ManagedIdentitiesService�
CreateMicrosoftAdDomainA.google.cloud.managedidentities.v1.CreateMicrosoftAdDomainRequest.google.longrunning.Operation"s���:"0/v1/{parent=projects/*/locations/global}/domains:domain�Aparent,domain_name,domain�A
Domain
OpMetadata�
ResetAdminPassword<.google.cloud.managedidentities.v1.ResetAdminPasswordRequest=.google.cloud.managedidentities.v1.ResetAdminPasswordResponse"U���H"C/v1/{name=projects/*/locations/global/domains/*}:resetAdminPassword:*�Aname�
ListDomains5.google.cloud.managedidentities.v1.ListDomainsRequest6.google.cloud.managedidentities.v1.ListDomainsResponse"A���20/v1/{parent=projects/*/locations/global}/domains�Aparent�
	GetDomain3.google.cloud.managedidentities.v1.GetDomainRequest).google.cloud.managedidentities.v1.Domain"?���20/v1/{name=projects/*/locations/global/domains/*}�Aname�
UpdateDomain6.google.cloud.managedidentities.v1.UpdateDomainRequest.google.longrunning.Operation"s���A27/v1/{domain.name=projects/*/locations/global/domains/*}:domain�Adomain,update_mask�A
Domain
OpMetadata�
DeleteDomain6.google.cloud.managedidentities.v1.DeleteDomainRequest.google.longrunning.Operation"e���2*0/v1/{name=projects/*/locations/global/domains/*}�Aname�A#
google.protobuf.Empty
OpMetadata�
AttachTrust5.google.cloud.managedidentities.v1.AttachTrustRequest.google.longrunning.Operation"k���A"</v1/{name=projects/*/locations/global/domains/*}:attachTrust:*�A
name,trust�A
Domain
OpMetadata�
ReconfigureTrust:.google.cloud.managedidentities.v1.ReconfigureTrustRequest.google.longrunning.Operation"����F"A/v1/{name=projects/*/locations/global/domains/*}:reconfigureTrust:*�A/name,target_domain_name,target_dns_ip_addresses�A
Domain
OpMetadata�
DetachTrust5.google.cloud.managedidentities.v1.DetachTrustRequest.google.longrunning.Operation"k���A"</v1/{name=projects/*/locations/global/domains/*}:detachTrust:*�A
name,trust�A
Domain
OpMetadata�
ValidateTrust7.google.cloud.managedidentities.v1.ValidateTrustRequest.google.longrunning.Operation"m���C">/v1/{name=projects/*/locations/global/domains/*}:validateTrust:*�A
name,trust�A
Domain
OpMetadataT�A managedidentities.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
%com.google.cloud.managedidentities.v1BManagedIdentitiesServiceProtoPZScloud.google.com/go/managedidentities/apiv1/managedidentitiespb;managedidentitiespb�GCMI�!Google.Cloud.ManagedIdentities.V1�!Google\\Cloud\\ManagedIdentities\\V1�$Google::Cloud::ManagedIdentities::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

