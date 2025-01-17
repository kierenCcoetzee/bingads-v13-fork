<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a Universal Event Tracking (UET) tag that you can add to your website to allow Microsoft Advertising to collect actions people take on your website.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/uettag?view=bingads-12 UetTag Data Object
     * 
     * @uses UetTagTrackingStatus
     * @used-by AddUetTagsRequest
     * @used-by AddUetTagsResponse
     * @used-by GetUetTagsByIdsResponse
     * @used-by UpdateUetTagsRequest
     */
    final class UetTag
    {
        /**
         * Text to help you identify the UET tag.
         * @var string
         */
        public $Description;

        /**
         * The unique Microsoft Advertising identifier of the UET tag.
         * @var integer
         */
        public $Id;

        /**
         * The UET tag name.
         * @var string
         */
        public $Name;

        /**
         * If your website doesn't support JavaScript, you can use this Non-JavaScript representation of the UET tag.
         * @var string
         */
        public $TrackingNoScript;

        /**
         * The tracking script that you can add to your website to allow Microsoft Advertising to collect actions people take on your website.
         * @var string
         */
        public $TrackingScript;

        /**
         * The system-determined status values of a UET tag, for example the system sets the status to Unverified if the UET tag has not yet been verified.
         * @var UetTagTrackingStatus
         */
        public $TrackingStatus;
    }

}
