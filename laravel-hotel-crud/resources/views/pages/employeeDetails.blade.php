@extends('layouts.main-layout')
@section('content')
     <main>
          <ul class="homeLayout">
               <li>{{ $employee -> firstname }}  {{ $employee -> lastname }}</li>
               <li>{{ $employee -> role }}</li>
               <li>{{ $employee -> ral }}</li>
          </ul>
     </main>
@endsection