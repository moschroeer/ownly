<x-site-layout>


    <form action="/items" method="post">

        @csrf

        <div>
            <label for="title"> Items </label> <br/>
            <input type="text" name="title" class="bg-gray-200 p-2">
        </div>

        <div>
            <label for="description"> Describe your item</label><br/>
            <textarea name="description" class="bg-gray-200 p-2"></textarea>
        </div>
        <br/><br/>
    <button class="bg-blue-500 p-1 uppercase" type="submit"> Create </button>
    </form>







</x-site-layout>
