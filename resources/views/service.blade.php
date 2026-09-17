@extends('layouts.home')

@section('title')
    <title>Services - UNLIMITED-MEDIA-SALINH</title>
    <link rel="icon" href="{{ asset('img/icon/home.svg') }}" type="image/x-icon">
@endsection

@section('content')
    <!-- Banner Header -->
    <section style="background: #4f46e5; padding: 60px 20px; color: #ffffff; text-align: center;">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">Our Creative Services</h1>
            <p style="font-size: 1.1rem; color: #e0e7ff;">
                Comprehensive Digital Media and Web Design Solutions
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <div class="container" style="max-width: 1180px; margin: 60px auto; padding: 0 20px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            
            <!-- Service 1 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-bezier-curve"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">Graphic Design & Branding</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Custom vector logos, brand identities, promotional posters, and publication layouts designed with Adobe Illustrator and Photoshop.
                </p>
            </div>

            <!-- Service 2 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-film"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">Video Editing & Color Grading</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Cinematic editing, Lumetri color matching, transition pacing, and sound design for short-form clips and commercial advertisements.
                </p>
            </div>

            <!-- Service 3 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-play"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">2D Animation & Motion Graphics</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    2D character rigging, puppet animation, kinetic typography, and motion graphics for explainer videos and educational stories.
                </p>
            </div>

            <!-- Service 4 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-camera"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">Photography & Retouching</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Studio lighting setups, commercial product photography, and high-end photo retouching for print and digital campaigns.
                </p>
            </div>

            <!-- Service 5 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-laptop-code"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">Web Design & Development</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Custom responsive websites, portfolio showcases, and dynamic management systems developed with Laravel and Tailwind CSS.
                </p>
            </div>

            <!-- Service 6 -->
            <div style="background: #ffffff; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 2px 5px rgba(0,0,0,0.04);">
                <div style="font-size: 2rem; color: #4f46e5; margin-bottom: 15px;"><i class="fa-solid fa-bullhorn"></i></div>
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #0f172a; margin-bottom: 10px;">Social Media Content Strategy</h3>
                <p style="color: #64748b; line-height: 1.6; font-size: 0.95rem;">
                    Hook formulation, visual storytelling, caption copywriting, and analytics-driven content delivery for social channels.
                </p>
            </div>
        </div>
    </div>
@endsection