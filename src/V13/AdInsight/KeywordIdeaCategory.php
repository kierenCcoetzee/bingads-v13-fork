<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a keyword idea category.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordideacategory?view=bingads-13 KeywordIdeaCategory Data Object
     * 
     * @used-by GetKeywordIdeaCategoriesResponse
     */
    final class KeywordIdeaCategory
    {
        /**
         * The Bing Ads identifier of the keyword idea category.
         * @var integer
         */
        public $CategoryId;

        /**
         * The name of the keyword idea category.
         * @var string
         */
        public $CategoryName;
    }

}
