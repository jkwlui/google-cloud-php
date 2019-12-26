<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\TimePartConfig;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.privacy.dlp.v2.TimePartConfig.TimePart</code>
 */
class TimePart
{
    /**
     * Generated from protobuf enum <code>TIME_PART_UNSPECIFIED = 0;</code>
     */
    const TIME_PART_UNSPECIFIED = 0;
    /**
     * [0-9999]
     *
     * Generated from protobuf enum <code>YEAR = 1;</code>
     */
    const YEAR = 1;
    /**
     * [1-12]
     *
     * Generated from protobuf enum <code>MONTH = 2;</code>
     */
    const MONTH = 2;
    /**
     * [1-31]
     *
     * Generated from protobuf enum <code>DAY_OF_MONTH = 3;</code>
     */
    const DAY_OF_MONTH = 3;
    /**
     * [1-7]
     *
     * Generated from protobuf enum <code>DAY_OF_WEEK = 4;</code>
     */
    const DAY_OF_WEEK = 4;
    /**
     * [1-53]
     *
     * Generated from protobuf enum <code>WEEK_OF_YEAR = 5;</code>
     */
    const WEEK_OF_YEAR = 5;
    /**
     * [0-23]
     *
     * Generated from protobuf enum <code>HOUR_OF_DAY = 6;</code>
     */
    const HOUR_OF_DAY = 6;

    private static $valueToName = [
        self::TIME_PART_UNSPECIFIED => 'TIME_PART_UNSPECIFIED',
        self::YEAR => 'YEAR',
        self::MONTH => 'MONTH',
        self::DAY_OF_MONTH => 'DAY_OF_MONTH',
        self::DAY_OF_WEEK => 'DAY_OF_WEEK',
        self::WEEK_OF_YEAR => 'WEEK_OF_YEAR',
        self::HOUR_OF_DAY => 'HOUR_OF_DAY',
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
class_alias(TimePart::class, \Google\Cloud\Dlp\V2\TimePartConfig_TimePart::class);

