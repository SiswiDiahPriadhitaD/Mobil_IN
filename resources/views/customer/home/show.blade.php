@extends('customer.layouts.main')

@section('content')
  <h6 class="mb-3">Home / Product / Avanza 2022</h6>

  <div class="row">
    <div class="col-md-12 row mb-3">
      <div class="card w-100 radius-8 shadow-sm border-0" style="overflow: hidden">
          <div class="card-body">
            <div class="col-md-7 float-end p-3">
              <img src="{{ asset('ui/images/mazda.jpeg') }}" class="card-img-top radius-8" alt="...">
            </div>
            <div class="col-md-5 float-start p-3">
              <h4 class="card-title mt-3 fw-bold">Mazda 2019 CX 05</h4>
              <p class="text-grey-light fs-10">Detail - {{ 'MAZDA' }} - {{ 'CX 05 G100 2019' }}</p>
              <p class="card-text fs-11 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est optio cupiditate corrupti voluptatum, vero dolorum modi velit tempore doloribus earum esse reiciendis dicta natus corporis accusantium voluptas quaerat doloremque excepturi. <br> <br>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, expedita laudantium! Aliquam unde distinctio corporis, iusto, soluta aut sapiente porro hic nostrum suscipit neque ducimus recusandae at nesciunt id optio.</p>
              <div class="p-2"></div>
              <h5 class="float-start mt-2 text-dark fw-bold">Rp. {{ number_format(123009400) }}</h5>
              <a href="/product/1/show" class="btn btn-dark btn-sm float-end px-5 py-2">Check Out</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    
  </div>
@endsection