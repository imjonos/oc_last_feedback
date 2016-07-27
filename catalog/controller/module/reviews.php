<?php
class ControllerModuleREVIEWS extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			
                                                     $limit = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['limit'], ENT_QUOTES, 'UTF-8');
                                                      
                                                      
                                                     $this->load->model('module/reviews');
                                                     
                                                     $reviews = $this->model_module_reviews->getLastReviews(0, $limit) ;
                                                     
                                                     foreach ($reviews as $key=>$review) { 
                                                     
                                                        $reviews[$key]['href']  = $this->url->link('product/product', 'path=' .  $this->model_module_reviews->getFullProductPath($review['product_id']). '&product_id=' . $review['product_id']);
			
                                                     }
                                                     
                                                     $data['reviews'] = $reviews;
                                                     
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/reviews.tpl')) {
				return $this->load->view($this->config->get('config_template') . '/template/module/reviews.tpl', $data);
			} else {
				return $this->load->view('default/template/module/reviews.tpl', $data);
			}
		}
	}
}