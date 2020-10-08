@extends('layouts.main-layout')

@section('content')

  <div class="card-header">

     <div>
       Posts:
     </div>
     <div>
       <label for="best_of">BEST OF</label>
       <input id="best_of" type="checkbox" name="best_of">
     </div>

  </div>

              <div class="card-body">

                <ul id="posts">

                </ul>




              </div>

@endsection
