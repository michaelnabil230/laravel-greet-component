<?php

namespace MichaelNabil230\Greet\Tests;

use MichaelNabil230\Greet\Tests\TestCase;
use Illuminate\Support\Facades\View;

class GreetTest extends TestCase
{
    public function test_rendering_blade_string()
    {
        $view = View::make('greet', ['name' => 'Michael Nabil'])->render();

        dd($view);

        $this->assertSame('<div>
    <h3 class="text-primary mb-1">Michael Nabil,{{ $message }}</h3>
    <p>Here’s what happening with your site today </p>
</div>
', trim($view));
    }
}
