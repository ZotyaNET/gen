<?php
/**
 * NotificationTo
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
 * NotificationTo Class Doc Comment
 *
 * @category Class
 * @description The recipients of the email notification for the issue.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationTo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notification_to';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignee' => 'bool',
        'group_ids' => 'string[]',
        'groups' => '\OpenAPI\Client\Model\GroupName[]',
        'reporter' => 'bool',
        'users' => '\OpenAPI\Client\Model\UserDetails[]',
        'voters' => 'bool',
        'watchers' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assignee' => null,
        'group_ids' => null,
        'groups' => null,
        'reporter' => null,
        'users' => null,
        'voters' => null,
        'watchers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assignee' => false,
		'group_ids' => false,
		'groups' => false,
		'reporter' => false,
		'users' => false,
		'voters' => false,
		'watchers' => false
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
        'assignee' => 'assignee',
        'group_ids' => 'groupIds',
        'groups' => 'groups',
        'reporter' => 'reporter',
        'users' => 'users',
        'voters' => 'voters',
        'watchers' => 'watchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignee' => 'setAssignee',
        'group_ids' => 'setGroupIds',
        'groups' => 'setGroups',
        'reporter' => 'setReporter',
        'users' => 'setUsers',
        'voters' => 'setVoters',
        'watchers' => 'setWatchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignee' => 'getAssignee',
        'group_ids' => 'getGroupIds',
        'groups' => 'getGroups',
        'reporter' => 'getReporter',
        'users' => 'getUsers',
        'voters' => 'getVoters',
        'watchers' => 'getWatchers'
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
        $this->setIfExists('assignee', $data ?? [], null);
        $this->setIfExists('group_ids', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('reporter', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('voters', $data ?? [], null);
        $this->setIfExists('watchers', $data ?? [], null);
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
     * Gets assignee
     *
     * @return bool|null
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param bool|null $assignee Whether the notification should be sent to the issue's assignees.
     *
     * @return self
     */
    public function setAssignee($assignee)
    {

        if (is_null($assignee)) {
            throw new \InvalidArgumentException('non-nullable assignee cannot be null');
        }

        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return string[]|null
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string[]|null $group_ids List of groupIds to receive the notification.
     *
     * @return self
     */
    public function setGroupIds($group_ids)
    {

        if (is_null($group_ids)) {
            throw new \InvalidArgumentException('non-nullable group_ids cannot be null');
        }

        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \OpenAPI\Client\Model\GroupName[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \OpenAPI\Client\Model\GroupName[]|null $groups List of groups to receive the notification.
     *
     * @return self
     */
    public function setGroups($groups)
    {

        if (is_null($groups)) {
            throw new \InvalidArgumentException('non-nullable groups cannot be null');
        }

        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets reporter
     *
     * @return bool|null
     */
    public function getReporter()
    {
        return $this->container['reporter'];
    }

    /**
     * Sets reporter
     *
     * @param bool|null $reporter Whether the notification should be sent to the issue's reporter.
     *
     * @return self
     */
    public function setReporter($reporter)
    {

        if (is_null($reporter)) {
            throw new \InvalidArgumentException('non-nullable reporter cannot be null');
        }

        $this->container['reporter'] = $reporter;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \OpenAPI\Client\Model\UserDetails[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \OpenAPI\Client\Model\UserDetails[]|null $users List of users to receive the notification.
     *
     * @return self
     */
    public function setUsers($users)
    {

        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }

        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets voters
     *
     * @return bool|null
     */
    public function getVoters()
    {
        return $this->container['voters'];
    }

    /**
     * Sets voters
     *
     * @param bool|null $voters Whether the notification should be sent to the issue's voters.
     *
     * @return self
     */
    public function setVoters($voters)
    {

        if (is_null($voters)) {
            throw new \InvalidArgumentException('non-nullable voters cannot be null');
        }

        $this->container['voters'] = $voters;

        return $this;
    }

    /**
     * Gets watchers
     *
     * @return bool|null
     */
    public function getWatchers()
    {
        return $this->container['watchers'];
    }

    /**
     * Sets watchers
     *
     * @param bool|null $watchers Whether the notification should be sent to the issue's watchers.
     *
     * @return self
     */
    public function setWatchers($watchers)
    {

        if (is_null($watchers)) {
            throw new \InvalidArgumentException('non-nullable watchers cannot be null');
        }

        $this->container['watchers'] = $watchers;

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


