<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\SubjectGrade;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;


protected $table = "students";
protected $fillable = [
    'fname',
    'lname',
    'email',
    'phone',
    'address',
    'city',
    'state',
    'zip',
    'birthdate'


     ];
     protected $appends = ['fullname', 'birtday']; 

     public function getFullnameAttribute()
     {
        return $this->fname . '' . $this->lname;
     }

        public function getBirthdayAttributes()
        {
            $birthdate = $this->attributes['birthdate'];
            if($birthdate){
                return Carbon::parse($birthdate)->format('F d,Y');
            }
        }

    public function grades()
    {
        return $this->hasMany(SubjectGrade::class, 'student_id');
    }
}
