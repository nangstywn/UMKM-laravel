@extends('layouts.main')

@section('content')
<div class="container product_section_container" style="padding: 30px;">
    <div class="row">
        <div class="col-md-12">

            {!!Form::model($products, ['route' => ['admin-products.update', $products->id], "method" => "put","files" =>
            true])!!}
            {!! Form::bsSelect("category_id","Category",null,$categoriess,"Please select a category") !!}
            {!! Form::bsFile("img[]","Gambar") !!}
            {!! Form::bsText("product_name","Nama Usaha") !!}
            {!! Form::bsText("email","Email") !!}
            {!! Form::bsText("phone","No. Hp") !!}
            {!! Form::bsText("address","Alamat") !!}
            {!! Form::bsText("maps","Sematkan Maps") !!}
            {!! Form::bsTextArea("product_detail","Detail Bisnis",null,["class" => "summernote"]) !!}
            {!! Form::bsSubmit("Update") !!}
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$('.summernote').summernote({
    tabsize: 2,
    height: 100
});
</script>
@endsection