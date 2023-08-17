<?php
/**
 * IssueTransition
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
 * IssueTransition Class Doc Comment
 *
 * @category Class
 * @description Details of an issue transition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IssueTransition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssueTransition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expand' => 'string',
        'fields' => 'array<string,\OpenAPI\Client\Model\FieldMetadata>',
        'has_screen' => 'bool',
        'id' => 'string',
        'is_available' => 'bool',
        'is_conditional' => 'bool',
        'is_global' => 'bool',
        'is_initial' => 'bool',
        'looped' => 'bool',
        'name' => 'string',
        'to' => '\OpenAPI\Client\Model\IssueTransitionTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expand' => null,
        'fields' => null,
        'has_screen' => null,
        'id' => null,
        'is_available' => null,
        'is_conditional' => null,
        'is_global' => null,
        'is_initial' => null,
        'looped' => null,
        'name' => null,
        'to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expand' => false,
		'fields' => false,
		'has_screen' => false,
		'id' => false,
		'is_available' => false,
		'is_conditional' => false,
		'is_global' => false,
		'is_initial' => false,
		'looped' => false,
		'name' => false,
		'to' => false
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
        'expand' => 'expand',
        'fields' => 'fields',
        'has_screen' => 'hasScreen',
        'id' => 'id',
        'is_available' => 'isAvailable',
        'is_conditional' => 'isConditional',
        'is_global' => 'isGlobal',
        'is_initial' => 'isInitial',
        'looped' => 'looped',
        'name' => 'name',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expand' => 'setExpand',
        'fields' => 'setFields',
        'has_screen' => 'setHasScreen',
        'id' => 'setId',
        'is_available' => 'setIsAvailable',
        'is_conditional' => 'setIsConditional',
        'is_global' => 'setIsGlobal',
        'is_initial' => 'setIsInitial',
        'looped' => 'setLooped',
        'name' => 'setName',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expand' => 'getExpand',
        'fields' => 'getFields',
        'has_screen' => 'getHasScreen',
        'id' => 'getId',
        'is_available' => 'getIsAvailable',
        'is_conditional' => 'getIsConditional',
        'is_global' => 'getIsGlobal',
        'is_initial' => 'getIsInitial',
        'looped' => 'getLooped',
        'name' => 'getName',
        'to' => 'getTo'
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
        $this->setIfExists('expand', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('has_screen', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_available', $data ?? [], null);
        $this->setIfExists('is_conditional', $data ?? [], null);
        $this->setIfExists('is_global', $data ?? [], null);
        $this->setIfExists('is_initial', $data ?? [], null);
        $this->setIfExists('looped', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
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
     * @param string|null $expand Expand options that include additional transition details in the response.
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
     * Gets fields
     *
     * @return array<string,\OpenAPI\Client\Model\FieldMetadata>|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param array<string,\OpenAPI\Client\Model\FieldMetadata>|null $fields Details of the fields associated with the issue transition screen. Use this information to populate `fields` and `update` in a transition request.
     *
     * @return self
     */
    public function setFields($fields)
    {

        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }

        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets has_screen
     *
     * @return bool|null
     */
    public function getHasScreen()
    {
        return $this->container['has_screen'];
    }

    /**
     * Sets has_screen
     *
     * @param bool|null $has_screen Whether there is a screen associated with the issue transition.
     *
     * @return self
     */
    public function setHasScreen($has_screen)
    {

        if (is_null($has_screen)) {
            throw new \InvalidArgumentException('non-nullable has_screen cannot be null');
        }

        $this->container['has_screen'] = $has_screen;

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
     * @param string|null $id The ID of the issue transition. Required when specifying a transition to undertake.
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
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available Whether the transition is available to be performed.
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {

        if (is_null($is_available)) {
            throw new \InvalidArgumentException('non-nullable is_available cannot be null');
        }

        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets is_conditional
     *
     * @return bool|null
     */
    public function getIsConditional()
    {
        return $this->container['is_conditional'];
    }

    /**
     * Sets is_conditional
     *
     * @param bool|null $is_conditional Whether the issue has to meet criteria before the issue transition is applied.
     *
     * @return self
     */
    public function setIsConditional($is_conditional)
    {

        if (is_null($is_conditional)) {
            throw new \InvalidArgumentException('non-nullable is_conditional cannot be null');
        }

        $this->container['is_conditional'] = $is_conditional;

        return $this;
    }

    /**
     * Gets is_global
     *
     * @return bool|null
     */
    public function getIsGlobal()
    {
        return $this->container['is_global'];
    }

    /**
     * Sets is_global
     *
     * @param bool|null $is_global Whether the issue transition is global, that is, the transition is applied to issues regardless of their status.
     *
     * @return self
     */
    public function setIsGlobal($is_global)
    {

        if (is_null($is_global)) {
            throw new \InvalidArgumentException('non-nullable is_global cannot be null');
        }

        $this->container['is_global'] = $is_global;

        return $this;
    }

    /**
     * Gets is_initial
     *
     * @return bool|null
     */
    public function getIsInitial()
    {
        return $this->container['is_initial'];
    }

    /**
     * Sets is_initial
     *
     * @param bool|null $is_initial Whether this is the initial issue transition for the workflow.
     *
     * @return self
     */
    public function setIsInitial($is_initial)
    {

        if (is_null($is_initial)) {
            throw new \InvalidArgumentException('non-nullable is_initial cannot be null');
        }

        $this->container['is_initial'] = $is_initial;

        return $this;
    }

    /**
     * Gets looped
     *
     * @return bool|null
     */
    public function getLooped()
    {
        return $this->container['looped'];
    }

    /**
     * Sets looped
     *
     * @param bool|null $looped looped
     *
     * @return self
     */
    public function setLooped($looped)
    {

        if (is_null($looped)) {
            throw new \InvalidArgumentException('non-nullable looped cannot be null');
        }

        $this->container['looped'] = $looped;

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
     * @param string|null $name The name of the issue transition.
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
     * Gets to
     *
     * @return \OpenAPI\Client\Model\IssueTransitionTo|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \OpenAPI\Client\Model\IssueTransitionTo|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {

        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        $this->container['to'] = $to;

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


