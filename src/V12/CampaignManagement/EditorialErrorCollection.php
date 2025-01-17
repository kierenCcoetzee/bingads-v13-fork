<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a nested list of error object that identifies one of potentially many reasons why an entity failed editorial review.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/editorialerrorcollection?view=bingads-12 EditorialErrorCollection Data Object
     */
    final class EditorialErrorCollection extends BatchErrorCollection
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $Appealable;

        /**
         * The text that caused the entity to be disapproved.
         * @var string
         */
        public $DisapprovedText;

        /**
         * The element or property of the entity that caused the entity to be disapproved.
         * @var string
         */
        public $Location;

        /**
         * The corresponding country or region for the flagged editorial issue.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A numeric code that identifies the error.
         * @var integer
         */
        public $ReasonCode;
    }

}
