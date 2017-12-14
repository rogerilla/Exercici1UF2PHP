<?php

class Celda {
   private $colorfont;
   private $colorfons;
   private $contingut;
   
   public function __construct($font,$fons,$contingut) {
       $this->colorfont =$font;
       $this->colorfons =$fons;
       $this->contingut=$contingut;
   }
   
    function getColorfont() {
        return $this->colorfont;
    }

    function getColorfons() {
        return $this->colorfons;
    }

    function getContingut() {
        return $this->contingut;
    }

    function setColorfont($colorfont) {
        $this->colorfont = $colorfont;
    }

    function setColorfons($colorfons) {
        $this->colorfons = $colorfons;
    }

    function setContingut($contingut) {
        $this->contingut = $contingut;
    }


}
?>
