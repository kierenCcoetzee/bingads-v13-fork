<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible user-determined status values of a conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/conversiongoalstatus?view=bingads-12 ConversionGoalStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalStatus
    {
        /** The conversion goal is active. */
        const Active = 'Active';

        /** The conversion goal is paused. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

}
