@extends('layouts.template')

@section('title')
Details Roles
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Details Autorisations</h4>
        <h6>Roles/Permissions</h6>
    </div>
   
</div>
    
<div class="card">
    <div class="card-body">
        <div class="row">
            
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Role</label>
                        <input disabled type="text" placeholder="{{$roles->name}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input disabled type="text" placeholder="{{$roles->guard_name}}">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group uploadedimage">
                        <label> Permissions</label>
                        <div class="image-upload image-upload-new">
                            <div class="image-uploads">
                                @if ($roles->permissions)
                                        @foreach ($roles->permissions as $role_permission)
                                  <form class="" method="POST" action="/roles/{{ $roles->id }}/permissions/{{ $role_permission->id }}" enctype="multipart/form-data" style="display: flex;justiy-content: space-between;flex-direction: column;" >
                                    @csrf
                                    <div class="foot d-flex justify-content-center">
                                      <div class="modal-footer d-flex justify-content-center">
                                        @method('DELETE')
                                        <button type="submit">{{ $role_permission->name }}<a data-bs-toggle="modal" data-bs-target="#deletepermission{{$role_permission->id}}" class="hideset">x</a></button>
                                      </div>
                                    </div>
                                  </form>	
                                  
                                  @endforeach
                              @endif
                            </div>
                        </div>
                    </div>
                </div>
               
               
        </div>

           

    </div>
</div>

@endsection