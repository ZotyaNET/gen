<?php
/**
 * AvailableWorkflowConnectRule
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
 * AvailableWorkflowConnectRule Class Doc Comment
 *
 * @category Class
 * @description The Connect provided ecosystem rules available.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailableWorkflowConnectRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableWorkflowConnectRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addon_key' => 'string',
        'create_url' => 'string',
        'description' => 'string',
        'edit_url' => 'string',
        'module_key' => 'string',
        'name' => 'string',
        'rule_key' => 'string',
        'rule_type' => 'string',
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
        'addon_key' => null,
        'create_url' => null,
        'description' => null,
        'edit_url' => null,
        'module_key' => null,
        'name' => null,
        'rule_key' => null,
        'rule_type' => null,
        'view_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'addon_key' => false,
		'create_url' => false,
		'description' => false,
		'edit_url' => false,
		'module_key' => false,
		'name' => false,
		'rule_key' => false,
		'rule_type' => false,
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
        'addon_key' => 'addonKey',
        'create_url' => 'createUrl',
        'description' => 'description',
        'edit_url' => 'editUrl',
        'module_key' => 'moduleKey',
        'name' => 'name',
        'rule_key' => 'ruleKey',
        'rule_type' => 'ruleType',
        'view_url' => 'viewUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addon_key' => 'setAddonKey',
        'create_url' => 'setCreateUrl',
        'description' => 'setDescription',
        'edit_url' => 'setEditUrl',
        'module_key' => 'setModuleKey',
        'name' => 'setName',
        'rule_key' => 'setRuleKey',
        'rule_type' => 'setRuleType',
        'view_url' => 'setViewUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addon_key' => 'getAddonKey',
        'create_url' => 'getCreateUrl',
        'description' => 'getDescription',
        'edit_url' => 'getEditUrl',
        'module_key' => 'getModuleKey',
        'name' => 'getName',
        'rule_key' => 'getRuleKey',
        'rule_type' => 'getRuleType',
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

    public const RULE_TYPE_CONDITION = 'Condition';
    public const RULE_TYPE_VALIDATOR = 'Validator';
    public const RULE_TYPE__FUNCTION = 'Function';
    public const RULE_TYPE_SCREEN = 'Screen';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_CONDITION,
            self::RULE_TYPE_VALIDATOR,
            self::RULE_TYPE__FUNCTION,
            self::RULE_TYPE_SCREEN,
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
        $this->setIfExists('addon_key', $data ?? [], null);
        $this->setIfExists('create_url', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('edit_url', $data ?? [], null);
        $this->setIfExists('module_key', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('rule_key', $data ?? [], null);
        $this->setIfExists('rule_type', $data ?? [], null);
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

        $allowedValues = $this->getRuleTypeAllowableValues();
        if (!is_null($this->container['rule_type']) && !in_array($this->container['rule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rule_type', must be one of '%s'",
                $this->container['rule_type'],
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
     * Gets addon_key
     *
     * @return string|null
     */
    public function getAddonKey()
    {
        return $this->container['addon_key'];
    }

    /**
     * Sets addon_key
     *
     * @param string|null $addon_key The add-on providing the rule.
     *
     * @return self
     */
    public function setAddonKey($addon_key)
    {

        if (is_null($addon_key)) {
            throw new \InvalidArgumentException('non-nullable addon_key cannot be null');
        }

        $this->container['addon_key'] = $addon_key;

        return $this;
    }

    /**
     * Gets create_url
     *
     * @return string|null
     */
    public function getCreateUrl()
    {
        return $this->container['create_url'];
    }

    /**
     * Sets create_url
     *
     * @param string|null $create_url The URL creation path segment defined in the Connect module.
     *
     * @return self
     */
    public function setCreateUrl($create_url)
    {

        if (is_null($create_url)) {
            throw new \InvalidArgumentException('non-nullable create_url cannot be null');
        }

        $this->container['create_url'] = $create_url;

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
     * @param string|null $description The rule description.
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
     * Gets edit_url
     *
     * @return string|null
     */
    public function getEditUrl()
    {
        return $this->container['edit_url'];
    }

    /**
     * Sets edit_url
     *
     * @param string|null $edit_url The URL edit path segment defined in the Connect module.
     *
     * @return self
     */
    public function setEditUrl($edit_url)
    {

        if (is_null($edit_url)) {
            throw new \InvalidArgumentException('non-nullable edit_url cannot be null');
        }

        $this->container['edit_url'] = $edit_url;

        return $this;
    }

    /**
     * Gets module_key
     *
     * @return string|null
     */
    public function getModuleKey()
    {
        return $this->container['module_key'];
    }

    /**
     * Sets module_key
     *
     * @param string|null $module_key The module providing the rule.
     *
     * @return self
     */
    public function setModuleKey($module_key)
    {

        if (is_null($module_key)) {
            throw new \InvalidArgumentException('non-nullable module_key cannot be null');
        }

        $this->container['module_key'] = $module_key;

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
     * @param string|null $name The rule name.
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
     * Gets rule_key
     *
     * @return string|null
     */
    public function getRuleKey()
    {
        return $this->container['rule_key'];
    }

    /**
     * Sets rule_key
     *
     * @param string|null $rule_key The rule key.
     *
     * @return self
     */
    public function setRuleKey($rule_key)
    {

        if (is_null($rule_key)) {
            throw new \InvalidArgumentException('non-nullable rule_key cannot be null');
        }

        $this->container['rule_key'] = $rule_key;

        return $this;
    }

    /**
     * Gets rule_type
     *
     * @return string|null
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     *
     * @param string|null $rule_type The rule type.
     *
     * @return self
     */
    public function setRuleType($rule_type)
    {
        $allowedValues = $this->getRuleTypeAllowableValues();
        if (!is_null($rule_type) && !in_array($rule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rule_type', must be one of '%s'",
                    $rule_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($rule_type)) {
            throw new \InvalidArgumentException('non-nullable rule_type cannot be null');
        }

        $this->container['rule_type'] = $rule_type;

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
     * @param string|null $view_url The URL view path segment defined in the Connect module.
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


