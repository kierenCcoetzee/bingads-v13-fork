<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the age and gender of users who have searched for the specified keywords.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getkeyworddemographics?view=bingads-12 GetKeywordDemographics Response Object
     * 
     * @uses KeywordDemographicResult
     * @used-by BingAdsAdInsightService::GetKeywordDemographics
     */
    final class GetKeywordDemographicsResponse
    {
        /**
         * An array of KeywordDemographicResult data objects.
         * @var KeywordDemographicResult[]
         */
        public $KeywordDemographicResult;
    }
}
