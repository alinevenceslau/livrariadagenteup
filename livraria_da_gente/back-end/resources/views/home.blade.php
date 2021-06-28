@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-header">Bem vindo, {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- Botões de funcionalidades -->

                    <section class="services py-5 text-center ">
                        <div class="container ">
                            <div class="row ">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#" class="text-body">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <small class="text-secondary">Clique para gerenciar seu perfil</small>
                                                <h5>Meu perfil</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="/verLivros/1" class="text-body">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <small class="text-secondary">Clique para ver seu acervo</small>
                                                <h5>Meu acervo</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href=" {{ route('criar') }} " class="text-body">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <small class="text-secondary">Clique para adicionar um livro</small>
                                                <h5>Adicionar Livro</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#" class="text-body">
                                        <div class="card bg-light mb-3">
                                            <div class="card-body">
                                                <small class="text-secondary">Gerencie aqui suas PageCoins</small>
                                                <h5>Ver saldo</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection