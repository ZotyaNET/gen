<?php
/**
 * ProjectLead
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
 * ProjectLead Class Doc Comment
 *
 * @category Class
 * @description The username of the project lead.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectLead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Project_lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'account_type' => 'string',
        'active' => 'bool',
        'application_roles' => '\OpenAPI\Client\Model\UserApplicationRoles',
        'avatar_urls' => '\OpenAPI\Client\Model\UserAvatarUrls',
        'display_name' => 'string',
        'email_address' => 'string',
        'expand' => 'string',
        'groups' => '\OpenAPI\Client\Model\UserGroups',
        'key' => 'string',
        'locale' => 'string',
        'name' => 'string',
        'self' => 'string',
        'time_zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'account_type' => null,
        'active' => null,
        'application_roles' => null,
        'avatar_urls' => null,
        'display_name' => null,
        'email_address' => null,
        'expand' => null,
        'groups' => null,
        'key' => null,
        'locale' => null,
        'name' => null,
        'self' => 'uri',
        'time_zone' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'account_type' => false,
		'active' => false,
		'application_roles' => false,
		'avatar_urls' => false,
		'display_name' => false,
		'email_address' => false,
		'expand' => false,
		'groups' => false,
		'key' => false,
		'locale' => false,
		'name' => false,
		'self' => false,
		'time_zone' => false
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
        'account_id' => 'accountId',
        'account_type' => 'accountType',
        'active' => 'active',
        'application_roles' => 'applicationRoles',
        'avatar_urls' => 'avatarUrls',
        'display_name' => 'displayName',
        'email_address' => 'emailAddress',
        'expand' => 'expand',
        'groups' => 'groups',
        'key' => 'key',
        'locale' => 'locale',
        'name' => 'name',
        'self' => 'self',
        'time_zone' => 'timeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'account_type' => 'setAccountType',
        'active' => 'setActive',
        'application_roles' => 'setApplicationRoles',
        'avatar_urls' => 'setAvatarUrls',
        'display_name' => 'setDisplayName',
        'email_address' => 'setEmailAddress',
        'expand' => 'setExpand',
        'groups' => 'setGroups',
        'key' => 'setKey',
        'locale' => 'setLocale',
        'name' => 'setName',
        'self' => 'setSelf',
        'time_zone' => 'setTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'account_type' => 'getAccountType',
        'active' => 'getActive',
        'application_roles' => 'getApplicationRoles',
        'avatar_urls' => 'getAvatarUrls',
        'display_name' => 'getDisplayName',
        'email_address' => 'getEmailAddress',
        'expand' => 'getExpand',
        'groups' => 'getGroups',
        'key' => 'getKey',
        'locale' => 'getLocale',
        'name' => 'getName',
        'self' => 'getSelf',
        'time_zone' => 'getTimeZone'
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

    public const ACCOUNT_TYPE_ATLASSIAN = 'atlassian';
    public const ACCOUNT_TYPE_APP = 'app';
    public const ACCOUNT_TYPE_CUSTOMER = 'customer';
    public const ACCOUNT_TYPE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_ATLASSIAN,
            self::ACCOUNT_TYPE_APP,
            self::ACCOUNT_TYPE_CUSTOMER,
            self::ACCOUNT_TYPE_UNKNOWN,
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('application_roles', $data ?? [], null);
        $this->setIfExists('avatar_urls', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('expand', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
        $this->setIfExists('time_zone', $data ?? [], null);
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

        if (!is_null($this->container['account_id']) && (mb_strlen($this->container['account_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 128.";
        }

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The account ID of the user, which uniquely identifies the user across all Atlassian products. For example, *5b10ac8d82e05b22cc7d4ef5*. Required in requests.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (!is_null($account_id) && (mb_strlen($account_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling ProjectLead., must be smaller than or equal to 128.');
        }


        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type The user account type. Can take the following values:   *  `atlassian` regular Atlassian user account  *  `app` system account used for Connect applications and OAuth to represent external systems  *  `customer` Jira Service Desk account representing an external service desk
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }

        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether the user is active.
     *
     * @return self
     */
    public function setActive($active)
    {

        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }

        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets application_roles
     *
     * @return \OpenAPI\Client\Model\UserApplicationRoles|null
     */
    public function getApplicationRoles()
    {
        return $this->container['application_roles'];
    }

    /**
     * Sets application_roles
     *
     * @param \OpenAPI\Client\Model\UserApplicationRoles|null $application_roles application_roles
     *
     * @return self
     */
    public function setApplicationRoles($application_roles)
    {

        if (is_null($application_roles)) {
            throw new \InvalidArgumentException('non-nullable application_roles cannot be null');
        }

        $this->container['application_roles'] = $application_roles;

        return $this;
    }

    /**
     * Gets avatar_urls
     *
     * @return \OpenAPI\Client\Model\UserAvatarUrls|null
     */
    public function getAvatarUrls()
    {
        return $this->container['avatar_urls'];
    }

    /**
     * Sets avatar_urls
     *
     * @param \OpenAPI\Client\Model\UserAvatarUrls|null $avatar_urls avatar_urls
     *
     * @return self
     */
    public function setAvatarUrls($avatar_urls)
    {

        if (is_null($avatar_urls)) {
            throw new \InvalidArgumentException('non-nullable avatar_urls cannot be null');
        }

        $this->container['avatar_urls'] = $avatar_urls;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name The display name of the user. Depending on the user’s privacy setting, this may return an alternative value.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {

        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address The email address of the user. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {

        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }

        $this->container['email_address'] = $email_address;

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
     * @param string|null $expand Expand options that include additional user details in the response.
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
     * Gets groups
     *
     * @return \OpenAPI\Client\Model\UserGroups|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \OpenAPI\Client\Model\UserGroups|null $groups groups
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
     * @param string|null $key This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
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
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale The locale of the user. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @return self
     */
    public function setLocale($locale)
    {

        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }

        $this->container['locale'] = $locale;

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
     * @param string|null $name This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
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
     * @param string|null $self The URL of the user.
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
     * Gets time_zone
     *
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string|null $time_zone The time zone specified in the user's profile. Depending on the user’s privacy setting, this may be returned as null.
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {

        if (is_null($time_zone)) {
            throw new \InvalidArgumentException('non-nullable time_zone cannot be null');
        }

        $this->container['time_zone'] = $time_zone;

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


