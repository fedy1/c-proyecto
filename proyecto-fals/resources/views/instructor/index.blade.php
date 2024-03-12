@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div>
            <h3 style="text-align: center; margin-bottom: 20px;">Instructors Table</h3>
            <table style="border: 3px solid black; text-align: center;">
                <thead>
                    <tr>
                        <th style="background-color: #0F7EF1; color: white;">ID</th>
                        <th style="background-color: #0F7EF1; color: white;">Name</th>
                        <th style="background-color: #0F7EF1; color: white;">Profession</th>
                        <th style="background-color: #0F7EF1; color: white;">Speciality</th>
                        <th style="background-color: #0F7EF1; color: white;">Email</th>
                        <th style="background-color: #0F7EF1; color: white;">Delete</th>
                        <th style="background-color: #0F7EF1; color: white;">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($instructors as $instructor)
                        <tr>
                            <td>{{ $instructor->user->id }}</td>
                            <td>{{ $instructor->user->name }}</td>
                            <td>{{ $instructor->profession }}</td>
                            <td>{{ $instructor->speciality }}</td>
                            <td>{{ $instructor->user->email }}</td>
                            <td>
                                <form action="{{ route('instructor.destroy', $instructor) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
                                </form>
                            </td>
                            <td>
                                <form method="GET" action="{{ route('instructor.edit', $instructor->id) }}">
                                    <button type="submit" style="background-color: #0F7EF1; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Edit Instructor</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
