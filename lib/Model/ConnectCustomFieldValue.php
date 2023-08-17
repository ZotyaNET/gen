<?php
/**
 * ConnectCustomFieldValue
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
 * ConnectCustomFieldValue Class Doc Comment
 *
 * @category Class
 * @description A list of custom field details.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConnectCustomFieldValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectCustomFieldValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_type' => 'string',
        'field_id' => 'int',
        'issue_id' => 'int',
        'number' => 'float',
        'option_id' => 'string',
        'rich_text' => 'string',
        'string' => 'string',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_type' => null,
        'field_id' => null,
        'issue_id' => null,
        'number' => null,
        'option_id' => null,
        'rich_text' => null,
        'string' => null,
        'text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_type' => false,
		'field_id' => false,
		'issue_id' => false,
		'number' => false,
		'option_id' => false,
		'rich_text' => false,
		'string' => false,
		'text' => false
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
        '_type' => '_type',
        'field_id' => 'fieldID',
        'issue_id' => 'issueID',
        'number' => 'number',
        'option_id' => 'optionID',
        'rich_text' => 'richText',
        'string' => 'string',
        'text' => 'text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_type' => 'setType',
        'field_id' => 'setFieldId',
        'issue_id' => 'setIssueId',
        'number' => 'setNumber',
        'option_id' => 'setOptionId',
        'rich_text' => 'setRichText',
        'string' => 'setString',
        'text' => 'setText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_type' => 'getType',
        'field_id' => 'getFieldId',
        'issue_id' => 'getIssueId',
        'number' => 'getNumber',
        'option_id' => 'getOptionId',
        'rich_text' => 'getRichText',
        'string' => 'getString',
        'text' => 'getText'
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

    public const _TYPE_STRING_ISSUE_FIELD = 'StringIssueField';
    public const _TYPE_NUMBER_ISSUE_FIELD = 'NumberIssueField';
    public const _TYPE_RICH_TEXT_ISSUE_FIELD = 'RichTextIssueField';
    public const _TYPE_SINGLE_SELECT_ISSUE_FIELD = 'SingleSelectIssueField';
    public const _TYPE_MULTI_SELECT_ISSUE_FIELD = 'MultiSelectIssueField';
    public const _TYPE_TEXT_ISSUE_FIELD = 'TextIssueField';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::_TYPE_STRING_ISSUE_FIELD,
            self::_TYPE_NUMBER_ISSUE_FIELD,
            self::_TYPE_RICH_TEXT_ISSUE_FIELD,
            self::_TYPE_SINGLE_SELECT_ISSUE_FIELD,
            self::_TYPE_MULTI_SELECT_ISSUE_FIELD,
            self::_TYPE_TEXT_ISSUE_FIELD,
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
        $this->setIfExists('_type', $data ?? [], null);
        $this->setIfExists('field_id', $data ?? [], null);
        $this->setIfExists('issue_id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('option_id', $data ?? [], null);
        $this->setIfExists('rich_text', $data ?? [], null);
        $this->setIfExists('string', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
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

        if ($this->container['_type'] === null) {
            $invalidProperties[] = "'_type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['_type']) && !in_array($this->container['_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for '_type', must be one of '%s'",
                $this->container['_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['field_id'] === null) {
            $invalidProperties[] = "'field_id' can't be null";
        }
        if ($this->container['issue_id'] === null) {
            $invalidProperties[] = "'issue_id' can't be null";
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
     * Gets _type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['_type'];
    }

    /**
     * Sets _type
     *
     * @param string $_type The type of custom field.
     *
     * @return self
     */
    public function setType($_type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for '_type', must be one of '%s'",
                    $_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($_type)) {
            throw new \InvalidArgumentException('non-nullable _type cannot be null');
        }

        $this->container['_type'] = $_type;

        return $this;
    }

    /**
     * Gets field_id
     *
     * @return int
     */
    public function getFieldId()
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id
     *
     * @param int $field_id The custom field ID.
     *
     * @return self
     */
    public function setFieldId($field_id)
    {

        if (is_null($field_id)) {
            throw new \InvalidArgumentException('non-nullable field_id cannot be null');
        }

        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets issue_id
     *
     * @return int
     */
    public function getIssueId()
    {
        return $this->container['issue_id'];
    }

    /**
     * Sets issue_id
     *
     * @param int $issue_id The issue ID.
     *
     * @return self
     */
    public function setIssueId($issue_id)
    {

        if (is_null($issue_id)) {
            throw new \InvalidArgumentException('non-nullable issue_id cannot be null');
        }

        $this->container['issue_id'] = $issue_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return float|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param float|null $number The value of number type custom field when `_type` is `NumberIssueField`.
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
     * Gets option_id
     *
     * @return string|null
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     *
     * @param string|null $option_id The value of single select and multiselect custom field type when `_type` is `SingleSelectIssueField` or `MultiSelectIssueField`.
     *
     * @return self
     */
    public function setOptionId($option_id)
    {

        if (is_null($option_id)) {
            throw new \InvalidArgumentException('non-nullable option_id cannot be null');
        }

        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets rich_text
     *
     * @return string|null
     */
    public function getRichText()
    {
        return $this->container['rich_text'];
    }

    /**
     * Sets rich_text
     *
     * @param string|null $rich_text The value of richText type custom field when `_type` is `RichTextIssueField`.
     *
     * @return self
     */
    public function setRichText($rich_text)
    {

        if (is_null($rich_text)) {
            throw new \InvalidArgumentException('non-nullable rich_text cannot be null');
        }

        $this->container['rich_text'] = $rich_text;

        return $this;
    }

    /**
     * Gets string
     *
     * @return string|null
     */
    public function getString()
    {
        return $this->container['string'];
    }

    /**
     * Sets string
     *
     * @param string|null $string The value of string type custom field when `_type` is `StringIssueField`.
     *
     * @return self
     */
    public function setString($string)
    {

        if (is_null($string)) {
            throw new \InvalidArgumentException('non-nullable string cannot be null');
        }

        $this->container['string'] = $string;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The value of of text custom field type when `_type` is `TextIssueField`.
     *
     * @return self
     */
    public function setText($text)
    {

        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }

        $this->container['text'] = $text;

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


