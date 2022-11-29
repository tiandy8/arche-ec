@extends('part.full')

@section('content')

<section class="events">
        <div class="container">

                <div class="pertanda">
                    <h3 class="pos-section">Arche <img src="assets/arrow-right.svg" alt="">
                        <span>Events</span></h3>
                </div>

        <div class="events-wrapper">


            <div class="events-section">
                <div class="events-left">
                    <img src="{{ url('assets/petzoo.jpg') }}" alt="image">
                </div>
                <div class="events-right">
                    <h2>Best Farms And Petting Zoos For Kids In Jakarta</h2>
                    <p>
                        A day at the farm is something we all love to do.
                        Good news city slickers!  Jakarta offers an abundance of great
                        farms that the kids and family can visit together.  Here are some
                        of our favorite farms and petting zoos in and around Jakarta.
                        Go on now – try one this weekend.
                    </p>
                    <small>Tue,27 September 2022</small>
                    <a href="#" class="events-tombol">View More</a>
                </div>
            </div>

            <div class="events-section">
                <div class="events-left">
                    <img src="{{ url('assets/catnip.jpg') }}" alt="image">
                </div>
                <div class="events-right">
                    <h2>Pet Walk 2023</h2>
                    <p>
                        Pet Walk details will announced in 22 april 2023
                    </p>
                    <small>Tue,27 September 2022</small>
                    <a href="#" class="events-tombol">View More</a>
                </div>
            </div>



        </div>


        </div>
</section>

@endsection
