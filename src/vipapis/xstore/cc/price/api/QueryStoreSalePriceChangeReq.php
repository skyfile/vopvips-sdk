<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\xstore\cc\price\api;

class QueryStoreSalePriceChangeReq {
	
	static $_TSPEC;
	public $store_code = null;
	public $start_create_time = null;
	public $end_create_time = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_code'
			),
			2 => array(
			'var' => 'start_create_time'
			),
			3 => array(
			'var' => 'end_create_time'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_code'])){
				
				$this->store_code = $vals['store_code'];
			}
			
			
			if (isset($vals['start_create_time'])){
				
				$this->start_create_time = $vals['start_create_time'];
			}
			
			
			if (isset($vals['end_create_time'])){
				
				$this->end_create_time = $vals['end_create_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryStoreSalePriceChangeReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_code);
				
			}
			
			
			
			
			if ("start_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_create_time);
				
			}
			
			
			
			
			if ("end_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_create_time);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
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
		
		if($this->store_code !== null) {
			
			$xfer += $output->writeFieldBegin('store_code');
			$xfer += $output->writeString($this->store_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('start_create_time');
		$xfer += $output->writeI64($this->start_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_create_time');
		$xfer += $output->writeI64($this->end_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>