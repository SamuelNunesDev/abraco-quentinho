<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Exception;
use Illuminate\Http\Request;
use App\Models\TipoChamados;

class ChamadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $dados = $request->all();

            $dados['whatsapp'] = str_replace('-', '', str_replace(' ', '', $dados['whatsapp']));
            if (isset($dados['cep'])) {
                $dados['cep'] = str_replace('-', '', $dados['cep']);
            }
            if ($dados['tipoC'] == 0) {
                if ($dados['tipoD'] == 0) {
                    $tipo_chamado = isset($dados['anonimo']) ? TipoChamados::DOACAO_ENTREGA_ANONIMA : TipoChamados::DOACAO_ENTREGA;
                } else {
                    $tipo_chamado = isset($dados['anonimo']) ? TipoChamados::DOACAO_HOME_ANONIMA : TipoChamados::DOACAO_HOME;
                }
            } else {
                $tipo_chamado = TipoChamados::SER_COLABORADOR;
            } 

            $dados['tipo_chamado'] = $tipo_chamado;
            $dados['status'] = 0;

            Chamados::create($dados);
        } catch (Exception $e) {
            return back()->with('error', 'Houve um erro ao realizar o cadastro, contate algum administrador do sistema. 😔');
        }

        return back()->with('success', "Cadastro realizado com sucesso! Entraremos em contato assim que possível! Agradecemos sua colaboração {$dados['nome']} 😄");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chamados  $chamados
     * @return \Illuminate\Http\Response
     */
    public function show(chamados $chamados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chamados  $chamados
     * @return \Illuminate\Http\Response
     */
    public function edit(chamados $chamados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chamados  $chamados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chamados $chamados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chamados  $chamados
     * @return \Illuminate\Http\Response
     */
    public function destroy(chamados $chamados)
    {
        //
    }
}
