<?php

namespace App\Themes\Application\Resource;
use Illuminate\Http\Resources\Json\JsonResource;

class ThemeResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}