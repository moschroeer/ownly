<x-site-layout>
<div class="mx-auto w-3/5 py-6 rounded-2xl bg-white ring-2 ring-white bg-white shadow-lg p-6 my-6">
    <h1 class="text-4xl font-bold"> Edit Your Item</h1>
    <form action="/items/{{$items->id}}" method="post">

        @method('PUT')
        @csrf

        <div class="max-w-md my-4">
            <label for="title">Title:</label><br/>
            <input type="text" name="title" class="bg-slate-100 p-2 rounded-md w-full mt-1" value="{{old('title',$items->title)}}">
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="max-w-md my-4">
            <label for="description">Description:</label><br/>
            <textarea name="description" class="bg-slate-100 p-2 rounded-md w-full min-h-40 mt-1">{{old('description',$items->description)}}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <button class="inline-flex rounded-md px-4 py-2 border-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white" type="submit">Update</button>
    </form>
</div>


</x-site-layout>
