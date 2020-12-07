
@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-3 col-lg-2 d-md-block bg-light d-none d-lg-block">
    <img style="width: 100%;height:70%; border-radius:10%;padding-top:20px" src="/P_census/resources/images/census4.jpeg" alt="fingerprint" >
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
            </div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:200%;left:0; top:0">
            </div>
        </div>
    </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
   
    <form method="POST" action="{{ route('register') }}">
        @csrf
       <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="u_name" id="name" value="" placeholder="Enter Full name" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
    

            <div class="form-group col-md-4">
                <label for="inputState">Gender</label>
                <select name="u_gender" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="male">MALE</option>
                  <option value="female">FEMALE</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="inputState">MARITAL STATUS</label>
                <select name="u_marital_status" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="single">SINGLE</option>
                  <option value="married">MARRIED</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="inputEmail4">AGE</label>
                <input type="text" class="form-control" name="u_age" id="inputEmail4"  value="" placeholder="Enter correct age" required>
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">HOUSEHOLD SIZE</label>
                <input type="text" class="form-control" name="u_hos" id="inputEmail4"  value="" placeholder="what is your household size" required>
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">OCCUPATION</label>
                <input type="text" class="form-control" name="u_occupation" id="inputEmail4"  value="" placeholder="what is your occupation" required>
                </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">CONTACT</label>
                <input type="text" class="form-control" name="u_contact" id="inputEmail4"  value="" placeholder="Enter active contact" required>
                </div>

                <div class="form-group col-md-5">
                    <label for="inputEmail4">PLACE OF WORK</label>
                    <input type="text" class="form-control" name="u_pow" id="inputEmail4"  value="" placeholder="which work do you do" required>
                    </div>
           
                    
                <div class="form-group col-md-4">
                    <label for="inputState">EDUCATION LEVEL</label>
                    <select name="u_education_level" id="inputState" class="form-control" required>
                      <option selected>Choose...</option>
                      <option value="primary">PRIMARY</option>
                      <option value="secondary">SECONDARY</option>
                      <option value="tertiary">TERTIARY</option>
                      <option value="others">OTHERS</option>
                      <option value="none">NONE</option>
                    </select>
                  </div>

        <div class="form-group col-md-3">
            <label for="inputState">RESIDENT STATE</label>
            <select name="u_resident_state" id="inputState" class="form-control" required>
              <option selected>Choose...</option>
              <option value="lagos">lagos</option>
              <option value="abuja">abuja</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">RESIDENT CITY</label>
            <input type="text" class="form-control" name="u_resident_city" id="inputEmail4"  value="" placeholder="what city do you reside" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputState">A CIVIL SERVANT?</label>
                <select name="u_civil_servant" id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4">RESIDENT LGA</label>
                <input type="text" class="form-control" name="u_resident_lga" id="inputEmail4"  value="" placeholder="which local government" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div >
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            
        
       </div>
       <br><br>
        <button type="submit" class="btn btn-primary">Register</button>
        </form>

        
  </div>
</div>
  


</main>
@endsection



