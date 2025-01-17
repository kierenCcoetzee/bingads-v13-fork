<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets the list of categories available for the website domain and language.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getdomaincategories?view=bingads-12 GetDomainCategories Response Object
     * 
     * @uses DomainCategory
     * @used-by BingAdsAdInsightService::GetDomainCategories
     */
    final class GetDomainCategoriesResponse
    {
        /**
         * The list of domain categories.
         * @var DomainCategory[]
         */
        public $Categories;
    }
}
