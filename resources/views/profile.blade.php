@extends('layouts.app')

@section('content')

<body style="background-color:rgb(245, 241, 240);"> <!-- Orange background -->


<div class = "container">
    <div class = "row">
        <div class = "col-3 p-5">
            <img src = "" class = "rounded-circle">
        
        </div>
        <div class="col-9 pt-5">
            <div><h1>freecodecamp</h1></div>
            <div class="d-flex">
            <div class="me-5"><strong>153</strong> posts</div>
            <div class="me-5"><strong>23K</strong> followers</div>
            <div class="me-5"><strong>156</strong> following</div>
        </div>
        <div class="pt-2 font-bold">freecodecamp.org</div>
        <div>Sample text</div>
        <div><a href ="#">www.freecodecamp.org</a></div>
    </div>
</div>

<div class="row pt-4">
    <div class="col-4">
        <img src = "https://logo.com/image-cdn/images/kts928pd/production/5f4f0c90d60931ba876fad50c4533c3ec5602a91-7575x2115.webp?w=1920&q=70&fm=webp" class="w-100">
    </div>
    <div class="col-4">
        <img src = "https://logo.com/image-cdn/images/kts928pd/production/5f4f0c90d60931ba876fad50c4533c3ec5602a91-7575x2115.webp?w=1920&q=70&fm=webp" class="w-100">
    </div>
    <div class="col-4">
        <img src = "https://logo.com/image-cdn/images/kts928pd/production/5f4f0c90d60931ba876fad50c4533c3ec5602a91-7575x2115.webp?w=1920&q=70&fm=webp" class="w-100">
    </div>
</div>


@endsection

@php
    $noFooter = true; // This will exclude the footer from this page
@endphp

/<!-- Could not add fonts and could not change bg color -->

