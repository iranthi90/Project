<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Stock;

class DashboardController extends Controller
{
    public function index(){

        $reorder= DB::select(
" SELECT  s.current_qty, s.reorder_level, p.name
FROM `stocks` s
LEFT JOIN products p ON p.id = s.product_id
WHERE s.reorder_level= s.current_qty
GROUP BY s.product_id"

        );


//dump($reorder);
//exit;



    	$salesByProducts_res = DB::select(
    		"SELECT p.id, p.name, (SELECT SUM(qty) FROM order_product WHERE product_id = p.id) as tot_qty
				FROM order_product op 
				LEFT JOIN products p ON p.id = op.product_id
				LEFT JOIN orders ord ON ord.id = op.order_id
				GROUP BY p.id"
    	);

    	//sales by last 5 days -including today
    	$end_date = date("Y-m-d");
    	$start_date = date('Y-m-d', strtotime('-5 days', strtotime($end_date)));

    	$salesByDate_res = DB::select(
    		"SELECT ord.id, SUM(payhere_amount) as tot, pay.payhere_amount, DATE(pay.created_at) as sales_date
				FROM `orders` ord
				LEFT JOIN payments pay ON pay.order_id = ord.id
				WHERE  ord.payment_status= 'paid'
				AND DATE(pay.created_at) BETWEEN '".$start_date."' AND '".$end_date."'
				GROUP BY DATE(pay.created_at)"
    	);


    	//commssions earned by order - for last 100 orders

    	$commissionByOrder = DB::select(
    		"SELECT op.order_id, DATE(ord.updated_at) as sale_date, op.commission 
				FROM `order_product` op
				LEFT JOIN orders ord ON ord.id = op.order_id				
				ORDER BY order_id ASC
				LIMIT 100"
    	);

    	
        

    	return view('admin.welcome')
    		->with('salesByProducts_res', $salesByProducts_res)
    		->with('salesByDate_res', $salesByDate_res)
    		->with('commissionByOrder', $commissionByOrder)
        ->with('reorder', $reorder);
    		
    }



}
