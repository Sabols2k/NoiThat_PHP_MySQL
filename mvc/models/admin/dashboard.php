<?php
class dashboard extends DB{
  public function __construct()
	{
		parent::__construct();
    }
    public function general(){
        $sql= "CALL `dashboard`();";
      $this->execute($sql);
      while($datas=$this->getData()){
          $data[]=$datas;
      }
      return $data;
    }
}

?>