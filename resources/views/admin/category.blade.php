@extends('layouts.main')

@section('content')

<div class="container product_section_container" style="padding: 30px;">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-12">
            <a href="/admin-category/create" class="btn btn-danger">
                <i class="fa fa-plus"></i>
                Tambahkan Kategori
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>slug</th>
                        <th>Created At</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $categories ->perPage()*($categories->currentPage()-1)+$i }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="/admin-category/{{$category->id}}/edit" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <a href="/admin-category/{{$category->id}}" class="btn btn-danger" data-method="delete"
                                data-confirm="Are you sure?"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<script src="{{asset("js/laravel-delete.js")}}"></script>
@endsection