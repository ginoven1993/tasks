@extends('layouts.template')

@section('title')
Profile
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Profile</h4>
        <h6>Utilisateurs</h6>
    </div>
   
</div>

<div class="card">
    <div class="card-body">
        <div class="profile-set">
            <div class="profile-head"></div>
            <div class="profile-top">
                <div class="profile-content">
                    <div class="profile-contentimg">
                        <img src="{{asset('assets2/avatars/'.$user->avatar)}}" alt="img" id="blah">
                        <div class="profileupload">
                        <input type="file" id="imgInp">
                        <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/edit-set.svg')}}" alt="img"></a>
                        </div>
                    </div>
                    <div class="profile-contentname">
                        <h2>{{$user->name}}</h2>
                        <h4>Mettre a jour votre photo et vos infos.</h4>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Sauvegarder</a>
                    <a href="javascript:void(0);" class="btn btn-cancel">Annuler</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                <label>Nom</label>
                <input type="text" name="name" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Numero de Télephone</label>
                    <input type="text" name="numero" value="{{$user->numero}}">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" name="adresse" value="{{$user->adresse}}">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Mot de Passe</label>
                    <div class="pass-group">
                        <input type="password" disabled name="password" value="{{($user->password)}}" class="pass-input">
                        <span class="fas toggle-password fa-eye-slash"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                    <label>Designation</label>
                    <div class="pass-group">
                        <input type="text" name="designation" value="{{$user->designation}}" class="pass-input">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection