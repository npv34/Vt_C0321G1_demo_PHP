<?php
/*
 * Khai bao lop Student
 * Thuoc tinh: name (string), email (string), phone (string), address (string)
 * Co phuong thuc getInfo(): tra ve thong tin cua hoc sinh
 * ?1: Ve so do lop cua lop Student
 * ?2: Khai bao lop Student theo mo ta
 * ?3: Tao 3 doi tuong hoc sinh va lan luot in ra man hinh thong tin cua hoc sinh do
 */
include_once "Student.php";

$student = new Student('Tring ',
    'tring@gmail.com',
    ' sHa noi ', 'C0321G2');
echo $student->getName();