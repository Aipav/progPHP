<?php
namespace App;

class Point{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX(float $value): void{
        $this->x += $value;
    }

    public function moveY(float $value): void{
        $this->y += $value;
    }
}
