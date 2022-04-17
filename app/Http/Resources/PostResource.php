<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class PostResource extends JsonResource
{
    #[ArrayShape([
        'id' => "integer",
        'title' => "string",
        'contents' => "string",
        'post_comments' => "mixed",
        'created_at' => "mixed",
        'updated_at' => "mixed"
    ])] public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'contents' => $this->contents,
            'post_comments' => $this->postComments,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
