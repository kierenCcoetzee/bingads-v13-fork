<?php

namespace Microsoft\BingAds\V12\CustomerBilling;

{
    /**
     * Defines the field order of insertion orders returned using SearchInsertionOrders.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/orderbyfield?view=bingads-12 OrderByField Value Set
     * 
     * @used-by OrderBy
     */
    final class OrderByField
    {
        /** The order is determined by a predicate identifier. */
        const Id = 'Id';

        /** The order is determined by a predicate name. */
        const Name = 'Name';

        /** The order is determined by a predicate number. */
        const Number = 'Number';

        /** The order is determined by a predicate life cycle status. */
        const LifeCycleStatus = 'LifeCycleStatus';
    }

}
