@extends('layouts.template')

@section('title')
Ajouter Ticket
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Gestion Tickets</h4>
        <h6>Ajouter/Modifier Ticket</h6>
    </div>
    <div class="page-btn">
        <a class="btn btn-added" href="/tickets"><img src="{{asset('assets2/img/icons/return1.svg')}}" alt="img" class="me-1">Arrière</a> &nbsp;&nbsp;&nbsp;
    </div>
</div>



<div class="card">
    <div class="card-body">
        <div class="row">
            <form class="form-login" action="{{route('tickets.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Numero du Ticket</label>
                            <input type="text" name="numero" value="<?= getRamdomText(5) ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Projet</label>
                            <select class="form-control form-white"  name="projet_id">
                                <option disabled selected>Selectionner le projet</option>   
                                @foreach ($projets as $proj)
                                    <option value="{{$proj->id}}">{{$proj->nom_projet}}</option>
                                @endforeach                           
                            </select>                          
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nature</label>
                            <select class="form-control form-white"  name="nature" required>
                                <option value="Interne">Interne</option>
                                <option value="Externe">Externe</option>                              
                            </select>                          
                        </div>
                    </div> 
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Sujet du Ticket</label>
                            <input type="text" name="ticket_subject" placeholder="Sujet du ticket">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Priorité</label>
                        <select class="form-control form-white"  name="status" required>
                            <option value="0">Basse</option>
                            <option value="1">Moyenne</option>
                            <option value="2">Elevé</option>                              
                        </select>                          
                    </div>
                </div>
                      
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="summernote" name="description" cols="1" rows="0" required></textarea>
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2"><a>Ajouter</a></button>
                        <button type="button" class="btn btn-cancel"><a href="/roles" class="btn-cancel" >Annuler</a></button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection