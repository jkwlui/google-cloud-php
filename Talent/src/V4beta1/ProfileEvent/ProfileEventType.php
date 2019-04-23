<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/event.proto

namespace Google\Cloud\Talent\V4beta1\ProfileEvent;

use UnexpectedValueException;

/**
 * The enum represents types of client events for a candidate profile.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.ProfileEvent.ProfileEventType</code>
 */
class ProfileEventType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>PROFILE_EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const PROFILE_EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * The profile is displayed.
     *
     * Generated from protobuf enum <code>IMPRESSION = 1;</code>
     */
    const IMPRESSION = 1;
    /**
     * The profile is viewed.
     *
     * Generated from protobuf enum <code>VIEW = 2;</code>
     */
    const VIEW = 2;
    /**
     * The profile is bookmarked.
     *
     * Generated from protobuf enum <code>BOOKMARK = 3;</code>
     */
    const BOOKMARK = 3;

    private static $valueToName = [
        self::PROFILE_EVENT_TYPE_UNSPECIFIED => 'PROFILE_EVENT_TYPE_UNSPECIFIED',
        self::IMPRESSION => 'IMPRESSION',
        self::VIEW => 'VIEW',
        self::BOOKMARK => 'BOOKMARK',
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
class_alias(ProfileEventType::class, \Google\Cloud\Talent\V4beta1\ProfileEvent_ProfileEventType::class);
