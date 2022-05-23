@extends('layouts.admin')
@section('title')
    User
@endsection
@section('content')
<div id="content" class="flex ">
    <!-- ############ Main START-->
    @include('alert.success')
    <div>
        <div class="page-hero page-container " id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">User</h2>
                    <small class="text-muted">Daftar User</small>
                </div>
                <div class="flex"></div>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="table-responsive">
                    <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th><span class="text-muted">No</span></th>
                                <th><span class="text-muted">Nama</span></th>
                                <th><span class="text-muted">No Telpon</span></th>
                                <th><span class="text-muted">Role</span></th>
                                <th><span class="text-muted">Status</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $row )
                            <tr class=" " data-id="3">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $no ++ }}</small>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->name }}
                                    </span>
                                </td>
                                <td class="flex">
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ $row->phone_number }}
                                    </div>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->role }}
                                    </span>
                                </td>
                                <td>
                                    <span class="item-amount text-sm ">
                                        {{ $row->status_user  }}
                                    </span>
                                                                       
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <form action="{{ route('non-active', $row->id) }}" method="POST">
                                                @csrf
                                                <button  class="dropdown-item" type="submit">
                                                    Non Active
                                                </button>
                                            </form>
                                            <form action="{{ route('active', $row->id) }}" method="POST">
                                                @csrf
                                                <button  class="dropdown-item" type="submit">
                                                    Active
                                                </button>
                                            </form>
                                            <form action="{{ route('reset-password', $row->id) }}" method="POST">
                                                @csrf
                                                <button  class="dropdown-item" type="submit">
                                                    Reset Password
                                                </button>
                                            </form>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ############ Main END-->
</div>
<!-- ############ Content END-->
@endsection