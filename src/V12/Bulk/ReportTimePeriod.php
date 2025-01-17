<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * This value set is not supported in Bing Ads API Version 12, and will be removed in a future version.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/reporttimeperiod?view=bingads-12 ReportTimePeriod Value Set
     * 
     * @used-by PerformanceStatsDateRange
     */
    final class ReportTimePeriod
    {
        /** Performance data for the current day. */
        const Today = 'Today';

        /** Performance data for the previous day. */
        const Yesterday = 'Yesterday';

        /** Performance data for the previous seven days, one row for each day. */
        const LastSevenDays = 'LastSevenDays';

        /** Performance data for the current calendar week. */
        const ThisWeek = 'ThisWeek';

        /** Performance data for the previous calendar week. */
        const LastWeek = 'LastWeek';

        /** Performance data for the four calendar weeks prior to today. */
        const LastFourWeeks = 'LastFourWeeks';

        /** Performance data for the current calendar month. */
        const ThisMonth = 'ThisMonth';

        /** Performance data for the previous calendar month. */
        const LastMonth = 'LastMonth';

        /** Performance data for the previous three calendar months. */
        const LastThreeMonths = 'LastThreeMonths';

        /** Performance data for the previous six calendar months. */
        const LastSixMonths = 'LastSixMonths';

        /** Performance data for the current calendar year. */
        const ThisYear = 'ThisYear';

        /** Performance data for the previous calendar year. */
        const LastYear = 'LastYear';
    }

}
