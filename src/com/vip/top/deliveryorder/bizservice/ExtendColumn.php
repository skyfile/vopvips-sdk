<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\top\deliveryorder\bizservice;

class ExtendColumn {
	
	static $_TSPEC;
	public $packageNumFlag = null;
	public $waybillRouteType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'packageNumFlag'
			),
			2 => array(
			'var' => 'waybillRouteType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['packageNumFlag'])){
				
				$this->packageNumFlag = $vals['packageNumFlag'];
			}
			
			
			if (isset($vals['waybillRouteType'])){
				
				$this->waybillRouteType = $vals['waybillRouteType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExtendColumn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("packageNumFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packageNumFlag); 
				
			}
			
			
			
			
			if ("waybillRouteType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->waybillRouteType); 
				
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
		
		if($this->packageNumFlag !== null) {
			
			$xfer += $output->writeFieldBegin('packageNumFlag');
			$xfer += $output->writeI32($this->packageNumFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->waybillRouteType !== null) {
			
			$xfer += $output->writeFieldBegin('waybillRouteType');
			$xfer += $output->writeI32($this->waybillRouteType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>