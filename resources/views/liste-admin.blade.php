@extends('theme')
@section('contenu')



<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste-Admin</h4>

            

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
                        <th>Nom</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($donnees as $data)
                    <tr>
                        <td>{{$data->nom}}</td>
                        <td>{{$data->login}}</td>
                        <td>
                            <a href="mailto:{{$data->mail}}">{{$data->mail}}</a>
                        </td>
                        <td>

                            <a href="modifier-admin/{{$data->id}}" class="btn btn-primary">Modifier</a>

                            <a href="suppAdmin/{{$data->id}}" class="btn btn-danger">Supprimer</a>
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