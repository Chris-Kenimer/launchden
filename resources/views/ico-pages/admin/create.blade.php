@extends('template')

@section('content')
  <form class="" action="index.html" method="post">
  <div class="col-sm-12">

    <div class="card">
      <div class="card-header" data-background-color="orange">
        <h4>Initial Coin Offering Details</h4>
      </div>
      <div class="card-content">
        <div class="col-sm-6">

          <div class="form-group ">
            <label class="control-label">ICO Name</label>
            <input type="text" name="" class="form-control" value="Chrysos">
          </div>
          <div class="form-group">
            <label class="control-label">Website</label>
            <input type="text" name="" class="form-control" value="https://Chrysos.com">
          </div>
          <div class="form-group ">
            <label class="control-label">ICO Launch Date</label>
            <input type="date" name="" class="form-control" value="$300">
          </div>
          <div class="form-group ">
            <label class="control-label">Type</label>
            <select class="form-control" name="">
              <option value="">Lending</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="col-sm-12">

              <img class="card-img-top" src="{{ URL::asset('img/Chrysos.png') }}" alt="">
              <div class="card-body">
                <h4 class="card-title">Upload Logo</h4>
                <p class="card-text">Upload Logo of at least 150px x 150px</p>
              </div>
              <div class="card-footer">
                <input id="input-b1" name="input-b1" type="file" class="file">

              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <input type="radio"  name="" value="Active"> Active
            <input type="radio"  name="" value="Inactive"> Inactive
            <button type="button" class="btn btn-success" name="button">Save</button>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header" data-background-color="green">
        ICO Rounds
      </div>
      <div class="card-content">
        <div class="form-group">
          <label class="control-label">Pre-ICO</label>
          <input type="text" name="" class="form-control" value="$0.50">
        </div>
        <div class="form-group">
          <label class="control-label">Round 1</label>
          <input type="text" name="" class="form-control" value="$0.70">
        </div>
        <div class="form-group">
          <label class="control-label">Round 2</label>
          <input type="text" name="" class="form-control" value="$0.80">
        </div>
        <div class="form-group">
          <label class="control-label">Round 3</label>
          <input type="text" name="" class="form-control" value="$1.00">
        </div>
        <div class="form-group">
          <label class="control-label">Round 4</label>
          <input type="text" name="" class="form-control" value="$1.20">
        </div>
        <div class="form-group">
          <label class="control-label">Round 5</label>
          <input type="text" name="" class="form-control" value="$1.40">
        </div>
        <div class="form-group">
          <label class="control-label">Round 6</label>
          <input type="text" name="" class="form-control" value="$1.65">
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <div class="card"  >
        <div class="card-header" data-background-color="blue">
          Staking and Leanding Rates
        </div>
        <div class="card-content">
          <div class="form-group">
            <label class="label-control">Lending Monthly %</label>
            <input type="text" name="" class="form-control" value="48%">
          </div>
          <div class="form-group">
            <label class="label-control">Daily Staking %</label>
            <input type="text" name="" class="form-control" value="0.40%">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" >
      <div class="card-header"  data-background-color="green">
        Potential Strike Prices
      </div>
      <div class="card-content">
        <div class="form-group">
          <label for="">Opening Price is locked</label>
          <input type="checkbox" name="" value="">
        </div>
        <div class="form-group">
          <label class="label-control">Internal Exchange</label>
          <input type="text" class="form-control"  name="" value="$6">
        </div>
        <div class="from-group">
          <label class="label-control">Public Release</label>
          <input type="text" class="form-control"  name="" value="$24">
        </div>
        <div class="form-group">
          <label class="label-control">45 Day Target</label>
          <input type="text" class="form-control"  name="" value="$42">
        </div>
      </div>
    </div>
  </div>

</form>
@endsection
