<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\category;

class CategoryUpdates {
	
	static $_TSPEC;
	public $sinceUpdateTime = null;
	public $lastUpdateTime = null;
	public $categories = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sinceUpdateTime'
			),
			2 => array(
			'var' => 'lastUpdateTime'
			),
			3 => array(
			'var' => 'categories'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sinceUpdateTime'])){
				
				$this->sinceUpdateTime = $vals['sinceUpdateTime'];
			}
			
			
			if (isset($vals['lastUpdateTime'])){
				
				$this->lastUpdateTime = $vals['lastUpdateTime'];
			}
			
			
			if (isset($vals['categories'])){
				
				$this->categories = $vals['categories'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryUpdates';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sinceUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sinceUpdateTime); 
				
			}
			
			
			
			
			if ("lastUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateTime); 
				
			}
			
			
			
			
			if ("categories" == $schemeField){
				
				$needSkip = false;
				
				$this->categories = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \Voop\vipapis\category\CategoryUpdate();
						$elem0->read($input);
						
						$this->categories[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('sinceUpdateTime');
		$xfer += $output->writeI64($this->sinceUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lastUpdateTime');
		$xfer += $output->writeI64($this->lastUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->categories !== null) {
			
			$xfer += $output->writeFieldBegin('categories');
			
			if (!is_array($this->categories)){
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categories as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
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