<?php

class Estudante extends Pessoa
{
    public $matricula;
    public $ira;

    public function disciplinasMatriculadas()
    {
        return 'PHP Orientado a Objetos';
    }

    public function atualizaIRA($nota)
    {
        $this -> ira += $nota;
        return $this -> ira;
    }

    public function verEstudante():array
    {
        $dados['Nome'] = $this -> nome;
        $dados['Matricula'] = $this -> matricula;
        $dados['IRA'] = $this -> ira;

        return $dados;
    }

    public function calculaAvaliacao()
    {
        $ira = 50;
        $percentagemPresenca = 80;
        $resultado = $ira * $porcentagemPresenca;
        return $resultado;
    }

}