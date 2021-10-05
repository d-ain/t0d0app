<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array (
        'content' => 'required|string|max:20',
    );
    public function getDetail()
    {
        $txt = '作成日：'.$this->created_at.'　タスク名：'.$this->content;
        return $txt;
    }
}