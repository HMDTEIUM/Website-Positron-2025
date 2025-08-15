<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback'; // Table name in DB
<<<<<<< HEAD
    protected $fillable = ['name', 'message', 'email']; // Fillable fields for mass assignment
    
}
=======
    protected $fillable = ['name','email', 'message'];
}
>>>>>>> 5ad7fce (Commit)
