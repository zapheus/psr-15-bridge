<?php

namespace Zapheus\Bridge\Psr;

use Zapheus\Bridge\Psr\Fixture\FoodController;
use Zapheus\Bridge\Psr\Fixture\TestController;
use Zapheus\Container\Container as ZapheusContainer;

/**
 * PSR-11 Container Test
 *
 * @package Zapheus
 * @author  Rougin Gutib <rougingutib@gmail.com>
 */
class InteropContainerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * Sets up the container instance.
     *
     * @return void
     */
    public function setUp()
    {
        $container = new ZapheusContainer;

        $this->container = new InteropContainer($container);

        $this->container->set('food', new FoodController);
    }

    /**
     * Tests ContainerInterface::get.
     *
     * @return void
     */
    public function testGetMethod()
    {
        $expected = new FoodController;

        $result = $this->container->get('food');

        $this->assertEquals($expected, $result);
    }

    /**
     * Tests ContainerInterface::has.
     *
     * @return void
     */
    public function testHasMethod()
    {
        $exists = $this->container->has('food');

        $this->assertTrue($exists);
    }
}
