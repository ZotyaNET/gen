<?php
/**
 * DeprecatedWorkflow
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
 * DeprecatedWorkflow Class Doc Comment
 *
 * @category Class
 * @description Details about a workflow.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeprecatedWorkflow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeprecatedWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default' => 'bool',
        'description' => 'string',
        'last_modified_date' => 'string',
        'last_modified_user' => 'string',
        'last_modified_user_account_id' => 'string',
        'name' => 'string',
        'scope' => '\OpenAPI\Client\Model\DeprecatedWorkflowScope',
        'steps' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default' => null,
        'description' => null,
        'last_modified_date' => null,
        'last_modified_user' => null,
        'last_modified_user_account_id' => null,
        'name' => null,
        'scope' => null,
        'steps' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default' => false,
		'description' => false,
		'last_modified_date' => false,
		'last_modified_user' => false,
		'last_modified_user_account_id' => false,
		'name' => false,
		'scope' => false,
		'steps' => false
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
        'default' => 'default',
        'description' => 'description',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_user' => 'lastModifiedUser',
        'last_modified_user_account_id' => 'lastModifiedUserAccountId',
        'name' => 'name',
        'scope' => 'scope',
        'steps' => 'steps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default' => 'setDefault',
        'description' => 'setDescription',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_user' => 'setLastModifiedUser',
        'last_modified_user_account_id' => 'setLastModifiedUserAccountId',
        'name' => 'setName',
        'scope' => 'setScope',
        'steps' => 'setSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default' => 'getDefault',
        'description' => 'getDescription',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_user' => 'getLastModifiedUser',
        'last_modified_user_account_id' => 'getLastModifiedUserAccountId',
        'name' => 'getName',
        'scope' => 'getScope',
        'steps' => 'getSteps'
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
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('last_modified_user', $data ?? [], null);
        $this->setIfExists('last_modified_user_account_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
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
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function setDefault($default)
    {

        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }

        $this->container['default'] = $default;

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
     * @param string|null $description The description of the workflow.
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
     * Gets last_modified_date
     *
     * @return string|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param string|null $last_modified_date The datetime the workflow was last modified.
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {

        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }

        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets last_modified_user
     *
     * @return string|null
     */
    public function getLastModifiedUser()
    {
        return $this->container['last_modified_user'];
    }

    /**
     * Sets last_modified_user
     *
     * @param string|null $last_modified_user This property is no longer available and will be removed from the documentation soon. See the [deprecation notice](https://developer.atlassian.com/cloud/jira/platform/deprecation-notice-user-privacy-api-migration-guide/) for details.
     *
     * @return self
     */
    public function setLastModifiedUser($last_modified_user)
    {

        if (is_null($last_modified_user)) {
            throw new \InvalidArgumentException('non-nullable last_modified_user cannot be null');
        }

        $this->container['last_modified_user'] = $last_modified_user;

        return $this;
    }

    /**
     * Gets last_modified_user_account_id
     *
     * @return string|null
     */
    public function getLastModifiedUserAccountId()
    {
        return $this->container['last_modified_user_account_id'];
    }

    /**
     * Sets last_modified_user_account_id
     *
     * @param string|null $last_modified_user_account_id The account ID of the user that last modified the workflow.
     *
     * @return self
     */
    public function setLastModifiedUserAccountId($last_modified_user_account_id)
    {

        if (is_null($last_modified_user_account_id)) {
            throw new \InvalidArgumentException('non-nullable last_modified_user_account_id cannot be null');
        }

        $this->container['last_modified_user_account_id'] = $last_modified_user_account_id;

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
     * @param string|null $name The name of the workflow.
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
     * Gets scope
     *
     * @return \OpenAPI\Client\Model\DeprecatedWorkflowScope|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \OpenAPI\Client\Model\DeprecatedWorkflowScope|null $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {

        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }

        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return int|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param int|null $steps The number of steps included in the workflow.
     *
     * @return self
     */
    public function setSteps($steps)
    {

        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }

        $this->container['steps'] = $steps;

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

