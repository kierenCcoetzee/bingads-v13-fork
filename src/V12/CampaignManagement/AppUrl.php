<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the operating system platform and URL of the app store download webpage.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/appurl?view=bingads-12 AppUrl Data Object
     * 
     * @used-by Ad
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SitelinkAdExtension
     */
    final class AppUrl
    {
        /**
         * Reserved for future use.
         * @var string
         */
        public $OsType;

        /**
         * Reserved for future use.
         * @var string
         */
        public $Url;
    }

}
