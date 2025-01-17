<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the list of keyword idea categories.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getkeywordideacategories?view=bingads-12 GetKeywordIdeaCategories Response Object
     * 
     * @uses KeywordIdeaCategory
     * @used-by BingAdsAdInsightService::GetKeywordIdeaCategories
     */
    final class GetKeywordIdeaCategoriesResponse
    {
        /**
         * The list of keyword idea categories.
         * @var KeywordIdeaCategory[]
         */
        public $KeywordIdeaCategories;
    }
}
