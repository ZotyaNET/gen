<?php
/**
 * UpdatePriorityDetails
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
 * UpdatePriorityDetails Class Doc Comment
 *
 * @category Class
 * @description Details of an issue priority.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdatePriorityDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePriorityDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'icon_url' => 'string',
        'name' => 'string',
        'status_color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'icon_url' => null,
        'name' => null,
        'status_color' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'icon_url' => false,
		'name' => false,
		'status_color' => false
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
        'description' => 'description',
        'icon_url' => 'iconUrl',
        'name' => 'name',
        'status_color' => 'statusColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'icon_url' => 'setIconUrl',
        'name' => 'setName',
        'status_color' => 'setStatusColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'icon_url' => 'getIconUrl',
        'name' => 'getName',
        'status_color' => 'getStatusColor'
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

    public const ICON_URL_BLOCKER_PNG = '/images/icons/priorities/blocker.png';
    public const ICON_URL_CRITICAL_PNG = '/images/icons/priorities/critical.png';
    public const ICON_URL_HIGH_PNG = '/images/icons/priorities/high.png';
    public const ICON_URL_HIGHEST_PNG = '/images/icons/priorities/highest.png';
    public const ICON_URL_LOW_PNG = '/images/icons/priorities/low.png';
    public const ICON_URL_LOWEST_PNG = '/images/icons/priorities/lowest.png';
    public const ICON_URL_MAJOR_PNG = '/images/icons/priorities/major.png';
    public const ICON_URL_MEDIUM_PNG = '/images/icons/priorities/medium.png';
    public const ICON_URL_MINOR_PNG = '/images/icons/priorities/minor.png';
    public const ICON_URL_TRIVIAL_PNG = '/images/icons/priorities/trivial.png';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIconUrlAllowableValues()
    {
        return [
            self::ICON_URL_BLOCKER_PNG,
            self::ICON_URL_CRITICAL_PNG,
            self::ICON_URL_HIGH_PNG,
            self::ICON_URL_HIGHEST_PNG,
            self::ICON_URL_LOW_PNG,
            self::ICON_URL_LOWEST_PNG,
            self::ICON_URL_MAJOR_PNG,
            self::ICON_URL_MEDIUM_PNG,
            self::ICON_URL_MINOR_PNG,
            self::ICON_URL_TRIVIAL_PNG,
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('icon_url', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status_color', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getIconUrlAllowableValues();
        if (!is_null($this->container['icon_url']) && !in_array($this->container['icon_url'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'icon_url', must be one of '%s'",
                $this->container['icon_url'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['icon_url']) && (mb_strlen($this->container['icon_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'icon_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 60)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the priority.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling UpdatePriorityDetails., must be smaller than or equal to 255.');
        }


        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url The URL of an icon for the priority. Accepted protocols are HTTP and HTTPS. Built in icons can also be used.
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        $allowedValues = $this->getIconUrlAllowableValues();
        if (!is_null($icon_url) && !in_array($icon_url, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'icon_url', must be one of '%s'",
                    $icon_url,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($icon_url) && (mb_strlen($icon_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $icon_url when calling UpdatePriorityDetails., must be smaller than or equal to 255.');
        }


        if (is_null($icon_url)) {
            throw new \InvalidArgumentException('non-nullable icon_url cannot be null');
        }

        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the priority. Must be unique.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdatePriorityDetails., must be smaller than or equal to 60.');
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status_color
     *
     * @return string|null
     */
    public function getStatusColor()
    {
        return $this->container['status_color'];
    }

    /**
     * Sets status_color
     *
     * @param string|null $status_color The status color of the priority in 3-digit or 6-digit hexadecimal format.
     *
     * @return self
     */
    public function setStatusColor($status_color)
    {

        if (is_null($status_color)) {
            throw new \InvalidArgumentException('non-nullable status_color cannot be null');
        }

        $this->container['status_color'] = $status_color;

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


