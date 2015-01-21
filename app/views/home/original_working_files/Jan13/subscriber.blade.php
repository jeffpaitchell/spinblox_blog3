@section('content')
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <b>{{ $subscriber->email . ' (id:' . $subscriber->id . ')' }}</b><br />
            <b> {{ link_to_route('subscribers_overview', 'Go Back To Subscriber List') }}   </b>
            <div class="pull-right">
                {{ Form::open(array('route' => array('delete_subscriber', $subscriber->id))) }}
                    {{ link_to_route('edit_subscriber', 'Edit', array('id' => $subscriber->id), array('class' => 'blog_img_button_edit')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'blog_img_button_delete')) }}
                {{ Form::close() }}
            </div>
        </div>
        <div class="panel-body">

            <div class="row">


            <div class ="table-responsive">    
            <table class="table">    

                <tr>
                    <td>ID:</td>
                    <td>{{ $subscriber->id }}</td>
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td>{{ $subscriber->firstname }}</td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>{{ $subscriber->lastname }}</td>
                </tr>    
                <tr>
                    <td>Email:</td>
                    <td>{{ $subscriber->email }}</td>
                </tr>
                                            
            </table>
            </div>

            </div>
        </div>
        


    </div>
@stop