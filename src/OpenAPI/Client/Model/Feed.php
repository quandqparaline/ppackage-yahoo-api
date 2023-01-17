<?php
/**
 * Feed
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
 * Feed Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Feedオブジェクトは、自動データ挿入のリストを格納します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Feed object is the list of Data elements on auto data insertion.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Feed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Feed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'domain' => 'string',
        'feed_attribute' => '\OpenAPI\Client\Model\FeedServiceAttribute[]',
        'feed_id' => 'int',
        'feed_name' => 'string',
        'feed_track_id' => 'int',
        'placeholder_type' => '\OpenAPI\Client\Model\FeedServicePlaceholderType'
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
        'domain' => null,
        'feed_attribute' => null,
        'feed_id' => 'int64',
        'feed_name' => null,
        'feed_track_id' => 'int64',
        'placeholder_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => true,
		'domain' => true,
		'feed_attribute' => true,
		'feed_id' => true,
		'feed_name' => true,
		'feed_track_id' => true,
		'placeholder_type' => true
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
        'domain' => 'domain',
        'feed_attribute' => 'feedAttribute',
        'feed_id' => 'feedId',
        'feed_name' => 'feedName',
        'feed_track_id' => 'feedTrackId',
        'placeholder_type' => 'placeholderType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'domain' => 'setDomain',
        'feed_attribute' => 'setFeedAttribute',
        'feed_id' => 'setFeedId',
        'feed_name' => 'setFeedName',
        'feed_track_id' => 'setFeedTrackId',
        'placeholder_type' => 'setPlaceholderType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'domain' => 'getDomain',
        'feed_attribute' => 'getFeedAttribute',
        'feed_id' => 'getFeedId',
        'feed_name' => 'getFeedName',
        'feed_track_id' => 'getFeedTrackId',
        'placeholder_type' => 'getPlaceholderType'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('feed_attribute', $data ?? [], null);
        $this->setIfExists('feed_id', $data ?? [], null);
        $this->setIfExists('feed_name', $data ?? [], null);
        $this->setIfExists('feed_track_id', $data ?? [], null);
        $this->setIfExists('placeholder_type', $data ?? [], null);
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
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id <div lang=\"ja\">アカウントIDです。<br> ※入稿の仕様変更により不要になりました。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Account ID.<br> *Not required by design change on editorials.　<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setAccountId($account_id)
    {

        if (is_null($account_id)) {
            array_push($this->openAPINullablesSetToNull, 'account_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain <div lang=\"ja\">ドメインです。<br> このフィールドは、ADD時に省略可能となり、SETおよびREMOVE時に無視されます。</div> <div lang=\"en\">Domain.　<br> This field is optional in ADD operation, and will be ignored in SET and REMOVE operation.</div>
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            array_push($this->openAPINullablesSetToNull, 'domain');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('domain', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets feed_attribute
     *
     * @return \OpenAPI\Client\Model\FeedServiceAttribute[]|null
     */
    public function getFeedAttribute()
    {
        return $this->container['feed_attribute'];
    }

    /**
     * Sets feed_attribute
     *
     * @param \OpenAPI\Client\Model\FeedServiceAttribute[]|null $feed_attribute feed_attribute
     *
     * @return self
     */
    public function setFeedAttribute($feed_attribute)
    {

        if (is_null($feed_attribute)) {
            array_push($this->openAPINullablesSetToNull, 'feed_attribute');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_attribute', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_attribute'] = $feed_attribute;

        return $this;
    }

    /**
     * Gets feed_id
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param int|null $feed_id <div lang=\"ja\">FeedIDです。<br> このフィールドは、SETおよびREMOVE時に必須となり、ADD時は無視されます。</div> <div lang=\"en\">Feed ID.<br> This field is required in SET and REMOVE operation, and will be ignored in ADD operation.</div>
     *
     * @return self
     */
    public function setFeedId($feed_id)
    {

        if (is_null($feed_id)) {
            array_push($this->openAPINullablesSetToNull, 'feed_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets feed_name
     *
     * @return string|null
     */
    public function getFeedName()
    {
        return $this->container['feed_name'];
    }

    /**
     * Sets feed_name
     *
     * @param string|null $feed_name <div lang=\"ja\">Feedのリスト名です。<br> このフィールドは、ADD時に必須となり、SETおよびREMOVE時に無視されます。</div> <div lang=\"en\">List name of Feed.<br> This field is required in ADD operation, and will be ignored in SET and REMOVE operation.</div>
     *
     * @return self
     */
    public function setFeedName($feed_name)
    {

        if (is_null($feed_name)) {
            array_push($this->openAPINullablesSetToNull, 'feed_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_name'] = $feed_name;

        return $this;
    }

    /**
     * Gets feed_track_id
     *
     * @return int|null
     */
    public function getFeedTrackId()
    {
        return $this->container['feed_track_id'];
    }

    /**
     * Sets feed_track_id
     *
     * @param int|null $feed_track_id <div lang=\"ja\">Feedのトラッキング用IDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Tracking ID of Feed.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setFeedTrackId($feed_track_id)
    {

        if (is_null($feed_track_id)) {
            array_push($this->openAPINullablesSetToNull, 'feed_track_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feed_track_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['feed_track_id'] = $feed_track_id;

        return $this;
    }

    /**
     * Gets placeholder_type
     *
     * @return \OpenAPI\Client\Model\FeedServicePlaceholderType|null
     */
    public function getPlaceholderType()
    {
        return $this->container['placeholder_type'];
    }

    /**
     * Sets placeholder_type
     *
     * @param \OpenAPI\Client\Model\FeedServicePlaceholderType|null $placeholder_type placeholder_type
     *
     * @return self
     */
    public function setPlaceholderType($placeholder_type)
    {

        if (is_null($placeholder_type)) {
            array_push($this->openAPINullablesSetToNull, 'placeholder_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placeholder_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['placeholder_type'] = $placeholder_type;

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

