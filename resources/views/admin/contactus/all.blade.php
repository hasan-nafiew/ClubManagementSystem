
        <!-- PAGE CONTAINER-->
        @extends('layouts.admin')
        @section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row m-t-30">
                    <h1 class="text-center all-heading">Contactus Messages</h1>
                            <div class="col-md-12">                           
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Subject</th>
                                                <th class="text-center">Message</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">DateTime</th>
                                                <th class="text-center">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contactus as $data)
                                            <tr>
                                                <td>{{$data->contactus_name}}</td>
                                                <td>{{$data->contactus_email}}</td>
                                                <td>{{$data->contactus_subject}}</td>
                                                <td>{{str_limit($data->contactus_message,40)}}</td>
                                                <td>{{$data->contactus_status}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>
                                                    <a href="{{url('admin/contactus/view/'.$data->contactus_id)}}"><i class="fa fa-plus-square fa-lg"></i></a>   
                                                    @if(Auth::user()->role_id<='2')                                                
                                                    <a href="{{url('admin/contactus/softdelete/'.$data->contactus_id)}}"><i class="fa fa-trash fa-lg"></i></a>
                                                    @endif
                                                </td>
                                               
                                            </tr>   
                                            @endforeach                                 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Nafiew Software Ltd.</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    