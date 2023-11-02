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
    
                <div class="col-lg-5 col-sm-6 col-12">
                   
                        <div class="dash-widget">
                            <div class="dash-doc" style="width: 50%;">
                                @if($document->rights)
                                   
                                    <a href="{{asset('storage/app/documents/'.$document->documents) }}" download>Télécharger</a>
                                    <span style="color: #fff;"> 
                                        <embed src="{{ asset('storage/app/documents/'.$document->documents) }}" type="application/pdf" width="100%" height="100px" />
                                    </span>
                                    @else
                                   <span>No Documents</span>
                                @endif
                            </div>
                            <div class="dash-widgetcontent">
                                <h4><strong>{{$document->nom}}</strong></h4>
                            </div>
                        </div> 
                    </a> 

                </div>  
            @endforeach
        </div>
    </div>
</div>

@endsection


