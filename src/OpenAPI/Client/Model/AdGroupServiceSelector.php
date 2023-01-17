<?php
/**
 * AdGroupServiceSelector
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
 * AdGroupServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupServiceSelectorオブジェクトは、指定された広告グループを表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupServiceSelector object displays the specified ad group.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdGroupServiceSelector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad_group_ids' => 'int[]',
        'portfolio_bidding_ids' => 'int[]',
        'campaign_ids' => 'int[]',
        'contains_label_id' => '\OpenAPI\Client\Model\AdGroupServiceContainsLabelId',
        'label_ids' => 'int[]',
        'number_results' => 'int',
        'start_index' => 'int',
        'user_statuses' => '\OpenAPI\Client\Model\AdGroupServiceUserStatus[]',
        'created_date_range' => '\OpenAPI\Client\Model\AdGroupServiceCreatedDateRange',
        'bidding_keyword_cpc_range' => '\OpenAPI\Client\Model\AdGroupServiceBiddingKeywordCpcRange'
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
        'ad_group_ids' => 'int64',
        'portfolio_bidding_ids' => 'int64',
        'campaign_ids' => 'int64',
        'contains_label_id' => null,
        'label_ids' => 'int64',
        'number_results' => 'int32',
        'start_index' => 'int32',
        'user_statuses' => null,
        'created_date_range' => null,
        'bidding_keyword_cpc_range' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'ad_group_ids' => true,
		'portfolio_bidding_ids' => true,
		'campaign_ids' => true,
		'contains_label_id' => true,
		'label_ids' => true,
		'number_results' => true,
		'start_index' => true,
		'user_statuses' => true,
		'created_date_range' => true,
		'bidding_keyword_cpc_range' => true
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
        'ad_group_ids' => 'adGroupIds',
        'portfolio_bidding_ids' => 'portfolioBiddingIds',
        'campaign_ids' => 'campaignIds',
        'contains_label_id' => 'containsLabelId',
        'label_ids' => 'labelIds',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'user_statuses' => 'userStatuses',
        'created_date_range' => 'createdDateRange',
        'bidding_keyword_cpc_range' => 'biddingKeywordCpcRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad_group_ids' => 'setAdGroupIds',
        'portfolio_bidding_ids' => 'setPortfolioBiddingIds',
        'campaign_ids' => 'setCampaignIds',
        'contains_label_id' => 'setContainsLabelId',
        'label_ids' => 'setLabelIds',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'user_statuses' => 'setUserStatuses',
        'created_date_range' => 'setCreatedDateRange',
        'bidding_keyword_cpc_range' => 'setBiddingKeywordCpcRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad_group_ids' => 'getAdGroupIds',
        'portfolio_bidding_ids' => 'getPortfolioBiddingIds',
        'campaign_ids' => 'getCampaignIds',
        'contains_label_id' => 'getContainsLabelId',
        'label_ids' => 'getLabelIds',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'user_statuses' => 'getUserStatuses',
        'created_date_range' => 'getCreatedDateRange',
        'bidding_keyword_cpc_range' => 'getBiddingKeywordCpcRange'
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
        $this->setIfExists('ad_group_ids', $data ?? [], null);
        $this->setIfExists('portfolio_bidding_ids', $data ?? [], null);
        $this->setIfExists('campaign_ids', $data ?? [], null);
        $this->setIfExists('contains_label_id', $data ?? [], null);
        $this->setIfExists('label_ids', $data ?? [], null);
        $this->setIfExists('number_results', $data ?? [], 500);
        $this->setIfExists('start_index', $data ?? [], 1);
        $this->setIfExists('user_statuses', $data ?? [], null);
        $this->setIfExists('created_date_range', $data ?? [], null);
        $this->setIfExists('bidding_keyword_cpc_range', $data ?? [], null);
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
        if (!is_null($this->container['ad_group_ids']) && (count($this->container['ad_group_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'ad_group_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['portfolio_bidding_ids']) && (count($this->container['portfolio_bidding_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'portfolio_bidding_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['campaign_ids']) && (count($this->container['campaign_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'campaign_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['label_ids']) && (count($this->container['label_ids']) > 1000)) {
            $invalidProperties[] = "invalid value for 'label_ids', number of items must be less than or equal to 1000.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 10000)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['user_statuses']) && (count($this->container['user_statuses']) > 2)) {
            $invalidProperties[] = "invalid value for 'user_statuses', number of items must be less than or equal to 2.";
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
     * @param int $account_id <div lang=\"ja\">検索条件：アカウントID</div> <div lang=\"en\">Search condition: Account ID</div>
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
     * Gets ad_group_ids
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return $this->container['ad_group_ids'];
    }

    /**
     * Sets ad_group_ids
     *
     * @param int[]|null $ad_group_ids <div lang=\"ja\">検索条件：広告グループID</div> <div lang=\"en\">Search condition: Ad Group ID</div>
     *
     * @return self
     */
    public function setAdGroupIds($ad_group_ids)
    {

        if (!is_null($ad_group_ids) && (count($ad_group_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $ad_group_ids when calling AdGroupServiceSelector., number of items must be less than or equal to 1000.');
        }

        if (is_null($ad_group_ids)) {
            array_push($this->openAPINullablesSetToNull, 'ad_group_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_group_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ad_group_ids'] = $ad_group_ids;

        return $this;
    }

    /**
     * Gets portfolio_bidding_ids
     *
     * @return int[]|null
     */
    public function getPortfolioBiddingIds()
    {
        return $this->container['portfolio_bidding_ids'];
    }

    /**
     * Sets portfolio_bidding_ids
     *
     * @param int[]|null $portfolio_bidding_ids <div lang=\"ja\">検索条件：ポートフォリオ入札ID</div> <div lang=\"en\">Search condition: Portfolio bidding ID</div>
     *
     * @return self
     */
    public function setPortfolioBiddingIds($portfolio_bidding_ids)
    {

        if (!is_null($portfolio_bidding_ids) && (count($portfolio_bidding_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $portfolio_bidding_ids when calling AdGroupServiceSelector., number of items must be less than or equal to 1000.');
        }

        if (is_null($portfolio_bidding_ids)) {
            array_push($this->openAPINullablesSetToNull, 'portfolio_bidding_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('portfolio_bidding_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['portfolio_bidding_ids'] = $portfolio_bidding_ids;

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
     * @param int[]|null $campaign_ids <div lang=\"ja\">検索条件：キャンペーンID</div> <div lang=\"en\">Search condition: Campaign ID</div>
     *
     * @return self
     */
    public function setCampaignIds($campaign_ids)
    {

        if (!is_null($campaign_ids) && (count($campaign_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $campaign_ids when calling AdGroupServiceSelector., number of items must be less than or equal to 1000.');
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
     * Gets contains_label_id
     *
     * @return \OpenAPI\Client\Model\AdGroupServiceContainsLabelId|null
     */
    public function getContainsLabelId()
    {
        return $this->container['contains_label_id'];
    }

    /**
     * Sets contains_label_id
     *
     * @param \OpenAPI\Client\Model\AdGroupServiceContainsLabelId|null $contains_label_id contains_label_id
     *
     * @return self
     */
    public function setContainsLabelId($contains_label_id)
    {

        if (is_null($contains_label_id)) {
            array_push($this->openAPINullablesSetToNull, 'contains_label_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contains_label_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['contains_label_id'] = $contains_label_id;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return int[]|null
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param int[]|null $label_ids <div lang=\"ja\">検索条件：ラベルID</div> <div lang=\"en\">Search condition: Label ID</div>
     *
     * @return self
     */
    public function setLabelIds($label_ids)
    {

        if (!is_null($label_ids) && (count($label_ids) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $label_ids when calling AdGroupServiceSelector., number of items must be less than or equal to 1000.');
        }

        if (is_null($label_ids)) {
            array_push($this->openAPINullablesSetToNull, 'label_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('label_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['label_ids'] = $label_ids;

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

        if (!is_null($number_results) && ($number_results > 10000)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AdGroupServiceSelector., must be smaller than or equal to 10000.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AdGroupServiceSelector., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $start_index when calling AdGroupServiceSelector., must be bigger than or equal to 1.');
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
     * Gets user_statuses
     *
     * @return \OpenAPI\Client\Model\AdGroupServiceUserStatus[]|null
     */
    public function getUserStatuses()
    {
        return $this->container['user_statuses'];
    }

    /**
     * Sets user_statuses
     *
     * @param \OpenAPI\Client\Model\AdGroupServiceUserStatus[]|null $user_statuses user_statuses
     *
     * @return self
     */
    public function setUserStatuses($user_statuses)
    {

        if (!is_null($user_statuses) && (count($user_statuses) > 2)) {
            throw new \InvalidArgumentException('invalid value for $user_statuses when calling AdGroupServiceSelector., number of items must be less than or equal to 2.');
        }

        if (is_null($user_statuses)) {
            array_push($this->openAPINullablesSetToNull, 'user_statuses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_statuses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['user_statuses'] = $user_statuses;

        return $this;
    }

    /**
     * Gets created_date_range
     *
     * @return \OpenAPI\Client\Model\AdGroupServiceCreatedDateRange|null
     */
    public function getCreatedDateRange()
    {
        return $this->container['created_date_range'];
    }

    /**
     * Sets created_date_range
     *
     * @param \OpenAPI\Client\Model\AdGroupServiceCreatedDateRange|null $created_date_range created_date_range
     *
     * @return self
     */
    public function setCreatedDateRange($created_date_range)
    {

        if (is_null($created_date_range)) {
            array_push($this->openAPINullablesSetToNull, 'created_date_range');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_date_range', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['created_date_range'] = $created_date_range;

        return $this;
    }

    /**
     * Gets bidding_keyword_cpc_range
     *
     * @return \OpenAPI\Client\Model\AdGroupServiceBiddingKeywordCpcRange|null
     */
    public function getBiddingKeywordCpcRange()
    {
        return $this->container['bidding_keyword_cpc_range'];
    }

    /**
     * Sets bidding_keyword_cpc_range
     *
     * @param \OpenAPI\Client\Model\AdGroupServiceBiddingKeywordCpcRange|null $bidding_keyword_cpc_range bidding_keyword_cpc_range
     *
     * @return self
     */
    public function setBiddingKeywordCpcRange($bidding_keyword_cpc_range)
    {

        if (is_null($bidding_keyword_cpc_range)) {
            array_push($this->openAPINullablesSetToNull, 'bidding_keyword_cpc_range');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bidding_keyword_cpc_range', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['bidding_keyword_cpc_range'] = $bidding_keyword_cpc_range;

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


