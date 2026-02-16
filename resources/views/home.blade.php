@extends('layout')

@section('title')
    Главная страница
@endsection

@section('main_content')
    <main role="main">
        <div class="jumbotron bg-warning p-4">
            <h1>Главная страницы!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eius, dolor pariatur minima, libero laborum
                sit et fuga ab molestiae dicta ut exercitationem, velit delectus suscipit accusamus. Consequatur, dicta
                sunt.</p>
            <a href="/review" class="btn btn-danger btn-lg" role="button">Отзывы</a>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quae autem fugiat laboriosam cumque
                        eaque, vel laborum saepe fugit assumenda aliquam eum a quos sunt necessitatibus dolore commodi
                        beatae unde.</p>
                    <a href="#" class="btn btn-secondary">Смотреть детали</a>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quae autem fugiat laboriosam cumque
                        eaque, vel laborum saepe fugit assumenda aliquam eum a quos sunt necessitatibus dolore commodi
                        beatae unde.</p>
                    <a href="#" class="btn btn-secondary">Смотреть детали</a>
                </div>
                <div class="col-md-4">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quae autem fugiat laboriosam cumque
                        eaque, vel laborum saepe fugit assumenda aliquam eum a quos sunt necessitatibus dolore commodi
                        beatae unde.</p>
                    <a href="#" class="btn btn-secondary">Смотреть детали</a>
                </div>
            </div>
        </div>
    </main>
@endsection
