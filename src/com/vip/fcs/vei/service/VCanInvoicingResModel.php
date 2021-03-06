<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\fcs\vei\service;

class VCanInvoicingResModel {
	
	static $_TSPEC;
	public $canEinvoice = null;
	public $restulMesg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canEinvoice'
			),
			2 => array(
			'var' => 'restulMesg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canEinvoice'])){
				
				$this->canEinvoice = $vals['canEinvoice'];
			}
			
			
			if (isset($vals['restulMesg'])){
				
				$this->restulMesg = $vals['restulMesg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VCanInvoicingResModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("canEinvoice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canEinvoice);
				
			}
			
			
			
			
			if ("restulMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->restulMesg = new \Voop\com\vip\fcs\vei\service\BaseRetMsg();
				$this->restulMesg->read($input);
				
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
		
		if($this->canEinvoice !== null) {
			
			$xfer += $output->writeFieldBegin('canEinvoice');
			$xfer += $output->writeBool($this->canEinvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->restulMesg !== null) {
			
			$xfer += $output->writeFieldBegin('restulMesg');
			
			if (!is_object($this->restulMesg)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->restulMesg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>