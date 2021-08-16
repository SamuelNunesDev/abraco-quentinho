<?php

namespace App\Http\Controllers;

use App\Models\Chamados;
use Illuminate\Http\Request;

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
        $dados = $request->all();

        $dados['whatsapp'] = str_replace('-', '', str_replace(' ', '', $dados['whatsapp']));
        if (isset($dados['cep']))
        {
            $dados['cep'] = str_replace('-', '', $dados['cep']);
        }
        if ($dados['tipoC'] == 0)
        {
            if ($dados['tipoD'] == 0)
            {
                $tipo_chamado = isset($dados['anonimo']) ? 0 : 1;
            }
            else
            {
                $tipo_chamado = isset($dados['anonimo']) ? 2 : 3;
            }
        }
        else
        {
            $tipo_chamado = isset($dados['anonimo']) ? 4 : 5;
        }
        if (isset($dados['anonimo']))
        {
            unset($dados['anonimo']);
        }
        unset($dados['_token']);
        unset($dados['tipoC']);
        unset($dados['tipoD']);
        $dados['tipo_chamado'] = $tipo_chamado;

        Chamados::create($dados);

        return back()->with('success');
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
