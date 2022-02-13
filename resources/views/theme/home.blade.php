@extends('layouts.master')
@section('content')

@include('theme.partial.slider',['page'=>'Home'])
<!-- ----------------------- index part start ----------------------- -->
@include('theme.partial.atoz')
<!-- ----------------------- index part end ----------------------- -->

<!-- ----------------------- announcement part start ----------------------- -->
@include('theme.partial.announcement')
<!-- ----------------------- announcement part end ----------------------- -->

<!-- ----------------------- peer scholarship start ----------------------- -->
@include('theme.partial.scholarship')
<!-- ----------------------- peer scholarship end ----------------------- -->

<!-- ----------------------- utilities part start ----------------------- -->
@include('theme.partial.utilities')
<!-- ----------------------- utilities part end ----------------------- -->

<!-- ----------------------- get updates start ----------------------- -->
@include('theme.partial.updates')
<!-- ----------------------- get updates end ----------------------- -->

<!-- ----------------------- safety security start ----------------------- -->
@include('theme.partial.security')
<!-- ----------------------- safety security end ----------------------- -->

<!-- ----------------------- events part start ----------------------- -->
@include('theme.partial.events')
<!-- ----------------------- events part end ----------------------- -->

<!-- ----------------------- office part start ----------------------- -->
@include('theme.partial.office')
<!-- ----------------------- office part end ----------------------- -->

<!-- ----------------------- career part start ----------------------- -->
@include('theme.partial.career')
<!-- ----------------------- career part end ----------------------- -->

<!-- ----------------------- staying well start ----------------------- -->
@include('theme.partial.staying')
<!-- ----------------------- staying well end ----------------------- -->

<!-- ----------------------- life part start ----------------------- -->
@include('theme.partial.life')
<!-- ----------------------- life part end ----------------------- -->

@endsection
