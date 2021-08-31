<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exports\A2pExport;
use App\Imports\A2pImport;
use Maatwebsite\Excel\Facades\Excel;

class A2pController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_a2p = \App\Models\A2p::where('source','LIKE','%'.$request->cari.'%')
            ->orWhere('source','LIKE','%'.$request->cari.'%')
            ->orWhere('asal','LIKE','%'.$request->cari.'%')
            ->orWhere('costumer','LIKE','%'.$request->cari.'%')
            ->orWhere('SMSC','LIKE','%'.$request->cari.'%')
            ->orWhere('link','LIKE','%'.$request->cari.'%')
            ->orWhere('operator','LIKE','%'.$request->cari.'%')
            ->orWhere('sender','LIKE','%'.$request->cari.'%')
            ->orWhere('terminasi','LIKE','%'.$request->cari.'%')
            ->orWhere('tipe_terminasi','LIKE','%'.$request->cari.'%')
            ->orWhere('SID','LIKE','%'.$request->cari.'%')
            ->orWhere('status_terminasi','LIKE','%'.$request->cari.'%')
            ->orWhere('created_at','LIKE','%'.$request->cari.'%')
            ->orWhere('updated_at','LIKE','%'.$request->cari.'%')->paginate(20);
        }
       
            else if($request->has('cari1')){
            $data_a2p = \App\Models\A2p::where('costumer','LIKE',"%{$request->cari1}%")->paginate(20);
        }
            else if($request->has('cari2')){
            $data_a2p = \App\Models\A2p::where('operator','LIKE','%'."%{$request->cari2}%")->paginate(20);
        }
            else if($request->has('cari3')){
            $data_a2p = \App\Models\A2p::where('sender','LIKE','%'."%{$request->cari3}%")->paginate(20);
        }    
            else if($request->has('cari4')){
             $data_a2p = \App\Models\A2p::where('terminasi','LIKE','%'."%{$request->cari3}%")->paginate(20);
        }
            else{
            $data_a2p = \App\Models\A2p::all();
        }
             return view('a2p.index', ['data_a2p' => $data_a2p]);
    }




    public function create(request $request)
    {
        $this->validate($request,[
            'costumer' => 'required',
            'SMSC' => 'required',
            'operator'=> 'required',
            'sender'=> 'required',
            'terminasi'=> 'required',
            'tipe_terminasi'=> 'required',
            'status_terminasi'=> 'required',
        ]);
        \App\Models\A2p::create($request->all());
       return redirect('/a2p')->with('sukses','Data Berhasil di Input');
    }

    public function edit($id)
    {
        $a2p=\App\Models\A2p::find($id);
        return view('a2p/edit',['a2p' => $a2p]);
    }
    public function update(request $Request, $id)
    {
        $a2p=\App\Models\A2p::find($id);
        $a2p->update($Request->all());
        return redirect('/a2p')->with('sukses','Data Berhasil di Update');
    }
    public function delete($id)
    {
        $a2p=\App\Models\A2p::find($id);
        $a2p->delete($a2p);
        return redirect('/a2p')->with('sukses','Data Berhasil di Hapus');
    }
    public function export()
    {
        return excel::download(new A2pExport, 'A2p.xlsx');
    }

    public function importexcel(Request $request) 
	{
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataA2p' , $namaFile);

		Excel::import(new A2pImport, public_path('/DataA2p/'.$namaFile));
        return redirect('/a2p');
    }
}