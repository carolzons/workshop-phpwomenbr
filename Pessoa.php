<?php

abstract class Pessoa{
    public string $nome;
    public string $telefone;
    public string $email;
    public string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    public function inserirDados(){
        $data = file_get_contents('pessoas.json');
        $json = json_decode($data);

        $array = array(
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('pessoas.json', $json);
    }

    abstract function calculaAvaliacao();

    public function verPessoa():array
    {
        $pessoas = json_decode(file_get_contents("{$this->tipo}.json"));
        return $pessoas;
    }

    public function excluirPessoa($keyToExclude)
    {
        $pessoas = json_decode(file_get_contents("pessoas.json"));
        foreach ($pessoas as $key => $value) {
            unset($pessoas[$keyToExclude]);
        }

        $json = json_encode(array_values($pessoas), JSON_PRETTY_PRINT);
        file_put_contents("pessoas.json",$json);


        $pessoas = json_decode(file_get_contents("{$this->tipo}.json"));
        foreach ($pessoas as $key => $value) {
            unset($pessoas[$keyToExclude]);
        }

        $json = json_encode(array_values($pessoas), JSON_PRETTY_PRINT);
        file_put_contents("{$this->tipo}.json",$json);

        return true;
    }

}