<?php
class dashboard extends DB
{
  public function __construct()
  {
    parent::__construct();
  }
  public function countProducts()
  {
    $sql = "SELECT count(b.productid ) FROM product as b;";
    // echo $sql; die();
    $this->execute($sql);
    if ($this->result) {
      $data = mysqli_fetch_array($this->result);
    } else {
      $data = 0;
    }

    return $data;
    // while($datas=$this->getData()){
    //     $data[]=$datas;
    // }
    // return $data;
  }
  public function countBill()
  {
    $sql = "SELECT count(b.billid ) FROM bill as b;";
    // echo $sql; die();
    $this->execute($sql);
    if ($this->result) {
      $data = mysqli_fetch_array($this->result);
    } else {
      $data = 0;
    }
    return $data;
  }
  public function countUser()
  {
    $sql = "SELECT count(b.userid ) FROM user as b;";
    // echo $sql; die();
    $this->execute($sql);
    if ($this->result) {
      $data = mysqli_fetch_array($this->result);
    } else {
      $data = 0;
    }
    return $data;
  }
  public function countEarning()
  {
    $sql = "SELECT sum(b.totalprice ) FROM bill as b;";
    // echo $sql; die();
    $this->execute($sql);
    if ($this->result) {
      $data = mysqli_fetch_array($this->result);
    } else {
      $data = 0;
    }
    return $data;
  }
}
