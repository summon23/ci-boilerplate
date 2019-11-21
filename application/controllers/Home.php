<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Session
        $CI =& get_instance();
        if (!$CI->session->userdata('authLogin')) {
            redirect('auth', 'refresh');
        }
	}

	/**
	 * function to search all content in website by key name
	 * @param request array
	 */
	public function webSearch($request)
	{

	}


	/**
	 * @param type String contains widget type
	 * @return json encode
	 */
	public function widget($type = '')
	{
		$request = $this->input->get();
		extract($request);
		switch ($type) {
			case 'getTotalCompany':
				# code...
				break;
			
			default:
				# code...
				break;
		}
	}


	public function index()
	{
		$params = array();

		$startdate = date('Y-m-01');
		$enddate = date('Y-m-31');

		switch (getGroupName()) {
			case 'retail operation':
				$page = 'default/dashboardretailop';

				// Target Sales Achievement per Store
				$salesTargetPerStore = 'SELECT ass.id, 
				ass.start_period,
				ass.end_period,
				ass.value,
				ast.name
				FROM app_salestarget_store ass 
				JOIN app_store ast
				ON ass.store_id = ast.id
				ORDER BY start_period DESC';
				$params['salestargetperstore'] = $this->db->query($salesTargetPerStore)->result();

				// Target Sales Achievement per SPG
				$salesTargetPerSPG = 'SELECT ass.id, 
				ass.value,
				ast.name
				FROM app_salestarget_spg ass 
				JOIN app_spg ast
				ON ass.spg_id = ast.id
				ORDER BY ast.name DESC';
				$params['salestargetperspg'] = $this->db->query($salesTargetPerSPG)->result();

				$salesHistory = 'SELECT
				o.*,
				spg.name as spg_name,
				cus.name as customer_name
				from app_order o
				JOIN app_spg spg
				ON spg.id = o.spg_id
				JOIN app_customer cus
				ON cus.id = o.customer_id
				order by id DESC limit 20';
				$params['saleshistory'] = $this->db->query($salesHistory)->result();


				// Sales History per Store
				$salesHistory = 'SELECT
				o.*,
				spg.name as spg_name,
				cus.name as customer_name
				from app_order o
				JOIN app_spg spg
				ON spg.id = o.spg_id
				JOIN app_customer cus
				ON cus.id = o.customer_id				
				order by id DESC limit 20';
				$params['saleshistory'] = $this->db->query($salesHistory)->result();
				// debug($params);
				break;
			case 'finance':
				$page = 'default/dashboardfinance';

				// Sales RTW in amount per toko
				$amountRTW = 'SELECT 
				sum(total_amount) as total,
				ast.name
				from app_order ao
				JOIN app_store ast ON ao.store_id = ast.id
				WHERE ao.is_delete = 0 AND
				ao.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP by ao.store_id';
				$params['salesamountrtw'] = $this->db->query($amountRTW)->result();

				// Sales RTW in qty / toko
				$qtyRTW = 'SELECT 
				sum(total_qty) as total,
				ast.name
				from app_order ao
				JOIN app_store ast ON ao.store_id = ast.id
				WHERE ao.is_delete = 0 AND
				ao.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP by ao.store_id';
				$params['salesqtyrtw'] = $this->db->query($qtyRTW)->result();

				// Sales custom in amount / toko
				$amountCustom = 'SELECT 
				sum(total_amount) as total,
				ast.name
				from app_order_custom ao
				JOIN app_store ast ON ao.store_id = ast.id
				WHERE ao.is_delete = 0 AND
				ao.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP by ao.store_id';
				$params['salesamountcustom'] = $this->db->query($amountCustom)->result();
				

				// Sales custom in qty / toko
				$qtyCustom = 'SELECT 
				sum(total_qty) as total,
				ast.name
				from app_order_custom ao
				JOIN app_store ast ON ao.store_id = ast.id
				WHERE ao.is_delete = 0 AND
				ao.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP by ao.store_id';
				$params['salesqtycustom'] = $this->db->query($qtyCustom)->result();

				// Global sales achivement per toko
				 // --> Get total Custom
				 $totalCustom = $this->db->query('SELECT COALESCE(SUM(total_amount)) as total FROM app_order_custom WHERE is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"')->row();
				 $totalCustom = $totalCustom->total;

				 // --> Get total RTW
				 $totalOrder = $this->db->query('SELECT COALESCE(SUM(total_amount)) as total FROM app_order WHERE is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"')->row();
				 $totalOrder = $totalOrder->total;
				$params['globalach'] = number_format($totalCustom + $totalOrder);
				
				// total outstanding custom / toko
				$queryOutstanding = 'SELECT store.name,
                (SELECT COALESCE(SUM(`total_amount`) - SUM(`total_paid`), 0) FROM app_order_custom WHERE store_id = store.id
                AND is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'" )
                AS total FROM
				app_store store 
				WHERE is_delete = 0';
				$params['outstandingcustom'] = $this->db->query($queryOutstanding)->result();

				// total amount payment cash / toko
				$totalAmountCash = 'SELECT store.name,
                (SELECT COALESCE(SUM(`total_amount`), 0) FROM app_order WHERE payment_type=1 AND store_id = store.id
                AND is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'" ) 
                AS totalorder,
                (SELECT COALESCE(SUM(`total_amount`), 0) FROM app_order_custom WHERE payment_type=1 AND store_id = store.id
				AND is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'" ) 
                AS totalordercustom
                 FROM
				app_store store 
				WHERE is_delete = 0';
				$params['totalamountcash'] = $this->db->query($totalAmountCash)->result();

				// total amount payment cashless / toko
				$totalAmountCashless = 'SELECT store.name,
                (SELECT COALESCE(SUM(`total_amount`), 0) FROM app_order WHERE payment_type<>1 AND store_id = store.id
                AND is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'" ) 
                AS totalorder,
                (SELECT COALESCE(SUM(`total_amount`), 0) FROM app_order_custom WHERE payment_type<>1 AND store_id = store.id
                AND is_delete=0 AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'" ) 
                AS totalordercustom
                 FROM
				app_store store 
				WHERE is_delete = 0';
				$params['totalamountcashless'] = $this->db->query($totalAmountCashless)->result();

				// Chart bar of amount sales vs proforma invoice

				// Chart bar of proforma invoice  vs invoice
				break;
			case 'logistic':
				$page = 'default/dashboardlogistic';

				// List Custom Finishing
				$customfinish = 'SELECT * from 
				app_order_custom aoc
				JOIN app_store ast ON ast.id = aoc.store_id 
				where aoc.status=4 order by aoc.id desc';
				$params['customfinishing'] = $this->db->query($customfinish)->result();

				// List product return 
				$returnProduct = 'SELECT 
				ad.created_date,
				ast.name as storename,
				adod.qty,
				vp.product_name,
				ad.return_number
				FROM app_do ad
				JOIN app_do_detail adod
				ON adod.`do_number` = ad.do_number
				JOIN view_product vp 
				ON vp.id = adod.product_id
				JOIN app_store ast
				ON ast.id = ad.`return_store_id`
				WHERE return_store_id IS NOT NULL
				AND ad.type = 7
				order by ad.created_date DESC';
				$params['returnproduct'] = $this->db->query($returnProduct)->result();

				// Product Log
				$productBound = 'SELECT s.*, p.product_name, p.barcode
				FROM app_warehouse_stock s
				JOIN view_product p
				ON s.product_id = p.id			
				order by s.id desc 
				limit 20';
				$params['productlog'] = $this->db->query($productBound)->result();


				break;
			case 'warehouse':
				$page = 'default/dashboardwarehouse';

				// Top Product
				$topProduct = 'SELECT
				v.product_name, d.product_id, v.barcode, sum(d.qty) as totalqty
				FROM app_order_detail AS d
				JOIN app_order o ON d.order_id = o.id
				JOIN view_product v ON v.id = d.product_id
				WHERE o.store_id = 6				
				GROUP BY d.product_id
				ORDER BY totalqty DESC;';
				$params['topproduct'] = $this->db->query($topProduct)->result();

				// List product return 
				$returnProduct = 'SELECT 
				ad.created_date,
				ast.name as storename,
				adod.qty,
				vp.product_name,
				ad.return_number
				FROM app_do ad
				JOIN app_do_detail adod
				ON adod.`do_number` = ad.do_number
				JOIN view_product vp 
				ON vp.id = adod.product_id
				JOIN app_store ast
				ON ast.id = ad.`return_store_id`
				WHERE return_store_id IS NOT NULL
				AND ad.type = 7
				order by ad.created_date DESC';
				$params['returnproduct'] = $this->db->query($returnProduct)->result();

				// Product Log
				$productBound = 'SELECT s.*, p.product_name, p.barcode
				FROM app_warehouse_stock s
				JOIN view_product p
				ON s.product_id = p.id			
				order by s.id desc 
				limit 20';
				$params['productlog'] = $this->db->query($productBound)->result();

				// Product Receive per store per month
				// $qtyReceived = '';
				// $params['productreceive'] = $this->db->query($qtyReceived)->result();

				// List PO Outstanding
				$poSend = 'SELECT * FROM app_po ap
				JOIN app_supplier asp
				ON asp.id = ap.supplier_id
				WHERE ap.STATUS != 3 ORDER by ap.id DESC';
				$params['posend'] = $this->db->query($poSend)->result();


				// List PO Received
				$poReceived = 'SELECT * FROM app_po ap
				JOIN app_supplier asp
				ON asp.id = ap.supplier_id
				WHERE ap.STATUS = 3 ORDER by ap.id DESC';
				$params['poreceived'] = $this->db->query($poReceived)->result();
				
				break;
			case 'content':
				$startdate = date('Y-m-01');
				$enddate = date('Y-m-31');
				
				$page = 'default/dashboardcontent';
				$topProduct = 'SELECT
				v.product_name, d.product_id, v.barcode, sum(d.qty) as totalqty
				FROM app_order_detail AS d
				JOIN app_order o ON d.order_id = o.id
				JOIN view_product v ON v.id = d.product_id
				WHERE o.store_id = 6				
				GROUP BY d.product_id				
				ORDER BY totalqty DESC limit 20;';
				$params['topproduct'] = $this->db->query($topProduct)->result();

				$salesHistory = 'SELECT
				o.*,
				spg.name as spg_name,
				cus.name as customer_name
				from app_order o
				JOIN app_spg spg
				ON spg.id = o.spg_id
				JOIN app_customer cus
				ON cus.id = o.customer_id				
				order by id DESC limit 20';
				$params['saleshistory'] = $this->db->query($salesHistory)->result();

				$productBound = 'SELECT s.*, p.product_name, p.barcode
				FROM app_store_stock s
				JOIN view_product p
				ON s.product_id = p.id			
				order by s.id desc 
				limit 20';
				$params['productlog'] = $this->db->query($productBound)->result();


				$stockProduct = 'SELECT 
				* from ref_warehouse_productstock rff
				JOIN view_product vp
				ON vp.id = rff.product_id
				ORDER BY vp.name ASC';
				$params['stockproduct'] = $this->db->query($stockProduct)->result();

				break;
			case 'sales admin':
				$page = 'default/dashboardsalesadmin';
				$topProduct = 'SELECT
				v.product_name, d.product_id, v.barcode, sum(d.qty) as totalqty
				FROM app_order_detail AS d
				JOIN app_order o ON d.order_id = o.id
				JOIN view_product v ON v.id = d.product_id
				WHERE o.store_id = 6				
				GROUP BY d.product_id
				ORDER BY totalqty DESC;';
				$params['topproduct'] = $this->db->query($topProduct)->result();


				$startdate = date('Y-m-01');
				$enddate = date('Y-m-31');

				$totalOrderRTW = $this->db->query('SELECT astore.name,
				sum(aorder.total_amount) AS totalamount
				FROM app_order aorder
				JOIN app_store astore ON aorder.store_id = astore.id
				WHERE aorder.is_delete = 0 AND
				aorder.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY aorder.store_id')->result();
				$params['totalorderrtw'] = $totalOrderRTW;

				$totalQtyOrderRTW = $this->db->query('SELECT astore.name,
				sum(aorder.total_qty) AS totalqty
				FROM app_order aorder
				JOIN app_store astore ON aorder.store_id = astore.id
				WHERE aorder.is_delete = 0 AND 
				aorder.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY aorder.store_id')->result();
				$params['totalqtyorderrtw'] = $totalQtyOrderRTW;

				$totalOrderCustom = $this->db->query('SELECT astore.name,
				sum(aorder.total_amount) AS totalamount
				FROM app_order_custom aorder
				JOIN app_store astore ON aorder.store_id = astore.id
				WHERE aorder.is_delete = 0 AND 
				aorder.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY aorder.store_id')->result();
				$params['totalordercustom'] = $totalOrderCustom;

				$totalQtyOrderCustom = $this->db->query('SELECT astore.name,
				sum(aorder.total_qty) AS totalqty
				FROM app_order_custom aorder
				JOIN app_store astore ON aorder.store_id = astore.id
				WHERE aorder.is_delete=0 AND
				aorder.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY aorder.store_id')->result();
				$params['totalqtyordercustom'] = $totalQtyOrderCustom;

				$totalOrderSPG = $this->db->query('SELECT 
				spg.name,
				store.name AS storename,
				COALESCE((SELECT sum(total_amount) FROM app_order WHERE is_delete = 0 
				AND spg_id = spg.id
				AND created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"), 0) AS total
				FROM app_spg spg
				JOIN app_store store
				ON spg.store_id = store.id')->result();
				$params['totalorderspg'] = $totalOrderSPG;

				$totalOutstanding = $this->db->query('SELECT astore.name,
				sum(aorder.total_amount - aorder.total_paid) AS totaloutstanding
				FROM app_order_custom aorder
				JOIN app_store astore ON aorder.store_id = astore.id
				WHERE aorder.is_delete = 0 AND 
				aorder.created_date BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY aorder.store_id')->result();
				$params['totaloutstanding'] = $totalOutstanding;

				$totalOrderVoid = $this->db->query('SELECT 
				store.name,
				sum(orders.total_amount) as total
				FROM app_order orders
				JOIN app_store store 
				ON SUBSTRING_INDEX(orders.order_number, "|", -1) = store.id
				WHERE store_id = 0
				AND orders.is_delete=0  
				AND orders.`created_date` BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY store.id')->result();
				$params['totalvoidorder'] = $totalOrderVoid;

				$totalOrderQtyVoid = $this->db->query('SELECT 
				store.name,
				sum(orders.total_qty) as total
				FROM app_order orders
				JOIN app_store store 
				ON SUBSTRING_INDEX(orders.order_number, "|", -1) = store.id
				WHERE store_id = 0
				AND orders.is_delete=0  
				AND orders.`created_date` BETWEEN "'.$startdate.'" AND "'.$enddate.'"
				GROUP BY store.id')->result();
				$params['totalvoidorderqty'] = $totalOrderQtyVoid;			
				break;
			case 'sales':
				$page = 'default/dashboardsales';
				$storeId = getStoreId();

				$newCustomer = $this->db->query('SELECT * from app_customer where code != "CUST-000" and is_delete=0 order by id DESC limit 10')->result();
				$params['newcustomer'] = $newCustomer;

				$startdate = date('Y-m-01');
				$enddate = date('Y-m-31');

				$topProduct = 'SELECT
				v.product_name, d.product_id, v.barcode, sum(d.qty) as totalqty
				FROM app_order_detail AS d
				JOIN app_order o ON d.order_id = o.id
				JOIN view_product v ON v.id = d.product_id
				WHERE v.is_delete=0 AND o.store_id = '.getStoreId().'				
				GROUP BY d.product_id
				ORDER BY totalqty DESC limit 20;';
				$params['topproduct'] = $this->db->query($topProduct)->result();

				$spgAmount = '
				SELECT 
				name,
				(SELECT COALESCE(sum(total_amount),0) from app_order 
						where spg_id=app_spg.id and app_order.is_delete=0 AND 
						app_order.created_date between "'.$startdate.'" AND "'.$enddate.'") as total_order,
				(SELECT COALESCE(sum(total_amount),0) from app_order_custom
						where spg_id=app_spg.id and app_order_custom.is_delete=0 AND 
						app_order_custom.created_date between "'.$startdate.'" AND "'.$enddate.'") as total_order_custom
				 from
				app_spg WHERE 
				store_id='.$storeId.' ORDER by app_spg.name ASC';
				$params['spgamount'] = $this->db->query($spgAmount)->result();

				$salesHistory = 'SELECT
				o.*,
				spg.name as spg_name,
				cus.name as customer_name
				from app_order o
				JOIN app_spg spg
				ON spg.id = o.spg_id
				JOIN app_customer cus
				ON cus.id = o.customer_id
				where o.store_id='.getStoreId().'
				order by id DESC limit 20';
				$params['saleshistory'] = $this->db->query($salesHistory)->result();

				$productLogHistory = 'SELECT s.*, p.product_name, p.barcode
				FROM app_store_stock s
				JOIN view_product p
				ON s.product_id = p.id
				WHERE p.is_delete=0 AND s.store_id='.getStoreId().'
				order by s.id desc 
				limit 20';
				$params['productlog'] = $this->db->query($productLogHistory)->result();


				$storeId = getStoreId();
				$totalInStock = $this->db->query('SELECT sum(qty) as total from app_store_stock where type="in" 
				and created_at between "'.$startdate.'" and "'.$enddate.'" 
				and store_id='.$storeId)->row();
				$params['totalinstock'] = $totalInStock->total;

				$totalOutStock = $this->db->query('SELECT sum(qty) as total from app_store_stock where type="out" 
				and created_at between "'.$startdate.'" and "'.$enddate.'" 
				and store_id='.$storeId)->row();
				$params['totaloutstock'] = $totalOutStock->total;

				$discountChart = $this->db->query('SELECT * from app_discount WHERE status=1')->result();
				$params['discountchart'] = $discountChart;

				$listProduct = array();
				// $storeId = 100;
				foreach ($discountChart as $key => $value) {
					$t = $this->db->query('SELECT count(ap.id) as total from app_product ap
					JOIN ref_store_productstock r ON r.product_id = ap.id AND r.store_id='.$storeId.'
					where ap.discount_id='.$value->id)->row();
					$listProduct[] = array(
						'label' => $value->name,
						'value' => $t->total
					);
				}			

				// debug($listProduct);
				$params['productdiscount'] = json_encode($listProduct);
				$params['aproductdiscount'] = $listProduct;
				$chart1 = array();
				$chart2 = array();
				for ($i=1; $i <= 12; $i++) { 
					$m = sprintf("%02d", $i);
					$startdate = date("Y-$m-01");
					$enddate = date("Y-$m-31");
					$totalInStock = $this->db->query('SELECT sum(qty) as total from app_store_stock where type="in" 
					and created_at between "'.$startdate.'" and "'.$enddate.'" 
					and store_id='.$storeId)->row();
					$chart1[] = $totalInStock->total ? $totalInStock->total : 0 ;

					$totalOutStock = $this->db->query('SELECT sum(qty) as total from app_store_stock where type="out" 
					and created_at between "'.$startdate.'" and "'.$enddate.'" 
					and store_id='.$storeId)->row();
					$chart2[] = $totalOutStock->total ? $totalOutStock->total : 0;
				}

				$stringC1 = '['.implode(',', $chart1).']';
				$stringC2 = '['.implode(',', $chart2).']';
				// debug($chart2);
				$params['chartsample1'] = $stringC1;
				$params['chartsample2'] = $stringC2;
				break;
			default:
				$page = 'default/dashboardempty';
				break;
		}
		return $this->view->genView($page, $params);
	}

	public function dashboard()
	{
		return $this->view->genView('default/dashboard');
	}

	public function emptypage()
	{
		return $this->view->genView('empty');
	}

	public function apisales($invoke) {
		switch ($invoke) {
			case 'getamountorder':
				$storeId = $this->input->get('storeid');
				$curMonth = date('m');
				$curYear = date('Y');
				$sql = 'SELECT COALESCE(sum(total_amount), 0) as total from app_order 
				where is_delete=0 AND store_id="'.$storeId.'" and month(created_date) = "'.$curMonth.'" and year(created_date) ="'.$curYear.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getqtyorder':
				$storeId = $this->input->get('storeid');
				$curMonth = date('m');
				$curYear = date('Y');
				$sql = 'SELECT COALESCE(sum(total_qty), 0) as total from app_order
				where is_delete=0 AND store_id="'.$storeId.'" and month(created_date) = "'.$curMonth.'" and year(created_date) ="'.$curYear.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getamountordercustom':
				$storeId = $this->input->get('storeid');
				$curMonth = date('m');
				$curYear = date('Y');
				$sql = 'SELECT COALESCE(sum(total_amount), 0) as total from app_order_custom
				where is_delete=0 AND store_id="'.$storeId.'" and month(created_date) = "'.$curMonth.'" and year(created_date) ="'.$curYear.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getqtyordercustom':
				$storeId = $this->input->get('storeid');
				$curMonth = date('m');
				$curYear = date('Y');
				$sql = 'SELECT COALESCE(sum(total_qty), 0) as total from app_order_custom
				where is_delete=0 AND store_id="'.$storeId.'" and month(created_date) = "'.$curMonth.'" and year(created_date) ="'.$curYear.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getoutstandingcustom':
				$storeId = $this->input->get('storeid');
				$curMonth = date('m');
				$curYear = date('Y');
				$sql = 'SELECT sum(total_amount - total_paid) as total from app_order_custom 
				where is_delete=0 AND store_id="'.$storeId.'"
				and month(created_date) = "'.$curMonth.'" and year(created_date) ="'.$curYear.'"
				';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getamountcashorder':
				$storeId = $this->input->get('storeid');
				$sql = 'SELECT sum(total_amount) as total from app_order 
				where is_delete=0 AND payment_type=1 AND store_id="'.$storeId.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			case 'getamountcashlessorder':
				$storeId = $this->input->get('storeid');
				$sql = 'SELECT sum(total_amount) as total from app_order 
				where is_delete=0 AND payment_type=2 AND store_id="'.$storeId.'"';

				$data = $this->db->query($sql)->row();
				$res = array(
					'total_amount' => $data->total
				);
				returnJson($res);
				exit();
				break;
			default:
				# code...
				break;
		}
	}

	public function sendMail()
	{			
		$body = '';
		try {
			$config = array(
				'to' => 'andreymahdison@gmail.com',
				'name' => 'Andry Mahdison',
				'subject' => 'This is dummy email',
				'body' => $body
			);
			$s = $this->emailservice->sendMail($config);
			return true;
		} catch (Exception $e) {
			return $e->getMessage();
		}	
	}
}
