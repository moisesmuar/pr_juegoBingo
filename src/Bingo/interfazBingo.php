<?php
/**
 * getCarton() obtener carton
 * getBola() obtener bola bingo
 * setCarton() colocar carton
 * getLineaBingo() devuelve linea ganadora
 * getJugadores() devuelve numero de jugadores
 */
Interface BingoableInterface{
    
    public function getCarton();
    public function getBola();
    public function getLineaBingo(array $linea1,array $linea2, array $linea3);
    public function getJugadores();
    
}

// Max 3 cartones individual
// y Max 12 cartones grupal , 4 jugadores = 12 cartones total