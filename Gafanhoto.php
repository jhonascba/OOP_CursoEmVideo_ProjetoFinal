<?php


class Gafanhoto extends Pessoa
{
    private string $login;
    private int $totAssistido;

    public function __construct(string $nome, int $idade, string $sexo, string $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin($login);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setSexo($sexo);
        $this->setTotAssistido(0);

    }

    public function viuMaisUm(): int
    {
        $this->setTotAssistido($this->getTotAssistido() +1);
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getTotAssistido(): int
    {
        return $this->totAssistido;
    }

    public function setTotAssistido(int $totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }


}