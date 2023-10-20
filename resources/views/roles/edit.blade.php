@extends('layouts.template')

@section('title')
Ajouter Permission
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Ajouter/Modifier Permission</h4>
        <h6>Gestion Permission des Roles</h6>
    </div>
</div>
    
<div class="card">
    <div class="card-body">
        <div class="row">
            <form class="form-login" action="/roles/edit/{{ $roles->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nom du Role</label>
                            <input type="text" name="name" value="{{$roles->name}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="guard_name" value="{{$roles->guard_name}}">
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-submit me-2"><a>Modifier</a></button>
                    </div>
                </div>
            </form> 
          
          
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="productdetails product-respon">
                    <ul>
                            <li>  
                                <div class="input-checkset">
                                    <ul>
                                        <form class="form-login d-flex justify-content-center align-items-center" method="POST" action="/roles/{{ $roles->id }}/permissions" enctype="multipart/form-data" style="flex-direction: row">
                                            @csrf
                                                @foreach ($permissions as $permission)
                                                <li>
                                                    <label class="inputcheck">{{ $permission->name }}
                                                        <input type="checkbox" name="permission[]" value="{{ $permission->name }}">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                @endforeach
                                                
                                                    <div class="input-checkset">
                                                        <ul>
                                                            <li>
                                                                <label class="inputcheck">Tous
                                                                    <input type="checkbox" id="select-all" name="permission[]" value="all">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                               
                                                <button type="submit" class="btn btn-submit me-2"><a>Assigner</a></button>
                                        </form>  	
                                    </ul>     
                                </div>       
                            </li>
                    </ul>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection