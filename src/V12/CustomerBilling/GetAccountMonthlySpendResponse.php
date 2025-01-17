<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Gets the amount spent by the account in the specified month.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/getaccountmonthlyspend?view=bingads-12 GetAccountMonthlySpend Response Object
     * 
     * @used-by BingAdsCustomerBillingService::GetAccountMonthlySpend
     */
    final class GetAccountMonthlySpendResponse
    {
        /**
         * The amount spent by the account in the specified period.
         * @var double
         */
        public $Amount;
    }
}
