@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <cards-home-component>
        <div class="container">
            <header>
                <div class="title">LIVRARIA SENAC</div>
                <div class="icon-cart">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                    </svg>
                    <span>0</span>
                </div>
            </header>

            <section id="menu" class="menu section">
                <!-- Section Title -->
                <div class=" section-title" data-aos="fade-up">
                    <h2>Our Collection</h2>
                    <p><span>Books School</span> <span class="description-title">Menu</span></p>
                </div><!-- End Section Title -->

                <div class="">
                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                        <div class="tab-pane fade active show" id="menu-starters" role="tabpanel">

                            <div class="tab-header text-center">
                                <p>Livros</p>
                                <h3>Categorias</h3>
                            </div>

                            <div class="listProduct row gy-5">

                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </div>
    </cards-home-component>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
