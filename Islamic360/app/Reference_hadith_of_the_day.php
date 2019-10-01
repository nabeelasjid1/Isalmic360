<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference_hadith_of_the_day extends Model
{
    protected $fillable = ['Bab', 'Hadith_No', 'Volume'. 'Book', 'Sahih_or_Not', 'Sahih_Reference_Book_Name', 'Takhreej'];
}
