@extends('template')

@section('content')
<style media="screen">
  .card img {
    height: 45px !important;
  }
</style>
  <form class="" action="index.html" method="post">
    <div class="row">
      @foreach($active_icos as $ico)
      <div class="col-lg-3 col-md-3 col-sm-12">

        <div class="card">
          <div class="card-header" data-background-color="blue">
            <!-- <h5>{{ $ico->ico_name }}</h5> -->
            <img src="{{ URL::asset('storage')}}/{{ $ico->logo}}" height="45px" alt="">
          </div>
          <div class="card-content">
            <p>ICO Launch: {{ $ico->launch_date}}</p>
            <p>Site: <a href="{{$ico->web_url}}">{{$ico->web_url}}</a></p>
            <p>ICO Range: ${{ $ico->pre_ico_price }},  ${{ $ico->round_3_price }},   ${{ $ico->round_4_price }},  ${{ $ico->round_5_price }},  ${{ $ico->round_6_price }}</p>
            <p>First Stike Price: {{$ico->first_strike_price}}</p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn" name="button">View Details</button>
            <button type="button" class="btn" name="button">Invest</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header" data-background-color="blue">
            <h4>Available Balance for Investments</h4>
          </div>
          <div class="card-content">
            <h4>$12,500</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header" data-background-color="green">
            <h4>Profit YTD</h4>
          </div>
          <div class="card-content">
            <h4>$252,000</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-header" data-background-color="orange">
            <h4>Daily Interest</h4>
          </div>
          <div class="card-content">
            <h4>$2,500</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card col-lg-12 col-md-12 col-sm-12">
        <div class="card-content table-responsive">
          <h3>Active Investments</h3>
          <table class="table">
            <thead class="text-warning">
              <tr>
                <th>Name</th>
                <th>Amount Invested</th>
                <th>First Strike Return</th>
                <th>Second Strike Return</th>
                <th>Third Strike Return</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Chrysos</td>
                <td>$300</td>
                <td>$3500</td>
                <td>$4200</td>
                <td>$5800</td>
              </tr>
            </tbody>
            <tr>

            </tr>
          </table>
        </div>

      </div>
    </div>

  </form>
  <div class="col-md-12" style="margin-top:100px">
      {{ $active_icos}}
  </div>
@endsection
