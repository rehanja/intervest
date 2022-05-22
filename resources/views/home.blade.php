@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="links">

                    <a href="http://127.0.0.1:8000/guide">HELP & GUIDE SECTION DISPLAY DATA</a>
                    <br>
                    <a href="http://127.0.0.1:8000/help">HELP & GUIDE SECTION ENTER DATA</a>
                    <br>
                    <a href="http://127.0.0.1:8000/report">COVID-19 STAT REPORT</a>
                    <br>
                    <a href="https://github.com/rehanja/intervest">GITHUB REPO LINK</a>
                </div>
                    
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
