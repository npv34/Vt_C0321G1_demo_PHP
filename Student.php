<?php


class Student
{
    //khai bao thuoc tinh
    /*
     * muc do truy suat + kieu du lieu + ten thuoc tinh
     * muc do truy suat vao thuoc tinh: public, protected, private
     * + public: thuoc tinh se duoc truy cap o bat cu dau
     * + protected: thuoc tinh chi duoc truy cap o lop cha hoac lop con ke thua
     * + private: thuoc tinh chi duoc truy cap tai lop day thoi
     */

    public string $name;
    protected string $address;
    protected string $phone;
    private string $email;


    // khai bao ham khoi tao
    public function __construct($name,
                                $email,
                                $address,
                                $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getInfo(): string
    {
        $info = "Ten: " . $this->name . " Email: " . $this->email;
        return $info;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}


