<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\arplatform\face\service;

class CompareResponse {
	
	static $_TSPEC;
	public $token = null;
	public $resultList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'token'
			),
			2 => array(
			'var' => 'resultList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
			if (isset($vals['resultList'])){
				
				$this->resultList = $vals['resultList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CompareResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->token);
				
			}
			
			
			
			
			if ("resultList" == $schemeField){
				
				$needSkip = false;
				
				$this->resultList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\com\vip\arplatform\face\service\CompareResult();
						$elem0->read($input);
						
						$this->resultList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('token');
		$xfer += $output->writeString($this->token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultList');
		
		if (!is_array($this->resultList)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->resultList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>