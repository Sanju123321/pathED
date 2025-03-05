<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentManagement extends Model
{
    public function contentData()
    {
        return $this->hasMany(ContentData::class, 'content_management_id');
    }
}