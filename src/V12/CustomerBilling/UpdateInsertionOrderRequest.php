<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Updates an insertion order within the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/updateinsertionorder?view=bingads-12 UpdateInsertionOrder Request Object
     * 
     * @uses InsertionOrder
     * @used-by BingAdsCustomerBillingService::UpdateInsertionOrder
     */
    final class UpdateInsertionOrderRequest
    {
        /**
         * An insertion order to update within the account.
         * @var InsertionOrder
         */
        public $InsertionOrder;
    }
}
