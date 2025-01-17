<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Deletes a user.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/deleteuser?view=bingads-12 DeleteUser Request Object
     * 
     * @used-by BingAdsCustomerManagementService::DeleteUser
     */
    final class DeleteUserRequest
    {
        /**
         * The identifier of the user to delete.
         * @var integer
         */
        public $UserId;

        /**
         * The time-stamp value that the operation uses to reconcile the update.
         * @var base64Binary
         */
        public $TimeStamp;
    }
}
