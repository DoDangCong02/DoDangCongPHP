@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form action="{{$product->pid}}" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Product</label>
        <input type="text" class="form-control" name="pid" id="" value="{{$product->pid}}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="pname" id="" value="{{$product->pname}}" id=""/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Company</label>
        <input type="text" class="form-control" name="company" id="" value="{{$product->company}}" id=""/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Select Band</label>
        <select class="form-select form-select-lg" name="selectBand" id="">
            <option value="Minocin">Minocin</option>
            <option value="AeroGreen Antibac">AeroGreen Antibac</option>
            <option value="Bodycology">Bodycology</option>
            <option value="ibuprofen">ibuprofen</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Select Year</label>
        <select class="form-select form-select-lg" name="selectYear" id="">
            <?php
            for ($year = 2015; $year <= 2025; $year++){
                echo '<option value="'. $year .'">'. $year .'</option>';
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Choose Image</label>
        <img src="{{$product->pimage}}" alt="Image">
        <input type="file" class="form-control" name="imageFile">
    </div>
    <button type="submit" name="btUpdate" class="btn btn-primary">
        Update
    </button>
@endsection