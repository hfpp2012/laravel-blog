@extends('layouts.master')

@section('title')
    Blade
@endsection

@section('body')
    <div class="jumbotron">
        <h1 class="display-3">
            Your gender is
            @if($gender == 'male')
                male
            @elseif($gender == 'female')
                female
            @else
                unknown
            @endif
        </h1>
        <p class="lead">
            @unless(empty($text))
                {{ $text }}
            @endunless

            @if(!empty($text))
                {{ $text }}
            @endif
        </p>

        <p>{{ isset($variableDoesNotExist) ? $variableDoesNotExist : 'The variable does not exist' }}</p>
        <p>{{ $variableDoesNotExist or 'This really does not exist' }}</p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
@endsection
