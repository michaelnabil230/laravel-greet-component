<?php

namespace MichaelNabil230\Greet\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use MichaelNabil230\Greet\View\Components\Greet;

class GreetTest extends TestCase
{
    use InteractsWithViews;

    public function test_rendering_blade_string()
    {
        $compiled = $this->component(Greet::class, ['username' => 'Michael Nabil']);
        $compiled->assertSeeText('Michael Nabil', false);
        $this->assertArrayHasKey('message', $compiled->data());
    }
}
