@section('content')

<h1>Create a new blog</h1>
<p>Write down the latest news regarding Spinblox!</p>


{{ Form::open(array('route' => 'store_blog', 'method' => 'POST', 'files' => true)) }}

    <div class ="table-responsive">    
    <table class="table">

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_name', 'Blog Name' . ':') }}</td>
                <td>{{ Form::text('blog_name', null, array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_description', 'Blog Description' . ':') }}</td>
                <td>{{ Form::text('blog_description', null, array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_photo_path', 'Photo File Path:') }}</td>
                <td>{{ Form::file('blog_photo_path', array('class' => 'form-control')) }}</td>
            </tr>    
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_content', 'Content:') }}</td>
                <td>{{ Form::textarea('blog_content', null,array('class' => 'form-control')) }}</td>
            </tr>
        </div>

        <div class="form-group">
            <tr>
                <td>{{ Form::label('blog_author', 'Author:') }}</td>
                <td>{{ Form::text('blog_author', null,array('class' => 'form-control')) }}</td>
            </tr>
        </div>

    <div class="form-group">
        <b>Tags:</b><br />

        <div class ="form-group">

        <!-- Use code below for generating checkboxes -->    
        <tr>
            <td>{{ Form::label('blog_tags', 'Tags:') }}</td>
            <td>{{ Form::text('blog_tags', null,array('class' => 'form-control')) }}</td>
        </tr>

        </div>

    </div>
    
    </div>    
    </table>


    <div class="form-group">
        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    </div>

{{ Form::close() }}

@stop