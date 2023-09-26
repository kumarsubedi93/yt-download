@extends('layouts')
@section('content')
    <div class="row height d-flex align-items-center">
        <div class="col-md-12">
            <div id="app">
                <thumbnail-getter />
            </div>
            <div class="process mb-25rem">
                <h2 class="t-center"> Way to Download a YouTube video Thumbnail </h2>
                <p class="t-center mb-25rem">A Free tool for downloading YouTube and Vimeo video thumbnail image </p>
                <div class="process-box">
                    <div class="process-item">
                        <i class="fas fa-plus-circle t-center"></i>
                        <p class="t-center mt-1rem bold"> Add Youtube/Vimeo URL </p>
                        <p class="t-center"> Add YouTube or Vimeo video url to corrsponding field.</p>
                    </div>

                    <div class="process-item">
                        <i class="fas fa-hand-point-right t-center"></i>
                        <p class="t-center mt-1rem bold"> Click To Go </p>
                        <p class="t-center"> Youtube or Vimeo video thumbnail automatically generated when you press
                            <b> Go </b> button
                        </p>
                    </div>


                    <div class="process-item">
                        <i class="fas fa-arrow-alt-circle-down  t-center"></i>
                        <p class="t-center mt-1rem bold"> Download </p>
                        <p class="t-center"> Click the Download option to save the YouTube thumbnail picture in .JPG
                            format to your device. </p>
                    </div>

                </div>
            </div>


            <div class="blog-items">
                <h2 class="mb-25rem"> About Youtube Thumbnail dl </h2>
                <p>
                    The video thumbnail associated with a video on platforms like YouTube is the face of the video
                    and can play an important role in whether or not a user decides to click on it.
                </p>

                <p>
                    Typically, you may need separate video thumbnails for a variety of uses: to create a collage of
                    different video thumbnails for your blog post, design a cover photo for your channel using
                    different video thumbnails, use it in a social media post in case it is not automatically
                    generated, etc.
                </p>

                <p>
                    Regardless, it's nice to have a tool that can quickly retrieve and download thumbnails to your
                    device. Our YouTube thumbnail dl does just that. It allows you to create a thumbnail of
                    any YouTube video and download it in just a few seconds <br>
                    {{-- (for Vimeo thumbnails, go <a href=""> here </a>) <br> --}}
                </p>

                <h2 class="mb-25rem"> Here are the following Steps to get the thumbnail on your device </h3>
                <h2 class="mb-25rem"> Get Video URL </h2>

                <img src="{{ asset('assets/images/youtube-blog.png') }}" class="img-fluid" alt="copy url from address bar text" />
                <p class="mt-25rem">
                    To obtain the thumbnail, access the video first, and then copy the URL from the address bar of
                    the web browser.
                    If you are using YouTube mobile app, locate the Share button, then copy the URL to the clipboard
                    on your device.
                </p>
                
                <h2 class="mb-25rem"> Paste URL </h2>
                <p>
                    Paste the URL into the designated field of our thumbnail downloader, and you will instantly view
                    the generated thumbnail in the window on the down side.
                    <br>
                    Now, all you need to do is hit the download button and save the image on your device.
                    <br> <br>
                    That concludes the process. You now have the video thumbnail at your disposal and can utilize it
                    anywhere you like.
                    <br>
                    Nevertheless, please be aware that certain images may be protected by copyright.
                    Therefore, it is essential to address this matter before using the image in a public setting.
                    You may need to request the author's consent, offer attribution, or take other necessary steps
                </p>
            </div>
        </div>
    </div>
@endsection
