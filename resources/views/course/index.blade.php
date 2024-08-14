<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="">
    <p class="md:hidden none p-2 bg-black text-white text-xs text-center">Please use your device in landscape mode for better experience</p>
    <div class="max-w-[800px] md:mt-10 mt-5 mx-auto p-5 md:p-0 ">
        <div class="flex justify-between items-end mb-5 ">
            <h1 class="font-bold font-serif text-xl">List of Courses</h1>
            <a href="{{ route('course.create') }}" type="button"
                class="py-3 px-4 inline-flex items-center justify-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-black text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Create New
            </a>
        </div>
        <div class="my-5">
            <form action="{{route('course.search')}}" method="GET">
                <div class="inline-block space-y-3 my-3">
                    <div>
                        <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                        <div class="flex rounded-lg shadow-sm">
                            <input type="text" id="hs-trailing-button-add-on-with-icon"
                                name="query"
                                class="py-2 px-4 block border border-gray-300 shadow-sm rounded-s-lg text-sm focus:z-10 focus:outline-none focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <button type="submit"
                                class="border-black py-2 px-4 shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border bg-black text-white hover:bg-slate-700 focus:outline-none focus:bg-slate-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                            </button>
                            <a type="button" href="{{ route('course.index') }}"
                                class="ms-2 border-black py-0 px-3 shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border text-black hover:bg-black hover:text-white focus:bg-slate-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>
                    </div>
            </form>
        </div>
        <div class="flex flex-col border rounded-lg overflow-hidden">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        description</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        Student Limit</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        Register</th>
                                    <th scope="col"
                                        class="text-center px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                                @foreach ($courses as $course)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $loop->iteration }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            {{ $course->name }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                            {{ $course->description }}</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                            {{ $course->student_limit }}</td>

                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm dark:text-neutral-200  @if ($course->register === 'open') text-green-500 @elseif($course->register === 'close') text-red-500 @endif
                                             ">
                                            {{ $course->register }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <div
                                                class="flex items-center gap-5 justify-center border p-1 rounded-lg hover:bg-white">

                                                <a type="button" href="{{ route('course.show', $course->id) }}"
                                                    class="hover:scale-110 active:scale-100 duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="size-6">
                                                        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>

                                                </a>
                                                <a href="{{route('course.edit',$course->id)}}" class="hover:scale-110 active:scale-100 duration-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" class="size-5">
                                                        <path
                                                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                    </svg>
                                                </a>

                                                <form action="{{route('course.destroy',$course->id)}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="hover:scale-110 active:scale-100 duration-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5">
                                                            <path fill-rule="evenodd"
                                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-6 pt-5 pb-4 border-t">
                            {{ $courses->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
