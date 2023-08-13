<?php

namespace App\Themes\Application\Controller;
use App\Framework\Controller;
use App\Themes\Application\Resource\ThemeResource;
use App\Themes\Domains\Repositories\ThemeRepoInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class FetchThemeController extends Controller
{
    private ThemeRepoInterface $repo;

    public function __construct(ThemeRepoInterface $repo) {
        $this->repo = $repo;
    }

    public function __invoke() : JsonResource {
        $theme = $this->repo->setPagination(1)->fetch();
        return ThemeResource::collection($theme);
    }
}
