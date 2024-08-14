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
    <div class="w-[400px] mx-auto mt-16">
        <div
            class="flex flex-col bg-white border border-black shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div
                class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <p class="mt-1 text-sm text-black dark:text-neutral-500">
                    Course Details
                </p>
            </div>
            <div class="p-4 md:p-5 flex flex-col gap-5">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                    {{ $course->name }} <span>course</span>
                </h3>

                <div class="flex rounded-lg border border-black overflow-hidden">
                    <span
                        class="w-[180px] inline-flex justify-center items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">Course
                        name</span>
                    <input type="text"
                        class="border text-black font-semibold py-3 text-center block w-full rounded-e-lg text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        value="{{ $course->description }}" disabled>
                </div>

                <div class="flex rounded-lg border border-black overflow-hidden">
                    <span
                        class="w-[180px] inline-flex justify-center items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">Student
                        Limit</span>
                    <input type="text"
                        class="border text-black font-semibold py-3 text-center block w-full rounded-e-lg text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        value="{{ $course->student_limit }}" disabled>
                </div>

                <div class="flex rounded-lg border border-black overflow-hidden">
                    <span
                        class="w-[180px] inline-flex justify-center items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">Start
                        Date</span>
                    <input type="date"
                        class="border text-black font-semibold py-3 text-center block w-full rounded-e-lg text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        value="{{ $course->start_date }}" disabled>
                </div>

                <div class="flex rounded-lg border border-black overflow-hidden">
                    <span
                        class="w-[180px] inline-flex justify-center items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">End
                        Date</span>
                    <input type="date"
                        class="border text-black font-semibold py-3 text-center block w-full rounded-e-lg text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        value="{{ $course->end_date }}" disabled>
                </div>

                <div class="flex rounded-lg border border-black overflow-hidden">
                    <span
                        class="w-[180px] inline-flex justify-center items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">Register</span>
                    <input type="text"
                        class="border py-3 font-semibold text-center block w-full rounded-e-lg text-sm focus:z-10 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 @if ($course->register === 'open') text-green-500
                    @else text-red-500 @endif"
                        value="{{ $course->register }}" disabled>
                </div>

                <a type="button" href="{{route('course.index')}}"
                    class="mt-3 py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-black text-white hover:bg-gray-800 hover:text-white focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                    Back
                </a>




            </div>
        </div>
    </div>
</body>

</html>
