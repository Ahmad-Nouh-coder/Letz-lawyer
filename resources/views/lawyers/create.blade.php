@extends('layout')


@section('content')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Job
            </h2>
        </header>

    <form action="/lawyers" method="post" enctype="multipart/form-data" >
        {{-- this directive will be in all laravel forms --}}
        {{-- it prevents cross site scripting attacks --}}
        {{-- basically people stealing our form and messing with it --}}
        @csrf
        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" value="{{old('company')}}" class="border border-gray-200 rounded p-2 w-full" name="company" />
            @error('company')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" value="{{old('title')}}" class="border border-gray-200 rounded p-2 w-full" name="title"
                placeholder="Example: Senior Laravel Developer" />
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Job Location</label>
            <input type="text" value="{{old('location')}}" class="border border-gray-200 rounded p-2 w-full" name="location"
                placeholder="Example: Remote, Boston MA, etc" />
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
            <input type="text" value="{{old('email')}}" class="border border-gray-200 rounded p-2 w-full" name="email" />
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">
                Website/Application URL
            </label>
            <input type="text" value="{{old('website')}}" class="border border-gray-200 rounded p-2 w-full" name="website" />
            @error('website')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input type="text" value="{{old('tags')}}" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            @error('logo')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Job Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs m-2">{{ $message }}</p>
                @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create Job
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
@endsection