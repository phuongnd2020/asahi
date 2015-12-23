<?php namespace App\Http\Models;
use DB;
use Paginator;

class SellProduct extends Model {
    protected static $table = 'sell_product';

    //detail
    public static $rules1 = array(
            'cat_sell'                  => 'required',
            'product_name'              => 'required',
            'display_rate'              => 'required',
            'display_type'              => 'required',
            'image_first'               => 'max:2000|mimes:jpeg,bmp,png,gif',
            'image_second'              => 'max:2000|mimes:jpeg,bmp,png,gif'            
    );

    //url
    public static $rules2 = array(
            'cat_sell'                  => 'required',
            'product_name'              => 'required',
            'display_type'              => 'required',
            'url'                       => 'required|url'         
    );

    //file
    public static $rules3 = array(
            'cat_sell'                  => 'required',
            'product_name'              => 'required',
            'display_type'              => 'required',
            'file'                      => 'required|max:2000|mimes:jpeg,bmp,png,pdf,csv,doc,docx,rtf,xls,ppt,swf,zip,flv,mp4,wmv,avi,txt,upg'
    );


        //detail
    public static $rulesEdit1 = array(
            'product_name'              => 'required',
            'display_rate'              => 'required',
            'display_type'              => 'required',
            'image_first'               => 'max:2000|mimes:jpeg,bmp,png,gif',
            'image_second'              => 'max:2000|mimes:jpeg,bmp,png,gif'            
    );

    //url
    public static $rulesEdit2 = array(
            'product_name'              => 'required',
            'display_type'              => 'required',
            'url'                       => 'required|url'         
    );

    //file
    public static $rulesEdit3 = array(
            'product_name'              => 'required',
            'display_type'              => 'required',
            'file'                      => 'max:2000|mimes:jpeg,bmp,png,pdf,csv,doc,docx,rtf,xls,ppt,swf,zip,flv,mp4,wmv,avi,txt,upg'
    );

   
    public static $messages = array(
            'cat_sell.required'         => 'Please choose category',
            'product_name.required'	    => 'Please enter sell product',
            'display_rate.required'	    => 'Please choose show rate',
            'display_type'              => 'Please choose display type',
            'url.required'              => 'Please enter url',
            'url.url'                   => 'Please enter correct format url',
            'file.required'             => 'Please enter file',
            'file.max'                  => 'The file size must be less than 2MB',
            'file.mimes'                => 'The file type extension: .fdf, .doc, xls, csv, txt...',
            'image_first.max'           => 'The file image must be less than 2MB',
            'image_first.mimes'         => 'The file type extension: jpeg,bmp,png,gif',
            'image_second.max'          => 'The file image must be less than 2MB',
            'image_second.mimes'        => 'The file type extension: jpeg,bmp,png,gif',
    );

    //get list rental product
    public static function searchSellPro($cat_rental_id=null){
        return DB::table(static::$table)
                ->where('is_deleted', NO_DELLETE)
                ->where('cat_rental_id', $cat_rental_id)
                ->paginate(LIMIT_PAGE);                        
    }

    //delete item category sell
    public static function delSellPro($id){
        return DB::table(static::$table)
                ->where('id', '=', $id)
                ->update(array('is_deleted' => DELETED));

    }

    
    //get all sell product
     public static function getAllSellPro(){
        return DB::table(static::$table)
                ->select('sell_product.*')
                ->where('is_deleted', NO_DELLETE)
                ->where('display_top', 1)
                ->paginate(LIMIT_PAGE);                        
    }
    
    //get sell product by id
     public static function getSellProById($id){
        return DB::table(static::$table)
                ->select('sell_product.*')
                ->where('is_deleted', NO_DELLETE)
                ->find( $id);                      
    }
    //productDetail
    
    public static function getListPro()
        {
            return DB::table(static::$table)
                    ->where('is_deleted', NO_DELLETE)                                        
                    ->select('id', 'product_name', 'cat_product_id')
                    ->get();
        }
}