<?php

class Professor extends Pessoa{
    public string $especialidade;
    public string $salario;

    public function criaProfessor($especialidade, $salario)
    {
        $this -> inserirDados();

        $data = file_get_contents('professor.json');
        $json = json_decode($data);

        $array = array
        (
            'email' => $this -> email,
            'especialidade' => $especialidade,
            'salario' => $salario
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('professor.json', $json);
    }

    public function calculaAvaliacao()
    {
        $ira = 50;
        $percentagemPresenca = 80;
        $resultado = $ira * $percentagemPresenca;
        return $resultado;
    }

}




?>