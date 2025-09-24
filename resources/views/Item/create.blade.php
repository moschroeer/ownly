<x-site-layout>
    <div class="mx-auto w-3/5 py-6 rounded-2xl bg-white shadow-lg ring-2 ring-white p-6 my-6">
        <h1 class="text-4xl font-bold"> Add Your Item</h1>
    <form action="/items" method="post">

        @csrf

        <div class="max-w-md my-4">
            <label for="title"> Title: </label> <br/>
            <input type="text" name="title"
                   class="bg-slate-100 p-2 rounded-md w-full mt-1"
            />
        </div>

        <div class="max-w-md my-4">
            <label for="description"> Description:</label><br/>
            <textarea name="description" class="bg-slate-100 p-2 rounded-md w-full min-h-40 mt-1">Describe your item</textarea>
        </div>
    <button class="inline-flex rounded-md px-4 py-2 border-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white" type="submit"> Create </button>
    </form>
    </div>







</x-site-layout>
