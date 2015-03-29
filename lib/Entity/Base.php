<?php

namespace Entity;

class Base
{
  /**
   * @var array
   */
  protected $data;

  /**
   * @param array $data
   */
  public function __construct($data = [])
  {
    $this->data = $data;
  }

  /**
   * @return bool
   */
  public function isPersisted()
  {
    return !empty($this->data['id']);
  }
}
