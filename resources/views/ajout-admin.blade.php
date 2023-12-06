@extends('theme')
@section('contenu')
<div class="container-fluid">

                     

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form method="POST" action="/addadmin"> 
                                    @csrf

                                        <h4 class="card-title mb-4" >Ajouter Admin</h4>
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" 
                                                    id="example-text-input" name="nom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Login</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="login" 
                                                    id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email"  
                                                    id="example-email-input" name="mail">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-url-input" class="col-md-2 col-form-label">Password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password" 
                                                    id="example-url-input" name="password">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-dark mt-4 col-md-12">Ajouter</button>

                                        

                                    </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
            </div>

@endsection