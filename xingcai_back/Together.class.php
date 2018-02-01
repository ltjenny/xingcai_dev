<?php
class Together extends WebLoginBase{
	public final function search(){
		$this->display('together/search.php');
    }		
    
	public final function togetherCenter(){
		$this->display('together/togetherCenter.php');
    }	
    
}
