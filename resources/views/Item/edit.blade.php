<x-site-layout>

    <form action="/items/{{$items->id}}" method="post">

        @method('PUT')
        @csrf

        <div>
            <label for="title">Title</label><br/>
            <input type="text" name="title" class="bg-gray-200 p-2" value="{{$items->title}}">
        </div>

        <div>
            <label for="description">Description</label><br/>
            <textarea name="description" class="bg-gray-200 p-2 w-1/2">{{$items->description}}</textarea>
        </div>

        <br/><br/>
        <button class="bg-blue-500 p-1 uppercase" type="submit">Update</button>
    </form>


</x-site-layout>
