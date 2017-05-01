namit {{$id}}



   echo Form::open(array('route' => array('photo_done', 5)))

      <div class="form-group-name">
    {!! Form::label('Edit Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>' Edit Name')) !!}
</div>

{!! Form::submit('Submit') !!}



{{ Form::close() }}