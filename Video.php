<?php


class Video implements AcoesVideo
{
    private string $titulo;
    private float $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;


    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getAvaliacao(): float
    {
        return $this->avaliacao;
    }

    public function setAvaliacao(float $avaliacao): void
    {
        $media = ($this->avaliacao + $avaliacao) /$this->views;
        $this->avaliacao = $avaliacao;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function setViews(int $views): void
    {
        $this->views = $views;
    }

    public function getCurtidas(): int
    {
        return $this->curtidas;
    }

    public function setCurtidas(int $curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    public function isReproduzindo(): bool
    {
        return $this->reproduzindo;
    }

    private function setReproduzindo(bool $reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }

    //Métodos Interface

    public function play()
    {
        $this->setReproduzindo(true);
        echo "Reproduzindo";
    }

    public function pause()
    {
        $this->setReproduzindo(false);
        echo "Pause";
    }

    public function like()
    {
        $this->setCurtidas($this->getCurtidas() +1);
    }
}