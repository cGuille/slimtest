<?php

namespace Entity;

class User extends Base
{
  const ROLE_GUEST = 'guest';
  const ROLE_MEMBER = 'member';
  const ROLE_ADMIN = 'admin';

  public function getEmail()
  {
    return $this->data['email'];
  }
  /**
   * @return string
   */
  public function getRole()
  {
    return $this->data['role'];
  }
}
