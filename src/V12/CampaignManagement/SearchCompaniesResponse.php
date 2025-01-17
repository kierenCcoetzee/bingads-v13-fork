<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Search for profile data by company name.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/searchcompanies?view=bingads-12 SearchCompanies Response Object
     * 
     * @uses Company
     * @used-by BingAdsCampaignManagementService::SearchCompanies
     */
    final class SearchCompaniesResponse
    {
        /**
         * The list of companies that match the requested company name filter.
         * @var Company[]
         */
        public $Companies;
    }
}
