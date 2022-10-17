<?php

namespace App\Http\Resources\WebService;

use Illuminate\Http\Resources\Json\JsonResource;

class MiniAdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'type' => $this->type,
            'category' => new CategoryResource($this->category)
        ];
    }
}
