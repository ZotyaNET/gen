<?php
/**
 * JsonNode
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
 * JsonNode Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JsonNode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JsonNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'array' => 'bool',
        'big_decimal' => 'bool',
        'big_integer' => 'bool',
        'big_integer_value' => 'int',
        'binary' => 'bool',
        'binary_value' => 'string[]',
        'boolean' => 'bool',
        'boolean_value' => 'bool',
        'container_node' => 'bool',
        'decimal_value' => 'float',
        'double' => 'bool',
        'double_value' => 'float',
        'elements' => 'object',
        'field_names' => 'object',
        'fields' => 'object',
        'floating_point_number' => 'bool',
        'int' => 'bool',
        'int_value' => 'int',
        'integral_number' => 'bool',
        'long' => 'bool',
        'long_value' => 'int',
        'missing_node' => 'bool',
        'null' => 'bool',
        'number' => 'bool',
        'number_type' => 'string',
        'number_value' => 'float',
        'object' => 'bool',
        'pojo' => 'bool',
        'text_value' => 'string',
        'textual' => 'bool',
        'value_as_boolean' => 'bool',
        'value_as_double' => 'float',
        'value_as_int' => 'int',
        'value_as_long' => 'int',
        'value_as_text' => 'string',
        'value_node' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'array' => null,
        'big_decimal' => null,
        'big_integer' => null,
        'big_integer_value' => null,
        'binary' => null,
        'binary_value' => 'byte',
        'boolean' => null,
        'boolean_value' => null,
        'container_node' => null,
        'decimal_value' => null,
        'double' => null,
        'double_value' => 'double',
        'elements' => null,
        'field_names' => null,
        'fields' => null,
        'floating_point_number' => null,
        'int' => null,
        'int_value' => 'int32',
        'integral_number' => null,
        'long' => null,
        'long_value' => 'int64',
        'missing_node' => null,
        'null' => null,
        'number' => null,
        'number_type' => null,
        'number_value' => null,
        'object' => null,
        'pojo' => null,
        'text_value' => null,
        'textual' => null,
        'value_as_boolean' => null,
        'value_as_double' => 'double',
        'value_as_int' => 'int32',
        'value_as_long' => 'int64',
        'value_as_text' => null,
        'value_node' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'array' => false,
		'big_decimal' => false,
		'big_integer' => false,
		'big_integer_value' => false,
		'binary' => false,
		'binary_value' => false,
		'boolean' => false,
		'boolean_value' => false,
		'container_node' => false,
		'decimal_value' => false,
		'double' => false,
		'double_value' => false,
		'elements' => false,
		'field_names' => false,
		'fields' => false,
		'floating_point_number' => false,
		'int' => false,
		'int_value' => false,
		'integral_number' => false,
		'long' => false,
		'long_value' => false,
		'missing_node' => false,
		'null' => false,
		'number' => false,
		'number_type' => false,
		'number_value' => false,
		'object' => false,
		'pojo' => false,
		'text_value' => false,
		'textual' => false,
		'value_as_boolean' => false,
		'value_as_double' => false,
		'value_as_int' => false,
		'value_as_long' => false,
		'value_as_text' => false,
		'value_node' => false
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
        'array' => 'array',
        'big_decimal' => 'bigDecimal',
        'big_integer' => 'bigInteger',
        'big_integer_value' => 'bigIntegerValue',
        'binary' => 'binary',
        'binary_value' => 'binaryValue',
        'boolean' => 'boolean',
        'boolean_value' => 'booleanValue',
        'container_node' => 'containerNode',
        'decimal_value' => 'decimalValue',
        'double' => 'double',
        'double_value' => 'doubleValue',
        'elements' => 'elements',
        'field_names' => 'fieldNames',
        'fields' => 'fields',
        'floating_point_number' => 'floatingPointNumber',
        'int' => 'int',
        'int_value' => 'intValue',
        'integral_number' => 'integralNumber',
        'long' => 'long',
        'long_value' => 'longValue',
        'missing_node' => 'missingNode',
        'null' => 'null',
        'number' => 'number',
        'number_type' => 'numberType',
        'number_value' => 'numberValue',
        'object' => 'object',
        'pojo' => 'pojo',
        'text_value' => 'textValue',
        'textual' => 'textual',
        'value_as_boolean' => 'valueAsBoolean',
        'value_as_double' => 'valueAsDouble',
        'value_as_int' => 'valueAsInt',
        'value_as_long' => 'valueAsLong',
        'value_as_text' => 'valueAsText',
        'value_node' => 'valueNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'array' => 'setArray',
        'big_decimal' => 'setBigDecimal',
        'big_integer' => 'setBigInteger',
        'big_integer_value' => 'setBigIntegerValue',
        'binary' => 'setBinary',
        'binary_value' => 'setBinaryValue',
        'boolean' => 'setBoolean',
        'boolean_value' => 'setBooleanValue',
        'container_node' => 'setContainerNode',
        'decimal_value' => 'setDecimalValue',
        'double' => 'setDouble',
        'double_value' => 'setDoubleValue',
        'elements' => 'setElements',
        'field_names' => 'setFieldNames',
        'fields' => 'setFields',
        'floating_point_number' => 'setFloatingPointNumber',
        'int' => 'setInt',
        'int_value' => 'setIntValue',
        'integral_number' => 'setIntegralNumber',
        'long' => 'setLong',
        'long_value' => 'setLongValue',
        'missing_node' => 'setMissingNode',
        'null' => 'setNull',
        'number' => 'setNumber',
        'number_type' => 'setNumberType',
        'number_value' => 'setNumberValue',
        'object' => 'setObject',
        'pojo' => 'setPojo',
        'text_value' => 'setTextValue',
        'textual' => 'setTextual',
        'value_as_boolean' => 'setValueAsBoolean',
        'value_as_double' => 'setValueAsDouble',
        'value_as_int' => 'setValueAsInt',
        'value_as_long' => 'setValueAsLong',
        'value_as_text' => 'setValueAsText',
        'value_node' => 'setValueNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'array' => 'getArray',
        'big_decimal' => 'getBigDecimal',
        'big_integer' => 'getBigInteger',
        'big_integer_value' => 'getBigIntegerValue',
        'binary' => 'getBinary',
        'binary_value' => 'getBinaryValue',
        'boolean' => 'getBoolean',
        'boolean_value' => 'getBooleanValue',
        'container_node' => 'getContainerNode',
        'decimal_value' => 'getDecimalValue',
        'double' => 'getDouble',
        'double_value' => 'getDoubleValue',
        'elements' => 'getElements',
        'field_names' => 'getFieldNames',
        'fields' => 'getFields',
        'floating_point_number' => 'getFloatingPointNumber',
        'int' => 'getInt',
        'int_value' => 'getIntValue',
        'integral_number' => 'getIntegralNumber',
        'long' => 'getLong',
        'long_value' => 'getLongValue',
        'missing_node' => 'getMissingNode',
        'null' => 'getNull',
        'number' => 'getNumber',
        'number_type' => 'getNumberType',
        'number_value' => 'getNumberValue',
        'object' => 'getObject',
        'pojo' => 'getPojo',
        'text_value' => 'getTextValue',
        'textual' => 'getTextual',
        'value_as_boolean' => 'getValueAsBoolean',
        'value_as_double' => 'getValueAsDouble',
        'value_as_int' => 'getValueAsInt',
        'value_as_long' => 'getValueAsLong',
        'value_as_text' => 'getValueAsText',
        'value_node' => 'getValueNode'
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

    public const NUMBER_TYPE_INT = 'INT';
    public const NUMBER_TYPE_LONG = 'LONG';
    public const NUMBER_TYPE_BIG_INTEGER = 'BIG_INTEGER';
    public const NUMBER_TYPE_FLOAT = 'FLOAT';
    public const NUMBER_TYPE_DOUBLE = 'DOUBLE';
    public const NUMBER_TYPE_BIG_DECIMAL = 'BIG_DECIMAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberTypeAllowableValues()
    {
        return [
            self::NUMBER_TYPE_INT,
            self::NUMBER_TYPE_LONG,
            self::NUMBER_TYPE_BIG_INTEGER,
            self::NUMBER_TYPE_FLOAT,
            self::NUMBER_TYPE_DOUBLE,
            self::NUMBER_TYPE_BIG_DECIMAL,
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
        $this->setIfExists('array', $data ?? [], null);
        $this->setIfExists('big_decimal', $data ?? [], null);
        $this->setIfExists('big_integer', $data ?? [], null);
        $this->setIfExists('big_integer_value', $data ?? [], null);
        $this->setIfExists('binary', $data ?? [], null);
        $this->setIfExists('binary_value', $data ?? [], null);
        $this->setIfExists('boolean', $data ?? [], null);
        $this->setIfExists('boolean_value', $data ?? [], null);
        $this->setIfExists('container_node', $data ?? [], null);
        $this->setIfExists('decimal_value', $data ?? [], null);
        $this->setIfExists('double', $data ?? [], null);
        $this->setIfExists('double_value', $data ?? [], null);
        $this->setIfExists('elements', $data ?? [], null);
        $this->setIfExists('field_names', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('floating_point_number', $data ?? [], null);
        $this->setIfExists('int', $data ?? [], null);
        $this->setIfExists('int_value', $data ?? [], null);
        $this->setIfExists('integral_number', $data ?? [], null);
        $this->setIfExists('long', $data ?? [], null);
        $this->setIfExists('long_value', $data ?? [], null);
        $this->setIfExists('missing_node', $data ?? [], null);
        $this->setIfExists('null', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('number_type', $data ?? [], null);
        $this->setIfExists('number_value', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('pojo', $data ?? [], null);
        $this->setIfExists('text_value', $data ?? [], null);
        $this->setIfExists('textual', $data ?? [], null);
        $this->setIfExists('value_as_boolean', $data ?? [], null);
        $this->setIfExists('value_as_double', $data ?? [], null);
        $this->setIfExists('value_as_int', $data ?? [], null);
        $this->setIfExists('value_as_long', $data ?? [], null);
        $this->setIfExists('value_as_text', $data ?? [], null);
        $this->setIfExists('value_node', $data ?? [], null);
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

        $allowedValues = $this->getNumberTypeAllowableValues();
        if (!is_null($this->container['number_type']) && !in_array($this->container['number_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'number_type', must be one of '%s'",
                $this->container['number_type'],
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
     * Gets array
     *
     * @return bool|null
     */
    public function getArray()
    {
        return $this->container['array'];
    }

    /**
     * Sets array
     *
     * @param bool|null $array array
     *
     * @return self
     */
    public function setArray($array)
    {

        if (is_null($array)) {
            throw new \InvalidArgumentException('non-nullable array cannot be null');
        }

        $this->container['array'] = $array;

        return $this;
    }

    /**
     * Gets big_decimal
     *
     * @return bool|null
     */
    public function getBigDecimal()
    {
        return $this->container['big_decimal'];
    }

    /**
     * Sets big_decimal
     *
     * @param bool|null $big_decimal big_decimal
     *
     * @return self
     */
    public function setBigDecimal($big_decimal)
    {

        if (is_null($big_decimal)) {
            throw new \InvalidArgumentException('non-nullable big_decimal cannot be null');
        }

        $this->container['big_decimal'] = $big_decimal;

        return $this;
    }

    /**
     * Gets big_integer
     *
     * @return bool|null
     */
    public function getBigInteger()
    {
        return $this->container['big_integer'];
    }

    /**
     * Sets big_integer
     *
     * @param bool|null $big_integer big_integer
     *
     * @return self
     */
    public function setBigInteger($big_integer)
    {

        if (is_null($big_integer)) {
            throw new \InvalidArgumentException('non-nullable big_integer cannot be null');
        }

        $this->container['big_integer'] = $big_integer;

        return $this;
    }

    /**
     * Gets big_integer_value
     *
     * @return int|null
     */
    public function getBigIntegerValue()
    {
        return $this->container['big_integer_value'];
    }

    /**
     * Sets big_integer_value
     *
     * @param int|null $big_integer_value big_integer_value
     *
     * @return self
     */
    public function setBigIntegerValue($big_integer_value)
    {

        if (is_null($big_integer_value)) {
            throw new \InvalidArgumentException('non-nullable big_integer_value cannot be null');
        }

        $this->container['big_integer_value'] = $big_integer_value;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return bool|null
     */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param bool|null $binary binary
     *
     * @return self
     */
    public function setBinary($binary)
    {

        if (is_null($binary)) {
            throw new \InvalidArgumentException('non-nullable binary cannot be null');
        }

        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets binary_value
     *
     * @return string[]|null
     */
    public function getBinaryValue()
    {
        return $this->container['binary_value'];
    }

    /**
     * Sets binary_value
     *
     * @param string[]|null $binary_value binary_value
     *
     * @return self
     */
    public function setBinaryValue($binary_value)
    {

        if (is_null($binary_value)) {
            throw new \InvalidArgumentException('non-nullable binary_value cannot be null');
        }

        $this->container['binary_value'] = $binary_value;

        return $this;
    }

    /**
     * Gets boolean
     *
     * @return bool|null
     */
    public function getBoolean()
    {
        return $this->container['boolean'];
    }

    /**
     * Sets boolean
     *
     * @param bool|null $boolean boolean
     *
     * @return self
     */
    public function setBoolean($boolean)
    {

        if (is_null($boolean)) {
            throw new \InvalidArgumentException('non-nullable boolean cannot be null');
        }

        $this->container['boolean'] = $boolean;

        return $this;
    }

    /**
     * Gets boolean_value
     *
     * @return bool|null
     */
    public function getBooleanValue()
    {
        return $this->container['boolean_value'];
    }

    /**
     * Sets boolean_value
     *
     * @param bool|null $boolean_value boolean_value
     *
     * @return self
     */
    public function setBooleanValue($boolean_value)
    {

        if (is_null($boolean_value)) {
            throw new \InvalidArgumentException('non-nullable boolean_value cannot be null');
        }

        $this->container['boolean_value'] = $boolean_value;

        return $this;
    }

    /**
     * Gets container_node
     *
     * @return bool|null
     */
    public function getContainerNode()
    {
        return $this->container['container_node'];
    }

    /**
     * Sets container_node
     *
     * @param bool|null $container_node container_node
     *
     * @return self
     */
    public function setContainerNode($container_node)
    {

        if (is_null($container_node)) {
            throw new \InvalidArgumentException('non-nullable container_node cannot be null');
        }

        $this->container['container_node'] = $container_node;

        return $this;
    }

    /**
     * Gets decimal_value
     *
     * @return float|null
     */
    public function getDecimalValue()
    {
        return $this->container['decimal_value'];
    }

    /**
     * Sets decimal_value
     *
     * @param float|null $decimal_value decimal_value
     *
     * @return self
     */
    public function setDecimalValue($decimal_value)
    {

        if (is_null($decimal_value)) {
            throw new \InvalidArgumentException('non-nullable decimal_value cannot be null');
        }

        $this->container['decimal_value'] = $decimal_value;

        return $this;
    }

    /**
     * Gets double
     *
     * @return bool|null
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param bool|null $double double
     *
     * @return self
     */
    public function setDouble($double)
    {

        if (is_null($double)) {
            throw new \InvalidArgumentException('non-nullable double cannot be null');
        }

        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets double_value
     *
     * @return float|null
     */
    public function getDoubleValue()
    {
        return $this->container['double_value'];
    }

    /**
     * Sets double_value
     *
     * @param float|null $double_value double_value
     *
     * @return self
     */
    public function setDoubleValue($double_value)
    {

        if (is_null($double_value)) {
            throw new \InvalidArgumentException('non-nullable double_value cannot be null');
        }

        $this->container['double_value'] = $double_value;

        return $this;
    }

    /**
     * Gets elements
     *
     * @return object|null
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     *
     * @param object|null $elements elements
     *
     * @return self
     */
    public function setElements($elements)
    {

        if (is_null($elements)) {
            throw new \InvalidArgumentException('non-nullable elements cannot be null');
        }

        $this->container['elements'] = $elements;

        return $this;
    }

    /**
     * Gets field_names
     *
     * @return object|null
     */
    public function getFieldNames()
    {
        return $this->container['field_names'];
    }

    /**
     * Sets field_names
     *
     * @param object|null $field_names field_names
     *
     * @return self
     */
    public function setFieldNames($field_names)
    {

        if (is_null($field_names)) {
            throw new \InvalidArgumentException('non-nullable field_names cannot be null');
        }

        $this->container['field_names'] = $field_names;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return object|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {

        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }

        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets floating_point_number
     *
     * @return bool|null
     */
    public function getFloatingPointNumber()
    {
        return $this->container['floating_point_number'];
    }

    /**
     * Sets floating_point_number
     *
     * @param bool|null $floating_point_number floating_point_number
     *
     * @return self
     */
    public function setFloatingPointNumber($floating_point_number)
    {

        if (is_null($floating_point_number)) {
            throw new \InvalidArgumentException('non-nullable floating_point_number cannot be null');
        }

        $this->container['floating_point_number'] = $floating_point_number;

        return $this;
    }

    /**
     * Gets int
     *
     * @return bool|null
     */
    public function getInt()
    {
        return $this->container['int'];
    }

    /**
     * Sets int
     *
     * @param bool|null $int int
     *
     * @return self
     */
    public function setInt($int)
    {

        if (is_null($int)) {
            throw new \InvalidArgumentException('non-nullable int cannot be null');
        }

        $this->container['int'] = $int;

        return $this;
    }

    /**
     * Gets int_value
     *
     * @return int|null
     */
    public function getIntValue()
    {
        return $this->container['int_value'];
    }

    /**
     * Sets int_value
     *
     * @param int|null $int_value int_value
     *
     * @return self
     */
    public function setIntValue($int_value)
    {

        if (is_null($int_value)) {
            throw new \InvalidArgumentException('non-nullable int_value cannot be null');
        }

        $this->container['int_value'] = $int_value;

        return $this;
    }

    /**
     * Gets integral_number
     *
     * @return bool|null
     */
    public function getIntegralNumber()
    {
        return $this->container['integral_number'];
    }

    /**
     * Sets integral_number
     *
     * @param bool|null $integral_number integral_number
     *
     * @return self
     */
    public function setIntegralNumber($integral_number)
    {

        if (is_null($integral_number)) {
            throw new \InvalidArgumentException('non-nullable integral_number cannot be null');
        }

        $this->container['integral_number'] = $integral_number;

        return $this;
    }

    /**
     * Gets long
     *
     * @return bool|null
     */
    public function getLong()
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param bool|null $long long
     *
     * @return self
     */
    public function setLong($long)
    {

        if (is_null($long)) {
            throw new \InvalidArgumentException('non-nullable long cannot be null');
        }

        $this->container['long'] = $long;

        return $this;
    }

    /**
     * Gets long_value
     *
     * @return int|null
     */
    public function getLongValue()
    {
        return $this->container['long_value'];
    }

    /**
     * Sets long_value
     *
     * @param int|null $long_value long_value
     *
     * @return self
     */
    public function setLongValue($long_value)
    {

        if (is_null($long_value)) {
            throw new \InvalidArgumentException('non-nullable long_value cannot be null');
        }

        $this->container['long_value'] = $long_value;

        return $this;
    }

    /**
     * Gets missing_node
     *
     * @return bool|null
     */
    public function getMissingNode()
    {
        return $this->container['missing_node'];
    }

    /**
     * Sets missing_node
     *
     * @param bool|null $missing_node missing_node
     *
     * @return self
     */
    public function setMissingNode($missing_node)
    {

        if (is_null($missing_node)) {
            throw new \InvalidArgumentException('non-nullable missing_node cannot be null');
        }

        $this->container['missing_node'] = $missing_node;

        return $this;
    }

    /**
     * Gets null
     *
     * @return bool|null
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param bool|null $null null
     *
     * @return self
     */
    public function setNull($null)
    {

        if (is_null($null)) {
            throw new \InvalidArgumentException('non-nullable null cannot be null');
        }

        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets number
     *
     * @return bool|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param bool|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {

        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_type
     *
     * @return string|null
     */
    public function getNumberType()
    {
        return $this->container['number_type'];
    }

    /**
     * Sets number_type
     *
     * @param string|null $number_type number_type
     *
     * @return self
     */
    public function setNumberType($number_type)
    {
        $allowedValues = $this->getNumberTypeAllowableValues();
        if (!is_null($number_type) && !in_array($number_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'number_type', must be one of '%s'",
                    $number_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($number_type)) {
            throw new \InvalidArgumentException('non-nullable number_type cannot be null');
        }

        $this->container['number_type'] = $number_type;

        return $this;
    }

    /**
     * Gets number_value
     *
     * @return float|null
     */
    public function getNumberValue()
    {
        return $this->container['number_value'];
    }

    /**
     * Sets number_value
     *
     * @param float|null $number_value number_value
     *
     * @return self
     */
    public function setNumberValue($number_value)
    {

        if (is_null($number_value)) {
            throw new \InvalidArgumentException('non-nullable number_value cannot be null');
        }

        $this->container['number_value'] = $number_value;

        return $this;
    }

    /**
     * Gets object
     *
     * @return bool|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param bool|null $object object
     *
     * @return self
     */
    public function setObject($object)
    {

        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }

        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets pojo
     *
     * @return bool|null
     */
    public function getPojo()
    {
        return $this->container['pojo'];
    }

    /**
     * Sets pojo
     *
     * @param bool|null $pojo pojo
     *
     * @return self
     */
    public function setPojo($pojo)
    {

        if (is_null($pojo)) {
            throw new \InvalidArgumentException('non-nullable pojo cannot be null');
        }

        $this->container['pojo'] = $pojo;

        return $this;
    }

    /**
     * Gets text_value
     *
     * @return string|null
     */
    public function getTextValue()
    {
        return $this->container['text_value'];
    }

    /**
     * Sets text_value
     *
     * @param string|null $text_value text_value
     *
     * @return self
     */
    public function setTextValue($text_value)
    {

        if (is_null($text_value)) {
            throw new \InvalidArgumentException('non-nullable text_value cannot be null');
        }

        $this->container['text_value'] = $text_value;

        return $this;
    }

    /**
     * Gets textual
     *
     * @return bool|null
     */
    public function getTextual()
    {
        return $this->container['textual'];
    }

    /**
     * Sets textual
     *
     * @param bool|null $textual textual
     *
     * @return self
     */
    public function setTextual($textual)
    {

        if (is_null($textual)) {
            throw new \InvalidArgumentException('non-nullable textual cannot be null');
        }

        $this->container['textual'] = $textual;

        return $this;
    }

    /**
     * Gets value_as_boolean
     *
     * @return bool|null
     */
    public function getValueAsBoolean()
    {
        return $this->container['value_as_boolean'];
    }

    /**
     * Sets value_as_boolean
     *
     * @param bool|null $value_as_boolean value_as_boolean
     *
     * @return self
     */
    public function setValueAsBoolean($value_as_boolean)
    {

        if (is_null($value_as_boolean)) {
            throw new \InvalidArgumentException('non-nullable value_as_boolean cannot be null');
        }

        $this->container['value_as_boolean'] = $value_as_boolean;

        return $this;
    }

    /**
     * Gets value_as_double
     *
     * @return float|null
     */
    public function getValueAsDouble()
    {
        return $this->container['value_as_double'];
    }

    /**
     * Sets value_as_double
     *
     * @param float|null $value_as_double value_as_double
     *
     * @return self
     */
    public function setValueAsDouble($value_as_double)
    {

        if (is_null($value_as_double)) {
            throw new \InvalidArgumentException('non-nullable value_as_double cannot be null');
        }

        $this->container['value_as_double'] = $value_as_double;

        return $this;
    }

    /**
     * Gets value_as_int
     *
     * @return int|null
     */
    public function getValueAsInt()
    {
        return $this->container['value_as_int'];
    }

    /**
     * Sets value_as_int
     *
     * @param int|null $value_as_int value_as_int
     *
     * @return self
     */
    public function setValueAsInt($value_as_int)
    {

        if (is_null($value_as_int)) {
            throw new \InvalidArgumentException('non-nullable value_as_int cannot be null');
        }

        $this->container['value_as_int'] = $value_as_int;

        return $this;
    }

    /**
     * Gets value_as_long
     *
     * @return int|null
     */
    public function getValueAsLong()
    {
        return $this->container['value_as_long'];
    }

    /**
     * Sets value_as_long
     *
     * @param int|null $value_as_long value_as_long
     *
     * @return self
     */
    public function setValueAsLong($value_as_long)
    {

        if (is_null($value_as_long)) {
            throw new \InvalidArgumentException('non-nullable value_as_long cannot be null');
        }

        $this->container['value_as_long'] = $value_as_long;

        return $this;
    }

    /**
     * Gets value_as_text
     *
     * @return string|null
     */
    public function getValueAsText()
    {
        return $this->container['value_as_text'];
    }

    /**
     * Sets value_as_text
     *
     * @param string|null $value_as_text value_as_text
     *
     * @return self
     */
    public function setValueAsText($value_as_text)
    {

        if (is_null($value_as_text)) {
            throw new \InvalidArgumentException('non-nullable value_as_text cannot be null');
        }

        $this->container['value_as_text'] = $value_as_text;

        return $this;
    }

    /**
     * Gets value_node
     *
     * @return bool|null
     */
    public function getValueNode()
    {
        return $this->container['value_node'];
    }

    /**
     * Sets value_node
     *
     * @param bool|null $value_node value_node
     *
     * @return self
     */
    public function setValueNode($value_node)
    {

        if (is_null($value_node)) {
            throw new \InvalidArgumentException('non-nullable value_node cannot be null');
        }

        $this->container['value_node'] = $value_node;

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


