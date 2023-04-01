<?php 

class BangunDatar {
    protected $scale = 1;

    public function __construct(protected $nama)
    {
        
    }

    public function getNama() {
        return $this->nama;
    }

    public function getScale() {
        return $this->scale;
    }
    
    public function setScale($scale) {
        $this->scale = $scale;
    }

    // menghitung luas bangun datar
    public function area()
    {

    }

    // menghitung keliling bangun datar 
    public function circumference()
    {

    }

    // memperbesar bangun datar sesuai scale
    public function enlarge($scale)
    {
        $this->scale *= $scale;
    }

    // memperkecil bangun datar sesuai scale
    public function shrink($scale)
    {
        $this->scale /= $scale;
    }

    public function info() {
        $str = "Nama: " . $this->getNama() . PHP_EOL;
        $str .= "Skala: " . $this->scale . PHP_EOL;
        echo $str;
    }

}

class Lingkaran extends BangunDatar {

    public function __construct(protected $jari_jari)
    {
        parent::__construct("Lingkaran");
    }

    public function area() 
    {
        return pi() * pow($this->jari_jari, 2);
    }

    public function circumference()
    {
        return 2 * pi() * $this->jari_jari;
    }

    public function enlarge($scale)
    {
        parent::enlarge($scale);
        $this->jari_jari *= $scale;
    }

    public function shrink($scale)
    {
        parent::shrink($scale);
        $this->jari_jari /= $scale;
    }

    public function info() 
    {
        $str = "Luas: " . $this->area() . PHP_EOL;
        $str .= "Keliling: " . $this->circumference() . PHP_EOL;
        echo $str;
    }

}

class Persegi extends BangunDatar {

    public function __construct(protected $sisi)
    {
        parent::__construct("Persegi");
    }

    public function area() 
    {
        return pow($this->sisi, 2);
    }

    public function circumference()
    {
        return 4 * $this->sisi;
    }

    public function enlarge($scale)
    {
        parent::enlarge($scale);
        $this->sisi *= $scale;
    }

    public function shrink($scale)
    {
        parent::shrink($scale);
        $this->sisi /= $scale;
    }

    public function info() 
    {
        $str = "Luas: " . $this->area() . PHP_EOL;
        $str .= "Keliling: " . $this->circumference() . PHP_EOL;
        echo $str;
    }


}


class PersegiPanjang extends BangunDatar {

    public function __construct(protected $panjang,
                                protected $lebar)
    {
        parent::__construct("Persegi panjang");
    }

    public function area()
    {
        return $this->panjang * $this->lebar;
    }

    public function circumference()
    {
        return 2 * ($this->panjang * $this->lebar);
    }

    public function enlarge($scale)
    {
        parent::enlarge($scale);
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale)
    {
        parent::enlarge($scale);
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }

    public function info() 
    {
        $str = "Luas: " . $this->area() . PHP_EOL;
        $str .= "Keliling: " . $this->circumference() . PHP_EOL;
        echo $str;
    }

}

// testing success
// $persegi = new Persegi(10);

// $persegi->info();

// $persegi->enlarge(3);
// $persegi->info();
