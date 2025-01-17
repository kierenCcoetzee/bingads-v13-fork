<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the keyword categories to which the specified keywords belong.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getkeywordcategories?view=bingads-12 GetKeywordCategories Response Object
     * 
     * @uses KeywordCategoryResult
     * @used-by BingAdsAdInsightService::GetKeywordCategories
     */
    final class GetKeywordCategoriesResponse
    {
        /**
         * An array of KeywordCategoryResult data objects.
         * @var KeywordCategoryResult[]
         */
        public $Result;
    }
}
