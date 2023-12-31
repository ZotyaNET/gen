<?php
/**
 * Worklog
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
 * Worklog Class Doc Comment
 *
 * @category Class
 * @description Details of a worklog.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Worklog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Worklog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'author' => '\OpenAPI\Client\Model\WorklogAuthor',
        'comment' => 'string',
        'created' => '\DateTime',
        'id' => 'string',
        'issue_id' => 'string',
        'properties' => '\OpenAPI\Client\Model\EntityProperty[]',
        'self' => 'string',
        'started' => '\DateTime',
        'time_spent' => 'string',
        'time_spent_seconds' => 'int',
        'update_author' => '\OpenAPI\Client\Model\WorklogUpdateAuthor',
        'updated' => '\DateTime',
        'visibility' => '\OpenAPI\Client\Model\WorklogVisibility'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'author' => null,
        'comment' => null,
        'created' => 'date-time',
        'id' => null,
        'issue_id' => null,
        'properties' => null,
        'self' => 'uri',
        'started' => 'date-time',
        'time_spent' => null,
        'time_spent_seconds' => 'int64',
        'update_author' => null,
        'updated' => 'date-time',
        'visibility' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'author' => false,
		'comment' => false,
		'created' => false,
		'id' => false,
		'issue_id' => false,
		'properties' => false,
		'self' => false,
		'started' => false,
		'time_spent' => false,
		'time_spent_seconds' => false,
		'update_author' => false,
		'updated' => false,
		'visibility' => false
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
        'author' => 'author',
        'comment' => 'comment',
        'created' => 'created',
        'id' => 'id',
        'issue_id' => 'issueId',
        'properties' => 'properties',
        'self' => 'self',
        'started' => 'started',
        'time_spent' => 'timeSpent',
        'time_spent_seconds' => 'timeSpentSeconds',
        'update_author' => 'updateAuthor',
        'updated' => 'updated',
        'visibility' => 'visibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author' => 'setAuthor',
        'comment' => 'setComment',
        'created' => 'setCreated',
        'id' => 'setId',
        'issue_id' => 'setIssueId',
        'properties' => 'setProperties',
        'self' => 'setSelf',
        'started' => 'setStarted',
        'time_spent' => 'setTimeSpent',
        'time_spent_seconds' => 'setTimeSpentSeconds',
        'update_author' => 'setUpdateAuthor',
        'updated' => 'setUpdated',
        'visibility' => 'setVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author' => 'getAuthor',
        'comment' => 'getComment',
        'created' => 'getCreated',
        'id' => 'getId',
        'issue_id' => 'getIssueId',
        'properties' => 'getProperties',
        'self' => 'getSelf',
        'started' => 'getStarted',
        'time_spent' => 'getTimeSpent',
        'time_spent_seconds' => 'getTimeSpentSeconds',
        'update_author' => 'getUpdateAuthor',
        'updated' => 'getUpdated',
        'visibility' => 'getVisibility'
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
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('issue_id', $data ?? [], null);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('started', $data ?? [], null);
        $this->setIfExists('time_spent', $data ?? [], null);
        $this->setIfExists('time_spent_seconds', $data ?? [], null);
        $this->setIfExists('update_author', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('visibility', $data ?? [], null);
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
     * Gets author
     *
     * @return \OpenAPI\Client\Model\WorklogAuthor|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \OpenAPI\Client\Model\WorklogAuthor|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {

        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }

        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment A comment about the worklog. Optional when creating or updating a worklog.
     *
     * @return self
     */
    public function setComment($comment)
    {

        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created The datetime on which the worklog was created.
     *
     * @return self
     */
    public function setCreated($created)
    {

        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }

        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the worklog record.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issue_id
     *
     * @return string|null
     */
    public function getIssueId()
    {
        return $this->container['issue_id'];
    }

    /**
     * Sets issue_id
     *
     * @param string|null $issue_id The ID of the issue this worklog is for.
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
     * Gets properties
     *
     * @return \OpenAPI\Client\Model\EntityProperty[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \OpenAPI\Client\Model\EntityProperty[]|null $properties Details of properties for the worklog. Optional when creating or updating a worklog.
     *
     * @return self
     */
    public function setProperties($properties)
    {

        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }

        $this->container['properties'] = $properties;

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
     * @param string|null $self The URL of the worklog item.
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
     * Gets started
     *
     * @return \DateTime|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime|null $started The datetime on which the worklog effort was started. Required when creating a worklog. Optional when updating a worklog.
     *
     * @return self
     */
    public function setStarted($started)
    {

        if (is_null($started)) {
            throw new \InvalidArgumentException('non-nullable started cannot be null');
        }

        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets time_spent
     *
     * @return string|null
     */
    public function getTimeSpent()
    {
        return $this->container['time_spent'];
    }

    /**
     * Sets time_spent
     *
     * @param string|null $time_spent The time spent working on the issue as days (\\#d), hours (\\#h), or minutes (\\#m or \\#). Required when creating a worklog if `timeSpentSeconds` isn't provided. Optional when updating a worklog. Cannot be provided if `timeSpentSecond` is provided.
     *
     * @return self
     */
    public function setTimeSpent($time_spent)
    {

        if (is_null($time_spent)) {
            throw new \InvalidArgumentException('non-nullable time_spent cannot be null');
        }

        $this->container['time_spent'] = $time_spent;

        return $this;
    }

    /**
     * Gets time_spent_seconds
     *
     * @return int|null
     */
    public function getTimeSpentSeconds()
    {
        return $this->container['time_spent_seconds'];
    }

    /**
     * Sets time_spent_seconds
     *
     * @param int|null $time_spent_seconds The time in seconds spent working on the issue. Required when creating a worklog if `timeSpent` isn't provided. Optional when updating a worklog. Cannot be provided if `timeSpent` is provided.
     *
     * @return self
     */
    public function setTimeSpentSeconds($time_spent_seconds)
    {

        if (is_null($time_spent_seconds)) {
            throw new \InvalidArgumentException('non-nullable time_spent_seconds cannot be null');
        }

        $this->container['time_spent_seconds'] = $time_spent_seconds;

        return $this;
    }

    /**
     * Gets update_author
     *
     * @return \OpenAPI\Client\Model\WorklogUpdateAuthor|null
     */
    public function getUpdateAuthor()
    {
        return $this->container['update_author'];
    }

    /**
     * Sets update_author
     *
     * @param \OpenAPI\Client\Model\WorklogUpdateAuthor|null $update_author update_author
     *
     * @return self
     */
    public function setUpdateAuthor($update_author)
    {

        if (is_null($update_author)) {
            throw new \InvalidArgumentException('non-nullable update_author cannot be null');
        }

        $this->container['update_author'] = $update_author;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated The datetime on which the worklog was last updated.
     *
     * @return self
     */
    public function setUpdated($updated)
    {

        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }

        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \OpenAPI\Client\Model\WorklogVisibility|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \OpenAPI\Client\Model\WorklogVisibility|null $visibility visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {

        if (is_null($visibility)) {
            throw new \InvalidArgumentException('non-nullable visibility cannot be null');
        }

        $this->container['visibility'] = $visibility;

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


