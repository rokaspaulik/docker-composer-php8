<?php

namespace App\Models;

class Point {
  public function __construct(
    public float $x = 0.0,
    public float $y = 0.0,
    public float $z = 0.0,
  ) {}

  public function sumPoints()
  {
    return $this->x + $this->y + $this->z;
  }
}
