<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines an auction segment search parameter.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/auctionsegmentsearchparameter?view=bingads-12 AuctionSegmentSearchParameter Data Object
     * 
     * @uses AuctionSegment
     */
    final class AuctionSegmentSearchParameter extends SearchParameter
    {
        /**
         * Determines how you want the SegmentedKpis data segmented in the result from the GetAuctionInsightData operation.
         * @var AuctionSegment
         */
        public $Segment;
    }

}
