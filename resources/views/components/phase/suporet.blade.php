@extends('components/Template')
@section('style')
<!--plugins-->
<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">
<!--plugins-->
<link rel="stylesheet" href="{{url('assets/plugins/notifications/css/lobibox.min.css')}}" />
<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<!-- loader-->
<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />


<!--Theme Styles-->
<link href="{{url('assets/css/dark-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/light-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/semi-dark.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/header-colors.css')}}" rel="stylesheet" />
@endsection

@section('title')
Phase
@endsection
@section('namePage')
Phase
@endsection
@section('content')
<style>
  body {
    background-color: #f8f9fa;
  }

  .container {
    max-width: 600px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin: 0 auto;
    margin-top: 50px;
  }

  h1 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 30px;
    text-align: center;
  }

  label {
    font-weight: bold;
  }

  .form-select {
    border: none;
    border-radius: 0;
    border-bottom: 2px solid #ccc;
    padding: 5px 0;
    box-shadow: none;
  }

  .form-select:focus {
    border-color: #6c757d;
    box-shadow: none;
  }

  .form-control {
    border: none;
    border-radius: 0;
    border-bottom: 2px solid #ccc;
    padding: 10px;
    box-shadow: none;
  }

  .form-control:focus {
    border-color: #6c757d;
    box-shadow: none;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
  }

  .btn-primary:hover {
    background-color: #0069d9;
  }
</style>

<div class="container">
  <h1>Contact Us</h1>
  <hr>
  <form>
    <div class="mb-3">
      <label for="selectOption" class="form-label">Select a reason for contacting:</label>
      <select class="form-select" id="selectOption" required>
        <option value="">Select an option...</option>
        <option value="option1">General Inquiry</option>
        <option value="option2">Technical Support</option>
        <option value="option3">Billing Issue</option>
        <option value="option4">Feedback</option>
      </select>
      <div class="invalid-feedback">Please select an option.</div>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message:</label>
      <textarea class="form-control" id="message" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



@endsection