<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Downloads settings and performance data for the specified campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/downloadcampaignsbycampaignids?view=bingads-12 DownloadCampaignsByCampaignIds Response Object
     * 
     * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
     */
    final class DownloadCampaignsByCampaignIdsResponse
    {
        /**
         * The identifier of the download request.
         * @var string
         */
        public $DownloadRequestId;
    }
}
