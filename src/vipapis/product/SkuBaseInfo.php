<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\product;

class SkuBaseInfo {
	
	static $_TSPEC;
	public $greoup_sn = null;
	public $barcode = null;
	public $sale_props_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'greoup_sn'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'sale_props_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['greoup_sn'])){
				
				$this->greoup_sn = $vals['greoup_sn'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['sale_props_list'])){
				
				$this->sale_props_list = $vals['sale_props_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuBaseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("greoup_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->greoup_sn);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("sale_props_list" == $schemeField){
				
				$needSkip = false;
				
				$this->sale_props_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\vipapis\product\SaleProps();
						$elem0->read($input);
						
						$this->sale_props_list[$_size0++] = $elem0;
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
		
		if($this->greoup_sn !== null) {
			
			$xfer += $output->writeFieldBegin('greoup_sn');
			$xfer += $output->writeString($this->greoup_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_props_list !== null) {
			
			$xfer += $output->writeFieldBegin('sale_props_list');
			
			if (!is_array($this->sale_props_list)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sale_props_list as $iter0){
				
				
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