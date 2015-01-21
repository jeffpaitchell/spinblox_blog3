@section('content')

<h1>Register to receive our Spinblox Newsletter</h1>
<p>Write down the latest news regarding Spinblox!</p>

<div class="admin_login_form">
{{ Form::open(array('route' => 'store_subscriber', 'method' => 'POST')) }}

    <div class ="table-responsive">    
    <table class="table">   

        <div class="form-group">
            <tr>
                <td>{{ Form::label('firstname', 'First Name' . ':') }}</td>
                <td>{{ Form::text('firstname', null, array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('lastname', 'Last Name' . ':') }}</td>
                <td>{{ Form::text('lastname', null, array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('email', 'Email:') }}</td>
                <td>{{ Form::text('email', null,array('class' => 'form-control')) }}</td>
            </tr>
        </div>
    
    </div>    
    </table>


    <div class="form-group">
        {{ Form::submit('Register', array('class' => 'blog_img_button_create')) }}
    </div>

{{ Form::close() }}
</div>

@stop