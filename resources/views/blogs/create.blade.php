@extends('layouts.master')
@section('scripts')
{{--    <script> {{ asset('/build/tinymce/tinymce.js') }}</script>--}}

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                tinymce.init({
                    selector: 'textarea.tinymce-editor', // Adjust the selector as needed
                    plugins: 'lists link image table code',
                    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
                    hight:300,
                    file_picker_types: 'image',
                    automatic_uploads: true,
                    file_picker_callback: function (callback, value, meta) {
                        if (meta.filetype === 'image') {
                            const input = document.createElement('input');
                            input.setAttribute('type', 'file');
                            input.setAttribute('accept', 'image/*');
                            input.onchange = function () {
                                const file = this.files[0];
                                const formData = new FormData();
                                formData.append('file', file);

                                fetch('{{ route('image.upload') }}', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                })
                                    .then((response) => response.json())
                                    .then((data) => {
                                        callback(data.location); // Pass uploaded image URL to TinyMCE
                                    })
                                    .catch((error) => {
                                        console.error('Image upload failed:', error);
                                    });
                            };
                            input.click();
                        }
                    },
                    setup: function (editor) {
                        console.log('TinyMCE initialized');
                    }
                });
            });
    </script>

    @stop
@section('content')
{{--    <script src="https://cdn.tiny.cloud/1/hynsrvjliofhsuvferhykwvbnrfdssixt6ew5gjg4hlj2dw6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>--}}
<script src="{{asset('../build/tinymce/tinymce.js')}}"></script>

<div class="container-fluid ">
    <div class="col-lg-12">
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class=""></div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>
            <label for="tag">Tag</label>
            <select class="form-control">
                <option value="" disabled selected> Select tag</option>
                @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image">

            </div>
            <textarea class="form-control tinymce-editor" rows="30" name="content"></textarea>
            <div class="form-group mb-3">
                <label for="published">Published</label>
                <div class="form-check">
                    <input type="checkbox" name="published" class="form-check-input" id="published" >
                    <label class="form-check-label" for="published">Publish now?</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </form>

    </div>

</div>
@stop
