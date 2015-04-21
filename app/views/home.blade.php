@extends('layout.default')
@section('content')
	<div class="row" >
    	<div class="large-12 columns" >
    		<div class="panel">
    			<div class="feature-image">
	      			<img src="{{ URL::asset('public/assets/image/bg1.jpg') }}">
	      		</div>
	      		<div class="panel" style= "position: relative;float: right;margin-right:10px;opacity: 0.7;margin-top: -80px;font-style: italic;font-size: 13pt;margin-left: 10px;">
	      			Human Sensory Evaluation System on Mobile Platform<br>
	      			ระบบการประเมินคุณภาพทางประสาทสัมผัส โดยใช้อุปกรณ์แบบพกพา
	      		</div>
	      	</div>
    	</div>
  	</div>
  	<!-- Second Band (Image Left with Text) -->

  	<div class="row">
	    <div class="large-4 columns">
	    	<div class="panel">
	    		<div class="feature-image new">
		      		<img src="{{ URL::asset('public/assets/image/fruit.jpg') }}">
		      	</div>
		      	<h2 class="header">สร้างแบบประเมิน</h2>
		      	<p>
		      		ออกแบบ เพิ่ม ลบแบบประเมินทางประสาทสัมผัสของท่านผ่านทางหน้าเว็บ รวมถึงการจัดการผู้เชี่ยวชาญที่จะเข้าประเมินในแต่ละการทดสอบ ได้ที่เมนูแบบทดสอบ
		      	</p>
		    </div>
	    </div>
	    <div class="large-4 columns">
		    <div class="panel">
		    	<div class="feature-image new">
		     		<img src="{{ URL::asset('public/assets/image/veggy.jpg') }}">
		     	</div>
		     	<h2 class="header">บันทึกการประเมิน</h2>
		      	<p>
					ผู้เชี่ยวชาญทางประสาทสัมผัสบันทึกผลการประเมินทางประสาทสัมผัสที่ได้ ผ่านทางแท็บเล็ต โดยการเลือกแบบประเมินที่ต้องการทำ และส่งผลการประเมินทีและแบบทดสอบ
		      	</p>
		    </div>
	    </div>
	    <div class="large-4 columns">
		    <div class="panel">
		    	<div class="feature-image new">
		     		<img src="{{ URL::asset('public/assets/image/snack.jpg') }}">
		     	</div>
		     	<h2 class="header">สรุปการประเมิน</h2>
		      	<p>
		      		สามารถดูผลการประเมินได้ทันทีผ่านทางหน้าเว็บ นอกจากนี้ยังแสดงค่าทางสถิติ และสามารถนำผลข้อมูลออกในรูปแบบไฟล์เอ็กเซล เพื่อนำไปคำนวณเพิ่มเติมได้อีกด้วย
		      	</p>
		    </div>
	    </div>
  	</div>


@endsection