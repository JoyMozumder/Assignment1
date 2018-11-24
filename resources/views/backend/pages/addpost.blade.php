@extends('backend.layouts.layout')
@section('abc')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Forms</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Form Example</div>
            <div class="card-body">
              <form method="post" action="{{ URL::to('store' )}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="inputAddress">Tittle</label>
                  <input type="text" class="form-control" name="tittle" placeholder="">
                </div>
                <div class="form-group">
        				  <label for="exampleFormControlTextarea1">Description</label>
        				  <textarea class="form-control rounded-0" name="description" rows="10"></textarea>
        				</div>
              <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>
          </div>
        </div>
@stop