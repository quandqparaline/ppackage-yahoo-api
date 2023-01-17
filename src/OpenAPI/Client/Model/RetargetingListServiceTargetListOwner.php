<?php
/**
 * RetargetingListServiceTargetListOwner
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
 * RetargetingListServiceTargetListOwner Class Doc Comment
 *
 * @category Class
 * @description &lt;div lang&#x3D;\&quot;ja\&quot;&gt;RetargetingListServiceTargetListOwnerは、ターゲットリストの所有状態を表します。&lt;/div&gt; &lt;div lang&#x3D;\&quot;en\&quot;&gt;RetargetingListServiceTargetListOwner describes the owner information of the target list.&lt;/div&gt; &lt;dl class&#x3D;term&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;OWNER&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;アカウントで専有されているターゲットリストです。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;The exclusive target list owned by an account.&lt;/span&gt;&lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;SHARED&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;     &lt;span lang&#x3D;\&quot;ja\&quot;&gt;       ターゲットリストグループで共有されているターゲットリストです。&lt;br&gt;       詳細は以下のヘルプを参照してください。&lt;br&gt;       ・&lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/ss/articledetail?lan&#x3D;ja&amp;aid&#x3D;15833\&quot;&gt;ターゲットリストのアカウント間共有について&lt;/a&gt;     &lt;/span&gt;     &lt;span lang&#x3D;\&quot;en\&quot;&gt;       The target list shared by the target list group.&lt;br&gt;       See also the help below.&lt;br&gt;       ・&lt;a href&#x3D;\&quot;https://ads-help.yahoo.co.jp/yahooads/ss/articledetail?lan&#x3D;en&amp;aid&#x3D;9538\&quot;&gt;Sharing target list across accounts&lt;/a&gt;     &lt;/span&gt;   &lt;/dd&gt;   &lt;dt class&#x3D;\&quot;term__item\&quot;&gt;UNKNOWN&lt;/dt&gt;   &lt;dd class&#x3D;\&quot;term__desc\&quot;&gt;&lt;span lang&#x3D;\&quot;ja\&quot;&gt;未知の値です。&lt;/span&gt;&lt;span lang&#x3D;\&quot;en\&quot;&gt;Unknown Value&lt;/span&gt;&lt;/dd&gt; &lt;/dl&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceTargetListOwner
{
    /**
     * Possible values of this enum
     */
    public const OWNER = 'OWNER';

    public const SHARED = 'SHARED';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OWNER,
            self::SHARED,
            self::UNKNOWN
        ];
    }
}


