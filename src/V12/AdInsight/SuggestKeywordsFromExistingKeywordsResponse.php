<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Suggests keywords that could perform better than the specified keywords.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/suggestkeywordsfromexistingkeywords?view=bingads-12 SuggestKeywordsFromExistingKeywords Response Object
     * 
     * @uses KeywordSuggestion
     * @used-by BingAdsAdInsightService::SuggestKeywordsFromExistingKeywords
     */
    final class SuggestKeywordsFromExistingKeywordsResponse
    {
        /**
         * An array of KeywordSuggestion data objects.
         * @var KeywordSuggestion[]
         */
        public $KeywordSuggestions;
    }
}
