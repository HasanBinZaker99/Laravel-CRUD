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
  <h1 class="text-center text-primary my-3">All Data</h1>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="d-flex justify-content-around flex-row">
                <a href="{{route('customer.create')}}">
                  <button class="btn btn-primary d-inline-block m-2 float-right">Customer Add </button></a>
                  <a href="{{route('home')}}">
                  <button class="btn btn-primary d-inline-block m-2 float-left">Back To HomePage </button></a>
                  </div>
              <table class=" col-md-8 table table-striped table-primary mx-auto">
                
        <!-- <pre>
        {{print_r($customers)}}
        </pre> -->
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Status</th>
      <th scope="col" class="text-center ">Action</th>
    </tr>
  </thead>
  <tbody>
      @php
$sl=1;
      @endphp
      <!-- {{$sl=1}} -->
  @foreach ($customers as $customer)
    <tr>
    <td>{{$sl++}}</td>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>    
      <!-- {{$customer->gender}} -->
    @if($customer->gender == "M")
    Male
    @elseif($customer->gender == "F")
    Female
    @else
    Other  
    @endif  
</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->state}}</td>
      <td>{{$customer->country}}</td>
      <td>{{$customer->dob}}</td>
      <td>
          @if($customer->status == "1")
          <a href="#">
          <button class="btn">
            <span class="badge bg-success">Active </span>
          </button>
          </a>
          @else
          <a href="#">
          <button class="btn">
            <span class="badge bg-danger">Inactive </span>
          </button>
          </a>
          @endif
      <!-- {{$customer->status}} -->
      </td>
      <!-- "{{url('/customer/delete/')}}/{{$customer->customer_id}}" -->
      <!-- {{route('customer.delete',['id'=> $customer->customer_id])}} -->
      <!-- {{route('customer.delete',$customer->customer_id)}} -->
      <td class="text-center "><a href=""> <button class="btn btn-primary me-2"> Edit </button></a><a href="{{route('customer.delete',['id'=> $customer->customer_id])}}"><button class="btn btn-danger"> Delete </button> </a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
              </div>
          </div>
      </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
