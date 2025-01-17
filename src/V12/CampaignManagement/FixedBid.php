<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the fixed bid to use in the auction.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/fixedbid?view=bingads-12 FixedBid Data Object
     */
    final class FixedBid extends CriterionBid
    {
        /**
         * The bid value.
         * @var double
         */
        public $Amount;
    }

}
