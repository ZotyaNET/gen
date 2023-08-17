<?php
/**
 * Workflow
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
 * Workflow Class Doc Comment
 *
 * @category Class
 * @description Details about a workflow.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Workflow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Workflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => '\DateTime',
        'description' => 'string',
        'has_draft_workflow' => 'bool',
        'id' => '\OpenAPI\Client\Model\PublishedWorkflowId',
        'is_default' => 'bool',
        'operations' => '\OpenAPI\Client\Model\WorkflowOperations',
        'projects' => '\OpenAPI\Client\Model\ProjectDetails[]',
        'schemes' => '\OpenAPI\Client\Model\WorkflowSchemeIdName[]',
        'statuses' => '\OpenAPI\Client\Model\WorkflowStatus[]',
        'transitions' => '\OpenAPI\Client\Model\Transition[]',
        'updated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created' => 'date-time',
        'description' => null,
        'has_draft_workflow' => null,
        'id' => null,
        'is_default' => null,
        'operations' => null,
        'projects' => null,
        'schemes' => null,
        'statuses' => null,
        'transitions' => null,
        'updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'created' => false,
		'description' => false,
		'has_draft_workflow' => false,
		'id' => false,
		'is_default' => false,
		'operations' => false,
		'projects' => false,
		'schemes' => false,
		'statuses' => false,
		'transitions' => false,
		'updated' => false
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
        'created' => 'created',
        'description' => 'description',
        'has_draft_workflow' => 'hasDraftWorkflow',
        'id' => 'id',
        'is_default' => 'isDefault',
        'operations' => 'operations',
        'projects' => 'projects',
        'schemes' => 'schemes',
        'statuses' => 'statuses',
        'transitions' => 'transitions',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'description' => 'setDescription',
        'has_draft_workflow' => 'setHasDraftWorkflow',
        'id' => 'setId',
        'is_default' => 'setIsDefault',
        'operations' => 'setOperations',
        'projects' => 'setProjects',
        'schemes' => 'setSchemes',
        'statuses' => 'setStatuses',
        'transitions' => 'setTransitions',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'description' => 'getDescription',
        'has_draft_workflow' => 'getHasDraftWorkflow',
        'id' => 'getId',
        'is_default' => 'getIsDefault',
        'operations' => 'getOperations',
        'projects' => 'getProjects',
        'schemes' => 'getSchemes',
        'statuses' => 'getStatuses',
        'transitions' => 'getTransitions',
        'updated' => 'getUpdated'
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
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('has_draft_workflow', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('operations', $data ?? [], null);
        $this->setIfExists('projects', $data ?? [], null);
        $this->setIfExists('schemes', $data ?? [], null);
        $this->setIfExists('statuses', $data ?? [], null);
        $this->setIfExists('transitions', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * @param \DateTime|null $created The creation date of the workflow.
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
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the workflow.
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
     * Gets has_draft_workflow
     *
     * @return bool|null
     */
    public function getHasDraftWorkflow()
    {
        return $this->container['has_draft_workflow'];
    }

    /**
     * Sets has_draft_workflow
     *
     * @param bool|null $has_draft_workflow Whether the workflow has a draft version.
     *
     * @return self
     */
    public function setHasDraftWorkflow($has_draft_workflow)
    {

        if (is_null($has_draft_workflow)) {
            throw new \InvalidArgumentException('non-nullable has_draft_workflow cannot be null');
        }

        $this->container['has_draft_workflow'] = $has_draft_workflow;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \OpenAPI\Client\Model\PublishedWorkflowId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \OpenAPI\Client\Model\PublishedWorkflowId $id id
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
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default Whether this is the default workflow.
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {

        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }

        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets operations
     *
     * @return \OpenAPI\Client\Model\WorkflowOperations|null
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param \OpenAPI\Client\Model\WorkflowOperations|null $operations operations
     *
     * @return self
     */
    public function setOperations($operations)
    {

        if (is_null($operations)) {
            throw new \InvalidArgumentException('non-nullable operations cannot be null');
        }

        $this->container['operations'] = $operations;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \OpenAPI\Client\Model\ProjectDetails[]|null
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \OpenAPI\Client\Model\ProjectDetails[]|null $projects The projects the workflow is assigned to, through workflow schemes.
     *
     * @return self
     */
    public function setProjects($projects)
    {

        if (is_null($projects)) {
            throw new \InvalidArgumentException('non-nullable projects cannot be null');
        }

        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets schemes
     *
     * @return \OpenAPI\Client\Model\WorkflowSchemeIdName[]|null
     */
    public function getSchemes()
    {
        return $this->container['schemes'];
    }

    /**
     * Sets schemes
     *
     * @param \OpenAPI\Client\Model\WorkflowSchemeIdName[]|null $schemes The workflow schemes the workflow is assigned to.
     *
     * @return self
     */
    public function setSchemes($schemes)
    {

        if (is_null($schemes)) {
            throw new \InvalidArgumentException('non-nullable schemes cannot be null');
        }

        $this->container['schemes'] = $schemes;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \OpenAPI\Client\Model\WorkflowStatus[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \OpenAPI\Client\Model\WorkflowStatus[]|null $statuses The statuses of the workflow.
     *
     * @return self
     */
    public function setStatuses($statuses)
    {

        if (is_null($statuses)) {
            throw new \InvalidArgumentException('non-nullable statuses cannot be null');
        }

        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets transitions
     *
     * @return \OpenAPI\Client\Model\Transition[]|null
     */
    public function getTransitions()
    {
        return $this->container['transitions'];
    }

    /**
     * Sets transitions
     *
     * @param \OpenAPI\Client\Model\Transition[]|null $transitions The transitions of the workflow.
     *
     * @return self
     */
    public function setTransitions($transitions)
    {

        if (is_null($transitions)) {
            throw new \InvalidArgumentException('non-nullable transitions cannot be null');
        }

        $this->container['transitions'] = $transitions;

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
     * @param \DateTime|null $updated The last edited date of the workflow.
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

