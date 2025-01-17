<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/findaccountsorcustomersinfo?view=bingads-12 FindAccountsOrCustomersInfo Request Object
     * 
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoRequest
    {
        /**
         * The criteria to use to filter the list of accounts and customers.
         * @var string
         */
        public $Filter;

        /**
         * A nonzero positive integer that specifies the number of accounts to return in the result.
         * @var integer
         */
        public $TopN;
    }
}
