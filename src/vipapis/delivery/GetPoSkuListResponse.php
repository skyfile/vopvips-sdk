<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\delivery;

class GetPoSkuListResponse {
	
	static $_TSPEC;
	public $purchase_order_sku_list = null;
	public $total = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_order_sku_list'
			),
			2 => array(
			'var' => 'total'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_order_sku_list'])){
				
				$this->purchase_order_sku_list = $vals['purchase_order_sku_list'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetPoSkuListResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchase_order_sku_list" == $schemeField){
				
				$needSkip = false;
				
				$this->purchase_order_sku_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\vipapis\delivery\PurchaseOrderSku();
						$elem0->read($input);
						
						$this->purchase_order_sku_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
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
		
		if($this->purchase_order_sku_list !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_order_sku_list');
			
			if (!is_array($this->purchase_order_sku_list)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->purchase_order_sku_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>