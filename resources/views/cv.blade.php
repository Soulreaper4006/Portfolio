@extends('layout')

@section('title', __('messages.my_cv') . ' - ' . __('messages.title'))

@section('content')
<div class="h-screen max-w-6xl mx-auto flex flex-col">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-white">{{ __('messages.my_cv') }}</h1>
        <a href="{{ app()->getLocale() == 'en' ? '/pdf/CV_anglais.pdf' : '/pdf/CV_francais.pdf' }}" download class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition shadow-lg shadow-purple-600/30">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            {{ __('messages.download_cv') }}
        </a>
    </div>

    <div class="flex-grow bg-gray-800 rounded-lg shadow-2xl overflow-hidden border border-gray-700">
        <iframe src="{{ app()->getLocale() == 'en' ? '/pdf/CV_anglais.pdf' : '/pdf/CV_francais.pdf' }}" class="w-full h-full" frameborder="0">
            <p class="text-white text-center p-10">
                {{ __('messages.pdf_error') }}<br>
                <a href="{{ app()->getLocale() == 'en' ? '/pdf/CV_anglais.pdf' : '/pdf/CV_francais.pdf' }}" class="text-purple-400 underline">{{ __('messages.click_to_download') }}</a>
            </p>
        </iframe>
    </div>
</div>
@endsection
