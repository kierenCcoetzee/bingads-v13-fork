<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getcampaignsbyaccountid?view=bingads-12 GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdResponse
    {
        /**
         * The list of campaigns that were retrieved.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
