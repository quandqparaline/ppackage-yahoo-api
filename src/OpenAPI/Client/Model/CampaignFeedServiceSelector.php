<?php
/**
 * CampaignFeedServiceSelector
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス / Yahoo! JAPAN Ads Search Ads API Reference
 *
 * <div lang=\"ja\">Yahoo!広告 検索広告 APIのWebサービスについて説明します。</div> <div lang=\"en\">Search Ads API Web Services supported in Yahoo! JAPAN Ads API.</div> <div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/design/v9/Route.yaml\">OpenAPI Specification</a></div> <div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div> <div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-search-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>
 *
 * The version of the OpenAPI document: v9
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * CampaignFeedServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignFeedServiceSelectorオブジェクトは、FeedItem情報を指定します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignFeedServiceSelector describes the FeedItem information.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CampaignFeedServiceSelector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignFeedServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'campaign_ids' => 'int[]',
        'feed_item_ids' => 'int[]',
        'number_results' => 'int',
        'placeholder_types' => '\OpenAPI\Client\Model\CampaignFeedServicePlaceholderType[]',
        'start_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'campaign_ids' => 'int64',
        'feed_item_ids' => 'int64',
        'number_results' => 'int32',
        'placeholder_types' => null,
        'start_index' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'campaign_ids' => true,
		'feed_item_ids' => true,
		'number_results' => true,
		'placeholder_types' => true,
		'start_index' => true
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'campaign_ids' => 'campaignIds',
        'feed_item_ids' => 'feedItemIds',
        'number_results' => 'numberResults',
        'placeholder_types' => 'placeholderTypes',
        'start_index' => 'startIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'campaign_ids' => 'setCampaignIds',
        'feed_item_ids' => 'setFeedItemIds',
        'number_results' => 'setNumberResults',
        'placeholder_types' => 'setPlaceholderTypes',
        'start_index' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'campaign_ids' => 'getCampaignIds',
        'feed_item_ids' => 'getFeedItemIds',
        'number_results' => 'getNumberResults',
        'placeholder_types' => 'getPlaceholderTypes',
        'start_index' => 'getStartIndex'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('campaign_ids', $data ?? [], null);
        $this->setIfExists('feed_item_ids', $data ?? [], null);
        $this->setIfExists('number_results', $data ?? [], 500);
        $this->setIfExists('placeholder_types', $data ?? [], null);
        $this->setIfExists('start_index', $data ?? [], 1);
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

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['campaign_ids']) && (count($this->container['campaign_ids']) > 500)) {
            $invalidProperties[] = "invalid value for 'campaign_ids', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['feed_item_ids']) && (count($this->container['feed_item_ids']) > 500)) {
            $invalidProperties[] = "invalid value for 'feed_item_ids', number of items must be less than or equal to 500.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 500)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['placeholder_types']) && (count($this->container['placeholder_types']) > 4)) {
            $invalidProperties[] = "invalid value for 'placeholder_types', number of items must be less than or equal to 4.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
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
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id <div lang=\"ja\">アカウントIDです。</div> <div lang=\"en\">Account ID.</div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {

        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param int[]|null $campaign_ids <div lang=\"ja\">キャンペーンIDです。</div> <div lang=\"en\">Campaign ID.</div>
     *
     * @return self
     */
    public function setCampaignIds($campaign_ids)
    {

        if (!is_null($campaign_ids) && (count($campaign_ids) > 500)) {
            throw new \InvalidArgumentException('invalid value for $campaign_ids when calling CampaignFeedServiceSelector., number of items must be less than or equal to 500.');
        }

        if (is_null($campaign_ids)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['campaign_ids'] = $campaign_ids;

        return $this;
    }

    /**
     * Gets feed_item_ids
     *
     * @return int[]|null
     */
    public function getFeedItemIds()
    {
        return $this->container['feed_item_ids'];
    }

    /**
     * Sets feed_item_ids
     *
     * @param int[]|null $feed_item_ids <div lang=\"ja\">FeedItem情報のIDです。</div> <div lang=\"en\">FeedItem information ID.</div>
     *
     * @return self
     */
    public function setFeedItemIds($feed_item_ids)
    {

        if (!is_null($feed_item_ids) && (count($feed_item_ids) > 500)) {
            throw new \InvalidArgumentException('invalid value for $feed_item_ids when calling CampaignFeedServiceSelector., number of items must be less than or equal to 500.');
        }

        if (is_null($feed_item_ids)) {
            array_push($this->openAPINullablesSetToNull, 'feed_item_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_item_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_item_ids'] = $feed_item_ids;

        return $this;
    }

    /**
     * Gets number_results
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['number_results'];
    }

    /**
     * Sets number_results
     *
     * @param int|null $number_results <div lang=\"ja\">ページの最大件数です。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.</div>
     *
     * @return self
     */
    public function setNumberResults($number_results)
    {

        if (!is_null($number_results) && ($number_results > 500)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling CampaignFeedServiceSelector., must be smaller than or equal to 500.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling CampaignFeedServiceSelector., must be bigger than or equal to 1.');
        }


        if (is_null($number_results)) {
            array_push($this->openAPINullablesSetToNull, 'number_results');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number_results', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['number_results'] = $number_results;

        return $this;
    }

    /**
     * Gets placeholder_types
     *
     * @return \OpenAPI\Client\Model\CampaignFeedServicePlaceholderType[]|null
     */
    public function getPlaceholderTypes()
    {
        return $this->container['placeholder_types'];
    }

    /**
     * Sets placeholder_types
     *
     * @param \OpenAPI\Client\Model\CampaignFeedServicePlaceholderType[]|null $placeholder_types placeholder_types
     *
     * @return self
     */
    public function setPlaceholderTypes($placeholder_types)
    {

        if (!is_null($placeholder_types) && (count($placeholder_types) > 4)) {
            throw new \InvalidArgumentException('invalid value for $placeholder_types when calling CampaignFeedServiceSelector., number of items must be less than or equal to 4.');
        }

        if (is_null($placeholder_types)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder_types');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder_types', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['placeholder_types'] = $placeholder_types;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int|null $start_index <div lang=\"ja\">ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。</div> <div lang=\"en\">Index of the first result to return in this page. This field must be greater than or equal to 1.</div>
     *
     * @return self
     */
    public function setStartIndex($start_index)
    {

        if (!is_null($start_index) && ($start_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_index when calling CampaignFeedServiceSelector., must be bigger than or equal to 1.');
        }


        if (is_null($start_index)) {
            array_push($this->openAPINullablesSetToNull, 'start_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['start_index'] = $start_index;

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


