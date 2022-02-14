@extends('layouts.master')
@section('content')

@include('theme.partial.slider',['page'=>'Home'])
<!-- ----------------------- index part start ----------------------- -->
{{--@include('theme.partial.atoz')--}}
@include('theme.partial.atoz',['page'=>'home','id'=>'12','html_id'=>'announcement_part','is_utilities'=>0])
<!-- ----------------------- index part end ----------------------- -->

<!-- ----------------------- announcement part start ----------------------- -->
{{--@include('theme.partial.announcement')--}}
@include('theme.partial.common',['page'=>'home','id'=>'1','html_id'=>'announcement_part','is_utilities'=>0])
<!-- ----------------------- announcement part end ----------------------- -->

<!-- ----------------------- peer scholarship start ----------------------- -->
{{--@include('theme.partial.scholarship')--}}
@include('theme.partial.common',['page'=>'home','id'=>'2','html_id'=>'peer-scholarship','is_utilities'=>0])
<!-- ----------------------- peer scholarship end ----------------------- -->

<!-- ----------------------- utilities part start ----------------------- -->
{{--@include('theme.partial.utilities')--}}
@include('theme.partial.utilities',['page'=>'home','html_id'=>'utilities_part','is_utilities'=>1])
<!-- ----------------------- utilities part end ----------------------- -->

<!-- ----------------------- get updates start ----------------------- -->
{{--@include('theme.partial.updates')--}}
@include('theme.partial.common',['page'=>'home','id'=>'6','html_id'=>'get_updeates','is_utilities'=>0])
<!-- ----------------------- get updates end ----------------------- -->

<!-- ----------------------- safety security start ----------------------- -->
{{--@include('theme.partial.security')--}}

@include('theme.partial.common',['page'=>'home','id'=>'7','html_id'=>'safety_security','is_utilities'=>0])
<!-- ----------------------- safety security end ----------------------- -->

<!-- ----------------------- events part start ----------------------- -->
@include('theme.partial.events')
<!-- ----------------------- events part end ----------------------- -->

<!-- ----------------------- office part start ----------------------- -->
{{--@include('theme.partial.office')--}}
@include('theme.partial.common',['page'=>'home','id'=>'8','html_id'=>'office_part','is_utilities'=>0])
<!-- ----------------------- office part end ----------------------- -->

<!-- ----------------------- career part start ----------------------- -->
{{--@include('theme.partial.career')--}}
@include('theme.partial.common',['page'=>'home','id'=>'9','html_id'=>'career_part','is_utilities'=>0])
<!-- ----------------------- career part end ----------------------- -->

<!-- ----------------------- staying well start ----------------------- -->
{{--@include('theme.partial.staying')--}}
@include('theme.partial.common',['page'=>'home','id'=>'10','html_id'=>'staying_well','is_utilities'=>0])
<!-- ----------------------- staying well end ----------------------- -->

<!-- ----------------------- life part start ----------------------- -->
{{--@include('theme.partial.life')--}}

@include('theme.partial.common',['page'=>'home','id'=>'11','html_id'=>'life_part','is_utilities'=>0])
<!-- ----------------------- life part end ----------------------- -->

@endsection
