<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the Microsoft Merchant Center stores for the specified customer.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getbmcstoresbycustomerid?view=bingads-12 GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        /**
         * The list of Microsoft Merchant Center stores for the specified customer.
         * @var BMCStore[]
         */
        public $BMCStores;
    }
}
