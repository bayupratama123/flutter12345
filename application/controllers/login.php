<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); class Login extends CI_Controller{
function construct(){ parent:: construct();
$this->load->model('M_login');
}
function login_api(){
$result['error'] = TRUE;
$user=$this->M_login->cek_login($_POST['username'],md5($_POST['password'])); if($user != NULL){
$result=$user;
$result['value'] = 1;
$result['msg'] = 'Selamat Datang, '.$user['username'];
}else{
$result['value'] = 0;
$result['msg'] = 'Tidak ditemukan username';
}
echo json_encode($result);
}
}
