<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional campaign properties that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaignadditionalfield?view=bingads-12 CampaignAdditionalField Value Set
     * 
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignAdditionalField
    {
        /** Request that the ExperimentId element be included within each returned Campaign object. */
        const ExperimentId = 'ExperimentId';

        /** Request that the FinalUrlSuffix element be included within each returned Campaign object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';
    }

}
