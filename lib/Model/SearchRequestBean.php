<?php
/**
 * SearchRequestBean
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
 * SearchRequestBean Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchRequestBean implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchRequestBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expand' => 'string[]',
        'fields' => 'string[]',
        'fields_by_keys' => 'bool',
        'jql' => 'string',
        'max_results' => 'int',
        'properties' => 'string[]',
        'start_at' => 'int',
        'validate_query' => 'string'
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
        'fields_by_keys' => null,
        'jql' => null,
        'max_results' => 'int32',
        'properties' => null,
        'start_at' => 'int32',
        'validate_query' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expand' => false,
		'fields' => false,
		'fields_by_keys' => false,
		'jql' => false,
		'max_results' => false,
		'properties' => false,
		'start_at' => false,
		'validate_query' => false
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
        'fields_by_keys' => 'fieldsByKeys',
        'jql' => 'jql',
        'max_results' => 'maxResults',
        'properties' => 'properties',
        'start_at' => 'startAt',
        'validate_query' => 'validateQuery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expand' => 'setExpand',
        'fields' => 'setFields',
        'fields_by_keys' => 'setFieldsByKeys',
        'jql' => 'setJql',
        'max_results' => 'setMaxResults',
        'properties' => 'setProperties',
        'start_at' => 'setStartAt',
        'validate_query' => 'setValidateQuery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expand' => 'getExpand',
        'fields' => 'getFields',
        'fields_by_keys' => 'getFieldsByKeys',
        'jql' => 'getJql',
        'max_results' => 'getMaxResults',
        'properties' => 'getProperties',
        'start_at' => 'getStartAt',
        'validate_query' => 'getValidateQuery'
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

    public const VALIDATE_QUERY_STRICT = 'strict';
    public const VALIDATE_QUERY_WARN = 'warn';
    public const VALIDATE_QUERY_NONE = 'none';
    public const VALIDATE_QUERY_TRUE = 'true';
    public const VALIDATE_QUERY_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidateQueryAllowableValues()
    {
        return [
            self::VALIDATE_QUERY_STRICT,
            self::VALIDATE_QUERY_WARN,
            self::VALIDATE_QUERY_NONE,
            self::VALIDATE_QUERY_TRUE,
            self::VALIDATE_QUERY_FALSE,
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
        $this->setIfExists('expand', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('fields_by_keys', $data ?? [], null);
        $this->setIfExists('jql', $data ?? [], null);
        $this->setIfExists('max_results', $data ?? [], 50);
        $this->setIfExists('properties', $data ?? [], null);
        $this->setIfExists('start_at', $data ?? [], null);
        $this->setIfExists('validate_query', $data ?? [], null);
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

        $allowedValues = $this->getValidateQueryAllowableValues();
        if (!is_null($this->container['validate_query']) && !in_array($this->container['validate_query'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'validate_query', must be one of '%s'",
                $this->container['validate_query'],
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
     * Gets expand
     *
     * @return string[]|null
     */
    public function getExpand()
    {
        return $this->container['expand'];
    }

    /**
     * Sets expand
     *
     * @param string[]|null $expand Use [expand](em>#expansion) to include additional information about issues in the response. Note that, unlike the majority of instances where `expand` is specified, `expand` is defined as a list of values. The expand options are:   *  `renderedFields` Returns field values rendered in HTML format.  *  `names` Returns the display name of each field.  *  `schema` Returns the schema describing a field type.  *  `transitions` Returns all possible transitions for the issue.  *  `operations` Returns all possible operations for the issue.  *  `editmeta` Returns information about how each field can be edited.  *  `changelog` Returns a list of recent updates to an issue, sorted by date, starting from the most recent.  *  `versionedRepresentations` Instead of `fields`, returns `versionedRepresentations` a JSON array containing each version of a field's value, with the highest numbered item representing the most recent version.
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
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields A list of fields to return for each issue, use it to retrieve a subset of fields. This parameter accepts a comma-separated list. Expand options include:   *  `*all` Returns all fields.  *  `*navigable` Returns navigable fields.  *  Any issue field, prefixed with a minus to exclude.  The default is `*navigable`.  Examples:   *  `summary,comment` Returns the summary and comments fields only.  *  `-description` Returns all navigable (default) fields except description.  *  `*all,-comment` Returns all fields except comments.  Multiple `fields` parameters can be included in a request.  Note: All navigable fields are returned by default. This differs from [GET issue](#api-rest-api-2-issue-issueIdOrKey-get) where the default is all fields.
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
     * Gets fields_by_keys
     *
     * @return bool|null
     */
    public function getFieldsByKeys()
    {
        return $this->container['fields_by_keys'];
    }

    /**
     * Sets fields_by_keys
     *
     * @param bool|null $fields_by_keys Reference fields by their key (rather than ID). The default is `false`.
     *
     * @return self
     */
    public function setFieldsByKeys($fields_by_keys)
    {

        if (is_null($fields_by_keys)) {
            throw new \InvalidArgumentException('non-nullable fields_by_keys cannot be null');
        }

        $this->container['fields_by_keys'] = $fields_by_keys;

        return $this;
    }

    /**
     * Gets jql
     *
     * @return string|null
     */
    public function getJql()
    {
        return $this->container['jql'];
    }

    /**
     * Sets jql
     *
     * @param string|null $jql A [JQL](https://confluence.atlassian.com/x/egORLQ) expression.
     *
     * @return self
     */
    public function setJql($jql)
    {

        if (is_null($jql)) {
            throw new \InvalidArgumentException('non-nullable jql cannot be null');
        }

        $this->container['jql'] = $jql;

        return $this;
    }

    /**
     * Gets max_results
     *
     * @return int|null
     */
    public function getMaxResults()
    {
        return $this->container['max_results'];
    }

    /**
     * Sets max_results
     *
     * @param int|null $max_results The maximum number of items to return per page.
     *
     * @return self
     */
    public function setMaxResults($max_results)
    {

        if (is_null($max_results)) {
            throw new \InvalidArgumentException('non-nullable max_results cannot be null');
        }

        $this->container['max_results'] = $max_results;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return string[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param string[]|null $properties A list of up to 5 issue properties to include in the results. This parameter accepts a comma-separated list.
     *
     * @return self
     */
    public function setProperties($properties)
    {

        if (is_null($properties)) {
            throw new \InvalidArgumentException('non-nullable properties cannot be null');
        }

        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return int|null
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param int|null $start_at The index of the first item to return in the page of results (page offset). The base index is `0`.
     *
     * @return self
     */
    public function setStartAt($start_at)
    {

        if (is_null($start_at)) {
            throw new \InvalidArgumentException('non-nullable start_at cannot be null');
        }

        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets validate_query
     *
     * @return string|null
     */
    public function getValidateQuery()
    {
        return $this->container['validate_query'];
    }

    /**
     * Sets validate_query
     *
     * @param string|null $validate_query Determines how to validate the JQL query and treat the validation results. Supported values:   *  `strict` Returns a 400 response code if any errors are found, along with a list of all errors (and warnings).  *  `warn` Returns all errors as warnings.  *  `none` No validation is performed.  *  `true` *Deprecated* A legacy synonym for `strict`.  *  `false` *Deprecated* A legacy synonym for `warn`.  The default is `strict`.  Note: If the JQL is not correctly formed a 400 response code is returned, regardless of the `validateQuery` value.
     *
     * @return self
     */
    public function setValidateQuery($validate_query)
    {
        $allowedValues = $this->getValidateQueryAllowableValues();
        if (!is_null($validate_query) && !in_array($validate_query, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'validate_query', must be one of '%s'",
                    $validate_query,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($validate_query)) {
            throw new \InvalidArgumentException('non-nullable validate_query cannot be null');
        }

        $this->container['validate_query'] = $validate_query;

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


