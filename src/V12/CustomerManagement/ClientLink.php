<?php

namespace Microsoft\BingAds\V12\CustomerManagement;

{
    /**
     * Defines a client link object.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/clientlink?view=bingads-12 ClientLink Data Object
     * 
     * @uses ClientLinkStatus
     * @uses KeyValuePairOfstringstring
     * @used-by AddClientLinksRequest
     * @used-by SearchClientLinksResponse
     * @used-by UpdateClientLinksRequest
     */
    final class ClientLink
    {
        /**
         * The identifier of the client account to manage.
         * @var integer
         */
        public $ClientAccountId;

        /**
         * The number of the client account to manage.
         * @var string
         */
        public $ClientAccountNumber;

        /**
         * The identifier of the customer who manages or is requesting to manage the client account.
         * @var integer
         */
        public $ManagingCustomerId;

        /**
         * The number of the customer who manages or is requesting to manage the client account.
         * @var string
         */
        public $ManagingCustomerNumber;

        /**
         * Optional message from the requestor providing context and details about the client link invitation.
         * @var string
         */
        public $Note;

        /**
         * The friendly name that can be used to reference this client link.
         * @var string
         */
        public $Name;

        /**
         * The email of the user who created the client link request.
         * @var string
         */
        public $InviterEmail;

        /**
         * The name of the parent customer of the user who created the client link request.
         * @var string
         */
        public $InviterName;

        /**
         * The phone number of the user who created the client link request.
         * @var string
         */
        public $InviterPhone;

        /**
         * Determines whether the owner of the client advertiser account or the managing customer is responsible for billing payments.
         * @var boolean
         */
        public $IsBillToClient;

        /**
         * The date when the status would update.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * Determines the life cycle status of the client link, for example whether the client link has been accepted or declined.
         * @var ClientLinkStatus
         */
        public $Status;

        /**
         * Determines whether or not to send email notification of the client link invitation to the primary user of the client account.
         * @var boolean
         */
        public $SuppressNotification;

        /**
         * The date and time that the client link was last updated.
         * @var \DateTime
         */
        public $LastModifiedDateTime;

        /**
         * The identifier of the last user to update the client link's information.
         * @var integer
         */
        public $LastModifiedByUserId;

        /**
         * Reserved for future use.
         * @var base64Binary
         */
        public $Timestamp;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;
    }

}
