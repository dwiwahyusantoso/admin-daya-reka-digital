@extends('admin.layout', ['title' => 'Landing Page'])
@section('content')
<div class="row">
	<div class="col-lg-10">
	    <div class="card card-primary">
	      <div class="card-header">
	        <h3 class="card-title">Setting</h3>
	      </div>
	      <form method="post" action="{{route('landing_page.store')}}">
	      	@csrf
	        <div class="card-body">
	          <div class="form-group">
	                <label>Theme</label>
	                <select name="mode" class="form-control">
	                  <option>dark</option>
	                  <option>light</option>
	                </select>
	          </div>
	          <div class="form-group">
	            <label for="title">Title</label>
	            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
	          </div>
	          <div class="form-group">
	            <label for="content1">Content 1</label>
	            <textarea rows="8" type="text" class="form-control" placeholder="{{$page->content1}}" name="content1" id="content1"></textarea>
	          </div>
	          <div class="form-group">
	            <label for="image1">Image content 1</label>
	            <div class="input-group">
	              <div class="custom-file">
	                <input type="file" class="custom-file-input" id="image1">
	                <label class="custom-file-label" for="image1">Choose file</label>
	              </div>
	              <div class="input-group-append">
	                <span class="input-group-text">Upload</span>
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="content2">Content 2</label>
	            <textarea rows="8" type="text" class="form-control" placeholder="{{$page->content2}}" name="content2" id="content2"></textarea>
	          </div>
	          <div class="form-group">
	            <label for="image2">Image content 2</label>
	            <div class="input-group">
	              <div class="custom-file">
	                <input type="file" class="custom-file-input" id="image2">
	                <label class="custom-file-label" for="image2">Choose file</label>
	              </div>
	              <div class="input-group-append">
	                <span class="input-group-text">Upload</span>
	              </div>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="content3">Content 3</label>
	            <textarea rows="8" type="text" class="form-control" placeholder="{{$page->content3}}" name="content3" id="content3"></textarea>
	          </div>
	          <div class="form-group">
	            <label for="image3">Image content 3</label>
	            <div class="input-group">
	              <div class="custom-file">
	                <input type="file" class="custom-file-input" id="image3">
	                <label class="custom-file-label" for="image3">Choose file</label>
	              </div>
	              <div class="input-group-append">
	                <span class="input-group-text">Upload</span>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="card-footer">
	          <button type="submit" class="btn btn-primary">Submit</button>
	        </div>
	      </form>
	    </div>
    </div>
</div>
@endsection