<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that pairs one header with between 3 and 10 snippet values that tell customers more about your business.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/structuredsnippetadextension?view=bingads-12 StructuredSnippetAdExtension Data Object
     */
    final class StructuredSnippetAdExtension extends AdExtension
    {
        /**
         * The header that is appended with a colon (:) and precedes the snippet values.
         * @var string
         */
        public $Header;

        /**
         * The snippet values that follow after the Header: component.
         * @var string[]
         */
        public $Values;
    }

}
