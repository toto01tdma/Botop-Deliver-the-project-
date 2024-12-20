<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/network_security.proto

namespace GPBMetadata\Google\Cloud\Networksecurity\V1;

class NetworkSecurity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\AuthorizationPolicy::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ClientTlsPolicy::initOnce();
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ServerTlsPolicy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
6google/cloud/networksecurity/v1/network_security.protogoogle.cloud.networksecurity.v1google/api/client.proto:google/cloud/networksecurity/v1/authorization_policy.proto7google/cloud/networksecurity/v1/client_tls_policy.proto7google/cloud/networksecurity/v1/server_tls_policy.proto#google/longrunning/operations.proto2� 
NetworkSecurity�
ListAuthorizationPoliciesA.google.cloud.networksecurity.v1.ListAuthorizationPoliciesRequestB.google.cloud.networksecurity.v1.ListAuthorizationPoliciesResponse"J���;9/v1/{parent=projects/*/locations/*}/authorizationPolicies�Aparent�
GetAuthorizationPolicy>.google.cloud.networksecurity.v1.GetAuthorizationPolicyRequest4.google.cloud.networksecurity.v1.AuthorizationPolicy"H���;9/v1/{name=projects/*/locations/*/authorizationPolicies/*}�Aname�
CreateAuthorizationPolicyA.google.cloud.networksecurity.v1.CreateAuthorizationPolicyRequest.google.longrunning.Operation"����Q"9/v1/{parent=projects/*/locations/*}/authorizationPolicies:authorization_policy�A3parent,authorization_policy,authorization_policy_id�AH
AuthorizationPolicy1google.cloud.networksecurity.v1.OperationMetadata�
UpdateAuthorizationPolicyA.google.cloud.networksecurity.v1.UpdateAuthorizationPolicyRequest.google.longrunning.Operation"����f2N/v1/{authorization_policy.name=projects/*/locations/*/authorizationPolicies/*}:authorization_policy�A authorization_policy,update_mask�AH
AuthorizationPolicy1google.cloud.networksecurity.v1.OperationMetadata�
DeleteAuthorizationPolicyA.google.cloud.networksecurity.v1.DeleteAuthorizationPolicyRequest.google.longrunning.Operation"����;*9/v1/{name=projects/*/locations/*/authorizationPolicies/*}�Aname�AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadata�
ListServerTlsPolicies=.google.cloud.networksecurity.v1.ListServerTlsPoliciesRequest>.google.cloud.networksecurity.v1.ListServerTlsPoliciesResponse"F���75/v1/{parent=projects/*/locations/*}/serverTlsPolicies�Aparent�
GetServerTlsPolicy:.google.cloud.networksecurity.v1.GetServerTlsPolicyRequest0.google.cloud.networksecurity.v1.ServerTlsPolicy"D���75/v1/{name=projects/*/locations/*/serverTlsPolicies/*}�Aname�
CreateServerTlsPolicy=.google.cloud.networksecurity.v1.CreateServerTlsPolicyRequest.google.longrunning.Operation"����J"5/v1/{parent=projects/*/locations/*}/serverTlsPolicies:server_tls_policy�A-parent,server_tls_policy,server_tls_policy_id�AD
ServerTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�
UpdateServerTlsPolicy=.google.cloud.networksecurity.v1.UpdateServerTlsPolicyRequest.google.longrunning.Operation"����\\2G/v1/{server_tls_policy.name=projects/*/locations/*/serverTlsPolicies/*}:server_tls_policy�Aserver_tls_policy,update_mask�AD
ServerTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�
DeleteServerTlsPolicy=.google.cloud.networksecurity.v1.DeleteServerTlsPolicyRequest.google.longrunning.Operation"����7*5/v1/{name=projects/*/locations/*/serverTlsPolicies/*}�Aname�AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadata�
ListClientTlsPolicies=.google.cloud.networksecurity.v1.ListClientTlsPoliciesRequest>.google.cloud.networksecurity.v1.ListClientTlsPoliciesResponse"F���75/v1/{parent=projects/*/locations/*}/clientTlsPolicies�Aparent�
GetClientTlsPolicy:.google.cloud.networksecurity.v1.GetClientTlsPolicyRequest0.google.cloud.networksecurity.v1.ClientTlsPolicy"D���75/v1/{name=projects/*/locations/*/clientTlsPolicies/*}�Aname�
CreateClientTlsPolicy=.google.cloud.networksecurity.v1.CreateClientTlsPolicyRequest.google.longrunning.Operation"����J"5/v1/{parent=projects/*/locations/*}/clientTlsPolicies:client_tls_policy�A-parent,client_tls_policy,client_tls_policy_id�AD
ClientTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�
UpdateClientTlsPolicy=.google.cloud.networksecurity.v1.UpdateClientTlsPolicyRequest.google.longrunning.Operation"����\\2G/v1/{client_tls_policy.name=projects/*/locations/*/clientTlsPolicies/*}:client_tls_policy�Aclient_tls_policy,update_mask�AD
ClientTlsPolicy1google.cloud.networksecurity.v1.OperationMetadata�
DeleteClientTlsPolicy=.google.cloud.networksecurity.v1.DeleteClientTlsPolicyRequest.google.longrunning.Operation"����7*5/v1/{name=projects/*/locations/*/clientTlsPolicies/*}�Aname�AJ
google.protobuf.Empty1google.cloud.networksecurity.v1.OperationMetadataR�Anetworksecurity.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.networksecurity.v1PZMcloud.google.com/go/networksecurity/apiv1/networksecuritypb;networksecuritypb�Google.Cloud.NetworkSecurity.V1�Google\\Cloud\\NetworkSecurity\\V1�"Google::Cloud::NetworkSecurity::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

