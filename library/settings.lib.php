<?php

class Settings{
	
	private $db;
	private $lang;
	private $all_settings_arr=array();
	
	public function __construct(){
		global $Params;
		global $Lang;
		
		$this->db=$Params['Db']['Link'];
		$this->lang = $Lang;
		$this->LoadAllSettings();
	}
	
	public function LoadAllSettings(){
		$this->all_settings_arr=array();
		$settings=$this->db->getAll('SELECT `Code`, `Value` FROM `settings` WHERE Lang = ?i', $this->lang->GetId());
		foreach($settings as $setting){
			$this->all_settings_arr[$setting['Code']]=$setting['Value'];
		}
	}
	
	public function GetSetting($code,$default=''){
		if(!$this->all_settings_arr)$this->LoadAllSettings();
		foreach($this->all_settings_arr as $c=>$v){
			if($c==$code)return $v;
		}
		return $default;
	}
	
	public function SetSetting($code,$value){
		if(!$this->all_settings_arr)$this->LoadAllSettings();
		$this->db->query('UPDATE `settings` SET `Value`="'.$value.'" WHERE `Code`="'.$code.'" AND LangId = ?i', $this->lang->GetId());
		foreach($this->all_settings_arr as $c=>$v){
			if($c==$code){
				$this->all_settings_arr[$c]=$value;
				return true;
			}
		}
		return false;
	}
}

function stGetSetting($code,$default=''){
	global $Settings;
	return $Settings->GetSetting($code,$default);
}
function stSetSetting($code,$value){
	global $Settings;
	return $Settings->SetSetting($code,$value);
}

?>