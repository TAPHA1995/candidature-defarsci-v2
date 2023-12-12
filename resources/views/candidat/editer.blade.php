@extends('layouts.app')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Editer un candidat</div>
        <div class="card-body">
            <form action="{{route('update.candidat',$candidats->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse Email:</label>
                    <input type="email" name="email" id="email" placeholder="Votre réponse" value="{{ $candidats->email }}" class="form-control my-3">
                </div>
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" placeholder="Votre réponse" value="{{ $candidats->nom }}" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" placeholder="Votre réponse" value="{{ $candidats->prenom }}" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" name="telephone" id="" placeholder="Votre réponse"  value="{{ $candidats->telephone }}" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Adresse Domicile</label>
                    <input type="text" name="adresse" id="" placeholder="Votre réponse" value="{{ $candidats->adresse }}" class="form-control my-3">
                </div>

                <div class="form-group">
                    <label for="">Choisir votre domaine de compétence</label>
                    <select name="domaine" id="" class="form-control my-3" value="{{ $candidats->domaine }}">

                    <option value="{{ $candidats->id_modules->libele }}">{{ $candidats->id_modules->libele }}</option>
                      
                    </select>
                </div>     
                <div class="form-group">
                    <label for="myfile">Télécharger votre CV:</label>
                    <input type="file" id="myfile" name="myfile" accept = "application/pdf" class="form-control my-3" value="{{ $candidats->mylife}}">

                </div>

                <div class="form-group">
                    <label for="">Question/Suggestion/Commentaire</label>
                    <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control my-3" value="{{ $candidats->question}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-success mt-3">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
