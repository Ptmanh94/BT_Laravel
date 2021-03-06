@extends('Layouts.app')
@section('Content')

<div class="container">
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            
            <h1>Create post</h1>
            
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                

                <div class="form-group has-error">
                    <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                    <input type="text" class="form-control" name="slug" value="" />
                    <span class="help-block">Field not entered!</span>
                </div>
                
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input type="text" class="form-control" name="title" value="" />
                </div>
                
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea rows="5" class="form-control" name="content" ></textarea>
                </div>
                
                <div class="form-group">
                    <p><span class="require">*</span> - required fields</p>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    
                </div>
                
            </form>
        </div>
        
    </div>
</div>

@endsection