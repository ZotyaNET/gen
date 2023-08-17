<?php
/**
 * TimeTrackingConfiguration
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Jira Cloud platform REST API
 *
 * Jira Cloud platform REST API documentation
 *
 * The version of the OpenAPI document: 1001.0.0-SNAPSHOT
 * Contact: ecosystem@atlassian.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TimeTrackingConfiguration Class Doc Comment
 *
 * @category Class
 * @description Details of the time tracking configuration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TimeTrackingConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeTrackingConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_unit' => 'string',
        'time_format' => 'string',
        'working_days_per_week' => 'float',
        'working_hours_per_day' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_unit' => null,
        'time_format' => null,
        'working_days_per_week' => 'double',
        'working_hours_per_day' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_unit' => false,
		'time_format' => false,
		'working_days_per_week' => false,
		'working_hours_per_day' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'default_unit' => 'defaultUnit',
        'time_format' => 'timeFormat',
        'working_days_per_week' => 'workingDaysPerWeek',
        'working_hours_per_day' => 'workingHoursPerDay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_unit' => 'setDefaultUnit',
        'time_format' => 'setTimeFormat',
        'working_days_per_week' => 'setWorkingDaysPerWeek',
        'working_hours_per_day' => 'setWorkingHoursPerDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_unit' => 'getDefaultUnit',
        'time_format' => 'getTimeFormat',
        'working_days_per_week' => 'getWorkingDaysPerWeek',
        'working_hours_per_day' => 'getWorkingHoursPerDay'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const DEFAULT_UNIT_MINUTE = 'minute';
    public const DEFAULT_UNIT_HOUR = 'hour';
    public const DEFAULT_UNIT_DAY = 'day';
    public const DEFAULT_UNIT_WEEK = 'week';
    public const TIME_FORMAT_PRETTY = 'pretty';
    public const TIME_FORMAT_DAYS = 'days';
    public const TIME_FORMAT_HOURS = 'hours';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultUnitAllowableValues()
    {
        return [
            self::DEFAULT_UNIT_MINUTE,
            self::DEFAULT_UNIT_HOUR,
            self::DEFAULT_UNIT_DAY,
            self::DEFAULT_UNIT_WEEK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeFormatAllowableValues()
    {
        return [
            self::TIME_FORMAT_PRETTY,
            self::TIME_FORMAT_DAYS,
            self::TIME_FORMAT_HOURS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('default_unit', $data ?? [], null);
        $this->setIfExists('time_format', $data ?? [], null);
        $this->setIfExists('working_days_per_week', $data ?? [], null);
        $this->setIfExists('working_hours_per_day', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['default_unit'] === null) {
            $invalidProperties[] = "'default_unit' can't be null";
        }
        $allowedValues = $this->getDefaultUnitAllowableValues();
        if (!is_null($this->container['default_unit']) && !in_array($this->container['default_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'default_unit', must be one of '%s'",
                $this->container['default_unit'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['time_format'] === null) {
            $invalidProperties[] = "'time_format' can't be null";
        }
        $allowedValues = $this->getTimeFormatAllowableValues();
        if (!is_null($this->container['time_format']) && !in_array($this->container['time_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'time_format', must be one of '%s'",
                $this->container['time_format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['working_days_per_week'] === null) {
            $invalidProperties[] = "'working_days_per_week' can't be null";
        }
        if ($this->container['working_hours_per_day'] === null) {
            $invalidProperties[] = "'working_hours_per_day' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets default_unit
     *
     * @return string
     */
    public function getDefaultUnit()
    {
        return $this->container['default_unit'];
    }

    /**
     * Sets default_unit
     *
     * @param string $default_unit The default unit of time applied to logged time.
     *
     * @return self
     */
    public function setDefaultUnit($default_unit)
    {
        $allowedValues = $this->getDefaultUnitAllowableValues();
        if (!in_array($default_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'default_unit', must be one of '%s'",
                    $default_unit,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($default_unit)) {
            throw new \InvalidArgumentException('non-nullable default_unit cannot be null');
        }

        $this->container['default_unit'] = $default_unit;

        return $this;
    }

    /**
     * Gets time_format
     *
     * @return string
     */
    public function getTimeFormat()
    {
        return $this->container['time_format'];
    }

    /**
     * Sets time_format
     *
     * @param string $time_format The format that will appear on an issue's *Time Spent* field.
     *
     * @return self
     */
    public function setTimeFormat($time_format)
    {
        $allowedValues = $this->getTimeFormatAllowableValues();
        if (!in_array($time_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'time_format', must be one of '%s'",
                    $time_format,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($time_format)) {
            throw new \InvalidArgumentException('non-nullable time_format cannot be null');
        }

        $this->container['time_format'] = $time_format;

        return $this;
    }

    /**
     * Gets working_days_per_week
     *
     * @return float
     */
    public function getWorkingDaysPerWeek()
    {
        return $this->container['working_days_per_week'];
    }

    /**
     * Sets working_days_per_week
     *
     * @param float $working_days_per_week The number of days in a working week.
     *
     * @return self
     */
    public function setWorkingDaysPerWeek($working_days_per_week)
    {

        if (is_null($working_days_per_week)) {
            throw new \InvalidArgumentException('non-nullable working_days_per_week cannot be null');
        }

        $this->container['working_days_per_week'] = $working_days_per_week;

        return $this;
    }

    /**
     * Gets working_hours_per_day
     *
     * @return float
     */
    public function getWorkingHoursPerDay()
    {
        return $this->container['working_hours_per_day'];
    }

    /**
     * Sets working_hours_per_day
     *
     * @param float $working_hours_per_day The number of hours in a working day.
     *
     * @return self
     */
    public function setWorkingHoursPerDay($working_hours_per_day)
    {

        if (is_null($working_hours_per_day)) {
            throw new \InvalidArgumentException('non-nullable working_hours_per_day cannot be null');
        }

        $this->container['working_hours_per_day'] = $working_hours_per_day;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


