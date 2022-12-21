@extends('layouts.app')
@section('title', 'group show')
@section('styleCustom')

@endsection
@section('component')
<h1>group list </h1>
<table style="width:50%;" border="1px">
    <tr>
        <th>rank</th>
        <th>group name</th>
        <th>logo</th>
        <th>description</th>
        <th>action</th>
    </tr>
   
    <tr>
        <td>{{ $data->group_id }}</td>
        <td>{{ $data->name }}</td>
        <td>
            <img src="{{ asset('storage/' . $data->logo) }}" style="height: 50px;width: 80px;" alt="">
        </td>
        <td>{{ $data->description }}</td>
        <td>
         <div>
            <a href="{{ route('groupdetail',$data->group_id) }}">show</button>
         </div>

        </td>
    </tr>

</table>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/env.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endsection
