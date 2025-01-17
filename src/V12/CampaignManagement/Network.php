<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible search networks on which an ad can display.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/network?view=bingads-12 Network Value Set
     * 
     * @used-by AdGroup
     */
    final class Network
    {
        /** Display ads on owned and operated networks, as well as syndicated search networks. */
        const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

        /** Display ads on only owned and operated networks. */
        const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

        /** Display ads on only syndicated search networks. */
        const SyndicatedSearchOnly = 'SyndicatedSearchOnly';

        /** Reserved for future use. */
        const InHousePromotion = 'InHousePromotion';
    }

}
