<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/source_info.proto

namespace GPBMetadata\Google\Api;

class SourceInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/api/source_info.proto
google.api"8

SourceInfo*
source_files (2.google.protobuf.AnyBq
com.google.apiBSourceInfoProtoPZEgoogle.golang.org/genproto/googleapis/api/serviceconfig;serviceconfig�GAPIbproto3'
        , true);

        static::$is_initialized = true;
    }
}

