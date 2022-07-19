<?php

namespace App\Http\Controllers;
use App\Classes\Enc;
use App\Models\Product;
use Illuminate\Http\Request;
use Response;
use Yajra\DataTables\Facades\DataTables;
class Main extends Controller
{
    private $Enc;
    //Create product
    public function __construct()
    {
        $this->Enc = new Enc();
    }
    public function index(Request $request){
        return view('welcome');
    }
    public function createOrUpdateProduct(Request $request){
        return response()->json(Product::updateOrCreate(['id'=>$this->Enc->desencriptar($request->id)],['nome' => $request->nome,'descricao' =>$request->descricao,'quantidade'=>$request->quant,'valor'=>$request->valor]));
    }
    public function editUserFind($id){
        return response()->json(Product::find($this->Enc->desencriptar($id)));
    }
    public function delete(Request $request){
        return response()->json(Product::find($this->Enc->desencriptar($request->idel))->delete());
    }
    public function loadDados(Request $request){
        if ($request->ajax()) {
            $data = Product::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm" data-id="'.$this->Enc->encriptar($row->id).'">Editar</a> <a href="javascript:void(0)" data-id="'.$this->Enc->encriptar($row->id).'"  class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
