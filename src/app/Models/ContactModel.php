<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /*お問い合わせの種類によろ絞り込み*/
    public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    /*名前やメールアドレスによる絞り込み*/
    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('first_name', 'like', '%' . $keyword . '%')
                ->orwhere('last_name', 'like' , '%' . $keyword . '%')
                ->orwhere('email', 'like', '%' . $keyword . '%' );
        }
    }

    /*性別による絞り込み*/
    
    
    /*日付による絞り込み*/
    
}
