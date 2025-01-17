<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines a user invitation.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/userinvitation?view=bingads-12 UserInvitation Data Object
     * 
     * @uses LCID
     * @used-by SearchUserInvitationsResponse
     * @used-by SendUserInvitationRequest
     */
    final class UserInvitation
    {
        /**
         * A system generated unique identifier for the user invitation.
         * @var integer
         */
        public $Id;

        /**
         * The first name of the user.
         * @var string
         */
        public $FirstName;

        /**
         * The last name of the user.
         * @var string
         */
        public $LastName;

        /**
         * The email address corresponding to the user's Microsoft account.
         * @var string
         */
        public $Email;

        /**
         * The identifier of the customer this user is invited to manage.
         * @var integer
         */
        public $CustomerId;

        /**
         * The role that the user has for each customer or list of accounts.
         * @var integer
         */
        public $RoleId;

        /**
         * An array of identifiers of the accounts that the user can manage.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The date and time that the user invitation will expire.
         * @var \DateTime
         */
        public $ExpirationDate;

        /**
         * The locale to use when sending correspondence to the user by email or postal mail.
         * @var LCID
         */
        public $Lcid;
    }

}
