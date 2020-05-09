<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\com\vip\xstore\pda\order\receiving;
interface ReceivingServiceIf{
	
	
	public function approvalFlow(\Voop\com\vip\xstore\pda\order\common\ApprovalFlowRequest $req);
	
	public function autoMatchQuantity(\Voop\com\vip\xstore\pda\order\receiving\DeliveryAutoMatchQuantityRequest $req);
	
	public function confirmFlow(\Voop\com\vip\xstore\pda\order\common\ConfirmFlowRequest $req);
	
	public function downloadReceivingOrder( $transferring_no);
	
	public function fixReceivingBoxStatus(\Voop\com\vip\xstore\pda\common\TimeRange $time_range);
	
	public function fixReceivingBoxStatusByReceivingNo( $receiving_no);
	
	public function healthCheck();
	
	public function initReceivingBoxByDate(\Voop\com\vip\xstore\pda\common\TimeRange $time_range);
	
	public function initReceivingBoxByNo( $receiving_no);
	
	public function queryReceivingItem(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingItemRequest $req);
	
	public function queryReceivingOrder4PDA(\Voop\com\vip\xstore\pda\order\receiving\PDAReceivingOrderRequest $req);
	
	public function queryReceivingOrder4XUP(\Voop\com\vip\xstore\pda\order\receiving\XUPReceivingOrderRequest $req);
	
	public function queryReceivingOrderDetail(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingDetailRequest $req);
	
	public function querySendFailure(\Voop\com\vip\xstore\pda\common\QuerySendFailureRequest $req);
	
	public function querySubmitBarcodeFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitBarcodeFlowRequest $req);
	
	public function querySubmitFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitFlowRequest $req);
	
	public function submitFlow(\Voop\com\vip\xstore\pda\order\common\SubmitFlowRequest $req);
	
	public function updateRemark(\Voop\com\vip\xstore\pda\order\common\UpdateRemarkRequest $req);
	
}

class _ReceivingServiceClient extends \Voop\Osp\Base\OspStub implements \Voop\com\vip\xstore\pda\order\receiving\ReceivingServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.xstore.pda.order.receiving.ReceivingService", "1.0.0");
	}
	
	
	public function approvalFlow(\Voop\com\vip\xstore\pda\order\common\ApprovalFlowRequest $req){
		
		$this->send_approvalFlow( $req);
		return $this->recv_approvalFlow();
	}
	
	public function send_approvalFlow(\Voop\com\vip\xstore\pda\order\common\ApprovalFlowRequest $req){
		
		$this->initInvocation("approvalFlow");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_approvalFlow_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_approvalFlow(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_approvalFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function autoMatchQuantity(\Voop\com\vip\xstore\pda\order\receiving\DeliveryAutoMatchQuantityRequest $req){
		
		$this->send_autoMatchQuantity( $req);
		return $this->recv_autoMatchQuantity();
	}
	
	public function send_autoMatchQuantity(\Voop\com\vip\xstore\pda\order\receiving\DeliveryAutoMatchQuantityRequest $req){
		
		$this->initInvocation("autoMatchQuantity");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_autoMatchQuantity_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_autoMatchQuantity(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_autoMatchQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmFlow(\Voop\com\vip\xstore\pda\order\common\ConfirmFlowRequest $req){
		
		$this->send_confirmFlow( $req);
		return $this->recv_confirmFlow();
	}
	
	public function send_confirmFlow(\Voop\com\vip\xstore\pda\order\common\ConfirmFlowRequest $req){
		
		$this->initInvocation("confirmFlow");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_confirmFlow_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_confirmFlow(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_confirmFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadReceivingOrder( $transferring_no){
		
		$this->send_downloadReceivingOrder( $transferring_no);
		return $this->recv_downloadReceivingOrder();
	}
	
	public function send_downloadReceivingOrder( $transferring_no){
		
		$this->initInvocation("downloadReceivingOrder");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_downloadReceivingOrder_args();
		
		$args->transferring_no = $transferring_no;
		
		$this->send_base($args);
	}
	
	public function recv_downloadReceivingOrder(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_downloadReceivingOrder_result();
		$this->receive_base($result);
		
	}
	
	
	public function fixReceivingBoxStatus(\Voop\com\vip\xstore\pda\common\TimeRange $time_range){
		
		$this->send_fixReceivingBoxStatus( $time_range);
		return $this->recv_fixReceivingBoxStatus();
	}
	
	public function send_fixReceivingBoxStatus(\Voop\com\vip\xstore\pda\common\TimeRange $time_range){
		
		$this->initInvocation("fixReceivingBoxStatus");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_fixReceivingBoxStatus_args();
		
		$args->time_range = $time_range;
		
		$this->send_base($args);
	}
	
	public function recv_fixReceivingBoxStatus(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_fixReceivingBoxStatus_result();
		$this->receive_base($result);
		
	}
	
	
	public function fixReceivingBoxStatusByReceivingNo( $receiving_no){
		
		$this->send_fixReceivingBoxStatusByReceivingNo( $receiving_no);
		return $this->recv_fixReceivingBoxStatusByReceivingNo();
	}
	
	public function send_fixReceivingBoxStatusByReceivingNo( $receiving_no){
		
		$this->initInvocation("fixReceivingBoxStatusByReceivingNo");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_fixReceivingBoxStatusByReceivingNo_args();
		
		$args->receiving_no = $receiving_no;
		
		$this->send_base($args);
	}
	
	public function recv_fixReceivingBoxStatusByReceivingNo(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_fixReceivingBoxStatusByReceivingNo_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function initReceivingBoxByDate(\Voop\com\vip\xstore\pda\common\TimeRange $time_range){
		
		$this->send_initReceivingBoxByDate( $time_range);
		return $this->recv_initReceivingBoxByDate();
	}
	
	public function send_initReceivingBoxByDate(\Voop\com\vip\xstore\pda\common\TimeRange $time_range){
		
		$this->initInvocation("initReceivingBoxByDate");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_initReceivingBoxByDate_args();
		
		$args->time_range = $time_range;
		
		$this->send_base($args);
	}
	
	public function recv_initReceivingBoxByDate(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_initReceivingBoxByDate_result();
		$this->receive_base($result);
		
	}
	
	
	public function initReceivingBoxByNo( $receiving_no){
		
		$this->send_initReceivingBoxByNo( $receiving_no);
		return $this->recv_initReceivingBoxByNo();
	}
	
	public function send_initReceivingBoxByNo( $receiving_no){
		
		$this->initInvocation("initReceivingBoxByNo");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_initReceivingBoxByNo_args();
		
		$args->receiving_no = $receiving_no;
		
		$this->send_base($args);
	}
	
	public function recv_initReceivingBoxByNo(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_initReceivingBoxByNo_result();
		$this->receive_base($result);
		
	}
	
	
	public function queryReceivingItem(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingItemRequest $req){
		
		$this->send_queryReceivingItem( $req);
		return $this->recv_queryReceivingItem();
	}
	
	public function send_queryReceivingItem(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingItemRequest $req){
		
		$this->initInvocation("queryReceivingItem");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingItem_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryReceivingItem(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingItem_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryReceivingOrder4PDA(\Voop\com\vip\xstore\pda\order\receiving\PDAReceivingOrderRequest $req){
		
		$this->send_queryReceivingOrder4PDA( $req);
		return $this->recv_queryReceivingOrder4PDA();
	}
	
	public function send_queryReceivingOrder4PDA(\Voop\com\vip\xstore\pda\order\receiving\PDAReceivingOrderRequest $req){
		
		$this->initInvocation("queryReceivingOrder4PDA");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrder4PDA_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryReceivingOrder4PDA(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrder4PDA_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryReceivingOrder4XUP(\Voop\com\vip\xstore\pda\order\receiving\XUPReceivingOrderRequest $req){
		
		$this->send_queryReceivingOrder4XUP( $req);
		return $this->recv_queryReceivingOrder4XUP();
	}
	
	public function send_queryReceivingOrder4XUP(\Voop\com\vip\xstore\pda\order\receiving\XUPReceivingOrderRequest $req){
		
		$this->initInvocation("queryReceivingOrder4XUP");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrder4XUP_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryReceivingOrder4XUP(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrder4XUP_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryReceivingOrderDetail(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingDetailRequest $req){
		
		$this->send_queryReceivingOrderDetail( $req);
		return $this->recv_queryReceivingOrderDetail();
	}
	
	public function send_queryReceivingOrderDetail(\Voop\com\vip\xstore\pda\order\receiving\QueryReceivingDetailRequest $req){
		
		$this->initInvocation("queryReceivingOrderDetail");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrderDetail_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryReceivingOrderDetail(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_queryReceivingOrderDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySendFailure(\Voop\com\vip\xstore\pda\common\QuerySendFailureRequest $req){
		
		$this->send_querySendFailure( $req);
		return $this->recv_querySendFailure();
	}
	
	public function send_querySendFailure(\Voop\com\vip\xstore\pda\common\QuerySendFailureRequest $req){
		
		$this->initInvocation("querySendFailure");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySendFailure_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_querySendFailure(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySendFailure_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySubmitBarcodeFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitBarcodeFlowRequest $req){
		
		$this->send_querySubmitBarcodeFlow( $req);
		return $this->recv_querySubmitBarcodeFlow();
	}
	
	public function send_querySubmitBarcodeFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitBarcodeFlowRequest $req){
		
		$this->initInvocation("querySubmitBarcodeFlow");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySubmitBarcodeFlow_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_querySubmitBarcodeFlow(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySubmitBarcodeFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySubmitFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitFlowRequest $req){
		
		$this->send_querySubmitFlow( $req);
		return $this->recv_querySubmitFlow();
	}
	
	public function send_querySubmitFlow(\Voop\com\vip\xstore\pda\order\common\QuerySubmitFlowRequest $req){
		
		$this->initInvocation("querySubmitFlow");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySubmitFlow_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_querySubmitFlow(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_querySubmitFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function submitFlow(\Voop\com\vip\xstore\pda\order\common\SubmitFlowRequest $req){
		
		$this->send_submitFlow( $req);
		return $this->recv_submitFlow();
	}
	
	public function send_submitFlow(\Voop\com\vip\xstore\pda\order\common\SubmitFlowRequest $req){
		
		$this->initInvocation("submitFlow");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_submitFlow_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_submitFlow(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_submitFlow_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateRemark(\Voop\com\vip\xstore\pda\order\common\UpdateRemarkRequest $req){
		
		$this->send_updateRemark( $req);
		return $this->recv_updateRemark();
	}
	
	public function send_updateRemark(\Voop\com\vip\xstore\pda\order\common\UpdateRemarkRequest $req){
		
		$this->initInvocation("updateRemark");
		$args = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_updateRemark_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateRemark(){
		
		$result = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingService_updateRemark_result();
		$this->receive_base($result);
		
	}
	
	
}




class ReceivingService_approvalFlow_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\ApprovalFlowRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_autoMatchQuantity_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\receiving\DeliveryAutoMatchQuantityRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_confirmFlow_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\ConfirmFlowRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_downloadReceivingOrder_args {
	
	static $_TSPEC;
	public $transferring_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_no'])){
				
				$this->transferring_no = $vals['transferring_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferring_no');
		$xfer += $output->writeString($this->transferring_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_fixReceivingBoxStatus_args {
	
	static $_TSPEC;
	public $time_range = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'time_range'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['time_range'])){
				
				$this->time_range = $vals['time_range'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->time_range = new \Voop\com\vip\xstore\pda\common\TimeRange();
			$this->time_range->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('time_range');
		
		if (!is_object($this->time_range)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->time_range->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_fixReceivingBoxStatusByReceivingNo_args {
	
	static $_TSPEC;
	public $receiving_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'receiving_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['receiving_no'])){
				
				$this->receiving_no = $vals['receiving_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->receiving_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('receiving_no');
		$xfer += $output->writeString($this->receiving_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_healthCheck_args {
	
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




class ReceivingService_initReceivingBoxByDate_args {
	
	static $_TSPEC;
	public $time_range = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'time_range'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['time_range'])){
				
				$this->time_range = $vals['time_range'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->time_range = new \Voop\com\vip\xstore\pda\common\TimeRange();
			$this->time_range->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('time_range');
		
		if (!is_object($this->time_range)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->time_range->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_initReceivingBoxByNo_args {
	
	static $_TSPEC;
	public $receiving_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'receiving_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['receiving_no'])){
				
				$this->receiving_no = $vals['receiving_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->receiving_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('receiving_no');
		$xfer += $output->writeString($this->receiving_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_queryReceivingItem_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\receiving\QueryReceivingItemRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_queryReceivingOrder4PDA_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\receiving\PDAReceivingOrderRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_queryReceivingOrder4XUP_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\receiving\XUPReceivingOrderRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_queryReceivingOrderDetail_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\receiving\QueryReceivingDetailRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_querySendFailure_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\common\QuerySendFailureRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_querySubmitBarcodeFlow_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\QuerySubmitBarcodeFlowRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_querySubmitFlow_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\QuerySubmitFlowRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_submitFlow_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\SubmitFlowRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_updateRemark_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \Voop\com\vip\xstore\pda\order\common\UpdateRemarkRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ReceivingService_approvalFlow_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\ApprovalFlowResponse();
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




class ReceivingService_autoMatchQuantity_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\AutoMatchQuantityResponse();
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




class ReceivingService_confirmFlow_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\ConfirmFlowResponse();
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




class ReceivingService_downloadReceivingOrder_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ReceivingService_fixReceivingBoxStatus_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ReceivingService_fixReceivingBoxStatusByReceivingNo_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ReceivingService_healthCheck_result {
	
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




class ReceivingService_initReceivingBoxByDate_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ReceivingService_initReceivingBoxByNo_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ReceivingService_queryReceivingItem_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\receiving\QueryReceivingItemResponse();
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




class ReceivingService_queryReceivingOrder4PDA_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingOrderResponse();
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




class ReceivingService_queryReceivingOrder4XUP_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingOrderResponse();
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




class ReceivingService_queryReceivingOrderDetail_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\receiving\ReceivingOrder();
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




class ReceivingService_querySendFailure_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\common\QuerySendFailureResponse();
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




class ReceivingService_querySubmitBarcodeFlow_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\QuerySubmitBarcodeFlowResponse();
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




class ReceivingService_querySubmitFlow_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\QuerySubmitFlowResponse();
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




class ReceivingService_submitFlow_result {
	
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
			
			
			$this->success = new \Voop\com\vip\xstore\pda\order\common\SubmitFlowResponse();
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




class ReceivingService_updateRemark_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




?>