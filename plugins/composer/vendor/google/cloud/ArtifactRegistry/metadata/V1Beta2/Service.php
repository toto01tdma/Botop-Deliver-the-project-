<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/service.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\AptArtifact::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\File::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Package::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Repository::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Settings::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Tag::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Version::initOnce();
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\YumArtifact::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�7
6google/devtools/artifactregistry/v1beta2/service.proto(google.devtools.artifactregistry.v1beta2google/api/client.proto;google/devtools/artifactregistry/v1beta2/apt_artifact.proto3google/devtools/artifactregistry/v1beta2/file.proto6google/devtools/artifactregistry/v1beta2/package.proto9google/devtools/artifactregistry/v1beta2/repository.proto7google/devtools/artifactregistry/v1beta2/settings.proto2google/devtools/artifactregistry/v1beta2/tag.proto6google/devtools/artifactregistry/v1beta2/version.proto;google/devtools/artifactregistry/v1beta2/yum_artifact.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto"
OperationMetadata2�/
ArtifactRegistry�
ImportAptArtifactsC.google.devtools.artifactregistry.v1beta2.ImportAptArtifactsRequest.google.longrunning.Operation"����P"K/v1beta2/{parent=projects/*/locations/*/repositories/*}/aptArtifacts:import:*�A�
Cgoogle.devtools.artifactregistry.v1beta2.ImportAptArtifactsResponseCgoogle.devtools.artifactregistry.v1beta2.ImportAptArtifactsMetadata�
ImportYumArtifactsC.google.devtools.artifactregistry.v1beta2.ImportYumArtifactsRequest.google.longrunning.Operation"����P"K/v1beta2/{parent=projects/*/locations/*/repositories/*}/yumArtifacts:import:*�A�
Cgoogle.devtools.artifactregistry.v1beta2.ImportYumArtifactsResponseCgoogle.devtools.artifactregistry.v1beta2.ImportYumArtifactsMetadata�
ListRepositoriesA.google.devtools.artifactregistry.v1beta2.ListRepositoriesRequestB.google.devtools.artifactregistry.v1beta2.ListRepositoriesResponse"F���75/v1beta2/{parent=projects/*/locations/*}/repositories�Aparent�
GetRepository>.google.devtools.artifactregistry.v1beta2.GetRepositoryRequest4.google.devtools.artifactregistry.v1beta2.Repository"D���75/v1beta2/{name=projects/*/locations/*/repositories/*}�Aname�
CreateRepositoryA.google.devtools.artifactregistry.v1beta2.CreateRepositoryRequest.google.longrunning.Operation"����C"5/v1beta2/{parent=projects/*/locations/*}/repositories:
repository�Aparent,repository,repository_id�Aq
3google.devtools.artifactregistry.v1beta2.Repository:google.devtools.artifactregistry.v1beta2.OperationMetadata�
UpdateRepositoryA.google.devtools.artifactregistry.v1beta2.UpdateRepositoryRequest4.google.devtools.artifactregistry.v1beta2.Repository"m���N2@/v1beta2/{repository.name=projects/*/locations/*/repositories/*}:
repository�Arepository,update_mask�
DeleteRepositoryA.google.devtools.artifactregistry.v1beta2.DeleteRepositoryRequest.google.longrunning.Operation"����7*5/v1beta2/{name=projects/*/locations/*/repositories/*}�Aname�AS
google.protobuf.Empty:google.devtools.artifactregistry.v1beta2.OperationMetadata�
ListPackages=.google.devtools.artifactregistry.v1beta2.ListPackagesRequest>.google.devtools.artifactregistry.v1beta2.ListPackagesResponse"Q���B@/v1beta2/{parent=projects/*/locations/*/repositories/*}/packages�Aparent�

GetPackage;.google.devtools.artifactregistry.v1beta2.GetPackageRequest1.google.devtools.artifactregistry.v1beta2.Package"O���B@/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*}�Aname�
DeletePackage>.google.devtools.artifactregistry.v1beta2.DeletePackageRequest.google.longrunning.Operation"����B*@/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*}�Aname�AS
google.protobuf.Empty:google.devtools.artifactregistry.v1beta2.OperationMetadata�
ListVersions=.google.devtools.artifactregistry.v1beta2.ListVersionsRequest>.google.devtools.artifactregistry.v1beta2.ListVersionsResponse"\\���MK/v1beta2/{parent=projects/*/locations/*/repositories/*/packages/*}/versions�Aparent�

GetVersion;.google.devtools.artifactregistry.v1beta2.GetVersionRequest1.google.devtools.artifactregistry.v1beta2.Version"Z���MK/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*/versions/*}�Aname�
DeleteVersion>.google.devtools.artifactregistry.v1beta2.DeleteVersionRequest.google.longrunning.Operation"����M*K/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*/versions/*}�Aname�AS
google.protobuf.Empty:google.devtools.artifactregistry.v1beta2.OperationMetadata�
	ListFiles:.google.devtools.artifactregistry.v1beta2.ListFilesRequest;.google.devtools.artifactregistry.v1beta2.ListFilesResponse"N���?=/v1beta2/{parent=projects/*/locations/*/repositories/*}/files�Aparent�
GetFile8.google.devtools.artifactregistry.v1beta2.GetFileRequest..google.devtools.artifactregistry.v1beta2.File"M���@>/v1beta2/{name=projects/*/locations/*/repositories/*/files/**}�Aname�
ListTags9.google.devtools.artifactregistry.v1beta2.ListTagsRequest:.google.devtools.artifactregistry.v1beta2.ListTagsResponse"X���IG/v1beta2/{parent=projects/*/locations/*/repositories/*/packages/*}/tags�Aparent�
GetTag7.google.devtools.artifactregistry.v1beta2.GetTagRequest-.google.devtools.artifactregistry.v1beta2.Tag"V���IG/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*/tags/*}�Aname�
	CreateTag:.google.devtools.artifactregistry.v1beta2.CreateTagRequest-.google.devtools.artifactregistry.v1beta2.Tag"h���N"G/v1beta2/{parent=projects/*/locations/*/repositories/*/packages/*}/tags:tag�Aparent,tag,tag_id�
	UpdateTag:.google.devtools.artifactregistry.v1beta2.UpdateTagRequest-.google.devtools.artifactregistry.v1beta2.Tag"j���R2K/v1beta2/{tag.name=projects/*/locations/*/repositories/*/packages/*/tags/*}:tag�Atag,update_mask�
	DeleteTag:.google.devtools.artifactregistry.v1beta2.DeleteTagRequest.google.protobuf.Empty"V���I*G/v1beta2/{name=projects/*/locations/*/repositories/*/packages/*/tags/*}�Aname�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"Q���K"F/v1beta2/{resource=projects/*/locations/*/repositories/*}:setIamPolicy:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"N���HF/v1beta2/{resource=projects/*/locations/*/repositories/*}:getIamPolicy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"W���Q"L/v1beta2/{resource=projects/*/locations/*/repositories/*}:testIamPermissions:*�
GetProjectSettingsC.google.devtools.artifactregistry.v1beta2.GetProjectSettingsRequest9.google.devtools.artifactregistry.v1beta2.ProjectSettings"9���,*/v1beta2/{name=projects/*/projectSettings}�Aname�
UpdateProjectSettingsF.google.devtools.artifactregistry.v1beta2.UpdateProjectSettingsRequest9.google.devtools.artifactregistry.v1beta2.ProjectSettings"t���O2;/v1beta2/{project_settings.name=projects/*/projectSettings}:project_settings�Aproject_settings,update_mask��Aartifactregistry.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
,com.google.devtools.artifactregistry.v1beta2BServiceProtoPZUcloud.google.com/go/artifactregistry/apiv1beta2/artifactregistrypb;artifactregistrypb�%Google.Cloud.ArtifactRegistry.V1Beta2�%Google\\Cloud\\ArtifactRegistry\\V1beta2�(Google::Cloud::ArtifactRegistry::V1beta2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

