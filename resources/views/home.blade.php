@extends('base')

@section('content')

<div class="card w-25 mt-5 mx-auto bg-info text-white">
  <div class="d-flex mt-4 justify-content-center"><p class="mb-0">Main Menu</p></div>
  <hr class="mb-0">
        <div class="card-body d-grid gap-3 mt-0">
            <div class="d-flex flex-column d-grid gap-2">
                <a href="<?= url('/') ?>" class="btn btn-light" aria-current="page">Home</a>
                <a href="<?= url('/categories')?>" class="btn btn-light">Category</a>
                <a href="<?= url('/merchandises')?>" class="btn btn-light">Merchandise</a>
                <a href="<?= url('/units')?>" class="btn btn-light">Unit</a>
            </div>
        </div>
    </div>

@stop