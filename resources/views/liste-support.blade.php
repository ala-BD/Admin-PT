@extends('theme')
@section('contenu')


<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste-Support</h4>

            

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            @if(session('message')) 
<div class="alert alert-success" role="alert"> {{session('message')}} </div> 
@endif

 @if(session('msg'))
 <div class="alert alert-danger" role="alert"> {{session('msg')}} </div>
 @endif
 

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Sociéte</th>
                        <th>Télephone</th>
                        <th>Email</th>
                        <th>Text cible</th>
                        <th>nombre des mots</th>
                        <th>Taches</th>
                        <th>Prix</th>
                        <th>Date</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($donnees as $data)
                    <tr>
                        <td>{{$data->nomdeclient}}</td>
                        <td>{{$data->scte}}</td>
                        <td>{{$data->telephone}}</td>
                        <td>{{$data->email}} </td>
                        <td>{{$data->textciblee}} </td>
                        <td>{{$data->nombredesmots}} </td>
                        <td>{{$data->taches}} </td>
                        <td>{{$data->prix}} DT </td>
                        <td>{{$data->created_at}} </td>
                        <td>{{$data->commentaire}} </td>
                        <td>
                            <a href="modifierSupport/{{$data->id}}" class="btn btn-primary">Modifier</a>

                            <a href="suppSupport/{{$data->id}}" class="btn btn-danger">Supprimer</a>
<br>
                            <a href="devisPDF/{{$data->id}}" class="btn btn-secondary">PDF</button>
                        </td>
                      
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



</div> <!-- container-fluid -->
</div>


@endsection