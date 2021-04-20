@extends('Layouts.app')
@section('Content')
 <!-- Main Content-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titile</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th>{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->content}}</td>
      <td>
          <a class="btn btn-warning" href="{{route('posts.edit', $post->id)}}">Edit</a>
          <button type="button" class="btn btn-danger delete-button" data-id="{{$post->id}}">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table> 
<div class="d-flex justify-content-lg-center">
    @if($posts->previousPageUrl())
    <a class="btn btn-primary" href="{{$posts->previousPageUrl()}}">< Previous</a>
    @endif
    @if($posts->nextPageUrl())
    <a class="btn btn-primary" href="{{$posts->nextPageUrl()}}">Next ></a>
    @endif
</div> 

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', evt => {
        $('.delete-button').click(function (e) {
            if (confirm('Are you sure ???')) {
                $.ajax({
                    url: '/posts/' + $(this).data('id'),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    success: function(result){
                        location.reload();
                    }
                });
            }
        });
    })
</script>
<!-- <script type="text/javascript">
  document.addEventListener('DOMContentLoaded',evt=>{
    $('.delete-button').click(function (e)){
      if (confirm('Are you sure ???')) {
        $.ajax({
          url:'/posts/' + $(this).data('id'),
          headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
          },
          type: 'DELETE',
          success: function(result){
            location.reload();
          }
        });
      }
    }
  })
</script> -->
@endsection