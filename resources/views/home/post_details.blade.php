<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <base href="/public">
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')         
         <!-- banner section start -->
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <div class="col-md-12"  style="text-align: center; display:flex; flex-direction:column; align-items:center;justify-content:center;">
        <div ><img style="padding: 20px; height:350px; width:700px; margin:auto;" src="/postimage/{{$post->image}}" class="services_img"></div>
        <h4>{{$post->title}}</h4>
        <p>post by<b>{{$post->name}}</b></p>
        <div class="btn_main"><a href="{{url('post_details', $post->id)}}">Read more</a></div>
     </div>
      <!-- services section start -->
  
     @include('home.footer')