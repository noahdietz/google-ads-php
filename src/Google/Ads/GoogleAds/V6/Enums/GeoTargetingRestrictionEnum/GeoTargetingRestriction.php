<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/geo_targeting_restriction.proto

namespace Google\Ads\GoogleAds\V6\Enums\GeoTargetingRestrictionEnum;

use UnexpectedValueException;

/**
 * A restriction used to determine if the request context's
 * geo should be matched.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction</code>
 */
class GeoTargetingRestriction
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Indicates that request context should match the physical location of
     * the user.
     *
     * Generated from protobuf enum <code>LOCATION_OF_PRESENCE = 2;</code>
     */
    const LOCATION_OF_PRESENCE = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LOCATION_OF_PRESENCE => 'LOCATION_OF_PRESENCE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoTargetingRestriction::class, \Google\Ads\GoogleAds\V6\Enums\GeoTargetingRestrictionEnum_GeoTargetingRestriction::class);
