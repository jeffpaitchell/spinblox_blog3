@section('content')

	<div class="row">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <b>{{ 'Blogs Overview' }}</b>
            </div>
            <div class="panel-body">
                @if ($allBlogs->count())
                    <dl class="dl-horizontal">
                        <!-- Add this div class to make the table responsive -->
                        <div class = "table-responsive">
                            <table class="table">
                                <b>Results: </b> {{ $totalBlogs->count() }}<br>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                </tr>        
                		@foreach($allBlogs as $spinblox_blog)
                        <tr>
                			 <td>{{ $spinblox_blog->blog_id }}</b></td>
                			 <td>{{ $spinblox_blog->blog_name }}</td>
                             <td><b>{{ link_to_route('show_blog', 'Edit', array($spinblox_blog->blog_id)) }}</b></td>
                        </tr>     
                        @endforeach
                        {{ $allBlogs-> links()}}
                            </table>
                        </div>    


                    </dl>
            	@else
                	<b>{{ 'No blogs found.' }}</b>
            	@endif
            </div>
        </div>
    </div>
    
@stop