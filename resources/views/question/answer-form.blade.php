
<form method="POST" action="/question/answer">
    {{ csrf_field() }}


    <div class="form-group">
        <label for="body">Your answer to this question</label>
        <textarea class="form-control"
                  name="body"
                  placeholder="Body of the answer..."
                  id="myTextarea"
                  rows="10"
                  required>
            {{ old('body') }}
        </textarea>

        {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
    </div>

    <input name="question_id" type="hidden" value="{{ $question->id }}">


    <button type="submit" class="btn btn-default">Answer a question</button>
</form>



