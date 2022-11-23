<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>MZT test assignment</title>

        <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <style>
         body {
            font-family: 'Roboto', sans-serif;
         }
      </style>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   </head>
   <body>
      <div id="app">
     
         <app-header></app-header>

            {{-- <candidates :candidates="{{ json_encode($candidates) }}">
         </candidates> --}}

         <router-view></router-view>




            {{--             
            <div class="table mt-5">
               <header class="bg-light p-3 mb-0 text-dark w-75 m-auto text-center"><strong>All Candidates</strong></header>
               <table class="table-striped shadow-lg table-light w-75 mt-0 m-auto">
               <thead>
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Name</th>
                     <th scope="col">Email</th>
                     <th scope="col">Description</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                     @foreach($candidates as $key => $item)
                     <tr>
                        <td scope="row">{{ $key + 1 }}</td>
                        <td>{{ ucwords($item -> name )}}</td>
                        <td>{{ $item -> email }}</td> 
                        <td>{{ $item -> description }}</td>
                        <td width="15%">
                        <a href="" class="btn btn-info btn-sm" candidate_id="{{ $item -> id }}" id="contact-btn">Contact</a>
                        <a href="" class="btn btn-success btn-sm">Hired</a>
                        </td>
                     </tr>
                     @endforeach 
               </tbody>
               </table>
            </div> --}}

      </div>


   {{-- <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   <!-- sweet alert file -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       --}}
   <!-- custom file -->
   {{-- <script src="{{ asset('/js/custom.js') }}"></script> --}}
   <script src="{{ asset('/js/app.js') }}"></script>
   

    </body>
</html>
