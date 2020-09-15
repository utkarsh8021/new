<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'cod') {
			$this->load->model('Checkout/order');

			$this->model_Checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_cod_order_status_id'));
		
			$json['redirect'] = $this->url->link('Checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
