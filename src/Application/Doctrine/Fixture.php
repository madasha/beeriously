<?php

declare(strict_types=1);

namespace Beeriously\Application\Doctrine;

use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;

abstract class Fixture extends \Doctrine\Bundle\FixturesBundle\Fixture implements ORMFixtureInterface
{
}
