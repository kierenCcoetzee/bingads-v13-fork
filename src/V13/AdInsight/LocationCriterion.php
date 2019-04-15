<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The location criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/locationcriterion?view=bingads-13 LocationCriterion Data Object
     * 
     * @used-by LocationSearchParameter
     */
    final class LocationCriterion extends Criterion
    {
        /**
         * The Bing Ads identifier of the location that you want to target.
         * @var integer
         */
        public $LocationId;
    }

}
