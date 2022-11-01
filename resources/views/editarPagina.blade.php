@extends('padrao')
@section('content')
<link rel="stylesheet" href="css/estilo.css">


  <!-- ------------------------------------------ CALHA ------------------------------------------------------- -->

  <footer class="homefooter1">
        <div class="container px-1 text-center">
          <div class="row gx-5" >
            <div class="col" >
             <div class="p-1home border bg-blck">Seja Bem-Vindo</div>
            </div>
            <div class="col">
              <div class="p-2home border bg-back">Hora De Se Expressar...</div>
            </div>
          </div>
        </div>
      </footer>

      <!-- ----------------------------------------- FIM DO CALHA ------------------------------------------------ -->


      

      <!-- ------------------------------------------ VALIDAÇÃO ------------------------------------------------- -->

      
      <div class="divcadas1">
        <div class="divcadas2">
      <form class="row g-3" method="post" action="{{route('alterar-banco-diario',$registrosDiarios->id)}}">
      @csrf
      @method('put')
      <div class="col-md-6 text-center">
            <label for="validationServer03" class="cadasp1 form-label">DATA</label>
            <input name="data" value="{{old('data', $registrosDiarios->data)}}" type="text" class="form-control " id="" aria-describedby="" placeholder="28/10">
            @error('data')
            <div class="text-sm-start text-alight" >Preencher o campo data.</div>
        @enderror
          </div>
          <div class="divcadas3 col-md-6 text-center">
            <label for="validationServer03" class="cadasp2 form-label">TEMA</label>
            <input name="tema" value="{{old('tema', $registrosDiarios->tema)}}" type="text" class="form-control " id="" aria-describedby="" placeholder="Dia Romântico...">
            @error('tema')
        <div class="text-sm-start text-alight" >Preencher o campo tema.</div>
        @enderror
          </div>
          <div class="divcadas4 mb-3 text-center">
            <label for="validationTextarea" class="cadasp3 form-label">ACONTECIMENTO</label>
            <textarea name="acontecimento" value="{{old('acontecimento', $registrosDiarios->acontecimento)}}" class="form-control" id="" placeholder="Meu Querido Diário..."></textarea>
            @error('acontecimento')
        <div class="text-sm-start text-alight" >Preencher o campo acontecimento.</div>
        @enderror
          </div>
        <div class="col-12">
          <button class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"> Enviar
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg></button>
        </div>
      </form>
         </div>
    </div>


      <!-- ------------------------------------------ FIM DA VALIDAÇÃO -------------------------------------------- -->


      <!-- ----------------------------------------- SEPARADOR ------------------------------------------------ -->

      <div>
        <p class="p4home">______________________________________________________________________________________________________________</p>
      </div>

      <!-- ----------------------------------------- FIM DO SEPARADOR ------------------------------------------------ -->

<style>
  /* <><><><><><><><><><><><><><><><><><><><><> HOME DO DIÁRIO <><><><><><><><><><><><><><><><><><><><><><> */

.bodypadrao{
    background-color: #D9CED6;
}

.rodape{
    width: 100%;
}

/* -------------------------------------- CSS DA CALHA 1 e 2 ----------------------------------------------- */

.homefooter1{
    background-color: #D9CED6;
    }
    
    .row{
        background-color: #D9CED6;
    }
    
    .col{
        margin-top: 6cm;
        margin-bottom: 1cm; 
    }
    
    .p-1home{
        font-size: 25px;
        margin-top: 1cm;
        color:  rosybrown;
    
    }
    .p-2home{
        font-size: 25px;
        margin-top: 1cm;
        color: black;
    
    }
    
    /* -------------------------------------- FIM DO CSS DA CALHA 1 e 2 ----------------------------------------- */
    



    /* -------------------------------------------- CSS DO CARD 1 ---------------------------------------------- */

    .div4home{
        margin-top: 1cm;
        margin-bottom: 2cm;
        margin-left: 5cm;
        margin-right: 2cm;
    }

    .card4home{
        margin-left: 1cm;
        margin-right: 1cm;
    }
 
    .cardp1{
        font-size: 20px;
    }

    /* ----------------------------------------- FIM DO CSS DO CARD 1 ------------------------------------------- */




    /* -------------------------------------------- CSS DO CARD 2 ---------------------------------------------- */

    .div1home{
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
    }

    /* ----------------------------------------- FIM DO CSS DO CARD 2 ------------------------------------------- */




    /* ----------------------------------------- CSS DO SEPARADOR ------------------------------------------- */

    .p4home{
        font-size: 30px;
        color: transparent;
    }

    /* ----------------------------------------- FIM DO CSS DO SEPARADOR ------------------------------------------- */

   

/* <><><><><><><><><><><><><><><><><><><><><> FIM DA HOME DO DIÁRIO <><><><><><><><><><><><><><><><><><><><><><> */









/* <><><><><><><><><><><><><><><><><><><><><> CADASTrar DO DIARIO <><><><><><><><><><><><><><><><><><><><><><> */



    /* ----------------------------------------- CSS DA VALIDAÇÃO ------------------------------------------- */


    .divcadas1{
        margin-top: 2cm;
        margin-bottom: 6cm;
        margin-left: 6cm;
        margin-right: 6cm;
    }


    .divcadas3{
        margin-bottom: 1cm;
    }

    .cadasp1{
        color: blue;
        font-family: Arial black;
        font-size: 20px;

    }

    .cadasp2{
        color: red;
        font-family: Arial black;
        font-size: 20px;
    }
    
    .cadasp3{
        color: green;
        font-family: Arial black;
        font-size: 20px;
    }

    .divedit1{
        margin-bottom: 10cm;
    }

 /* ----------------------------------------- FIM DO CSS DA VALIDAÇÃO ------------------------------------------- */

/* <><><><><><><><><><><><><><><><><><><><><> FIM DO CADASTRAR DO DIARIO  <><><><><><><><><><><><><><><><><><><><><><> */








/* <><><><><><><><><><><><><><><><><><><><><> CONSULTAR DO DIÁRIO <><><><><><><><><><><><><><><><><><><><><><> */


.pesquisar {

    float: right;

    margin: 2%;

}

    /* ----------------------------------------- CSS DO EDITAR ------------------------------------------- */


 .divedit1{
    margin-top: 2cm;
    margin-bottom: 9cm;
    margin-right: 4cm;
    margin-left: 4cm;
 }

 .editp1{
    color: blue;
    font-family: Arial black;

 }

 .editp2{
    color: red;
    font-family: Arial black;

 }

 .editp3{
    color: green;
    font-family: Arial black;

 }

 .editp4{
    color: blue;
    font-family: Arial black;

 }

 .editp5{
    color: red;
    font-family: Arial black;

 }

 .editp6{
    color: green;
    font-family: Arial black;

 }

  /* ----------------------------------------- FIM DO CSS DO EDITAR ------------------------------------------- */


/* <><><><><><><><><><><><><><><><><><><><><> FIM DO CONSULTAR DO DIÁRIO <><><><><><><><><><><><><><><><><><><><><><> */
  


</style>



@endsection