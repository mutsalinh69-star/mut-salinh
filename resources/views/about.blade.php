@extends('layouts.home')

@section('title')
    <title>About Us - UNLIMITED-MEDIA-SALINH</title>
    <link rel="icon" href="{{ asset('img/icon/home.svg') }}" type="image/x-icon">
@endsection

@section('content')
    <!-- Hero Banner -->
    <section class="hero" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%); padding: 60px 20px; color: #ffffff; text-align: center;">
        <div class="container" style="max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">Our Story & Vision</h1>
            <p style="font-size: 1.1rem; color: #cbd5e1;">
                Discover the story, mission, and creative vision behind UNLIMITED-MEDIA-SALINH.
            </p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <div class="container" style="max-width: 1180px; margin: 60px auto; padding: 0 20px;">
        <div class="newsletter" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; margin-bottom: 60px;">
            <div style="flex: 1; min-width: 320px;">
                <h2 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin-bottom: 20px;">Driven by Purpose</h2>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 15px;">
                    Founded with a passion for digital storytelling, <strong>UNLIMITED-MEDIA-SALINH</strong> bridges the gap between creative visual arts and full-stack web engineering.
                </p>
                <p style="color: #475569; line-height: 1.8;">
                    Every project is developed with rigorous attention to detail, modern design principles, and an unwavering commitment to quality and performance.
                </p>
            </div>
            <div class="categories" style="flex: 1; min-width: 320px;">
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                    <div style="padding: 24px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; text-align: center;">
                        <div style="color: #4f46e5; font-weight: 800; font-size: 2rem; margin-bottom: 5px;">99%</div>
                        <div style="font-size: 0.9rem; font-weight: 600; color: #475569;">Client Satisfaction</div>
                    </div>
                    <div style="padding: 24px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; text-align: center;">
                        <div style="color: #4f46e5; font-weight: 800; font-size: 2rem; margin-bottom: 5px;">50+</div>
                        <div style="font-size: 0.9rem; font-weight: 600; color: #475569;">Completed Projects</div>
                    </div>
                    <div style="padding: 24px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; text-align: center;">
                        <div style="color: #4f46e5; font-weight: 800; font-size: 2rem; margin-bottom: 5px;">24/7</div>
                        <div style="font-size: 0.9rem; font-weight: 600; color: #475569;">Dedicated Support</div>
                    </div>
                    <div style="padding: 24px; background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; text-align: center;">
                        <div style="color: #4f46e5; font-weight: 800; font-size: 2rem; margin-bottom: 5px;">100%</div>
                        <div style="font-size: 0.9rem; font-weight: 600; color: #475569;">Creative Focus</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision Columns -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            <div style="background: #f8fafc; padding: 35px; border-radius: 12px; border-left: 5px solid #4f46e5;">
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #1e293b; margin-bottom: 10px;">Our Mission</h3>
                <p style="color: #64748b; line-height: 1.7;">
                    To empower businesses and creators by delivering compelling digital media content and scalable web architectures that produce measurable impact.
                </p>
            </div>

            <div style="background: #f8fafc; padding: 35px; border-radius: 12px; border-left: 5px solid #10b981;">
                <h3 style="font-size: 1.3rem; font-weight: bold; color: #1e293b; margin-bottom: 10px;">Our Vision</h3>
                <p style="color: #64748b; line-height: 1.7;">
                    To be recognized as a leading full-stack creative studio known for innovation, artistic excellence, and modern web solutions.
                </p>
            </div>
        </div>
    </div>
@endsection