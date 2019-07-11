<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\User;

class UndanganPribadiController extends Controller
{
    public function dashboard()
    {
         
         $up = DB::table('undangan')
        	->get();
         $uk = DB::table('undangan_k')
        	->get();

        $data = [];
        $data['uk'] = $uk;
        $data['up'] = $up;
        $data['page'] = 'DASHBOARD';

    	return view('dashboard',$data);
    }
    
    public function index()
    {
        $up = DB::table('undangan')
        	->get();

        $data = [];
        $data['up'] = $up;
        $data['page'] = 'UNDANGAN PRIBADI';

    	return view('undangan.index',$data);
    }
    public function tambah()
 	{
 		$data['page'] = 'UNDANGAN PRIBADI';
 		return view('undangan.tambah',$data);	
    }
    public function simpan(Request $Request)
 	{
 		$insert = DB::table('undangan')
 				->insert([
 					'nama_lengkap' => $Request->input('nama_lengkap'),
 					'alamat_lengkap' => $Request->input('alamat_lengkap'),
                    'nominal' => $Request->input('nominal'),
                    'status' => $Request->input('status'),
 				]);
        
 		return redirect()->route('index_up')->with('status', 'Data Saved Successfully!');
	 }
	public function edit($id)
    {
        $undangan = DB::table('undangan')
            ->where('id',$id)
			->get();
		
		$data = [];
		$data['page'] = 'UNDANGAN PRIBADI';
		$data['undangan'] = $undangan;
		
		return view('undangan.edit',$data);
	}
	public function save(Request $request){ 
		$id = $request->input('hidden_id');
		$update = DB::table('undangan')
					 ->where('id',$id)
					 ->update([
					 'nama_lengkap' => $request->input('nama_lengkap'),
					 'alamat_lengkap' => $request->input('alamat_lengkap'),
					 'nominal' => $request->input('nominal'),
					 'status' => $request->input('status')
					 ]);
		
	  return redirect()->route('index_up')->with('status', 'Data Updated Successfully!');
	}
    public function detail($id)
	{
		$show = DB::table('undangan')
		->where('id',$id)
		->get();

		$data = [];
		$data['page'] = 'UNDANGAN PRIBADI';
		$data['show'] = $show;

		return view('undangan.detail',$data);
	} 
	public function delete($id)
	{
		$delete = DB::table('undangan') 
		->where('id',$id)
		->delete();
		
		return redirect()->route('index_up')->with('status', 'Data Deleted Successfully!');
   }
}
