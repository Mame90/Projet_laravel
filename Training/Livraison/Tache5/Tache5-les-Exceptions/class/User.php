<?php
namespace class;
class USer{
    public function __construct(public string $username,public string $password)
{}
public function Isverified(): bool
{
     return false;
  //  return true;
}
public function Isban(): bool
{
    return false;
}
}


?>