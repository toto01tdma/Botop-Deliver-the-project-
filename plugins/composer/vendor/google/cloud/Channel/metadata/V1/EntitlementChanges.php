<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlement_changes.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class EntitlementChanges
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/channel/v1/entitlement_changes.protogoogle.cloud.channel.v1google/api/resource.proto*google/cloud/channel/v1/entitlements.protogoogle/protobuf/timestamp.proto"�
EntitlementChangeR
suspension_reason	 (25.google.cloud.channel.v1.Entitlement.SuspensionReasonH \\
cancellation_reason
 (2=.google.cloud.channel.v1.EntitlementChange.CancellationReasonH X
activation_reason (2;.google.cloud.channel.v1.EntitlementChange.ActivationReasonH 
other_change_reasond (	H D
entitlement (	B/�A�A)
\'cloudchannel.googleapis.com/Entitlement8
offer (	B)�A�A#
!cloudchannel.googleapis.com/OfferH
provisioned_service (2+.google.cloud.channel.v1.ProvisionedServiceJ
change_type (25.google.cloud.channel.v1.EntitlementChange.ChangeType/
create_time (2.google.protobuf.TimestampN
operator_type (27.google.cloud.channel.v1.EntitlementChange.OperatorType6

parameters (2".google.cloud.channel.v1.Parameter
operator (	"�

ChangeType
CHANGE_TYPE_UNSPECIFIED 
CREATED
PRICE_PLAN_SWITCHED
COMMITMENT_CHANGED
RENEWED
	SUSPENDED
	ACTIVATED
	CANCELLED
SKU_CHANGED	
RENEWAL_SETTING_CHANGED

PAID_SUBSCRIPTION_STARTED
LICENSE_CAP_CHANGED
SUSPENSION_DETAILS_CHANGED
TRIAL_END_DATE_EXTENDED
TRIAL_STARTED"z
OperatorType
OPERATOR_TYPE_UNSPECIFIED #
CUSTOMER_SERVICE_REPRESENTATIVE

SYSTEM
CUSTOMER
RESELLER"
CancellationReason#
CANCELLATION_REASON_UNSPECIFIED 
SERVICE_TERMINATED
RELATIONSHIP_ENDED
PARTIAL_TRANSFER"�
ActivationReason!
ACTIVATION_REASON_UNSPECIFIED 
RESELLER_REVOKED_SUSPENSION!
CUSTOMER_ACCEPTED_PENDING_TOS
RENEWAL_SETTINGS_CHANGED
OTHER_ACTIVATION_REASONdB
change_reasonBo
com.google.cloud.channel.v1BEntitlementChangesProtoPZ5cloud.google.com/go/channel/apiv1/channelpb;channelpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

