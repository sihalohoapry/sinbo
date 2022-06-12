<!DOCTYPE html>
<html>
    <head>
        <title>Bengkel Eko</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- endbuild -->
    </head>
    <body  >
        <div class="row mt-0 pt-0 mb-5">
            <h5 class="text-left pb-2"><img src="{{ public_path('/basik/assets/img/logo.png') }} " height="50" width="50" >Bengkel Eko</h5>
        </div>
        
        <div class="page-content page-container" id="page-content">
            <div class="padding pt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Data-data service customer</strong>
                            </div>
                            <div class="card-body">
                                <div class="page-content page-container" id="page-content">
                                    <div class="padding pl-0 pr-0 pt-2 pb-0">
                                        <div id="toolbar">
                                        </div>
                                        <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true"
                                        data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" data-field="id">No</th>
                                                    <th data-sortable="true" data-field="owner">Nama Pelanggan</th>
                                                    <th data-sortable="true" data-field="project">Servis</th>
                                                    <th class="text-right" data-sortable="true" data-field="task">Tanggal Selesai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                 @endphp
                                                @foreach ($data as $row)
                                                <tr class=" " >
                                                    <td class="flex">
                                                        <div class="item-except text-muted text-sm h-1x">
                                                            {{ $no ++ }}
                                                        </div>
                                                    </td>
                                                    <td class="flex">
                                                        <div class="item-except text-muted text-sm h-1x">
                                                            {{ $row->User->name}}    
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="item-except text-muted text-sm h-1x">
                                                            {{ $row->title_booking}}    
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="item-except text-muted text-right text-sm h-1x">
                                                            {{ $row->updated_at}}   
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
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>

