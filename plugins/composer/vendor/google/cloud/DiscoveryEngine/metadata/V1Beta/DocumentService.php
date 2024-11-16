<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/document_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class DocumentService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Document::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\PurgeConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/discoveryengine/v1beta/document_service.proto#google.cloud.discoveryengine.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto2google/cloud/discoveryengine/v1beta/document.proto7google/cloud/discoveryengine/v1beta/import_config.proto6google/cloud/discoveryengine/v1beta/purge_config.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto"S
GetDocumentRequest=
name (	B/�A�A)
\'discoveryengine.googleapis.com/Document"|
ListDocumentsRequest=
parent (	B-�A�A\'
%discoveryengine.googleapis.com/Branch
	page_size (

page_token (	"r
ListDocumentsResponse@
	documents (2-.google.cloud.discoveryengine.v1beta.Document
next_page_token (	"�
CreateDocumentRequest=
parent (	B-�A�A\'
%discoveryengine.googleapis.com/BranchD
document (2-.google.cloud.discoveryengine.v1beta.DocumentB�A
document_id (	B�A"t
UpdateDocumentRequestD
document (2-.google.cloud.discoveryengine.v1beta.DocumentB�A
allow_missing ("V
DeleteDocumentRequest=
name (	B/�A�A)
\'discoveryengine.googleapis.com/Document2�
DocumentService�
GetDocument7.google.cloud.discoveryengine.v1beta.GetDocumentRequest-.google.cloud.discoveryengine.v1beta.Document"�����I/v1beta/{name=projects/*/locations/*/dataStores/*/branches/*/documents/*}ZYW/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}�Aname�
ListDocuments9.google.cloud.discoveryengine.v1beta.ListDocumentsRequest:.google.cloud.discoveryengine.v1beta.ListDocumentsResponse"�����I/v1beta/{parent=projects/*/locations/*/dataStores/*/branches/*}/documentsZYW/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents�Aparent�
CreateDocument:.google.cloud.discoveryengine.v1beta.CreateDocumentRequest-.google.cloud.discoveryengine.v1beta.Document"�����"I/v1beta/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:documentZc"W/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:document�Aparent,document,document_id�
UpdateDocument:.google.cloud.discoveryengine.v1beta.UpdateDocumentRequest-.google.cloud.discoveryengine.v1beta.Document"�����2R/v1beta/{document.name=projects/*/locations/*/dataStores/*/branches/*/documents/*}:documentZl2`/v1beta/{document.name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}:document�
DeleteDocument:.google.cloud.discoveryengine.v1beta.DeleteDocumentRequest.google.protobuf.Empty"�����*I/v1beta/{name=projects/*/locations/*/dataStores/*/branches/*/documents/*}ZY*W/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}�Aname�
ImportDocuments;.google.cloud.discoveryengine.v1beta.ImportDocumentsRequest.google.longrunning.Operation"�����"P/v1beta/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:import:*Zc"^/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:import:*�Az
;google.cloud.discoveryengine.v1beta.ImportDocumentsResponse;google.cloud.discoveryengine.v1beta.ImportDocumentsMetadata�
PurgeDocuments:.google.cloud.discoveryengine.v1beta.PurgeDocumentsRequest.google.longrunning.Operation"�����"O/v1beta/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:purge:*Zb"]/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:purge:*�Ax
:google.cloud.discoveryengine.v1beta.PurgeDocumentsResponse:google.cloud.discoveryengine.v1beta.PurgeDocumentsMetadataR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.discoveryengine.v1betaBDocumentServiceProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

