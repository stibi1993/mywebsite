@section('sidebar')
  <div class="well">
    <h3 style="color:#333;">Contact me!</h3>
    {!! Form::open(['url' => 'contact/submit']) !!}
      <div class="form-group">
        {{ Form::label('email', 'E-Mail:')}}
        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Type your mail!'])}}
      </div>
      <div class="form-group">
        {{ Form::label('name', 'Name:')}}
        {{ Form::text('name', '',  ['class' => 'form-control', 'placeholder' => 'Type your name!'])}}
      </div>

      <div class="form-group">
        {{ Form::label('message', 'Message:')}}
        {{ Form::textarea('message', '',  ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
      </div>
      <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
      </div>
    {!! Form::close() !!}
    @show
  </div>
