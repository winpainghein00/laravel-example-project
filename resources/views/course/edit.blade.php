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
    {{-- {{$course}} --}}
    <form method="POST" action="{{ route('course.update', $course->id) }}">
        @method('put')
        @csrf
        <div class="max-w-[400px] mx-auto my-5 flex flex-col gap-3 p-10 border border-black rounded-lg relative">
            <a href="{{ route('course.index') }}"
                class="absolute rounded-full top-0 right-0 -m-1 hover:scale-125 hover:bg-white duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>

            <h1 class="font-bold text-lg font-serif text-center mb-6">Course Edit Form</h1>

            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}"
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
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Description</label>
                <input type="text" id="description" name="description"
                    value="{{ old('description', $course->description) }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('description')
                    border-red-500
                    @enderror
                    ">
                @error('description')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Student Limit</label>
                <input type="number" id="student_limit" name="student_limit"
                    value="{{ old('student_limit', $course->student_limit) }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('student_limit')
                    border-red-500
                    @enderror
                    ">
                @error('student_limit')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Start Date</label>
                <input type="date" id="start_date" name="start_date"
                    value="{{ old('start_date', $course->start_date) }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('start_date')
                    border-red-500
                    @enderror
                    ">
                @error('start_date')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="max-w-sm">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">End Date</label>
                <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $course->end_date) }}"
                    class="border py-3 px-4 block w-full border-black rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                    @error('end_date')
                    border-red-500
                    @enderror
                    ">
                @error('end_date')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2 mb-4">
                <label for="input-label" class="block text-sm font-medium mb-4 dark:text-white">Register</label>
                <div class="flex gap-x-6">
                    <div class="flex">
                        <input type="radio" name="register" value="open"
                            {{ $course->register === 'open' ? 'checked' : '' }}
                            {{-- @if ($course->register === 'open')
                                checked
                            @endif --}}
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-group-1">
                        <label for="hs-radio-group-1" class="text-sm ms-2 dark:text-neutral-400">Open</label>
                    </div>
                    <div class="flex">
                        <input type="radio" name="register" value="close"
                            {{ $course->register === 'close' ? 'checked' : '' }}
                            {{-- @if ($course->register === 'close')
                                checked
                            @endif --}}
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="hs-radio-group-2">
                        <label for="hs-radio-group-2" class="text-sm ms-2 dark:text-neutral-400">Close</label>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Update
            </button>
        </div>
    </form>
</body>

</html>
