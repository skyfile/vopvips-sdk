<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\vop\omni\logistics;

class Order {
	
	static $_TSPEC;
	public $order_id = null;
	public $package_no = null;
	public $packages = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'package_no'
			),
			3 => array(
			'var' => 'packages'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['packages'])){
				
				$this->packages = $vals['packages'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Order';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->package_no); 
				
			}
			
			
			
			
			if ("packages" == $schemeField){
				
				$needSkip = false;
				
				$this->packages = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \Voop\com\vip\vop\omni\logistics\Package();
						$elem1->read($input);
						
						$this->packages[$_size1++] = $elem1;
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeI32($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packages !== null) {
			
			$xfer += $output->writeFieldBegin('packages');
			
			if (!is_array($this->packages)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->packages as $iter0){
				
				
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