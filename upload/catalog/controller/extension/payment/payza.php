<?php
class ControllerExtensionPaymentPayza extends Controller {
	public function index() {
		$data['button_confirm'] = $this->language->get('button_confirm');

		$this->load->model('Checkout/order');

		$order_info = $this->model_Checkout_order->getOrder($this->session->data['order_id']);

		$data['action'] = 'https://secure.payza.com/Checkout';

		$data['ap_merchant'] = $this->config->get('payment_payza_merchant');
		$data['ap_amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
		$data['ap_currency'] = $order_info['currency_code'];
		$data['ap_purchasetype'] = 'Item';
		$data['ap_itemname'] = $this->config->get('config_name') . ' - #' . $this->session->data['order_id'];
		$data['ap_itemcode'] = $this->session->data['order_id'];
		$data['ap_returnurl'] = $this->url->link('Checkout/success');
		$data['ap_cancelurl'] = $this->url->link('Checkout/Checkout', '', true);

		return $this->load->view('extension/payment/payza', $data);
	}

	public function callback() {
		if (isset($this->request->post['ap_securitycode']) && ($this->request->post['ap_securitycode'] == $this->config->get('payment_payza_security'))) {
			$this->load->model('Checkout/order');

			$this->model_Checkout_order->addOrderHistory($this->request->post['ap_itemcode'], $this->config->get('payment_payza_order_status_id'));
		}
	}
}