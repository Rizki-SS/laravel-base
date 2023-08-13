<?php

namespace App\Themes\Application\Provider;
use App\Themes\Application\Mappers\ThemeMappers;
use App\Themes\Domains\Repositories\ThemeRepoInterface;
use App\Themes\Infrastructure\Models\Themes;
use App\Themes\Infrastructure\Repositories\ThemeRepo;
use Illuminate\Support\ServiceProvider;

class ThemeProvider extends ServiceProvider
{
    public function register() : void {
        $this->app->bind(ThemeRepoInterface::class, function ($app) {
            return new ThemeRepo(
                theme:$app->make(Themes::class),
                mappers:new ThemeMappers()
            );
        });
    }
}
