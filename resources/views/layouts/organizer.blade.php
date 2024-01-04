@extends('layouts.app')

  @section('stylesheets')
    @parent
  @endsection

  @section('content')
  <form action="organizers" method="GET" role="search">
      {{ csrf_field() }}
      <div class="input-group">
          <input type="text" class="form-control" name="searchString"
              placeholder="Search organizers"> <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">
                      <span class="glyphicon glyphicon-search"></span>
                      Search
                  </button>
              </span>
      </div>
  </form>
  <div style="padding-top:50px;"></div>
  <h2 style="text-align: center; color: black; font-weight: bold">Organizers</h2>
  <div style="padding-top:20px;"></div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone number</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    @foreach($organizers->reverse() as $organizer)
    <tr>
      <th scope="row">{{$organizer->name}}</th>
      <td>{{$organizer->phone_number}}</td>
      <td>{{$organizer->city}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
    @parent

@endsection