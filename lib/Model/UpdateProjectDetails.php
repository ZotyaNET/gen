<?php
/**
 * UpdateProjectDetails
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
 * UpdateProjectDetails Class Doc Comment
 *
 * @category Class
 * @description Details about the project.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateProjectDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateProjectDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignee_type' => 'string',
        'avatar_id' => 'int',
        'category_id' => 'int',
        'description' => 'string',
        'issue_security_scheme' => 'int',
        'key' => 'string',
        'lead' => 'string',
        'lead_account_id' => 'string',
        'name' => 'string',
        'notification_scheme' => 'int',
        'permission_scheme' => 'int',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assignee_type' => null,
        'avatar_id' => 'int64',
        'category_id' => 'int64',
        'description' => null,
        'issue_security_scheme' => 'int64',
        'key' => null,
        'lead' => null,
        'lead_account_id' => null,
        'name' => null,
        'notification_scheme' => 'int64',
        'permission_scheme' => 'int64',
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assignee_type' => false,
		'avatar_id' => false,
		'category_id' => false,
		'description' => false,
		'issue_security_scheme' => false,
		'key' => false,
		'lead' => false,
		'lead_account_id' => false,
		'name' => false,
		'notification_scheme' => false,
		'permission_scheme' => false,
		'url' => false
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
        'assignee_type' => 'assigneeType',
        'avatar_id' => 'avatarId',
        'category_id' => 'categoryId',
        'description' => 'description',
        'issue_security_scheme' => 'issueSecurityScheme',
        'key' => 'key',
        'lead' => 'lead',
        'lead_account_id' => 'leadAccountId',
        'name' => 'name',
        'notification_scheme' => 'notificationScheme',
        'permission_scheme' => 'permissionScheme',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignee_type' => 'setAssigneeType',
        'avatar_id' => 'setAvatarId',
        'category_id' => 'setCategoryId',
        'description' => 'setDescription',
        'issue_security_scheme' => 'setIssueSecurityScheme',
        'key' => 'setKey',
        'lead' => 'setLead',
        'lead_account_id' => 'setLeadAccountId',
        'name' => 'setName',
        'notification_scheme' => 'setNotificationScheme',
        'permission_scheme' => 'setPermissionScheme',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignee_type' => 'getAssigneeType',
        'avatar_id' => 'getAvatarId',
        'category_id' => 'getCategoryId',
        'description' => 'getDescription',
        'issue_security_scheme' => 'getIssueSecurityScheme',
        'key' => 'getKey',
        'lead' => 'getLead',
        'lead_account_id' => 'getLeadAccountId',
        'name' => 'getName',
        'notification_scheme' => 'getNotificationScheme',
        'permission_scheme' => 'getPermissionScheme',
        'url' => 'getUrl'
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

    public const ASSIGNEE_TYPE_PROJECT_LEAD = 'PROJECT_LEAD';
    public const ASSIGNEE_TYPE_UNASSIGNED = 'UNASSIGNED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssigneeTypeAllowableValues()
    {
        return [
            self::ASSIGNEE_TYPE_PROJECT_LEAD,
            self::ASSIGNEE_TYPE_UNASSIGNED,
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
        $this->setIfExists('assignee_type', $data ?? [], null);
        $this->setIfExists('avatar_id', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('issue_security_scheme', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('lead', $data ?? [], null);
        $this->setIfExists('lead_account_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('notification_scheme', $data ?? [], null);
        $this->setIfExists('permission_scheme', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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

        $allowedValues = $this->getAssigneeTypeAllowableValues();
        if (!is_null($this->container['assignee_type']) && !in_array($this->container['assignee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'assignee_type', must be one of '%s'",
                $this->container['assignee_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['lead_account_id']) && (mb_strlen($this->container['lead_account_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'lead_account_id', the character length must be smaller than or equal to 128.";
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
     * Gets assignee_type
     *
     * @return string|null
     */
    public function getAssigneeType()
    {
        return $this->container['assignee_type'];
    }

    /**
     * Sets assignee_type
     *
     * @param string|null $assignee_type The default assignee when creating issues for this project.
     *
     * @return self
     */
    public function setAssigneeType($assignee_type)
    {
        $allowedValues = $this->getAssigneeTypeAllowableValues();
        if (!is_null($assignee_type) && !in_array($assignee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'assignee_type', must be one of '%s'",
                    $assignee_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($assignee_type)) {
            throw new \InvalidArgumentException('non-nullable assignee_type cannot be null');
        }

        $this->container['assignee_type'] = $assignee_type;

        return $this;
    }

    /**
     * Gets avatar_id
     *
     * @return int|null
     */
    public function getAvatarId()
    {
        return $this->container['avatar_id'];
    }

    /**
     * Sets avatar_id
     *
     * @param int|null $avatar_id An integer value for the project's avatar.
     *
     * @return self
     */
    public function setAvatarId($avatar_id)
    {

        if (is_null($avatar_id)) {
            throw new \InvalidArgumentException('non-nullable avatar_id cannot be null');
        }

        $this->container['avatar_id'] = $avatar_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id The ID of the project's category. A complete list of category IDs is found using the [Get all project categories](#api-rest-api-2-projectCategory-get) operation. To remove the project category from the project, set the value to `-1.`
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {

        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }

        $this->container['category_id'] = $category_id;

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
     * @param string|null $description A brief description of the project.
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
     * Gets issue_security_scheme
     *
     * @return int|null
     */
    public function getIssueSecurityScheme()
    {
        return $this->container['issue_security_scheme'];
    }

    /**
     * Sets issue_security_scheme
     *
     * @param int|null $issue_security_scheme The ID of the issue security scheme for the project, which enables you to control who can and cannot view issues. Use the [Get issue security schemes](#api-rest-api-2-issuesecurityschemes-get) resource to get all issue security scheme IDs.
     *
     * @return self
     */
    public function setIssueSecurityScheme($issue_security_scheme)
    {

        if (is_null($issue_security_scheme)) {
            throw new \InvalidArgumentException('non-nullable issue_security_scheme cannot be null');
        }

        $this->container['issue_security_scheme'] = $issue_security_scheme;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key Project keys must be unique and start with an uppercase letter followed by one or more uppercase alphanumeric characters. The maximum length is 10 characters.
     *
     * @return self
     */
    public function setKey($key)
    {

        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets lead
     *
     * @return string|null
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     *
     * @param string|null $lead This parameter is deprecated because of privacy changes. Use `leadAccountId` instead. See the [migration guide](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details. The user name of the project lead. Cannot be provided with `leadAccountId`.
     *
     * @return self
     */
    public function setLead($lead)
    {

        if (is_null($lead)) {
            throw new \InvalidArgumentException('non-nullable lead cannot be null');
        }

        $this->container['lead'] = $lead;

        return $this;
    }

    /**
     * Gets lead_account_id
     *
     * @return string|null
     */
    public function getLeadAccountId()
    {
        return $this->container['lead_account_id'];
    }

    /**
     * Sets lead_account_id
     *
     * @param string|null $lead_account_id The account ID of the project lead. Cannot be provided with `lead`.
     *
     * @return self
     */
    public function setLeadAccountId($lead_account_id)
    {
        if (!is_null($lead_account_id) && (mb_strlen($lead_account_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $lead_account_id when calling UpdateProjectDetails., must be smaller than or equal to 128.');
        }


        if (is_null($lead_account_id)) {
            throw new \InvalidArgumentException('non-nullable lead_account_id cannot be null');
        }

        $this->container['lead_account_id'] = $lead_account_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the project.
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
     * Gets notification_scheme
     *
     * @return int|null
     */
    public function getNotificationScheme()
    {
        return $this->container['notification_scheme'];
    }

    /**
     * Sets notification_scheme
     *
     * @param int|null $notification_scheme The ID of the notification scheme for the project. Use the [Get notification schemes](#api-rest-api-2-notificationscheme-get) resource to get a list of notification scheme IDs.
     *
     * @return self
     */
    public function setNotificationScheme($notification_scheme)
    {

        if (is_null($notification_scheme)) {
            throw new \InvalidArgumentException('non-nullable notification_scheme cannot be null');
        }

        $this->container['notification_scheme'] = $notification_scheme;

        return $this;
    }

    /**
     * Gets permission_scheme
     *
     * @return int|null
     */
    public function getPermissionScheme()
    {
        return $this->container['permission_scheme'];
    }

    /**
     * Sets permission_scheme
     *
     * @param int|null $permission_scheme The ID of the permission scheme for the project. Use the [Get all permission schemes](#api-rest-api-2-permissionscheme-get) resource to see a list of all permission scheme IDs.
     *
     * @return self
     */
    public function setPermissionScheme($permission_scheme)
    {

        if (is_null($permission_scheme)) {
            throw new \InvalidArgumentException('non-nullable permission_scheme cannot be null');
        }

        $this->container['permission_scheme'] = $permission_scheme;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url A link to information about this project, such as project documentation
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

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


