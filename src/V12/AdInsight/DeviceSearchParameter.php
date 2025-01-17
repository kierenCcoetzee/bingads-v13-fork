<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * The device search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/devicesearchparameter?view=bingads-12 DeviceSearchParameter Data Object
     * 
     * @uses DeviceCriterion
     */
    final class DeviceSearchParameter extends SearchParameter
    {
        /**
         * The device criterion for the returned keyword ideas.
         * @var DeviceCriterion
         */
        public $Device;
    }

}
