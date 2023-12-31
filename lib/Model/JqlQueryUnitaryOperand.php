<?php
/**
 * JqlQueryUnitaryOperand
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
 * JqlQueryUnitaryOperand Class Doc Comment
 *
 * @category Class
 * @description An operand that can be part of a list operand.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JqlQueryUnitaryOperand implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JqlQueryUnitaryOperand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'encoded_value' => 'string',
        'value' => 'string',
        'arguments' => 'string[]',
        'encoded_operand' => 'string',
        'function' => 'string',
        'keyword' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'encoded_value' => null,
        'value' => null,
        'arguments' => null,
        'encoded_operand' => null,
        'function' => null,
        'keyword' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'encoded_value' => false,
		'value' => false,
		'arguments' => false,
		'encoded_operand' => false,
		'function' => false,
		'keyword' => false
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
        'encoded_value' => 'encodedValue',
        'value' => 'value',
        'arguments' => 'arguments',
        'encoded_operand' => 'encodedOperand',
        'function' => 'function',
        'keyword' => 'keyword'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encoded_value' => 'setEncodedValue',
        'value' => 'setValue',
        'arguments' => 'setArguments',
        'encoded_operand' => 'setEncodedOperand',
        'function' => 'setFunction',
        'keyword' => 'setKeyword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encoded_value' => 'getEncodedValue',
        'value' => 'getValue',
        'arguments' => 'getArguments',
        'encoded_operand' => 'getEncodedOperand',
        'function' => 'getFunction',
        'keyword' => 'getKeyword'
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

    public const KEYWORD__EMPTY = 'empty';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeywordAllowableValues()
    {
        return [
            self::KEYWORD__EMPTY,
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
        $this->setIfExists('encoded_value', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('arguments', $data ?? [], null);
        $this->setIfExists('encoded_operand', $data ?? [], null);
        $this->setIfExists('function', $data ?? [], null);
        $this->setIfExists('keyword', $data ?? [], null);
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

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['arguments'] === null) {
            $invalidProperties[] = "'arguments' can't be null";
        }
        if ($this->container['function'] === null) {
            $invalidProperties[] = "'function' can't be null";
        }
        if ($this->container['keyword'] === null) {
            $invalidProperties[] = "'keyword' can't be null";
        }
        $allowedValues = $this->getKeywordAllowableValues();
        if (!is_null($this->container['keyword']) && !in_array($this->container['keyword'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'keyword', must be one of '%s'",
                $this->container['keyword'],
                implode("', '", $allowedValues)
            );
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
     * Gets encoded_value
     *
     * @return string|null
     */
    public function getEncodedValue()
    {
        return $this->container['encoded_value'];
    }

    /**
     * Sets encoded_value
     *
     * @param string|null $encoded_value Encoded value, which can be used directly in a JQL query.
     *
     * @return self
     */
    public function setEncodedValue($encoded_value)
    {

        if (is_null($encoded_value)) {
            throw new \InvalidArgumentException('non-nullable encoded_value cannot be null');
        }

        $this->container['encoded_value'] = $encoded_value;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The operand value.
     *
     * @return self
     */
    public function setValue($value)
    {

        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets arguments
     *
     * @return string[]
     */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
     * Sets arguments
     *
     * @param string[] $arguments The list of function arguments.
     *
     * @return self
     */
    public function setArguments($arguments)
    {

        if (is_null($arguments)) {
            throw new \InvalidArgumentException('non-nullable arguments cannot be null');
        }

        $this->container['arguments'] = $arguments;

        return $this;
    }

    /**
     * Gets encoded_operand
     *
     * @return string|null
     */
    public function getEncodedOperand()
    {
        return $this->container['encoded_operand'];
    }

    /**
     * Sets encoded_operand
     *
     * @param string|null $encoded_operand Encoded operand, which can be used directly in a JQL query.
     *
     * @return self
     */
    public function setEncodedOperand($encoded_operand)
    {

        if (is_null($encoded_operand)) {
            throw new \InvalidArgumentException('non-nullable encoded_operand cannot be null');
        }

        $this->container['encoded_operand'] = $encoded_operand;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string $function The name of the function.
     *
     * @return self
     */
    public function setFunction($function)
    {

        if (is_null($function)) {
            throw new \InvalidArgumentException('non-nullable function cannot be null');
        }

        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string $keyword The keyword that is the operand value.
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        $allowedValues = $this->getKeywordAllowableValues();
        if (!in_array($keyword, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'keyword', must be one of '%s'",
                    $keyword,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($keyword)) {
            throw new \InvalidArgumentException('non-nullable keyword cannot be null');
        }

        $this->container['keyword'] = $keyword;

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


