<?php 
    class bolaku {
        private $phi;
        private $jarijari;

        public function setPhi ($phi){
            $this->phi = $phi;
        }

        public function setJarijari ($jarijari){
            $this->jarijari = $jarijari;
        }

        public function getDiameter(){
            $diameterbolaku = $this->jarijari * 2;
            return $diameterbolaku;
        }

        public function getJarijari(){
            $jarijaribolaku = $this->jarijari;
            return $jarijaribolaku;
        }

        public function getLuasbolaku(){
            $luasbolaku = 4*(($this->phi * pow($this->jarijari, 2)));
            return $luasbolaku;
        }

        public function getVolumebolaku(){
            $volumebolaku = 4/3*(($this->phi * pow($this->jarijari, 3)));
            return $volumebolaku;
        }
    }

?>