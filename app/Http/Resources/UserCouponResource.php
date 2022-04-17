<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class UserCouponResource extends JsonResource
{

    #[ArrayShape([
        'id' => "integer",
        'user_id' => "integer",
        'coupon_id' => "integer",
        'created_at' => "mixed",
        'updated_at' => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'coupon_id' => $this->coupon_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
