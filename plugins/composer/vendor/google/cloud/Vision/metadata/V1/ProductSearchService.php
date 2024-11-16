<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class ProductSearchService
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
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�C
3google/cloud/vision/v1/product_search_service.protogoogle.cloud.vision.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto%google/cloud/vision/v1/geometry.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
Product
name (	
display_name (	
description (	
product_category (	B�A@
product_labels (2(.google.cloud.vision.v1.Product.KeyValue&
KeyValue
key (	
value (	:^�A[
vision.googleapis.com/Product:projects/{project}/locations/{location}/products/{product}"�

ProductSet
name (	
display_name (	3

index_time (2.google.protobuf.TimestampB�A,
index_error (2.google.rpc.StatusB�A:h�Ae
 vision.googleapis.com/ProductSetAprojects/{project}/locations/{location}/productSets/{product_set}"�
ReferenceImage
name (	
uri (	B�AA
bounding_polys (2$.google.cloud.vision.v1.BoundingPolyB�A:��A�
$vision.googleapis.com/ReferenceImage\\projects/{project}/locations/{location}/products/{product}/referenceImages/{reference_image}"�
CreateProductRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location5
product (2.google.cloud.vision.v1.ProductB�A

product_id (	"w
ListProductsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"b
ListProductsResponse1
products (2.google.cloud.vision.v1.Product
next_page_token (	"H
GetProductRequest3
name (	B%�A�A
vision.googleapis.com/Product"~
UpdateProductRequest5
product (2.google.cloud.vision.v1.ProductB�A/
update_mask (2.google.protobuf.FieldMask"K
DeleteProductRequest3
name (	B%�A�A
vision.googleapis.com/Product"�
CreateProductSetRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location<
product_set (2".google.cloud.vision.v1.ProductSetB�A
product_set_id (	"z
ListProductSetsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"l
ListProductSetsResponse8
product_sets (2".google.cloud.vision.v1.ProductSet
next_page_token (	"N
GetProductSetRequest6
name (	B(�A�A"
 vision.googleapis.com/ProductSet"�
UpdateProductSetRequest<
product_set (2".google.cloud.vision.v1.ProductSetB�A/
update_mask (2.google.protobuf.FieldMask"Q
DeleteProductSetRequest6
name (	B(�A�A"
 vision.googleapis.com/ProductSet"�
CreateReferenceImageRequest5
parent (	B%�A�A
vision.googleapis.com/ProductD
reference_image (2&.google.cloud.vision.v1.ReferenceImageB�A
reference_image_id (	"z
ListReferenceImagesRequest5
parent (	B%�A�A
vision.googleapis.com/Product
	page_size (

page_token (	"�
ListReferenceImagesResponse@
reference_images (2&.google.cloud.vision.v1.ReferenceImage
	page_size (
next_page_token (	"V
GetReferenceImageRequest:
name (	B,�A�A&
$vision.googleapis.com/ReferenceImage"Y
DeleteReferenceImageRequest:
name (	B,�A�A&
$vision.googleapis.com/ReferenceImage"�
AddProductToProductSetRequest6
name (	B(�A�A"
 vision.googleapis.com/ProductSet6
product (	B%�A�A
vision.googleapis.com/Product"�
"RemoveProductFromProductSetRequest6
name (	B(�A�A"
 vision.googleapis.com/ProductSet6
product (	B%�A�A
vision.googleapis.com/Product"�
ListProductsInProductSetRequest6
name (	B(�A�A"
 vision.googleapis.com/ProductSet
	page_size (

page_token (	"n
 ListProductsInProductSetResponse1
products (2.google.cloud.vision.v1.Product
next_page_token (	"2
ImportProductSetsGcsSource
csv_file_uri (	"r
ImportProductSetsInputConfigH

gcs_source (22.google.cloud.vision.v1.ImportProductSetsGcsSourceH B
source"�
ImportProductSetsRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationO
input_config (24.google.cloud.vision.v1.ImportProductSetsInputConfigB�A"�
ImportProductSetsResponse@
reference_images (2&.google.cloud.vision.v1.ReferenceImage$
statuses (2.google.rpc.Status"�
BatchOperationMetadataC
state (24.google.cloud.vision.v1.BatchOperationMetadata.State/
submit_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"Y
State
STATE_UNSPECIFIED 

PROCESSING

SUCCESSFUL

FAILED
	CANCELLED"/
ProductSetPurgeConfig
product_set_id (	"�
PurgeProductsRequestQ
product_set_purge_config (2-.google.cloud.vision.v1.ProductSetPurgeConfigH  
delete_orphan_products (H 9
parent (	B)�A�A#
!locations.googleapis.com/Location
force (B
target2�
ProductSearch�
CreateProductSet/.google.cloud.vision.v1.CreateProductSetRequest".google.cloud.vision.v1.ProductSet"h���>"//v1/{parent=projects/*/locations/*}/productSets:product_set�A!parent,product_set,product_set_id�
ListProductSets..google.cloud.vision.v1.ListProductSetsRequest/.google.cloud.vision.v1.ListProductSetsResponse"@���1//v1/{parent=projects/*/locations/*}/productSets�Aparent�
GetProductSet,.google.cloud.vision.v1.GetProductSetRequest".google.cloud.vision.v1.ProductSet">���1//v1/{name=projects/*/locations/*/productSets/*}�Aname�
UpdateProductSet/.google.cloud.vision.v1.UpdateProductSetRequest".google.cloud.vision.v1.ProductSet"j���J2;/v1/{product_set.name=projects/*/locations/*/productSets/*}:product_set�Aproduct_set,update_mask�
DeleteProductSet/.google.cloud.vision.v1.DeleteProductSetRequest.google.protobuf.Empty">���1*//v1/{name=projects/*/locations/*/productSets/*}�Aname�
CreateProduct,.google.cloud.vision.v1.CreateProductRequest.google.cloud.vision.v1.Product"Y���7",/v1/{parent=projects/*/locations/*}/products:product�Aparent,product,product_id�
ListProducts+.google.cloud.vision.v1.ListProductsRequest,.google.cloud.vision.v1.ListProductsResponse"=���.,/v1/{parent=projects/*/locations/*}/products�Aparent�

GetProduct).google.cloud.vision.v1.GetProductRequest.google.cloud.vision.v1.Product";���.,/v1/{name=projects/*/locations/*/products/*}�Aname�
UpdateProduct,.google.cloud.vision.v1.UpdateProductRequest.google.cloud.vision.v1.Product"[���?24/v1/{product.name=projects/*/locations/*/products/*}:product�Aproduct,update_mask�
DeleteProduct,.google.cloud.vision.v1.DeleteProductRequest.google.protobuf.Empty";���.*,/v1/{name=projects/*/locations/*/products/*}�Aname�
CreateReferenceImage3.google.cloud.vision.v1.CreateReferenceImageRequest&.google.cloud.vision.v1.ReferenceImage"����Q">/v1/{parent=projects/*/locations/*/products/*}/referenceImages:reference_image�A)parent,reference_image,reference_image_id�
DeleteReferenceImage3.google.cloud.vision.v1.DeleteReferenceImageRequest.google.protobuf.Empty"M���@*>/v1/{name=projects/*/locations/*/products/*/referenceImages/*}�Aname�
ListReferenceImages2.google.cloud.vision.v1.ListReferenceImagesRequest3.google.cloud.vision.v1.ListReferenceImagesResponse"O���@>/v1/{parent=projects/*/locations/*/products/*}/referenceImages�Aparent�
GetReferenceImage0.google.cloud.vision.v1.GetReferenceImageRequest&.google.cloud.vision.v1.ReferenceImage"M���@>/v1/{name=projects/*/locations/*/products/*/referenceImages/*}�Aname�
AddProductToProductSet5.google.cloud.vision.v1.AddProductToProductSetRequest.google.protobuf.Empty"T���?":/v1/{name=projects/*/locations/*/productSets/*}:addProduct:*�Aname,product�
RemoveProductFromProductSet:.google.cloud.vision.v1.RemoveProductFromProductSetRequest.google.protobuf.Empty"W���B"=/v1/{name=projects/*/locations/*/productSets/*}:removeProduct:*�Aname,product�
ListProductsInProductSet7.google.cloud.vision.v1.ListProductsInProductSetRequest8.google.cloud.vision.v1.ListProductsInProductSetResponse"G���:8/v1/{name=projects/*/locations/*/productSets/*}/products�Aname�
ImportProductSets0.google.cloud.vision.v1.ImportProductSetsRequest.google.longrunning.Operation"����;"6/v1/{parent=projects/*/locations/*}/productSets:import:*�Aparent,input_config�A3
ImportProductSetsResponseBatchOperationMetadata�
PurgeProducts,.google.cloud.vision.v1.PurgeProductsRequest.google.longrunning.Operation"x���7"2/v1/{parent=projects/*/locations/*}/products:purge:*�Aparent�A/
google.protobuf.EmptyBatchOperationMetadatav�Avision.googleapis.com�A[https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-visionBz
com.google.cloud.vision.v1BProductSearchServiceProtoPZ5cloud.google.com/go/vision/v2/apiv1/visionpb;visionpb��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}

