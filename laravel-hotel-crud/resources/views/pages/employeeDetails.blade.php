@extends('layouts.main-layout')
@section('content')
     <main>
          <ul class="homeLayout">
                    <li>
                         <a href="">
                              <li>{{ $employee -> firstname }}  {{ $employee -> lastname }}</li>
                              <li>{{ $employee -> role }}</li>
                              <li>{{ $employee -> ral }}</li>
                         </a>
                    </li>
          </ul>
     </main>
@endsection