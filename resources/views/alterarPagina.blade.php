@extends('padrao')
@section('content')


<!-- ------------------------------------------ CALHA ------------------------------------------------------- -->

<footer class="homefooter1">
  <div class="container px-1 text-center">
    <div class="row gx-5">
      <div class="col">
        <div class="p-1home border bg-blck">Seja Bem-Vindo</div>
      </div>
      <div class="col">
        <div class="p-2home border bg-back">Alterar E Apagar</div>
      </div>
    </div>
  </div>
</footer>

<!-- ----------------------------------------- FIM DO CALHA ------------------------------------------------ -->




<!-- ------------------------------------------ EDITAR ------------------------------------------------------- -->


<div class="divedit1">


  <table class="table">
    <thead>
      <tr class="consultartr1">
        <th scope="col" class="editp1">Página</th>
        <th scope="col" class="editp2">Data</th>
        <th scope="col" class="editp3">Tema</th>
        <th scope="col" class="editp4">Conteudo</th>
        <th scope="col" class="editp5">Editar</th>
        <th scope="col" class="editp6">Excluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosDiario as $registrosDiarios)
      <tr class="consultartr2">
        <th scope="row">{{$registrosDiarios->id}}</th>
        <td>{{$registrosDiarios->data}}</td>
        <td>{{$registrosDiarios->tema}}</td>
        <td>{{$registrosDiarios->acontecimento}}</td>
        <td>
            <button type="submit" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg>
            </button>
          </form>
        </td>

        <td>
          <form method="Post" action="{{route('editar-diario', $registrosDiarios->id)}}">
            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- ----------------------------------------- FIM DO EDITAR ------------------------------------------------ -->
@endsection