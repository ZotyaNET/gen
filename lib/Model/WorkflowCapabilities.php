<?php
/**
 * WorkflowCapabilities
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
 * WorkflowCapabilities Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkflowCapabilities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkflowCapabilities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connect_rules' => '\OpenAPI\Client\Model\AvailableWorkflowConnectRule[]',
        'editor_scope' => 'string',
        'forge_rules' => '\OpenAPI\Client\Model\AvailableWorkflowForgeRule[]',
        'project_types' => 'string[]',
        'system_rules' => '\OpenAPI\Client\Model\AvailableWorkflowSystemRule[]',
        'trigger_rules' => '\OpenAPI\Client\Model\AvailableWorkflowTriggers[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connect_rules' => null,
        'editor_scope' => null,
        'forge_rules' => null,
        'project_types' => null,
        'system_rules' => null,
        'trigger_rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'connect_rules' => false,
		'editor_scope' => false,
		'forge_rules' => false,
		'project_types' => false,
		'system_rules' => false,
		'trigger_rules' => false
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
        'connect_rules' => 'connectRules',
        'editor_scope' => 'editorScope',
        'forge_rules' => 'forgeRules',
        'project_types' => 'projectTypes',
        'system_rules' => 'systemRules',
        'trigger_rules' => 'triggerRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connect_rules' => 'setConnectRules',
        'editor_scope' => 'setEditorScope',
        'forge_rules' => 'setForgeRules',
        'project_types' => 'setProjectTypes',
        'system_rules' => 'setSystemRules',
        'trigger_rules' => 'setTriggerRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connect_rules' => 'getConnectRules',
        'editor_scope' => 'getEditorScope',
        'forge_rules' => 'getForgeRules',
        'project_types' => 'getProjectTypes',
        'system_rules' => 'getSystemRules',
        'trigger_rules' => 'getTriggerRules'
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

    public const EDITOR_SCOPE_PROJECT = 'PROJECT';
    public const EDITOR_SCOPE__GLOBAL = 'GLOBAL';
    public const PROJECT_TYPES_SOFTWARE = 'software';
    public const PROJECT_TYPES_SERVICE_DESK = 'service_desk';
    public const PROJECT_TYPES_PRODUCT_DISCOVERY = 'product_discovery';
    public const PROJECT_TYPES_BUSINESS = 'business';
    public const PROJECT_TYPES_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEditorScopeAllowableValues()
    {
        return [
            self::EDITOR_SCOPE_PROJECT,
            self::EDITOR_SCOPE__GLOBAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProjectTypesAllowableValues()
    {
        return [
            self::PROJECT_TYPES_SOFTWARE,
            self::PROJECT_TYPES_SERVICE_DESK,
            self::PROJECT_TYPES_PRODUCT_DISCOVERY,
            self::PROJECT_TYPES_BUSINESS,
            self::PROJECT_TYPES_UNKNOWN,
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
        $this->setIfExists('connect_rules', $data ?? [], null);
        $this->setIfExists('editor_scope', $data ?? [], null);
        $this->setIfExists('forge_rules', $data ?? [], null);
        $this->setIfExists('project_types', $data ?? [], null);
        $this->setIfExists('system_rules', $data ?? [], null);
        $this->setIfExists('trigger_rules', $data ?? [], null);
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

        $allowedValues = $this->getEditorScopeAllowableValues();
        if (!is_null($this->container['editor_scope']) && !in_array($this->container['editor_scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'editor_scope', must be one of '%s'",
                $this->container['editor_scope'],
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
     * Gets connect_rules
     *
     * @return \OpenAPI\Client\Model\AvailableWorkflowConnectRule[]|null
     */
    public function getConnectRules()
    {
        return $this->container['connect_rules'];
    }

    /**
     * Sets connect_rules
     *
     * @param \OpenAPI\Client\Model\AvailableWorkflowConnectRule[]|null $connect_rules The Connect provided ecosystem rules available.
     *
     * @return self
     */
    public function setConnectRules($connect_rules)
    {

        if (is_null($connect_rules)) {
            throw new \InvalidArgumentException('non-nullable connect_rules cannot be null');
        }

        $this->container['connect_rules'] = $connect_rules;

        return $this;
    }

    /**
     * Gets editor_scope
     *
     * @return string|null
     */
    public function getEditorScope()
    {
        return $this->container['editor_scope'];
    }

    /**
     * Sets editor_scope
     *
     * @param string|null $editor_scope The scope of the workflow capabilities. `GLOBAL` for company-managed projects and `PROJECT` for team-managed projects.
     *
     * @return self
     */
    public function setEditorScope($editor_scope)
    {
        $allowedValues = $this->getEditorScopeAllowableValues();
        if (!is_null($editor_scope) && !in_array($editor_scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'editor_scope', must be one of '%s'",
                    $editor_scope,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($editor_scope)) {
            throw new \InvalidArgumentException('non-nullable editor_scope cannot be null');
        }

        $this->container['editor_scope'] = $editor_scope;

        return $this;
    }

    /**
     * Gets forge_rules
     *
     * @return \OpenAPI\Client\Model\AvailableWorkflowForgeRule[]|null
     */
    public function getForgeRules()
    {
        return $this->container['forge_rules'];
    }

    /**
     * Sets forge_rules
     *
     * @param \OpenAPI\Client\Model\AvailableWorkflowForgeRule[]|null $forge_rules The Forge provided ecosystem rules available.
     *
     * @return self
     */
    public function setForgeRules($forge_rules)
    {

        if (is_null($forge_rules)) {
            throw new \InvalidArgumentException('non-nullable forge_rules cannot be null');
        }

        $this->container['forge_rules'] = $forge_rules;

        return $this;
    }

    /**
     * Gets project_types
     *
     * @return string[]|null
     */
    public function getProjectTypes()
    {
        return $this->container['project_types'];
    }

    /**
     * Sets project_types
     *
     * @param string[]|null $project_types The types of projects that this capability set is available for.
     *
     * @return self
     */
    public function setProjectTypes($project_types)
    {
        $allowedValues = $this->getProjectTypesAllowableValues();
        if (!is_null($project_types) && array_diff($project_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'project_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($project_types)) {
            throw new \InvalidArgumentException('non-nullable project_types cannot be null');
        }

        $this->container['project_types'] = $project_types;

        return $this;
    }

    /**
     * Gets system_rules
     *
     * @return \OpenAPI\Client\Model\AvailableWorkflowSystemRule[]|null
     */
    public function getSystemRules()
    {
        return $this->container['system_rules'];
    }

    /**
     * Sets system_rules
     *
     * @param \OpenAPI\Client\Model\AvailableWorkflowSystemRule[]|null $system_rules The Atlassian provided system rules available.
     *
     * @return self
     */
    public function setSystemRules($system_rules)
    {

        if (is_null($system_rules)) {
            throw new \InvalidArgumentException('non-nullable system_rules cannot be null');
        }

        $this->container['system_rules'] = $system_rules;

        return $this;
    }

    /**
     * Gets trigger_rules
     *
     * @return \OpenAPI\Client\Model\AvailableWorkflowTriggers[]|null
     */
    public function getTriggerRules()
    {
        return $this->container['trigger_rules'];
    }

    /**
     * Sets trigger_rules
     *
     * @param \OpenAPI\Client\Model\AvailableWorkflowTriggers[]|null $trigger_rules The trigger rules available.
     *
     * @return self
     */
    public function setTriggerRules($trigger_rules)
    {

        if (is_null($trigger_rules)) {
            throw new \InvalidArgumentException('non-nullable trigger_rules cannot be null');
        }

        $this->container['trigger_rules'] = $trigger_rules;

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


