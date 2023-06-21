@extends('layouts.default')
@section('content')

<div class="container">
        <h1 class="mt-3">Contact Us</h1>
        <div class="row mt-2">
            <div class="col-md-6 pb-5">
                <h3>Send us a message</h3>
                <form action="/submit" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            <div class="col-md-6 ps-5">
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> 123 Main Street, City, State, Country</p>
                <p><strong>Phone:</strong> 123-456-7890</p>
                <p><strong>Email:</strong> info@example.com</p>
            </div>
        </div>
    </div>

@stop