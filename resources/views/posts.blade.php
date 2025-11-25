@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-list"></i> {{ __('Posts List') }}</div>

                <div class="card-body">
                    @session('success')
                        <div class="alert alert-success" role="alert"> 
                            {{ $value }}
                        </div>
                    @endsession

                    <div id="notification">
                        
                    </div>
                    
                   
                    <p><strong>Create New Post</strong></p>
                    <form method="post" action="#" id="postForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" />
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Body:</label>
                            <textarea class="form-control" name="body"></textarea>
                            @error('body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </form>
                    

                    <p class="mt-4"><strong>Post List:</strong></p>
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th width="70px">ID</th>
                                <th>Title</th>
                                <th>Body</th>
                            </tr>
                        </thead>
                        <tbody class="data-table tbody">
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function loadPosts() {
    $.ajax({
        url: "{{ route('posts.ajax') }}",
        method: "GET",
        success: function (data) {
            $('.data-table tbody').html(data.html);
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {

    // Load posts on page load
    loadPosts();

    document.getElementById('postForm').addEventListener('submit', function(e) {
        e.preventDefault(); // stop normal form submit
        $.ajax({
            url: "{{ route('posts.store') }}",
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                if (data.success) {
                    document.getElementById('notification').insertAdjacentHTML(
                        'beforeend',
                        '<div class="alert alert-success alert-dismissible fade show"><span><i class="fa fa-circle-check"></i> '+data.message+'</span></div>'
                    );

                    document.getElementById('postForm').reset();

                    loadPosts(); // 🔥 reload posts table dynamically
                }
            },
            error: function(data) {
                var errors = data.responseJSON;
                $.each(errors.errors, function(key, value) {
                    document.getElementById('notification').insertAdjacentHTML(
                        'beforeend',
                        '<div class="alert alert-danger alert-dismissible fade show"><span><i class="fa fa-circle-exclamation"></i> '+value+'</span></div>'
                    );
                });
            }
        })
    });
});

</script>

    <script type="module">
            window.Echo.channel('posts')
                .listen('.create', (data) => {
                    console.log('Order status updated: ', data);
                    
                    var d1 = document.getElementById('notification');
                    d1.insertAdjacentHTML('beforeend', '<div class="alert alert-success alert-dismissible fade show"><span><i class="fa fa-circle-check"></i>  '+data.message+'</span></div>');

                    loadPosts();
                });
    </script>

@endsection
