<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Adds experiments and creates experiment campaigns based on existing campaigns in an account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addexperiments?view=bingads-12 AddExperiments Request Object
     * 
     * @uses Experiment
     * @used-by BingAdsCampaignManagementService::AddExperiments
     */
    final class AddExperimentsRequest
    {
        /**
         * The list of experiments to add.
         * @var Experiment[]
         */
        public $Experiments;
    }
}
