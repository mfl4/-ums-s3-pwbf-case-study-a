@extends('home')

@section('content')
    <section class="grid grid-cols-2 gap-4">
        @foreach ($students as $student)
            <a href="/{{ $student->id }}">
                <div
                    class="bg-white w-full p-4 rounded flex items-center justify-between flex-col cursor-pointer border border-violet-800 hover:shadow-2xl hover:shadow-violet-900 hover:border-2 hover:border-violet-900 transition duration-300">
                    <h2 class="text-3xl font-bold mb-2">{{ $student->name }}</h2>
                    <div class="flex items-center">
                        <span class="bg-violet-900 text-white px-2 py-1 rounded-full text-sm">Grade :
                            {{ $student->grade }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection
