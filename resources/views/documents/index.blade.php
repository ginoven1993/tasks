@extends('layouts.template')

@section('title')
Documents
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Documents</h4>
        <h6>Gestion des documents</h6>
    </div>
    <div class="page-btn">
        <a class="btn btn-added" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#adddoc"  data-bs-placement="top" title="Add projet">
            <img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Document
        </a> &nbsp;&nbsp;&nbsp;
    </div>
</div>

<div class="modal custom-modal fade" id="adddoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Ajouter un Document</h4>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">               
                    <div class="card-body">
                        <div class="row">
                            <form class="form-login" action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Nom du document</label>
                                            <input type="text" class="form-control" name="nom" placeholder="Nom Document" required>   
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label>Documents</label>
                                            <input type="file" class="form-control" name="documents" accept="" required>   
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
        <div class="row">
            @foreach ($documents as $document)   
                <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget">
                            <div class="dash-doc" style="width: 50%;">
                                @if($document->rights)                                  
                                    <a href="{{asset('assets2/documents/'.$document->documents) }}">Télécharger</a>
                                    <span> 
                                        <embed src="{{ asset('assets2/documents/'.$document->documents)}}" type="application/pdf" width="100%" height="100px" />
                                    </span>
                                    @else
                                   <span>Autorisation refusé pour le Document</span>
                                @endif
                            </div>
                            <div class="dash-widgetcontent">
                                <h4><strong>{{$document->nom}}</strong></h4>
                                @if (getAuth()->role == "superadmin") 
                                    <div class="row d-flex" >
                                        <div class="col-lg-3 col-sm-12 d-flex" style="flex-direction:row;width:50%;">
                                            <a class="me-3" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editdoc{{$document->id}}"  data-bs-placement="top" title="Edit doc">
                                                <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deletedoc{{$document->id}}"  data-bs-placement="top" title="Delete projet">
                                                <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>  
                                @endif                           
                            </div>

                            <div class="modal fade" id="editdoc{{$document->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" ticket="document">
                                  <div class="modal-content">
                                    <div class="modal-header text-center">
                                      <h4 class="modal-title w-100 font-weight-bold">Modifier accès</h4>
                                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">               
                                        <div class="card-body">
                                            <div class="row">
                                                <form class="form-login" action="/documents/update/{{$document->id}}" method="post" enctype="multipart/form-data">
                                                    @csrf                   
                                                        <div class="col-lg-12 col-sm-12 col-12">
                                                            <div class="form-group">
                                                                <label>Accèss au Fichier</label>
                                                                <select class="form-control form-white"  name="rights" required>
                                                                    <option disabled selected>Option d'accès</option>
                                                                    <option value="1">Téléchargeable</option>
                                                                    <option value="0">Non Téléchargeable</option>   
                                                                </select>  
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <a><button type="submit" class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
                                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> NON <i class="fas fa-paper-plane-o ml-1"></i></button>
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
            @endforeach
        </div>
    </div>
</div>

@endsection


