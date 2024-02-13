@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Upload</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Tailwind CSS (only for background image) -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
            .has-mask {
                position: absolute;
                clip: rect(10px, 150px, 130px, 10px);
            }
        </style>
    </head>
    <body>
    <div class="relative min-h-screen d-flex align-items-center justify-content-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
         style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    File Upload!
                </h2>
                <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
            </div>
            <form class="mt-8 space-y-3" action="{{ route('create.media') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label class="form-label text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                        <div class="d-flex align-items-center justify-content-center w-100">
                            <label class="flex flex-col rounded-lg border-4 border-dashed w-100 h-60 p-10 group text-center">
                                <div class="h-100 w-100 text-center d-flex flex-column align-items-center justify-content-center">
                                    <div class="d-flex flex-auto max-h-48 w-2/5 mx-auto mt-neg-10">
                                        <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                    </div>
                                    <p class="pointer-none text-gray-500" style="padding-top: 130px;"><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                                </div>
                                <input type="file" class="visually-hidden" name="image">
                            </label>
                        </div>
                    </div>
                </div>
                <p class="text-sm text-gray-300">
                    <span>File type: doc, pdf, types of images</span>
                </p>
                <div>
                    <button type="submit" class="my-5 w-100 d-flex justify-content-center bg-blue-500 text-gray-100 p-4 rounded-full tracking-wide font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

@endsection
