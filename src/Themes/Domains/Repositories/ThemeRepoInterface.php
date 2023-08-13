<?php

namespace App\Themes\Domains\Repositories;
use App\Themes\Domains\Model\Theme;
use Illuminate\Pagination\LengthAwarePaginator;

interface ThemeRepoInterface
{
    public function fetch(): LengthAwarePaginator;
    public function insert(Theme $theme): Theme;
    public function setPagination(int $pagination): self;
}
