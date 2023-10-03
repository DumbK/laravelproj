<?php

protected $table = 'students';

$students = \App\Models\Student::all();
$student = new \App\Models\Student();
$student->name = 'John Doe';
$student->email = 'john@example.com';
$student->save();

class Student extends Model
{
    use HasFactory;
}
