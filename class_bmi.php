<?php

class BMIPasien{

    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;
    public $berat;
    public $tinggi;
    public $nilai;
    public $tanggal;

    function __construct($tanggal, $kode, $nama, $gender, $berat, $tinggi ){
        $this->tanggal = $tanggal;
        $this->kode = $kode;
        $this->nama= $nama;
        $this->gender = $gender;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilaiBMI(){
        $berat = $this->berat;
        $tinggi = $this->tinggi;
        $nilai = $berat / ($tinggi*$tinggi)*10000 ;
        return $this->nilai = number_format($nilai, 1, '.', '');


    }

    public function statusBMI(){
        if ($this->nilai < 18.5) {
            return "Kekurangan Berat Badan";
        }elseif ($this->nilai >= 18.5 && $this->nilai <= 24.9) {
            return "Normal (Ideal)";
        }elseif ($this->nilai >= 25.0 && $this->nilai <= 29.9) {
            return "Kelebihan Berat Badan";
        }else {
            return "Kegemukan (Obesitas)";
        }
    }



}



?>