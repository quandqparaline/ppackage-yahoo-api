<?php
/**
 * Label
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
 * Label Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;Labelオブジェクトは、ラベルの情報を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;Label object describes label information.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Label implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'color' => 'string',
        'description' => 'string',
        'label_id' => 'int',
        'label_name' => 'string',
        'labeled_ad_group' => 'int',
        'labeled_ad_group_ad' => 'int',
        'labeled_ad_group_criterion' => 'int',
        'labeled_campaign' => 'int'
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
        'color' => null,
        'description' => null,
        'label_id' => 'int64',
        'label_name' => null,
        'labeled_ad_group' => 'int64',
        'labeled_ad_group_ad' => 'int64',
        'labeled_ad_group_criterion' => 'int64',
        'labeled_campaign' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => true,
		'color' => true,
		'description' => true,
		'label_id' => true,
		'label_name' => true,
		'labeled_ad_group' => true,
		'labeled_ad_group_ad' => true,
		'labeled_ad_group_criterion' => true,
		'labeled_campaign' => true
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
        'color' => 'color',
        'description' => 'description',
        'label_id' => 'labelId',
        'label_name' => 'labelName',
        'labeled_ad_group' => 'labeledAdGroup',
        'labeled_ad_group_ad' => 'labeledAdGroupAd',
        'labeled_ad_group_criterion' => 'labeledAdGroupCriterion',
        'labeled_campaign' => 'labeledCampaign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'color' => 'setColor',
        'description' => 'setDescription',
        'label_id' => 'setLabelId',
        'label_name' => 'setLabelName',
        'labeled_ad_group' => 'setLabeledAdGroup',
        'labeled_ad_group_ad' => 'setLabeledAdGroupAd',
        'labeled_ad_group_criterion' => 'setLabeledAdGroupCriterion',
        'labeled_campaign' => 'setLabeledCampaign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'color' => 'getColor',
        'description' => 'getDescription',
        'label_id' => 'getLabelId',
        'label_name' => 'getLabelName',
        'labeled_ad_group' => 'getLabeledAdGroup',
        'labeled_ad_group_ad' => 'getLabeledAdGroupAd',
        'labeled_ad_group_criterion' => 'getLabeledAdGroupCriterion',
        'labeled_campaign' => 'getLabeledCampaign'
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
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('label_id', $data ?? [], null);
        $this->setIfExists('label_name', $data ?? [], null);
        $this->setIfExists('labeled_ad_group', $data ?? [], null);
        $this->setIfExists('labeled_ad_group_ad', $data ?? [], null);
        $this->setIfExists('labeled_ad_group_criterion', $data ?? [], null);
        $this->setIfExists('labeled_campaign', $data ?? [], null);
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
     * @param int|null $account_id <div lang=\"ja\">アカウントIDです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Account ID.<br> Although this field will be returned in the response, it will be ignored on input.</div>
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
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color <div lang=\"ja\">カラーコードです。例：#FFFFFF<br> このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。</div> <div lang=\"en\">Color code. e.g. #FFFFFF<br> This field is optional in ADD and SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return self
     */
    public function setColor($color)
    {

        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['color'] = $color;

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
     * @param string|null $description <div lang=\"ja\">説明文です。<br> このフィールドは、ADDおよびSET時に省略可能となり、REMOVE時に無視されます。</div> <div lang=\"en\">Description.<br> This field is optional in ADD and SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label_id
     *
     * @return int|null
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param int|null $label_id <div lang=\"ja\">ラベルIDです。<br> このフィールドは、SETおよびREMOVE時に必須となり、ADD時に無視されます。</div> <div lang=\"en\">Label ID.<br> This field is required in SET and REMOVE operation, and will be ignored in ADD operation.</div>
     *
     * @return self
     */
    public function setLabelId($label_id)
    {

        if (is_null($label_id)) {
            array_push($this->openAPINullablesSetToNull, 'label_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('label_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['label_id'] = $label_id;

        return $this;
    }

    /**
     * Gets label_name
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->container['label_name'];
    }

    /**
     * Sets label_name
     *
     * @param string|null $label_name <div lang=\"ja\">ラベル名です。<br> このフィールドは、ADD時に必須となり、SET時に省略可能となり、REMOVE時に無視されます。</div> <div lang=\"en\">Label Name.<br> This field is required in ADD operation, is optional in SET operation, and will be ignored in REMOVE operation.</div>
     *
     * @return self
     */
    public function setLabelName($label_name)
    {

        if (is_null($label_name)) {
            array_push($this->openAPINullablesSetToNull, 'label_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('label_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['label_name'] = $label_name;

        return $this;
    }

    /**
     * Gets labeled_ad_group
     *
     * @return int|null
     */
    public function getLabeledAdGroup()
    {
        return $this->container['labeled_ad_group'];
    }

    /**
     * Sets labeled_ad_group
     *
     * @param int|null $labeled_ad_group <div lang=\"ja\">広告グループの紐付け数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Number of labeled AdGroup.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setLabeledAdGroup($labeled_ad_group)
    {

        if (is_null($labeled_ad_group)) {
            array_push($this->openAPINullablesSetToNull, 'labeled_ad_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('labeled_ad_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['labeled_ad_group'] = $labeled_ad_group;

        return $this;
    }

    /**
     * Gets labeled_ad_group_ad
     *
     * @return int|null
     */
    public function getLabeledAdGroupAd()
    {
        return $this->container['labeled_ad_group_ad'];
    }

    /**
     * Sets labeled_ad_group_ad
     *
     * @param int|null $labeled_ad_group_ad <div lang=\"ja\">広告の紐付け数です。<br>このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Number of labeled AdGroupAd.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setLabeledAdGroupAd($labeled_ad_group_ad)
    {

        if (is_null($labeled_ad_group_ad)) {
            array_push($this->openAPINullablesSetToNull, 'labeled_ad_group_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('labeled_ad_group_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['labeled_ad_group_ad'] = $labeled_ad_group_ad;

        return $this;
    }

    /**
     * Gets labeled_ad_group_criterion
     *
     * @return int|null
     */
    public function getLabeledAdGroupCriterion()
    {
        return $this->container['labeled_ad_group_criterion'];
    }

    /**
     * Sets labeled_ad_group_criterion
     *
     * @param int|null $labeled_ad_group_criterion <div lang=\"ja\">キーワードの紐付け数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Number of labeled Ad Group Criterion.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setLabeledAdGroupCriterion($labeled_ad_group_criterion)
    {

        if (is_null($labeled_ad_group_criterion)) {
            array_push($this->openAPINullablesSetToNull, 'labeled_ad_group_criterion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('labeled_ad_group_criterion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['labeled_ad_group_criterion'] = $labeled_ad_group_criterion;

        return $this;
    }

    /**
     * Gets labeled_campaign
     *
     * @return int|null
     */
    public function getLabeledCampaign()
    {
        return $this->container['labeled_campaign'];
    }

    /**
     * Sets labeled_campaign
     *
     * @param int|null $labeled_campaign <div lang=\"ja\">キャンペーンの紐付け数です。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Number of labeled Campaign.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setLabeledCampaign($labeled_campaign)
    {

        if (is_null($labeled_campaign)) {
            array_push($this->openAPINullablesSetToNull, 'labeled_campaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('labeled_campaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['labeled_campaign'] = $labeled_campaign;

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


