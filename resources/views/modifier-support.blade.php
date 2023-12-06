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
<!-- value="{{$data->id}}" -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-4" >Modifier Support</h4>
                <form method="POST" action="/modifsupport"> 
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data->id}}">

                                    <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom et prénom</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="nomdeclient" value="{{$data->nomdeclient}}"
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-search-input" class="col-md-2 col-form-label">Sociéte</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="scte" value="{{$data->scte}}"
                            id="example-search-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Télephone</label>
                    <div class="col-md-10">
                        <input class="form-control" name="telephone" type="tel" value="{{$data->telephone}}"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" name="email" type="email" value="{{$data->email}}"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Text cible</label>
                    <div class="col-md-10">
                        <input class="form-control" name="textciblee" type="text" value="{{$data->textciblee}}"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">nombre des mots</label>
                    <div class="col-md-10">
                        <input class="form-control" name="nombredesmots" type="number" value="{{$data->nombredesmots}}"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Taches</label>
                    <div class="col-md-10">
                        <input class="form-control" name="taches" type="text" value="{{$data->taches}}"
                            id="example-url-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Prix</label>
                    <div class="col-md-10">
                        <input class="form-control" name="prix" type="text" value="{{$data->prix}}"
                            id="example-url-input">
                    </div>
                </div>
                
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" name="created_at" value="{{$data->created_at}}"
                                id="example-date-input">
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                    <label for="example-url-input" class="col-md-2 col-form-label">Commentaire</label>
                    <div class="col-md-10">
                        <input class="form-control" name="commentaire" type="text" value="{{$data->commentaire}}"
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