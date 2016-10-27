@extends("layouts.master")

@section("title", "Random User Generator")

{{-- Page content --}}
@section("content")
<div class="container">

    <img src="/img/web_developer_tools.jpg" class="img-responsive home-img" alt="Developer Tools">
    <h1>Random User Generator</h1>
    <div class="well">
        <p>
            To generate random user data, enter the number of random users to be generated and check
            the boxes for the attributes to be included for each user. The first and last nmae have
            been automatically included and are required. The minimum number of users is 1 and the
            maximum number of users is 20. The results will be displayed below the form.
        </p>
    </div>

    <form method="POST" action="/user">
        {{ csrf_field() }}

        <fieldset class="border">
            <legend class="border">Enter Number of Users</legend>
            <div class="form-group">
                <input type="number" class="form-control" id="users" name="numberOfUsers" placeholder="Enter number of users">
            </div>
        </fieldset>

        <fieldset class="border">
            <legend class="border">Select User's Attributes</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="firstName" value="firstName" checked="checked"> First Name</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="lastName" value="lastName" checked="checked"> Last Name</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="username" value="username"> Username</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="password" value="password"> Password</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="streetAddress" value="streetAddress"> Street Address</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="city" value="city"> City</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="state" value="state"> State</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="postcode" value="postcode"> Zip Code</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label><input type="checkbox" name="company" value="company"> Company Name</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="phoneNumber" value="phoneNumber"> Phone Number</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="email" value="email"> Email Address</label>
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="domainName" value="domainName"> Website</label>
                    </div>
                </div>
            </div>
        </fieldset>

        @if(count($errors)> 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="btn btn-primary btn-lg btn-marg">Generate Random Users</button>
    </form>
    <br>

    @if (isset($results))
        <h3>Random Users</h3>
        <p><div class="well well-lg">
            @for ($row = 0; $row < count($results); $row++)
                @php $userRow = $row + 1 @endphp
                <b>User {{ $userRow }}</b>
                <ul>
                    @foreach ($results[$row] as $key => $value)
                        <li><b> {{ $key }}:</b> {{ $value }}
                    @endforeach
                </ul>
            @endfor
        </div></p>
    @endif
</div>
@endsection
