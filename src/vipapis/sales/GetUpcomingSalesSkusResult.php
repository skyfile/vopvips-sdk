<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\sales;

class GetUpcomingSalesSkusResult {
	
	static $_TSPEC;
	public $total = null;
	public $upcomingSalesSkus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'total'
			),
			2 => array(
			'var' => 'upcomingSalesSkus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['upcomingSalesSkus'])){
				
				$this->upcomingSalesSkus = $vals['upcomingSalesSkus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetUpcomingSalesSkusResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("upcomingSalesSkus" == $schemeField){
				
				$needSkip = false;
				
				$this->upcomingSalesSkus = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \Voop\vipapis\sales\UpcomingSalesSku();
						$elem1->read($input);
						
						$this->upcomingSalesSkus[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI32($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->upcomingSalesSkus !== null) {
			
			$xfer += $output->writeFieldBegin('upcomingSalesSkus');
			
			if (!is_array($this->upcomingSalesSkus)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->upcomingSalesSkus as $iter0){
				
				
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