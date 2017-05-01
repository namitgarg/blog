{!! Form::open(['route' => 'f.submit']) !!}
      <div class="form-group-name">
    {!! Form::label('Edit Name') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-password">
 {!! Form::password('password'); !!}

</div>
<div class="form-area">
   {!! Form::text('biodata') !!}
</div>

{!! Form::submit('Submit') !!}



{{ Form::close() }}