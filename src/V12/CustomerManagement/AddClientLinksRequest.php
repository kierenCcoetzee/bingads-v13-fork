<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Initiates the client link process to manage the accounts of another customer.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/addclientlinks?view=bingads-12 AddClientLinks Request Object
     * 
     * @uses ClientLink
     * @used-by BingAdsCustomerManagementService::AddClientLinks
     */
    final class AddClientLinksRequest
    {
        /**
         * The list of client links to add.
         * @var ClientLink[]
         */
        public $ClientLinks;
    }
}
