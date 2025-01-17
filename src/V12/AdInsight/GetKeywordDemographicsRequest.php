<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the age and gender of users who have searched for the specified keywords.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getkeyworddemographics?view=bingads-12 GetKeywordDemographics Request Object
     * 
     * @used-by BingAdsAdInsightService::GetKeywordDemographics
     */
    final class GetKeywordDemographicsRequest
    {
        /**
         * An array of keywords for which you want to get demographics data.
         * @var string[]
         */
        public $Keywords;

        /**
         * The language in which the keywords are written.
         * @var string
         */
        public $Language;

        /**
         * The country code of the country/region to use as the source of the demographics data.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A list of one or more of the following device types: Computers, NonSmartphones, Smartphones, Tablets.
         * @var string[]
         */
        public $Device;
    }
}
