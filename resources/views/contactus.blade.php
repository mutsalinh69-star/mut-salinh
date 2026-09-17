@extends('layouts.home')

@section('title')  
    <title>Contact Us</title>
    <link rel="icon" href="{{ asset('img/icon/home.svg')}}" type="image/x-icon">
@endsection

@section('style')
    <style>
        .container {
            max-width: 1180px;
            margin: 0 auto;
            line-height: 1.5;
        }
        .site-banner {
            min-height: 250px;
            background-color: #4f46e5;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .heading {
            color: #ffffff;
            text-align: center;
            font-size: 2.5em;
            margin: 0;
            font-family: inherit;
        }
        .footer-wrap {
            display: flex;
            flex-wrap: wrap;
            background-color: #f8fafc;
            padding: 40px 20px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        .footer-col {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }
        .tile-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 20px;
        }
        .contact-row {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .contact-row strong {
            color: #4f46e5;
            min-width: 80px;
        }
        .tile-field {
            margin-left: 10px;
            color: #475569;
        }
        .form-field {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            outline: none;
            transition: border-color 0.2s;
        }
        .form-field:focus {
            border-color: #4f46e5;
        }
        .button {
            color: #ffffff;
            padding: 12px 35px;
            border-radius: 25px;
            background: #4f46e5;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .button:hover {
            background: #3730a3;
        }
    </style>
@endsection

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 40px;">
        <div class="site-banner">
            <h1 class="heading">Contact Us</h1>
        </div>
        <div class="footer-wrap">
            <div class="footer-col">
                <div class="tile-content">
                    <h2>Meet Us</h2>
                    <div class="contact-row">
                        <strong>Phone:</strong><span class="tile-field">+855 95 505 158</span>
                    </div>
                    <div class="contact-row">
                        <strong>Email:</strong><span class="tile-field">mutsalinh69@gmail.com</span>
                    </div>
                    <div class="contact-row">
                        <strong>Location:</strong><span class="tile-field">Siem Reap, Cambodia</span>
                    </div>
                </div>
            </div>
            <div class="footer-col" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div class="tile-content">
                    <form method="POST">
                        @csrf
                        <h2>Send Message</h2>
                        <div class="contact-row">
                            <input type="text" class="form-field" placeholder="Your Name" required>
                        </div>
                        <div class="contact-row">
                            <input type="email" class="form-field" placeholder="Your Email" required>
                        </div>
                        <div class="contact-row">
                            <textarea rows="4" class="form-field" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="button" class="button">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection