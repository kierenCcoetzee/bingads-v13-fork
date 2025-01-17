<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a webpage parameter that contains a list of webpage conditions or criteria that help determine whether you want to show dynamic search ads.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/webpage?view=bingads-12 Webpage Data Object
     * 
     * @uses WebpageParameter
     */
    final class Webpage extends Criterion
    {
        /**
         * The webpage parameter that contains a list of webpage conditions or criteria.
         * @var WebpageParameter
         */
        public $Parameter;
    }

}
