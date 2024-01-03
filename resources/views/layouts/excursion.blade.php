@extends('layouts.app')

  @section('stylesheets')
    @parent
  @endsection

  @section('content')
  <form action="excursions" method="GET" role="search">
      {{ csrf_field() }}
      <div class="input-group">
          <input type="text" class="form-control" name="searchString"
              placeholder="Search excursions"> <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">
                      <span class="glyphicon glyphicon-search"></span>
                      Search
                  </button>
              </span>
      </div>
  </form>
  <div style="padding-top:50px;"></div>
  <h2 style="text-align: center; color: black; font-weight: bold">Excursions</h2>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Start</th>
      <th scope="col">Duration in days</th>
      <th scope="col">Organizers</th>
      <th scope="col">Types of transport</th>
    </tr>
  </thead>
  <tbody>
    @foreach($excursions->reverse() as $excursion)
    <tr>
      <th scope="row">{{$excursion->name}}</th>
      <td>{!!$excursion->start!!}</td>
      <td>{{$excursion->duration_in_days}}</td>
      <td>
        @foreach($excursion->organizers as $organizer)
          {{ $organizer->name }} |
        @endforeach
      </td>
      <td>
        @foreach($excursion->transports as $transport)
          {{ $transport->vehicle }} |
        @endforeach
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
    @parent

@endsection