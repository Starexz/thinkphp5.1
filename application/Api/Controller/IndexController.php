<?php

namespace app\Api\Controller;
use app\Api\Logic\IndexLogic;
use app\Api\Model\AgeModel;

/**
 * Created by PhpStorm.
 * User: Liuhuanyu
 * Date: 2017/9/15
 * Time: 21:46
 */
class IndexController {


	public function index() {
		new IndexLogic();
		$age = new AgeModel([
    		'start_age' => 1,
    		'end_age' => 2
    	]);
    	$id = $age->save();
    	var_dump($id);
	}


}