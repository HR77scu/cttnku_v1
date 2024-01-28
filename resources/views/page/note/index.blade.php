@extends('templates.template')

@section('title','Note Data')

@section('content')
<div id="content" class="app-content">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10">

                <div class="row">

                    <div class="col-xl-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Note</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ul>

                        <h1 class="page-header">
                            @yield('title') <small>Jumlah data yang terbuat hari ini : {{ $sum_a_created_note }}</small>
                        </h1>

                        <hr class="mb-4">


                        <div id="bootstrapTable" class="mb-5">
                            <h4>@yield('title')</h4>
                            <p class="row col-lg-12" >
                                <a href="{{route('note.create')}}" class="btn btn-block btn-outline-theme"> <i class="fas fa-plus"></i> Create</a>
                            </p>
                            <div class="row col-lg-12 card">
                                <div class="card-body">
                                    <table class="table" data-toggle="table" data-sort-class="table-active"
                                        data-sortable="true" data-search="true" data-pagination="true"
                                        data-show-refresh="true" data-show-columns="true" data-show-fullscreen="true"
                                        data-height="460">
                                        <thead>
                                            <tr>
                                                <th data-sortable="true">No</th>
                                                <th data-sortable="true">ID</th>
                                                <th data-sortable="true">Title</th>
                                                <th data-sortable="true">Last Read</th>
                                                <th data-sortable="true">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($note as $item)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$item->id}}</td>
                                                <td>@if($item->title == '') 
                                                        Tidak Ada Judul 
                                                    @else  
                                                        @if(strlen($item->title) > 30)
                                                            {{substr($item->title,0,30).'...'}}
                                                        @else
                                                            {{$item->title}}
                                                        @endif
                                                    @endif</td>
                                                <td><i class="fas fa-clock"></i> @if($item->last_opn == '') {{$item->created_at}} @else {{$item->last_opn}} @endif</td>
                                                <td>
                                                    <a href="{{route('note.show', $item->id)}}" class="btn btn-sm btn-outline-light">
                                                        <i class="fas fa-eye"></i> View
                                                    </a>
                                                    <a href="{{route('note.edit', $item->id)}}" class="btn btn-sm btn-outline-warning">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </a>
                                                    <a href="{{route('note.delete', $item->id)}}" class="btn btn-sm btn-outline-danger">
                                                       <i class="fas fa-trash-alt"></i> Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                                <div class="hljs-container">
                                    <pre><code class="xml" data-url="assets/data/table-plugins/code-2.json"></code></pre>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- <div class="col-xl-3">

                        <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                            <nav class="nav">
                                <a class="nav-link" href="#datatable" data-toggle="scroll-to">Datatable</a>
                                <a class="nav-link" href="#bootstrapTable" data-toggle="scroll-to">Bootstrap table</a>
                            </nav>
                        </nav>

                    </div> -->

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@section('css_me')
<link
    href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
    rel="stylesheet">
<link
    href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css"
    rel="stylesheet">
<link
    href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css"
    rel="stylesheet">
<link href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css"
    rel="stylesheet">
@endsection

@section('js_me')
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/%40highlightjs/cdn-assets/highlight.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/demo/highlightjs.demo.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js">
</script>
<script
    src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js">
</script>
<script
    src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons/js/buttons.print.min.js">
</script>
<script
    src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js">
</script>
<script
    src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js">
</script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/demo/table-plugins.demo.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endsection
