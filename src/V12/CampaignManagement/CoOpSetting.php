<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the ad group level settings for feed-based Microsoft Shopping Campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/coopsetting?view=bingads-12 CoOpSetting Data Object
     * 
     * @uses BidOption
     */
    final class CoOpSetting extends Setting
    {
        /**
         * The default bid boost percentage that you'll see in the Microsoft Advertising web application for new product groups.
         * @var double
         */
        public $BidBoostValue;

        /**
         * The flat amount of your Sponsored Products bid.
         * @var double
         */
        public $BidMaxValue;

        /**
         * Determines whether or not to amplify your partner's bid.
         * @var BidOption
         */
        public $BidOption;
    }

}
