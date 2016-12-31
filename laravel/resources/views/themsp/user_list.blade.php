@extends('layout.layoutthem.master')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                      <div class="col-lg-12">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                         @endif
                     </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Level</th>                         
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $us->id }}</td>
                                <td>{{ $us->username }}</td>
                                <td>
                                    @if($us->id==2)
                                        Superadmin
                                    @elseif($us->level==1)
                                        Admin
                                    @else
                                        Member
                                    @endif
                                </td>                   
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('bạn có chắc muốn xóa không')" href="{{ URL::route('admin.user.deleteuser',$us->id) }}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ URL::route('admin.user.edit',$us->id) }}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

   @stop