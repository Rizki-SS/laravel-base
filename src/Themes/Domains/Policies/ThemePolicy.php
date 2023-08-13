<?php

namespace App\Themes\Domains\Policies;
use Illuminate\Foundation\Auth\User;

class ThemePolicy
{
    public function viewAll() : bool {
        return true;
    }
}
