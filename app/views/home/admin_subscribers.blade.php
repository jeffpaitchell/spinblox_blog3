@section('content')

<a href="{{URL::to('logout')}}" class="blog_img_button_logout">Logout</a>

            <div class="admin_blog_heading">
                <h1>{{ 'Subscribers Overview' }}</h1>
            </div>
            <div class="admin_blog_results">
                @if ($allSubscribers->count())
                    <dl class="dl-horizontal">
                        <!-- Add this div class to make the table responsive -->
                        <div class = "table-responsive">
                            <table class="table">
                                <b>Results: </b> {{ $totalSubscribers->count() }}<br>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>        
                        @foreach($allSubscribers as $subscriber)
                        <tr>
                             <td>{{ $subscriber->id }}</b></td>
                             <td>{{ $subscriber->firstname }}</td>
                             <td>{{ $subscriber->lastname }}</b></td>
                             <td>{{ $subscriber->email }}</td>
                             <td><b>{{ link_to_route('show_subscriber', 'Edit', array($subscriber->id)) }}</b></td>
                        </tr>     
                        @endforeach
                        {{ $allSubscribers-> links()}}
                            </table>
                        </div>    


                    </dl>
                @else
                    <b>{{ 'No subscribers found.' }}</b>
                @endif
            </div>
    
    
@stop