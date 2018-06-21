@extends('layouts.app')

@section('content')
    <!-- Productos -->
    <section style="margin-top: 25px"footer-container id="productos-container">
        <div class="container">
            <a class="btn btn-primary" href="{{ Route('plate.create') }}" role="button">Добавить пластнку</a>

            <div style="margin-top: 25px" class="row">


                <!-- Productos -->
                <div class="col-12">
                    <div class="row">
                        @if(!empty($plates))
                            @foreach($plates as $plate)
                        <div style="margin-bottom: 15px" class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img width="350" height="350" class="card-img-top" src="{{ $plate->img }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $plate->name }}</h4>
                                    <p class="card-text">{{ $plate->description }}</p>
                                </div>
                                <a class="btn btn-primary" href="{{ Route('plate.edit', $plate->id) }}" role="button">Редактировать</a>
                                <form method="post" action="{{ Route('plate.destroy', $plate->id) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button style="margin-top: 10px" type="submit" class="col-12 btn btn-danger">Удалить</button>
                                </form>

                            </div>
                        </div>

                        @endforeach
                        @endif
                        <!--пагинация -->
                        <div class="col-12 m-3">
                            <div class="row justify-content-center">
                                <div class="pagination-container ">
                                    <nav>
                                        {{ $plates->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--пагинация -->
                    </div>
                    <!-- Productos -->
                </div>
            </div>
        </div>
    </section>
    <!-- Productos -->
@endsection
