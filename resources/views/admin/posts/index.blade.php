@extends('layouts.admin.app')
@section('page-name') Posts @endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Posts</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">RIMAWARD</a>
                    </li>
                    <li class="breadcrumb-item active">Posts</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="card-body p-4">
        <h5 class="card-title mb-4">Posts <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#showModal">Add Post</button></h5>
        <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title">Add Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close" id="close-modal"></button>
                    </div>

                    <form class="tablelist-form" method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            @if($errors->any())
                            <div class="mb-3">
                                <div class="alert alert-danger">
                                    <p><strong>Opps Something went wrong</strong></p>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>* {{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>

                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="customername-field"
                                    class="form-label">Post
                                    Title</label>
                                <input type="text" id="customername-field"
                                    class="form-control" placeholder="Enter post title"
                                    name="title" required  value="{{ old('title') }}"/>

                            </div>

                            {{-- image --}}
                            <div class="mb-3">
                                <label for="customername-field"
                                    class="form-label">Post
                                    Image</label>
                                <input type="file" class="form-control" placeholder="Enter post image" accept="image/*"
                                    name="image" required />
                            </div>
                            <div class="mb-3">
                                <label for="customername-field"
                                    class="form-label">Post
                                    Description</label>
                                <textarea type="text" id="customername-field" rows="5"
                                    class="form-control" placeholder="Enter post description"
                                    name="description">{{ old('description') }}</textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light"
                                    data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-success"
                                    id="add-btn">
                                    Add Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('uploads/'.$post->image) }}" alt="" class="img-fluid rounded" />

                        <ul class="list-inline fs-14 text-muted mt-3">
                            <li class="list-inline-item">
                                <i class="ri-calendar-line align-bottom me-1"></i> {{ $post->created_at->format('d M, Y') }}
                            </li>
                          
                        </ul>

                        <a href="javascript:void(0);">
                            <h5>{{ $post->title }}</h5>
                        </a>
                        <p class="text-muted fs-14">
                            {{ $post->description }}
                        </p>

                        <div class="float-end">
                            {{-- update and delete icon --}}
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#editModal{{ $post->id }}" class="link-success">Edit <i class="ri-pencil-line align-bottom ms-0"></i></a>
                            &nbsp; &nbsp; &nbsp;

                            <div class="modal fade" id="editModal{{ $post->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title">Edit Post</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close" id="close-modal"></button>
                                        </div>

                                        <form class="tablelist-form" method="post" action="{{ route('admin.posts.update',$post->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                @if($errors->any())
                                                <div class="mb-3">
                                                    <div class="alert alert-danger">
                                                        <p><strong>Opps Something went wrong</strong></p>
                                                        <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>* {{ $error }}</li>
                                                        @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                                @endif
                                                <div class="mb-3">
                                                    <label for="customername-field"
                                                        class="form-label">Post
                                                        Title</label>
                                                    <input type="text" id="customername-field"
                                                        class="form-control" placeholder="Enter post title"
                                                        name="title" required  value="{{ $post->title }}"/>

                                                </div>

                                                {{-- image --}}
                                                <div class="mb-3">
                                                    <label for="customername-field"
                                                        class="form-label">Post
                                                        Image</label>
                                                    <input type="file" class="form-control" placeholder="Enter post image" accept="image/*"
                                                        name="image"/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="customername-field"
                                                        class="form-label">Post
                                                        Description</label>
                                                    <textarea type="text" id="customername-field" rows="5"
                                                        class="form-control" placeholder="Enter post description"
                                                        name="description">{{ $post->description }}</textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-success"
                                                        id="add-btn">
                                                        Save Changes
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a href="#!"  data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $post->id }}" class="link-danger">Delete <i class="ri-delete-bin-line align-bottom ms-0"></i></a>
                            <div class="modal fade zoomIn" id="deleteRecordModal{{ $post->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" id="deleteRecord-close"
                                                data-bs-dismiss="modal" aria-label="Close"
                                                id="btn-close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ route('admin.posts.destroy',$post->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            <div class="mt-2 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                    trigger="loop"
                                                    colors="primary:#f7b84b,secondary:#f06548"
                                                    style="width: 100px; height: 100px"></lord-icon>
                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                    <h4>Are you sure ?</h4>
                                                    <p class="text-muted mx-4 mb-0">
                                                        Are you sure you want to remove this record ?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                <button type="button" class="btn w-sm btn-light"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn w-sm btn-danger"
                                                    id="delete-record">
                                                    Yes, Delete It!
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center">No Post Found</h5>
                    </div>
                </div>
            </div>

            @endforelse

        </div>
    </div>
</div>
<!--end row-->
@endsection

@section('script')
@if($errors->any())
<script>
    var myModal = new bootstrap.Modal(document.getElementById('showModal'), {
        keyboard: false
    })
    myModal.show()

</script>
@endif

@endsection
