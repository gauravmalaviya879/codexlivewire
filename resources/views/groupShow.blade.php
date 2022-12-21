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
    @foreach ($grouplist as $group)
        <tr>
            <td>{{ $group->group_id }}</td>
            <td>{{ $group->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $group->logo) }}" style="height: 50px;width: 80px;" alt="">
            </td>
            <td>{{ $group->description }}</td>
            <td>
             <div>
                <a href="{{ route('groupdetail',$group->group_id) }}">show</button>
             </div>

            </td>
        </tr>
    @endforeach
</table>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/env.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@endsection
