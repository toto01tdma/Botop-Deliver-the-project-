<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v2/deny.proto

namespace GPBMetadata\Google\Iam\V2;

class Deny
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/iam/v2/deny.protogoogle.iam.v2"�
DenyRule
denied_principals (	
exception_principals (	
denied_permissions (	
exception_permissions (	+
denial_condition (2.google.type.ExprB{
com.google.iam.v2BDenyRuleProtoPZ)cloud.google.com/go/iam/apiv2/iampb;iampb�Google.Cloud.Iam.V2�Google\\Cloud\\Iam\\V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

