@extends('layouts.app')

@section('jumbotron')
<div class="jumbotron ea-jumbo">
    <h1 class="text-center py-5 text-white text-uppercase">Giochi d'azione di ea</h1>

    <hr class="my-2">

</div>
@endsection

@section('content')

<main class="py-4">

    <div class="container games">
        <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure porro minima a distinctio ad
            iste.
            Debitis fuga cumque voluptas consequatur nisi possimus id. Quisquam vitae delectus ipsum doloribus, quae
            tenetur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, atque! Porro, unde quam. Quibusdam ex natus
            culpa
            deserunt officiis, architecto quo doloremque fuga animi. Ratione aliquid soluta reprehenderit similique a.
        </p>
        <div class="row">
            <div class="col-md-4 pb-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2019/04/star-wars-jedi-home-hero-large-xl.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Star Wars Jedy - Fallen Order</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4 pb-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4 pb-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="game">
                    <img src="https://media.contentapi.ea.com/content/dam/gin/images/2021/06/battlefield-2042-key-art.jpg.adapt.crop1x1.767p.jpg"
                        alt="">
                    <h4>Game Title</h4>
                </div>
            </div>


        </div>

        <nav aria-label="Page navigation" class="d-flex justify-content-center">
            <ul class="pagination bg-dark">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</main>
@endsection