<?php
/**
 * ComponentWithIssueCount
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
 * ComponentWithIssueCount Class Doc Comment
 *
 * @category Class
 * @description Details about a component with a count of the issues it contains.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComponentWithIssueCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ComponentWithIssueCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignee' => '\OpenAPI\Client\Model\ComponentWithIssueCountAssignee',
        'assignee_type' => 'string',
        'description' => 'string',
        'id' => 'string',
        'is_assignee_type_valid' => 'bool',
        'issue_count' => 'int',
        'lead' => '\OpenAPI\Client\Model\ComponentWithIssueCountLead',
        'name' => 'string',
        'project' => 'string',
        'project_id' => 'int',
        'real_assignee' => '\OpenAPI\Client\Model\ComponentWithIssueCountRealAssignee',
        'real_assignee_type' => 'string',
        'self' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assignee' => null,
        'assignee_type' => null,
        'description' => null,
        'id' => null,
        'is_assignee_type_valid' => null,
        'issue_count' => 'int64',
        'lead' => null,
        'name' => null,
        'project' => null,
        'project_id' => 'int64',
        'real_assignee' => null,
        'real_assignee_type' => null,
        'self' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assignee' => false,
		'assignee_type' => false,
		'description' => false,
		'id' => false,
		'is_assignee_type_valid' => false,
		'issue_count' => false,
		'lead' => false,
		'name' => false,
		'project' => false,
		'project_id' => false,
		'real_assignee' => false,
		'real_assignee_type' => false,
		'self' => false
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
        'assignee' => 'assignee',
        'assignee_type' => 'assigneeType',
        'description' => 'description',
        'id' => 'id',
        'is_assignee_type_valid' => 'isAssigneeTypeValid',
        'issue_count' => 'issueCount',
        'lead' => 'lead',
        'name' => 'name',
        'project' => 'project',
        'project_id' => 'projectId',
        'real_assignee' => 'realAssignee',
        'real_assignee_type' => 'realAssigneeType',
        'self' => 'self'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignee' => 'setAssignee',
        'assignee_type' => 'setAssigneeType',
        'description' => 'setDescription',
        'id' => 'setId',
        'is_assignee_type_valid' => 'setIsAssigneeTypeValid',
        'issue_count' => 'setIssueCount',
        'lead' => 'setLead',
        'name' => 'setName',
        'project' => 'setProject',
        'project_id' => 'setProjectId',
        'real_assignee' => 'setRealAssignee',
        'real_assignee_type' => 'setRealAssigneeType',
        'self' => 'setSelf'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignee' => 'getAssignee',
        'assignee_type' => 'getAssigneeType',
        'description' => 'getDescription',
        'id' => 'getId',
        'is_assignee_type_valid' => 'getIsAssigneeTypeValid',
        'issue_count' => 'getIssueCount',
        'lead' => 'getLead',
        'name' => 'getName',
        'project' => 'getProject',
        'project_id' => 'getProjectId',
        'real_assignee' => 'getRealAssignee',
        'real_assignee_type' => 'getRealAssigneeType',
        'self' => 'getSelf'
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

    public const ASSIGNEE_TYPE_PROJECT_DEFAULT = 'PROJECT_DEFAULT';
    public const ASSIGNEE_TYPE_COMPONENT_LEAD = 'COMPONENT_LEAD';
    public const ASSIGNEE_TYPE_PROJECT_LEAD = 'PROJECT_LEAD';
    public const ASSIGNEE_TYPE_UNASSIGNED = 'UNASSIGNED';
    public const REAL_ASSIGNEE_TYPE_PROJECT_DEFAULT = 'PROJECT_DEFAULT';
    public const REAL_ASSIGNEE_TYPE_COMPONENT_LEAD = 'COMPONENT_LEAD';
    public const REAL_ASSIGNEE_TYPE_PROJECT_LEAD = 'PROJECT_LEAD';
    public const REAL_ASSIGNEE_TYPE_UNASSIGNED = 'UNASSIGNED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAssigneeTypeAllowableValues()
    {
        return [
            self::ASSIGNEE_TYPE_PROJECT_DEFAULT,
            self::ASSIGNEE_TYPE_COMPONENT_LEAD,
            self::ASSIGNEE_TYPE_PROJECT_LEAD,
            self::ASSIGNEE_TYPE_UNASSIGNED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRealAssigneeTypeAllowableValues()
    {
        return [
            self::REAL_ASSIGNEE_TYPE_PROJECT_DEFAULT,
            self::REAL_ASSIGNEE_TYPE_COMPONENT_LEAD,
            self::REAL_ASSIGNEE_TYPE_PROJECT_LEAD,
            self::REAL_ASSIGNEE_TYPE_UNASSIGNED,
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
        $this->setIfExists('assignee', $data ?? [], null);
        $this->setIfExists('assignee_type', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_assignee_type_valid', $data ?? [], null);
        $this->setIfExists('issue_count', $data ?? [], null);
        $this->setIfExists('lead', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('project', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('real_assignee', $data ?? [], null);
        $this->setIfExists('real_assignee_type', $data ?? [], null);
        $this->setIfExists('self', $data ?? [], null);
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

        $allowedValues = $this->getRealAssigneeTypeAllowableValues();
        if (!is_null($this->container['real_assignee_type']) && !in_array($this->container['real_assignee_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'real_assignee_type', must be one of '%s'",
                $this->container['real_assignee_type'],
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
     * Gets assignee
     *
     * @return \OpenAPI\Client\Model\ComponentWithIssueCountAssignee|null
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param \OpenAPI\Client\Model\ComponentWithIssueCountAssignee|null $assignee assignee
     *
     * @return self
     */
    public function setAssignee($assignee)
    {

        if (is_null($assignee)) {
            throw new \InvalidArgumentException('non-nullable assignee cannot be null');
        }

        $this->container['assignee'] = $assignee;

        return $this;
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
     * @param string|null $assignee_type The nominal user type used to determine the assignee for issues created with this component. See `realAssigneeType` for details on how the type of the user, and hence the user, assigned to issues is determined. Takes the following values:   *  `PROJECT_LEAD` the assignee to any issues created with this component is nominally the lead for the project the component is in.  *  `COMPONENT_LEAD` the assignee to any issues created with this component is nominally the lead for the component.  *  `UNASSIGNED` an assignee is not set for issues created with this component.  *  `PROJECT_DEFAULT` the assignee to any issues created with this component is nominally the default assignee for the project that the component is in.
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
     * @param string|null $description The description for the component.
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
     * @param string|null $id The unique identifier for the component.
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
     * Gets is_assignee_type_valid
     *
     * @return bool|null
     */
    public function getIsAssigneeTypeValid()
    {
        return $this->container['is_assignee_type_valid'];
    }

    /**
     * Sets is_assignee_type_valid
     *
     * @param bool|null $is_assignee_type_valid Whether a user is associated with `assigneeType`. For example, if the `assigneeType` is set to `COMPONENT_LEAD` but the component lead is not set, then `false` is returned.
     *
     * @return self
     */
    public function setIsAssigneeTypeValid($is_assignee_type_valid)
    {

        if (is_null($is_assignee_type_valid)) {
            throw new \InvalidArgumentException('non-nullable is_assignee_type_valid cannot be null');
        }

        $this->container['is_assignee_type_valid'] = $is_assignee_type_valid;

        return $this;
    }

    /**
     * Gets issue_count
     *
     * @return int|null
     */
    public function getIssueCount()
    {
        return $this->container['issue_count'];
    }

    /**
     * Sets issue_count
     *
     * @param int|null $issue_count Count of issues for the component.
     *
     * @return self
     */
    public function setIssueCount($issue_count)
    {

        if (is_null($issue_count)) {
            throw new \InvalidArgumentException('non-nullable issue_count cannot be null');
        }

        $this->container['issue_count'] = $issue_count;

        return $this;
    }

    /**
     * Gets lead
     *
     * @return \OpenAPI\Client\Model\ComponentWithIssueCountLead|null
     */
    public function getLead()
    {
        return $this->container['lead'];
    }

    /**
     * Sets lead
     *
     * @param \OpenAPI\Client\Model\ComponentWithIssueCountLead|null $lead lead
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
     * @param string|null $name The name for the component.
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
     * Gets project
     *
     * @return string|null
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param string|null $project The key of the project to which the component is assigned.
     *
     * @return self
     */
    public function setProject($project)
    {

        if (is_null($project)) {
            throw new \InvalidArgumentException('non-nullable project cannot be null');
        }

        $this->container['project'] = $project;

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
     * @param int|null $project_id Not used.
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
     * Gets real_assignee
     *
     * @return \OpenAPI\Client\Model\ComponentWithIssueCountRealAssignee|null
     */
    public function getRealAssignee()
    {
        return $this->container['real_assignee'];
    }

    /**
     * Sets real_assignee
     *
     * @param \OpenAPI\Client\Model\ComponentWithIssueCountRealAssignee|null $real_assignee real_assignee
     *
     * @return self
     */
    public function setRealAssignee($real_assignee)
    {

        if (is_null($real_assignee)) {
            throw new \InvalidArgumentException('non-nullable real_assignee cannot be null');
        }

        $this->container['real_assignee'] = $real_assignee;

        return $this;
    }

    /**
     * Gets real_assignee_type
     *
     * @return string|null
     */
    public function getRealAssigneeType()
    {
        return $this->container['real_assignee_type'];
    }

    /**
     * Sets real_assignee_type
     *
     * @param string|null $real_assignee_type The type of the assignee that is assigned to issues created with this component, when an assignee cannot be set from the `assigneeType`. For example, `assigneeType` is set to `COMPONENT_LEAD` but no component lead is set. This property is set to one of the following values:   *  `PROJECT_LEAD` when `assigneeType` is `PROJECT_LEAD` and the project lead has permission to be assigned issues in the project that the component is in.  *  `COMPONENT_LEAD` when `assignee`Type is `COMPONENT_LEAD` and the component lead has permission to be assigned issues in the project that the component is in.  *  `UNASSIGNED` when `assigneeType` is `UNASSIGNED` and Jira is configured to allow unassigned issues.  *  `PROJECT_DEFAULT` when none of the preceding cases are true.
     *
     * @return self
     */
    public function setRealAssigneeType($real_assignee_type)
    {
        $allowedValues = $this->getRealAssigneeTypeAllowableValues();
        if (!is_null($real_assignee_type) && !in_array($real_assignee_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'real_assignee_type', must be one of '%s'",
                    $real_assignee_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($real_assignee_type)) {
            throw new \InvalidArgumentException('non-nullable real_assignee_type cannot be null');
        }

        $this->container['real_assignee_type'] = $real_assignee_type;

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
     * @param string|null $self The URL for this count of the issues contained in the component.
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


