<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;


class Project extends Model
{
    use HasFactory;


    public function customers(){
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    public function scopeFilter($query, array $filters){
       if(isset($filters['search']) ? $filters['search'] : false){
        return $query->where('project_name','like','%'.$filters['search'].'%');
       }
    }
}
