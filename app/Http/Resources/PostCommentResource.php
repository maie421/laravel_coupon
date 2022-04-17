<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class PostCommentResource extends JsonResource
{

    #[ArrayShape([
        'id' => "integer",
        'user_id' => "integer",
        'post_id' => "integer",
        'contents' => "string",
        'created_at' => "mixed",
        'updated_at' => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'post_id' => $this->post_id,
            'contents' => $this->contents,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
