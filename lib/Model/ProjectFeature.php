<?php
/**
 * ProjectFeature
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
 * ProjectFeature Class Doc Comment
 *
 * @category Class
 * @description Details of a project feature.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectFeature implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectFeature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feature' => 'string',
        'image_uri' => 'string',
        'localised_description' => 'string',
        'localised_name' => 'string',
        'prerequisites' => 'string[]',
        'project_id' => 'int',
        'state' => 'string',
        'toggle_locked' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feature' => null,
        'image_uri' => null,
        'localised_description' => null,
        'localised_name' => null,
        'prerequisites' => null,
        'project_id' => 'int64',
        'state' => null,
        'toggle_locked' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feature' => false,
		'image_uri' => false,
		'localised_description' => false,
		'localised_name' => false,
		'prerequisites' => false,
		'project_id' => false,
		'state' => false,
		'toggle_locked' => false
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
        'feature' => 'feature',
        'image_uri' => 'imageUri',
        'localised_description' => 'localisedDescription',
        'localised_name' => 'localisedName',
        'prerequisites' => 'prerequisites',
        'project_id' => 'projectId',
        'state' => 'state',
        'toggle_locked' => 'toggleLocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature' => 'setFeature',
        'image_uri' => 'setImageUri',
        'localised_description' => 'setLocalisedDescription',
        'localised_name' => 'setLocalisedName',
        'prerequisites' => 'setPrerequisites',
        'project_id' => 'setProjectId',
        'state' => 'setState',
        'toggle_locked' => 'setToggleLocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature' => 'getFeature',
        'image_uri' => 'getImageUri',
        'localised_description' => 'getLocalisedDescription',
        'localised_name' => 'getLocalisedName',
        'prerequisites' => 'getPrerequisites',
        'project_id' => 'getProjectId',
        'state' => 'getState',
        'toggle_locked' => 'getToggleLocked'
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

    public const STATE_ENABLED = 'ENABLED';
    public const STATE_DISABLED = 'DISABLED';
    public const STATE_COMING_SOON = 'COMING_SOON';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_DISABLED,
            self::STATE_COMING_SOON,
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
        $this->setIfExists('feature', $data ?? [], null);
        $this->setIfExists('image_uri', $data ?? [], null);
        $this->setIfExists('localised_description', $data ?? [], null);
        $this->setIfExists('localised_name', $data ?? [], null);
        $this->setIfExists('prerequisites', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('toggle_locked', $data ?? [], null);
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * Gets feature
     *
     * @return string|null
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature
     *
     * @param string|null $feature The key of the feature.
     *
     * @return self
     */
    public function setFeature($feature)
    {

        if (is_null($feature)) {
            throw new \InvalidArgumentException('non-nullable feature cannot be null');
        }

        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets image_uri
     *
     * @return string|null
     */
    public function getImageUri()
    {
        return $this->container['image_uri'];
    }

    /**
     * Sets image_uri
     *
     * @param string|null $image_uri URI for the image representing the feature.
     *
     * @return self
     */
    public function setImageUri($image_uri)
    {

        if (is_null($image_uri)) {
            throw new \InvalidArgumentException('non-nullable image_uri cannot be null');
        }

        $this->container['image_uri'] = $image_uri;

        return $this;
    }

    /**
     * Gets localised_description
     *
     * @return string|null
     */
    public function getLocalisedDescription()
    {
        return $this->container['localised_description'];
    }

    /**
     * Sets localised_description
     *
     * @param string|null $localised_description Localized display description for the feature.
     *
     * @return self
     */
    public function setLocalisedDescription($localised_description)
    {

        if (is_null($localised_description)) {
            throw new \InvalidArgumentException('non-nullable localised_description cannot be null');
        }

        $this->container['localised_description'] = $localised_description;

        return $this;
    }

    /**
     * Gets localised_name
     *
     * @return string|null
     */
    public function getLocalisedName()
    {
        return $this->container['localised_name'];
    }

    /**
     * Sets localised_name
     *
     * @param string|null $localised_name Localized display name for the feature.
     *
     * @return self
     */
    public function setLocalisedName($localised_name)
    {

        if (is_null($localised_name)) {
            throw new \InvalidArgumentException('non-nullable localised_name cannot be null');
        }

        $this->container['localised_name'] = $localised_name;

        return $this;
    }

    /**
     * Gets prerequisites
     *
     * @return string[]|null
     */
    public function getPrerequisites()
    {
        return $this->container['prerequisites'];
    }

    /**
     * Sets prerequisites
     *
     * @param string[]|null $prerequisites List of keys of the features required to enable the feature.
     *
     * @return self
     */
    public function setPrerequisites($prerequisites)
    {

        if (is_null($prerequisites)) {
            throw new \InvalidArgumentException('non-nullable prerequisites cannot be null');
        }

        $this->container['prerequisites'] = $prerequisites;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int|null $project_id The ID of the project.
     *
     * @return self
     */
    public function setProjectId($project_id)
    {

        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }

        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state of the feature. When updating the state of a feature, only ENABLED and DISABLED are supported. Responses can contain all values
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets toggle_locked
     *
     * @return bool|null
     */
    public function getToggleLocked()
    {
        return $this->container['toggle_locked'];
    }

    /**
     * Sets toggle_locked
     *
     * @param bool|null $toggle_locked Whether the state of the feature can be updated.
     *
     * @return self
     */
    public function setToggleLocked($toggle_locked)
    {

        if (is_null($toggle_locked)) {
            throw new \InvalidArgumentException('non-nullable toggle_locked cannot be null');
        }

        $this->container['toggle_locked'] = $toggle_locked;

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

