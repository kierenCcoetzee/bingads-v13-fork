<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Searches for accounts that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchaccounts?view=bingads-12 SearchAccounts Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchAccounts
     */
    final class SearchAccountsRequest
    {
        /**
         * Determines the conditions that all must be met to return accounts.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results by the specified property of an account.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
