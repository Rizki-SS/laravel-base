<?php

namespace App\Themes\Domains\Repositories;

use App\Themes\Domains\Model\ValueObjects\ShowCase;

Interface ShowcaseRepoInterface
{
    public function getBaseAvatar(?string $url): ShowCase;

    public function storeFile(ShowCase $avatar): ?string;

    public function retrieveFile(ShowCase $avatar): ?string;

    public function deleteFile(ShowCase $avatar): void;
}
