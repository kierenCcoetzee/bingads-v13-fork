<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an object that contains traffic estimates based on the campaign, ad group, and keyword criteria you specified when calling GetKeywordTrafficEstimates.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/trafficestimate?view=bingads-12 TrafficEstimate Data Object
     * 
     * @used-by KeywordEstimate
     */
    final class TrafficEstimate
    {
        /**
         * The estimated average CPC.
         * @var double
         */
        public $AverageCpc;

        /**
         * The estimated average CPC.
         * @var double
         */
        public $AveragePosition;

        /**
         * The estimated number of clicks per week.
         * @var double
         */
        public $Clicks;

        /**
         * The estimated CTR.
         * @var double
         */
        public $Ctr;

        /**
         * The estimated number of impressions per week.
         * @var double
         */
        public $Impressions;

        /**
         * The estimated total cost per week.
         * @var double
         */
        public $TotalCost;
    }

}
