@extends('layouts.app')

  @section('stylesheets')
    @parent
  @endsection

  @section('content')
  <form action="transports" method="GET" role="search">
      {{ csrf_field() }}
      <div class="input-group">
          <input type="text" class="form-control" name="searchString"
              placeholder="Search transports"> <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">
                      <span class="glyphicon glyphicon-search"></span>
                      Search
                  </button>
              </span>
      </div>
  </form>
  <div style="padding-top:50px;"></div>
  <h2 style="text-align: center; color: black; font-weight: bold">Transports</h2>
  <div style="padding-top:20px;"></div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Vehicle</th>
      <th scope="col">Company</th>
    </tr>
  </thead>
  <tbody>
    @foreach($transports->reverse() as $transport)
    <tr>
      <th scope="row">{{$transport->vehicle}}</th>
      <td>{{$transport->company_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
    @parent

@endsection