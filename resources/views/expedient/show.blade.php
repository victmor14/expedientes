@extends('layouts.app')

@section('template_title')
    {{ $expedient->name ?? 'Show Expedient' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Expedient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('expedients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $expedient->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $expedient->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Procedemiento:</strong>
                            {{ $expedient->procedemiento }}
                        </div>
                        <div class="form-group">
                            <strong>Organismo:</strong>
                            {{ $expedient->organismo }}
                        </div>
                        <div class="form-group">
                            <strong>Empleado:</strong>
                            {{ $expedient->empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $expedient->archivo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $expedient->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fase:</strong>
                            {{ $expedient->fase }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
