<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class UndanganKeluargaController extends Controller
{
    public function index_uk()
    {
        $uk = DB::table('undangan_k')
        	->get();
        $data = [];
        $data['uk'] = $uk;
        $data['page'] = 'UNDANGAN KELUARGA';

    	return view('undangan_k.index_k',$data);
    }
    public function tambah_uk()
 	{
 		$data['page'] = 'UNDANGAN KELUARGA';

 		return view('undangan_k.tambah_uk',$data);	
    }
    public function simpan_uk(Request $Request)
 	{
 		$insert = DB::table('undangan_k')
 				->insert([
 					'nama_lengkap_uk' => $Request->input('nama_lengkap_uk'),
 					'alamat_lengkap_uk' => $Request->input('alamat_lengkap_uk'),
                    'nominal_uk' => $Request->input('nominal_uk'),
                    'status_uk' => $Request->input('status_uk'),
 				]);
        
 		return redirect()->route('index_uk')->with('status', 'Data Saved Successfully!');
	 }
	public function edit_uk($id)
    {
        $undangan_k = DB::table('undangan_k')
            ->where('id',$id)            
			->get();
			
		$data = [];
		$data['page'] = 'UNDANGAN KELUARGA';
		$data['undangan_k'] = $undangan_k;

		return view('undangan_k.edit_uk',$data);
	}
	public function save_uk(Request $request){ 
		$id = $request->input('hidden_id');
		$update = DB::table('undangan_k')
					 ->where('id',$id)
					 ->update([
					 'nama_lengkap_uk' => $request->input('nama_lengkap_uk'),
					 'alamat_lengkap_uk' => $request->input('alamat_lengkap_uk'),
					 'nominal_uk' => $request->input('nominal_uk'),
					 'status_uk' => $request->input('status_uk')
					 ]);
		
	  return redirect()->route('index_uk')->with('status', 'Data Updated Successfully!');
	}
    public function detail_uk($id)
	{
		$show = DB::table('undangan_k')
		->where('id',$id)
		->get();

		$data = [];
		$data['page'] = 'UNDANGAN KELUARGA';
		$data['show'] = $show;

		return view('undangan_k.detail_uk',$data);
	}
	public function delete_uk($id)
	{
		$delete = DB::table('undangan_k') 
		->where('id',$id)
		->delete();
		
		return redirect()->route('index_uk')->with('status', 'Data Deleted Successfully!');
   }
   public function new()
    {        
    	return view('new');
    }
}
