@extends('layouts.template')

@section('title')
Dashboard
@endsection

@section('content')

<div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget">
                <div class="dash-widgetimg">
                    <span><img src="{{asset('assets2/img/icons/dash1.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5><span class="counters" data-count="{{$projets}}">{{$projets}}</span></h5>
                    <h6>Projets</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash1">
                <div class="dash-widgetimg">
                    <span><img src="{{asset('assets2/img/icons/dash2.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5><span class="counters" data-count="{{$collabs}}">{{$collabs}}</span></h5>
                    <h6>Collaborateurs</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash2">
                <div class="dash-widgetimg">
                    <span><img src="{{asset('assets2/img/icons/dash3.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5><span class="counters" data-count="{{$tickets}}">{{$tickets}}</span></h5>
                    <h6> Tickets </h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="dash-widget dash3">
                <div class="dash-widgetimg">
                    <span><img src="{{asset('assets2/img/icons/dash4.svg')}}" alt="img"></span>
                </div>
                <div class="dash-widgetcontent">
                    <h5><span class="counters" data-count="{{$taches}}">{{$taches}}</span></h5>
                    <h6>Taches</h6>
                </div>
            </div>
        </div>
</div>

<div class="row">         
    <div class="col-lg-12 col-sm-12 col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Projets Récents Ajoutés</h4>
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
                    <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>Nom Projet</th>
                                        <th>Collaborateurs</th>
                                        <th>Durée du projet</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                  
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>    
                                            </tr>
                                        
                                   
                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection