@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius:30px;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br><br>
                    <div align="middle">
                        <div align="middle" class="shadow" style="border-radius:70px;width:40%;">
                            <button type="submit" style="border-radius:70px;padding:70px 50px" class="btn btn-danger ">
                               <b>{{ __('ALERT') }}</b>
                            </button>
    
                        </div>
                    </div><br><br>

                    <form action="/crime-alert/public/records" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div align="middle">
                        <div class="form-group col-md-4 col-lg-8" align="middle">
                            <select style="border-radius:50px;" name="crime_type" id="inputState" class="form-control" required>
                              <option selected>Select type of crime</option>
                              <option value="robbery">robbery</option>
                              <option value="riot">riot</option>
                            </select>
                          </div>
                    </div>

                    <div align="middle">
                    <div class="form-group col-md-4 col-lg-8">
                        <input type="text" class="form-control" name="crime_location" id="name" value="" placeholder="Crime Location" style="border-radius:50px;" required>
                        </div>
                    </div>

                    <div align="middle">
                        <div class="form-group col-md-4 col-lg-8">
                             <textarea class="form-control" name="crime_description" id="exampleFormControlTextarea1" placeholder="Crime Description..." style="border-radius:10px;" rows="3"></textarea>
                        </div>
                        </div>

                        <div align="middle">
                        <button type="submit" class="btn btn-primary">Contact Security</button>
                        <div>

                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
