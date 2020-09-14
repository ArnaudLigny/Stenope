<?php

/*
 * This file is part of the "Tom32i/Content" bundle.
 *
 * @author Thomas Jarrand <thomas.jarrand@gmail.com>
 */

namespace Content\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContentArgumentResolverTest extends WebTestCase
{
    private static array $kernelOptions = [
        'environment' => 'prod',
        'debug' => true,
    ];

    public function testOptionalArgumentForwardsToDefaultResolver(): void
    {
        $client = self::createClient(self::$kernelOptions);
        $client->request('GET', '/recipes/optional-recipe');

        self::assertResponseIsSuccessful();
    }
}
