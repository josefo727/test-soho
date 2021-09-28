<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Str;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'logo' => Str::replace('public', '/storage', $this->logo),
            'image' => Str::replace('public', '/storage', $this->image),
            'background' => $this->background,
            'tags' => $this->tags->pluck('name')
        ];
    }
}
