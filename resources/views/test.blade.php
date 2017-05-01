@extends('layouts.master')

@section('title', 'Page Title')
@section('description', 'Page Title description')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
          <h3> {{ $data1 }}</h3>
          <h4> {{$data2}} </h4>
<h4> {{$age}} </h4>
<h4> Condition example begins </h4>
@if($age == 26)
<p> you passed if </p>

@else

<p>You failed</p>
@endif
</h4> condition example ends </h4>

@endsection

@section('footer')
@parent
<p>This is footer for test file</p>


<h3> For each loop example </h3>
@foreach ($DataArray as $values)
{{ strtoupper($values)}} <br>

@endforeach
<h3> For each loop example  END</h3>

<h2>Execute PHP Function</h2>
<p>The date is {{date(' D M, Y')}}</p>

@endsection
