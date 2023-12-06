@extends('theme')
@section('contenu')


<div class="container-fluid">


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form method="POST" action="/addsupport"> 
             @csrf
                <h4 class="card-title mb-4" >Ajouter Support</h4>
                

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom et prénom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="nomdeclient"
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Sociéte</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="scte"
                            id="example-search-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Télephone</label>
                    <div class="col-md-10">
                        <input class="form-control" name="telephone" type="tel"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" name="email" type="email"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Text cible</label>
                    <div class="col-md-10">
                        <input class="form-control" name="textciblee" type="text"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">nombre des mots</label>
                    <div class="col-md-10">
                        <input class="form-control" name="nombredesmots" type="number"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Taches</label>
                    <div class="col-md-10">
                        <input class="form-control" name="taches" type="text"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Prix</label>
                    <div class="col-md-10">
                        <input class="form-control" name="prix" type="text" 
                            id="example-url-input">
                    </div>
                </div>
                
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" name="created_at"
                                id="example-date-input">
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Commentaire</label>
                    <div class="col-md-10">
                        <input class="form-control" name="commentaire" type="text"
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