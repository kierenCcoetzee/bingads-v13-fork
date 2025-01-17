<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addlabels?view=bingads-12 AddLabels Request Object
     * 
     * @uses Label
     * @used-by BingAdsCampaignManagementService::AddLabels
     */
    final class AddLabelsRequest
    {
        /**
         * The list of labels to add to the account.
         * @var Label[]
         */
        public $Labels;
    }
}
