@extends('dashboard')

@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Usuários</h1>
      </div>
      {{-- <div class="container">
            <form action="" method="GET">
                  <div class="form-row">
                        <div class="col">
                              <input type="text" name="pesquisar" class="form-control" placeholder="Digite seu nome.">
                              <button type="submit">
                                    Pesquisar
                              </button>
                              <a type="button" href="#" class="btn btn-success">
                                    add product
                              </a>
                        </div>
                  </div>
            </form>
            <div class="table-responsive small mt-5">
            <table class="table table-striped table-sm">
            <thead>
                  <tr>
                  <th>Nome: </th>
                  <th>Valor: </th>
                  <th>Ações: </th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($findProducts as $prods)
                        <tr>
                              <td>{{ $prods->name }}</td>
                              <td>{{ 'R$' . ' ' . number_format($prods->valor, 2, ',', '.') }}</td>
                              <td>
                                    <a href="{{ route('produto.delete') }}" class="btn btn-sm btn-secondary">Edit</a>    
                                    <a onclick="deleteRegistroPaginacao('{{ route('produto.delete') }}', {{ $prods->id }} )" class="btn btn-sm btn-danger">Remove</a>      
                              </td>
                        </tr>
                  @endforeach
            </tbody>
            </table>
            </div> 
      </div> --}}
@endsection