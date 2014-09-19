<span class="fa fa-bullhorn fa-3x text-center"></span>
<h1>We are currently in private beta</h1>
<p>You can request an invitation to test our service.</p>
<!-- email text field -->
{{ Form::open() }}
<div class="form-group">
   {{ Form::text('email',null,['class'=>'form-control','placeholder'=>'Email goes here']) }}
</div>
<div class="form-group">
    {{ Form::submit('Send Me an Invitation!',['class'=>'btn btn-default btn-lg']) }}
</div>
{{ Form::close() }}