@extends('layouts.app')

@section('content')
   <!--== Page Title Area Start ==-->
   <section id="page-title-area" class="section-padding overlay" style="background-image:url({{ asset('img/page-title.jpg') }})">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>BELGIO CAR</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Contactez nous.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="contect.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" placeholder="Nom complet" name="nom">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" placeholder="Email " name="email">
                                    </div>
                                </div>
                            </div>

                          

                            <div class="message-input">
                                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->
@endsection
