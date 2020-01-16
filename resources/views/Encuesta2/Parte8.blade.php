@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="text-center" style="margin-bottom:1%">Identificación y análisis de los factores de riesgo psicosocial</h1>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-11 col-md-11">
                <form action="" method="post">
                    @csrf
                    <div class="box">
                        <div class="box-body" style="margin:1%">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    Soy jefe de otros trabajadores
                                </div>
                                <div class="col-xs-6 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" id="servicioClientes" style="width: 100%;">
                                            <option value="1">Si</option>
                                            <option value="0" selected>No</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row show-row" style="margin:1%; display:none">
                                <h5>Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</h5>
                            </div>
                            <div class="row show-row" style="display:none">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                44.- Comunican tarde los asuntos de trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row show-row" style="display:none">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    45.- Dificultan el logro de los resultados del trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row show-row" style="display:none">
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    46.- Ignoran las sugerencias para mejorar su trabajo
                                </div>
                                <div class="col-xs-5 col-sm-3 col-md-2">
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Siempre</option>
                                            <option>Casi siempre</option>
                                            <option>Algunas veces</option>
                                            <option>Casi nunca</option>
                                            <option>Nunca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="/parte8" role="button" class="btn btn-primary pull-right">Enviar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            //$('.select2').select2();

            $('#servicioClientes').on('change', function() {
                if(this.value == 1)
                   $('.show-row').css('display','');
                else
                    $('.show-row').css('display','none');
            });
        });
    </script>
@endsection