<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/asset_group_listing_group_filter.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class AssetGroupListingGroupFilter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Kgoogle/ads/googleads/v13/enums/listing_group_filter_product_condition.protogoogle.ads.googleads.v13.enums"�
&ListingGroupFilterProductConditionEnum"f
"ListingGroupFilterProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
"com.google.ads.googleads.v13.enumsB\'ListingGroupFilterProductConditionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Bgoogle/ads/googleads/v13/enums/listing_group_filter_vertical.protogoogle.ads.googleads.v13.enums"j
ListingGroupFilterVerticalEnum"H
ListingGroupFilterVertical
UNSPECIFIED 
UNKNOWN
SHOPPINGB�
"com.google.ads.googleads.v13.enumsBListingGroupFilterVerticalProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Igoogle/ads/googleads/v13/enums/listing_group_filter_product_channel.protogoogle.ads.googleads.v13.enums"
$ListingGroupFilterProductChannelEnum"W
 ListingGroupFilterProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
"com.google.ads.googleads.v13.enumsB%ListingGroupFilterProductChannelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Pgoogle/ads/googleads/v13/enums/listing_group_filter_custom_attribute_index.protogoogle.ads.googleads.v13.enums"�
*ListingGroupFilterCustomAttributeIndexEnum"�
&ListingGroupFilterCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2

INDEX3

INDEX4B�
"com.google.ads.googleads.v13.enumsB+ListingGroupFilterCustomAttributeIndexProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Lgoogle/ads/googleads/v13/enums/listing_group_filter_product_type_level.protogoogle.ads.googleads.v13.enums"�
&ListingGroupFilterProductTypeLevelEnum"~
"ListingGroupFilterProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
"com.google.ads.googleads.v13.enumsB\'ListingGroupFilterProductTypeLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Pgoogle/ads/googleads/v13/enums/listing_group_filter_bidding_category_level.protogoogle.ads.googleads.v13.enums"�
*ListingGroupFilterBiddingCategoryLevelEnum"�
&ListingGroupFilterBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
"com.google.ads.googleads.v13.enumsB+ListingGroupFilterBiddingCategoryLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Cgoogle/ads/googleads/v13/enums/listing_group_filter_type_enum.protogoogle.ads.googleads.v13.enums"�
ListingGroupFilterTypeEnum"m
ListingGroupFilterType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNIT_INCLUDED
UNIT_EXCLUDEDB�
"com.google.ads.googleads.v13.enumsBListingGroupFilterTypeEnumProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
Igoogle/ads/googleads/v13/resources/asset_group_listing_group_filter.proto"google.ads.googleads.v13.resourcesPgoogle/ads/googleads/v13/enums/listing_group_filter_custom_attribute_index.protoIgoogle/ads/googleads/v13/enums/listing_group_filter_product_channel.protoKgoogle/ads/googleads/v13/enums/listing_group_filter_product_condition.protoLgoogle/ads/googleads/v13/enums/listing_group_filter_product_type_level.protoCgoogle/ads/googleads/v13/enums/listing_group_filter_type_enum.protoBgoogle/ads/googleads/v13/enums/listing_group_filter_vertical.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AssetGroupListingGroupFilterT
resource_name (	B=�A�A7
5googleads.googleapis.com/AssetGroupListingGroupFilter@
asset_group (	B+�A�A%
#googleads.googleapis.com/AssetGroup
id (B�Ad
type (2Q.google.ads.googleads.v13.enums.ListingGroupFilterTypeEnum.ListingGroupFilterTypeB�Ap
vertical (2Y.google.ads.googleads.v13.enums.ListingGroupFilterVerticalEnum.ListingGroupFilterVerticalB�AS

case_value (2?.google.ads.googleads.v13.resources.ListingGroupFilterDimensionb
parent_listing_group_filter (	B=�A�A7
5googleads.googleapis.com/AssetGroupListingGroupFilter:��A�
5googleads.googleapis.com/AssetGroupListingGroupFilter`customers/{customer_id}/assetGroupListingGroupFilters/{asset_group_id}~{listing_group_filter_id}"�
ListingGroupFilterDimensionz
product_bidding_category (2V.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductBiddingCategoryH e
product_brand (2L.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductBrandH i
product_channel (2N.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductChannelH m
product_condition (2P.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductConditionH z
product_custom_attribute (2V.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductCustomAttributeH h
product_item_id (2M.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductItemIdH c
product_type (2K.google.ads.googleads.v13.resources.ListingGroupFilterDimension.ProductTypeH �
ProductBiddingCategory
id (H ��
level (2q.google.ads.googleads.v13.enums.ListingGroupFilterBiddingCategoryLevelEnum.ListingGroupFilterBiddingCategoryLevelB
_id,
ProductBrand
value (	H �B
_value�
ProductChannelv
channel (2e.google.ads.googleads.v13.enums.ListingGroupFilterProductChannelEnum.ListingGroupFilterProductChannel�
ProductCondition|
	condition (2i.google.ads.googleads.v13.enums.ListingGroupFilterProductConditionEnum.ListingGroupFilterProductCondition�
ProductCustomAttribute
value (	H ��
index (2q.google.ads.googleads.v13.enums.ListingGroupFilterCustomAttributeIndexEnum.ListingGroupFilterCustomAttributeIndexB
_value-
ProductItemId
value (	H �B
_value�
ProductType
value (	H �x
level (2i.google.ads.googleads.v13.enums.ListingGroupFilterProductTypeLevelEnum.ListingGroupFilterProductTypeLevelB
_valueB
	dimensionB�
&com.google.ads.googleads.v13.resourcesB!AssetGroupListingGroupFilterProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

