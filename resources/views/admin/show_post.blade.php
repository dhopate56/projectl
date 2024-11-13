<!DOCTYPE html>
<html>
  <head> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
    @include('admin.css')
   <style type="text/css">
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color:white;
    }
    .table_deg{
    width: 80%;
    border: 2px solid white;
    text-align:center;
    margin-left: 70px;
  
  }
.tr_deg{
  background-color: skyblue;
}
.img_deg{
  width: 150px;
  height: 100px;
  padding: 10px;
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
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
        </div>
        @endif
          <h1 class="title_deg">all post</h1>
  <table class="table_deg">
    <tr class="tr_deg">
      <th>post title</th>
      <th>description</th>
      <th>name</th>
      <th>post by</th>
      <th>usertype</th>
      <th>image</th>

    </tr>
    @foreach ($post as $p )
    <tr>
<td>{{$p->title}}</td>
<td>{{$p->description}}</td>
<td>{{$p->name}}</td>
<td>{{$p->usertype}}</td>
<td>{{$p->usertype}}</td>
<td>
<img src="postimage/{{$p->image}}" alt="" class="img_deg">  
</td>
<td>
  <a href="{{url('delete_post', $p->id)}}"  class="btn btn-danger" onclick="confirmation(event)">delete</a>
</td>
<td>
  <a href="{{url('edit_page', $p->id)}}"  class="btn btn-success" >edit</a>
</td>


</tr>
    @endforeach

    
  </table>
</div>
        @include('admin.footer')
         
        <script type="text/javascript">
function confirmation(ev)
{
ev.preventDefault();
var urlToRedirect=ev.currentTarget.getAttribute('href');
console.log(urlToRedirect);

swal({
title: "Are you Sure to delete this ",
text: "You won't be able to revert this delete ",
icon: "warning",
buttons: true,
dangerMode: true,

})
.then((willCancel)=>
{
  if(willCancel)
  {
    window.location.href=urlToRedirect;
  }
});
}

        </script>
  </body>
</html>