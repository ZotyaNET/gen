<?php
/**
 * AuditRecordBean
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
 * AuditRecordBean Class Doc Comment
 *
 * @category Class
 * @description An audit record.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuditRecordBean implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuditRecordBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'associated_items' => '\OpenAPI\Client\Model\AssociatedItemBean[]',
        'author_key' => 'string',
        'category' => 'string',
        'changed_values' => '\OpenAPI\Client\Model\ChangedValueBean[]',
        'created' => '\DateTime',
        'description' => 'string',
        'event_source' => 'string',
        'id' => 'int',
        'object_item' => '\OpenAPI\Client\Model\AssociatedItemBean',
        'remote_address' => 'string',
        'summary' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'associated_items' => null,
        'author_key' => null,
        'category' => null,
        'changed_values' => null,
        'created' => 'date-time',
        'description' => null,
        'event_source' => null,
        'id' => 'int64',
        'object_item' => null,
        'remote_address' => null,
        'summary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'associated_items' => false,
		'author_key' => false,
		'category' => false,
		'changed_values' => false,
		'created' => false,
		'description' => false,
		'event_source' => false,
		'id' => false,
		'object_item' => false,
		'remote_address' => false,
		'summary' => false
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
        'associated_items' => 'associatedItems',
        'author_key' => 'authorKey',
        'category' => 'category',
        'changed_values' => 'changedValues',
        'created' => 'created',
        'description' => 'description',
        'event_source' => 'eventSource',
        'id' => 'id',
        'object_item' => 'objectItem',
        'remote_address' => 'remoteAddress',
        'summary' => 'summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'associated_items' => 'setAssociatedItems',
        'author_key' => 'setAuthorKey',
        'category' => 'setCategory',
        'changed_values' => 'setChangedValues',
        'created' => 'setCreated',
        'description' => 'setDescription',
        'event_source' => 'setEventSource',
        'id' => 'setId',
        'object_item' => 'setObjectItem',
        'remote_address' => 'setRemoteAddress',
        'summary' => 'setSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'associated_items' => 'getAssociatedItems',
        'author_key' => 'getAuthorKey',
        'category' => 'getCategory',
        'changed_values' => 'getChangedValues',
        'created' => 'getCreated',
        'description' => 'getDescription',
        'event_source' => 'getEventSource',
        'id' => 'getId',
        'object_item' => 'getObjectItem',
        'remote_address' => 'getRemoteAddress',
        'summary' => 'getSummary'
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
        $this->setIfExists('associated_items', $data ?? [], null);
        $this->setIfExists('author_key', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('changed_values', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('event_source', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('object_item', $data ?? [], null);
        $this->setIfExists('remote_address', $data ?? [], null);
        $this->setIfExists('summary', $data ?? [], null);
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
     * Gets associated_items
     *
     * @return \OpenAPI\Client\Model\AssociatedItemBean[]|null
     */
    public function getAssociatedItems()
    {
        return $this->container['associated_items'];
    }

    /**
     * Sets associated_items
     *
     * @param \OpenAPI\Client\Model\AssociatedItemBean[]|null $associated_items The list of items associated with the changed record.
     *
     * @return self
     */
    public function setAssociatedItems($associated_items)
    {

        if (is_null($associated_items)) {
            throw new \InvalidArgumentException('non-nullable associated_items cannot be null');
        }

        $this->container['associated_items'] = $associated_items;

        return $this;
    }

    /**
     * Gets author_key
     *
     * @return string|null
     */
    public function getAuthorKey()
    {
        return $this->container['author_key'];
    }

    /**
     * Sets author_key
     *
     * @param string|null $author_key Deprecated, use `authorAccountId` instead. The key of the user who created the audit record.
     *
     * @return self
     */
    public function setAuthorKey($author_key)
    {

        if (is_null($author_key)) {
            throw new \InvalidArgumentException('non-nullable author_key cannot be null');
        }

        $this->container['author_key'] = $author_key;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The category of the audit record. For a list of these categories, see the help article [Auditing in Jira applications](https://confluence.atlassian.com/x/noXKM).
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets changed_values
     *
     * @return \OpenAPI\Client\Model\ChangedValueBean[]|null
     */
    public function getChangedValues()
    {
        return $this->container['changed_values'];
    }

    /**
     * Sets changed_values
     *
     * @param \OpenAPI\Client\Model\ChangedValueBean[]|null $changed_values The list of values changed in the record event.
     *
     * @return self
     */
    public function setChangedValues($changed_values)
    {

        if (is_null($changed_values)) {
            throw new \InvalidArgumentException('non-nullable changed_values cannot be null');
        }

        $this->container['changed_values'] = $changed_values;

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
     * @param \DateTime|null $created The date and time on which the audit record was created.
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
     * @param string|null $description The description of the audit record.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets event_source
     *
     * @return string|null
     */
    public function getEventSource()
    {
        return $this->container['event_source'];
    }

    /**
     * Sets event_source
     *
     * @param string|null $event_source The event the audit record originated from.
     *
     * @return self
     */
    public function setEventSource($event_source)
    {

        if (is_null($event_source)) {
            throw new \InvalidArgumentException('non-nullable event_source cannot be null');
        }

        $this->container['event_source'] = $event_source;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The ID of the audit record.
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
     * Gets object_item
     *
     * @return \OpenAPI\Client\Model\AssociatedItemBean|null
     */
    public function getObjectItem()
    {
        return $this->container['object_item'];
    }

    /**
     * Sets object_item
     *
     * @param \OpenAPI\Client\Model\AssociatedItemBean|null $object_item object_item
     *
     * @return self
     */
    public function setObjectItem($object_item)
    {

        if (is_null($object_item)) {
            throw new \InvalidArgumentException('non-nullable object_item cannot be null');
        }

        $this->container['object_item'] = $object_item;

        return $this;
    }

    /**
     * Gets remote_address
     *
     * @return string|null
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param string|null $remote_address The URL of the computer where the creation of the audit record was initiated.
     *
     * @return self
     */
    public function setRemoteAddress($remote_address)
    {

        if (is_null($remote_address)) {
            throw new \InvalidArgumentException('non-nullable remote_address cannot be null');
        }

        $this->container['remote_address'] = $remote_address;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary The summary of the audit record.
     *
     * @return self
     */
    public function setSummary($summary)
    {

        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }

        $this->container['summary'] = $summary;

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


