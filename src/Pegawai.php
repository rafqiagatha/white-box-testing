<?php
namespace App;

class Pegawai
{
    private $id;
    private $name;
    private $basicSalary;
    private $age;
    private $address;
    private $phone;
    private $tanggal_lahir;
    private $jabatan;
    private $tempat_lahir;
    private $tanggal_masuk;



    public function __construct($id, $name, $basicSalary,$age,$address,$phone,$tanggal_lahir,$jabatan,$tempat_lahir,$tanggal_masuk)
    {
        $this->id = $id;
        $this->name = $name;
        $this->basicSalary = $basicSalary;
        $this->age = $age;
        $this->address = $address;
        $this->phone = $phone;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jabatan = $jabatan;
        $this->tempat_lahir = $tempat_lahir;
        $this->tanggal_masuk = $tanggal_masuk;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBasicSalary()
    {
        return $this->basicSalary;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }
    
    public function getJabatan()
    {
        return $this->jabatan;
    }

    public function getTempatLahir()
    {
        return $this->tempat_lahir;
    }

    public function getTanggalMasuk()
    {
        return $this->tanggal_masuk;
    }
}