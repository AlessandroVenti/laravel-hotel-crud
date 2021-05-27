@extends('layouts.main-layout')

     @section('content')
          <main>
               @if ($errors->any())
               <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                         @endforeach
                    </ul>
               </div>
               @endif
               <form method="POST" action="{{route('update', $employee -> id) }}">
               @csrf
               @method('POST')
                    <input type="text" value="{{$employee -> firstname}}" name="firstname"placeholder="Guest name">
                    <input type="text" value="{{$employee -> lastname}}" name="lastname" placeholder="Guest lastname">
                    <input type="text" value="{{$employee -> role}}" name="role" placeholder="date">
                    <input type="text" value="{{$employee -> ral}}" name="ral "placeholder="document_type">
                    <input type="submit" value="create">
               </form>
          </main>
     @endsection