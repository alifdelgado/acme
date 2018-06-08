@extends('base')
@section('browsertitle')
  Register
@stop
@section('content')
    <div class="container">
      <div class="col-md-8 offset-2">
        <h1>Register</h1>
        @include('errormessage')
      </div>
    </div>
    <form id="registerform" class="col-md-10 offset-1">
      <div class="form-group row">
        <label for="registerFirstName" class="col-sm-2 col-form-label font-weight-bold text-right">Firs Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="registerFirstName" placeholder="First Name">
        </div>
      </div>
      <div class="form-group row">
        <label for="registerLastName" class="col-sm-2 col-form-label font-weight-bold text-right">Last Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="registerLastName" placeholder="Last Name">
        </div>
      </div>
      <div class="form-group row">
        <label for="registerEmail" class="col-sm-2 col-form-label font-weight-bold text-right">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="registerEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="registerVerifyEmail" class="col-sm-2 col-form-label font-weight-bold text-right">Verify Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="registerVerifyEmail" placeholder="Verify Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="registerPassword" class="col-sm-2 col-form-label font-weight-bold text-right">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="registerPassword" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="registerVerifyPassword" class="col-sm-2 col-form-label font-weight-bold text-right">Verify Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="registerVerifyPassword" placeholder="Verify Password">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
@stop
@section('bottomjs')
<script type="text/javascript">
  /*$(document).ready(function(){
    $('#registerform').validate({
      rules: {
        registerVerifyEmail: {
          required: true,
          email: true,
          equalTo: "#registerEmail"
        },
        registerVerifyPassword: {
          required: true,
          equalTo: "#registerPassword"
        }
      }
    });
  });*/
</script>
@stop
