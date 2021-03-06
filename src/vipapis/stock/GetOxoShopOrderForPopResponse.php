<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\stock;

class GetOxoShopOrderForPopResponse {
	
	static $_TSPEC;
	public $oxo_shop_order_for_pop_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'oxo_shop_order_for_pop_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['oxo_shop_order_for_pop_list'])){
				
				$this->oxo_shop_order_for_pop_list = $vals['oxo_shop_order_for_pop_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOxoShopOrderForPopResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("oxo_shop_order_for_pop_list" == $schemeField){
				
				$needSkip = false;
				
				$this->oxo_shop_order_for_pop_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \Voop\vipapis\stock\OxoShopOrderForPopList();
						$elem1->read($input);
						
						$this->oxo_shop_order_for_pop_list[$_size1++] = $elem1;
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
		
		if($this->oxo_shop_order_for_pop_list !== null) {
			
			$xfer += $output->writeFieldBegin('oxo_shop_order_for_pop_list');
			
			if (!is_array($this->oxo_shop_order_for_pop_list)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->oxo_shop_order_for_pop_list as $iter0){
				
				
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