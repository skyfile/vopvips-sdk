<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\pms\data\service;

class PmsCommandFavModel {
	
	static $_TSPEC;
	public $buy = null;
	public $cut = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'buy'
			),
			2 => array(
			'var' => 'cut'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['cut'])){
				
				$this->cut = $vals['cut'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsCommandFavModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->buy);
				
			}
			
			
			
			
			if ("cut" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->cut);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('buy');
		$xfer += $output->writeDouble($this->buy);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cut');
		$xfer += $output->writeDouble($this->cut);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>