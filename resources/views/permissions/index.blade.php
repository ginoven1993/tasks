@extends('layouts.template')

@section('title')
Permissions
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Roles et Permissions</h4>
        <h6>Gestion des autorisations</h6>
    </div>
    <div class="page-btn">
        <a class="btn btn-added" href="/permissions/add"><img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Permission</a> &nbsp;&nbsp;&nbsp;
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
                                <th>Permissions</th>
                                <th>description</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>{{$permission->name}} </td>
                                    <td>{{$permission->guard_name}}</td>
                                    <td>
                                        <span class="badges bg-lightgreen">Active</span>
                                    </td>
                                    <td class="text-end">
                                        <a class="me-3" href="/permissions/edit/{{$permission->id}}">
                                            <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        {{-- <a class="me-3" href="/admin/permissions/permissions/{{$permission->id}}">
                                            <img src="{{asset('assets/img/icons/eye.svg')}}" alt="img">
                                        </a> --}}
                                        <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deletepermission{{$permission->id}}"  data-bs-placement="top" title="Delete permission">
                                            <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                                        </a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="deletepermission{{$permission->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
                                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                                <p class="text-center"> Confirmer la suppression du permission {{$permission->name}} ?</p>
                                          
                                            <div class="modal-footer d-flex justify-content-center">
                                                <a href="/permissions/delete/{{$permission->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
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