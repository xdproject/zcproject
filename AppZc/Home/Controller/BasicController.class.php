<?php
namespace Home\Controller;
use Think\Controller;
class BasicController extends Controller {
    public function index(){
			   $this->show("hello");
    }
}
