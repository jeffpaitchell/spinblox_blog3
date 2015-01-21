@section('content')

    <div class="blog_header">
        <div class="blog_header_container">
            <h1>The Spinblox Club </h1>
        </div>    

    </div>    

	<div class="row">
            <div class="blog_body">
                <h1>{{ 'Blogs Overview' }}</h1>

                @if ($allBlogs->count())      
                		@foreach($allBlogs as $spinblox_blog)
                            <div class="blog_main_container">
                                <div class="blog_info_container">
                                    <table>
                                    <div class="blog_info_container_date">
                                        <b>{{ date('d F Y', strtotime($spinblox_blog->created_at)) }}</b><br>
                                    </div> 
                                    <tr>
                                    <td>       
                			             <strong>Blog ID:</strong>
                                    </td>
                                    <td>     
                                         <p>{{ $spinblox_blog->blog_id }}</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>    
                			             <strong>Blog Name:</strong>
                                    </td>
                                    <td>     
                                         <p>{{ $spinblox_blog->blog_name }}</p>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>        
                                         <strong>Author:</strong>
                                    </td>
                                    <td>     
                                         <p>{{ $spinblox_blog->blog_author }}</p>
                                    </td>
                                    </tr>     
                                </table>    
                                </div> 
                             
                                <div class="blog_img_container">
                                    <img class="blog_img_container_image" src='{{ asset("uploads/photos/" . $spinblox_blog->blog_photo_path ) }}' /><br>
                                    <p> {{ $spinblox_blog->blog_content}} </p>
                                </div>    
                                
                            </div>
                        @endforeach
                        {{ $allBlogs-> links()}}
                            

            </div>    

            	@else
                	<b>{{ 'No blogs found.' }}</b>
            	@endif
        </div>
    
@stop