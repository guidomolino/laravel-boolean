@extends('layouts.main-layout')

@section('content')

  <section>
    <h1>LE LUNGHE</h1>
    <div class="pasta-container">
      @foreach ($data as $dato)
        @if ($dato->tipo == "lunga")
          <img src="{{ $dato->src }}" alt="{{ $dato->titolo }}">
        @endif
      @endforeach
    </div>
  </section>
  <section>
    <h1>LE CORTE</h1>
    <div class="pasta-container">
      @foreach ($data as $dato)
        @if ($dato->tipo == "corta")
          <img src="{{ $dato->src }}" alt="{{ $dato->titolo }}">
        @endif
      @endforeach
    </div>
  </section>
  <section>
    <h1>LE CORTISSIME</h1>
    <div class="pasta-container">
      @foreach ($data as $dato)
        @if ($dato->tipo == "cortissima")
          <img src="{{ $dato->src }}" alt="{{ $dato->titolo }}">
        @endif
      @endforeach
    </div>
  </section>


@endsection
