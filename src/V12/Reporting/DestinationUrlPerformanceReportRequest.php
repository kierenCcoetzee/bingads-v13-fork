<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines a destination URL performance report request.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/destinationurlperformancereportrequest?view=bingads-12 DestinationUrlPerformanceReportRequest Data Object
     * 
     * @uses ReportAggregation
     * @uses DestinationUrlPerformanceReportColumn
     * @uses DestinationUrlPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class DestinationUrlPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var ReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var DestinationUrlPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var DestinationUrlPerformanceReportFilter
         */
        public $Filter;

        /**
         * The entity scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
