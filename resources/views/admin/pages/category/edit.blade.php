@extends('admin.layouts.back-app')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-default-sec pt-5">

            <p>Edit Category</p>

            <form action="{{ route('administrator.category.update_category') }}" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="{{ $category->id }}">
                @csrf
                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $category->name }}" placeholder="Enter category name" />
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="form-group">
                            <label for="offer_percentage">Offer Percentage</label>
                            <input type="number" class="form-control" id="offer_percentage" name="offer_percentage"
                                value="{{ $category->offer_percentage }}" placeholder="Enter offer percentage"
                                step="0.1" />
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="form-group">
                            <label for="tax_percent">Tax Percentage</label>
                            <input type="number" class="form-control" id="tax_percent" name="tax_percent"
                                value="{{ $category->tax_percent }}" placeholder="Enter tax percentage" step="0.1" />
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="form-group">
                            <label for="catimg">Category Image</label>
                            <input type="file" class="form-control-file" id="catimg" name="catimg">
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                    </div>
            </form>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection