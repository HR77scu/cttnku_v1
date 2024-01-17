@extends('templates.template')

@section('title','Note Created')

@section('content')
<div id="content" class="app-content p-3">

    <div class="card h-100">

        
        <div class="mailbox">

            <div class="mailbox-toolbar">
                <div class="mailbox-toolbar-item"><span class="mailbox-toolbar-text">@yield('title')</span></div>
                <div class="mailbox-toolbar-item ms-auto"><a href="{{route('note.create')}}" class="mailbox-toolbar-link"><i
                            class="fa fa-redo fa-fw fs-12px me-1"></i> Undo</a></div>
                <div class="mailbox-toolbar-item"><a href="{{route('note.index')}}" class="mailbox-toolbar-link"><i
                            class="fa fa-times fa-fw"></i> Cancel</a></div>
            </div>


            <div class="mailbox-body">
                <div class="mailbox-content">

                    <div data-scrollbar="true" data-height="100%">
                        <div class="mailbox-form">
                            <form action="{{route('note.update', $note->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mailbox-form-header">
                                            <div class="row mb-2">
                                                <label class="col-form-label w-100px px-2 fw-500 text-lg-end">Judul Catatan:</label>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" value="{{$note->title}}" name="title" id="title" placeholder="Masukkan judul catatan">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label class="col-form-label w-100px px-2 fw-500 text-lg-end">Type Catatan:</label>
                                                <div class="col-lg">
                                                    <!-- <ul id="email-cc" class="form-control tagit">
                                                    </ul> -->
                                                    <!-- <input type="text" class="form-control"> -->
                                                    <select name="type_note" id="type_note" class="form-control">
                                                        <option value="no_script" @if($note->type_note == 'no_script') selected @else @endif  >No Script</option>
                                                        <option value="script" @if($note->type_note == 'script') selected @else @endif >Script</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <textarea class="form-control" name="note_content" id="note_content" style="height: 300px;" title="Contents" placeholder="Isi Catatan Disini">{{$note->note_content}}</textarea>
                                        <!-- <textarea name="text" class="summernote form-control" name="note_content2" id="note_content2" title="Contents" placeholder="Isi Catatan Disini"></textarea> -->
                                    </div>
                                    <!-- <a href="" class="row col-lg-12 btn btn-sm btn-block btn-outline-white">Simpan</a> -->
                                    <button class="row col-lg-12 btn btn-sm btn-block btn-outline-white">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>



        <div class="card-arrow">
            <div class="card-arrow-top-left"></div>
            <div class="card-arrow-top-right"></div>
            <div class="card-arrow-bottom-left"></div>
            <div class="card-arrow-bottom-right"></div>
        </div>

    </div>

</div>
@endsection

@section('css_me')
<link href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet">
<link href="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet">
@endsection

@section('js_me')
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/tag-it/js/tag-it.min.js"></script>
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/plugins/summernote/dist/summernote-lite.min.js"></script>	
<script src="{{asset('templateku/seantheme.com/hud')}}/assets/js/demo/email-compose.demo.js"></script>
@endsection

@section('js_custom')
<script>
document.getElementById('note_content2').style.display = 'none';
$('#type_note').on('change', function(){
    var selectValue = document.getElementById("type_note").value;
    var textareaElement = document.getElementById("note_content");
    if (selectValue === "no_script") {
        // textareaElement.classList.add("summernote");
        $('#note_content')
    } else {
        textareaElement.classList.remove("summernote");
    }
});
</script>
@endsection