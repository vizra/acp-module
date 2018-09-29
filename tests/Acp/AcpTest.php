<?php

namespace Tests\Acp;

class AcpTest extends TestCase
{
    /** @test */
    function module_is_installed()
    {
        $this->assertNotNull(superv('droplets')->get('vizra.modules.acp'));
    }
}