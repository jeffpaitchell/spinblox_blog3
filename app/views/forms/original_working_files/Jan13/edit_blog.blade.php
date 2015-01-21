@section('content')

{{ Form::model($spinblox_blog, array('method' => 'PUT', 'route' => array('update_blog', $spinblox_blog->blog_id))) }}

    <div class ="table-responsive">    
    <table class="table">  

        <div class="form-group">
            <tr>
                <td> {{ Form::label('blog_name', 'Blog Name: ') }}</td>
                <td>{{ Form::text('blog_name', null, $options = array('class' => 'form-control')) }}</td>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_description', 'Blog Description' . ':') }}</td>
                <td>{{ Form::text('blog_description', null, $options = array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_content', 'Content:') }}</td>
                <td>{{ Form::textarea('blog_content', null, $options = array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_author', 'Origin:') }}</td>
                <td>{{ Form::text('blog_author', null, $options = array('class' => 'form-control')) }}</td>
            </tr>
        </div>

    </table>
    </div>  

    <div class="form-group">
        {{ Form::submit('Update', array('class' => 'blog_img_button_create')) }}
        {{ link_to_route('show_blog', 'Cancel', array($spinblox_blog->blog_id), array('class' => 'blog_img_button_cancel')) }}
    </div>  

{{ Form::close() }}

@stop