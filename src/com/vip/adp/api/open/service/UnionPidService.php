<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\adp\api\open\service;
interface UnionPidServiceIf{
	
	
	public function genPid(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest);
	
	public function genPidWithOauth(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest);
	
	public function healthCheck();
	
	public function queryPid(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest);
	
	public function queryPidWithOauth(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest);
	
}

class _UnionPidServiceClient extends \Voop\Osp\Base\OspStub implements \Voop\com\vip\adp\api\open\service\UnionPidServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.adp.api.open.service.UnionPidService", "1.0.0");
	}
	
	
	public function genPid(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest){
		
		$this->send_genPid( $pidGenRequest);
		return $this->recv_genPid();
	}
	
	public function send_genPid(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest){
		
		$this->initInvocation("genPid");
		$args = new \Voop\com\vip\adp\api\open\service\UnionPidService_genPid_args();
		
		$args->pidGenRequest = $pidGenRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genPid(){
		
		$result = new \Voop\com\vip\adp\api\open\service\UnionPidService_genPid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function genPidWithOauth(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest){
		
		$this->send_genPidWithOauth( $pidGenRequest);
		return $this->recv_genPidWithOauth();
	}
	
	public function send_genPidWithOauth(\Voop\com\vip\adp\api\open\service\PidGenRequest $pidGenRequest){
		
		$this->initInvocation("genPidWithOauth");
		$args = new \Voop\com\vip\adp\api\open\service\UnionPidService_genPidWithOauth_args();
		
		$args->pidGenRequest = $pidGenRequest;
		
		$this->send_base($args);
	}
	
	public function recv_genPidWithOauth(){
		
		$result = new \Voop\com\vip\adp\api\open\service\UnionPidService_genPidWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \Voop\com\vip\adp\api\open\service\UnionPidService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \Voop\com\vip\adp\api\open\service\UnionPidService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryPid(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest){
		
		$this->send_queryPid( $pidQueryRequest);
		return $this->recv_queryPid();
	}
	
	public function send_queryPid(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest){
		
		$this->initInvocation("queryPid");
		$args = new \Voop\com\vip\adp\api\open\service\UnionPidService_queryPid_args();
		
		$args->pidQueryRequest = $pidQueryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_queryPid(){
		
		$result = new \Voop\com\vip\adp\api\open\service\UnionPidService_queryPid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryPidWithOauth(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest){
		
		$this->send_queryPidWithOauth( $pidQueryRequest);
		return $this->recv_queryPidWithOauth();
	}
	
	public function send_queryPidWithOauth(\Voop\com\vip\adp\api\open\service\PidQueryRequest $pidQueryRequest){
		
		$this->initInvocation("queryPidWithOauth");
		$args = new \Voop\com\vip\adp\api\open\service\UnionPidService_queryPidWithOauth_args();
		
		$args->pidQueryRequest = $pidQueryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_queryPidWithOauth(){
		
		$result = new \Voop\com\vip\adp\api\open\service\UnionPidService_queryPidWithOauth_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class UnionPidService_genPid_args {
	
	static $_TSPEC;
	public $pidGenRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidGenRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pidGenRequest'])){
				
				$this->pidGenRequest = $vals['pidGenRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pidGenRequest = new \Voop\com\vip\adp\api\open\service\PidGenRequest();
			$this->pidGenRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pidGenRequest !== null) {
			
			$xfer += $output->writeFieldBegin('pidGenRequest');
			
			if (!is_object($this->pidGenRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pidGenRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_genPidWithOauth_args {
	
	static $_TSPEC;
	public $pidGenRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidGenRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pidGenRequest'])){
				
				$this->pidGenRequest = $vals['pidGenRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pidGenRequest = new \Voop\com\vip\adp\api\open\service\PidGenRequest();
			$this->pidGenRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pidGenRequest !== null) {
			
			$xfer += $output->writeFieldBegin('pidGenRequest');
			
			if (!is_object($this->pidGenRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pidGenRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_queryPid_args {
	
	static $_TSPEC;
	public $pidQueryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidQueryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pidQueryRequest'])){
				
				$this->pidQueryRequest = $vals['pidQueryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pidQueryRequest = new \Voop\com\vip\adp\api\open\service\PidQueryRequest();
			$this->pidQueryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pidQueryRequest !== null) {
			
			$xfer += $output->writeFieldBegin('pidQueryRequest');
			
			if (!is_object($this->pidQueryRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pidQueryRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_queryPidWithOauth_args {
	
	static $_TSPEC;
	public $pidQueryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidQueryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pidQueryRequest'])){
				
				$this->pidQueryRequest = $vals['pidQueryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pidQueryRequest = new \Voop\com\vip\adp\api\open\service\PidQueryRequest();
			$this->pidQueryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pidQueryRequest !== null) {
			
			$xfer += $output->writeFieldBegin('pidQueryRequest');
			
			if (!is_object($this->pidQueryRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pidQueryRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_genPid_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \Voop\com\vip\adp\api\open\service\CpsUnionPidGenResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_genPidWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \Voop\com\vip\adp\api\open\service\CpsUnionPidGenResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \Voop\com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_queryPid_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \Voop\com\vip\adp\api\open\service\CpsUnionPidQueryResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class UnionPidService_queryPidWithOauth_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \Voop\com\vip\adp\api\open\service\CpsUnionPidQueryResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>