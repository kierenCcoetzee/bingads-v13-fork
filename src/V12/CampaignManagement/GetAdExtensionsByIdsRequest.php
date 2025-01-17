<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getadextensionsbyids?view=bingads-12 GetAdExtensionsByIds Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AdExtensionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsRequest
    {
        /**
         * The identifier of the account that owns the ad extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of ad extension identifiers.
         * @var integer[]
         */
        public $AdExtensionIds;

        /**
         * The types of ad extensions that the list of identifiers contains.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * The list of additional properties that you want included within each returned ad extension.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
