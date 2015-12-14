<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\CategoryRental;
use App\Http\Models\CategoryProduct;
use DB;
use Request;
use Validator;
use Input;
use Redirect;
use Html;
use Session;
use Paginator;
use URL;

class CategoryController extends Controller
{  
    
     //category rental
    public function listCatRental()
    {
        $cat_rental = CategoryRental::getCatRental();
        return view('admin.category.rental.list', compact('cat_rental'));
    }
    
    //category rental
    public function getCatRentalAdd()
    {        
        return view('admin.category.rental.add');
    }
    
     //category rental
    public function postCatRentalAdd()
    {
        $validator = Validator::make(Input::all(), CategoryRental::$rules, CategoryRental::$messages);
        if($validator->passes()){
                $set_display = !empty(Input::get('display')) ? 1 : 0;
                $inputData['name']              = Input::get('name');
                $inputData['display']		= $set_display;               
                $inputData['created_at']	= date('Y-m-d H:i:s');
                $inputData['updated_at']	= date('Y-m-d H:i:s');

                DB::table('category_rental')
                        ->insert($inputData);
                Session::flash('success', 'The category rental add successfully.');
                return Redirect::route('admin.category.rental.list');
        }

        return Redirect::route('admin.category.rental.add')
                ->with('message'. 'Add category rental fail, try again!')
                ->withErrors($validator)
                ->withInput();  
    }
    
    //category rental
    public function getCatRentalEdit()
    {
       return view('admin.category.rental.edit'); 
    }
    
    //category rental
    public function postCatRentalEdit()
    {
        
    }
    
    //deletel category rental
    public function delCatRental($id){
        DB::table('category_rental')
                ->where('id', '=', $id)
                ->update(array('is_deleted' => DELETED));
        Session::flash('success', 'The category rental deleted successfully.');
        return Redirect::route('admin.category.rental.list')
                ->with('message', 'Category rental has been deleted successfully');
    }
    
         //category sell
    public function listCatSell()
    {
        $cat_sell = CategoryProduct::getCatSell();
        return view('admin.category.sell.list', compact('cat_sell'));
    }
    
    //category sell
    public function getCatSellAdd()
    {
        $max_order = DB::table('category_product')
                ->where('is_deleted', NO_DELLETE)
                ->max('order');
        $order = $max_order + 1;
        return view('admin.category.sell.add', compact('order'));
    }
    
     //category sell
    public function postCatSellAdd()
    {
        $validator = Validator::make(Input::all(), CategoryProduct::$rules, CategoryProduct::$messages);
        if($validator->passes()){
                $set_display = !empty(Input::get('display')) ? 1 : 0;
                $inputData['name']              = Input::get('name');
                $inputData['display']		= $set_display;
                $inputData['order']         = Input::get('order');
                $inputData['created_at']	= date('Y-m-d H:i:s');
                $inputData['updated_at']	= date('Y-m-d H:i:s');

                DB::table('category_product')
                        ->insert($inputData);
                Session::flash('success', 'The category sell add successfully.');
                return Redirect::route('admin.category.sell.list');
        }
        return Redirect::route('admin.category.sell.add')
                ->with('message'. 'Add category sell fail, try again!')
                ->withErrors($validator)
                ->withInput();  
    }
    
    //category sell
    public function getCatSellEdit($id)
    {
        $cat_sell = CategoryProduct::getCatSellEdit($id);
        return view('admin.category.sell.edit', compact('cat_sell')); 
    }
    
    //category sell
    public function postCatSellEdit($id)
    {
       $validator = Validator::make(Input::all(), CategoryProduct::$rules, CategoryProduct::$messages);
        if($validator->passes()){
                $set_display = !empty(Input::get('display')) ? 1 : 0;
                $inputData['name']              = Input::get('name');
                $inputData['display']		= $set_display;              
                $inputData['updated_at']	= date('Y-m-d H:i:s');

                DB::table('category_product')
                        ->where('id', $id)
                        ->update($inputData);
                Session::flash('success', 'The category sell edit successfully.');
                return Redirect::route('admin.category.sell.list');
        }
        return Redirect::to('admin/category/sell/edit/'.$id)
                ->with('message'. 'Edit category sell fail, try again!')
                ->withErrors($validator)
                ->withInput();   
    }
    
        //deletel category rental
    public function delCatSell($id){
        DB::table('category_product')
                ->where('id', '=', $id)
                ->update(array('is_deleted' => DELETED));
        Session::flash('success', 'The category sell deleted successfully.');
        return Redirect::route('admin.category.sell.list')
                ->with('message', 'Category sell has been deleted successfully');
    }
}
