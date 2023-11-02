@extends('layouts.template')

@section('title')
Workspace
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Projets</h4>
        <h6>Gestion projets</h6>
    </div>
    <div class="page-btn">
        <a class="btn btn-added" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addprojet"  data-bs-placement="top" title="Add projet">
            <img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Projet
        </a> &nbsp;&nbsp;&nbsp;
    </div>
</div>

<div class="modal custom-modal fade" id="addprojet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Ajouter un Projet</h4>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">               
                    <div class="card-body">
                        <div class="row">
                            <form class="form-login" action="{{route('projets.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Nom Projet</label>
                                            <input type="text" class="form-control" name="nom_projet" placeholder="Nom Projet" required>   
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="form-control form-white" data-placeholder="Collabateur" name="categories">
                                                <option disabled selected>Choisir la categorie</option>
                                                <option value="Application Web">Application Web</option>
                                                <option value="Site Vitrine">Site Vitrine</option>
                                                <option value="Maquette">Maquette</option>
                                                <option value="Site Web">Site Web</option>
                                                <option value="Application Android & Ios">Application Android & Ios</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Date de Début</label>
                                            <input type="date" class="form-control" name="date_debut" placeholder="YYYY-MM-DD" required>   
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Date de Fin</label>
                                            <input type="date" class="form-control" name="date_fin" placeholder="YYYY-MM-DD" required>   
                                        </div>
                                    </div>   
                                </div>   
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Manager du Projet</label>
                                        <select class="form-control form-white" name="manager">
                                            <option disabled selected></option>
                                                @foreach ($users as $user)
                                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                                @endforeach  
                                        </select>
                                    </div>
                                </div>                                       
                                <div class="col-lg-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="d-block">Membres de la Team:</label>
                                            <div class="card">
                                                <div class="form-check form-check-inline d-flex">
                                                    @foreach ($collabs as $collab)                                               
                                                        <input class="form-check-input" type="checkbox" name="collab_id[]" id="collab" value="{{$collab->id}}">&nbsp;
                                                        <label class="form-check-label" for="collab">{{$collab->name}}</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    @endforeach  
                                                </div>
                                            </div>     
                                        </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="summernote" cols="" rows="5"></textarea>
                                        {{-- <div id="summernote"></div> --}}
                                    </div>
                                </div>                                          
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-submit me-2">Ajouter</button>
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-cancel">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>                              
            </div>    
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            @foreach ($projets as $projet)
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="/projets/show/{{$projet->id}}">
                        <div class="dash-widget">
                            <div class="dash-widgetimg">
                                <span style="color: #fff;">{{$projet->id}}</span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h4><strong>{{$projet->nom_projet}}</strong></h4>
                                <h6><span>{{strip_tags($projet->description)}}</span></h6>
                            </div>
                        </div> 
                    </a>      
                </div>  
            @endforeach
        </div>
    </div>
</div>

@endsection


