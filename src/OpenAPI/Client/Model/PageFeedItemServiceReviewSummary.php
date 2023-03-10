<?php
/**
 * PageFeedItemServiceReviewSummary
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
 * PageFeedItemServiceReviewSummary Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;PageFeedItemServiceReviewSummaryオブジェクトは、ページフィードアイテムの審査成績、状況サマリーを格納します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;PageFeedItemServiceReviewSummary object retains the examination results of the page feed item, the situation summary acquisition result.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PageFeedItemServiceReviewSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageFeedItemServiceReviewSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'approved_count' => 'int',
        'approved_with_review_count' => 'int',
        'entity_count' => 'int',
        'feed_id' => 'int',
        'post_disapproved_count' => 'int',
        'pre_disapproved_count' => 'int',
        'review_count' => 'int'
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
        'approved_count' => 'int64',
        'approved_with_review_count' => 'int64',
        'entity_count' => 'int64',
        'feed_id' => 'int64',
        'post_disapproved_count' => 'int64',
        'pre_disapproved_count' => 'int64',
        'review_count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => true,
		'approved_count' => true,
		'approved_with_review_count' => true,
		'entity_count' => true,
		'feed_id' => true,
		'post_disapproved_count' => true,
		'pre_disapproved_count' => true,
		'review_count' => true
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
        'approved_count' => 'approvedCount',
        'approved_with_review_count' => 'approvedWithReviewCount',
        'entity_count' => 'entityCount',
        'feed_id' => 'feedId',
        'post_disapproved_count' => 'postDisapprovedCount',
        'pre_disapproved_count' => 'preDisapprovedCount',
        'review_count' => 'reviewCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'approved_count' => 'setApprovedCount',
        'approved_with_review_count' => 'setApprovedWithReviewCount',
        'entity_count' => 'setEntityCount',
        'feed_id' => 'setFeedId',
        'post_disapproved_count' => 'setPostDisapprovedCount',
        'pre_disapproved_count' => 'setPreDisapprovedCount',
        'review_count' => 'setReviewCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'approved_count' => 'getApprovedCount',
        'approved_with_review_count' => 'getApprovedWithReviewCount',
        'entity_count' => 'getEntityCount',
        'feed_id' => 'getFeedId',
        'post_disapproved_count' => 'getPostDisapprovedCount',
        'pre_disapproved_count' => 'getPreDisapprovedCount',
        'review_count' => 'getReviewCount'
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
        $this->setIfExists('approved_count', $data ?? [], null);
        $this->setIfExists('approved_with_review_count', $data ?? [], null);
        $this->setIfExists('entity_count', $data ?? [], null);
        $this->setIfExists('feed_id', $data ?? [], null);
        $this->setIfExists('post_disapproved_count', $data ?? [], null);
        $this->setIfExists('pre_disapproved_count', $data ?? [], null);
        $this->setIfExists('review_count', $data ?? [], null);
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
     * @param int|null $account_id <div lang=\"ja\">アカウントID</div> <div lang=\"en\">Account ID</div>
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
     * Gets approved_count
     *
     * @return int|null
     */
    public function getApprovedCount()
    {
        return $this->container['approved_count'];
    }

    /**
     * Sets approved_count
     *
     * @param int|null $approved_count <div lang=\"ja\">承認済みの件数</div> <div lang=\"en\">Count of approved</div>
     *
     * @return self
     */
    public function setApprovedCount($approved_count)
    {

        if (is_null($approved_count)) {
            array_push($this->openAPINullablesSetToNull, 'approved_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approved_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['approved_count'] = $approved_count;

        return $this;
    }

    /**
     * Gets approved_with_review_count
     *
     * @return int|null
     */
    public function getApprovedWithReviewCount()
    {
        return $this->container['approved_with_review_count'];
    }

    /**
     * Sets approved_with_review_count
     *
     * @param int|null $approved_with_review_count <div lang=\"ja\">編集内容審査中の件数</div> <div lang=\"en\">Count of approved with review</div>
     *
     * @return self
     */
    public function setApprovedWithReviewCount($approved_with_review_count)
    {

        if (is_null($approved_with_review_count)) {
            array_push($this->openAPINullablesSetToNull, 'approved_with_review_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approved_with_review_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['approved_with_review_count'] = $approved_with_review_count;

        return $this;
    }

    /**
     * Gets entity_count
     *
     * @return int|null
     */
    public function getEntityCount()
    {
        return $this->container['entity_count'];
    }

    /**
     * Sets entity_count
     *
     * @param int|null $entity_count <div lang=\"ja\">フィードフォルダ内にあるページフィードアイテムの総件数</div> <div lang=\"en\">Total count of page feed item in feed folder</div>
     *
     * @return self
     */
    public function setEntityCount($entity_count)
    {

        if (is_null($entity_count)) {
            array_push($this->openAPINullablesSetToNull, 'entity_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entity_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['entity_count'] = $entity_count;

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
     * @param int|null $feed_id <div lang=\"ja\">フィードID</div> <div lang=\"en\">Feed ID</div>
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
     * Gets post_disapproved_count
     *
     * @return int|null
     */
    public function getPostDisapprovedCount()
    {
        return $this->container['post_disapproved_count'];
    }

    /**
     * Sets post_disapproved_count
     *
     * @param int|null $post_disapproved_count <div lang=\"ja\">配信停止の件数</div> <div lang=\"en\">Count of distribution cancelled</div>
     *
     * @return self
     */
    public function setPostDisapprovedCount($post_disapproved_count)
    {

        if (is_null($post_disapproved_count)) {
            array_push($this->openAPINullablesSetToNull, 'post_disapproved_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('post_disapproved_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['post_disapproved_count'] = $post_disapproved_count;

        return $this;
    }

    /**
     * Gets pre_disapproved_count
     *
     * @return int|null
     */
    public function getPreDisapprovedCount()
    {
        return $this->container['pre_disapproved_count'];
    }

    /**
     * Sets pre_disapproved_count
     *
     * @param int|null $pre_disapproved_count <div lang=\"ja\">掲載不可の件数</div> <div lang=\"en\">Count of disapproved</div>
     *
     * @return self
     */
    public function setPreDisapprovedCount($pre_disapproved_count)
    {

        if (is_null($pre_disapproved_count)) {
            array_push($this->openAPINullablesSetToNull, 'pre_disapproved_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pre_disapproved_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['pre_disapproved_count'] = $pre_disapproved_count;

        return $this;
    }

    /**
     * Gets review_count
     *
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->container['review_count'];
    }

    /**
     * Sets review_count
     *
     * @param int|null $review_count <div lang=\"ja\">審査中の件数</div> <div lang=\"en\">Count of review</div>
     *
     * @return self
     */
    public function setReviewCount($review_count)
    {

        if (is_null($review_count)) {
            array_push($this->openAPINullablesSetToNull, 'review_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['review_count'] = $review_count;

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


