<?php

use App\Pegawai;

class PegawaiTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function shouldCreateObject()
    {
        $id = 1;
        $name = 'Smith Rowe';
        $basicSalary = 1000000;
        $age= 21;
        $address = 'Malang';
        $phone = '081334343106';
        $tanggal_lahir = '15/06/1999';
        $jabatan = 'Pegawai';
        $tempat_lahir= 'Surabaya';
        $tanggal_masuk = '18/07/2020';


        $obj = new Pegawai($id,$name,$basicSalary,$age,$address,$phone,$tanggal_lahir,$jabatan,$tempat_lahir,$tanggal_masuk);

        $this->assertEquals($id, $obj->getId());
        $this->assertEquals($name, $obj->getName());
        $this->assertEquals($age, $obj->getAge());
        $this->assertEquals($address, $obj->getAddress());
        $this->assertEquals($phone, $obj->getPhone());
        $this->assertEquals($tanggal_lahir, $obj->getTanggalLahir());
        $this->assertEquals($jabatan, $obj->getJabatan());
        $this->assertEquals($tempat_lahir, $obj->getTempatLahir());
        $this->assertEquals($tanggal_masuk, $obj->getTanggalMasuk());       
    }
}