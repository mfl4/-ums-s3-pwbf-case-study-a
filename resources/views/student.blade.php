@extends('home')

@section('content')
    <section class="max-w-2xl text-2xl mx-auto bg-white p-6 rounded border-2 border-violet-800 shadow-md mt-20">
        <table class="w-full">
            <tbody>
                <tr>
                    <td class="font-bold">Name:</td>
                    <td class="font-semibold">{{ $student->name }}</td>
                </tr>
                <tr>
                    <td class="font-bold">Gender:</td>
                    <td class="font-semibold">{{ $student->gender }}</td>
                </tr>
                <tr>
                    <td class="font-bold">Grade:</td>
                    <td class="font-semibold">{{ $student->grade }}</td>
                </tr>
                <tr>
                    <td class="font-bold">Address:</td>
                    <td class="font-semibold">{{ $student->address }}</td>
                </tr>
                <tr>
                    <td class="font-bold">Entry Year:</td>
                    <td class="font-semibold">{{ $student->entry_year }}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-6">
            <a href="/"
                class="text-xl px-4 py-2 bg-white text-violet-900 border border-violet-900 rounded hover:bg-violet-900 hover:text-white">Back
                To Home</a>
        </div>
    </section>
@endsection
