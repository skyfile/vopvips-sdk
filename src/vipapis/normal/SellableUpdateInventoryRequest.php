<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\normal;

class SellableUpdateInventoryRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $batch_no = null;
	public $warehouse_supplier = null;
	public $sellableProductInventoryList = null;
	public $cooperation_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'batch_no'
			),
			3 => array(
			'var' => 'warehouse_supplier'
			),
			4 => array(
			'var' => 'sellableProductInventoryList'
			),
			5 => array(
			'var' => 'cooperation_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['warehouse_supplier'])){
				
				$this->warehouse_supplier = $vals['warehouse_supplier'];
			}
			
			
			if (isset($vals['sellableProductInventoryList'])){
				
				$this->sellableProductInventoryList = $vals['sellableProductInventoryList'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SellableUpdateInventoryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batch_no); 
				
			}
			
			
			
			
			if ("warehouse_supplier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_supplier);
				
			}
			
			
			
			
			if ("sellableProductInventoryList" == $schemeField){
				
				$needSkip = false;
				
				$this->sellableProductInventoryList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\vipapis\normal\SellableProductInventory();
						$elem0->read($input);
						
						$this->sellableProductInventoryList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			if($needSkip){
				
				\Voop\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeI32($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse_supplier !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_supplier');
			$xfer += $output->writeString($this->warehouse_supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sellableProductInventoryList');
		
		if (!is_array($this->sellableProductInventoryList)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->sellableProductInventoryList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>