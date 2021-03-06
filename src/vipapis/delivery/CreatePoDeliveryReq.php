<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\delivery;

class CreatePoDeliveryReq {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_nos = null;
	public $logistics_no = null;
	public $delivery_warehouse = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $carrier_code = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $jit_type = null;
	public $is_air_embargo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_nos'
			),
			3 => array(
			'var' => 'logistics_no'
			),
			4 => array(
			'var' => 'delivery_warehouse'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'delivery_time'
			),
			7 => array(
			'var' => 'arrival_time'
			),
			8 => array(
			'var' => 'carrier_code'
			),
			9 => array(
			'var' => 'delivery_method'
			),
			10 => array(
			'var' => 'store_sn'
			),
			11 => array(
			'var' => 'jit_type'
			),
			12 => array(
			'var' => 'is_air_embargo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_nos'])){
				
				$this->po_nos = $vals['po_nos'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['jit_type'])){
				
				$this->jit_type = $vals['jit_type'];
			}
			
			
			if (isset($vals['is_air_embargo'])){
				
				$this->is_air_embargo = $vals['is_air_embargo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreatePoDeliveryReq';
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
			
			
			
			
			if ("po_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->po_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->po_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_time);
				
			}
			
			
			
			
			if ("arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrival_time);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("delivery_method" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_method);
				
			}
			
			
			
			
			if ("store_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_sn);
				
			}
			
			
			
			
			if ("jit_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->jit_type); 
				
			}
			
			
			
			
			if ("is_air_embargo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_air_embargo); 
				
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
		
		$xfer += $output->writeFieldBegin('po_nos');
		
		if (!is_array($this->po_nos)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->po_nos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_time');
		$xfer += $output->writeString($this->delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrival_time');
			$xfer += $output->writeString($this->arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jit_type !== null) {
			
			$xfer += $output->writeFieldBegin('jit_type');
			$xfer += $output->writeI32($this->jit_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_air_embargo !== null) {
			
			$xfer += $output->writeFieldBegin('is_air_embargo');
			$xfer += $output->writeI32($this->is_air_embargo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>