<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomePage(): void
    {
        $result = $this->get('/');

        $result->assertStatus(200);
    }
}
