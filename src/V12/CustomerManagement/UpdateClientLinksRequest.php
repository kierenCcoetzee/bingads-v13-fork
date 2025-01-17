<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Updates the status of the specified client links.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/updateclientlinks?view=bingads-12 UpdateClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::UpdateClientLinks
     */
    final class UpdateClientLinksRequest
    {
        /**
         * The list of client links to update.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
