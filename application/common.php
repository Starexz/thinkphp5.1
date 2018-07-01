<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function api_success($message = '', $data = []) {
	return ['flag' => 'success', 'message' => $message, 'data' => $data];
}



function api_error($message = '', $code = '', $data = []) {
	return ['flag' => 'error', 'message' => $message, 'err_code' => $code, 'data' => $data];
}