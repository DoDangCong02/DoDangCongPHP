@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<table>
    <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">PID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Company</th>
                <th class=\"text-center\">Year</th>
                <th class=\"text-center\">Band</th>
                <th class=\"text-center\">Image</th>
                <th class=\"text-center\">Edit</th>
                <th class=\"text-center\">Delete</th>
            </tr>
        </thead>
    </tbody>
</table>
@foreach ($products as $product)
<tr>
    <td class=\"text-left\">{{$product->pid}}</td>
    <td class=\"text-left\">{{$product->pname}}</td>
    <td class=\"text-left\">{{$product->company}}</td>
    <td class=\"text-left\">{{$product->year}}</td>
    <td class=\"text-left\">{{$product->band}}</td>
    <td class="text-left">
        <img src="{{ $product->pimage }}" alt="Image">
    </td>
    <td class="text-center">
        <a href="updateProduct/{{ $product->pid }}">
                <i class="fa fa-pencil fa-fw"></i>Edit
        </a>
    </td>
    <td class="text-center">
        <a href="deleteProduct/{{ $product->pid }}">
            <i class="fa fa-trash-o fa-fw"></i>Delete
        </a>
    </td>
</tr>
@endforeach
@endsection