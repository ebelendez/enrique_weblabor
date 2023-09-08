<?php

namespace Tests\Feature\Livewire;

use App\Livewire\DashbComponent;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DashbTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        $user = User::find(1);
        $this->be($user);
        Livewire::test(DashbComponent::class)
            ->assertStatus(200);
    }
}
