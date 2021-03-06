@extends('layouts.frontend')
@section('title')
Agent Contracts
@stop
@section('header')
    <div class="content-header row">
    <div class="content-header col-md-6 col-12 mb-1">
      <h3 class="content-header-title"><strong>Contracts under "{{$agent->name}}"</strong></h3>
    </div>
    <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
          </li>
          <li class="breadcrumb-item"><a href="{{route('agents')}}">Agents</a>
          </li>
          <li class="breadcrumb-item"><a href="{{route('agent.business',['id'=>$agent->id])}}">Agent Buisness</a></li>
          <li class="breadcrumb-item">Agent's contracts</li>
        </ol>
      </div>
    </div>
  </div>
@stop
@section('content')
	<div class="content-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content collapse show">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                    <a href="{{route('agent.contracts',['id'=>$agent->id])}}"> 
                    <div class="my-1 text-center"> 
                      <div class="card-header mb-2 pt-0">
                        <h5 class="info">Total Contracts</h5>
                        <h3 class="font-large-2 text-bold-200">{{$total}}
                        </h3>
                      </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                  <a href="{{route('active_c',['id'=>$agent->id])}}">
                    <div class="my-1 text-center">  
                      <div class="card-header mb-2 pt-0">
                        <h5 class="success">Active Contracts</h5>
                        <h3 class="font-large-2 text-bold-200">{{$agent->active_c}}
                        </h3>
                      </div>
                    </div>
                  </a>
                </div>
                
                
                <div class="col-xl-2 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                  <a href="{{route('expired_c',['id'=>$agent->id])}}">
                    <div class="my-1 text-center">
                        
                      <div class="card-header mb-2 pt-0">
                        <h5 class="danger">Expired Contracts</h5>
                        <h3 class="font-large-2 text-bold-200">{{$agent->expired_c}}
                        </h3>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                  <a href="{{route('declined_c',['id'=>$agent->id])}}">
                    <div class="my-1 text-center">
                        
                      <div class="card-header mb-2 pt-0">
                        <h5 class="danger">Declined contracts</h5>
                        <h3 class="font-large-2 text-bold-200">{{$agent->declined_c}}
                        </h3>
                      </div>
                      
                    </div>
                  </a>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                  <a href="{{route('signed_c',['id'=>$agent->id])}}">
                    <div class="my-1 text-center">
                        
                      <div class="card-header mb-2 pt-0">
                        <h5 class="success">Signed Contracts</h5>
                        <h3 class="font-large-2 text-bold-200">{{$agent->signed_c}}
                        </h3>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
                
                
            
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content collapse show">
            <div class="row">
              <div class="table-responsive">
               <table class="table table-hover mb-0">
                  <thead>
                    <tr>
                      <th>Sno.</th>
                      <th>
                        Agent
                      </th>
                      <th>
                        Percentage
                      </th>
                      <th>
                        Start Date
                      </th>
                      <th>
                        End Date
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                    </thead>
                  <tbody>
                    @if($contracts->count()>0)
                    <?php $i = 1;?>
                      @foreach($contracts as $contract)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{$contract->agent->name}}</a></td>
                          <td>{{$contract->percentage."%"}}</td>
                          <td>{{$contract->start_date}}</td>
                          <td>{{$contract->end_date}}</td>
                         <td>
                           @if($contract->active == 'yes')
                            @if($contract->signed == 'no')
                              <div class="info">{{"Active"}}</div>
                            @else
                              <div class="success">{{"Signed"}}</div>
                            @endif
                           @elseif($contract->declined == 'yes')
                            <div class="danger">{{'Declined'}}</div>
                           @elseif($contract->expired == 'yes')
                            <div class="danger">{{"Expired"}}</div>
                           @endif
                         </td>
                          <td>
                            <a href="{{route('contract.delete',['id'=>$contract->id])}}" class="btn btn-sm btn-danger">Delete</a>
                            <a href="{{route('contract.details',['id'=>$contract->id])}}" class="btn btn-sm btn-success">view</a>
                            <a href="{{route('contract.edit',['id'=>$contract->id])}}" class="btn btn-sm btn-info">Edit</a>
                         </td>
                      </tr>
                      @endforeach
                      @else
                        <tr>
                          <th colspan="5" class="text-center">No Contracts!!</th>
                        </tr>
                      @endif
                  </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>

	</div>

@stop