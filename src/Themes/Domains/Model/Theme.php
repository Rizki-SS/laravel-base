<?php

namespace App\Themes\Domains\Model;
use App\Common\Domain\AggregateRoot;
use App\Themes\Domains\Model\ValueObjects\ShowCase;

class Theme extends AggregateRoot
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $name,
        public readonly ?string $description,
        public readonly ?ShowCase $showcase,
        public readonly ?object $theme_config,
    ) {}

    public function toArray() : array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'showcase' => $this->showcase->jsonSerialize(),
            'theme_config' => $this->theme_config,
        ];
    }
}
