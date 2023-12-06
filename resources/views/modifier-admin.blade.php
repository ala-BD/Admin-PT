@extends('theme')
@section('contenu')



<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Form Elements</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Elements</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-4" >Modifier Admin</h4>
                <form method="POST" action="/modifadmin"> 
                                    @csrf
                <input type="hidden" name="id" value="{{$data->id}}">                    

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$data->nom}}" name="nom"
                            id="example-text-input"> 
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$data->login}}" name="login"
                            id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email"  value="{{$data->mail}}" name="mail"
                            id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" value="{{$data->password}}" name="password"
                            id="example-url-input">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-dark mt-4 col-md-12">Modifier</button>

                

            </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>

@endsection