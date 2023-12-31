<?php
/**
 * VersionIssueCounts
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
 * VersionIssueCounts Class Doc Comment
 *
 * @category Class
 * @description Various counts of issues within a version.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VersionIssueCounts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VersionIssueCounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_field_usage' => '\OpenAPI\Client\Model\VersionUsageInCustomField[]',
        'issue_count_with_custom_fields_showing_version' => 'int',
        'issues_affected_count' => 'int',
        'issues_fixed_count' => 'int',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_field_usage' => null,
        'issue_count_with_custom_fields_showing_version' => 'int64',
        'issues_affected_count' => 'int64',
        'issues_fixed_count' => 'int64',
        'self' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_field_usage' => false,
		'issue_count_with_custom_fields_showing_version' => false,
		'issues_affected_count' => false,
		'issues_fixed_count' => false,
		'self' => false
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
        'custom_field_usage' => 'customFieldUsage',
        'issue_count_with_custom_fields_showing_version' => 'issueCountWithCustomFieldsShowingVersion',
        'issues_affected_count' => 'issuesAffectedCount',
        'issues_fixed_count' => 'issuesFixedCount',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_field_usage' => 'setCustomFieldUsage',
        'issue_count_with_custom_fields_showing_version' => 'setIssueCountWithCustomFieldsShowingVersion',
        'issues_affected_count' => 'setIssuesAffectedCount',
        'issues_fixed_count' => 'setIssuesFixedCount',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_field_usage' => 'getCustomFieldUsage',
        'issue_count_with_custom_fields_showing_version' => 'getIssueCountWithCustomFieldsShowingVersion',
        'issues_affected_count' => 'getIssuesAffectedCount',
        'issues_fixed_count' => 'getIssuesFixedCount',
        'self' => 'getSelf'
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
        $this->setIfExists('custom_field_usage', $data ?? [], null);
        $this->setIfExists('issue_count_with_custom_fields_showing_version', $data ?? [], null);
        $this->setIfExists('issues_affected_count', $data ?? [], null);
        $this->setIfExists('issues_fixed_count', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
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
     * Gets custom_field_usage
     *
     * @return \OpenAPI\Client\Model\VersionUsageInCustomField[]|null
     */
    public function getCustomFieldUsage()
    {
        return $this->container['custom_field_usage'];
    }

    /**
     * Sets custom_field_usage
     *
     * @param \OpenAPI\Client\Model\VersionUsageInCustomField[]|null $custom_field_usage List of custom fields using the version.
     *
     * @return self
     */
    public function setCustomFieldUsage($custom_field_usage)
    {

        if (is_null($custom_field_usage)) {
            throw new \InvalidArgumentException('non-nullable custom_field_usage cannot be null');
        }

        $this->container['custom_field_usage'] = $custom_field_usage;

        return $this;
    }

    /**
     * Gets issue_count_with_custom_fields_showing_version
     *
     * @return int|null
     */
    public function getIssueCountWithCustomFieldsShowingVersion()
    {
        return $this->container['issue_count_with_custom_fields_showing_version'];
    }

    /**
     * Sets issue_count_with_custom_fields_showing_version
     *
     * @param int|null $issue_count_with_custom_fields_showing_version Count of issues where a version custom field is set to the version.
     *
     * @return self
     */
    public function setIssueCountWithCustomFieldsShowingVersion($issue_count_with_custom_fields_showing_version)
    {

        if (is_null($issue_count_with_custom_fields_showing_version)) {
            throw new \InvalidArgumentException('non-nullable issue_count_with_custom_fields_showing_version cannot be null');
        }

        $this->container['issue_count_with_custom_fields_showing_version'] = $issue_count_with_custom_fields_showing_version;

        return $this;
    }

    /**
     * Gets issues_affected_count
     *
     * @return int|null
     */
    public function getIssuesAffectedCount()
    {
        return $this->container['issues_affected_count'];
    }

    /**
     * Sets issues_affected_count
     *
     * @param int|null $issues_affected_count Count of issues where the `affectedVersion` is set to the version.
     *
     * @return self
     */
    public function setIssuesAffectedCount($issues_affected_count)
    {

        if (is_null($issues_affected_count)) {
            throw new \InvalidArgumentException('non-nullable issues_affected_count cannot be null');
        }

        $this->container['issues_affected_count'] = $issues_affected_count;

        return $this;
    }

    /**
     * Gets issues_fixed_count
     *
     * @return int|null
     */
    public function getIssuesFixedCount()
    {
        return $this->container['issues_fixed_count'];
    }

    /**
     * Sets issues_fixed_count
     *
     * @param int|null $issues_fixed_count Count of issues where the `fixVersion` is set to the version.
     *
     * @return self
     */
    public function setIssuesFixedCount($issues_fixed_count)
    {

        if (is_null($issues_fixed_count)) {
            throw new \InvalidArgumentException('non-nullable issues_fixed_count cannot be null');
        }

        $this->container['issues_fixed_count'] = $issues_fixed_count;

        return $this;
    }

    /**
     * Gets self
     *
     * @return string|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string|null $self The URL of these count details.
     *
     * @return self
     */
    public function setSelf($self)
    {

        if (is_null($self)) {
            throw new \InvalidArgumentException('non-nullable self cannot be null');
        }

        $this->container['self'] = $self;

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


