<?php
class Carro {
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        echo "Marca: " . $this->marca . "\n";
        echo "Modelo: " . $this->modelo . "\n";
        echo "Ano: " . $this->ano . "\n";
    }
}

class CarroEletrico extends Carro {
    private $autonomia;

    public function __construct($marca, $modelo, $ano, $autonomia) {
        // LEIA COM ATENÇÃO:
        // O codigo da linha abaixo é novo ( -> parent:: <- ), e serve como um desafio para vocês descobrirem para que serve.
        // Faça uma rapida pesquisa na internet e descubra suas caracteristicas e para que serve.
        parent::__construct($marca, $modelo, $ano);
        //
        //
        $this->autonomia = $autonomia;
    }

    public function getAutonomia() {
        return $this->autonomia;
    }

    public function setAutonomia($autonomia) {
        $this->autonomia = $autonomia;
    }

    public function exibirDetalhes() {
        // LEIA COM ATENÇÃO:
        // O codigo da linha abaixo é novo ( -> parent:: <- ), e serve como um desafio para vocês descobrirem para que serve.
        // Faça uma rapida pesquisa na internet e descubra suas caracteristicas e para que serve.
        parent::exibirDetalhes();
        //
        //
        echo "Autonomia: " . $this->autonomia . " km\n";
    }
}

// Exemplo de uso:
$meuCarro = new Carro("Toyota", "Corolla", 2020);
$meuCarro->exibirDetalhes();

$meuCarroEletrico = new CarroEletrico("Tesla", "Model 3", 2021, 500);
$meuCarroEletrico->exibirDetalhes();
?>