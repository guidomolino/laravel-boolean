@extends('layouts.main-layout')

@section('content')

  <section>
    <h1>LE LUNGHE</h1>
    <div class="pasta-container">
      @foreach ($data as $dato)
        <img src="{{ $dato->src }}" alt="">
      @endforeach
    </div>
  </section>
  <section>
    <h1>LE CORTE</h1>
    <div class="pasta-container">

    </div>
  </section>
  <section>
    <h1>LE CORTISSIME</h1>
    <div class="pasta-container">

    </div>
  </section>


@endsection
