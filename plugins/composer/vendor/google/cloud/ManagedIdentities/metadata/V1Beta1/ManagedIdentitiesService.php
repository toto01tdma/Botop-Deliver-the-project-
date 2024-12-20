<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace GPBMetadata\Google\Cloud\Managedidentities\V1Beta1;

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
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
Ggoogle/cloud/managedidentities/v1beta1/managed_identities_service.proto&google.cloud.managedidentities.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto5google/cloud/managedidentities/v1beta1/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

OpMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
CreateMicrosoftAdDomainRequest?
parent (	B/�A�A)\'managedidentities.googleapis.com/Domain
domain_name (	B�AC
domain (2..google.cloud.managedidentities.v1beta1.DomainB�A"Z
ResetAdminPasswordRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain".
ResetAdminPasswordResponse
password (	"�
ListDomainsRequest?
parent (	B/�A�A)\'managedidentities.googleapis.com/Domain
	page_size (

page_token (	
filter (	
order_by (	"�
ListDomainsResponse?
domains (2..google.cloud.managedidentities.v1beta1.Domain
next_page_token (	
unreachable (	"Q
GetDomainRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain"�
UpdateDomainRequest4
update_mask (2.google.protobuf.FieldMaskB�AC
domain (2..google.cloud.managedidentities.v1beta1.DomainB�A"T
DeleteDomainRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain"�
AttachTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/DomainA
trust (2-.google.cloud.managedidentities.v1beta1.TrustB�A"�
ReconfigureTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/Domain
target_domain_name (	B�A$
target_dns_ip_addresses (	B�A"�
DetachTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/DomainA
trust (2-.google.cloud.managedidentities.v1beta1.TrustB�A"�
ValidateTrustRequest=
name (	B/�A�A)
\'managedidentities.googleapis.com/DomainA
trust (2-.google.cloud.managedidentities.v1beta1.TrustB�A2�
ManagedIdentitiesService�
CreateMicrosoftAdDomainF.google.cloud.managedidentities.v1beta1.CreateMicrosoftAdDomainRequest.google.longrunning.Operation"x���?"5/v1beta1/{parent=projects/*/locations/global}/domains:domain�Aparent,domain_name,domain�A
Domain
OpMetadata�
ResetAdminPasswordA.google.cloud.managedidentities.v1beta1.ResetAdminPasswordRequestB.google.cloud.managedidentities.v1beta1.ResetAdminPasswordResponse"Z���M"H/v1beta1/{name=projects/*/locations/global/domains/*}:resetAdminPassword:*�Aname�
ListDomains:.google.cloud.managedidentities.v1beta1.ListDomainsRequest;.google.cloud.managedidentities.v1beta1.ListDomainsResponse"F���75/v1beta1/{parent=projects/*/locations/global}/domains�Aparent�
	GetDomain8.google.cloud.managedidentities.v1beta1.GetDomainRequest..google.cloud.managedidentities.v1beta1.Domain"D���75/v1beta1/{name=projects/*/locations/global/domains/*}�Aname�
UpdateDomain;.google.cloud.managedidentities.v1beta1.UpdateDomainRequest.google.longrunning.Operation"x���F2</v1beta1/{domain.name=projects/*/locations/global/domains/*}:domain�Adomain,update_mask�A
Domain
OpMetadata�
DeleteDomain;.google.cloud.managedidentities.v1beta1.DeleteDomainRequest.google.longrunning.Operation"j���7*5/v1beta1/{name=projects/*/locations/global/domains/*}�Aname�A#
google.protobuf.Empty
OpMetadata�
AttachTrust:.google.cloud.managedidentities.v1beta1.AttachTrustRequest.google.longrunning.Operation"p���F"A/v1beta1/{name=projects/*/locations/global/domains/*}:attachTrust:*�A
name,trust�A
Domain
OpMetadata�
ReconfigureTrust?.google.cloud.managedidentities.v1beta1.ReconfigureTrustRequest.google.longrunning.Operation"����K"F/v1beta1/{name=projects/*/locations/global/domains/*}:reconfigureTrust:*�A/name,target_domain_name,target_dns_ip_addresses�A
Domain
OpMetadata�
DetachTrust:.google.cloud.managedidentities.v1beta1.DetachTrustRequest.google.longrunning.Operation"p���F"A/v1beta1/{name=projects/*/locations/global/domains/*}:detachTrust:*�A
name,trust�A
Domain
OpMetadata�
ValidateTrust<.google.cloud.managedidentities.v1beta1.ValidateTrustRequest.google.longrunning.Operation"r���H"C/v1beta1/{name=projects/*/locations/global/domains/*}:validateTrust:*�A
name,trust�A
Domain
OpMetadataT�A managedidentities.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
*com.google.cloud.managedidentities.v1beta1BManagedIdentitiesServiceProtoPZXcloud.google.com/go/managedidentities/apiv1beta1/managedidentitiespb;managedidentitiespb�GCMI�&Google.Cloud.ManagedIdentities.V1Beta1�&Google\\Cloud\\ManagedIdentities\\V1beta1�)Google::Cloud::ManagedIdentities::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

