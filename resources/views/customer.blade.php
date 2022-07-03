<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center my-3 text-primary">Customer Registration</h1>
    <div class="container">
     
          
    <form action="{{url('/')}}/customer" method="post">
     @csrf
	 <pre>
	 <!-- @php
	 print_r($errors->all());
	 @endphp -->
	 </pre>
     <div class="col-md-12">
     <div class="row">
     <div class="mb-3 col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" value="{{old('name')}}"  name="name" id="name">
	<span class="text-danger">
		@error('name')
		{{$message}}
		@enderror
	</span>
  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
	<span class="text-danger">
	@error('email')
	{{$message}}
	@enderror
	</span>
  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
	<span class="text-danger">
	@error('password')
	{{$message}}
	@enderror
	</span>
  </div>
  <div class="mb-3 col-md-6">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1">
	<span class="text-danger">
	@error('confirm_password')
	{{$message}}
	@enderror
	</span>
  </div>
  <div class="mb-3 col-md-6">
    <label for="name" class="form-label">State</label>
    <input type="text" class="form-control" name="state" value="{{old('state')}}" id="name" aria-describedby="emailHelp">
	<span class="text-danger">
	@error('state')
	{{$message}}
	@enderror
	</span>
  </div>
  <div class="mb-3 col-md-6">
    <label for="name" class="form-label">Country</label>
    <input type="text" class="form-control" name="country" value="{{old('country')}}" id="name" aria-describedby="emailHelp">
	<span class="text-danger">
	@error('country')
	{{$message}}
	@enderror
	</span>
  </div>
<div class="col-md-12 mb-3">
  <label for="name" class="form-label ">Address</label>
  <div class="form-floating ">
  
  <textarea class="form-control" name="address" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
</div>

<div class="mb-3 col-md-4">
<label for="birthday" class=>Birthday:</label><br>
  <input type="date" id="birthday" value="{{old('dob')}}" name="dob">
</div>

<div class="mb-3 col-md-8 ">
<label for="gender">Gender:</label>
<div class="d-flex flex-row">
<div class="form-check col-md-3">
  <input class="form-check-input" type="radio"  name="gender" value="M" id="gender" >
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
</div>
<div class="form-check col-md-3">
  <input class="form-check-input" type="radio" name="gender" value="F" id="gender" >
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-check col-md-3">
  <input class="form-check-input" type="radio" name="gender" value="O" id="gender" >
  <label class="form-check-label" for="flexRadioDefault2">
   Other
  </label>
</div>
</div>
</div>

  <button type="submit" class="btn btn-primary col-md-9 mx-auto">Submit</button>
  </div>
  </div>
</form>


   </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
