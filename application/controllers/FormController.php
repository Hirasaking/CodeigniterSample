<?php

class FormController extends CI_Controller {

	public function index()
	{
		$config = [
			[
				'field' => 'username',
				'label' => 'ユーザ名',
				'rules' => 'required',
			],
			[
				'field' => 'password',
				'label' => 'パスワード',
				'rules' => 'required',
			],
			[
				'field' => 'userfile',
				'label' => 'ファイル',
				'rules' => 'callback_validate_image',
			],
		];
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('myform');
		}
		else
		{
				$this->load->view('formsuccess');
		}
	}

	public function validate_image($str) {
		$check = TRUE;

		echo __LINE__ . ':' . $str; 


		// if ((!isset($_FILES['image'])) || $_FILES['image']['size'] == 0) {
		// 	$this->form_validation->set_message('validate_image', 'ファイルを選択してください');
		// 	$check = FALSE;
		// }
		// else if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
		// 	$allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "PNG");
		// 	$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
		// }
			
		// if(!in_array($ext, $allowedExts)) {
		// 	$this->form_validation->set_message('validate_image', "無効な拡張子です");
		// 	$check = FALSE;
		// }
		return $check;
	}
}