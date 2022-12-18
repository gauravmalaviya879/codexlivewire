@extends('layouts.app')
@section('title', 'login-user')
@section('styleCustom')
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    form {
        border: 0.5px solid #979595;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        min-width: 100%;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        margin: 25px 0px 0px 0px;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

    .text-center {
        text-align: center
    }
</style>
@endsection
@section('component')
<div class="center">
     <!-- form login -->
     <div style="width: 25rem;">
        <form action="">
            <h2 class="text-center">
                user login
            </h2>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
    
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
    
                <button type="submit">login</button>
            </div>
            <a href="{{ route('registrationUser') }}">user register</a>
        </form>
    </div>
    </div>
      <!-- Page Specific JS File -->
      <script src="{{ asset('assets/js/env.js') }}"></script>
      <script src="{{ asset('assets/js/index.js') }}"></script>
@endsection




