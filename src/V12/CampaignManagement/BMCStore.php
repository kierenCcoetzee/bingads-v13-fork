<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a Microsoft Merchant Center store.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/bmcstore?view=bingads-12 BMCStore Data Object
     * 
     * @uses BMCStoreSubType
     * @used-by GetBMCStoresByCustomerIdResponse
     */
    final class BMCStore
    {
        /**
         * Value will be true if the store has a catalog of items, and otherwise the value is false.
         * @var boolean
         */
        public $HasCatalog;

        /**
         * The unique identifier for the  Microsoft Merchant Center store.
         * @var integer
         */
        public $Id;

        /**
         * Value will be true if the store is active, and otherwise the value is false.
         * @var boolean
         */
        public $IsActive;

        /**
         * Reserved for internal use.
         * @var boolean
         */
        public $IsProductAdsEnabled;

        /**
         * Defines the name of the store as defined in the Microsoft Merchant Center.
         * @var string
         */
        public $Name;

        /**
         * The Microsoft Merchant Center store sub type.
         * @var BMCStoreSubType
         */
        public $SubType;
    }

}
