<?php
/**
 * Configuration
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
 * Configuration Class Doc Comment
 *
 * @category Class
 * @description Details about the configuration of Jira.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Configuration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments_enabled' => 'bool',
        'issue_linking_enabled' => 'bool',
        'sub_tasks_enabled' => 'bool',
        'time_tracking_configuration' => '\OpenAPI\Client\Model\ConfigurationTimeTrackingConfiguration',
        'time_tracking_enabled' => 'bool',
        'unassigned_issues_allowed' => 'bool',
        'voting_enabled' => 'bool',
        'watching_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments_enabled' => null,
        'issue_linking_enabled' => null,
        'sub_tasks_enabled' => null,
        'time_tracking_configuration' => null,
        'time_tracking_enabled' => null,
        'unassigned_issues_allowed' => null,
        'voting_enabled' => null,
        'watching_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attachments_enabled' => false,
		'issue_linking_enabled' => false,
		'sub_tasks_enabled' => false,
		'time_tracking_configuration' => false,
		'time_tracking_enabled' => false,
		'unassigned_issues_allowed' => false,
		'voting_enabled' => false,
		'watching_enabled' => false
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
        'attachments_enabled' => 'attachmentsEnabled',
        'issue_linking_enabled' => 'issueLinkingEnabled',
        'sub_tasks_enabled' => 'subTasksEnabled',
        'time_tracking_configuration' => 'timeTrackingConfiguration',
        'time_tracking_enabled' => 'timeTrackingEnabled',
        'unassigned_issues_allowed' => 'unassignedIssuesAllowed',
        'voting_enabled' => 'votingEnabled',
        'watching_enabled' => 'watchingEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments_enabled' => 'setAttachmentsEnabled',
        'issue_linking_enabled' => 'setIssueLinkingEnabled',
        'sub_tasks_enabled' => 'setSubTasksEnabled',
        'time_tracking_configuration' => 'setTimeTrackingConfiguration',
        'time_tracking_enabled' => 'setTimeTrackingEnabled',
        'unassigned_issues_allowed' => 'setUnassignedIssuesAllowed',
        'voting_enabled' => 'setVotingEnabled',
        'watching_enabled' => 'setWatchingEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments_enabled' => 'getAttachmentsEnabled',
        'issue_linking_enabled' => 'getIssueLinkingEnabled',
        'sub_tasks_enabled' => 'getSubTasksEnabled',
        'time_tracking_configuration' => 'getTimeTrackingConfiguration',
        'time_tracking_enabled' => 'getTimeTrackingEnabled',
        'unassigned_issues_allowed' => 'getUnassignedIssuesAllowed',
        'voting_enabled' => 'getVotingEnabled',
        'watching_enabled' => 'getWatchingEnabled'
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
        $this->setIfExists('attachments_enabled', $data ?? [], null);
        $this->setIfExists('issue_linking_enabled', $data ?? [], null);
        $this->setIfExists('sub_tasks_enabled', $data ?? [], null);
        $this->setIfExists('time_tracking_configuration', $data ?? [], null);
        $this->setIfExists('time_tracking_enabled', $data ?? [], null);
        $this->setIfExists('unassigned_issues_allowed', $data ?? [], null);
        $this->setIfExists('voting_enabled', $data ?? [], null);
        $this->setIfExists('watching_enabled', $data ?? [], null);
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
     * Gets attachments_enabled
     *
     * @return bool|null
     */
    public function getAttachmentsEnabled()
    {
        return $this->container['attachments_enabled'];
    }

    /**
     * Sets attachments_enabled
     *
     * @param bool|null $attachments_enabled Whether the ability to add attachments to issues is enabled.
     *
     * @return self
     */
    public function setAttachmentsEnabled($attachments_enabled)
    {

        if (is_null($attachments_enabled)) {
            throw new \InvalidArgumentException('non-nullable attachments_enabled cannot be null');
        }

        $this->container['attachments_enabled'] = $attachments_enabled;

        return $this;
    }

    /**
     * Gets issue_linking_enabled
     *
     * @return bool|null
     */
    public function getIssueLinkingEnabled()
    {
        return $this->container['issue_linking_enabled'];
    }

    /**
     * Sets issue_linking_enabled
     *
     * @param bool|null $issue_linking_enabled Whether the ability to link issues is enabled.
     *
     * @return self
     */
    public function setIssueLinkingEnabled($issue_linking_enabled)
    {

        if (is_null($issue_linking_enabled)) {
            throw new \InvalidArgumentException('non-nullable issue_linking_enabled cannot be null');
        }

        $this->container['issue_linking_enabled'] = $issue_linking_enabled;

        return $this;
    }

    /**
     * Gets sub_tasks_enabled
     *
     * @return bool|null
     */
    public function getSubTasksEnabled()
    {
        return $this->container['sub_tasks_enabled'];
    }

    /**
     * Sets sub_tasks_enabled
     *
     * @param bool|null $sub_tasks_enabled Whether the ability to create subtasks for issues is enabled.
     *
     * @return self
     */
    public function setSubTasksEnabled($sub_tasks_enabled)
    {

        if (is_null($sub_tasks_enabled)) {
            throw new \InvalidArgumentException('non-nullable sub_tasks_enabled cannot be null');
        }

        $this->container['sub_tasks_enabled'] = $sub_tasks_enabled;

        return $this;
    }

    /**
     * Gets time_tracking_configuration
     *
     * @return \OpenAPI\Client\Model\ConfigurationTimeTrackingConfiguration|null
     */
    public function getTimeTrackingConfiguration()
    {
        return $this->container['time_tracking_configuration'];
    }

    /**
     * Sets time_tracking_configuration
     *
     * @param \OpenAPI\Client\Model\ConfigurationTimeTrackingConfiguration|null $time_tracking_configuration time_tracking_configuration
     *
     * @return self
     */
    public function setTimeTrackingConfiguration($time_tracking_configuration)
    {

        if (is_null($time_tracking_configuration)) {
            throw new \InvalidArgumentException('non-nullable time_tracking_configuration cannot be null');
        }

        $this->container['time_tracking_configuration'] = $time_tracking_configuration;

        return $this;
    }

    /**
     * Gets time_tracking_enabled
     *
     * @return bool|null
     */
    public function getTimeTrackingEnabled()
    {
        return $this->container['time_tracking_enabled'];
    }

    /**
     * Sets time_tracking_enabled
     *
     * @param bool|null $time_tracking_enabled Whether the ability to track time is enabled. This property is deprecated.
     *
     * @return self
     */
    public function setTimeTrackingEnabled($time_tracking_enabled)
    {

        if (is_null($time_tracking_enabled)) {
            throw new \InvalidArgumentException('non-nullable time_tracking_enabled cannot be null');
        }

        $this->container['time_tracking_enabled'] = $time_tracking_enabled;

        return $this;
    }

    /**
     * Gets unassigned_issues_allowed
     *
     * @return bool|null
     */
    public function getUnassignedIssuesAllowed()
    {
        return $this->container['unassigned_issues_allowed'];
    }

    /**
     * Sets unassigned_issues_allowed
     *
     * @param bool|null $unassigned_issues_allowed Whether the ability to create unassigned issues is enabled. See [Configuring Jira application options](https://confluence.atlassian.com/x/uYXKM) for details.
     *
     * @return self
     */
    public function setUnassignedIssuesAllowed($unassigned_issues_allowed)
    {

        if (is_null($unassigned_issues_allowed)) {
            throw new \InvalidArgumentException('non-nullable unassigned_issues_allowed cannot be null');
        }

        $this->container['unassigned_issues_allowed'] = $unassigned_issues_allowed;

        return $this;
    }

    /**
     * Gets voting_enabled
     *
     * @return bool|null
     */
    public function getVotingEnabled()
    {
        return $this->container['voting_enabled'];
    }

    /**
     * Sets voting_enabled
     *
     * @param bool|null $voting_enabled Whether the ability for users to vote on issues is enabled. See [Configuring Jira application options](https://confluence.atlassian.com/x/uYXKM) for details.
     *
     * @return self
     */
    public function setVotingEnabled($voting_enabled)
    {

        if (is_null($voting_enabled)) {
            throw new \InvalidArgumentException('non-nullable voting_enabled cannot be null');
        }

        $this->container['voting_enabled'] = $voting_enabled;

        return $this;
    }

    /**
     * Gets watching_enabled
     *
     * @return bool|null
     */
    public function getWatchingEnabled()
    {
        return $this->container['watching_enabled'];
    }

    /**
     * Sets watching_enabled
     *
     * @param bool|null $watching_enabled Whether the ability for users to watch issues is enabled. See [Configuring Jira application options](https://confluence.atlassian.com/x/uYXKM) for details.
     *
     * @return self
     */
    public function setWatchingEnabled($watching_enabled)
    {

        if (is_null($watching_enabled)) {
            throw new \InvalidArgumentException('non-nullable watching_enabled cannot be null');
        }

        $this->container['watching_enabled'] = $watching_enabled;

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

