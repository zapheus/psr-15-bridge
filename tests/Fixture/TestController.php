<?php

namespace Zapheus\Bridge\Psr\Fixture;

/**
 * Test Controller
 *
 * @package Zapheus
 * @author  Rougin Gutib <rougingutib@gmail.com>
 */
class TestController
{
    /**
     * @var \Zapheus\Bridge\Psr\Fixture\FoodController
     */
    protected $food;

    /**
     * Initializes the controller instance.
     *
     * @param \Zapheus\Bridge\Psr\Fixture\FoodController $food
     */
    public function __construct(FoodController $food)
    {
        $this->food = $food;
    }

    /**
     * Tests the food.
     *
     * @return string
     */
    public function test()
    {
        return 'Testing... ' . $this->food->eat();
    }
}
