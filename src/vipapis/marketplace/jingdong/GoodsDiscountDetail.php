<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\marketplace\jingdong;

class GoodsDiscountDetail {
	
	static $_TSPEC;
	public $sku_id = null;
	public $unit_discount_money = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'unit_discount_money'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['unit_discount_money'])){
				
				$this->unit_discount_money = $vals['unit_discount_money'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsDiscountDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("unit_discount_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit_discount_money);
				
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
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit_discount_money !== null) {
			
			$xfer += $output->writeFieldBegin('unit_discount_money');
			$xfer += $output->writeString($this->unit_discount_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>