@extends('layouts.main')
@section('content')

<div class="container product_section_container" style="padding: 30px;">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-12">
            <a href="/admin-products/create" class="btn btn-danger">
                <i class="fa fa-plus"></i>
                Tambahkan Iklan
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover" id="datatable">
                @if($products->isEmpty())
                <div class="alert alert-warning">
                    <strong>Maaf !</strong> Tidak Ada Iklan Ditemukan.
                </div>
                @else
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama Bisnis</th>
                        <th>Email</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $products ->perPage()*($products->currentPage()-1)+$i }}</td>
                        <td>{!! !empty($product->thumbs) ? $product->thumbs:'' !!}</td>
                        <td> {{ $product->categories->category_name }}
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->email }}</td>
                        <td>{{$product->phone}}</td>
                        <td>{{ $product->address }}</td>
                        <td>
                            <a href="{{ route('product',$product->slug) }}" class="btn btn-info"><i
                                    class="fa fa-eye"></i> View</a>
                            <a href="/admin-products/{{$product->id}}/edit" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <a href="/admin-products/{{$product->id}}" class="btn btn-danger" data-method="delete"
                                data-confirm="Are you sure?"><i class="fa fa-trash"></i> Delete</a>

                        </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                    @endif
                </tbody>
            </table>

            <!--div class="row">
                <div class="col-md-12">

                    <{!! $products->links() !!}>
                </div>
            </div-->
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset("js/laravel-delete.js")}}"></script>
<div class="row">
                <div class="col-md-12">
                <script>
				 $(document).ready( function () {
							    $('#datatable').DataTable();
								} );
</script>
                    <!--{!! $products->links() !!}-->
                </div>
            </div>

@endsection