<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getnegativesitesbyadgroupids?view=bingads-12 GetNegativeSitesByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of identifiers of the ad groups that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }
}
