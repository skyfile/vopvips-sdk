<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\xstore\order\ofc\api\request;

class ConvertInfOutletsOrderReq {
	
	static $_TSPEC;
	public $infOutletsOrderInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOutletsOrderInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOutletsOrderInfo'])){
				
				$this->infOutletsOrderInfo = $vals['infOutletsOrderInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConvertInfOutletsOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOutletsOrderInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->infOutletsOrderInfo = new \Voop\com\vip\xstore\order\common\pojo\vo\InfOutletsOrderInfoVO();
				$this->infOutletsOrderInfo->read($input);
				
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
		
		if($this->infOutletsOrderInfo !== null) {
			
			$xfer += $output->writeFieldBegin('infOutletsOrderInfo');
			
			if (!is_object($this->infOutletsOrderInfo)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOutletsOrderInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>