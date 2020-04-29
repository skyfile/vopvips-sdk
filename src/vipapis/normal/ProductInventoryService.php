<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace Voop\vipapis\normal;
interface ProductInventoryServiceIf{
	
	
	public function getInitialQuantityResult( $vendor_id, $apply_id, $page, $limit);
	
	public function getInventoryDeductOrders(\Voop\vipapis\normal\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest);
	
	public function getInventoryOccupiedOrders(\Voop\vipapis\normal\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest);
	
	public function getInventoryUpdateResult(\Voop\vipapis\normal\InventoryUpdateResultRequest $inventoryUpdateResultRequest);
	
	public function getScheduleProductList(\Voop\vipapis\normal\ScheduleProductRequest $scheduleProductRequest);
	
	public function healthCheck();
	
	public function importInitialInventory(\Voop\vipapis\normal\Cooperation $cooperation, $inventorys);
	
	public function pullUpdateInventoryResult( $updateInventoryResultList);
	
	public function updateAvailableInventory(\Voop\vipapis\normal\AvailableInventoryRequest $availableInventoryRequest);
	
	public function updateSellableInventory(\Voop\vipapis\normal\SellableUpdateInventoryRequest $sellableUpdateInventoryRequest);
	
}

class _ProductInventoryServiceClient extends \Voop\Osp\Base\OspStub implements \Voop\vipapis\normal\ProductInventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.normal.ProductInventoryService", "1.0.0");
	}
	
	
	public function getInitialQuantityResult( $vendor_id, $apply_id, $page, $limit){
		
		$this->send_getInitialQuantityResult( $vendor_id, $apply_id, $page, $limit);
		return $this->recv_getInitialQuantityResult();
	}
	
	public function send_getInitialQuantityResult( $vendor_id, $apply_id, $page, $limit){
		
		$this->initInvocation("getInitialQuantityResult");
		$args = new \Voop\vipapis\normal\ProductInventoryService_getInitialQuantityResult_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->apply_id = $apply_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getInitialQuantityResult(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_getInitialQuantityResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryDeductOrders(\Voop\vipapis\normal\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->send_getInventoryDeductOrders( $inventoryDeductOrdersRequest);
		return $this->recv_getInventoryDeductOrders();
	}
	
	public function send_getInventoryDeductOrders(\Voop\vipapis\normal\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->initInvocation("getInventoryDeductOrders");
		$args = new \Voop\vipapis\normal\ProductInventoryService_getInventoryDeductOrders_args();
		
		$args->inventoryDeductOrdersRequest = $inventoryDeductOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryDeductOrders(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_getInventoryDeductOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryOccupiedOrders(\Voop\vipapis\normal\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->send_getInventoryOccupiedOrders( $inventoryOccupiedOrdersRequest);
		return $this->recv_getInventoryOccupiedOrders();
	}
	
	public function send_getInventoryOccupiedOrders(\Voop\vipapis\normal\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->initInvocation("getInventoryOccupiedOrders");
		$args = new \Voop\vipapis\normal\ProductInventoryService_getInventoryOccupiedOrders_args();
		
		$args->inventoryOccupiedOrdersRequest = $inventoryOccupiedOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryOccupiedOrders(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_getInventoryOccupiedOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryUpdateResult(\Voop\vipapis\normal\InventoryUpdateResultRequest $inventoryUpdateResultRequest){
		
		$this->send_getInventoryUpdateResult( $inventoryUpdateResultRequest);
		return $this->recv_getInventoryUpdateResult();
	}
	
	public function send_getInventoryUpdateResult(\Voop\vipapis\normal\InventoryUpdateResultRequest $inventoryUpdateResultRequest){
		
		$this->initInvocation("getInventoryUpdateResult");
		$args = new \Voop\vipapis\normal\ProductInventoryService_getInventoryUpdateResult_args();
		
		$args->inventoryUpdateResultRequest = $inventoryUpdateResultRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryUpdateResult(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_getInventoryUpdateResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getScheduleProductList(\Voop\vipapis\normal\ScheduleProductRequest $scheduleProductRequest){
		
		$this->send_getScheduleProductList( $scheduleProductRequest);
		return $this->recv_getScheduleProductList();
	}
	
	public function send_getScheduleProductList(\Voop\vipapis\normal\ScheduleProductRequest $scheduleProductRequest){
		
		$this->initInvocation("getScheduleProductList");
		$args = new \Voop\vipapis\normal\ProductInventoryService_getScheduleProductList_args();
		
		$args->scheduleProductRequest = $scheduleProductRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getScheduleProductList(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_getScheduleProductList_result();
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
		$args = new \Voop\vipapis\normal\ProductInventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importInitialInventory(\Voop\vipapis\normal\Cooperation $cooperation, $inventorys){
		
		$this->send_importInitialInventory( $cooperation, $inventorys);
		return $this->recv_importInitialInventory();
	}
	
	public function send_importInitialInventory(\Voop\vipapis\normal\Cooperation $cooperation, $inventorys){
		
		$this->initInvocation("importInitialInventory");
		$args = new \Voop\vipapis\normal\ProductInventoryService_importInitialInventory_args();
		
		$args->cooperation = $cooperation;
		
		$args->inventorys = $inventorys;
		
		$this->send_base($args);
	}
	
	public function recv_importInitialInventory(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_importInitialInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullUpdateInventoryResult( $updateInventoryResultList){
		
		$this->send_pullUpdateInventoryResult( $updateInventoryResultList);
		return $this->recv_pullUpdateInventoryResult();
	}
	
	public function send_pullUpdateInventoryResult( $updateInventoryResultList){
		
		$this->initInvocation("pullUpdateInventoryResult");
		$args = new \Voop\vipapis\normal\ProductInventoryService_pullUpdateInventoryResult_args();
		
		$args->updateInventoryResultList = $updateInventoryResultList;
		
		$this->send_base($args);
	}
	
	public function recv_pullUpdateInventoryResult(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_pullUpdateInventoryResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateAvailableInventory(\Voop\vipapis\normal\AvailableInventoryRequest $availableInventoryRequest){
		
		$this->send_updateAvailableInventory( $availableInventoryRequest);
		return $this->recv_updateAvailableInventory();
	}
	
	public function send_updateAvailableInventory(\Voop\vipapis\normal\AvailableInventoryRequest $availableInventoryRequest){
		
		$this->initInvocation("updateAvailableInventory");
		$args = new \Voop\vipapis\normal\ProductInventoryService_updateAvailableInventory_args();
		
		$args->availableInventoryRequest = $availableInventoryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateAvailableInventory(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_updateAvailableInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateSellableInventory(\Voop\vipapis\normal\SellableUpdateInventoryRequest $sellableUpdateInventoryRequest){
		
		$this->send_updateSellableInventory( $sellableUpdateInventoryRequest);
		return $this->recv_updateSellableInventory();
	}
	
	public function send_updateSellableInventory(\Voop\vipapis\normal\SellableUpdateInventoryRequest $sellableUpdateInventoryRequest){
		
		$this->initInvocation("updateSellableInventory");
		$args = new \Voop\vipapis\normal\ProductInventoryService_updateSellableInventory_args();
		
		$args->sellableUpdateInventoryRequest = $sellableUpdateInventoryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateSellableInventory(){
		
		$result = new \Voop\vipapis\normal\ProductInventoryService_updateSellableInventory_result();
		$this->receive_base($result);
		
	}
	
	
}




class ProductInventoryService_getInitialQuantityResult_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $apply_id = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'apply_id'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->apply_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('apply_id');
		$xfer += $output->writeI64($this->apply_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_getInventoryDeductOrders_args {
	
	static $_TSPEC;
	public $inventoryDeductOrdersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryDeductOrdersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryDeductOrdersRequest'])){
				
				$this->inventoryDeductOrdersRequest = $vals['inventoryDeductOrdersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryDeductOrdersRequest = new \Voop\vipapis\normal\InventoryDeductOrdersRequest();
			$this->inventoryDeductOrdersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->inventoryDeductOrdersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryDeductOrdersRequest');
			
			if (!is_object($this->inventoryDeductOrdersRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->inventoryDeductOrdersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_getInventoryOccupiedOrders_args {
	
	static $_TSPEC;
	public $inventoryOccupiedOrdersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryOccupiedOrdersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryOccupiedOrdersRequest'])){
				
				$this->inventoryOccupiedOrdersRequest = $vals['inventoryOccupiedOrdersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryOccupiedOrdersRequest = new \Voop\vipapis\normal\InventoryOccupiedOrdersRequest();
			$this->inventoryOccupiedOrdersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->inventoryOccupiedOrdersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryOccupiedOrdersRequest');
			
			if (!is_object($this->inventoryOccupiedOrdersRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->inventoryOccupiedOrdersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_getInventoryUpdateResult_args {
	
	static $_TSPEC;
	public $inventoryUpdateResultRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryUpdateResultRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryUpdateResultRequest'])){
				
				$this->inventoryUpdateResultRequest = $vals['inventoryUpdateResultRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryUpdateResultRequest = new \Voop\vipapis\normal\InventoryUpdateResultRequest();
			$this->inventoryUpdateResultRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('inventoryUpdateResultRequest');
		
		if (!is_object($this->inventoryUpdateResultRequest)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->inventoryUpdateResultRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_getScheduleProductList_args {
	
	static $_TSPEC;
	public $scheduleProductRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scheduleProductRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scheduleProductRequest'])){
				
				$this->scheduleProductRequest = $vals['scheduleProductRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->scheduleProductRequest = new \Voop\vipapis\normal\ScheduleProductRequest();
			$this->scheduleProductRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('scheduleProductRequest');
		
		if (!is_object($this->scheduleProductRequest)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->scheduleProductRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_healthCheck_args {
	
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




class ProductInventoryService_importInitialInventory_args {
	
	static $_TSPEC;
	public $cooperation = null;
	public $inventorys = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cooperation'
			),
			2 => array(
			'var' => 'inventorys'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cooperation'])){
				
				$this->cooperation = $vals['cooperation'];
			}
			
			
			if (isset($vals['inventorys'])){
				
				$this->inventorys = $vals['inventorys'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->cooperation = new \Voop\vipapis\normal\Cooperation();
			$this->cooperation->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->inventorys = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \Voop\vipapis\normal\Initialnventory();
					$elem0->read($input);
					
					$this->inventorys[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('cooperation');
		
		if (!is_object($this->cooperation)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->cooperation->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventorys');
		
		if (!is_array($this->inventorys)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->inventorys as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_pullUpdateInventoryResult_args {
	
	static $_TSPEC;
	public $updateInventoryResultList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateInventoryResultList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateInventoryResultList'])){
				
				$this->updateInventoryResultList = $vals['updateInventoryResultList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateInventoryResultList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \Voop\vipapis\normal\UpdateInventoryResult();
					$elem1->read($input);
					
					$this->updateInventoryResultList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('updateInventoryResultList');
		
		if (!is_array($this->updateInventoryResultList)){
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->updateInventoryResultList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_updateAvailableInventory_args {
	
	static $_TSPEC;
	public $availableInventoryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'availableInventoryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['availableInventoryRequest'])){
				
				$this->availableInventoryRequest = $vals['availableInventoryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->availableInventoryRequest = new \Voop\vipapis\normal\AvailableInventoryRequest();
			$this->availableInventoryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->availableInventoryRequest !== null) {
			
			$xfer += $output->writeFieldBegin('availableInventoryRequest');
			
			if (!is_object($this->availableInventoryRequest)) {
				
				throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->availableInventoryRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_updateSellableInventory_args {
	
	static $_TSPEC;
	public $sellableUpdateInventoryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sellableUpdateInventoryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sellableUpdateInventoryRequest'])){
				
				$this->sellableUpdateInventoryRequest = $vals['sellableUpdateInventoryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->sellableUpdateInventoryRequest = new \Voop\vipapis\normal\SellableUpdateInventoryRequest();
			$this->sellableUpdateInventoryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sellableUpdateInventoryRequest');
		
		if (!is_object($this->sellableUpdateInventoryRequest)) {
			
			throw new \Voop\Osp\Exception\OspException('Bad type in structure.', \Voop\Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->sellableUpdateInventoryRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_getInitialQuantityResult_result {
	
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
			
			
			$this->success = new \Voop\vipapis\normal\ImportInitialQuantityResult();
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




class ProductInventoryService_getInventoryDeductOrders_result {
	
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
			
			
			$this->success = new \Voop\vipapis\normal\InventoryDeductOrdersResponse();
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




class ProductInventoryService_getInventoryOccupiedOrders_result {
	
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
			
			
			$this->success = new \Voop\vipapis\normal\OccupiedOrderResponse();
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




class ProductInventoryService_getInventoryUpdateResult_result {
	
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
			
			
			$this->success = new \Voop\vipapis\normal\InventoryUpdateResultResponse();
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




class ProductInventoryService_getScheduleProductList_result {
	
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
			
			
			$this->success = new \Voop\vipapis\normal\ScheduleProductResponse();
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




class ProductInventoryService_healthCheck_result {
	
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




class ProductInventoryService_importInitialInventory_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductInventoryService_pullUpdateInventoryResult_result {
	
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




class ProductInventoryService_updateAvailableInventory_result {
	
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




class ProductInventoryService_updateSellableInventory_result {
	
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