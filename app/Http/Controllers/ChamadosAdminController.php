<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ChamadosAdminController extends Controller
{
    public function index(Request $request)
    {
        if( !(Auth::check()) ) {
            return redirect()->route('login');
        }
        $chamados = Chamados::join('tipos_chamado as tc', 'tc.tipo_chamado_id', '=', 'chamados.tipo_chamado')
                            ->select(
                                'chamados.chamado_id as id',
                                'tc.descricao as tipo_chamado',
                                'chamados.nome as nome',
                                'chamados.status as status',
                                'chamados.produto as produto'
                                        )
                            ->get();

        if( $request->ajax() != null )
            return DataTables::of($chamados)->make(true);
        
        return view('admin.index');
    }
}
