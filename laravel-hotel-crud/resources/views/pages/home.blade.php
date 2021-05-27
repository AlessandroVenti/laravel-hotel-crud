@extends('layouts.main-layout')
@section('content')
     <main>
          <ul class="homeLayout">
               @foreach ($employees as $employee)
                    <li>
                         <a href="{{ route('employeeDetails', $employee -> id) }}">
                              <strong>{{ $employee -> firstname }}  {{ $employee -> lastname }}</strong>
                         </a>
                         <a href="{{route('edit', $employee -> id)}}">
                              &#9998;
                         </a>
                         <a href="{{route('destroy', $employee -> id)}}">
                              &#10060;
                         </a>
                    </li>
               @endforeach
          </ul>
     </main>
@endsection