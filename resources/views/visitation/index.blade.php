@extends('../layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome to St. Ursula Academy</h1>
        <h3>Select your school and then select your name</h3>

        <div class="form-group">
            <label for="schools">School</label>

            <select name="school_id" id="schools" class="form-control">
                <option value="">Select Your School</option>
                <option value="" disabled="">-------------------</option>
                @foreach($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="students">Name</label>

            <select name="school_id" id="schools" class="form-control">
                <option value="">Select Your Name</option>
                <option value="" disabled="">-------------------</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->last_name.', '.$student->first_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection