<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a duration conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/durationgoal?view=bingads-12 DurationGoal Data Object
     */
    final class DurationGoal extends ConversionGoal
    {
        /**
         * The minimum amount of time in seconds that the user must spend on your website to track as a conversion.
         * @var integer
         */
        public $MinimumDurationInSeconds;
    }

}
