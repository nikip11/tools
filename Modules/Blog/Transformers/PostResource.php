<?php

namespace Modules\Blog\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use Modules\Blog\Transformers\CategoryResource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'slug' => $this->slug,
            'categories' => CategoryResource::collection($this->categories),
            'image' => $this->image
        ];
    }
}
