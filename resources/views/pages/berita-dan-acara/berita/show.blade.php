@extends('layouts.base')
@section('title', 'Berita')
@section('content')
{{-- Breadcrumb --}}
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/berita-dan-acara">Berita dan Acara</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('berita-dan-acara.berita.index') }}">Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $slug }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

{{-- News Details --}}
<section>
    <div class="container-fluid p-0 m-0 position-relative" style="height: 350px">
        <img id="image" class="w-100 h-100 p-0 m-0 object-fit-cover" style="object-position: center;" src="" alt="">
        <div class="position-absolute w-100 h-100 p-0 m-0 top-0 start-0" style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
        <div class="position-absolute w-100 h-100 p-0 m-0 top-0 start-0">
            <div class="container h-100 d-flex flex-column align-items-start justify-content-end">
                <p id="category" class="border-start border-3 ps-3 py-0 fs-6 text-light m-0"></p>
                <h1 id="title" class="text-orange display-5 fw-semibold pb-3"></h1>
            </div>
        </div>
    </div>
    <div class="container overflow-hidden my-4">
        <div class="row overflow-auto">
            <div class="col-12">
                <div class="img-fluid" id="content"></div>
            </div>
        </div>
    </div>
</section>
<style>
#content img {
    max-width: 100%;
    height: auto;
    display: block;
}
#content {
    overflow-x: hidden;
    word-wrap: break-word;
}
#content figure {
    max-width: 100%;
}
</style>
</style>
<script>
const slug = "{{ $slug }}";
const url = "/api/master-data/news/" + slug;

async function fetchNews() {
    try {
        const res = await fetch(url, { headers: { "Accept": "application/json" } });
        if (!res.ok) throw new Error("Failed to fetch news");

        const { data } = await res.json();

        // Inject ke DOM
        document.getElementById('title').innerText = data.title;
        document.getElementById('category').innerText = (data.category === 'berita' ? 'Berita': data.category === 'acara' ? 'Acara': 'Berita Acara') + " - " + data.user.name;
        document.getElementById('image').src = data.image_url;
        document.getElementById('image').alt = data.title;
        document.getElementById('content').innerHTML = data.content;

    } catch (err) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: err.message || 'Terjadi kesalahan',
            confirmButtonText: 'OK'
        })
    }
}

document.addEventListener('DOMContentLoaded', fetchNews);
</script>

{{-- Parenting Question Component --}}
<x-sections.parenting-question></x-sections.parenting-question>
@endsection
