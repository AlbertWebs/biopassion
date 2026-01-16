@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <div class="content">
       <div class="page-header">
          <div class="row">
             <div class="col-sm-12">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard </a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item"><a href="{{route('admin.tests.index')}}">Tests</a></li>
                   <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                   <li class="breadcrumb-item active">Add New Test</li>
                </ul>
             </div>
          </div>
       </div>

       @if ($errors->any())
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul class="mb-0">
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       @endif

       <div class="row">
          <div class="col-sm-12">
             <div class="card">
                <div class="card-body">
                   <form action="{{route('admin.tests.store')}}" method="POST">
                      @csrf
                      
                      <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                               <label>Title <span class="text-danger">*</span></label>
                               <input type="text" class="form-control" name="title" value="{{old('title')}}" required>
                               @error('title')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>Slug</label>
                               <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Auto-generated from title if left empty">
                               <small class="form-text text-muted">Leave empty to auto-generate from title</small>
                               @error('slug')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>Category</label>
                               <input type="text" class="form-control" name="category" value="{{old('category')}}" placeholder="e.g., Genetic Testing, DNA Testing">
                               @error('category')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-4">
                            <div class="form-group">
                               <label>Original Price (KSh)</label>
                               <input type="number" step="0.01" class="form-control" name="original_price" value="{{old('original_price')}}" min="0">
                               @error('original_price')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <label>Current Price (KSh)</label>
                               <input type="number" step="0.01" class="form-control" name="current_price" value="{{old('current_price')}}" min="0">
                               @error('current_price')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="form-group">
                               <label>Discount Percentage</label>
                               <input type="number" class="form-control" name="discount_percentage" value="{{old('discount_percentage')}}" min="0" max="100">
                               @error('discount_percentage')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>Product ID</label>
                               <input type="text" class="form-control" name="product_id" value="{{old('product_id')}}">
                               @error('product_id')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>SKU</label>
                               <input type="text" class="form-control" name="sku" value="{{old('sku')}}">
                               @error('sku')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>Image URL</label>
                               <input type="url" class="form-control" name="image_url" value="{{old('image_url')}}" placeholder="https://example.com/image.jpg">
                               @error('image_url')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label>Test URL</label>
                               <input type="url" class="form-control" name="url" value="{{old('url')}}" placeholder="https://dnalabskenya.com/test/...">
                               @error('url')
                                  <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                      </div>

                      <div class="m-t-20 text-center">
                         <button type="submit" class="btn btn-primary submit-btn">Save Test</button>
                         <a href="{{route('admin.tests.index')}}" class="btn btn-secondary">Cancel</a>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
