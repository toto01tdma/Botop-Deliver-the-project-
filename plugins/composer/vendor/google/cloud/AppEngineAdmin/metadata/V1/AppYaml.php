<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace GPBMetadata\Google\Appengine\V1;

class AppYaml
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/appengine/v1/app_yaml.protogoogle.appengine.v1"�
ApiConfigHandler=
auth_fail_action (2#.google.appengine.v1.AuthFailAction4
login (2%.google.appengine.v1.LoginRequirement
script (	:
security_level (2".google.appengine.v1.SecurityLevel
url (	"�
ErrorHandler?

error_code (2+.google.appengine.v1.ErrorHandler.ErrorCode
static_file (	
	mime_type (	"�
	ErrorCode
ERROR_CODE_UNSPECIFIED 
ERROR_CODE_DEFAULT 
ERROR_CODE_OVER_QUOTA
ERROR_CODE_DOS_API_DENIAL
ERROR_CODE_TIMEOUT"�
UrlMap
	url_regex (	?
static_files (2\'.google.appengine.v1.StaticFilesHandlerH 4
script (2".google.appengine.v1.ScriptHandlerH ?
api_endpoint (2\'.google.appengine.v1.ApiEndpointHandlerH :
security_level (2".google.appengine.v1.SecurityLevel4
login (2%.google.appengine.v1.LoginRequirement=
auth_fail_action (2#.google.appengine.v1.AuthFailActionY
redirect_http_response_code (24.google.appengine.v1.UrlMap.RedirectHttpResponseCode"�
RedirectHttpResponseCode+
\'REDIRECT_HTTP_RESPONSE_CODE_UNSPECIFIED #
REDIRECT_HTTP_RESPONSE_CODE_301#
REDIRECT_HTTP_RESPONSE_CODE_302#
REDIRECT_HTTP_RESPONSE_CODE_303#
REDIRECT_HTTP_RESPONSE_CODE_307B
handler_type"�
StaticFilesHandler
path (	
upload_path_regex (	N
http_headers (28.google.appengine.v1.StaticFilesHandler.HttpHeadersEntry
	mime_type (	-

expiration (2.google.protobuf.Duration
require_matching_file (
application_readable (2
HttpHeadersEntry
key (	
value (	:8"$
ScriptHandler
script_path (	")
ApiEndpointHandler
script_path (	"�
HealthCheck
disable_health_check (
host (	
healthy_threshold (
unhealthy_threshold (
restart_threshold (1
check_interval (2.google.protobuf.Duration*
timeout (2.google.protobuf.Duration"�
ReadinessCheck
path (	
host (	
failure_threshold (
success_threshold (1
check_interval (2.google.protobuf.Duration*
timeout (2.google.protobuf.Duration4
app_start_timeout (2.google.protobuf.Duration"�
LivenessCheck
path (	
host (	
failure_threshold (
success_threshold (1
check_interval (2.google.protobuf.Duration*
timeout (2.google.protobuf.Duration0
initial_delay (2.google.protobuf.Duration"(
Library
name (	
version (	*t
AuthFailAction 
AUTH_FAIL_ACTION_UNSPECIFIED 
AUTH_FAIL_ACTION_REDIRECT!
AUTH_FAIL_ACTION_UNAUTHORIZED*b
LoginRequirement
LOGIN_UNSPECIFIED 
LOGIN_OPTIONAL
LOGIN_ADMIN
LOGIN_REQUIRED*y
SecurityLevel
SECURE_UNSPECIFIED 
SECURE_DEFAULT 
SECURE_NEVER
SECURE_OPTIONAL
SECURE_ALWAYSB�
com.google.appengine.v1BAppYamlProtoPZ;cloud.google.com/go/appengine/apiv1/appenginepb;appenginepb�Google.Cloud.AppEngine.V1�Google\\Cloud\\AppEngine\\V1�Google::Cloud::AppEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

