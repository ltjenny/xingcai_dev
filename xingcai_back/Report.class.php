<?php
class Report extends WebLoginBase{
	public final function accountChange(){
		$this->display('report/accountChange.php');
	}

	public final function count(){
		$this->display('report/count.php');
	}
}
