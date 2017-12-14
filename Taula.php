<?php

require_once 'Celda.php';


    class Taula {
        private $columna;
        private $fila;
        private $matriu;
                
        public function __construct($fila, $columna ) {
            $this->columne = $columna;
            $this->fila = $fila;
            $this->matriu = array();
            for ($i=0;$i<$fila;$i++){
                for ($j=0;$j<$columna;$j++)
                    $this->matriu[$i][$j]=" ";
            }
        }

        public function assignar_celda ($x,$y,$font,$fons,$contingut){ 
            $celda = new Celda($font,$fons,$contingut);
            $this->matriu[$x][$y] = $celda;
        }

        
        public function printar (){
                
        }
        
        public function getColumne() {
            return $this->columna;
        }

        public function getFila() {
            return $this->fila;
        }
        public function setColumne($columna) {
            $this->columne = $columna;
        }

        public function setFila($fila) {
            $this->fila = $fila;
        }

    }

