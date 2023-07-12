<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function($user){
            return [
                'id' => $user->id,
                'name' => $user->name,
                'bio' => $user->bio,
                'image' => url('/') . $user->image,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ];
        });
        }
    }
