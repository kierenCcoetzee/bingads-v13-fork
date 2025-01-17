<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the criteria to use to filter the professional demographics audience report.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/professionaldemographicsaudiencereportfilter?view=bingads-12 ProfessionalDemographicsAudienceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @used-by ProfessionalDemographicsAudienceReportRequest
     */
    final class ProfessionalDemographicsAudienceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

}
