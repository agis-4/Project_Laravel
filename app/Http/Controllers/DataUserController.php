<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\User;

class DataUserController extends Controller
{
    public function index()
    {
        $us = DB::table('users')
        	->get();

        $data['page'] = 'USER';
        $data['us'] = $us;
        
    	return view('user.index', $data);
    }
    public function add_user()
 	{
 		$data['page'] = 'USER';

 		return view('user.add',$data);	
    }
    public function save_us(Request $Request)
 	{
 		$insert = DB::table('users')
 				->insert([
 					'name' => $Request->input('name'),
 					'email' => $Request->input('email'),
                    'password' => bcrypt($Request->input('password')),
                    
 				]);
        
 		return redirect()->route('index_us')->with('status', 'Data Saved Successfully!');
	 }
     public function edit_us($id)
    {
        $us = DB::table('users')
            ->where('id',$id)            
			->get();
		$data = [];	
		$data['page'] = 'USER';
		$data['us'] = $us;

		return view('user.edit_us',$data);
	}
	public function save_edit_us(Request $Request){ 
		$id = $Request->input('hidden_id');
		$update = DB::table('users')
					 ->where('id',$id)
					 ->update([
					    'name' => $Request->input('name'),
 					    'email' => $Request->input('email'),
                        'password' => bcrypt($Request->input('password')),
					 ]);
		
	  return redirect()->route('index_us')->with('status', 'Data Updated Successfully!');
	}
    public function detail_us($id)
	{
		$show = DB::table('users')
		->where('id',$id)
		->get();
		$data = [];
		$data['show'] = $show;
		$data['page'] = 'USER';

		 return view('user.detail_us',$data);
	}
    public function delete_us($id)
	{
		$delete = DB::table('users') 
		->where('id',$id)
		->delete();
		
		return redirect()->route('index_us')->with('status', 'Data Deleted Successfully!');
   }
}
