<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Adds a negative keyword list to the account's library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addsharedentity?view=bingads-12 AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityResponse
    {
        /**
         * A list of long values that represents the identifiers for the list items that were added.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * The identifier for the shared entity that was added.
         * @var integer
         */
        public $SharedEntityId;
    }
}
