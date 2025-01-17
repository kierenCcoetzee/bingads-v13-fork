<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines a calendar date by month, day, and year.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/date?view=bingads-12 Date Data Object
     * 
     * @used-by BudgetSummaryReportTime
     * @used-by ReportTime
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

}
