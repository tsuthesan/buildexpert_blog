@extends('layouts.master')
@section('title')
    ||Build Expert - create
@stop
@section('scripts')
    <script> {{ asset('/build/tinymce/tinymce.js') }}</script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: 'textarea.tinymce-editor', // Adjust the selector as needed
                plugins: 'lists link image table code',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
                hight: 300,
                license_key: 'hynsrvjliofhsuvferhykwvbnrfdssixt6ew5gjg4hlj2dw6',
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('Form').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent form submission
                let isValid = true;
                const alertContainer = document.getElementById('alert-container');
                alertContainer.innerHTML = ''; // Clear previous alerts

                // Validate Title
                const title = document.getElementById('title');
                const titleGroup = document.getElementById('title-group');
                if (!title.value.trim()) {
                    titleGroup.classList.add('has-error');
                    isValid = false;
                } else {
                    titleGroup.classList.remove('has-error');
                }

                // Validate Tag
                const tag = document.getElementById('tags');
                const tagGroup = document.getElementById('tag-group');
                if (!tag.value) {
                    tagGroup.classList.add('has-error');
                    isValid = false;
                } else {
                    tagGroup.classList.remove('has-error');
                }

                // Validate Image
                const image = document.getElementById('image');
                const imageGroup = document.getElementById('image-group');
                if (!image.value) {
                    imageGroup.classList.add('has-error');
                    isValid = false;
                } else {
                    imageGroup.classList.remove('has-error');
                }

                // Validate Content
                const content = document.getElementById('content');
                const contentGroup = document.getElementById('content-group');
                if (!content.value.trim()) {
                    contentGroup.classList.add('has-error');
                    isValid = false;
                } else {
                    contentGroup.classList.remove('has-error');
                }

                // Show alert if invalid
                if (!isValid) {
                    alertContainer.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Please fill out all required fields.
                </div>
            `;
                } else {
                    alertContainer.innerHTML = `
                <div class="alert alert-success" role="alert">
                    Form submitted successfully!
                </div>
            `;
                    // Submit the form (if needed, you can uncomment the line below)
                    this.submit();
                }
            });
        });

    </script>

@stop
@section('styles')
    <style>
        .form-control .has-error {
            border-color: #a94442;
        }
    </style>
@stop
@section('content')
    {{--    <script src="https://cdn.tiny.cloud/1/hynsrvjliofhsuvferhykwvbnrfdssixt6ew5gjg4hlj2dw6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>--}}
    <script src="{{asset('../build/tinymce/tinymce.js')}}"></script>

    <div class="container-fluid ">
        <div class="col-lg-12">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" id="Form">
                @csrf
                <div class="form-group" id="title-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                </div>
                <div class="form-group" id="tag-group">
                    <label for="tags">Tag</label>
                    <select class="form-control" id="tags" name="tags[]">
                        <option value="" disabled selected> Select tag</option>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" id="image-group">
                    <label for="image">Feature Image</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="form-group" id="content-group">
                    <label for="content"> Content </label>
                    <textarea class="form-control tinymce-editor" rows="30" name="content" id="content"></textarea>
                </div>


                <div class="form-group mb-3" id="published-group">
                    <label for="published">Published</label>
                    <div class="form-check">
                        <input type="checkbox" name="published" class="form-check-input" id="published">
                        <label class="form-check-label" for="published">Publish now?</label>
                    </div>
                </div>

                <div id="alert-container"></div>

                <button type="submit" class="btn btn-success">Create</button>
                <button type="submit" class="btn btn-default">Cancel</button>
            </form>


        </div>

    </div>
@stop
