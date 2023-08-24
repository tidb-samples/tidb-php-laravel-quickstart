@extends('layouts.app') @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
                <div class="text-left"><a href="/product" class="btn btn-outline-primary">Product List</a></div>

                <form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
                    <div class="control-group col-6 text-left">
                        <label for="title">Title</label>
                        <div>
                            {!! $product->title !!}
                        </div>
                    </div>
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Short Notes</label>
                        <div>
    						{!! $product->short_notes !!}
                        </div>
                    </div>

                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Price</label>
                        <div>
                            {!! $product->price !!}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
