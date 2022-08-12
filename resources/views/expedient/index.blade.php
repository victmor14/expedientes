@extends('layouts.app')

@section('template_title')
    Expedient
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expedient') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('expedients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Codigo</th>
										<th>Descripcion</th>
										<th>Procedemiento</th>
										<th>Organismo</th>
										<th>Empleado</th>
										<th>Archivo</th>
										<th>Tipo</th>
										<th>Fase</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expedients as $expedient)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $expedient->codigo }}</td>
											<td>{{ $expedient->descripcion }}</td>
											<td>{{ $expedient->procedemiento }}</td>
											<td>{{ $expedient->organismo }}</td>
											<td>{{ $expedient->empleado }}</td>
											<td>{{ $expedient->archivo }}</td>
											<td>{{ $expedient->tipo }}</td>
											<td>{{ $expedient->fase }}</td>

                                            <td>
                                                <form action="{{ route('expedients.destroy',$expedient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('expedients.show',$expedient->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('expedients.edit',$expedient->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-trash"></i> Enviar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $expedients->links() !!}
            </div>
        </div>
    </div>
@endsection
