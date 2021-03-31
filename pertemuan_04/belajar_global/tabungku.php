<?php 
    class Tabung{
        private $diameter;
        private $tinggi;
        private $r;
        private $luassel = 0;
        private $phi = 3.14;
        private $voltabung = 0;

        public function setDiameter($value) {
            $this->diameter = $value;
            $this->r = $this->diameter/2;
        }

        public function setTinggi ($value) {
            $this->tinggi = $value;
        }

        public function hitungLuas() {
            $this->luassel = 3.14* $this->diameter*$this->tinggi;
        }

        public function getLuasSelimut (){
            return $this->luassel;
        }

        public function hitungVolume (){
            return $this->voltabung = 3.14* $this->r *$this->$r *$this->tinggi;
        }

        public function getVolume (){
            return $this->voltabung;
        }

        public function tes(){
            echo 'tabung berhasil';
        }
    }
?>