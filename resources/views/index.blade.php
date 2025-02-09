<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div >
        <!-- Navbar -->
        <div class="w-screen" >
            <x-navbar />
        </div>
        <!-- Pages-->
        <!-- Pages.home-->
        <div class="bg-[#f5f7fa]">
            <x-pages.home/>
        </div>
        
        <!-- Pages.service-->
        <x-pages.service/>
        <!-- Pages.feature-->
        <x-pages.feature/>
        <!--Pages.product-->
        <x-pages.product/>
        <!--Pages.testimonial-->
        <x-pages.testimonial/>
        <!--Pages.faq-->
        <x-pages.faq/>
    </div>
</body>

</html>
