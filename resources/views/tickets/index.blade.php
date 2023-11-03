@extends('layouts.template')

@section('title')
Tickets
@endsection

@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Tickets</h4>
        <h6>Bugs interne/externes</h6>
    </div>
    <div class="page-btn">
        <a class="btn btn-added" href="/tickets/add"><img src="{{asset('assets2/img/icons/plus.svg')}}" alt="img" class="me-1">Ajouter Ticket</a> &nbsp;&nbsp;&nbsp;
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
                                <th>Numero de Ticket</th>
                                <th>Nature</th>
                                <th>Sujet</th>
                                <th>Priorité</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)                               
                                <tr>  
                                    <td>{{$ticket->numero}}</td>
                                    <td>{{$ticket->nature}}</td>
                                    <td>{{$ticket->ticket_subject}}</td> 
                                    <td>
                                        @if ($ticket->status == 0)
                                            <span class="badges bg-lightgreen">Basse</span>
                                            @elseif ($ticket->status == 1)
                                                <span class="badges bg-lightyellow">Moyenne</span>
                                                @else
                                                    <span class="badges bg-lightred">Elevé</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a class="me-3" href="">
                                            <img src="{{asset('assets2/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#viewticket{{$ticket->id}}"  data-bs-placement="top" title="View ticket">
                                            <img src="{{asset('assets2/img/icons/eye.svg')}}" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteticket{{$ticket->id}}"  data-bs-placement="top" title="Delete ticket">
                                            <img src="{{asset('assets2/img/icons/delete.svg')}}" alt="img">
                                        </a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="viewticket{{$ticket->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" ticket="document">
                                      <div class="modal-content">
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title w-100 font-weight-bold">Voir Ticket</h4>
                                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p> Numéro de Ticket : <strong>{{$ticket->numero}}</strong></p>
                                                </div>
                                                <div class="col-6">
                                                    <p> Nature du Ticket : <strong>{{$ticket->nature}}</strong></p>
                                                </div>
                                            </div> <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p> Sujet du Ticket : <br>
                                                        <strong>
                                                            {{$ticket->ticket_subject}}
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p> Description : <br><strong>{{strip_tags($ticket->description)}}</strong></p>
                                                </div> 
                                            </div>  <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p> Priorité du Ticket :
                                                         <strong>
                                                            @if ($ticket->status == 0)
                                                            <span class="badges bg-lightgreen">Basse</span>
                                                                @elseif ($ticket->status == 1)
                                                                    <span class="badges bg-lightyellow">Moyenne</span>
                                                                    @else
                                                                        <span class="badges bg-lightred">Elevé</span>
                                                            @endif
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    @if (!empty($ticket->nom_projet))
                                                        <p> Projet Concerné : <strong>{{$ticket->nom_projet}}</strong></p>
                                                        @else
                                                            <p>Pas de projet concernée.</p> 
                                                    @endif                         
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="deleteticket{{$ticket->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" ticket="document">
                                      <div class="modal-content">
                                        <div class="modal-header text-center">
                                          <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
                                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                                <p class="text-center"> Confirmer la suppression du ticket numero {{$ticket->numero}}?</p>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <a href="/tickets/delete/{{$ticket->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
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