<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


    class Expense extends Model
{

    use HasFactory, SoftDeletes;
    
    // protected $fillable = ['user_id','name', 'amount', 'category'];
    protected $guarded = [];

    protected $dates = ['deleted_at']; 
}


