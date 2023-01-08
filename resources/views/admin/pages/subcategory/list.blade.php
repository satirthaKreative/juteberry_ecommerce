@extends('admin.layouts.back-app')

<style>
    .table th,
    .table td {
        text-align: center;
        vertical-align: baseline;
    }
</style>

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid dashboard-default-sec pt-5">

            <div class="row">
                <div class="col-xl-12 col-md-12 box-col-12 des-xl-100">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Offer percentage</th>
                                <th scope="col">Tax percent</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parentCategory as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="http://localhost:8000/category/{{ $item->path }}" alt=""
                                            style="width: 100px" />
                                    </td>
                                    <td>{{ $item->offer_percentage }}</td>
                                    <td>{{ $item->tax_percent }}</td>
                                    <td>
                                        <a href="{{ route('administrator.category.fetch_sub_category', ['id' => $item->id]) }}"
                                            class="btn btn-danger">
                                            Edit
                                        </a>
                                        <a href="{{ route('administrator.category.delete_sub_category', ['id' => $item->id]) }}"
                                            class="btn btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
