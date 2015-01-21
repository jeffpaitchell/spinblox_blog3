@section('content')

<div class="admin_login_form">
{{ Form::model($subscriber, array('method' => 'PUT', 'route' => array('update_subscriber', $subscriber->id))) }}

    <div class ="table-responsive">    
    <table class="table">  

        <div class="form-group">
            <tr>
                <td> {{ Form::label('firstname', 'First Name: ') }}</td>
                <td>{{ Form::text('firstname', null, $options = array('class' => 'form-control')) }}</td>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('lastname', 'Last Name' . ':') }}</td>
                <td>{{ Form::text('lastname', null, $options = array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('email', 'Email:') }}</td>
                <td>{{ Form::textarea('email', null, $options = array('class' => 'form-control')) }}</td>
            </tr>
        </div>

    </table>
    </div> 

    </div>

    <div class="form-group">
        {{ Form::submit('Update', array('class' => 'blog_img_button_create')) }}
        {{ link_to_route('show_subscriber', 'Cancel', array($subscriber->id), array('class' => 'blog_img_button_cancel')) }}
    </div>   


{{ Form::close() }}


@stop