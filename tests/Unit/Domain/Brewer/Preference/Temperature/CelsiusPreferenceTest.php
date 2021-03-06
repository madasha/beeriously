<?php

declare(strict_types=1);

namespace Beeriously\Tests\Unit\Domain\Brewer\Preference\Temperature;

use Beeriously\Domain\Brewers\Preference\Temperature\CelsiusPreference;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class CelsiusPreferenceTest extends TestCase
{
    public function testGetCode()
    {
        $this->assertSame('c', (new CelsiusPreference())->getCode());
    }

    public function testGetTranslation()
    {
        $this->assertSame('beeriously.measurements.temperature.systems.c.description', (new CelsiusPreference())->getTranslationDescriptionIdentifier());
    }
}
