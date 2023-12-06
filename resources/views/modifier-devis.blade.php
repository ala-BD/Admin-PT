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

                <h4 class="card-title mb-4" >Modofier Devis</h4>
                <form method="POST" action="/modifdevis"> 
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data->id}}">

                                    <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="nom" value="{{$data->nom}}"
                                                    id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-number-input" class="col-md-2 col-form-label">Sociéte</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-number-input" name="societe" value="{{$data->societe}}"> 
                                            </div>
                                         </div>   
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Téléphone</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="tel" name="tel" value="{{$data->tel}}"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="mail" value="{{$data->mail}}"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Texte Cible</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="textecible" value="{{$data->textecible}}"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Nombres des motes</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="number" name="nbmots" value="{{$data->nbmots}}"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-date-input" class="col-md-2 col-form-label">Commentaire</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="cmntr" value="{{$data->cmntr}}"
                                                        id="example-date-input">
                                                </div>
                                            </div>
                
                <button type="submit" class="btn btn-dark mt-4 col-md-12">Modifier</button>

                

            </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>

@endsection