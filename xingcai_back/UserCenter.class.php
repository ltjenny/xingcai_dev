<?php
class UserCenter extends WebLoginBase{
	public final function userInfo(){
		$this->display('userCenter/userInfo.php');
	}

	public final function editPwd(){
		$this->display('userCenter/editPwd.php');
	}

	public final function emails(){
		$this->display('userCenter/emails.php');
	}

	public final function notice(){
		$this->display('userCenter/notice.php');
	}

	public final function cardList(){
		$this->display('userCenter/cardList.php');
	}
}
