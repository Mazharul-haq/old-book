@section('page-title')
    Category Control
@endsection


@extends('frontend.pages.dashboard.layouts.main')

@section('user-section')
    @include('backend.layouts.partials.alerts')
    <div class="intro-y box mt-5">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
            <h2 class="font-medium text-base mr-auto">
                Create Role
            </h2>
        </div>
        <div class="p-5" id="horizontal-form">
            <form action="{{ route('dashboard.category.update',$category->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="preview" style="">
                    <div class="flex flex-col sm:flex-row items-center">
                        <label class="w-full sm:w-20 sm:text-right sm:mr-5">Category Name</label>
                        <input type="text" class="input w-full border mt-2 flex-1" value="{{$category->category_name}}" name="category_name">
                    </div>





                    <div class="sm:ml-20 sm:pl-5 mt-5">
                        <input type="submit" class="button bg-theme-9 text-white" value="Update" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
