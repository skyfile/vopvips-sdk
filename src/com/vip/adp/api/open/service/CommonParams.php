<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\adp\api\open\service;

class CommonParams {
	
	static $_TSPEC;
	public $plat = null;
	public $deviceType = null;
	public $deviceValue = null;
	public $ip = null;
	public $longitude = null;
	public $latitude = null;
	public $deviceName = null;
	public $osType = null;
	public $accessType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'plat'
			),
			2 => array(
			'var' => 'deviceType'
			),
			3 => array(
			'var' => 'deviceValue'
			),
			4 => array(
			'var' => 'ip'
			),
			5 => array(
			'var' => 'longitude'
			),
			6 => array(
			'var' => 'latitude'
			),
			7 => array(
			'var' => 'deviceName'
			),
			8 => array(
			'var' => 'osType'
			),
			9 => array(
			'var' => 'accessType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['plat'])){
				
				$this->plat = $vals['plat'];
			}
			
			
			if (isset($vals['deviceType'])){
				
				$this->deviceType = $vals['deviceType'];
			}
			
			
			if (isset($vals['deviceValue'])){
				
				$this->deviceValue = $vals['deviceValue'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['longitude'])){
				
				$this->longitude = $vals['longitude'];
			}
			
			
			if (isset($vals['latitude'])){
				
				$this->latitude = $vals['latitude'];
			}
			
			
			if (isset($vals['deviceName'])){
				
				$this->deviceName = $vals['deviceName'];
			}
			
			
			if (isset($vals['osType'])){
				
				$this->osType = $vals['osType'];
			}
			
			
			if (isset($vals['accessType'])){
				
				$this->accessType = $vals['accessType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommonParams';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("plat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->plat); 
				
			}
			
			
			
			
			if ("deviceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deviceType);
				
			}
			
			
			
			
			if ("deviceValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deviceValue);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("longitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longitude);
				
			}
			
			
			
			
			if ("latitude" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latitude);
				
			}
			
			
			
			
			if ("deviceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deviceName);
				
			}
			
			
			
			
			if ("osType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osType);
				
			}
			
			
			
			
			if ("accessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessType);
				
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
		
		if($this->plat !== null) {
			
			$xfer += $output->writeFieldBegin('plat');
			$xfer += $output->writeI32($this->plat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deviceType !== null) {
			
			$xfer += $output->writeFieldBegin('deviceType');
			$xfer += $output->writeString($this->deviceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deviceValue !== null) {
			
			$xfer += $output->writeFieldBegin('deviceValue');
			$xfer += $output->writeString($this->deviceValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->longitude !== null) {
			
			$xfer += $output->writeFieldBegin('longitude');
			$xfer += $output->writeString($this->longitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latitude !== null) {
			
			$xfer += $output->writeFieldBegin('latitude');
			$xfer += $output->writeString($this->latitude);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deviceName !== null) {
			
			$xfer += $output->writeFieldBegin('deviceName');
			$xfer += $output->writeString($this->deviceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->osType !== null) {
			
			$xfer += $output->writeFieldBegin('osType');
			$xfer += $output->writeString($this->osType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessType !== null) {
			
			$xfer += $output->writeFieldBegin('accessType');
			$xfer += $output->writeString($this->accessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>