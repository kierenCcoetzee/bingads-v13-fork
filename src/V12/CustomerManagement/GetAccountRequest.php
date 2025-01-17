<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccount?view=bingads-12 GetAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountRequest
    {
        /**
         * The identifier of the account to get.
         * @var integer
         */
        public $AccountId;
    }
}
