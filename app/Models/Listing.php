<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable=['user_id','title','logo','company','email','website','tag','location','description'];
    public function scopeFilter($query,array $filters){
        if($filters['tag'] ?? false){
            $query->where('tag','like','%' . request('tag') .'%');
        
        }
        if($filters['sort'] ?? false){
            $query->orderBy('title',request('sort'));
        }

        if($filters['search'] ?? false){
            $query->where('title','like','%' . request('search') .'%')
            ->orwhere('description','like','%' . request('search') .'%')
            ->orwhere('tag','like','%' . request('search') .'%');
            // code above mean i can search in title or description or tag
        }
    }
}
