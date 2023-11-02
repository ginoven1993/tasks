@extends('layouts.template')

@section('title')
Collaborateurs
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Collaborateurs</h4>
        <h6>Gestion des collaborateurs</h6>
    </div>
   
    <div class="page-btn">
        <a class="btn btn-added" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addcollab"  data-bs-placement="top" title="Add Collab">
            <img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Collaborateur
        </a> &nbsp;&nbsp;&nbsp;
    </div>
</div>

        <div class="modal custom-modal fade" id="addcollab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Créer un Collaborateur</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <form class="form-login" action="{{route('collaborateurs.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="col-lg-12 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Nom/Identifiant</label>
                                                <input type="text" name="name" placeholder="Entrer le nom du collaborateur" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="xxx@gmail.com" required>   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Designation</label>
                                                    <select class="form-control form-white" data-placeholder="Collabateur" name="designation">
                                                            <option disabled selected>Choisir la designation ? </option>
                                                            <option value="Developpeur Web">Developpeur Web </option>
                                                            <option value="Developpeur Mobile">Developpeur Mobile</option>
                                                            <option value="Designer Graphiste">Designer Graphiste</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Numéro de télephone</label>
                                                    <input type="number" class="form-control" name="numero" placeholder="XX XX XX XX">   
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input type="text" class="form-control" name="adresse" placeholder="Attiégou">   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Mot de Passe</label>
                                                    <div class="pass-group">
                                                        <input type="password" class="form-control pass-input" name="password" placeholder="XX XX XX XX" required>
                                                        <span class="fas toggle-password fa-eye-slash"></span> 
                                                    </div>      
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label>Confirmer Mot de passe</label>
                                                    <input type="password" class="form-control pass-input" name="c_password" placeholder="XX XX XX XX" required>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label>Role</label>
                                                    <select class="form-control form-small select" name="role">
                                                        @foreach ($roles as $role)
                                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                                        @endforeach    
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <div class="profile-top">
                                                <div class="profile-content">
                                                    <div class="profile-contentimg d-flex justify-content-center align-items-center" style="height:120px;">
                                                        <img width="100" height="70" src="{{asset('assets2/img/avatar2.jpg')}}" alt="img" id="blah">
                                                        <div class="profileupload">
                                                            <input type="file" name="avatar" id="imgInp" accept="image/*">
                                                            <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/edit-set.svg')}}" alt="img"></a>
                                                        </div>
                                                    </div>   
                                                </div>
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
            <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{asset('assets2/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>

                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('assets2/img/icons/pdf.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('assets2/img/icons/excel.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('assets2/img/icons/printer.svg')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
            </div>

            <div class="table-responsive">
                <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Avatar</th>
                                <th>Nom Complet</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collabs as $collab)                          
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td> 
                                        <div class="avatar avatar-lg">
                                            <img class="avatar-img rounded-circle" alt="Collab_Image" src="{{asset('assets2/avatars/'.$collab->avatar)}}">
                                        </div>
                                    </td>
                                    <td>{{$collab->name}}</td>
                                    <td>{{$collab->email}}</td>
                                    <td>{{$collab->role}}</td>
                                    <td>
                                        @if ($collab->status == 0 )
                                            <span class="badges bg-lightgreen">Disponible</span>
                                        @else
                                            <span class="badges bg-lightred">Indisponible</span>
                                        @endif                                       
                                    </td>
                                    <td class="text-center">
                                        <a class="me-3" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editCollab{{$collab->id}}"  data-bs-placement="top" title="Edit collaborateur">
                                            <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteCollab{{$collab->id}}"  data-bs-placement="top" title="Delete collaborateur">
                                            <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                                        </a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="editCollab{{$collab->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Editer un Collaborateur</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <form class="form-login" action="/collaborateurs/edit/{{$collab->id}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                                <div class="col-lg-12 col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <label>Nom Complet</label>
                                                                        <input type="text" value="{{$collab->name}}" name="name" required>
                                                                    </div>
                                                                </div>
                                                            
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-sm-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="email" value="{{$collab->email}}" class="form-control" name="email" required>   
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-sm-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>Mot de passe</label>
                                                                            <input type="password" value="{{$collab->password}}" class="form-control" name="password" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label>Role</label>
                                                                            <select class="form-control form-small select" name="role">
                                                                                <option disabled value="{{$collab->role}}">{{$collab->role}}</option>
                                                                                @foreach ($roles as $role)
                                                                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                                                                @endforeach    
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-sm-6 col-12">
                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <select class="form-control form-small select" name="status">
                                                                            <option value="0">Disponible</option>
                                                                            <option value="1">Indisponible</option>  
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 d-flex justify-content-center">
                                                                    <button type="submit" class="btn btn-submit me-2">Modifier</button>
                                                                    <button type="button" class="btn btn-cancel">Annuler</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade" id="deleteCollab{{$collab->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
                                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>

                                            <p class="text-center"> Confirmer la suppression du collaborateur {{$collab->name}} ?</p>
                                          
                                            <div class="modal-footer d-flex justify-content-center">
                                                <a href="/collaborateurs/delete/{{$collab->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> NON <i class="fas fa-paper-plane-o ml-1"></i></button>
                                            </div>
                                      
                                      </div>
                                    </div>
                                </div>

                            @endforeach
                        </tbody> 
                </table>
            </div>

    </div>
</div>

@endsection