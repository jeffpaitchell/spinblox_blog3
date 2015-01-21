@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <b>{{ $spinblox_blog->blog_name . ' (id:' . $spinblox_blog->blog_id . ')' }}</b><br />
            <b> {{ link_to_route('overview', 'Go Back To Blog List') }}   </b>
            <div class="pull-right">
                {{ Form::open(array('route' => array('delete_blog', $spinblox_blog->blog_id))) }}
                    {{ link_to_route('edit_blog', 'Edit Blog', array('id' => $spinblox_blog->blog_id), array('class' => 'blog_img_button_edit')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete Blog', array('class' => 'blog_img_button_delete')) }}
                {{ Form::close() }}
            </div>
        </div>
        <div class="panel-body">

            <div class="row">


            <div class ="table-responsive">    
            <table class="table">    

                <tr>
                    <td>ID:</td>
                    <td>{{ $spinblox_blog->blog_id }}</td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>{{ $spinblox_blog->blog_name }}</td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>{{ $spinblox_blog->blog_description }}</td>
                </tr>    
                <tr>
                    <td>Content:</td>
                    <td>{{ $spinblox_blog->blog_content }}</td>
                </tr>
                <tr>
                    <td>Author:</td>
                    <td>{{ $spinblox_blog->blog_author }}</td>
                </tr>
                                            
            </table>
            </div>

            <img class="blog_img_container_show" src='{{ asset("uploads/photos/" . $spinblox_blog->blog_photo_path ) }}' />


            </div>
        </div>
        


    </div>
@stop