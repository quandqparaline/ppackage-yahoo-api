<?php
/**
 * AdGroupAdServiceAd
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
 * AdGroupAdServiceAd Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;AdGroupAdServiceAdオブジェクトは、広告に関する情報を表します。&lt;br&gt; ADD時、このフィールドは必須となります。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;AdGroupAdServiceAd object describes ad information.&lt;br&gt; This field is required in ADD operation.&lt;/div&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdGroupAdServiceAd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_type' => '\OpenAPI\Client\Model\AdGroupAdServiceAdType',
        'smartphone_final_url' => 'string',
        'final_url' => 'string',
        'app_ad' => '\OpenAPI\Client\Model\AdGroupAdServiceAppAd',
        'custom_parameters' => '\OpenAPI\Client\Model\AdGroupAdServiceCustomParameters',
        'description1' => 'string',
        'device_preference' => '\OpenAPI\Client\Model\AdGroupAdServiceDevicePreference',
        'display_url' => 'string',
        'extended_text_ad' => '\OpenAPI\Client\Model\AdGroupAdServiceExtendedTextAd',
        'responsive_search_ad' => '\OpenAPI\Client\Model\AdGroupAdServiceResponsiveSearchAd',
        'headline1' => 'string',
        'text_ad2' => '\OpenAPI\Client\Model\AdGroupAdServiceTextAd2',
        'dynamic_search_linked_ad' => '\OpenAPI\Client\Model\AdGroupAdServiceDynamicSearchLinkedAd',
        'tracking_url' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ad_type' => null,
        'smartphone_final_url' => null,
        'final_url' => null,
        'app_ad' => null,
        'custom_parameters' => null,
        'description1' => null,
        'device_preference' => null,
        'display_url' => null,
        'extended_text_ad' => null,
        'responsive_search_ad' => null,
        'headline1' => null,
        'text_ad2' => null,
        'dynamic_search_linked_ad' => null,
        'tracking_url' => null,
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ad_type' => true,
		'smartphone_final_url' => true,
		'final_url' => true,
		'app_ad' => true,
		'custom_parameters' => true,
		'description1' => true,
		'device_preference' => true,
		'display_url' => true,
		'extended_text_ad' => true,
		'responsive_search_ad' => true,
		'headline1' => true,
		'text_ad2' => true,
		'dynamic_search_linked_ad' => true,
		'tracking_url' => true,
		'url' => true
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
        'ad_type' => 'adType',
        'smartphone_final_url' => 'smartphoneFinalUrl',
        'final_url' => 'finalUrl',
        'app_ad' => 'appAd',
        'custom_parameters' => 'customParameters',
        'description1' => 'description1',
        'device_preference' => 'devicePreference',
        'display_url' => 'displayUrl',
        'extended_text_ad' => 'extendedTextAd',
        'responsive_search_ad' => 'responsiveSearchAd',
        'headline1' => 'headline1',
        'text_ad2' => 'textAd2',
        'dynamic_search_linked_ad' => 'dynamicSearchLinkedAd',
        'tracking_url' => 'trackingUrl',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_type' => 'setAdType',
        'smartphone_final_url' => 'setSmartphoneFinalUrl',
        'final_url' => 'setFinalUrl',
        'app_ad' => 'setAppAd',
        'custom_parameters' => 'setCustomParameters',
        'description1' => 'setDescription1',
        'device_preference' => 'setDevicePreference',
        'display_url' => 'setDisplayUrl',
        'extended_text_ad' => 'setExtendedTextAd',
        'responsive_search_ad' => 'setResponsiveSearchAd',
        'headline1' => 'setHeadline1',
        'text_ad2' => 'setTextAd2',
        'dynamic_search_linked_ad' => 'setDynamicSearchLinkedAd',
        'tracking_url' => 'setTrackingUrl',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_type' => 'getAdType',
        'smartphone_final_url' => 'getSmartphoneFinalUrl',
        'final_url' => 'getFinalUrl',
        'app_ad' => 'getAppAd',
        'custom_parameters' => 'getCustomParameters',
        'description1' => 'getDescription1',
        'device_preference' => 'getDevicePreference',
        'display_url' => 'getDisplayUrl',
        'extended_text_ad' => 'getExtendedTextAd',
        'responsive_search_ad' => 'getResponsiveSearchAd',
        'headline1' => 'getHeadline1',
        'text_ad2' => 'getTextAd2',
        'dynamic_search_linked_ad' => 'getDynamicSearchLinkedAd',
        'tracking_url' => 'getTrackingUrl',
        'url' => 'getUrl'
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
        $this->setIfExists('ad_type', $data ?? [], null);
        $this->setIfExists('smartphone_final_url', $data ?? [], null);
        $this->setIfExists('final_url', $data ?? [], null);
        $this->setIfExists('app_ad', $data ?? [], null);
        $this->setIfExists('custom_parameters', $data ?? [], null);
        $this->setIfExists('description1', $data ?? [], null);
        $this->setIfExists('device_preference', $data ?? [], null);
        $this->setIfExists('display_url', $data ?? [], null);
        $this->setIfExists('extended_text_ad', $data ?? [], null);
        $this->setIfExists('responsive_search_ad', $data ?? [], null);
        $this->setIfExists('headline1', $data ?? [], null);
        $this->setIfExists('text_ad2', $data ?? [], null);
        $this->setIfExists('dynamic_search_linked_ad', $data ?? [], null);
        $this->setIfExists('tracking_url', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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
     * Gets ad_type
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceAdType|null
     */
    public function getAdType()
    {
        return $this->container['ad_type'];
    }

    /**
     * Sets ad_type
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceAdType|null $ad_type ad_type
     *
     * @return self
     */
    public function setAdType($ad_type)
    {

        if (is_null($ad_type)) {
            array_push($this->openAPINullablesSetToNull, 'ad_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ad_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ad_type'] = $ad_type;

        return $this;
    }

    /**
     * Gets smartphone_final_url
     *
     * @return string|null
     */
    public function getSmartphoneFinalUrl()
    {
        return $this->container['smartphone_final_url'];
    }

    /**
     * Sets smartphone_final_url
     *
     * @param string|null $smartphone_final_url <div lang=\"ja\">最終リンク先URL（スマートフォン）です。<br> ADD時、このフィールドは省略可能となります。※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合は無視されます。</div> <div lang=\"en\">Landing Page URL (Smartphone).<br> This field is optional in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD, this field will be ignored.</div>
     *
     * @return self
     */
    public function setSmartphoneFinalUrl($smartphone_final_url)
    {

        if (is_null($smartphone_final_url)) {
            array_push($this->openAPINullablesSetToNull, 'smartphone_final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('smartphone_final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['smartphone_final_url'] = $smartphone_final_url;

        return $this;
    }

    /**
     * Gets final_url
     *
     * @return string|null
     */
    public function getFinalUrl()
    {
        return $this->container['final_url'];
    }

    /**
     * Sets final_url
     *
     * @param string|null $final_url <div lang=\"ja\">最終リンク先URLです。<br> ADD時、このフィールドは必須となります。※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合は無視されます。</div> <div lang=\"en\">Landing Page URL.<br> This field is required in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD, this field will be ignored.</div>
     *
     * @return self
     */
    public function setFinalUrl($final_url)
    {

        if (is_null($final_url)) {
            array_push($this->openAPINullablesSetToNull, 'final_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('final_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['final_url'] = $final_url;

        return $this;
    }

    /**
     * Gets app_ad
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceAppAd|null
     */
    public function getAppAd()
    {
        return $this->container['app_ad'];
    }

    /**
     * Sets app_ad
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceAppAd|null $app_ad app_ad
     *
     * @return self
     */
    public function setAppAd($app_ad)
    {

        if (is_null($app_ad)) {
            array_push($this->openAPINullablesSetToNull, 'app_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('app_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['app_ad'] = $app_ad;

        return $this;
    }

    /**
     * Gets custom_parameters
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceCustomParameters|null
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * Sets custom_parameters
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceCustomParameters|null $custom_parameters custom_parameters
     *
     * @return self
     */
    public function setCustomParameters($custom_parameters)
    {

        if (is_null($custom_parameters)) {
            array_push($this->openAPINullablesSetToNull, 'custom_parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * Gets description1
     *
     * @return string|null
     */
    public function getDescription1()
    {
        return $this->container['description1'];
    }

    /**
     * Sets description1
     *
     * @param string|null $description1 <div lang=\"ja\">説明文です。<br> ADD時、このフィールドは必須となります。※adTypeがRESPONSIVE_SEARCH_ADの場合は無視されます。<br>自動挿入をサポートしていません。</div> <div lang=\"en\">Description of ad.<br> This field is required in ADD operation. *If adType is RESPONSIVE_SEARCH_AD, this field will be ignored.<br>Does not support Data Auto Insertion.</div>
     *
     * @return self
     */
    public function setDescription1($description1)
    {

        if (is_null($description1)) {
            array_push($this->openAPINullablesSetToNull, 'description1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['description1'] = $description1;

        return $this;
    }

    /**
     * Gets device_preference
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceDevicePreference|null
     */
    public function getDevicePreference()
    {
        return $this->container['device_preference'];
    }

    /**
     * Sets device_preference
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceDevicePreference|null $device_preference device_preference
     *
     * @return self
     */
    public function setDevicePreference($device_preference)
    {

        if (is_null($device_preference)) {
            array_push($this->openAPINullablesSetToNull, 'device_preference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('device_preference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['device_preference'] = $device_preference;

        return $this;
    }

    /**
     * Gets display_url
     *
     * @return string|null
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string|null $display_url <div lang=\"ja\">表示URLです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Display URL.<br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {

        if (is_null($display_url)) {
            array_push($this->openAPINullablesSetToNull, 'display_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('display_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets extended_text_ad
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceExtendedTextAd|null
     */
    public function getExtendedTextAd()
    {
        return $this->container['extended_text_ad'];
    }

    /**
     * Sets extended_text_ad
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceExtendedTextAd|null $extended_text_ad extended_text_ad
     *
     * @return self
     */
    public function setExtendedTextAd($extended_text_ad)
    {

        if (is_null($extended_text_ad)) {
            array_push($this->openAPINullablesSetToNull, 'extended_text_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extended_text_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['extended_text_ad'] = $extended_text_ad;

        return $this;
    }

    /**
     * Gets responsive_search_ad
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceResponsiveSearchAd|null
     */
    public function getResponsiveSearchAd()
    {
        return $this->container['responsive_search_ad'];
    }

    /**
     * Sets responsive_search_ad
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceResponsiveSearchAd|null $responsive_search_ad responsive_search_ad
     *
     * @return self
     */
    public function setResponsiveSearchAd($responsive_search_ad)
    {

        if (is_null($responsive_search_ad)) {
            array_push($this->openAPINullablesSetToNull, 'responsive_search_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responsive_search_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['responsive_search_ad'] = $responsive_search_ad;

        return $this;
    }

    /**
     * Gets headline1
     *
     * @return string|null
     */
    public function getHeadline1()
    {
        return $this->container['headline1'];
    }

    /**
     * Sets headline1
     *
     * @param string|null $headline1 <div lang=\"ja\">タイトル文です。<br> ADD時、このフィールドは必須となります。※adTypeがDYNAMIC_SEARCH_LINKED_AD、またはRESPONSIVE_SEARCH_ADの場合は無視されます。</div> <div lang=\"en\">Title of ad.<br> This field is required in ADD operation. *If adType is DYNAMIC_SEARCH_LINKED_AD or RESPONSIVE_SEARCH_AD, this field will be ignored.</div>
     *
     * @return self
     */
    public function setHeadline1($headline1)
    {

        if (is_null($headline1)) {
            array_push($this->openAPINullablesSetToNull, 'headline1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('headline1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['headline1'] = $headline1;

        return $this;
    }

    /**
     * Gets text_ad2
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceTextAd2|null
     */
    public function getTextAd2()
    {
        return $this->container['text_ad2'];
    }

    /**
     * Sets text_ad2
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceTextAd2|null $text_ad2 text_ad2
     *
     * @return self
     */
    public function setTextAd2($text_ad2)
    {

        if (is_null($text_ad2)) {
            array_push($this->openAPINullablesSetToNull, 'text_ad2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text_ad2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['text_ad2'] = $text_ad2;

        return $this;
    }

    /**
     * Gets dynamic_search_linked_ad
     *
     * @return \OpenAPI\Client\Model\AdGroupAdServiceDynamicSearchLinkedAd|null
     */
    public function getDynamicSearchLinkedAd()
    {
        return $this->container['dynamic_search_linked_ad'];
    }

    /**
     * Sets dynamic_search_linked_ad
     *
     * @param \OpenAPI\Client\Model\AdGroupAdServiceDynamicSearchLinkedAd|null $dynamic_search_linked_ad dynamic_search_linked_ad
     *
     * @return self
     */
    public function setDynamicSearchLinkedAd($dynamic_search_linked_ad)
    {

        if (is_null($dynamic_search_linked_ad)) {
            array_push($this->openAPINullablesSetToNull, 'dynamic_search_linked_ad');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dynamic_search_linked_ad', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['dynamic_search_linked_ad'] = $dynamic_search_linked_ad;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url <div lang=\"ja\">トラッキングURLです。<br> ADD時、このフィールドは省略可能となります。</div> <div lang=\"en\">Tracking URL.<br> This field is optional in ADD operation.</div>
     *
     * @return self
     */
    public function setTrackingUrl($tracking_url)
    {

        if (is_null($tracking_url)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url <div lang=\"ja\">移行前のリンク先URLです。<br> このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。</div> <div lang=\"en\">Destination URL before upgrading. <br> Although this field will be returned in the response, it will be ignored on input.</div>
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['url'] = $url;

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


