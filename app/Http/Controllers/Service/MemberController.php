<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\M3Result;
use App\Entity\Member;
use App\Entity\TempPhone;
use App\Entity\TempEmail;
use App\Models\M3Email;
use App\Tool\UUID;
use Mail;

class MemberController extends Controller
{
  public function register(Request $request)
  {
    $phone = $request->input('phone', '');
    $password = $request->input('password', '');
    $confirm = $request->input('confirm', '');
    $validate_code = $request->input('validate_code', '');

    $m3_result = new M3Result;

    if($phone == '') {
      $m3_result->status = 1;
      $m3_result->message = '手机号不能为空';
      return $m3_result->toJson();
    }
    if($password == '' || strlen($password) < 6) {
      $m3_result->status = 2;
      $m3_result->message = '密码不少于6位';
      return $m3_result->toJson();
    }
    if($confirm == '' || strlen($confirm) < 6) {
      $m3_result->status = 3;
      $m3_result->message = '确认密码不少于6位';
      return $m3_result->toJson();
    }
    if($password != $confirm) {
      $m3_result->status = 4;
      $m3_result->message = '两次密码不相同';
      return $m3_result->toJson();
    }

    // 手机号注册
    if($phone != '') {
      if($validate_code == '' || strlen($validate_code) != 4) {
        $m3_result->status = 5;
        $m3_result->message = '验证码不正确';
        return $m3_result->toJson();
      }

      $validate = $request->session()->get('validate_code');
      if($validate != $validate_code) {

          $m3_result->status = 5;
          $m3_result->message = '验证码不正确';
          return $m3_result->toJson();
      }

        $member = new Member;
        $member->phone = $phone;
        $member->password = md5('bk' . $password);
        $member->nickname = $phone;
        $member->save();

        $m3_result->status = 0;
        $m3_result->message = '注册成功';
        //写入session 跳转url
        $request->session()->put('member', $member);

        return $m3_result->toJson();
      }
    else{
        $m3_result->status = 5;
        $m3_result->message = '验证码不正确';
        return $m3_result->toJson();
    }

    // 邮箱注册

  }

  public function login(Request $request) {
    $username = $request->get('username', '');
    $password = $request->get('password', '');
    $validate_code = $request->get('validate_code', '');

    $m3_result = new M3Result;

    // 校验
    // ....

    // 判断
     $validate_code_session = $request->session()->get('validate_code');
     if($validate_code != $validate_code_session) {
       $m3_result->status = 1;
       $m3_result->message = '验证码不正确';
       return $m3_result->toJson();
     }

    $member = null;
    if(strpos($username, '@') == true) {
      $member = Member::where('email', $username)->first();
    } else {
      $member = Member::where('phone', $username)->first();
    }

    if($member == null) {
      $m3_result->status = 2;
      $m3_result->message = '该用户不存在';
      return $m3_result->toJson();
    } else {
//        $m3_result->message=md5('bk' . $password)password;
//        return$m3_result->toJson();
      if(md5('bk' . $password) != $member->password) {
        $m3_result->status = 3;
        $m3_result->message = '密码不正确';
        return $m3_result->toJson();
      }
    }

    $request->session()->put('member', $member);

    $m3_result->status = 0;
    $m3_result->message = '登录成功';
    return $m3_result->toJson();
  }

  //用户退出
  public function logout(Request $request)
  {
      $request->session()->forget('member');
      return redirect('/');
  }
}
