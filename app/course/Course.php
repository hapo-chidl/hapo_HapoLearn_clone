<?php

namespace App\course;

use Illuminate\Database\Eloquent\Model;
use Tag;
use User;
use Lesson;
use SoftDeletes;

class Course extends Model
{
    protected $fillable = [
        'name', 'image', 'requements', 'description', 'price', 'time',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);
 
        $words = explode(' ', $term);
 
        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 1) {
                $words[$key] = '+' . $word  . '*';
            }
        }
        
        $searchTerm = implode(' ', $words);
 
        return $searchTerm;
    }
 
    public function scopeFullTextSearch($query, $columns, $term)
    {
        $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $this->fullTextWildcards($term));
 
        return $query;
    }
}
