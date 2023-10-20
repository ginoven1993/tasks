@extends('layouts.template')

@section('title')
Ajouter Permission
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Gestion Permission</h4>
        <h6>Ajouter/Modifier Permission</h6>
    </div>
</div>
    
<div class="card">
    <div class="card-body">
        <div class="row">
            <form class="form-login" action="/permissions/store" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nom de la permission</label>
                            <input type="text" name="name" placeholder="Entrer la permission">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="guard_name" placeholder="Description">
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2"><a>Ajouter</a></button>
                        <button type="button" class="btn btn-cancel"><a href="/admin/roles" class="btn-cancel" >Annuler</a></button>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection