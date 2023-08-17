<?php
/**
 * JiraWorkflow
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
 * JiraWorkflow Class Doc Comment
 *
 * @category Class
 * @description Details of a workflow.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JiraWorkflow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JiraWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'id' => 'string',
        'is_editable' => 'bool',
        'name' => 'string',
        'scope' => '\OpenAPI\Client\Model\WorkflowScope',
        'start_point_layout' => '\OpenAPI\Client\Model\WorkflowLayout',
        'statuses' => '\OpenAPI\Client\Model\WorkflowReferenceStatus[]',
        'task_id' => 'string',
        'transitions' => '\OpenAPI\Client\Model\WorkflowTransitions[]',
        'usages' => '\OpenAPI\Client\Model\ProjectIssueTypes[]',
        'version' => '\OpenAPI\Client\Model\DocumentVersion'
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
        'id' => null,
        'is_editable' => null,
        'name' => null,
        'scope' => null,
        'start_point_layout' => null,
        'statuses' => null,
        'task_id' => null,
        'transitions' => null,
        'usages' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'id' => false,
		'is_editable' => false,
		'name' => false,
		'scope' => false,
		'start_point_layout' => true,
		'statuses' => false,
		'task_id' => true,
		'transitions' => false,
		'usages' => false,
		'version' => false
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
        'id' => 'id',
        'is_editable' => 'isEditable',
        'name' => 'name',
        'scope' => 'scope',
        'start_point_layout' => 'startPointLayout',
        'statuses' => 'statuses',
        'task_id' => 'taskId',
        'transitions' => 'transitions',
        'usages' => 'usages',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'id' => 'setId',
        'is_editable' => 'setIsEditable',
        'name' => 'setName',
        'scope' => 'setScope',
        'start_point_layout' => 'setStartPointLayout',
        'statuses' => 'setStatuses',
        'task_id' => 'setTaskId',
        'transitions' => 'setTransitions',
        'usages' => 'setUsages',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'id' => 'getId',
        'is_editable' => 'getIsEditable',
        'name' => 'getName',
        'scope' => 'getScope',
        'start_point_layout' => 'getStartPointLayout',
        'statuses' => 'getStatuses',
        'task_id' => 'getTaskId',
        'transitions' => 'getTransitions',
        'usages' => 'getUsages',
        'version' => 'getVersion'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_editable', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('start_point_layout', $data ?? [], null);
        $this->setIfExists('statuses', $data ?? [], null);
        $this->setIfExists('task_id', $data ?? [], null);
        $this->setIfExists('transitions', $data ?? [], null);
        $this->setIfExists('usages', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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
     * @param string|null $id The ID of the workflow.
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
     * Gets is_editable
     *
     * @return bool|null
     */
    public function getIsEditable()
    {
        return $this->container['is_editable'];
    }

    /**
     * Sets is_editable
     *
     * @param bool|null $is_editable Indicates if the workflow can be edited.
     *
     * @return self
     */
    public function setIsEditable($is_editable)
    {

        if (is_null($is_editable)) {
            throw new \InvalidArgumentException('non-nullable is_editable cannot be null');
        }

        $this->container['is_editable'] = $is_editable;

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
     * @return \OpenAPI\Client\Model\WorkflowScope|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \OpenAPI\Client\Model\WorkflowScope|null $scope scope
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
     * Gets start_point_layout
     *
     * @return \OpenAPI\Client\Model\WorkflowLayout|null
     */
    public function getStartPointLayout()
    {
        return $this->container['start_point_layout'];
    }

    /**
     * Sets start_point_layout
     *
     * @param \OpenAPI\Client\Model\WorkflowLayout|null $start_point_layout start_point_layout
     *
     * @return self
     */
    public function setStartPointLayout($start_point_layout)
    {

        if (is_null($start_point_layout)) {
            array_push($this->openAPINullablesSetToNull, 'start_point_layout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_point_layout', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['start_point_layout'] = $start_point_layout;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \OpenAPI\Client\Model\WorkflowReferenceStatus[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \OpenAPI\Client\Model\WorkflowReferenceStatus[]|null $statuses The statuses referenced in this workflow.
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
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id If there is a current [asynchronous task](#async-operations) operation for this workflow.
     *
     * @return self
     */
    public function setTaskId($task_id)
    {

        if (is_null($task_id)) {
            array_push($this->openAPINullablesSetToNull, 'task_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('task_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets transitions
     *
     * @return \OpenAPI\Client\Model\WorkflowTransitions[]|null
     */
    public function getTransitions()
    {
        return $this->container['transitions'];
    }

    /**
     * Sets transitions
     *
     * @param \OpenAPI\Client\Model\WorkflowTransitions[]|null $transitions The transitions of the workflow.
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
     * Gets usages
     *
     * @return \OpenAPI\Client\Model\ProjectIssueTypes[]|null
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param \OpenAPI\Client\Model\ProjectIssueTypes[]|null $usages Use the optional `workflows.usages` expand to get additional information about the projects and issue types associated with the requested workflows.
     *
     * @return self
     */
    public function setUsages($usages)
    {



        if (is_null($usages)) {
            throw new \InvalidArgumentException('non-nullable usages cannot be null');
        }

        $this->container['usages'] = $usages;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \OpenAPI\Client\Model\DocumentVersion|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \OpenAPI\Client\Model\DocumentVersion|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {

        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        $this->container['version'] = $version;

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


