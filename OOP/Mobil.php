<?php
    class Mobil{
        public $warna;
        public $merk;
    
        function maju() {
            return "Mobil maju";
         }
        function berhenti () {
            return "Mobil berhenti"
        }
    }
    
    $mobil_ahmad = new Mobil();
    
    $mobil_ahmad = new Mobil();
    $mobil_ahmad->merk = "Toyota";
    
    echo "Mobil Ahmad";
    echo "<br>Warna : ". $mobil_ahmad->warna;
    echo "<br>Merk : ". $mobil_ahmad->merk;
    
    echo $mobil_ahmad->maju();
    echo "<br>";
    echo $mobil_ahmad->berhenti();
    ?>