<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given An empty basket
     */
    public function anEmptyBasket()
    {
        throw new PendingException();
    }

    /**
     * @Then The basket price is :arg1 $
     */
    public function theBasketPriceIs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given A product costing :arg1 $ is added to the basket
     */
    public function aProductCostingIsAddedToTheBasket($arg1)
    {
        throw new PendingException();
    }
}
