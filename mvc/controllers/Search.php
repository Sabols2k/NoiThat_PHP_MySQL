<?php
use App\Request as RequestLib;
class Search extends Controller{

    public function index(){
        $this->view('search');
    }

}