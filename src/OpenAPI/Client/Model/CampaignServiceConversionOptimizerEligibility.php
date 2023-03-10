<?php
/**
 * CampaignServiceConversionOptimizerEligibility
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * CampaignServiceConversionOptimizerEligibility Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;CampaignServiceConversionOptimizerEligibilityは、コンバージョンオプティマイザーが利用可能であるか判定します。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;CampaignServiceConversionOptimizerEligibility object is to determine if it is possible to use conversion optimizer.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;ENABLE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;利用可能です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Can use conversion optimizer.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DISABLE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;利用できません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Cannot use conversion optimizer.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CAMPAIGN_IS_NOT_ACTIVE&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;キャンペーンがアクティブではありません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Campaign is not active.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NOT_CPC_CAMPAIGN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;コンバージョンオプティマイザーは、手動入札の場合にのみ有効です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Valid when it is in manual bidding.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONVERSION_TRACKING_NOT_ENABLED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;コンバージョン測定タグが発行されていません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Conversion tracking tag is not enabled yet.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NOT_ENOUGH_CONVERSIONS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;コンバージョンの実績が十分ではありません。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Conversion performance is not enough.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceConversionOptimizerEligibility
{
    /**
     * Possible values of this enum
     */
    public const ENABLE = 'ENABLE';

    public const DISABLE = 'DISABLE';

    public const CAMPAIGN_IS_NOT_ACTIVE = 'CAMPAIGN_IS_NOT_ACTIVE';

    public const NOT_CPC_CAMPAIGN = 'NOT_CPC_CAMPAIGN';

    public const CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';

    public const NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENABLE,
            self::DISABLE,
            self::CAMPAIGN_IS_NOT_ACTIVE,
            self::NOT_CPC_CAMPAIGN,
            self::CONVERSION_TRACKING_NOT_ENABLED,
            self::NOT_ENOUGH_CONVERSIONS,
            self::UNKNOWN
        ];
    }
}


