<?php

/**
 * LICENSE
 *
 * This source file is subject to the GNU General Public License, Version 3
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @package    BitsyBay Engine
 * @copyright  Copyright (c) 2015 The BitsyBay Project (http://bitsybay.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License, Version 3
 */

class ControllerCommonHome extends Controller {

    public function __construct($registry) {

        parent::__construct($registry);

        // Load dependencies
        $this->load->model('catalog/product');
        $this->load->model('catalog/category');
        $this->load->model('account/user');

        $this->load->helper('plural');
    }

    public function index() {

        $this->document->setTitle(tt('BitsyBay - Sell and Buy Digital Content with BitCoin'), false);

        if (isset($this->request->get['route'])) {
            $this->document->addLink(HTTP_SERVER, 'canonical');
        }

        if ($this->auth->isLogged()) {
            $data['title'] = sprintf(tt('Welcome, %s!'), $this->auth->getUsername());
            $data['user_is_logged'] = true;

        } else {
            $data['title'] = tt('Welcome to the BitsyBay store!');
            $data['user_is_logged'] = false;
        }

        $total_products  = $this->model_catalog_product->getTotalProducts(array());
        $data['total_products'] = sprintf(tt('%s %s'), $total_products, plural($total_products, array(tt('offer'), tt('offers'), tt('offers'))));

        $total_categories  = $this->model_catalog_category->getTotalCategories();
        $data['total_categories'] = sprintf(tt('%s %s'), $total_categories, plural($total_categories, array(tt('category'), tt('categories'), tt('categories'))));

        $total_sellers  = $this->model_account_user->getTotalSellers();
        $data['total_sellers'] = sprintf(tt('%s %s'), $total_sellers, plural($total_sellers, array(tt('seller'), tt('sellers'), tt('sellers'))));

        $total_buyers  = $this->model_account_user->getTotalUsers();
        $data['total_buyers'] = sprintf(tt('%s %s'), $total_buyers, plural($total_buyers, array(tt('buyer'), tt('buyers'), tt('buyers'))));

        $redirect = base64_encode($this->url->getCurrentLink($this->request->getHttps()));

        $data['login_action'] = $this->url->link('account/account/login', 'redirect=' . $redirect, 'SSL');
        $data['href_account_create'] = $this->url->link('account/account/create', 'redirect=' . $redirect, 'SSL');

        $data['module_search']  = $this->load->controller('module/search', array('class' => 'col-lg-8 col-lg-offset-2'));
        $data['module_latest']  = $this->load->controller('module/latest', array('limit' => 8));

        $data['footer']         = $this->load->controller('common/footer');
        $data['header']         = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/home.tpl', $data));
    }
}
