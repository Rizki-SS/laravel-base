<?php

namespace App\Themes\Infrastructure\Repositories;

use App\Themes\Application\Mappers\ThemeMappers;
use App\Themes\Domains\Model\Theme;
use App\Themes\Domains\Repositories\ThemeRepoInterface;
use App\Themes\Infrastructure\Models\Themes as dbModel;
use Illuminate\Pagination\LengthAwarePaginator;

class ThemeRepo implements ThemeRepoInterface
{
    private int $pagination = 15;

    public function __construct(
        private dbModel $theme,
        private ThemeMappers $mappers,
    ) {

    }

    public function fetch(): LengthAwarePaginator{
        $themes = $this->theme->paginate($this->pagination);
        $mappedThemes = [];
    
        foreach ($themes as $themeEloquent) {
            $mappedThemes[] = $this->mappers->fromEloquent($themeEloquent); 
        }
    
        $themes->data = $mappedThemes;
        return $themes;
    }

    public function insert(Theme $theme): Theme {
        $thmeEloquent = $this->mappers->toEloquent($theme);
        $thmeEloquent->save();

        return $this->mappers->fromEloquent($thmeEloquent);
    }


    /**
     * Set the value of pagination
     */
    public function setPagination(int $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }
}
