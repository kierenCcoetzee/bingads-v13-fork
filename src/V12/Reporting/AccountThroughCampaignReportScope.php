<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the set of accounts and campaigns to include in the report.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/accountthroughcampaignreportscope?view=bingads-12 AccountThroughCampaignReportScope Data Object
     * 
     * @uses CampaignReportScope
     * @used-by BudgetSummaryReportRequest
     * @used-by CampaignPerformanceReportRequest
     */
    final class AccountThroughCampaignReportScope
    {
        /**
         * A list of up to 1,000 account identifiers to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * A list of up to 300 campaigns to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}
