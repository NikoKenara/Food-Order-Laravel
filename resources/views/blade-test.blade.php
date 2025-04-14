@extends('layouts.master')

{{-- <h3>Site content</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia modi nisi itaque, distinctio fugit laboriosam enim cum cupiditate harum velit alias blanditiis dolores numquam ipsam quasi aperiam laborum quis accusamus?
    </p> --}}

@section('content')

@if (false) {{-- or false --}}
<h3>Site content</h3>
@elseif (true)
<h3>apa lag ini</h3>
@else
<h3>alternative broo</h3>
@endif

@php
    $arrays = ['kenara', 'anton', 'ronald'];
@endphp

<ul>
    @foreach ($arrays as $arr)
        <li>{{ $arr }}</li>
    @endforeach
</ul>
<ul>
    @for ($i=0; $i < count($arrays); $i++)
    <li>{{  $arrays[$i] }}</li>
    @endfor
</ul>

{{-- @empty()
@endempty

@include('')

@isset()
@endisset --}}

<p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia modi nisi itaque, distinctio fugit laboriosam enim cum cupiditate harum velit alias blanditiis dolores numquam ipsam quasi aperiam laborum quis accusamus?
</p>
@endsection
