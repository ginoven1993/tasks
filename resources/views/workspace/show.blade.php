@extends('layouts.template')

@section('title')
Détails Projets
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Détails du Projet</h4>
        <h6>Voir Projet</h6>
    </div>
</div>

<div class="row">       
    <div class="col-lg-12 col-sm-12 col-12 d-flex">
        <div class="card flex-fill" style="box-shadow: rgba(77, 77, 84, 0.2) 0px 7px 29px 0px;padding: 1rem;">
                <div class="row mb-5">
                    <div class="col-lg-3 col-sm-12">
                         <h6><strong>Nom du Projet</strong></h6>
                         <p>{{$projets->nom_projet}}</p>
                    </div> <br>
                    <div class="col-lg-3 col-sm-12">
                        <h6><strong>Date de début</strong></h6>
                        <p>{{$projets->date_debut}}</p>
                   </div>
                   <div class="col-lg-3 col-sm-12">
                        <h6><strong>Status</strong></h6>
                        @if ($projets->status == 0 )
                            <span class="badges bg-lightred">En Attente</span>
                            @elseif (($projets->status == 1 ))
                                <span class="badges bg-lightyellow">En Progression</span>
                                @else
                                    <span class="badges bg-lightgreen">Achevé</span>
                        @endif                 
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <a class="me-3" href="">
                            <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                        </a>
                        <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteprojet"  data-bs-placement="top" title="Delete projet">
                            <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                        </a>
                   </div>

                </div>
                <div class="row mb-5">
                    <div class="col-lg-4 col-sm-12">
                        <h6><strong>Description du Projet</strong></h6>
                        <p>{{strip_tags($projets->description)}}</p>
                   </div>
                   <div class="col-lg-4 col-sm-12">
                        <h6><strong>Date de fin</strong></h6>
                        <p>{{$projets->date_fin}}</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h6><strong>Manager du Projet</strong></h6>
                        <p>{{$projets->manager}}</p>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="row">       
    <div class="col-lg-4 col-sm-12 col-12 d-flex">
        <div class="card flex-fill" style="box-shadow: rgba(77, 77, 84, 0.2) 0px 7px 29px 0px;">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Les Membres de l'équipe</h4>
            </div> <hr>
            <div class="card-body">  
                    <div class="profile-top d-flex justify-content-evenly" style="flex-direction: row;">
                        @foreach ($details as $detail)
                            <div class="profile-content">
                                <div class="profile-contentimg">
                                    <img width="90"  src="{{asset('assets2/avatars/'.$detail->collab_avatar)}}" alt="img" id="blah">
                                </div>
                                <div class="profile-contentname d-flex justify-content-center">
                                    <h6>{{$detail->collab_name}}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12 col-12 d-flex">
        <div class="card flex-fill" style="box-shadow: rgba(77, 77, 84, 0.2) 0px 7px 29px 0px;">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Les Taches</h4>
                <div class="page-header">
                    <div class="page-btn">
                        <a class="btn btn-added" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addtask" data-bs-placement="top" title="Add task">
                            <img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Nouvelle Tache
                        </a>
                    </div>
                </div>
            </div> <hr> 

            <div class="modal custom-modal fade" id="addtask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Ajouter une Tache</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">               
                                <div class="card-body">
                                    <div class="row">
                                        <form class="form-login" action="{{route('taches.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf                   
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Taches</label>
                                                        <input type="text" class="form-control" name="nom_tache" placeholder="Le Nom de la tache" required>   
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" name="description" id="" cols="3" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label>Durée</label>
                                                            <input type="number" class="form-control" name="duree" placeholder="En Chiffre" required>   
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label>Temps en </label>
                                                            <select class="form-control form-white"  name="temps" required>
                                                                <option value="Jours">Jours</option>
                                                                <option value="Semaine">Semaine</option>
                                                                <option value="Mois">Mois</option>
                                                                <option value="Année">Année</option>
                                                            </select>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control form-white" data-placeholder="Status" name="status" required>
                                                            <option value="0">En Attente</option>
                                                            <option value="1">En Progression</option>
                                                            <option value="2">Effectué</option>
                                                        </select>
                                                    </div>
                                                </div>    
                                                <input type="hidden" name="projet_id" value="{{ $projets->id }}">                                    
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

            <div class="card-body"> 
                <div class="table-responsive dataview">
                    <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>Taches</th>
                                        <th>Description</th>
                                        <th>Durée</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taches as $tache)     
                                        <tr>
                                            <td>{{$tache->nom_tache}}</td>
                                            <td>{{$tache->description}}</td>
                                            <td>{{$tache->duree}} {{$tache->temps}}</td>
                                            <td> 
                                                <a class="me-3" href="">
                                                    <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edittask"  data-bs-placement="top" title="Edit task">
                                                    <img src="{{asset('assets2/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deletetask"  data-bs-placement="top" title="Delete task">
                                                    <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                  
                                </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="row">       
    <div class="col-lg-12 col-sm-12 col-12 d-flex">
        <div class="card flex-fill" style="box-shadow: rgba(77, 77, 84, 0.2) 0px 7px 29px 0px;">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Progression/Timesheet</h4>
                <div class="page-header">
                    <div class="page-btn">
                        <a class="btn btn-added" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addsheet"  data-bs-placement="top" title="Add task">
                            <img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Timesheet
                        </a>
                    </div>
                </div>
            </div> <hr> 

            <div class="card-body"> 
                <div class="row">
                    @foreach ($productivity as $prod)
                        <div class="productivity">
                            <h5 class="d-flex align-items-center"><img width="40"  src="{{asset('assets2/avatars/'.$prod->avatar)}}" alt="img" id="blah">
                                <strong>&nbsp; {{$prod->name}} [{{$prod->nom_tache}}]</strong> 
                            </h5>
                            <div class="time">
                            <p style="color: blue"><img src="{{asset('assets2/img/icons/users1.svg')}}"> {{$prod->date}} &nbsp;&nbsp;<span><img src="{{asset('assets2/img/icons/time.svg')}}"> Début: {{$prod->heure_debut}} | Fin: {{$prod->heure_fin}}</span> </p>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#" class="dropdown-item">Modifier</a></li>
                                    <li><a href="#" class="dropdown-item">Supprimer</a></li>
                                </ul>
                            </div>
                            </div> 
                            <p>{{strip_tags($prod->description)}}</p>  
                                        
                        </div> <hr> <hr>
                    @endforeach                  
                </div>   
            </div> 

            <div class="modal custom-modal fade" id="addsheet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Nouveau Timesheet</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">               
                                <div class="card-body">
                                    <div class="row">
                                        <form class="form-login" action="{{route('timesheets.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf                   
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Taches</label>
                                                        <select class="form-control form-white"  name="tache_id" required>
                                                            <option disabled selected>Choisir la tache Concernée</option>
                                                                @foreach ($taches as $tach)
                                                                    <option value="{{$tach->id}}">{{$tach->nom_tache}}</option>
                                                                @endforeach
                                                        </select>  
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <label>Sujet</label>
                                                        <input type="text" class="form-control" name="sujet" required>   
                                                    </div>
                                                </div>
                                               
                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <input type="date" class="form-control" name="date" placeholder="YYYY-MM-DD" required>   
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Heure de Début</label>
                                                                <input type="time" class="form-control" name="heure_debut" required>   
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Heure de Fin</label>
                                                                <input type="time" class="form-control" name="heure_fin" required>   
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label>Description de la progression/Timesheet</label>
                                                            <textarea id="summernote" name="description" cols="" rows="" required></textarea>
                                                    </div>
                                                    <input type="hidden" name="projet_id" value="{{ $projets->id }}">                                                                            
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

        </div>
    </div>
</div>


@endsection