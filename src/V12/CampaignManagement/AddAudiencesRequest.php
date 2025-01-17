<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addaudiences?view=bingads-12 AddAudiences Request Object
     * 
     * @uses Audience
     * @used-by BingAdsCampaignManagementService::AddAudiences
     */
    final class AddAudiencesRequest
    {
        /**
         * The list of audiences to add.
         * @var Audience[]
         */
        public $Audiences;
    }
}
