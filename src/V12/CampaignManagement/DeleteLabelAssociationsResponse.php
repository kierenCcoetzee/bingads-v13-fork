<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletelabelassociations?view=bingads-12 DeleteLabelAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteLabelAssociations
     */
    final class DeleteLabelAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
