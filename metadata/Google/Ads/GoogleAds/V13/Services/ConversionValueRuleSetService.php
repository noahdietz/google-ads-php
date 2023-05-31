<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/conversion_value_rule_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Services;

class ConversionValueRuleSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/ads/googleads/v13/enums/conversion_value_rule_set_status.protogoogle.ads.googleads.v13.enums"�
 ConversionValueRuleSetStatusEnum"b
ConversionValueRuleSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
"com.google.ads.googleads.v13.enumsB!ConversionValueRuleSetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
?google/ads/googleads/v13/enums/conversion_action_category.protogoogle.ads.googleads.v13.enums"�
ConversionActionCategoryEnum"�
ConversionActionCategory
UNSPECIFIED 
UNKNOWN
DEFAULT
	PAGE_VIEW
PURCHASE

SIGNUP
DOWNLOAD
ADD_TO_CART
BEGIN_CHECKOUT	
SUBSCRIBE_PAID

PHONE_CALL_LEAD
IMPORTED_LEAD
SUBMIT_LEAD_FORM
BOOK_APPOINTMENT
REQUEST_QUOTE
GET_DIRECTIONS
OUTBOUND_CLICK
CONTACT

ENGAGEMENT
STORE_VISIT

STORE_SALE
QUALIFIED_LEAD
CONVERTED_LEADB�
"com.google.ads.googleads.v13.enumsBConversionActionCategoryProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
=google/ads/googleads/v13/enums/value_rule_set_dimension.protogoogle.ads.googleads.v13.enums"�
ValueRuleSetDimensionEnum"s
ValueRuleSetDimension
UNSPECIFIED 
UNKNOWN
GEO_LOCATION

DEVICE
AUDIENCE
NO_CONDITIONB�
"com.google.ads.googleads.v13.enumsBValueRuleSetDimensionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Cgoogle/ads/googleads/v13/enums/value_rule_set_attachment_type.protogoogle.ads.googleads.v13.enums"x
ValueRuleSetAttachmentTypeEnum"V
ValueRuleSetAttachmentType
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGNB�
"com.google.ads.googleads.v13.enumsBValueRuleSetAttachmentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Bgoogle/ads/googleads/v13/resources/conversion_value_rule_set.proto"google.ads.googleads.v13.resourcesEgoogle/ads/googleads/v13/enums/conversion_value_rule_set_status.protoCgoogle/ads/googleads/v13/enums/value_rule_set_attachment_type.proto=google/ads/googleads/v13/enums/value_rule_set_dimension.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
ConversionValueRuleSetN
resource_name (	B7�A�A1
/googleads.googleapis.com/ConversionValueRuleSet
id (B�AQ
conversion_value_rules (	B1�A.
,googleads.googleapis.com/ConversionValueRulec

dimensions (2O.google.ads.googleads.v13.enums.ValueRuleSetDimensionEnum.ValueRuleSetDimensionA
owner_customer (	B)�A�A#
!googleads.googleapis.com/Customerw
attachment_type (2Y.google.ads.googleads.v13.enums.ValueRuleSetAttachmentTypeEnum.ValueRuleSetAttachmentTypeB�A8
campaign (	B&�A#
!googleads.googleapis.com/Campaignr
status (2].google.ads.googleads.v13.enums.ConversionValueRuleSetStatusEnum.ConversionValueRuleSetStatusB�A�
conversion_action_categories	 (2U.google.ads.googleads.v13.enums.ConversionActionCategoryEnum.ConversionActionCategoryB�A:��A�
/googleads.googleapis.com/ConversionValueRuleSetNcustomers/{customer_id}/conversionValueRuleSets/{conversion_value_rule_set_id}B�
&com.google.ads.googleads.v13.resourcesBConversionValueRuleSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3
�
:google/ads/googleads/v13/enums/response_content_type.protogoogle.ads.googleads.v13.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v13.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Igoogle/ads/googleads/v13/services/conversion_value_rule_set_service.proto!google.ads.googleads.v13.servicesBgoogle/ads/googleads/v13/resources/conversion_value_rule_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
$MutateConversionValueRuleSetsRequest
customer_id (	B�A[

operations (2B.google.ads.googleads.v13.services.ConversionValueRuleSetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v13.enums.ResponseContentTypeEnum.ResponseContentType"�
ConversionValueRuleSetOperation/
update_mask (2.google.protobuf.FieldMaskL
create (2:.google.ads.googleads.v13.resources.ConversionValueRuleSetH L
update (2:.google.ads.googleads.v13.resources.ConversionValueRuleSetH F
remove (	B4�A1
/googleads.googleapis.com/ConversionValueRuleSetH B
	operation"�
%MutateConversionValueRuleSetsResponseV
results (2E.google.ads.googleads.v13.services.MutateConversionValueRuleSetResult1
partial_failure_error (2.google.rpc.Status"�
"MutateConversionValueRuleSetResultK
resource_name (	B4�A1
/googleads.googleapis.com/ConversionValueRuleSet]
conversion_value_rule_set (2:.google.ads.googleads.v13.resources.ConversionValueRuleSet2�
ConversionValueRuleSetService�
MutateConversionValueRuleSetsG.google.ads.googleads.v13.services.MutateConversionValueRuleSetsRequestH.google.ads.googleads.v13.services.MutateConversionValueRuleSetsResponse"a���B"=/v13/customers/{customer_id=*}/conversionValueRuleSets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v13.servicesB"ConversionValueRuleSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v13/services;services�GAA�!Google.Ads.GoogleAds.V13.Services�!Google\\Ads\\GoogleAds\\V13\\Services�%Google::Ads::GoogleAds::V13::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

