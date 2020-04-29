<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\xstore\order\ofc\api\request;

class AddOfcSyncDataReq {
	
	static $_TSPEC;
	public $preSaleDataList = null;
	public $afterSaleDataList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'preSaleDataList'
			),
			2 => array(
			'var' => 'afterSaleDataList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['preSaleDataList'])){
				
				$this->preSaleDataList = $vals['preSaleDataList'];
			}
			
			
			if (isset($vals['afterSaleDataList'])){
				
				$this->afterSaleDataList = $vals['afterSaleDataList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddOfcSyncDataReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("preSaleDataList" == $schemeField){
				
				$needSkip = false;
				
				$this->preSaleDataList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\com\vip\xstore\order\common\pojo\vo\OfcSyncPreSaleDataVO();
						$elem0->read($input);
						
						$this->preSaleDataList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("afterSaleDataList" == $schemeField){
				
				$needSkip = false;
				
				$this->afterSaleDataList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \Voop\com\vip\xstore\order\common\pojo\vo\OfcSyncAfterSaleDataVO();
						$elem1->read($input);
						
						$this->afterSaleDataList[$_size1++] = $elem1;
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
		
		if($this->preSaleDataList !== null) {
			
			$xfer += $output->writeFieldBegin('preSaleDataList');
			
			if (!is_array($this->preSaleDataList)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->preSaleDataList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleDataList !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleDataList');
			
			if (!is_array($this->afterSaleDataList)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->afterSaleDataList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>