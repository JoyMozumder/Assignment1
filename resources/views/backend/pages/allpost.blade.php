@extends('backend.layouts.layout')
@section('abc')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All posts</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Tittle</th>
                      <th>Description</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Tittle</th>
                      <th>Description</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@if(count($data)>0)
        			  @foreach($data as $d)
	                    <tr>
	                      <td>{{ $d->id }}</td>
	                      <td>{{ $d->tittle }}</td>
	                      <td>{{ $d->description }}</td>
	                    </tr>
                      @endforeach
                     @else
                         @endif
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          
        </div>
@endsection