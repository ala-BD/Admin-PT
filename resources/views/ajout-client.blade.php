@extends('theme')
@section('contenu')


<div class="container-fluid">


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form method="POST" action="/addclient"> 
             @csrf

                <h4 class="card-title mb-4" >Ajouter Client</h4>
                

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="nom"
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                    <div class="col-md-10">
                        <input class="form-control" type="search" name="login"
                            id="example-search-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" name="mail" 
                            id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" name="password"
                            id="example-url-input">
                    </div>
                </div>
                
                
                <button type="submit" class="btn btn-dark mt-4 col-md-12">Ajouter</button>
                </form> 
                
            </div> 
            
        </div>
         
    </div>
</div> 



@endsection