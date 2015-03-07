@extends('main');
@section('content');
<div class="container">
	<div class="col-md-2 pull-left" style="color:#000;background:#fff;width:450px;min-height:200px;">
		{{$product}}

	</div>
	

	<div class="col-md-2 pull-left" style="color:#000;background:;width:390px;min-height:200px;">
				<form >
					<div class="form-control"><label>Card number</label><input type="text"><br></div>
					<div class="form-control"><label>Card number</label><input type="text"><br></div>
					<div class="form-control"><label>Card number</label><input type="text"><br></div>
				</form>
	</div>
</div>
@stop;