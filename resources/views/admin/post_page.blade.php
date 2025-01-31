<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style type="text/css">
    .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color:white;
    }
    .div_center{
        text-align: center;
        padding: 30px;
    }
    label{
        width: 200px;
        display: inline-block;
    }
   </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            @if(session()->has('message'))
            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"
            aria-hideen="true">x</button>
            {{session()->get('message')}}
            </div>
            @endif
        <h1 class="post_title">add post</h1>
    
 
        <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div  class="div_center" >
                <label for="">Post title</label>
                <input type="text" name="title">

            </div>
            <div  class="div_center" >
                <label for="">Post description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
<div  class="div_center" >
    <label for="">add image</label>
    <input type="file" name="image">
</div>

<div  class="div_center" >
    <input type="submit"class="btn btn-primary">
</div>


        </form>
      </div>
    </div>
       @include('admin.footer')
  </body>
</html>