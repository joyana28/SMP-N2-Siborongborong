
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/visimisi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jis-slider.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @include('layouts.frontend.navbar')
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="container">
            <h1>Visi dan Misi</h1>
            <div class="breadcrumb">
                <span>Home</span>
                <span>></span>
                <span>Visi dan Misi</span>
            </div>
        </div>
    </div>
    
    <!-- About Content Section -->
    <div class="about-content">
        <div class="container">
            <div class="about-grid">
                <div class="image-stack">
                    <img src="{{ asset('images/worker1.jpg') }}" alt="Worker in workshop" class="about-image">
                    <img src="{{ asset('images/worker2.jpg') }}" alt="Worker with tools" class="about-image">
                </div>
                <div class="about-text">
                    <h2>About Us</h2>
                    <div class="orange-dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <p>
                        Aliquam quis ex dui ea magna venenatis sed a dolor diam. Nam 
                        cursus a diam tincidunt, gravida urnam malesuada ut.
                    </p>
                    <p>
                        Lorem sit amet sit amet ipsum dolor elit. Proin tempus, 
                        turpis semper a magna, rutrum aliquet nulla ut nibh pulvinar 
                        dui. Sed ac vestibulum diam. Nulla dapibus sapien sed lectus 
                        interdum commodo. Donec interdum magna nec mi vestibulum 
                        hendrerit et.
                    </p>
                    <a href="#" class="about-btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Yellow Strip -->
    <div class="yellow-strip"></div>
    
    <!-- History Section -->
    <div class="history-section">
        <div class="history-container">
            <div class="history-text">
                <h2>Who We are & History</h2>
                <p>
                    Vestibule eleifend semper ultricies. Morbi
                    quis magna in metus vulputate aliquet. Donec
                    a diam massa. Sed at diam ut dolor accumsan
                    dignissim. Fusce ut magna ut libero ultricies
                    hendrerit id volutpat. Fusce eget mi hendrerit,
                    semper turpis sed volutpat. Amet, arcu id
                    turpis a luctus consequat.
                </p>
            </div>
            <div class="history-text">
                <p>
                    Duis hendrerit lobortis. Praesent porta enim
                    quis lacinia at nisl tempor dolor. Vestibulum
                    diam metus, malesuada a neque lobortis,
                    consectetur porttitor justo. Mauris feugiat
                    ipsum et velit molestie et commodo volutpat
                    scelerisque sit amet. Donec rutrum pulvinar
                    accumsan ut at rhoncus velit porttitor.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Vision & Mission Section -->
    <div class="vision-mission">
        <div class="vision-mission-container">
            <div class="vm-box">
                <h3>Vision</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. In quo
                    tempora vitae facere commodo veritatis
                    venitur dolores rem.
                </p>
            </div>
            <div class="vm-box" style="position: relative;">
                <img src="{{ asset('images/worker-mask.jpg') }}" alt="Worker with mask" style="width: 100%; height: auto; border-radius: 5px;">
            </div>
            <div class="vm-box">
                <h3>Mission</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. In quo
                    tempora vitae facere commodo veritatis
                    venitur dolores rem.
                </p>
            </div>
        </div>
    </div>
    
    <!-- Achievement Section -->
    <div class="achievement-section">
        <div class="container">
            <h2>Our Achievement</h2>
            <div class="achievement-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <p class="achievement-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, et labore, fugiat non informative stupit, animi quisquam distinctio ipsa amet.
            </p>
            <div class="awards">
                <div class="award-icon">ISO 9001</div>
                <div class="award-icon">AWARD 1</div>
                <div class="award-icon">AWARD 2</div>
                <div class="award-icon">QR CODE</div>
                <div class="award-icon">CERTIFIED</div>
            </div>
        </div>
    </div>
</body>
</html>
