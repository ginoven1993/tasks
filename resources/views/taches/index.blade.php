@extends('layouts.template')

@section('title')
Taches
@endsection

@section('content')
<div class="row">
           
    <div class="col-lg-12 col-sm-12 col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Les Taches</h4>
                <div class="dropdown">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a href="#" class="dropdown-item">Liste des Projets Récents</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Ajouter projet</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive dataview">
                    <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom Projet</th>
                                        <th>Nom Tache</th>
                                        <th>Date Début de Projet</th>
                                        <th>Date Fin de Projet</th>
                                        <th>Status Projet</th>
                                        <th>Status Tache</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taches as $tache)
                                        <tr>
                                            <td>{{$tache->id}}</td>
                                            <td> {{$tache->nom_projet}}</td>
                                            <td> {{$tache->nom_tache}}</td>
                                            <td>{{$tache->date_debut}}</td>
                                            <td> {{$tache->date_fin}} </td>
                                            <td> 
                                                @if ($tache->projet_statut == 0 )
                                                    <span class="badges bg-lightyellow">En Attente</span>
                                                        @elseif (($tache->projet_statut == 1 ))
                                                            <span class="badges bg-lightred">En Progression</span>
                                                                @else
                                                                    <span class="badges bg-lightgreen">Terminé</span>
                                                @endif 
                                            </td>
                                            <td> 
                                                @if ($tache->status == 0 )
                                                <span class="badges bg-lightyellow">En Attente</span>
                                                    @elseif (($tache->status == 1 ))
                                                        <span class="badges bg-lightred">En Progression</span>
                                                            @else
                                                                <span class="badges bg-lightgreen">Terminé</span>
                                                @endif  
                                            </td>
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
@endsection