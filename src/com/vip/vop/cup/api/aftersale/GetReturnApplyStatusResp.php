<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\vop\cup\api\aftersale;

class GetReturnApplyStatusResp {
	
	static $_TSPEC;
	public $return_apply_status_info = null;
	public $result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_apply_status_info'
			),
			2 => array(
			'var' => 'result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_apply_status_info'])){
				
				$this->return_apply_status_info = $vals['return_apply_status_info'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetReturnApplyStatusResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_apply_status_info" == $schemeField){
				
				$needSkip = false;
				
				$this->return_apply_status_info = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\com\vip\vop\cup\api\aftersale\ReturnApplyStatusInfo();
						$elem0->read($input);
						
						$this->return_apply_status_info[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \Voop\com\vip\vop\cup\api\aftersale\Result();
				$this->result->read($input);
				
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
		
		if($this->return_apply_status_info !== null) {
			
			$xfer += $output->writeFieldBegin('return_apply_status_info');
			
			if (!is_array($this->return_apply_status_info)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->return_apply_status_info as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_object($this->result)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->result->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>