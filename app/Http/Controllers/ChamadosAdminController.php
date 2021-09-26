<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamados;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class ChamadosAdminController extends Controller
{
    public function chamados(Request $request)
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
                                'chamados.produto as produto',
                                'chamados.assumido_por as responsavel',
                                'chamados.whatsapp as whatsapp',
                                'chamados.cep as cep', 
                                'chamados.rua as rua',
                                'chamados.bairro as bairro',
                                'chamados.numero as numero_casa',
                                'chamados.cidade as cidade',
                                'chamados.complemento as complemento'
                                )
                            ->get();

        if( $request->ajax() != null )
            return DataTables::of($chamados)
                                ->setRowAttr([
                                    'data-id' => function($chamado) {
                                        return $chamado->id;
                                    },
                                    'data-tipo_chamado' => function($chamado) {
                                        return $chamado->tipo_chamado;
                                    },
                                    'data-nome' => function($chamado) {
                                        return $chamado->nome;
                                    },
                                    'data-status' => function($chamado) {
                                        return $chamado->status;
                                    },
                                    'data-produto' => function($chamado) {
                                        return $chamado->produto;
                                    },
                                    'data-responsavel' => function($chamado) {
                                        return $chamado->responsavel;
                                    },
                                    'data-whatsapp' => function($chamado) {
                                        return $chamado->whatsapp;
                                    },
                                    'data-cep' => function($chamado) {
                                        return $chamado->cep;
                                    },
                                    'data-rua' => function($chamado) {
                                        return $chamado->rua;
                                    },
                                    'data-bairro' => function($chamado) {
                                        return $chamado->bairro;
                                    },
                                    'data-numero_casa' => function($chamado) {
                                        return $chamado->numero_casa;
                                    },
                                    'data-cidade' => function($chamado) {
                                        return $chamado->cidade;
                                    },
                                    'data-complemento' => function($chamado) {
                                        return $chamado->complemento;
                                    }
                                ])
                                ->make(true);
        
        return view('admin.chamados');
    }
    public function usuarios()
    {
        if( !(Auth::check()) ) {
            return redirect()->route('login');
        }
        
        return view('admin.usuarios');
    }
    public function cadastrar(Request $request)
    {
        if( !(Auth::check()) ) {
            return redirect()->route('login');
        }
        try {
            $user = new User();
            $user->name = $request->user;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        } catch ( Exception $e ) {
            return back()->with('error', 'Houve um erro ao cadastrar o usuário. '.$e->getMessage());
        }

        return redirect()->route('admin.usuarios')->with('success', 'Usuário cadastrado com sucesso!');
    }
    public function responsavel(Chamados $chamado)
    {
        if( !(Auth::check()) ) {
            return redirect()->route('login');
        }

        if(!$chamado->assumido_por) {
            $chamado->assumido_por = Auth::user()->name;
            $chamado->status = Chamados::STATUS_EM_ANDAMENTO;
            $chamado->save();

            return redirect()->route('admin.chamados')->with('success', 'Chamado assumido!');
        }
        return redirect()->route('admin.chamados')->with('error', 'Este chamado já foi assumido por outra pessoa.');
    }
    public function fechar(Chamados $chamado)
    {
        if( !(Auth::check()) ) {
            return redirect()->route('login');
        }

        $chamado->status = Chamados::STATUS_FECHADO;
        $chamado->save();

        return redirect()->route('admin.chamados')->with('success', 'Chamado Finalizado!');
    }
}
