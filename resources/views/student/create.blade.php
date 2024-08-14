<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="h-screen">
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="max-w-[400px] mx-auto mt-6 flex flex-col gap-3 p-10 border border-black rounded-lg relative">
            <a href="{{ route('student.index') }}"
                class="absolute rounded-full top-0 right-0 -m-1 hover:scale-125 hover:bg-white duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>

            <h1 class="font-bold text-lg font-serif text-center mb-6">Student Registeration Form</h1>

            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('name')
                    border-red-500
                    @enderror
                    ">
                @error('name')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Course</label>
                <select
                    name="course_id"
                    class="border py-3 px-4 pe-9 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('course_id')
                    border-red-500
                    @enderror
                    ">
                    <option selected="">Select a course</option>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
                @error('course_id')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('email')
                    border-red-500
                    @enderror
                    ">
                @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('date_of_birth')
                    border-red-500
                    @enderror
                    ">
                @error('date_of_birth')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2 mb-4">
                <label for="input-label" class="block text-sm font-medium mb-4 dark:text-white">Gender</label>
                <div class="flex gap-x-6">
                    <div class="flex">
                        <input type="radio" name="gender" value="male"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-group-1" checked="">
                        <label for="hs-radio-group-1" class="text-sm ms-2 dark:text-neutral-400">Male</label>
                    </div>
                    <div class="flex">
                        <input type="radio" name="gender" value="female"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-group-2">
                        <label for="hs-radio-group-2" class="text-sm ms-2 dark:text-neutral-400">Female</label>
                    </div>
                    <div class="flex">
                        <input type="radio" name="gender" value="other"
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-group-2">
                        <label for="hs-radio-group-2" class="text-sm ms-2 dark:text-neutral-400">Other</label>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Create
            </button>
        </div>
    </form>
</body>

</html>
