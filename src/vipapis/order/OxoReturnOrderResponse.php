<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\order;

class OxoReturnOrderResponse {
	
	static $_TSPEC;
	public $has_next = null;
	public $oxo_return_orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'has_next'
			),
			2 => array(
			'var' => 'oxo_return_orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['has_next'])){
				
				$this->has_next = $vals['has_next'];
			}
			
			
			if (isset($vals['oxo_return_orders'])){
				
				$this->oxo_return_orders = $vals['oxo_return_orders'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OxoReturnOrderResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("has_next" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->has_next);
				
			}
			
			
			
			
			if ("oxo_return_orders" == $schemeField){
				
				$needSkip = false;
				
				$this->oxo_return_orders = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \Voop\vipapis\order\OxoReturnOrder();
						$elem1->read($input);
						
						$this->oxo_return_orders[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('has_next');
		$xfer += $output->writeBool($this->has_next);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('oxo_return_orders');
		
		if (!is_array($this->oxo_return_orders)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->oxo_return_orders as $iter0){
			
			
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