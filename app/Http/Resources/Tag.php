<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Tag extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        
        return [

            'id' => $this->id,
            'name' => $this->name,
            'about' =>$this->about,
            'status' => $this->status,
            'order' => $this->order,
            'course_id' => $this->course_id,
            'user_id' => $this->user_id
        ];
    }
}
