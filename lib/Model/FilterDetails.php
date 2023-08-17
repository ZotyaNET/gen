<?php
/**
 * FilterDetails
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
 * FilterDetails Class Doc Comment
 *
 * @category Class
 * @description Details of a filter.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FilterDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FilterDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'edit_permissions' => '\OpenAPI\Client\Model\SharePermission[]',
        'expand' => 'string',
        'favourite' => 'bool',
        'favourited_count' => 'int',
        'id' => 'string',
        'jql' => 'string',
        'name' => 'string',
        'owner' => '\OpenAPI\Client\Model\FilterDetailsOwner',
        'search_url' => 'string',
        'self' => 'string',
        'share_permissions' => '\OpenAPI\Client\Model\SharePermission[]',
        'subscriptions' => '\OpenAPI\Client\Model\FilterSubscription[]',
        'view_url' => 'string'
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
        'edit_permissions' => null,
        'expand' => null,
        'favourite' => null,
        'favourited_count' => 'int64',
        'id' => null,
        'jql' => null,
        'name' => null,
        'owner' => null,
        'search_url' => 'uri',
        'self' => 'uri',
        'share_permissions' => null,
        'subscriptions' => null,
        'view_url' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'edit_permissions' => false,
		'expand' => false,
		'favourite' => false,
		'favourited_count' => false,
		'id' => false,
		'jql' => false,
		'name' => false,
		'owner' => false,
		'search_url' => false,
		'self' => false,
		'share_permissions' => false,
		'subscriptions' => false,
		'view_url' => false
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
        'edit_permissions' => 'editPermissions',
        'expand' => 'expand',
        'favourite' => 'favourite',
        'favourited_count' => 'favouritedCount',
        'id' => 'id',
        'jql' => 'jql',
        'name' => 'name',
        'owner' => 'owner',
        'search_url' => 'searchUrl',
        'self' => 'self',
        'share_permissions' => 'sharePermissions',
        'subscriptions' => 'subscriptions',
        'view_url' => 'viewUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'edit_permissions' => 'setEditPermissions',
        'expand' => 'setExpand',
        'favourite' => 'setFavourite',
        'favourited_count' => 'setFavouritedCount',
        'id' => 'setId',
        'jql' => 'setJql',
        'name' => 'setName',
        'owner' => 'setOwner',
        'search_url' => 'setSearchUrl',
        'self' => 'setSelf',
        'share_permissions' => 'setSharePermissions',
        'subscriptions' => 'setSubscriptions',
        'view_url' => 'setViewUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'edit_permissions' => 'getEditPermissions',
        'expand' => 'getExpand',
        'favourite' => 'getFavourite',
        'favourited_count' => 'getFavouritedCount',
        'id' => 'getId',
        'jql' => 'getJql',
        'name' => 'getName',
        'owner' => 'getOwner',
        'search_url' => 'getSearchUrl',
        'self' => 'getSelf',
        'share_permissions' => 'getSharePermissions',
        'subscriptions' => 'getSubscriptions',
        'view_url' => 'getViewUrl'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('edit_permissions', $data ?? [], null);
        $this->setIfExists('expand', $data ?? [], null);
        $this->setIfExists('favourite', $data ?? [], null);
        $this->setIfExists('favourited_count', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('jql', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('search_url', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('share_permissions', $data ?? [], null);
        $this->setIfExists('subscriptions', $data ?? [], null);
        $this->setIfExists('view_url', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * @param string|null $description The description of the filter.
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
     * Gets edit_permissions
     *
     * @return \OpenAPI\Client\Model\SharePermission[]|null
     */
    public function getEditPermissions()
    {
        return $this->container['edit_permissions'];
    }

    /**
     * Sets edit_permissions
     *
     * @param \OpenAPI\Client\Model\SharePermission[]|null $edit_permissions The groups and projects that can edit the filter. This can be specified when updating a filter, but not when creating a filter.
     *
     * @return self
     */
    public function setEditPermissions($edit_permissions)
    {

        if (is_null($edit_permissions)) {
            throw new \InvalidArgumentException('non-nullable edit_permissions cannot be null');
        }

        $this->container['edit_permissions'] = $edit_permissions;

        return $this;
    }

    /**
     * Gets expand
     *
     * @return string|null
     */
    public function getExpand()
    {
        return $this->container['expand'];
    }

    /**
     * Sets expand
     *
     * @param string|null $expand Expand options that include additional filter details in the response.
     *
     * @return self
     */
    public function setExpand($expand)
    {

        if (is_null($expand)) {
            throw new \InvalidArgumentException('non-nullable expand cannot be null');
        }

        $this->container['expand'] = $expand;

        return $this;
    }

    /**
     * Gets favourite
     *
     * @return bool|null
     */
    public function getFavourite()
    {
        return $this->container['favourite'];
    }

    /**
     * Sets favourite
     *
     * @param bool|null $favourite Whether the filter is selected as a favorite by any users, not including the filter owner.
     *
     * @return self
     */
    public function setFavourite($favourite)
    {

        if (is_null($favourite)) {
            throw new \InvalidArgumentException('non-nullable favourite cannot be null');
        }

        $this->container['favourite'] = $favourite;

        return $this;
    }

    /**
     * Gets favourited_count
     *
     * @return int|null
     */
    public function getFavouritedCount()
    {
        return $this->container['favourited_count'];
    }

    /**
     * Sets favourited_count
     *
     * @param int|null $favourited_count The count of how many users have selected this filter as a favorite, including the filter owner.
     *
     * @return self
     */
    public function setFavouritedCount($favourited_count)
    {

        if (is_null($favourited_count)) {
            throw new \InvalidArgumentException('non-nullable favourited_count cannot be null');
        }

        $this->container['favourited_count'] = $favourited_count;

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
     * @param string|null $id The unique identifier for the filter.
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
     * Gets jql
     *
     * @return string|null
     */
    public function getJql()
    {
        return $this->container['jql'];
    }

    /**
     * Sets jql
     *
     * @param string|null $jql The JQL query for the filter. For example, *project = SSP AND issuetype = Bug*.
     *
     * @return self
     */
    public function setJql($jql)
    {

        if (is_null($jql)) {
            throw new \InvalidArgumentException('non-nullable jql cannot be null');
        }

        $this->container['jql'] = $jql;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the filter.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OpenAPI\Client\Model\FilterDetailsOwner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OpenAPI\Client\Model\FilterDetailsOwner|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {

        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }

        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets search_url
     *
     * @return string|null
     */
    public function getSearchUrl()
    {
        return $this->container['search_url'];
    }

    /**
     * Sets search_url
     *
     * @param string|null $search_url A URL to view the filter results in Jira, using the [Search for issues using JQL](#api-rest-api-2-filter-search-get) operation with the filter's JQL string to return the filter results. For example, *https://your-domain.atlassian.net/rest/api/2/search?jql=project+%3D+SSP+AND+issuetype+%3D+Bug*.
     *
     * @return self
     */
    public function setSearchUrl($search_url)
    {

        if (is_null($search_url)) {
            throw new \InvalidArgumentException('non-nullable search_url cannot be null');
        }

        $this->container['search_url'] = $search_url;

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
     * @param string|null $self The URL of the filter.
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
     * Gets share_permissions
     *
     * @return \OpenAPI\Client\Model\SharePermission[]|null
     */
    public function getSharePermissions()
    {
        return $this->container['share_permissions'];
    }

    /**
     * Sets share_permissions
     *
     * @param \OpenAPI\Client\Model\SharePermission[]|null $share_permissions The groups and projects that the filter is shared with. This can be specified when updating a filter, but not when creating a filter.
     *
     * @return self
     */
    public function setSharePermissions($share_permissions)
    {

        if (is_null($share_permissions)) {
            throw new \InvalidArgumentException('non-nullable share_permissions cannot be null');
        }

        $this->container['share_permissions'] = $share_permissions;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return \OpenAPI\Client\Model\FilterSubscription[]|null
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param \OpenAPI\Client\Model\FilterSubscription[]|null $subscriptions The users that are subscribed to the filter.
     *
     * @return self
     */
    public function setSubscriptions($subscriptions)
    {

        if (is_null($subscriptions)) {
            throw new \InvalidArgumentException('non-nullable subscriptions cannot be null');
        }

        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets view_url
     *
     * @return string|null
     */
    public function getViewUrl()
    {
        return $this->container['view_url'];
    }

    /**
     * Sets view_url
     *
     * @param string|null $view_url A URL to view the filter results in Jira, using the ID of the filter. For example, *https://your-domain.atlassian.net/issues/?filter=10100*.
     *
     * @return self
     */
    public function setViewUrl($view_url)
    {

        if (is_null($view_url)) {
            throw new \InvalidArgumentException('non-nullable view_url cannot be null');
        }

        $this->container['view_url'] = $view_url;

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


