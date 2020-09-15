<?php
class ControllerExtensionPaymentFreeCheckout extends Controller {
	public function index() {
		$data['continue'] = $this->url->link('Checkout/success');

		return $this->load->view('extension/payment/free_Checkout', $data);
	}

	public function confirm() {
		if ($this->session->data['payment_method']['code'] == 'free_Checkout') {
			$this->load->model('Checkout/order');

			$this->model_Checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_free_Checkout_order_status_id'));
		}
	}
}
