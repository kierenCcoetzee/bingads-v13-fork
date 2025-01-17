<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setnegativesitestoadgroups?view=bingads-12 SetNegativeSitesToAdGroups Request Object
     * 
     * @uses AdGroupNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
         * @var AdGroupNegativeSites[]
         */
        public $AdGroupNegativeSites;
    }
}
