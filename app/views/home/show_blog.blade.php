@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <b>{{ $blog->blog_name . ' (id:' . $blog->blog_id . ')' }}</b><br />
            <b> {{ link_to_route('overview', 'Go Back To Blog List') }}   </b>
            <div class="pull-right">
                {{ Form::open(array('route' => array('delete_blog', $blog->blog_id))) }}
                    {{ link_to_route('edit_blog', 'Edit Blog', array('id' => $blog->blog_id), array('class' => 'btn btn-info')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete Blog', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </div>
        </div>
        <div class="panel-body">

            <div class="row">


            <div class ="table-responsive">    
            <table class="table">    

                <tr>
                    <td>ID:</td>
                    <td>{{ $blog->blog_id}}</td>
                </tr>    
                    <td>Name</td>
                    <td>{{ $blog->blog_name}}</td>
                <tr>

                </tr>    

                <tr>
                    <td>{{ $stone->stone_id }}</td>
                    <td>{{ $stone->stone_name }}</td>
                    <td>{{ $stone->stone_type }}</td>
                    <td><li>{{ $stone->stone_color_black}}</li>
                        <li>{{ $stone->stone_color_blue }}</li> 
                        <li>{{ $stone->stone_color_brown }}</li>
                        <li>{{ $stone->stone_color_gold }}</li>
                        <li>{{ $stone->stone_color_gray }}</li>
                        <li>{{ $stone->stone_color_green }}</li> 
                        <li>{{ $stone->stone_color_red }}</li> 
                        <li>{{ $stone->stone_color_white }}</li>
                    </td>
                    <td>{{ $stone->stone_origin }}</td>
                    <td>{{ $stone->stone_pattern }}</td>
                    <td>
                        <li>{{ $stone->stone_application_kitchen}}</li>
                        <li>{{ $stone->stone_application_bathroom }}</li> 
                        <li>{{ $stone->stone_application_fireplace }}</li>
                        <li>{{ $stone->stone_application_floor }}</li>
                        <li>{{ $stone->stone_application_outdoor }}</li>    
                    </td>    
                </tr>
            </table>
            </div>

            @if ($stonePhotos->count())   

            @foreach($stonePhotos as $photo)
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>{{ $photo->photo_name }}</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table">

                            <tr>
                                <td rowspan="4" width="300" >
                                <img class="img" src='{{ asset("uploads/photos/" . $photo->photo_path ) }}' />
                                </td>

                                    <td>Mini:</td>
                                    <td><b>{{ link_to_route('show_photo', 'View Mini Photo', array($photo->stone_id, $photo->photo_id)) }}</b>
                                    </td>
                            </tr>

                            <tr>
                                <td>Macro:</td>
                                <td><b>{{ link_to_route('show_photo_full', 'View Macro Photo', array($photo->stone_id, $photo->photo_id)) }}</b></td>
                            </tr>

                            <tr>
                                <td>Closeup:</td>
                                <td><b>{{ link_to_route('show_photo_full', 'View Closeup Photo', array($photo->stone_id, $photo->photo_id)) }}</b></td>
                            </tr>    

                            <tr>
                                <td>Full Size:</td>
                                <td><b>{{ link_to_route('show_photo_full', 'View Full Size Photo', array($photo->stone_id, $photo->photo_id)) }}</b></td>
                            </tr>    

                            </table>
                            </div>    
                        </div>
                    </div>
                </div>
    		@endforeach

            </div>
        </div>
        <div class="panel-footer clearfix">
    	   <?php echo $stonePhotos->links(); ?>
        </div>
    	@else
        	{{ ('No photos found.') }}
            </div>
    	@endif


    </div>
@stop