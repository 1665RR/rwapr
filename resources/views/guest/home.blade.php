@extends('layouts.guest')

@section('content')
    @include('partials.guest.header')

    <section id="events" class="events">
        <div class="container">
            <div class="row">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <div class="col-lg-4">
                            <h2><a href="{{ route('events.show', $event->id) }}" class="">{{ $event->title }}</h2></a>
                            <div class="event-meta">
                                <div class="venue"><span class="label label-default">{{ $event->venue }}</span></div>
                                <div class="datetime"><span class="label label-info">{{ $event->start_time }}</span></div>
                            </div>
                        
                        </div>
                        @if ($loop->index > 0 && ($loop->index + 1) % 3 == 0) </div><hr /><div class="row"> @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    
    <section id="onama" class="onama">
        <div class="container">
            <div class="row">

                    
                            
                            <h1>O nama </h1>
                            
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        
                        
                   
            </div>
        </div>
    </section>

@endsection