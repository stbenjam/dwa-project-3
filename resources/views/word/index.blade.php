@extends('layouts.master')

@section('content')

@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@elseif(isset($score))
<div class="alert alert-success" role="alert">
    Your word has a score of <?= $score ?>.
</div>
@endif

<hr />

<div class="page-header">
    <form action="./calculate" method="GET">
        <div class="form-group row required">
            <label for="word" class="col-sm-2 col-form-label">Your word</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="word" name="word" placeholder="Your word" value=" {{ old('word', $word ?? '') }}">
            </div>
        </div>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-legend col-sm-2">Bonus points</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="multiplier" id="multiplier1" value="1" {{ (old('multiplier', $multiplier ?? "1") == "1") ? "checked" : "" }}>

                            None
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="multiplier" id="multiplier2" value="2" {{ (old('multiplier', $multiplier ?? "") == "2") ? "checked" : "" }}>
                            Double
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="multiplier" id="multiplier3" value="3" {{ (old('multi     plier', $multiplier ?? "") == "3") ? "checked" : "" }}>
                            Triple
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <legend class="col-form-legend col-sm-2">Additional Options </legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" id="dictVerify" type="checkbox" name="dictVerify" {{ (old('dictVerify', $dictVerify ?? "")) ? "checked" : "" }}> Validate word in dictionary
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <span class="col-sm-2 col-form-label"></span>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" id="bingoPoints" type="checkbox" name="bingoPoints" {{ (old('bingoPoints', $bingoPoints ?? "")) ? "checked" : "" }}> Include 50 point "bingo"
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="calculate">Calculate</button>
                <a href="." class="btn btn-warning">Reset</a>
            </div>
        </div>
    </form>
</div>
<hr />
@endsection
