<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace GPBMetadata\Google\Cloud\Domains\V1Alpha2;

class Domains
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        $pool->internalAddGeneratedFile(
            '
�^
+google/cloud/domains/v1alpha2/domains.protogoogle.cloud.domains.v1alpha2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/money.proto google/type/postal_address.proto"�	
Registration
name (	B�A
domain_name (	B�A�A4
create_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�AE
state (21.google.cloud.domains.v1alpha2.Registration.StateB�AF
issues (21.google.cloud.domains.v1alpha2.Registration.IssueB�AG
labels	 (27.google.cloud.domains.v1alpha2.Registration.LabelsEntryN
management_settings
 (21.google.cloud.domains.v1alpha2.ManagementSettings@
dns_settings (2*.google.cloud.domains.v1alpha2.DnsSettingsM
contact_settings (2..google.cloud.domains.v1alpha2.ContactSettingsB�AU
pending_contact_settings (2..google.cloud.domains.v1alpha2.ContactSettingsB�AM
supported_privacy (2-.google.cloud.domains.v1alpha2.ContactPrivacyB�A-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
REGISTRATION_PENDING
REGISTRATION_FAILED
TRANSFER_PENDING
TRANSFER_FAILED

ACTIVE
	SUSPENDED
EXPORTED"I
Issue
ISSUE_UNSPECIFIED 
CONTACT_SUPPORT
UNVERIFIED_EMAIL:n�Ak
#domains.googleapis.com/RegistrationDprojects/{project}/locations/{location}/registrations/{registration}"�
ManagementSettings\\
renewal_method (2?.google.cloud.domains.v1alpha2.ManagementSettings.RenewalMethodB�AM
transfer_lock_state (20.google.cloud.domains.v1alpha2.TransferLockState"Z
RenewalMethod
RENEWAL_METHOD_UNSPECIFIED 
AUTOMATIC_RENEWAL
MANUAL_RENEWAL"�

DnsSettingsJ

custom_dns (24.google.cloud.domains.v1alpha2.DnsSettings.CustomDnsH Y
google_domains_dns (2;.google.cloud.domains.v1alpha2.DnsSettings.GoogleDomainsDnsH K
glue_records (25.google.cloud.domains.v1alpha2.DnsSettings.GlueRecordo
	CustomDns
name_servers (	B�AG

ds_records (23.google.cloud.domains.v1alpha2.DnsSettings.DsRecord�
GoogleDomainsDns
name_servers (	B�AI
ds_state (22.google.cloud.domains.v1alpha2.DnsSettings.DsStateB�AL

ds_records (23.google.cloud.domains.v1alpha2.DnsSettings.DsRecordB�A�
DsRecord
key_tag (P
	algorithm (2=.google.cloud.domains.v1alpha2.DnsSettings.DsRecord.AlgorithmS
digest_type (2>.google.cloud.domains.v1alpha2.DnsSettings.DsRecord.DigestType
digest (	"�
	Algorithm
ALGORITHM_UNSPECIFIED 

RSAMD5
DH
DSA
ECC
RSASHA1
DSANSEC3SHA1
RSASHA1NSEC3SHA1
	RSASHA256
	RSASHA512

ECCGOST
ECDSAP256SHA256
ECDSAP384SHA384
ED25519	
ED448
INDIRECT�

PRIVATEDNS�

PRIVATEOID�"Y

DigestType
DIGEST_TYPE_UNSPECIFIED 
SHA1

SHA256
GOST3411

SHA384T

GlueRecord
	host_name (	B�A
ipv4_addresses (	
ipv6_addresses (	"Y
DsState
DS_STATE_UNSPECIFIED 
DS_RECORDS_UNPUBLISHED
DS_RECORDS_PUBLISHEDB
dns_provider"�
ContactSettingsC
privacy (2-.google.cloud.domains.v1alpha2.ContactPrivacyB�AW
registrant_contact (26.google.cloud.domains.v1alpha2.ContactSettings.ContactB�AR
admin_contact (26.google.cloud.domains.v1alpha2.ContactSettings.ContactB�AV
technical_contact (26.google.cloud.domains.v1alpha2.ContactSettings.ContactB�A�
Contact7
postal_address (2.google.type.PostalAddressB�A
email (	B�A
phone_number (	B�A

fax_number (	"g
SearchDomainsRequest
query (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"g
SearchDomainsResponseN
register_parameters (21.google.cloud.domains.v1alpha2.RegisterParameters"z
!RetrieveRegisterParametersRequest
domain_name (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"t
"RetrieveRegisterParametersResponseN
register_parameters (21.google.cloud.domains.v1alpha2.RegisterParameters"�
RegisterDomainRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationF
registration (2+.google.cloud.domains.v1alpha2.RegistrationB�AC
domain_notices (2+.google.cloud.domains.v1alpha2.DomainNoticeE
contact_notices (2,.google.cloud.domains.v1alpha2.ContactNotice-
yearly_price (2.google.type.MoneyB�A
validate_only ("z
!RetrieveTransferParametersRequest
domain_name (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"t
"RetrieveTransferParametersResponseN
transfer_parameters (21.google.cloud.domains.v1alpha2.TransferParameters"�
TransferDomainRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationF
registration (2+.google.cloud.domains.v1alpha2.RegistrationB�AE
contact_notices (2,.google.cloud.domains.v1alpha2.ContactNotice-
yearly_price (2.google.type.MoneyB�AL
authorization_code (20.google.cloud.domains.v1alpha2.AuthorizationCode
validate_only ("�
ListRegistrationsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"x
ListRegistrationsResponseB
registrations (2+.google.cloud.domains.v1alpha2.Registration
next_page_token (	"S
GetRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"�
UpdateRegistrationRequestA
registration (2+.google.cloud.domains.v1alpha2.Registration4
update_mask (2.google.protobuf.FieldMaskB�A"�
"ConfigureManagementSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/RegistrationN
management_settings (21.google.cloud.domains.v1alpha2.ManagementSettings4
update_mask (2.google.protobuf.FieldMaskB�A"�
ConfigureDnsSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration@
dns_settings (2*.google.cloud.domains.v1alpha2.DnsSettings4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only ("�
ConfigureContactSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/RegistrationH
contact_settings (2..google.cloud.domains.v1alpha2.ContactSettings4
update_mask (2.google.protobuf.FieldMaskB�AE
contact_notices (2,.google.cloud.domains.v1alpha2.ContactNotice
validate_only ("V
ExportRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"V
DeleteRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"e
 RetrieveAuthorizationCodeRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration"b
ResetAuthorizationCodeRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration"�
RegisterParameters
domain_name (	T
availability (2>.google.cloud.domains.v1alpha2.RegisterParameters.AvailabilityH
supported_privacy (2-.google.cloud.domains.v1alpha2.ContactPrivacyC
domain_notices (2+.google.cloud.domains.v1alpha2.DomainNotice(
yearly_price (2.google.type.Money"j
Availability
AVAILABILITY_UNSPECIFIED 
	AVAILABLE
UNAVAILABLE
UNSUPPORTED
UNKNOWN"�
TransferParameters
domain_name (	
current_registrar (	
name_servers (	M
transfer_lock_state (20.google.cloud.domains.v1alpha2.TransferLockStateH
supported_privacy (2-.google.cloud.domains.v1alpha2.ContactPrivacy(
yearly_price (2.google.type.Money"!
AuthorizationCode
code (	"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
api_version (	*
ContactPrivacy
CONTACT_PRIVACY_UNSPECIFIED 
PUBLIC_CONTACT_DATA
PRIVATE_CONTACT_DATA
REDACTED_CONTACT_DATA*A
DomainNotice
DOMAIN_NOTICE_UNSPECIFIED 
HSTS_PRELOADED*X
ContactNotice
CONTACT_NOTICE_UNSPECIFIED \'
#PUBLIC_CONTACT_DATA_ACKNOWLEDGEMENT*R
TransferLockState#
TRANSFER_LOCK_STATE_UNSPECIFIED 
UNLOCKED

LOCKED2�
Domains�
SearchDomains3.google.cloud.domains.v1alpha2.SearchDomainsRequest4.google.cloud.domains.v1alpha2.SearchDomainsResponse"`���IG/v1alpha2/{location=projects/*/locations/*}/registrations:searchDomains�Alocation,query�
RetrieveRegisterParameters@.google.cloud.domains.v1alpha2.RetrieveRegisterParametersRequestA.google.cloud.domains.v1alpha2.RetrieveRegisterParametersResponse"s���VT/v1alpha2/{location=projects/*/locations/*}/registrations:retrieveRegisterParameters�Alocation,domain_name�
RegisterDomain4.google.cloud.domains.v1alpha2.RegisterDomainRequest.google.longrunning.Operation"����E"@/v1alpha2/{parent=projects/*/locations/*}/registrations:register:*�A parent,registration,yearly_price�A!
RegistrationOperationMetadata�
RetrieveTransferParameters@.google.cloud.domains.v1alpha2.RetrieveTransferParametersRequestA.google.cloud.domains.v1alpha2.RetrieveTransferParametersResponse"s���VT/v1alpha2/{location=projects/*/locations/*}/registrations:retrieveTransferParameters�Alocation,domain_name�
TransferDomain4.google.cloud.domains.v1alpha2.TransferDomainRequest.google.longrunning.Operation"����E"@/v1alpha2/{parent=projects/*/locations/*}/registrations:transfer:*�A3parent,registration,yearly_price,authorization_code�A!
RegistrationOperationMetadata�
ListRegistrations7.google.cloud.domains.v1alpha2.ListRegistrationsRequest8.google.cloud.domains.v1alpha2.ListRegistrationsResponse"H���97/v1alpha2/{parent=projects/*/locations/*}/registrations�Aparent�
GetRegistration5.google.cloud.domains.v1alpha2.GetRegistrationRequest+.google.cloud.domains.v1alpha2.Registration"F���97/v1alpha2/{name=projects/*/locations/*/registrations/*}�Aname�
UpdateRegistration8.google.cloud.domains.v1alpha2.UpdateRegistrationRequest.google.longrunning.Operation"����T2D/v1alpha2/{registration.name=projects/*/locations/*/registrations/*}:registration�Aregistration,update_mask�A!
RegistrationOperationMetadata�
ConfigureManagementSettingsA.google.cloud.domains.v1alpha2.ConfigureManagementSettingsRequest.google.longrunning.Operation"����`"[/v1alpha2/{registration=projects/*/locations/*/registrations/*}:configureManagementSettings:*�A,registration,management_settings,update_mask�A!
RegistrationOperationMetadata�
ConfigureDnsSettings:.google.cloud.domains.v1alpha2.ConfigureDnsSettingsRequest.google.longrunning.Operation"����Y"T/v1alpha2/{registration=projects/*/locations/*/registrations/*}:configureDnsSettings:*�A%registration,dns_settings,update_mask�A!
RegistrationOperationMetadata�
ConfigureContactSettings>.google.cloud.domains.v1alpha2.ConfigureContactSettingsRequest.google.longrunning.Operation"����]"X/v1alpha2/{registration=projects/*/locations/*/registrations/*}:configureContactSettings:*�A)registration,contact_settings,update_mask�A!
RegistrationOperationMetadata�
ExportRegistration8.google.cloud.domains.v1alpha2.ExportRegistrationRequest.google.longrunning.Operation"t���C">/v1alpha2/{name=projects/*/locations/*/registrations/*}:export:*�Aname�A!
RegistrationOperationMetadata�
DeleteRegistration8.google.cloud.domains.v1alpha2.DeleteRegistrationRequest.google.longrunning.Operation"s���9*7/v1alpha2/{name=projects/*/locations/*/registrations/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
RetrieveAuthorizationCode?.google.cloud.domains.v1alpha2.RetrieveAuthorizationCodeRequest0.google.cloud.domains.v1alpha2.AuthorizationCode"p���[Y/v1alpha2/{registration=projects/*/locations/*/registrations/*}:retrieveAuthorizationCode�Aregistration�
ResetAuthorizationCode<.google.cloud.domains.v1alpha2.ResetAuthorizationCodeRequest0.google.cloud.domains.v1alpha2.AuthorizationCode"p���["V/v1alpha2/{registration=projects/*/locations/*/registrations/*}:resetAuthorizationCode:*�AregistrationJ�Adomains.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBp
!com.google.cloud.domains.v1alpha2BDomainsProtoPZ;cloud.google.com/go/domains/apiv1alpha2/domainspb;domainspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

