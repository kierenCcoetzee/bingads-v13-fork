<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the specified media meta data from an account's media library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getmediametadatabyids?view=bingads-12 GetMediaMetaDataByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsRequest
    {
        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;
    }
}
