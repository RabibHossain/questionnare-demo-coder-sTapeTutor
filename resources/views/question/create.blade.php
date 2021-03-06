@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Question</div>

                <div class="card-body">

                    <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" type="question" class="form-control" value="{{ old('question.question') }}"
                             id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple & to-the-point question for best result.</small>
                        
                            @error('question.question')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                            </fieldset>

                            <div>
                                <div class="form-group">
                                    <label for="answer1">Choice 1</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{ old('answers.0.answer') }}"
                                     id="answer1" aria-describedby="answer1Help" placeholder="Enter Choice 1">
                                
                                    @error('answers.0.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer2">Choice 2</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{ old('answers.1.answer') }}"
                                     id="answer2" aria-describedby="answer2Help" placeholder="Enter Choice 2">
                                
                                    @error('answers.1.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer3">Choice 3</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{ old('answers.2.answer') }}"
                                     id="answer3" aria-describedby="answer3Help" placeholder="Enter Choice 3">
                                
                                    @error('answers.2.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <label for="answer4">Choice 4</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="{{ old('answers.3.answer') }}"
                                     id="answer4" aria-describedby="answer4Help" placeholder="Enter Choice 4">
                                
                                    @error('answers.3.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                    
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
