@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
<div class="jumbotron bg-primary">
    <div style="font-family: arial;" class="text-center">
      <h1 class="display-4 text-light" style=" font-family: arial; font-weight: bold;">Intan Testing</h1>
      <h5 class="display-5" style="font-family: arial; font-weight: bold; margin: 0px;">Ngetes Aja</h5>
    </div>
  </div>
<div style="font-family: arial;" class="container mt-3 pt-2">
    <center>
    <div class="col-md-6">
        <div class="input-group input-group-lg mb-3">
            <input type="text" class="form-control input-lg" placeholder="Search Game Mobile" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
            </div>
          </div>
    </div>
</center>
<br><br>
    <div class="row">
        <div class="col-md-12">
            <main role="main">
                <div style="font-family: arial;" class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 1</h5>
                              <p class="card-text">Ini adalah test1</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 2</h5>
                              <p class="card-text">Ini adalah test2</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 3</h5>
                              <p class="card-text">Ini adalah test3</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 4</h5>
                              <p class="card-text">Ini adalah test4</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 5</h5>
                              <p class="card-text">Ini adalah test5</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Test 6</h5>
                              <p class="card-text">Ini adalah test6</p>
                              <a href="#" class="btn btn-primary">Pergi...</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <hr>
                </div>
              </main>

@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
