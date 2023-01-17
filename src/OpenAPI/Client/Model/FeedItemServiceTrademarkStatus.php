<?php
/**
 * FeedItemServiceTrademarkStatus
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
 * FeedItemServiceTrademarkStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;FeedItemServiceTrademarkStatusは、商標保護ステータスです。&lt;br&gt; このフィールドは、レスポンスの際に返却されますが、リクエストの際には無視されます。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;FeedItemServiceTrademarkStatus object describes the status of trademark.&lt;br&gt; Although this field will be returned in the response, it will be ignored on input.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DISAPPROVED_CLAIM&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;不服申立否認&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Disapproved claim.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;DISAPPROVED_REVIEWER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;目視による審査での否認&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Disapproved reviewer.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;NO_RESTRICTION&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;制限なし&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;No restriction.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CONFLICT_WITH_TRADEMARK&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;商標に抵触して配信停止中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Conflict with trademark.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;CLAIM_IN_PROGRESS&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;不服申立中&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Claim in progress.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedItemServiceTrademarkStatus
{
    /**
     * Possible values of this enum
     */
    public const NO_RESTRICTION = 'NO_RESTRICTION';

    public const CONFLICT_WITH_TRADEMARK = 'CONFLICT_WITH_TRADEMARK';

    public const CLAIM_IN_PROGRESS = 'CLAIM_IN_PROGRESS';

    public const DISAPPROVED_CLAIM = 'DISAPPROVED_CLAIM';

    public const DISAPPROVED_REVIEWER = 'DISAPPROVED_REVIEWER';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_RESTRICTION,
            self::CONFLICT_WITH_TRADEMARK,
            self::CLAIM_IN_PROGRESS,
            self::DISAPPROVED_CLAIM,
            self::DISAPPROVED_REVIEWER,
            self::UNKNOWN
        ];
    }
}


