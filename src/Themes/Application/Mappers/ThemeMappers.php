<?php

namespace App\Themes\Application\Mappers;
use App\Themes\Domains\Model\Theme;
use App\Themes\Domains\Model\ValueObjects\ShowCase;
use App\Themes\Infrastructure\Models\Themes as ThemeEloquent;

class ThemeMappers
{
    public function fromEloquent(ThemeEloquent $theme): Theme {
        return new Theme(
            id: $theme["id"],
            name: $theme["name"],
            description: $theme["desciption"],
            showcase:new ShowCase(binary_data:null,filename:$theme["showcase"]),
            theme_config: $theme["theme_config"]
        );
    }

    public function toEloquent(Theme $theme): ThemeEloquent {
        $themeEloquent = new ThemeEloquent();
        if ($theme->id)
            $themeEloquent = ThemeEloquent::query()->findOrFail($theme->id);

        $themeEloquent->name = $theme->name;
        $themeEloquent->description = $theme->description;
        $themeEloquent->showcase = $theme->showcase->filename;
        $themeEloquent->theme_config = $theme->theme_config;
        
        return $themeEloquent;
    }
}
