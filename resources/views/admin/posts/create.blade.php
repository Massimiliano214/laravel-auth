@extends('layouts.app')

@section('title', 'Aggiunta Comics')

@section('content')

    <div class="container py-5">

        <form method="POST" action="{{route('comics.store')}}">

            @csrf
    
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" name="title">

                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail dell'immagine:</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}" id="thumb" name="thumb">
                
                @error('thumb')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" name="price">

                @error('price')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}" id="series" name="series">

                @error('series')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="sale_date" class="form-label">Periodo Sconto:</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}" id="sale_date" name="sale_date">

                @error('sale_date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia Comic:</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}" id="type" name="type">

                @error('type')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection