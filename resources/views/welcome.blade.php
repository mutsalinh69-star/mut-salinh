@extends('layouts.home')

@section('title')
    <title>Home - UNLIMITED-MEDIA-SALINH</title>
    <link rel="icon" href="{{ asset('img/icon/home.svg') }}" type="image/x-icon">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%); padding: 80px 20px; color: #ffffff; text-align: center;">
        <div class="container" style="max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 20px; line-height: 1.2;">
                Creative Digital Media & Web Design
            </h1>
            <p style="font-size: 1.2rem; color: #cbd5e1; margin-bottom: 35px; line-height: 1.6;">
                Welcome to UNLIMITED-MEDIA-SALINH. We specialize in Graphic Design, Video Editing, 2D Animation, and Modern Web Development to deliver impactful digital experiences.
            </p>
            <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                <a href="{{ url('service') }}" style="background-color: #4f46e5; color: #ffffff; padding: 12px 28px; border-radius: 30px; font-weight: bold; text-decoration: none;">
                    Our Services
                </a>
                <a href="{{ url('contact') }}" style="background-color: transparent; border: 2px solid #ffffff; color: #ffffff; padding: 12px 28px; border-radius: 30px; font-weight: bold; text-decoration: none;">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <div class="container" style="max-width: 1180px; margin: 60px auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 50px;">
            <h2 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Why Choose Our Studio?</h2>
            <p style="color: #64748b; max-width: 650px; margin: 0 auto;">
                Delivering high quality visual assets and digital solutions tailored to your business needs.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div style="background: #ffffff; padding: 35px 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: center;">
                <div style="width: 60px; height: 60px; background: #e0e7ff; color: #4338ca; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-bottom: 12px;">Visual Identity</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Crafting memorable logos, print materials, and brand style guides using industry-standard Adobe tools.
                </p>
            </div>

            <div style="background: #ffffff; padding: 35px 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: center;">
                <div style="width: 60px; height: 60px; background: #e0e7ff; color: #4338ca; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">
                    <i class="fa-solid fa-video"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-bottom: 12px;">Video Production</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Professional timeline editing, color grading, motion graphics, and audio mixing for social campaigns.
                </p>
            </div>

            <div style="background: #ffffff; padding: 35px 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); text-align: center;">
                <div style="width: 60px; height: 60px; background: #e0e7ff; color: #4338ca; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 1.5rem;">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 style="font-size: 1.25rem; font-weight: bold; color: #1e293b; margin-bottom: 12px;">Web Development</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Responsive, robust, and secure web applications built on modern PHP and Laravel architecture.
                </p>
            </div>
        </div>
    </div>
@endsection