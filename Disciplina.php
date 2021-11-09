<?php

/**
 *  
 * - Para chamar atributo ou método estático dentro da classe self::
 * - Para chamar atributo ou método estático da classe mãe parent::
 * - Para chamar atributo ou método estático fora da classe <nome da classe>::
 */
class Disciplina{
    public string $nome;
    public string $codigo;
    public int $creditos;
    public static $ministrada;

    public static function ministrarDisciplina(){
        self:$ministrada++;
    }

    public function verDisciplina()
    {
        return "{$this->nome} ({$this->codigo}) - {$this->creditos} - " . self:$ministrada;
    }
}