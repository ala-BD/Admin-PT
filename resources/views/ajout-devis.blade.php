@extends('theme')
@section('contenu')


                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form method="POST" action="/adddevis"> 
             @csrf
                                        <h4 class="card-title mb-4" >Ajouter Devis</h4>
                                        

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nom"
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-number-input" class="col-md-2 col-form-label">Sociéte</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-number-input" name="societe" > 
                                            </div>
                                         </div>   
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Téléphone</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="tel" name="tel"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="mail"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Texte Cible</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="textecible"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Nombres des motes</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" name="nbmots"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Commentaire</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="cmntr"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                        
                                        
                                        
                                        <button type="submit" class="btn btn-dark mt-4 col-md-12">Ajouter</button>
                                        </form> 
                                        

                                    </div>
                                </div>
                            </div> 
                        </div>

                        @endsection