@extends('admin.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header font-bold">Add A Categories to all product</h5>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    <div class="card-body">
        <form method="post" action="{{route('admin.category.create')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputTitle" class="col-form-label">Category Name <span class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="category" placeholder="Enter title" value="{{old('category')}}" class="form-control">
                @error('category')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>


        <div class="container mt-4">
    <h2>All Categories will in the Market place section</h2>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
            </tr>
        </thead>
     <tbody>
        @forelse ($category as $index => $cat)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $cat->category }}</td>
                <td>{{ $cat->created_at->format('F j, Y g:i A') }}</td>
                {{-- Example format: July 31, 2025 10:15 AM --}}
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">No categories found.</td>
            </tr>
        @endforelse
    </tbody>
    </table>
</div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
        $('#summary').summernote({
            placeholder: "Write short description.....",
            tabsize: 2,
            height: 100
        });
    });

    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Write detail description.....",
            tabsize: 2,
            height: 150
        });
    });
    // $('select').selectpicker();
</script>

<script>
    $('#cat_id').change(function() {
        var cat_id = $(this).val();
        // alert(cat_id);
        if (cat_id != null) {
            // Ajax call
            $.ajax({
                url: "/admin/category/" + cat_id + "/child",
                data: {
                    _token: "{{csrf_token()}}",
                    id: cat_id
                },
                type: "POST",
                success: function(response) {
                    if (typeof(response) != 'object') {
                        response = $.parseJSON(response)
                    }
                    // console.log(response);
                    var html_option = "<option value=''>----Select sub category----</option>"
                    if (response.status) {
                        var data = response.data;
                        // alert(data);
                        if (response.data) {
                            $('#child_cat_div').removeClass('d-none');
                            $.each(data, function(id, title) {
                                html_option += "<option value='" + id + "'>" + title + "</option>"
                            });
                        } else {}
                    } else {
                        $('#child_cat_div').addClass('d-none');
                    }
                    $('#child_cat_id').html(html_option);
                }
            });
        } else {}
    })
</script>
@endpush