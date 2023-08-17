<?php
/**
 * DeleteAndReplaceVersionBean
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
 * DeleteAndReplaceVersionBean Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeleteAndReplaceVersionBean implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeleteAndReplaceVersionBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_field_replacement_list' => '\OpenAPI\Client\Model\CustomFieldReplacement[]',
        'move_affected_issues_to' => 'int',
        'move_fix_issues_to' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_field_replacement_list' => null,
        'move_affected_issues_to' => 'int64',
        'move_fix_issues_to' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_field_replacement_list' => false,
		'move_affected_issues_to' => false,
		'move_fix_issues_to' => false
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
        'custom_field_replacement_list' => 'customFieldReplacementList',
        'move_affected_issues_to' => 'moveAffectedIssuesTo',
        'move_fix_issues_to' => 'moveFixIssuesTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_field_replacement_list' => 'setCustomFieldReplacementList',
        'move_affected_issues_to' => 'setMoveAffectedIssuesTo',
        'move_fix_issues_to' => 'setMoveFixIssuesTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_field_replacement_list' => 'getCustomFieldReplacementList',
        'move_affected_issues_to' => 'getMoveAffectedIssuesTo',
        'move_fix_issues_to' => 'getMoveFixIssuesTo'
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
        $this->setIfExists('custom_field_replacement_list', $data ?? [], null);
        $this->setIfExists('move_affected_issues_to', $data ?? [], null);
        $this->setIfExists('move_fix_issues_to', $data ?? [], null);
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
     * Gets custom_field_replacement_list
     *
     * @return \OpenAPI\Client\Model\CustomFieldReplacement[]|null
     */
    public function getCustomFieldReplacementList()
    {
        return $this->container['custom_field_replacement_list'];
    }

    /**
     * Sets custom_field_replacement_list
     *
     * @param \OpenAPI\Client\Model\CustomFieldReplacement[]|null $custom_field_replacement_list An array of custom field IDs (`customFieldId`) and version IDs (`moveTo`) to update when the fields contain the deleted version.
     *
     * @return self
     */
    public function setCustomFieldReplacementList($custom_field_replacement_list)
    {

        if (is_null($custom_field_replacement_list)) {
            throw new \InvalidArgumentException('non-nullable custom_field_replacement_list cannot be null');
        }

        $this->container['custom_field_replacement_list'] = $custom_field_replacement_list;

        return $this;
    }

    /**
     * Gets move_affected_issues_to
     *
     * @return int|null
     */
    public function getMoveAffectedIssuesTo()
    {
        return $this->container['move_affected_issues_to'];
    }

    /**
     * Sets move_affected_issues_to
     *
     * @param int|null $move_affected_issues_to The ID of the version to update `affectedVersion` to when the field contains the deleted version.
     *
     * @return self
     */
    public function setMoveAffectedIssuesTo($move_affected_issues_to)
    {

        if (is_null($move_affected_issues_to)) {
            throw new \InvalidArgumentException('non-nullable move_affected_issues_to cannot be null');
        }

        $this->container['move_affected_issues_to'] = $move_affected_issues_to;

        return $this;
    }

    /**
     * Gets move_fix_issues_to
     *
     * @return int|null
     */
    public function getMoveFixIssuesTo()
    {
        return $this->container['move_fix_issues_to'];
    }

    /**
     * Sets move_fix_issues_to
     *
     * @param int|null $move_fix_issues_to The ID of the version to update `fixVersion` to when the field contains the deleted version.
     *
     * @return self
     */
    public function setMoveFixIssuesTo($move_fix_issues_to)
    {

        if (is_null($move_fix_issues_to)) {
            throw new \InvalidArgumentException('non-nullable move_fix_issues_to cannot be null');
        }

        $this->container['move_fix_issues_to'] = $move_fix_issues_to;

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


