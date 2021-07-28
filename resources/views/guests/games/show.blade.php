@extends('layouts.app')

@section('css')
<style>
    .jumbotron {
        margin-bottom: 0px;
    }

    main {
        background-color: #18181d;
        color: white;
    }

    footer {
        background: #161616;

    }

    footer nav .menu a {
        color: #989898;
    }

    footer nav .logo {
        filter: brightness(5);
    }
</style>

@stop


@section('jumbotron')
<div class="jumbotron ea-jumbo d-flex align-items-center justify-content-center"
    style="background-image: url('https://media.contentapi.ea.com/content/dam/eacom/jedi-fallen-order/common/star-wars-jedi-home-hero-xl.jpg.adapt.1456w.jpg'); background-repeat:no-repeat; background-size:cover; background-position: center; height: 400px;">
    <h1 class="text-center py-5 text-white text-uppercase">Star Wars Jedi Fallen Order</h1>


</div>
@endsection

@section('content')
<main>


    <div class="container py-5">

        <header class="text-center py-4">
            <h2>Diventa Un Jedi</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, veritatis aut esse
                saepe
                repellendus iusto ad consectetur provident aspernatur dolor?</p>
        </header>

        <div class="row">
            <div class="col-md-4">
                <h3>Senti la Forza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut necessitatibus adipisci
                    quaerat
                    praesentium facere reprehenderit consequuntur, blanditiis facilis reiciendis dolor quas
                    laudantium itaque, eum possimus aspernatur quibusdam maxime laboriosam.</p>
            </div>
            <div class="col-md-4">
                <h3>Senti la Forza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut necessitatibus adipisci
                    quaerat
                    praesentium facere reprehenderit consequuntur, blanditiis facilis reiciendis dolor quas
                    laudantium itaque, eum possimus aspernatur quibusdam maxime laboriosam.</p>
            </div>
            <div class="col-md-4">
                <h3>Senti la Forza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut necessitatibus adipisci
                    quaerat
                    praesentium facere reprehenderit consequuntur, blanditiis facilis reiciendis dolor quas
                    laudantium itaque, eum possimus aspernatur quibusdam maxime laboriosam.</p>
            </div>
        </div>

    </div>

    <div class="video"
        style="background-image: url('https://media.contentapi.ea.com/content/dam/eacom/jedi-fallen-order/common/star-wars-jedi-trailer-section-bg-xl.jpg.adapt.1456w.jpg'); padding: 3em; display:flex; justify-content:center">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/ysg4JMQXRjg" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>

    </div>


</main>

@endsection