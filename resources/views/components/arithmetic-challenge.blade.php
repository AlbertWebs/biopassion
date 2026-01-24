<?php
$ops = array('-', '+');
$answer = -1;

$num1 = rand(0, 50);
$num2 = rand(0, 15);

$answer = $num1 + $num2;
$uniqueId = 'verify_' . uniqid();
?>
<hr>
<input type="hidden" name="correct_answer" id="correct_answer_{{ $uniqueId }}" value="{{$answer}}">
<input required class="form-control" value="{{$answer}}" type="hidden" id="verify_hidden_{{ $uniqueId }}" name="verify_contact">
<div class="row">
    <div class="col-md-12">
        <label>Are you human? {{$num1}} + {{$num2}} =</label>
        <div class="form-grp">
            <input required class="form-control" value="" type="text" id="verify_input_{{ $uniqueId }}" name="verify_contact_input">
        </div>
    </div>
</div>
<hr>
